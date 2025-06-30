@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container text-center hero-content">
            <h1 class="display-3 fw-bold mb-4">Évangéliste du Net</h1>
            <p class="lead mb-5">Proclamer l'Évangile à l'ère numérique avec passion et innovation</p>
            <a href="#mission" class="btn btn-light btn-lg px-4">
                <i class="bi bi-arrow-down me-2"></i>Découvrir
            </a>
        </div>
    </header>

    <!-- Notre Mission -->
    <section id="mission" class="section bg-light">
        <div class="container">
            <h2 class="text-center section-title">Notre Mission</h2>
            <p class="text-center lead mb-5">Transformer des vies à travers la puissance de l'Évangile et des technologies
            </p>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="bi bi-megaphone"></i>
                        </div>
                        <h3>Évangélisation Digitale</h3>
                        <p>Utiliser les plateformes numériques pour atteindre les générations actuelles avec le message
                            intemporel de l'Évangile.</p>
                        <ul>
                            <li>Réseaux sociaux</li>
                            <li>Applications mobiles</li>
                            <li>Contenus multimédias</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="bi bi-book"></i>
                        </div>
                        <h3>Formation Biblique</h3>
                        <p>Développer des ressources innovantes pour une étude approfondie et accessible des Écritures.</p>
                        <ul>
                            <li>Études interactives</li>
                            <li>Cours en ligne</li>
                            <li>Outils d'analyse</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <h3>Communauté Chrétienne</h3>
                        <p>Connecter les croyants à travers le monde pour l'édification mutuelle et le partage de foi.</p>
                        <ul>
                            <li>Groupes de discussion</li>
                            <li>Réseau de prière</li>
                            <li>Partage de ressources</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Notre Équipe -->
    <section id="team" class="section">
        <div class="container">
            <h2 class="text-center section-title">Notre Équipe</h2>
            <p class="text-center lead mb-5">Découvrez les visages derrière ce ministère</p>

            <div class="row">
                <div class="col-lg-4 col-md-6">

                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <img src="{{ asset('image/sigedeon.png') }}" class="team-img" alt="EdN Sigédéon">
                        <h4>Siméon G. Kimbungu</h4>
                        <p class="text-muted">Fondateur & Directeur</p>
                        <p>Évangeliste et expert en communication digitale</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">

                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary">
                <i class="bi bi-people-fill me-2"></i>Rencontrer toute l'équipe
            </a>
        </div>
        </div>
    </section>

    <!-- Qui sommes-nous -->
    <section id="about" class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="section-title">Qui sommes-nous</h2>
                    <p class="lead">Un ministère dédié à l'évangélisation numérique depuis 2010</p>
                    <p>Évangéliste du Net est né de la conviction que les nouvelles technologies pouvaient devenir de
                        puissants outils pour le Royaume de Dieu. Fondé par le Pasteur Jean D., notre ministère a touché
                        plus d'un million de personnes à travers le monde.</p>
                    <p>Nous croyons en une approche équilibrée combinant profondeur théologique et innovation technologique,
                        pour rendre la Parole de Dieu accessible à tous.</p>
                    <div class="mt-4">
                        <a href="#" class="btn btn-primary me-2">
                            <i class="bi bi-book me-2"></i>Notre confession de foi
                        </a>
                        <a href="#" class="btn btn-outline-primary">
                            <i class="bi bi-history me-2"></i>Notre histoire
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID" title="Présentation du ministère"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chiffres clés -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="stats-item">
                        <div class="stats-number">12+</div>
                        <p>Années de service</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-item">
                        <div class="stats-number">1M+</div>
                        <p>Personnes touchées</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-item">
                        <div class="stats-number">50+</div>
                        <p>Églises partenaires</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-item">
                        <div class="stats-number">500+</div>
                        <p>Ressources produites</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Témoignages -->
    <section id="testimonials" class="section">
        <div class="container">
            <h2 class="text-center section-title">Ils témoignent</h2>
            <p class="text-center lead mb-5">Découvrez l'impact de ce ministère</p>

            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            <p>Grâce aux études bibliques en ligne, ma compréhension des Écritures a radicalement changé. Je
                                recommande à tous !</p>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <img src="https://randomuser.me/api/portraits/women/63.jpg" width="50" height="50"
                                class="rounded-circle me-3" alt="Témoignage">
                            <div>
                                <h5 class="mb-0">Marie L.</h5>
                                <small class="text-muted">Étudiante, Paris</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            <p>Les ressources gratuites ont transformé notre petite église. Nous avons doublé notre audience
                                en ligne en 6 mois.</p>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" width="50" height="50"
                                class="rounded-circle me-3" alt="Témoignage">
                            <div>
                                <h5 class="mb-0">Pasteur David</h5>
                                <small class="text-muted">Église de la Grâce, Lyon</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            <p>J'ai trouvé Christ à travers une campagne Facebook. Aujourd'hui je sers dans mon église
                                locale grâce à ce ministère.</p>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <img src="https://randomuser.me/api/portraits/men/22.jpg" width="50" height="50"
                                class="rounded-circle me-3" alt="Témoignage">
                            <div>
                                <h5 class="mb-0">Thomas R.</h5>
                                <small class="text-muted">Nouveau converti, Marseille</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contactez-nous -->
    <section id="contact" class="section bg-light">
        <div class="container">
            <h2 class="text-center section-title">Contactez-nous</h2>
            <p class="text-center lead mb-5">Nous sommes à votre écoute pour toute question ou collaboration</p>

            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="contact-info">
                        <div class="contact-item mb-4">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Adresse</h4>
                                <p>Kisenso Kinshasa, RDC</p>
                            </div>
                        </div>

                        <div class="contact-item mb-4">
                            <div class="contact-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Téléphone</h4>
                                <p>+243 827 991 842</p>
                            </div>
                        </div>

                        <div class="contact-item mb-4">
                            <div class="contact-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Email</h4>
                                <p>contact@evangelistedunet.org</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-clock-fill"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Heures d'ouverture</h4>
                                <p>Lundi - Vendredi: 9h - 17h</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-form">
                        <form action="{{-- {{ route('contact.submit') }} --}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Votre nom</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Votre email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Sujet</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Votre message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-send-fill me-2"></i>Envoyer le message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('styles')
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
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--dark-blue), var(--primary));
            color: white;
            padding: 6rem 0 4rem;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://source.unsplash.com/random/1200x800/?bible,study') center/cover;
            opacity: 0.15;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        /* Sections */
        .section {
            padding: 5rem 0;
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.6s ease;
        }

        .section.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .section-title {
            font-weight: 700;
            margin-bottom: 2rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--primary);
            border-radius: 2px;
        }

        /* Notre Mission */
        .mission-card {
            background: white;
            border-radius: 15px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            height: 100%;
            transition: transform 0.3s;
            border-left: 5px solid var(--primary);
        }

        .mission-card:hover {
            transform: translateY(-10px);
        }

        .mission-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
        }

        /* Équipe */
        .team-member {
            text-align: center;
            margin-bottom: 2rem;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.5s ease;
        }

        .team-member.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .team-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin: 0 auto 1rem;
            transition: all 0.2s;
        }

        .team-member:hover .team-img {
            transform: scale(1.05);
            border-color: var(--primary);
        }

        /* Témoignages */
        .testimonial-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            margin: 1rem;
            border-top: 4px solid var(--primary);
        }

        .testimonial-text {
            font-style: italic;
            position: relative;
            padding-left: 1.5rem;
        }

        .testimonial-text::before {
            content: "";
            position: absolute;
            left: 0;
            top: -10px;
            font-size: 3rem;
            color: rgba(58, 123, 213, 0.2);
        }

        /* Chiffres clés */
        .stats-item {
            text-align: center;
            padding: 2rem;
        }

        .stats-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section {
                padding: 4rem 0 2rem;
            }

            .section {
                padding: 3rem 0;
            }
        }

        /* Correction pour l'espace sous la navbar */
        .navbar {
            margin-bottom: 0 !important;
            /* Enlève tout espace sous la navbar */
        }

        .hero-section {
            padding-top: 8rem;
            /* Augmente l'espace au-dessus du contenu hero */
            margin-top: -4rem;
            /* Compense l'espace ajouté */
        }

        /* Contact Section */
        .contact-info {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: var(--primary);
            margin-top: 0.3rem;
        }

        .contact-form {
            background: white;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .contact-form .form-control {
            padding: 0.75rem 1rem;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
        }

        .contact-form .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(58, 123, 213, 0.25);
        }
    </style>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Animation au scroll
    document.addEventListener('DOMContentLoaded', function() {
        // Animate on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.section, .team-member');
            const windowHeight = window.innerHeight;

            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const elementVisible = 150;

                if (elementPosition < windowHeight - elementVisible) {
                    element.classList.add('animate');
                }
            });
        }

        // Initial check
        animateOnScroll();

        // Listen to scroll events
        window.addEventListener('scroll', animateOnScroll);

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
