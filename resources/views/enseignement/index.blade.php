@extends('layouts.app')

@section('title', 'Enseignement')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Message quand aucun enseignement -->
                <div class="col-12">
                    <div class="card message-card text-center p-5 border-dashed">
                        <div class="card-body">
                            <div class="empty-state-icon mb-4">
                                <i class="bi bi-book" style="font-size: 3rem; color: var(--primary-color);"></i>
                            </div>
                            <h3 class="h4" style="color: var(--primary-color);">Section en préparation</h3>
                            <p class="text-muted mb-4">Nous préparons des enseignements bibliques pour votre
                                édification.<br>Revenez bientôt ou abonnez-vous pour être informé.</p>
                            <a href="" class="btn btn-gradient">
                                <i class="bi bi-envelope me-2"></i>Recevoir les nouveaux enseignements
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end mt-5">
                <a href="{{ route('home') }}" class="btn btn-gradient">Revenir sur la page d'acceuil</a>
            </div>
        </div>
    </section>
    {{-- <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h1 class="h3 mb-0">{{ $pensee->titre }}</h1>
                            <span class="badge bg-primary">{{ $pensee->date_publication->format('d/m/Y') }}</span>
                        </div>
                        <div class="bible-verse bg-light p-4 mb-4 rounded">
                            <i class="bi bi-quote text-primary fs-1"></i>
                            <blockquote class="mb-0 fs-5">{{ $pensee->contenu }}</blockquote>
                            <footer class="blockquote-footer mt-2">{{ $pensee->verset }}</footer>
                        </div>

                        <div class="pensee-content mb-4">
                            {!! $pensee->exhortation !!}
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="share-buttons">
                                <a href="#" class="btn btn-sm btn-outline-secondary me-2">
                                    <i class="bi bi-heart"></i> 24
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-secondary me-2">
                                    <i class="bi bi-chat"></i> 5
                                </a>
                            </div>

                            <div>
                                <a href="#" class="btn btn-sm btn-outline-primary me-2">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-primary me-2">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-share"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('pensees.index') }}" class="btn btn-primary">
                        <i class="bi bi-arrow-left"></i> Retour aux pensées
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
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
