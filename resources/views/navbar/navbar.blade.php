{{-- barre de navigation --}}
<link rel="stylesheet" href="{{ asset('assets/cssBrute/cssHome.css') }}">

<!-- Barre de navigation-->
<nav class="navbar">

    <!-- Logo du site-->
    <div class="logo"><img src="{{ asset('assets/image/Logo_Cesi.png') }}" alt="Logo du site"></div>

    <!-- Menu hamburger pour mobile-->
    <input type="checkbox" id="menu-toggle">

    <!-- Icône du menu hamburger-->
    <label for="menu-toggle" class="menu-icon">&#9776;</label>

    <!-- Liens de navigation-->
    <ul class="nav-links">
        <li><a href="{{ route('home') }}">Accueil</a></li>
        <li><a href="{{ route('offers') }}">Offres</a></li>
        <li><a href="{{ route('about') }}">Entreprises</a></li>
    </ul>

    <!-- Bouton de connexion-->
    <ul class="login-button">
        <li><a href="{{ asset('connecter') }}">Se connecter</a></li>
    </ul>
</nav>
