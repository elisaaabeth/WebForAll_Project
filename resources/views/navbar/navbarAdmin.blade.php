<nav class="navbar">
    <div class="navbar-left">
        <a href="index.html"><img src="{{ asset('assets/image/Logo_Cesi.png') }}" alt="Logo du CESI"></a>
        <link rel="stylesheet" href="{{ asset('assets/cssBrute/cssAdmin/csshomeAdmin.css') }}">

        <div class="nav-links">
            <a href="{{ route('homeAdmin') }}"><span class="active-page">Accueil</a></span>
            <a href="{{ route('offreAdmin') }}">Offres</a>
            <a href="{{ route('entrepriseAdmin') }}">Entreprises</a>
            <a href="{{ route('etudiantAdmin') }}">Étudiant</a>
            <a href="{{ route('piloteAdmin') }}">Pilote</a>
        </div>

    </div>
    <div class="nav-buttons">
        <div class="dropdown">
            <button class="button-espace">Mon espace</button>
            <div class="dropdown-content">
                <a href="profil.html">Profil</a>
                <a href="{{ route('home') }}" onclick="deconnexion()">Déconnexion</a>

            </div>
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
