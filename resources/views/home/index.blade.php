@extends('layouts.base')

@section('title', 'Accueil')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <!-- Pensée du Jour -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title fw-bold">Pensée du Jour</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    @if ($hasPensees)
                        <div class="card message-card latest-message mb-5">
                            <div class="share-buttons">
                                <a href="#" class="share-btn facebook-btn" title="Partager sur Facebook">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="#" class="share-btn twitter-btn" title="Partager sur Twitter">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                <a href="#" class="share-btn whatsapp-btn" title="Partager sur WhatsApp">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                                <a href="sms:?body=Je%20partage%20ce%20message%20avec%20toi" class="share-btn sms-btn"
                                    title="Partager par SMS">
                                    <i class="bi bi-chat-text"></i>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <span class="badge bg-primary me-2">Nouveau</span>
                                    <small class="text-muted">{{ $pensedujr->create_at }}</small>
                                </div>
                                <h3 class="card-title h4"> {{ $pensedujr->titre }} </h3>
                                <p class="bible-verse mb-3">"Or la foi est une ferme assurance des choses qu'on espère, une
                                    démonstration de celles qu'on ne voit pas." (Hébreux 11:1)</p>
                                <p class="card-text">Dans ce message, nous explorons comment mettre notre foi en action dans
                                    les défis quotidiens. La foi n'est pas seulement une croyance passive, mais une force
                                    active qui transforme nos vies et nos circonstances. Apprenons à exercer cette foi
                                    vivante qui plaît à Dieu.</p>
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <a href="#" class="btn btn-primary">Lire le message complet</a>
                                    <div>
                                        <span class="text-muted me-3"><i class="bi bi-heart"></i> 24</span>
                                        <span class="text-muted"><i class="bi bi-chat"></i> 5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card message-card mb-5">
                            <div class="card-body p-4 text-center">
                                <div class="empty-state-icon mb-3">
                                    <i class="bi bi-exclamation-circle text-warning" style="font-size: 3rem;"></i>
                                </div>
                                <h3 class="h4 text-muted mb-3">Aucune pensée du jour disponible</h3>
                                <p class="text-muted">Nous rencontrons actuellement un problème technique pour charger la
                                    pensée du jour. Notre équipe travaille à résoudre ce problème au plus vite.</p>
                                <p class="text-muted mb-4">En attendant, nous vous invitons à :</p>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="bi bi-book me-1"></i> Lire la Bible
                                    </a>
                                    <a href="#" class="btn btn-outline-secondary">
                                        <i class="bi bi-archive me-1"></i> Voir les archives
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Dernières Exhortations -->
    <section class="py-4">
        <div class="container">
            <h2 class="section-title fw-bold">Dernières Exhortations</h2>
            <div class="row g-4">
                @if (!$hasPensees)
                    <div class="card message-card mb-5">
                        <div class="card-body p-4 text-center">
                            <div class="empty-state-icon mb-3">
                                <i class="bi bi-exclamation-circle text-warning" style="font-size: 3rem;"></i>
                            </div>
                            <h3 class="h4 text-muted mb-3">Aucune pensée du jour disponible</h3>
                            <p class="text-muted">Nous rencontrons actuellement un problème technique pour charger la
                                pensée du jour. Notre équipe travaille à résoudre ce problème au plus vite.</p>
                            <p class="text-muted mb-4">En attendant, nous vous invitons à :</p>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-book me-1"></i> Lire la Bible
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="bi bi-archive me-1"></i> Voir les archives
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($pensees as $item)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card message-card h-100 story-card">
                                <!-- Header avec image de fond optionnelle -->
                                <div class="card-header-img"
                                    style="background-image: url('https://source.unsplash.com/random/400x300/?faith,christian?{{ $loop->index }}');">
                                    <div class="card-date-overlay">
                                        <span class="badge bg-primary">{{ $item->created_at->format('d/m/Y') }}</span>
                                    </div>
                                </div>

                                <div class="card-body p-4">
                                    <!-- Tag et catégorie -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="badge bg-secondary">{{ $item->tag }}</span>
                                        <small
                                            class="text-muted">{{ $item->created_at->locale('fr')->diffForHumans() }}</small>
                                    </div>


                                    <!-- Contenu principal -->
                                    <h5 class="card-title mb-3">{{ Str::limit($item->titre, 50) }}</h5>
                                    <div class="bible-verse mb-3">
                                        <i class="bi bi-quote text-primary"></i> "{{ $item->contenu }}"
                                        <small class="d-block text-end mt-1">- {{ $item->verset }}</small>
                                    </div>

                                    <p class="card-text">{{ Str::limit($item->exhortation, 120) }}</p>

                                    <!-- Footer de la carte -->
                                    <div class="card-footer bg-transparent border-top-0 pt-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="reaction-buttons">
                                                <button class="btn btn-sm btn-outline-secondary me-2">
                                                    <i class="bi bi-heart"></i> <span class="count">24</span>
                                                </button>
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="bi bi-chat"></i> <span class="count">5</span>
                                                </button>
                                            </div>
                                            <a href="{{ route('pensees.show', $item->id) }}"
                                                class="btn btn-sm btn-primary">
                                                Lire plus <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Boutons de partage (apparaissent au survol) -->
                                <div class="share-buttons">
                                    <a href="#" class="share-btn facebook-btn" title="Partager sur Facebook">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                    <a href="#" class="share-btn twitter-btn" title="Partager sur Twitter">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                    <a href="#" class="share-btn whatsapp-btn" title="Partager sur WhatsApp">
                                        <i class="bi bi-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="text-end mt-1">
                        <a href="{{ route('pensees.index') }}" class="btn btn-gradient">Voir toutes les Exhortations</a>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Enseignements -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title fw-bold">Enseignements</h2>
            <div class="row g-4">
                <!-- Message 1 -->
                {{-- @dump($enseignements) --}}
                @foreach ($enseignements as $enseignement)
                    <div class="col-md-6 col-lg-4">
                        <div class="card message-card h-100">
                            <div class="share-buttons">
                                <a href="#" class="share-btn facebook-btn"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="share-btn twitter-btn"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="share-btn whatsapp-btn"><i class="bi bi-whatsapp"></i></a>
                                <a href="sms:?body=Je%20partage%20ce%20message%20avec%20toi" class="share-btn sms-btn"><i
                                        class="bi bi-chat-text"></i></a>
                            </div>
                            <div class="card-body p-4">
                                <small class="text-muted d-block mb-2">{{ $enseignement->created_at->format('d/m/Y') }} - {{ $enseignement->created_at->locale('fr')->diffForHumans() }} </small>
                                <h3 class="card-title h5"></h3>
                                <p class="bible-verse mb-3">"Ma grâce te suffit, car ma puissance s'accomplit dans la
                                    faiblesse." (2 Corinthiens 12:9)</p>
                                <p class="card-text">Découvrez comment la grâce de Dieu comble tous nos besoins dans chaque
                                    situation...</p>
                                <a href="{{ route('enseignements.show', $enseignement) }}"
                                    class="btn btn-outline-pr*imary btn-sm">Lire</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="text-end mt-5">
                    <a href="{{ route('enseignements.index') }}" class="btn btn-gradient">Voir toutes les
                        enseignements</a>
                </div>
            </div>
    </section>

    <!-- Section Motivations -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title fw-bold">Motivations, Humour, Pensée inspirée...</h2>
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
                            <a href="#" class="btn btn-gradient">
                                <i class="bi bi-envelope me-2"></i>Recevoir les nouveaux enseignements
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end mt-5">
                <a href="{{-- {{ route('pensees.index') }} --}}" class="btn btn-gradient">Afficher les autres messages</a>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        :root {
            --primary-color: #3a7bd5;
            --secondary-color: #00d2ff;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)),
                url('https://source.unsplash.com/random/1200x800/?cross,faith');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 6rem 0;
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-top: 1rem;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.3), rgba(107, 99, 99, 0.1));
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        /* Cartes de messages */
        .message-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            height: 100%;
            position: relative;
        }

        .message-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .message-card.border-dashed {
            border: 2px dashed rgba(58, 123, 213, 0.3) !important;
            background-color: rgba(250, 250, 255, 0.8);
        }

        .latest-message {
            border-left: 5px solid var(--primary-color);
        }

        .bible-verse {
            font-style: italic;
            color: var(--primary-color);
            border-left: 3px solid var(--primary-color);
            padding-left: 1rem;
        }

        /* Section Titles */
        .section-title {
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }

        .section-title:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-color);
        }

        /* Boutons de partage */
        .share-buttons {
            position: absolute;
            top: 15px;
            right: 15px;
            display: none;
        }

        .message-card:hover .share-buttons {
            display: flex;
        }

        .share-btn {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 5px;
            color: white;
            font-size: 14px;
            transition: all 0.2s;
        }

        .share-btn:hover {
            transform: scale(1.1);
        }

        .facebook-btn {
            background-color: #3b5998;
        }

        .twitter-btn {
            background-color: #1DA1F2;
        }

        .whatsapp-btn {
            background-color: #25D366;
        }

        .sms-btn {
            background-color: #6c757d;
        }

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

        /* État vide */
        .empty-state-icon {
            opacity: 0.8;
            transition: transform 0.3s ease;
        }

        .message-card:hover .empty-state-icon {
            transform: scale(1.1);
            opacity: 1;
        }

        /* Animation pulsée subtile */
        @keyframes gentlePulse {
            0% {
                opacity: 0.8;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0.8;
            }
        }

        .empty-state-icon i {
            animation: gentlePulse 3s infinite;
            font-size: 3rem;
            color: var(--primary-color);
        }
    </style>
@endsection
