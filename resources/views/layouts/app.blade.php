<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS (ex: Tailwind, Bootstrap, etc.) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @stack('styles')
</head>
<body class="bg-gray-100 text-gray-800">

    {{-- Barre de navigation --}}
    @include('layouts.navigation')

    {{-- Contenu principal injecté depuis les vues --}}
    <main class="container mx-auto py-4">
        {{ $slot }}
    </main>

    {{-- JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
