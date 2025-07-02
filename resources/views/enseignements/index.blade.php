@extends('layouts.base')

@section('title', 'Enseignement')

@section('content')
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold">Enseignements</h1>
                <p class="lead text-muted">Retrouvez toutes les enseignements</p>
            </div>
        </div>

        <!-- Filtres et recherche -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Rechercher une pensée..." id="searchInput">
                    <button class="btn btn-primary" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-6 text-md-end">
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="filterDropdown"
                        data-bs-toggle="dropdown">
                        <i class="bi bi-funnel"></i> Filtrer par thème
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Tous les thèmes</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        {{-- @foreach ($themes as $theme)
                            <li><a class="dropdown-item" href="#">{{ $theme }}</a></li>
                        @endforeach --}}
                    </ul>
                </div>
            </div>
        </div>

        <!-- Liste des pensées -->
        <div class="row" id="penseesContainer">
            @forelse($enseignements as $pensee)
                <div class="col-lg-6 mb-4">
                    <div class="card pensee-card h-100">
                        <div class="card-header bg-primary text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-light text-primary">{{ $pensee->tag }}</span>
                                <small
                                    class="text-muted">{{ $pensee->created_at->locale('fr')->diffForHumans() }} - {{$pensee->created_at->format('d/m/Y')}}</small>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 card-title">{{ $pensee->titre }}</h3>
                            <div class="bible-verse my-3">
                                <i class="bi bi-quote text-primary opacity-25"></i>
                                "{!! $pensee->contenu !!}"
                                <div class="text-end mt-2 text-muted">- {{ $pensee->verset }}</div>
                            </div>
                            <p class="card-text">{{ $pensee->exhortation }}</p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="reactions">
                                    <button class="btn btn-sm btn-outline-secondary me-2">
                                        <i class="bi bi-heart"></i> {{ $pensee->likes_count }}
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary">
                                        <i class="bi bi-chat"></i> {{ $pensee->comments_count }}
                                    </button>
                                </div>
                                <a href="{{ route('enseignements.show', $pensee) }}" class="btn btn-sm btn-primary">
                                    Lire plus <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-center py-5">
                            <i class="bi bi-journal-x text-muted" style="font-size: 3rem;"></i>
                            <h4 class="mt-3">Aucune pensée disponible</h4>
                            <p class="text-muted">Revenez plus tard pour découvrir nos nouvelles méditations</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        {{-- Previous Page Link --}}
                        @if ($enseignements->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">
                                    <i class="bi bi-chevron-left"></i>
                                </span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $enseignements->previousPageUrl() }}" rel="prev">
                                    <i class="bi bi-chevron-left"></i>
                                </a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($enseignements->getUrlRange(1, $enseignements->lastPage()) as $page => $url)
                            @if ($page == $enseignements->currentPage())
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">{{ $page }}</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($enseignements->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $enseignements->nextPageUrl() }}" rel="next">
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link">
                                    <i class="bi bi-chevron-right"></i>
                                </span>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        /* Boutons */
        .btn-gradient {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border: none;
            color: white;
            font-weight: 600;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(58, 123, 213, 0.3);
        }

        .bible-verse {
            font-style: italic;
            border-left: 3px solid #3a7bd5;
            padding-left: 15px;
            margin: 20px 0;
            position: relative;
        }

        .bible-verse i.bi-quote {
            position: absolute;
            top: -10px;
            left: -5px;
            opacity: 0.2;
            font-size: 3rem;
        }

        .pensee-content {
            line-height: 1.8;
            font-size: 1.1rem;
        }

        .pensee-content p {
            margin-bottom: 1.5rem;
        }
    </style>
@endsection
