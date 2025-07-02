@extends('admin.app')

@section('title', 'Tableau de bord - Publication')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#dashboard" data-bs-toggle="tab">
                                <i class="bi bi-speedometer2 me-2"></i>Tableau de bord
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pensee" data-bs-toggle="tab">
                                <i class="bi bi-sun me-2"></i>Pensée du jour
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#enseignement" data-bs-toggle="tab">
                                <i class="bi bi-book me-2"></i>Enseignement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#etude" data-bs-toggle="tab">
                                <i class="bi bi-journal-text me-2"></i>Étude biblique
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#motivation" data-bs-toggle="tab">
                                <i class="bi bi-emoji-smile me-2"></i>Motivation
                            </a>
                        </li>
                    </ul>
                    <hr class="border border-1 border-dark">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-bar-chart me-2"></i>Analytiques
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-people me-2"></i>Abonnés
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Tableau de bord de publication</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-download"></i> Exporter
                            </button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i> Prévisualiser
                        </button>
                    </div>
                </div>

                <div class="tab-content">
                    <!-- Dashboard Overview -->
                    <div class="tab-pane fade show active" id="dashboard">
                        <div class="row">
                            <div class="col-md-3 mb-4">
                                <div class="card bg-primary text-white h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Pensées publiées</h5>
                                        <h2 class="mb-0">142</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="card bg-success text-white h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Enseignements</h5>
                                        <h2 class="mb-0">56</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="card bg-info text-white h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Études bibliques</h5>
                                        <h2 class="mb-0">23</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="card bg-warning text-dark h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Motivations</h5>
                                        <h2 class="mb-0">87</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0">Dernières publications</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Titre</th>
                                                <th>Type</th>
                                                <th>Date</th>
                                                <th>Statut</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>La puissance de la prière</td>
                                                <td><span class="badge bg-primary">Pensée</span></td>
                                                <td>15/11/2023</td>
                                                <td><span class="badge bg-success">Publié</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary"><i
                                                            class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-sm btn-outline-danger"><i
                                                            class="bi bi-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Étude sur Hébreux 11</td>
                                                <td><span class="badge bg-info">Étude</span></td>
                                                <td>14/11/2023</td>
                                                <td><span class="badge bg-warning">Brouillon</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary"><i
                                                            class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-sm btn-outline-danger"><i
                                                            class="bi bi-trash"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pensée du Jour Form -->
                    <div class="tab-pane fade" id="pensee" data-show="pensee-form">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Nouvelle Pensée du Jour</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('pensees.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="etudeTitle" class="form-label">Titre</label>
                                        <input type="text" class="form-control" id="titre" name="titre"
                                            placeholder="Étude sur le livre des Hébreux">
                                    </div>
                                    <div class="mb-3">
                                        <label for="verset" class="form-label">Verset biblique</label>
                                        <input type="text" class="form-control" id="verset" name="verset"
                                            placeholder="Hébreux 11:1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contenu" class="form-label">Contenu</label>
                                        <textarea class="form-control" id="contenu" name="contenu" rows="5"
                                            placeholder="Écrivez votre pensée inspirante ici..."></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exhortation" class="form-label">Exhortation</label>
                                        <textarea class="form-control" id="enseignementContent" name="exhortation" rows="20"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="hashtags" class="form-label">Hashtag</label>
                                        <input type="text" class="form-control" id="hashtags" name="hashtags"
                                            placeholder="#Foi #Chrétienete">
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image (optionnelle)</label>
                                        <input class="form-control" type="file" id="image" name="image">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="est_publie"
                                            name="est_publie" value="1">
                                        <label class="form-check-label" for="est_publie">Publier immédiatement</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Enseignement Form -->
                    <div class="tab-pane fade" id="enseignement">
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                <h5 class="mb-0">Nouvel Enseignement</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('enseignements.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="enseignementTitle" class="form-label">Titre</label>
                                        <input type="text" class="form-control" id="enseignementTitle" name="titre"
                                            placeholder="Les fondements de la foi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="enseignementCategory" class="form-label">Catégorie</label>
                                        <select class="form-select" id="enseignementCategory" name="categorie" required>
                                            <option value="">Choisir une catégorie</option>
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="enseignementContentf" class="form-label">Contenu</label>
                                        <textarea class="form-control" id="enseignementContentf" name="contenu" rows="10"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="enseignementImage" class="form-label">Image principale</label>
                                            <input class="form-control" type="file" id="enseignementImage"
                                                name="img">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="hastag" class="form-label">Hastag</label>
                                            <input type="text" class="form-control" id="hastag" name="hastag"
                                                placeholder="#Foi #Chrétienete">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-4">
                                        <button type="submit" name="est_publie" value="0"
                                            class="btn btn-outline-secondary">
                                            Enregistrer comme brouillon
                                        </button>
                                        <button type="submit" name="est_publie" value="1" class="btn btn-success">
                                            <i class="bi bi-send"></i> Publier l'enseignement
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Étude Biblique Form -->
                    <div class="tab-pane fade" id="etude">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h5 class="mb-0">Nouvelle Étude Biblique</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="etudeTitle" class="form-label">Titre</label>
                                        <input type="text" class="form-control" id="etudeTitle"
                                            placeholder="Étude sur le livre des Hébreux">
                                    </div>
                                    <div class="mb-3">
                                        <label for="etudeReference" class="form-label">Référence biblique</label>
                                        <input type="text" class="form-control" id="etudeReference"
                                            placeholder="Hébreux 11:1-40">
                                    </div>
                                    <div class="mb-3">
                                        <label for="etudeContent" class="form-label">Contenu détaillé</label>
                                        <textarea class="form-control" id="etudeContent" rows="12"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="etudeImage" class="form-label">Image</label>
                                            <input class="form-control" type="file" id="etudeImage">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="etudeTags" class="form-label">Mots-clés</label>
                                            <input type="text" class="form-control" id="etudeTags"
                                                placeholder="foi, hébreux, étude">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button type="button" class="btn btn-outline-info me-2">
                                                <i class="bi bi-journal-plus"></i> Ajouter une section
                                            </button>
                                        </div>
                                        <div>
                                            <button type="button"
                                                class="btn btn-outline-secondary me-2">Brouillon</button>
                                            <button type="submit" class="btn btn-info">Publier l'étude</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Motivation Form -->
                    <div class="tab-pane fade" id="motivation">
                        <div class="card">
                            <div class="card-header bg-warning text-dark">
                                <h5 class="mb-0">Nouveau Message de Motivation</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Type de motivation</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="motivationType"
                                                id="motivationEncouragement" checked>
                                            <label class="form-check-label" for="motivationEncouragement">
                                                Encouragement
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="motivationType"
                                                id="motivationHumour">
                                            <label class="form-check-label" for="motivationHumour">
                                                Humour chrétien
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="motivationTitle" class="form-label">Titre</label>
                                        <input type="text" class="form-control" id="motivationTitle"
                                            placeholder="Dieu a un plan pour vous">
                                    </div>
                                    <div class="mb-3">
                                        <label for="motivationContent" class="form-label">Message</label>
                                        <textarea class="form-control" id="motivationContent" rows="5"
                                            placeholder="Écrivez votre message motivant ici..."></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="enseignementImage" class="form-label">Image principale</label>
                                            <input class="form-control" type="file" id="enseignementImage">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="hastag" class="form-label">Hastag</label>
                                            <input type="text" class="form-control" id="hastag"
                                                placeholder="#Foi #Chrétienete">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-outline-secondary">Enregistrer comme
                                            brouillon</button>
                                        <button type="submit" class="btn btn-warning">Publier la motivation</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        /* Sidebar styling */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: #333;
            padding: 0.75rem 1rem;
            border-radius: 0.25rem;
            margin-bottom: 0.25rem;
        }

        .sidebar .nav-link.active {
            color: #fff;
            background-color: var(--primary-color);
        }

        .sidebar .nav-link:hover:not(.active) {
            background-color: rgba(58, 123, 213, 0.1);
        }

        /* Main content area */
        main {
            padding-top: 1.5rem;
        }

        /* Card styling */
        .card-header {
            font-weight: 600;
            padding: 1rem 1.25rem;
        }

        /* Form elements */
        textarea.form-control {
            min-height: 150px;
        }

        /* Badge styling */
        .badge {
            font-weight: 500;
            padding: 0.35em 0.65em;
        }

        /* Table styling */
        .table-hover tbody tr:hover {
            background-color: rgba(58, 123, 213, 0.05);
        }

        /* Responsive adjustments */
        @media (max-width: 767.98px) {
            .sidebar {
                position: static;
                height: auto;
                padding-top: 0;
            }

            main {
                padding-top: 0;
            }
        }
    </style>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#enseignementContentf'), {
                toolbar: [
                    'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote',
                    'undo', 'redo', '|', 'fontColor', 'fontBackgroundColor'
                ]
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#enseignementContent'), {
                toolbar: [
                    'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote',
                    'undo', 'redo', '|', 'fontColor', 'fontBackgroundColor'
                ]
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        // Initialisation des fonctionnalités JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            // Activer les tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });

            // Gestion des onglets
            var tabEls = document.querySelectorAll('a[data-bs-toggle="tab"]')
            tabEls.forEach(function(tabEl) {
                tabEl.addEventListener('shown.bs.tab', function(event) {
                    event.target // newly activated tab
                    event.relatedTarget // previous active tab
                })
            });
        });

        document.querySelectorAll('.dropdown-item[data-show]').forEach(function(item) {
            item.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('data-show');

                // Cacher tous les formulaires
                document.querySelectorAll('.tab-pane').forEach(function(pane) {
                    pane.classList.remove('show', 'active');
                });

                // Afficher le formulaire cible
                const targetForm = document.getElementById(targetId);
                if (targetForm) {
                    targetForm.classList.add('show', 'active');
                }
            });
        });
    </script>
@endsection
