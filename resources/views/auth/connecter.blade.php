<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CESI Login Page</title>
    <link href="{{ asset('assets/cssBrute/connecter.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- La partie gauche : image -->
        <div class="image-section" id="imageSection">
            <div id="message"></div>
        </div>

        <!-- La partie droite : le formulaire -->
        <div class="login-section">
            <div class="logo">
                <img src="{{ asset('assets/image/flowchart_icon_161130_&.png') }}" alt="CESI Logo">
            </div>
            <h3 style="font-family: 'Poppins', sans-serif">Connectez-vous</h3>

            <form id="loginForm" method="POST">
                @csrf <!-- Protection CSRF obligatoire -->
                <div class="input-group">
                    <div class="icon-wrapper">
                        <span class="icon">
                            <img src="{{ asset('assets/image/user.png') }}" alt="User">
                        </span>
                    </div>


                    <input type="email" placeholder="Addresse d'utilisateur" id="emailConcern" required>
                </div>
                <br>
                <div class="input-group">
                    <div class="icon-wrapper">
                        <span class="icon">
                            <img src="{{ asset('assets/image/key.png') }}" alt="User">
                        </span>
                    </div>
                    <input type="password" placeholder="Mot de passe">
                </div>

                <a href="https://selfresetpassword.cesi.fr/" class="forgot-password">Mot de passe oublié ?</a>


                <button type="submit" class="btn" id = "login">Connexion</button>
            </form>

            <div class="register">
                <span>Vous êtes pas encore inscrit ?</span>
                <a href="../Page d'inscription/Page_inscrption_vert.html">S'inscrire</a>
            </div>
            </form>

            <p class="alternative-login">Se connecter au moyen du compte :</p>
            <div class="external-logins">
                <a href="./https://moodle.cesi.fr/login/index.php" class="moodle">
                    <img src="{{ asset('assets/image/moodle.png') }}" alt="moodle_logo">
                    <div>MOODLE</div>

                </a>
                <div class="icon_back"></div>

                <a href="https://wayf.cesi.fr/login?service=https%3A%2F%2Fent.cesi.fr%2Fservlet%2Fcom.jsbsoft.jtf.core.SG%3FPROC%3DIDENTIFICATION_FRONT"
                    class="ent">
                    <img src="../logo_and_psd/logo_cesi_simple.png" alt="moodle_logo">
                    <div>ENT</div>
                </a>
                <div class="icon_back"></div>
                <p class="anonce">Votre navigateur doit prendre en charge les cookies</p>
            </div>
        </div>
    </div>

    <script>
        const emailInput = document.getElementById('emailConcern');
        const loginForm = document.getElementById('loginForm');

        // Expressions régulières
        const emailRegexAuthen = /^[a-zA-Z0-9._-]+@authencesi\.fr$/;
        const emailRegexPilote = /^[a-zA-Z0-9._-]+@cesi\.fr$/;
        const emailRegexStu = /^[a-zA-Z0-9._-]+@viacesi\.fr$/;

        // Gestion de l'interface
        emailInput.addEventListener('input', () => {
            const emailValue = emailInput.value;

            // Réinitialiser les classes
            document.body.classList.remove('img_background', 'img_authen', 'img_stu', 'img_pilote');
            document.body.classList.add('bg_default');

            if (emailRegexAuthen.test(emailValue)) {
                document.body.classList.add('img_background', 'img_authen');
            } else if (emailRegexStu.test(emailValue) || emailRegexPilote.test(emailValue)) {
                document.body.classList.add('img_background', 'img_stu');
            }
        });

        // Gestion de la soumission du formulaire
        loginForm.addEventListener('submit', function(e) {
            const emailValue = emailInput.value;

            if (emailRegexAuthen.test(emailValue)) {
                this.action = "{{ route('homeAdmin') }}";
            } else if (emailRegexStu.test(emailValue)) {
                this.action = "{{ route('homeEtudiant') }}";
            } else if (emailRegexPilote.test(emailValue)) {
                this.action = "{{ route('homePilote') }}";
            } else {
                e.preventDefault();
                alert("Veuillez utiliser une adresse email valide (@authencesi.fr, @viacesi.fr ou @cesi.fr)");
                return false;
            }
        });
    </script>
    </script>

</body>

</html>
