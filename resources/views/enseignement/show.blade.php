@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <!-- Header article -->
    <header class="article-header">
        <div class="container text-center position-relative" style="z-index: 1;">
            <div class="badge bg-light text-primary mb-3">Article</div>
            <h1 class="article-title display-4">La mise à jour de notre pensée</h1>
            <div class="article-meta justify-content-center">
                <img src="{{ asset('image/sigedeon.png') }}" alt="Auteur" class="author-img">
                <div class="text-start">
                    <p class="mb-0 fw-bold">Par Siméon G. Kimbungu</p>
                    <small>Publié le 15 novembre 2023 • 5 min de lecture</small>
                </div>
            </div>
        </div>
    </header>
    <!-- Contenu principal -->
    <main class="container">
        <article class="article-content">
            <!-- Image mise en avant -->
            <img src="{{ asset('image/image1.jpg') }}" alt="Image article" class="img-fluid rounded-3 mb-4 w-100">

            <!-- Verset biblique -->
            <blockquote class="verse">
                "Ne vous conformez pas au siècle présent, mais soyez transformés par le renouvellement de l'intelligence."
                (Romains 12:2)
            </blockquote>

            <!-- Contenu texte -->
            <div class="article-body">
                <h2 class="h4">Introduction</h2>
                <p>Dans un monde en constante évolution, notre manière de penser a besoin d'être régulièrement mise à jour,
                    tout comme nous le faisons avec nos applications mobiles. La Bible nous invite à un renouvellement
                    profond de notre intelligence.</p>

                <h2 class="h4 mt-5">1. Le processus de transformation</h2>
                <p>La transformation de notre pensée n'est pas un événement ponctuel, mais un processus continu. Comme
                    l'apôtre Paul le souligne, il s'agit d'un renouvellement qui impacte toute notre manière de percevoir le
                    monde.</p>

                <div class="blockquote-custom">
                    <p>Une pensée renouvelée produit une vie transformée. Ce que nous méditons façonne progressivement notre
                        caractère.</p>
                </div>

                <h2 class="h4 mt-5">2. Les sources de notre pensée</h2>
                <p>Nos pensées sont influencées par diverses sources :</p>
                <ul>
                    <li>Les médias que nous consommons</li>
                    <li>Les relations que nous entretenons</li>
                    <li>Nos expériences passées</li>
                    <li>La Parole de Dieu</li>
                </ul>

                <h2 class="h4 mt-5">Conclusion</h2>
                <p>Prendre le temps de mettre à jour notre pensée selon les vérités bibliques est essentiel pour vivre une
                    vie chrétienne épanouie. Comme un logiciel qui reçoit des mises à jour pour mieux fonctionner, notre
                    intelligence a besoin de cette transformation régulière.</p>
            </div>

            <!-- Section partage -->
            <div class="share-section text-center">
                <h3 class="h5 mb-3">Partager cette pensée</h3>
                <a href="#" class="share-btn bg-primary"><i class="bi bi-facebook"></i></a>
                <a href="#" class="share-btn bg-primary"><i class="bi bi-twitter"></i></a>
                <a href="#" class="share-btn bg-primary"><i class="bi bi-whatsapp"></i></a>
                <a href="#" class="share-btn bg-primary"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="share-btn bg-primary"><i class="bi bi-link-45deg"></i></a>
            </div>

            <!-- Auteur -->
            <div class="author-card card mb-5 border-0 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="https://source.unsplash.com/random/200x200/?pastor" class="img-fluid rounded-start"
                            alt="Auteur">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h3 class="card-title">Siméon G. Kimbungu</h3>
                            <p class="card-text">Evangéliste et enseignant biblique, Siméon G. partage régulièrement des
                                pensées inspirantes pour encourager la croissance spirituelle.</p>
                            <a href="#" class="btn btn-outline-primary">Voir tous ses articles</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Articles similaires -->
        <section class="related-articles mt-5">
            <h2 class="h3 mb-4 text-center">Découvrez aussi</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card related-article h-100 border-0 shadow-sm">
                        <img src="https://source.unsplash.com/random/600x400/?pray" class="card-img-top"
                            alt="Article similaire">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Pensée</span>
                            <h4 class="card-title">La puissance de la prière</h4>
                            <p class="card-text">Comment développer une vie de prière efficace.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <small class="text-muted">12 novembre 2023</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card related-article h-100 border-0 shadow-sm">
                        <img src="https://source.unsplash.com/random/600x400/?faith" class="card-img-top"
                            alt="Article similaire">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">Enseignement</span>
                            <h4 class="card-title">Marcher par la foi</h4>
                            <p class="card-text">Les principes bibliques pour une foi active.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <small class="text-muted">8 novembre 2023</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card related-article h-100 border-0 shadow-sm">
                        <img src="https://source.unsplash.com/random/600x400/?bible-study" class="card-img-top"
                            alt="Article similaire">
                        <div class="card-body">
                            <span class="badge bg-info mb-2">Étude</span>
                            <h4 class="card-title">Comprendre Romains 12</h4>
                            <p class="card-text">Une étude approfondie de ce chapitre clé.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <small class="text-muted">5 novembre 2023</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('styles')
    <style>
        :root {
            --primary: #3a7bd5;
            --secondary: #00d2ff;
            --light: #f8f9fa;
            --dark: #212529;
        }

        body {
            padding-top: 70px !important;
            /* Ajustez cette valeur selon la hauteur de votre navbar */
        }

        .navbar.fixed-top {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030;
        }

        .hero-section,
        .article-header {
            padding-top: 100px;
            margin-top: -70px;
            position: relative;
            z-index: 1;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.8;
            color: #333;
        }


        /* Header article */
        .article-header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 4rem 0;
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
        }

        .article-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://source.unsplash.com/random/1200x800/?faith') center/cover;
            opacity: 0.15;
            z-index: 0;
        }

        /* Contenu article */
        .article-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .article-title {
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }

        .verse {
            font-size: 1.2rem;
            font-style: italic;
            color: var(--primary);
            border-left: 3px solid var(--primary);
            padding-left: 1.5rem;
            margin: 2rem 0;
        }

        .article-meta {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }

        .author-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1rem;
            border: 3px solid rgba(255, 255, 255, 0.3);
        }

        /* Partage */
        .share-section {
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
            padding: 1.5rem 0;
            margin: 3rem 0;
        }

        .share-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            color: white;
            margin-right: 0.5rem;
            transition: transform 0.3s;
        }

        .share-btn:hover {
            transform: translateY(-3px);
        }

        /* Articles similaires */
        .related-article {
            transition: transform 0.3s;
        }

        .related-article:hover {
            transform: translateY(-5px);
        }

        /* Citation */
        .blockquote-custom {
            border-left: 4px solid var(--primary);
            background-color: #f8f9fa;
            padding: 1.5rem;
            margin: 2rem 0;
        }
    </style>
@endsection