@extends('layouts.base')

@section('title', 'Amour de Dieu')

@section('content')
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold">Pensées du Jour</h1>
                <p class="lead text-muted">Retrouvez toutes les méditations quotidiennes</p>
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
            @forelse($pensees as $pensee)
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
                                "{{ $pensee->contenu }}"
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
                                <a href="{{ route('pensees.show', $pensee->id) }}" class="btn btn-sm btn-primary">
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
                        @if ($pensees->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">
                                    <i class="bi bi-chevron-left"></i>
                                </span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $pensees->previousPageUrl() }}" rel="prev">
                                    <i class="bi bi-chevron-left"></i>
                                </a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($pensees->getUrlRange(1, $pensees->lastPage()) as $page => $url)
                            @if ($page == $pensees->currentPage())
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
                        @if ($pensees->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $pensees->nextPageUrl() }}" rel="next">
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
        /* Style pour les icônes des boutons précédent/suivant */
        .page-item .bi {
            font-size: 0.8rem;
        }

        .pensee-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .pensee-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(58, 123, 213, 0.15);
        }

        .bible-verse {
            font-style: italic;
            padding: 1rem;
            background-color: rgba(58, 123, 213, 0.05);
            border-radius: 8px;
            position: relative;
        }

        .bible-verse i.bi-quote {
            position: absolute;
            font-size: 3rem;
            opacity: 0.1;
            top: -5px;
            left: 5px;
        }

        /* Style personnalisé pour la pagination */
        .pagination .page-item.active .page-link {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .pagination .page-link {
            color: var(--primary);
            margin: 0 5px;
            border-radius: 5px;
        }

        .pagination .page-link:hover {
            background-color: rgba(58, 123, 213, 0.1);
        }
    </style>
@endsection

@section('scripts')
    <script>
        // Fonctionnalité de recherche (AJAX)
        document.getElementById('searchInput').addEventListener('keyup', function(e) {
            if (e.key === 'Enter') {
                const query = this.value;

                fetch(`/pensees/search?q=${query}`)
                    .then(response => response.json())
                    .then(data => {
                        const container = document.getElementById('penseesContainer');
                        container.innerHTML = '';

                        if (data.length > 0) {
                            data.forEach(pensee => {
                                container.innerHTML += `
                                <div class="col-lg-6 mb-4">
                                    <div class="card pensee-card h-100">
                                        <div class="card-header bg-primary text-white">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge bg-light text-primary">${pensee.tag}</span>
                                                <small>${new Date(pensee.date_publication).toLocaleDateString()}</small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="h5 card-title">${pensee.titre}</h3>
                                            <div class="bible-verse my-3">
                                                <i class="bi bi-quote text-primary opacity-25"></i>
                                                "${pensee.contenu}"
                                                <div class="text-end mt-2 text-muted">- ${pensee.verset}</div>
                                            </div>
                                            <p class="card-text">${pensee.exhortation}</p>
                                        </div>
                                    </div>
                                </div>
                            `;
                            });
                        } else {
                            container.innerHTML = `
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body text-center py-5">
                                        <i class="bi bi-search text-muted" style="font-size: 3rem;"></i>
                                        <h4 class="mt-3">Aucun résultat trouvé</h4>
                                        <p class="text-muted">Essayez avec d'autres termes de recherche</p>
                                    </div>
                                </div>
                            </div>
                        `;
                        }
                    });
            }
        });
    </script>
@endsection
