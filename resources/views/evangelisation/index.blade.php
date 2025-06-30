@extends('layouts.app')

@section('title', 'Évangélisation')

@section('content')

    <section class="evangelism-hero">
        <div class="container text-center position-relative" style="z-index: 1;">
            <h1 class="display-4 fw-bold mb-4">Rencontrez Jésus-Christ</h1>
            <p class="lead mb-5">Découvrez l'amour de Dieu et la transformation qu'Il offre</p>
            <div class="bible-verse" id="dynamicVerse">
                "Car Dieu a tant aimé le monde qu'il a donné son Fils unique, afin que quiconque croit en lui ne périsse
                point, mais qu'il ait la vie éternelle." - Jean 3:16
            </div>
            <a href="#decision" class="btn btn-light btn-lg px-4">
                <i class="bi bi-arrow-down me-2"></i>Je veux connaître Jésus
            </a>
        </div>
    </section>

    <!-- Decision Section -->
    <section id="decision" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Où en êtes-vous dans votre foi ?</h2>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="step-card">
                        <div class="text-center mb-4">
                            <i class="bi bi-heart-fill text-primary" style="font-size: 2.5rem;"></i>
                        </div>
                        <h3 class="text-center mb-3">Je veux accepter Jésus</h3>
                        <p>Découvrez comment recevoir Christ dans votre vie et devenir enfant de Dieu.</p>
                        <div class="text-center mt-3 text-primary">
                            <a href="{{ route('accepter-jesus') }}" class="text-primary text-decoration-none">
                                <i class="bi bi-arrow-right"></i> Cliquez pour commencer
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="step-card" onclick="showSection('churchSection')">
                        <div class="text-center mb-4">
                            <i class="bi bi-geo-alt-fill text-primary" style="font-size: 2.5rem;"></i>
                        </div>
                        <h3 class="text-center mb-3">Trouver une église</h3>
                        <p>Connectez-vous avec une communauté chrétienne près de chez vous pour grandir dans la foi.</p>
                        <div class="text-center mt-3 text-primary">
                            <i class="bi bi-arrow-right"></i> Cliquez pour découvrir
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="step-card" onclick="showSection('growthSection')">
                        <div class="text-center mb-4">
                            <i class="bi bi-book-fill text-primary" style="font-size: 2.5rem;"></i>
                        </div>
                        <h3 class="text-center mb-3">Ressources pour grandir</h3>
                        <p>Vous êtes déjà chrétien ? Découvrez des ressources pour approfondir votre relation avec Dieu.</p>
                        <div class="text-center mt-3 text-primary">
                            <i class="bi bi-arrow-right"></i> Cliquez pour explorer
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Church Finder Section -->
    <section id="churchSection" class="py-5 bg-light" style="display: none;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Trouver une église près de chez vous</h2>
                <button class="btn btn-outline-secondary" onclick="hideSection('churchSection')">
                    <i class="bi bi-x"></i>
                </button>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div id="churchMap"></div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title">Églises recommandées</h4>
                            <div id="churchList" class="list-group mt-3">
                                <div class="list-group-item">
                                    <h5>Église de la Grâce</h5>
                                    <p>12 Rue de la Foi, 75000 Paris</p>
                                    <small><i class="bi bi-telephone"></i> 01 23 45 67 89</small>
                                </div>
                                <div class="list-group-item">
                                    <h5>Centre Chrétien Évangélique</h5>
                                    <p>34 Avenue de l'Espérance, 75000 Paris</p>
                                    <small><i class="bi bi-telephone"></i> 01 34 56 78 90</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Growth Resources Section -->
    <section id="growthSection" class="py-5" style="display: none;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Ressources pour votre croissance spirituelle</h2>
                <button class="btn btn-outline-secondary" onclick="hideSection('growthSection')">
                    <i class="bi bi-x"></i>
                </button>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title"><i class="bi bi-journal-bookmark-fill text-primary me-2"></i> Études
                                bibliques</h4>
                            <p class="card-text">Approfondissez votre connaissance de la Bible avec nos études thématiques.
                            </p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Commencer</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title"><i class="bi bi-headphones text-primary me-2"></i> Podcasts</h4>
                            <p class="card-text">Écoutez des enseignements inspirants où que vous soyez.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Écouter</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title"><i class="bi bi-people-fill text-primary me-2"></i> Groupes de maison
                            </h4>
                            <p class="card-text">Rejoignez une communauté en ligne pour partager et prier.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Rejoindre</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prayer Modal -->
    <div class="modal fade" id="prayerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Prière de salut</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Si vous voulez accepter Jésus-Christ comme votre Sauveur personnel, vous pouvez prier cette prière :
                    </p>

                    <div class="p-4 bg-light rounded my-3">
                        <p>"Seigneur Jésus, je reconnais que j'ai besoin de toi. Je crois que tu es mort sur la croix pour
                            mes péchés et que tu es ressuscité. Je t'ouvre la porte de ma vie et je te reçois comme mon
                            Sauveur et Seigneur. Merci de me pardonner mes péchés et de me donner la vie éternelle. Prends
                            le contrôle de ma vie et fais de moi la personne que tu veux que je sois. Amen."</p>
                    </div>

                    <p class="text-center">Si vous avez prié cette prière, félicitations ! Vous êtes maintenant un enfant
                        de Dieu.</p>

                    <div class="text-center mt-4">
                        <button class="btn btn-primary me-2" onclick="showNextSteps()">
                            <i class="bi bi-check-circle-fill me-2"></i>J'ai prié cette prière
                        </button>
                        <button class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Fermer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Next Steps Modal -->
    <div class="modal fade" id="nextStepsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Prochaines étapes</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <i class="bi bi-emoji-smile-fill text-primary" style="font-size: 3rem;"></i>
                        <h4 class="mt-3">Félicitations !</h4>
                    </div>

                    <p>Vous venez de faire le plus important choix de votre vie. Voici quelques conseils pour bien commencer
                        :</p>

                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">Lisez la Bible quotidiennement (commencez par l'Évangile de Jean)</li>
                        <li class="list-group-item">Priez chaque jour pour développer votre relation avec Dieu</li>
                        <li class="list-group-item">Trouvez une église locale pour vous connecter à d'autres croyants</li>
                        <li class="list-group-item">Téléchargez notre guide "Premiers pas avec Christ"</li>
                    </ol>

                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-primary me-2">
                            <i class="bi bi-download me-2"></i>Télécharger le guide
                        </a>
                        <button class="btn btn-outline-primary"
                            onclick="showSection('churchSection'); $('#nextStepsModal').modal('hide');">
                            <i class="bi bi-geo-alt me-2"></i>Trouver une église
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Help Button -->
    <div class="floating-btn" onclick="showHelpModal()">
        <i class="bi bi-question-lg"></i>
    </div>

    <!-- Help Modal -->
    <div class="modal fade" id="helpModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Besoin d'aide ?</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Nous sommes là pour vous aider dans votre démarche spirituelle. Choisissez une option :</p>

                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-outline-primary text-start" data-bs-dismiss="modal"
                            onclick="showSection('churchSection')">
                            <i class="bi bi-geo-alt-fill me-2"></i> Je veux parler à un pasteur
                        </button>
                        <button class="btn btn-outline-primary text-start" data-bs-dismiss="modal">
                            <i class="bi bi-envelope-fill me-2"></i> Contactez-moi par email
                        </button>
                        <button class="btn btn-outline-primary text-start" data-bs-dismiss="modal">
                            <i class="bi bi-telephone-fill me-2"></i> Appelez-moi
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        :root {
            --primary: #3a7bd5;
            --secondary: #00d2ff;
            --dark-blue: #1a3a7a;
            --light: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            padding-top: 70px;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .evangelism-hero {
            background: linear-gradient(135deg, var(--dark-blue), var(--primary));
            color: white;
            padding: 8rem 0 4rem;
            position: relative;
            overflow: hidden;
        }

        .evangelism-hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://source.unsplash.com/random/1200x800/?cross,jesus') center/cover;
            opacity: 0.15;
            z-index: 0;
        }

        .step-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            height: 100%;
            transition: all 0.3s;
            border-left: 5px solid var(--primary);
            cursor: pointer;
        }

        .step-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .bible-verse {
            font-style: italic;
            border-left: 3px solid var(--primary);
            padding-left: 15px;
            margin: 20px 0;
            transition: opacity 0.5s ease;
        }

        #churchMap {
            height: 400px;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .floating-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            z-index: 100;
            cursor: pointer;
            transition: all 0.3s;
        }

        .floating-btn:hover {
            transform: scale(1.1);
            background: var(--dark-blue);
        }

        @media (max-width: 768px) {
            body {
                padding-top: 60px;
            }

            .evangelism-hero {
                padding: 6rem 0 3rem;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Gestion des sections
        function showSection(sectionId) {
            document.getElementById(sectionId).style.display = 'block';
            document.getElementById(sectionId).scrollIntoView({
                behavior: 'smooth'
            });
        }

        function hideSection(sectionId) {
            document.getElementById(sectionId).style.display = 'none';
            document.getElementById('decision').scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Versets bibliques dynamiques
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                document.getElementById('dynamicVerse').style.opacity = '1';
            }, 1000);

            const verses = [
                '"Je ne vous laisserai pas orphelins, je viendrai à vous." - Jean 14:18',
                '"Venez à moi, vous tous qui êtes fatigués et chargés, et je vous donnerai du repos." - Matthieu 11:28',
                '"Si quelqu\'un est en Christ, il est une nouvelle créature." - 2 Corinthiens 5:17'
            ];

            let currentVerse = 0;
            setInterval(() => {
                const verseElement = document.getElementById('dynamicVerse');
                verseElement.style.opacity = '0';

                setTimeout(() => {
                    currentVerse = (currentVerse + 1) % verses.length;
                    verseElement.textContent = verses[currentVerse];
                    verseElement.style.opacity = '1';
                }, 500);
            }, 8000);
        });

        function showNextSteps() {
            $('#prayerModal').modal('hide');
            setTimeout(() => {
                $('#nextStepsModal').modal('show');
            }, 300);
        }

        function showHelpModal() {
            $('#helpModal').modal('show');
        }

        // Initialisation des sections masquées
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('churchSection').style.display = 'none';
            document.getElementById('growthSection').style.display = 'none';
        });
    </script>

@endsection
