<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - EdN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #3a7bd5;
            --secondary-color: #00d2ff;
        }

        /* Barre de navigation */
        .navbar {
            top: 0;
            position: sticky;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            color: white;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.85);
            font-weight: 500;
        }

        .nav-link:hover,
        .nav-link.active {
            color: white;
            text-decoration: underline;
            text-underline-offset: 5px;
        }

        /* Footer */
        .main-footer {
            background: linear-gradient(135deg, #2c3e50, #4a6491);
            color: white;
            padding: 3rem 0;
            margin-top: 3rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s;
        }

        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }

        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin-right: 1rem;
            transition: all 0.3s;
        }

        .social-icons a:hover {
            transform: translateY(-3px);
        }

        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #f5f7fa, #e4e8f0);
        }
    </style>
    @yield('styles')
</head>

<body>
    <!-- Barre de navigation -->
    @include('layouts.nav')

    <main class="py-4">
        @yield('content')
    </main>

    <!-- Pied de page -->
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>

</html>