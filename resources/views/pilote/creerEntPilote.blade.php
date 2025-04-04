@extends('basePilote')
@section('title', 'creerEntPilote')
@section('content')

    <title>Création de l'entreprise</title>
    <link rel="stylesheet" href="{{ asset('assets/cssBrute/cssPilote/creerEntPilote.css') }}">


    </head>

    <body>

        <!-- Bannière -->
        <div class="banner">
            <div>
                <h2>Créer l'entreprise</h2>
            </div>
        </div>

        <!-- Formulaire -->
        <form class="form_container" method="POST" action="config.php" enctype="multipart/form-data">
            <div class="wrapper">
                <div class="cadre">
                    <!-- Gauche -->
                    <div class="cadre_left">
                        <div class="titre">Informations Basiques</div>
                        <div class="contenu">
                            <span>Nom d'entreprise</span>
                            <input name="nom_entreprise" type="text">

                            <span>Titre d'annonce</span>
                            <textarea name="description_entreprise" rows="6"></textarea>

                            <span>L'adresse principale</span>
                            <input name="adresse_entreprise" type="text">
                        </div>
                    </div>

                    <!-- Droite -->
                    <div class="cadre_right">
                        <span>Image logo</span>
                        <div class="champ-drop">
                            <div class="icon">
                                <i class="fa-solid fa-cloud-arrow-up" style="color:#D9D7DF; font-size:60px;"></i>
                                <header>Glisser & Déposer pour uploader le fichier</header>
                                <div>OU</div>
                                <button type="button" id="uploadBtn">Charger le fichier</button>
                                <input name="logo" type="file" id="fileInput" style="display: none;">
                            </div>
                        </div>

                        <span>Email du représentant légal de l'entreprise</span>
                        <input name="email" type="text" placeholder="Exemple : sihanchen@gmail.com">
                    </div>
                </div>

                <!-- Bouton Valider -->
                <button type="submit" class="btnValide">Valider</button>
            </div>
        </form>

        <!-- JS pour déclencher l'upload -->
        <script>
            document.getElementById("uploadBtn").addEventListener("click", function(e) {
                e.preventDefault();
                document.getElementById("fileInput").click();
            });
        </script>

    @endsection
