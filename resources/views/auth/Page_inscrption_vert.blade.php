<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page d'inscription</title>
    <link rel="stylesheet" href="./Page_inscription_vert.css">
    <script src="Page_inscription.js" defer></script>
</head>
<body>
    <?php 
        require_once(__DIR__ . '/config_sqlite.php'); 
    ?>


    <div class="container">


        <div class="banner_vert">
            <div class="banner_bordure">
                <div>
                    <img src="../../logo_and_psd/flowchart_icon_161130.png" alt="CESI_Logo">
                </div>
                <div class="web4all_logo">
                    <img src="../../logo_and_psd/web4all.png" alt="web4all_Logo">
                </div>
                <div class="title">CESI STAGE</div>
                <div class="sous_title"> La première étape vers le succès !</div>
                <div class="annonce">Inscription réservée aux étudiants. Pour un compte pilote de promotion, contactez l’administration de l’école.</div>
                <div class="humain">
                    <img src="../../Source/humain.png" alt="humain">
                </div>
                <div class="ligne_1">Page</div>
                <div class="ligne_2">d'Inscription</div>
            </div>
        </div>
        <form class="form-container" method="post" action="">
            <label for="nom_user" id="user_name">Nom</label>
            <input type="text"  id="user_name" name="nom_utilisateur">
            <label for="prenom_user" id="user_first_name">Prénom</label>
            <input type="text" id="user_first_name" name="prenom_utilisateur">
            <label for="email">Adresse Mail</label>
            <input type="text" id="address" name="mail_utilisateur" placeholder="Votre adresse mail" required>
            
            <!-- <div class="botton_container"> -->
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password_etu" placeholder="Saisir votre mot de passe"> 
                <button type="button" id="toggle-password-btn-1">afficher</button>
            <!-- </div> -->

            <!-- <div class="botton_container"> -->
                <label for="re-password"> Confirmation de votre mot de passe</label>
                <input type="password" id="re-password" name="re_password" placeholder= "Confirmer votre mot de passe"> 
                <button type="button" id="toggle-password-btn-2">afficher</button>
            <!-- </div> -->

            <br>

            <div class="checkbox_container">

                <input type="checkbox" name="check" class="checkbox" >
            
                <label for="check">J'accepte que Stage CESI me contacte pour m'informer des opportunités de stage, des nouveautés du site, de mon compte ou d'autres informations susceptibles de m'intéresser.</label>

            </div>
        
            <button class="inscription">Inscrivez-vous</button>
            
            

            <!-- <div class="divider">
                <span>ou s'enregistrer avec</span>
            </div>
            <div class="icon_container">
                <a  href="#" class="icon">
                    <img src="../../Source/icons8-logo-google-480.svg" alt="google" class="google_icon">
                </a>
                <a href="#" class="icon">
                    <img src="../../Source/Linkedin.png" alt="Microsoft_icon" class="linkedin_icon">
                </a>
                <a href="#" class="icon">
                    <img src="../../logo_and_psd/logo_cesi_simple.png" alt="logo_cesi_simple" class="cesi_simple_icon">
                </a>
            </div> -->
            <div class="divider">
                <span>Déja membre ? &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <a href="../Page de connexion/connecter.html">identifiez-vous</a>
            </div>

            <div class="article">
                En cliquant sur “Inscrivez-vous”, vous acceptez les <a href="#">Conditions Générales</a> d’Utilisation et la <a href="#">Politique de confidentialité</a>.
            </div>
        </form>    
        
    </div>

    

</body>
</html>

