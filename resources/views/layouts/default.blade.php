<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title', 'Saas') - {{ config('app.name') }}
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Vite CSS -->
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Welcome to Laravel 5.4</h1>
    
    <!-- Content -->
    @yield('content')

    <!-- Vite JS -->
    @vite('resources/js/app.js')
</body>
</html>