<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Évangéliste du Net</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #3a7bd5;
            --secondary-color: #00d2ff;
            --navbar-height: 56px;
            --sidebar-width: 250px;
        }

        /* Barre de navigation supérieure */
        .admin-navbar {
            height: var(--navbar-height);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1030;
        }

        .admin-navbar .navbar-brand {
            font-weight: 600;
        }

        .admin-navbar .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Correction pour le menu mobile */
        @media (max-width: 991.98px) {
            #adminNavbar {
                background-color: var(--primary-color);
                padding: 15px;
                margin-top: 10px;
                border-radius: 5px;
            }
        }

        /* Sidebar styling */
        .admin-sidebar {
            position: fixed;
            top: var(--navbar-height);
            bottom: 0;
            left: 0;
            width: var(--sidebar-width);
            z-index: 1020;
            padding: 20px 0;
            box-shadow: 1px 0 5px rgba(0, 0, 0, 0.05);
            overflow-y: auto;
            background-color: #f8f9fa;
        }

        .admin-sidebar .sidebar-header {
            padding: 0 1.5rem;
            font-size: 0.9rem;
            color: #6c757d;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .admin-sidebar .nav-link {
            border-radius: 0;
            padding: 0.75rem 1.5rem;
            color: #495057;
            font-weight: 500;
            border-left: 3px solid transparent;
        }

        .admin-sidebar .nav-link.active {
            background-color: rgba(58, 123, 213, 0.05);
            color: var(--primary-color);
            border-left-color: var(--primary-color);
        }

        .admin-sidebar .nav-link:hover:not(.active) {
            background-color: rgba(58, 123, 213, 0.03);
        }

        /* Main content area */
        .admin-main {
            margin-left: var(--sidebar-width);
            margin-top: var(--navbar-height);
            padding: 20px;
            transition: margin-left 0.3s;
        }

        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .admin-sidebar {
                margin-left: -var(--sidebar-width);
            }

            .admin-main {
                margin-left: 0;
            }

            .admin-sidebar.show {
                margin-left: 0;
            }
        }

        @media (min-width: 992px) {
            .admin-sidebar-toggle {
                display: none;
            }
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

        .article-meta {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }

        .verse {
            font-size: 1.2rem;
            font-style: italic;
            color: var(--primary);
            border-left: 3px solid var(--primary);
            padding-left: 1.5rem;
            margin: 2rem 0;
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
    @yield('styles')
</head>

<body>

    @include('admin.nav')

    <main class="py-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.getElementById('adminNavbar');
            const navbarToggler = document.querySelector('.navbar-toggler');

            // Gestionnaire d'événements pour fermer le menu quand on clique ailleurs
            document.addEventListener('click', function(event) {
                const isClickInsideNavbar = navbar.contains(event.target);
                const isClickOnToggler = navbarToggler.contains(event.target);

                // Si le menu est ouvert et qu'on clique à l'extérieur
                if (navbar.classList.contains('show') && !isClickInsideNavbar && !isClickOnToggler) {
                    // Fermer le menu via Bootstrap
                    const collapse = new bootstrap.Collapse(navbar);
                    collapse.hide();

                    // Retirer la classe du body
                    document.body.classList.remove('menu-open');
                }
            });

            // Gestion de l'état ouvert/fermé
            navbar.addEventListener('show.bs.collapse', function() {
                document.body.classList.add('menu-open');
            });

            navbar.addEventListener('hidden.bs.collapse', function() {
                document.body.classList.remove('menu-open');
            });
        });
    </script>
@endsection

</html>
