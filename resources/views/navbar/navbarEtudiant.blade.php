<!-- Barre de navigation-->

<link rel="stylesheet" href="{{ asset('assets/cssBrute/cssEtudiant/cssHome.css') }}">
<nav class="navbar">

    <!-- Logo du site-->
    <div class="logo"><img src="{{ asset('assets/image/Logo_Cesi.png') }}" alt="Logo du site"></div>

    <!-- Menu hamburger pour mobile-->
    <input type="checkbox" id="menu-toggle">

    <!-- Icône du menu hamburger-->
    <label for="menu-toggle" class="menu-icon">&#9776;</label>

    <!-- Liens de navigation-->
    <ul class="nav-links">
        <li><a href="{{ route('homeEtudiant') }}">Accueil</a></li>
        <li><a href="{{ route('offreEtudiant') }}">Offres</a></li>
        <li><a href="{{ route('entrepriseEtudiant') }}">Entreprises</a></li>
        <li><a href="#">Wishlist</a></li>
    </ul>

    <!-- Bouton de Mon Espace -->

    <div class="mon-espace">
        <button class="mon-espace-button">Mon Espace</button>
        <div class="mon-espace-menu">
            <ul>
                <li><a href="#">Profil</a></li>
                <li><a href="{{ route('home') }}">Déconnexion</a></li>
            </ul>
        </div>
    </div>


</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const monEspaceButton = document.querySelector('.mon-espace-button');
        const monEspaceMenu = document.querySelector('.mon-espace-menu');

        monEspaceButton.addEventListener('click', function() {
            monEspaceMenu.style.display = monEspaceMenu.style.display === 'block' ? 'none' : 'block';
        });

        // Fermer le menu si on clique ailleurs
        document.addEventListener('click', function(event) {
            if (event.target !== monEspaceButton && event.target.parentNode !== monEspaceButton && event
                .target !== monEspaceMenu && !monEspaceMenu.contains(event.target)) {
                monEspaceMenu.style.display = 'none';
            }
        });
    });
</script>
