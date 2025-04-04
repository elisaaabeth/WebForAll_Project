<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.css') }}">

<body>

    {{-- inclusion de la barre de navigation dans le dossier navbar --}}
    @include('navbar.navbarAdmin')
    {{-- toutes les pages leurs contenus vont hérité d'ici   --}}

    @yield('content')
    {{-- les scripts de js --}}
    @include('script')
    @include('footer/footer')


</body>
