@extends('basePilote')
@section('title', 'creerOffPilote')
@section('content')

    <title>Création du post</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/cssBrute/cssPilote/creerOffPilote.css') }}">
    <script src="./script.js"></script>
    </head>

    <body>
        <div class="banner">
            <h2>Complétion du profil du post</h2>
        </div>

        <div class="wrapper">
            <form method="POST" action="config.php" enctype="multipart/form-data">
                <div class="cadre">
                    <div class="titre">Informations Basiques</div>

                    <div class="form_group">
                        <label for="nom_post">Nom du post</label>
                        <input type="text" id="nom_post" name="nom_offre">
                    </div>

                    <div class="form_group">
                        <label for="adresse">Adresse bureau</label>
                        <input type="text" id="adresse" name="adresse_offre">
                    </div>

                    <div class="form_group">
                        <label for="description">Description du post</label>
                        <textarea id="description" name="description_offre"></textarea>
                    </div>

                    <div class="form_group">
                        <label for="email">Contacter la ressource humaine</label>
                        <input type="text" id="email" name="mail_recruteur"
                            placeholder="Exemple : sihanchen@gmail.com">
                    </div>
                </div>

                <div class="cadre">
                    <div class="titre">Promotion</div>

                    <div class="form_group">
                        <label for="niveau">Niveau d'étude</label>
                        <select id="niveau" name="niveau_etude">
                            <option value="Bac+2">Bac+2</option>
                            <option value="Bac+3">Bac+3</option>
                            <option value="Bac+4">Bac+4</option>
                            <option value="Bac+5">Bac+5</option>
                        </select>
                    </div>

                    <div class="form_group">
                        <label>Type de travail</label>
                        <div class="radio_group">
                            <label><input type="radio" name="type_travail" value="Stage"> Stage</label>
                            <label><input type="radio" name="type_travail" value="Alternance"> Alternance</label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btnValide">Valider</button>
            </form>
        </div>

        <script>
            document.getElementById("uploadBtn").addEventListener("click", function(e) {
                e.preventDefault();
                document.getElementById("fileInput").click();
            });
        </script>

    @endsection
