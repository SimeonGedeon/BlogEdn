@extends('layouts.app')

@section('title', 'Évangélisation')

@section('content')

    <section class="evangelism-hero">
        <div class="container text-center position-relative" style="z-index: 1;">
            <h1 class="display-4 fw-bold mb-4">Le Chemin du Salut</h1>
            <p class="lead mb-5">Découvrez les étapes bibliques pour rencontrer Jésus-Christ</p>
            <div class="bible-verse" id="dynamicVerse">
                "Car Dieu a tant aimé le monde qu'il a donné son Fils unique, afin que quiconque croit en lui ne périsse
                point, mais qu'il ait la vie éternelle." - Jean 3:16
            </div>
            <a href="#salvationPath" class="btn btn-light btn-lg px-4">
                <i class="bi bi-arrow-down me-2"></i>Commencer le parcours
            </a>
        </div>
    </section>

    <!-- Salvation Path Section -->
    <section id="salvationPath" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center mb-5">
                    <h2>Le Chemin du Salut selon Romains</h2>
                </div>

                <div class="col-lg-6 col-md-8">
                    <!-- Barre de progression centrée -->
                    <div class="progress-container mb-4">
                        <div class="progress-steps">
                            <span class="step active">1</span>
                            <span class="step">2</span>
                            <span class="step">3</span>
                            <span class="step">4</span>
                            <span class="step">5</span>
                            <span class="step">6</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" id="salvationProgress"></div>
                        </div>
                    </div>

                    <!-- Conteneur des cartes -->
                    <div class="salvation-path-container">
                        <!-- Carte 1 -->
                        <div class="salvation-card active" id="card1">
                            <div class="card-image"
                                style="background-image: url('https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80');">
                                <div class="card-header">
                                    <h3>Étape 1: Le problème du péché</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="scripture-verse">
                                    "Car tous ont péché et sont privés de la gloire de Dieu"
                                    <div class="scripture-ref">Romains 3:23</div>
                                </div>
                                <p class="card-text">Nous sommes tous séparés de Dieu par nos péchés.</p>
                                <div class="navigation-buttons">
                                    <button class="btn btn-primary next-btn" onclick="showNextCard(1)">Suivant <i
                                            class="bi bi-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Carte 2 -->
                        <div class="salvation-card" id="card2">
                            <div class="card-image"
                                style="background-image: url('https://images.unsplash.com/photo-1508511267-5edd661c7a3f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80');">
                                <div class="card-header">
                                    <h3>Étape 2: La conséquence du péché</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="scripture-verse">
                                    "Car le salaire du péché, c'est la mort; mais le don gratuit de Dieu, c'est la vie
                                    éternelle en
                                    Jésus-Christ notre Seigneur."
                                    <div class="scripture-ref">Romains 6:23</div>
                                </div>
                                <p class="card-text">Sans Christ, nous sommes condamnés à la mort éternelle.</p>
                                <div class="navigation-buttons">
                                    <button class="btn btn-outline-secondary prev-btn" onclick="showPrevCard(2)"><i
                                            class="bi bi-arrow-left me-2"></i> Retour</button>
                                    <button class="btn btn-primary next-btn" onclick="showNextCard(2)">Suivant <i
                                            class="bi bi-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Carte 3 -->
                        <div class="salvation-card" id="card3">
                            <div class="card-image"
                                style="background-image: url('https://images.unsplash.com/photo-1508962914676-134849a727f0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80');">
                                <div class="card-header">
                                    <h3>Étape 3: L'amour de Dieu</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="scripture-verse">
                                    "Mais Dieu prouve son amour envers nous, en ce que, lorsque nous étions encore des
                                    pécheurs,
                                    Christ est mort pour nous."
                                    <div class="scripture-ref">Romains 5:8</div>
                                </div>
                                <p class="card-text">Dieu nous aime malgré nos péchés et a offert Jésus comme sacrifice.</p>
                                <div class="navigation-buttons">
                                    <button class="btn btn-outline-secondary prev-btn" onclick="showPrevCard(3)"><i
                                            class="bi bi-arrow-left me-2"></i> Retour</button>
                                    <button class="btn btn-primary next-btn" onclick="showNextCard(3)">Suivant <i
                                            class="bi bi-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Carte 4 -->
                        <div class="salvation-card" id="card4">
                            <div class="card-image"
                                style="background-image: url('https://images.unsplash.com/photo-1507835661098-8d9d01a0f4ba?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80');">
                                <div class="card-header">
                                    <h3>Étape 4: La réponse nécessaire</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="scripture-verse">
                                    "Si tu confesses de ta bouche le Seigneur Jésus, et si tu crois dans ton cœur que Dieu
                                    l'a
                                    ressuscité des morts, tu seras sauvé."
                                    <div class="scripture-ref">Romains 10:9-10</div>
                                </div>
                                <p class="card-text">Le salut s'obtient par la foi en Jésus et la confession de son nom.</p>
                                <div class="navigation-buttons">
                                    <button class="btn btn-outline-secondary prev-btn" onclick="showPrevCard(4)"><i
                                            class="bi bi-arrow-left me-2"></i> Retour</button>
                                    <button class="btn btn-primary next-btn" onclick="showNextCard(4)">Suivant <i
                                            class="bi bi-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Carte 5 -->
                        <div class="salvation-card" id="card5">
                            <div class="card-image"
                                style="background-image: url('https://images.unsplash.com/photo-1533227268428-f9ed0900fb3b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80');">
                                <div class="card-header">
                                    <h3>Étape 5: Prière du salut</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Voici une prière pour accepter Christ :</p>
                                <div class="prayer-box">
                                    <p>"Seigneur Jésus, je reconnais que je suis pécheur. Je crois que tu es mort pour mes
                                        péchés et
                                        ressuscité. Je t'invite dans ma vie comme mon Sauveur et Seigneur. Merci pour ton
                                        pardon et
                                        ta vie éternelle. Amen."</p>
                                </div>
                                <div class="navigation-buttons">
                                    <button class="btn btn-outline-secondary prev-btn" onclick="showPrevCard(5)"><i
                                            class="bi bi-arrow-left me-2"></i> Retour</button>
                                    <button class="btn btn-success next-btn" onclick="showNextCard(5)"><i
                                            class="bi bi-check-circle me-2"></i> J'ai prié cette prière</button>
                                </div>
                            </div>
                        </div>

                        <!-- Carte 6 -->
                        <div class="salvation-card" id="card6">
                            <div class="card-image"
                                style="background-image: url('https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80');">
                                <div class="card-header">
                                    <h3>Félicitations !</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <i class="bi bi-check-circle-fill text-success" style="font-size: 3rem;"></i>
                                </div>
                                <p>Si tu as sincèrement prié cette prière, tu es maintenant un enfant de Dieu !</p>
                                <p class="fw-bold">👉 Trouve une église biblique pour grandir dans ta foi.</p>
                                <div class="scripture-verse">
                                    "Celui qui croit au Fils a la vie éternelle."
                                    <div class="scripture-ref">Jean 3:36</div>
                                </div>

                                <hr class="my-4">

                                <h5 class="mb-3">Restons en contact</h5>
                                <form id="salvationContactForm" method="POST" action="{{-- {{ route('salvation.contact') }} --}}">
                                    @csrf

                                    <div class="mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="Ton nom"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Ton email" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="tel" name="phone" class="form-control"
                                            placeholder="Ton téléphone (optionnel)">
                                    </div>
                                    <div class="mb-3">
                                        <textarea name="message" class="form-control" rows="3" placeholder="Un message (optionnel)"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">
                                        <i class="bi bi-send me-2"></i> Envoyer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Styles pour le conteneur principal */
        .salvation-path-container {
            position: relative;
            min-height: 400px;
        }

        /* Styles pour les cartes */
        .salvation-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            display: none;
            overflow: hidden;
        }

        .salvation-card.active {
            opacity: 1;
            transform: translateY(0);
            display: block;
            position: relative;
        }

        /* Image de la carte */
        .card-image {
            height: 200px;
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: flex-end;
        }

        /* En-tête des cartes */
        .card-header {
            padding: 15px 20px;
            width: 100%;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: white;
        }

        .card-header h3 {
            margin: 0;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        /* Corps des cartes */
        .card-body {
            padding: 20px;
        }

        /* Styles pour les versets bibliques */
        .scripture-verse {
            font-style: italic;
            background: #f8f9fa;
            padding: 15px;
            border-left: 3px solid var(--primary);
            margin-bottom: 15px;
        }

        .scripture-ref {
            font-weight: bold;
            text-align: right;
            margin-top: 5px;
            font-style: normal;
        }

        /* Boîte de prière */
        .prayer-box {
            background: #f0f8ff;
            border-left: 3px solid #3a7bd5;
            padding: 15px;
            margin: 15px 0;
            font-style: italic;
        }

        /* Barre de progression améliorée */
        .progress-container {
            position: relative;
            margin: 30px 0;
        }

        .progress-bar {
            height: 8px;
            background: #e9ecef;
            border-radius: 4px;
            overflow: hidden;
            margin-top: 25px;
        }

        .progress-fill {
            height: 100%;
            background: var(--primary);
            width: 0%;
            transition: width 0.5s ease;
        }

        .progress-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
            z-index: 2;
        }

        .step {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #e9ecef;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            border: 3px solid white;
        }

        .step.active {
            background: var(--primary);
            color: white;
        }

        /* Boutons de navigation */
        .navigation-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        /* Adaptation mobile */
        @media (max-width: 768px) {
            .navigation-buttons {
                flex-direction: column;
                gap: 10px;
            }

            .prev-btn,
            .next-btn {
                width: 100%;
            }

            .progress-steps .step {
                width: 25px;
                height: 25px;
                font-size: 0.8rem;
            }

            .card-image {
                height: 150px;
            }
        }
    </style>

    <script>
        // Gestion des cartes
        let currentCard = 1;
        const totalCards = 6;

        function showCard(cardNumber) {
            // Masquer toutes les cartes
            document.querySelectorAll('.salvation-card').forEach(card => {
                card.classList.remove('active');
            });

            // Afficher la carte sélectionnée
            const card = document.getElementById(`card${cardNumber}`);
            card.classList.add('active');

            // Mettre à jour la progression
            currentCard = cardNumber;
            updateProgress();

            // Mettre à jour les étapes actives
            updateActiveSteps();

            // Faire défiler jusqu'à la carte si ce n'est pas la première
            if (cardNumber > 1) {
                card.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }

        function showNextCard() {
            if (currentCard < totalCards) {
                showCard(currentCard + 1);
            }
        }

        function showPrevCard() {
            if (currentCard > 1) {
                showCard(currentCard - 1);
            }
        }

        function updateProgress() {
            const progress = ((currentCard - 1) / (totalCards - 1)) * 100;
            document.getElementById('salvationProgress').style.width = `${progress}%`;
        }

        function updateActiveSteps() {
            document.querySelectorAll('.progress-steps .step').forEach((step, index) => {
                if (index < currentCard) {
                    step.classList.add('active');
                } else {
                    step.classList.remove('active');
                }
            });
        }

        // Soumission du formulaire
        document.getElementById('salvationContactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Merci ! Nous te contacterons bientôt pour t\'accompagner dans ta nouvelle foi.');
            // Ici vous pourriez ajouter l'envoi AJAX du formulaire
        });

        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            updateProgress();
            updateActiveSteps();
        });
    </script>
@endsection
