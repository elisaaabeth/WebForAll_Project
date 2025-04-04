<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dropChamp = document.querySelector('.champ-drop');
        const headerText = document.querySelector('header');
        const button = document.querySelector('#uploadBtn');
        const input = document.querySelector('#fileInput');

        if (!button || !input || !dropChamp || !headerText) {
            console.error("Un des éléments n'a pas été trouvé dans le DOM.");
            return;
        }

        // Créer le bouton de suppression
        const deleteButton = document.createElement("button");
        deleteButton.textContent = "Supprimer l'image";
        deleteButton.classList.add("delete-btn"); // Ajouter une classe CSS
        deleteButton.style.display = "none"; // Caché par défaut
        dropChamp.appendChild(deleteButton);

        // Supprimer l'image
        deleteButton.addEventListener("click", function() {
            dropChamp.innerHTML = ""; //  Supprimer l'image et le bouton
            deleteButton.style.display = "none"; //  Cacher le bouton
        });

        // Simuler un clic sur l'input file
        button.onclick = () => {
            input.click();
        };

        input.addEventListener('change', function() {
            let file = this.files[0];

            if (file) {
                console.log("Le fichier que vous avez choisi : " + file.name);
                showFile(file);
            }
        });

        // Gestion du drag & drop
        dropChamp.addEventListener('dragover', (event) => {
            event.preventDefault();
            dropChamp.classList.add('active');
            headerText.textContent = "Relâchez pour Uploader le fichier";
        });

        dropChamp.addEventListener('dragleave', (event) => {
            dropChamp.classList.remove('active');
            headerText.textContent = "Glisser & Déposer pour uploader le fichier";
        });

        dropChamp.addEventListener('drop', (event) => {
            event.preventDefault();
            dropChamp.classList.remove('active'); //  Enlever l'effet d'active

            let file = event.dataTransfer.files[0];
            if (file) {
                showFile(file);
            }
        });

        function showFile(file) {
            let fileType = file.type;
            let fileExtension = ['image/jpeg', 'image/png', 'image/jpg', 'image/svg'];

            if (fileExtension.includes(fileType)) {
                let fileReader = new FileReader();
                fileReader.readAsDataURL(file);

                fileReader.onload = () => {
                    let fileUrl = fileReader.result;
                    let imgElement = document.createElement("img");
                    imgElement.src = fileUrl;
                    imgElement.alt = "image";
                    imgElement.style.maxWidth = "100%";
                    imgElement.style.height = "auto";

                    dropChamp.innerHTML = ""; //  Effacer l'ancien contenu
                    dropChamp.appendChild(imgElement); //  Ajouter l'image
                    dropChamp.appendChild(deleteButton); //  Ajouter le bouton
                    deleteButton.style.display = "block"; //  Afficher le bouton
                };
            } else {
                alert("Ceci n'est pas une image valide.");
            }
        }
    });
</script>

{{-- page d'incription --}}

<script>
    //  Vérifier que l'email est valide
    const emailInput = document.getElementById("address");
    emailInput.addEventListener("input", function() {
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // l'expression régulière
        if (!emailPattern.test(emailInput.value)) {
            emailInput.setCustomValidity("Veuillez entrer une adresse email valide.");
        } else {
            emailInput.setCustomValidity("");
        }
    });
    // afficher ou cacher le mot de passe
    document.getElementById('toggle-password-btn-1').addEventListener('click', function() {
        const passwordField = document.getElementById('password');
        const btn = this;


        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            btn.textContent = 'cacher';
        } else {
            passwordField.type = 'password';
            btn.textContent = 'afficher';
        }
    });

    document.getElementById('toggle-password-btn-2').addEventListener('click', function() {
        const passwordField = document.getElementById('re-password');
        const btn = this;


        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            btn.textContent = 'cacher';
        } else {
            passwordField.type = 'password';
            btn.textContent = 'afficher';
        }
    });
</script>
