const form = document.querySelector('form');

// Gestionnaire d'événement pour le formulaire sur 'submit'
form.addEventListener('submit', function (event) {
    event.preventDefault(); // Empêche la soumission normale du formulaire
    let submitButton = form.querySelector('button[type="submit"]');
    const formData = new FormData(form);

    submitButton.disabled = true; // Désactiver le bouton de soumission

    // Envoyer les données du formulaire en AJAX
    fetch(form.action, {
        method: 'POST',
        body: formData
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur HTTP ' + response.status);
            } else {
                return response.json();
            }
        })
        .then(data => {
            if (data.success) {
                swal("Succès !", data.message, "success");

                form.reset();
            } else {
                // Popup d'erreur
                swal("Oups...", data.message, "error");
            }
        })
        .catch(error => {
            // Gérer les erreurs de réseau ici
            swal("Vous êtes toujours connecté ?", error, "info");
        });
});

// Réactiver le bouton de soumission après que le formulaire a été soumis
form.addEventListener('reset', function () {
    submitButton.disabled = false;
});