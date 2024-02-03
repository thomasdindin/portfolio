
document.addEventListener('DOMContentLoaded', function() {
    // Votre formulaire
    const form = document.querySelector('form');

    // Gestionnaire d'événement pour le formulaire sur 'submit'
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Empêche la soumission normale du formulaire

        const formData = new FormData(form);

        // Envoyer les données du formulaire en AJAX
        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                // Popup de succès
                Swal.fire({
                    title: 'Succès!',
                    text: data.message,
                    icon: 'success'
                });
            } else {
                // Popup d'erreur
                Swal.fire({
                    title: 'Erreur!',
                    text: data.message,
                    icon: 'error'
                });
            }
        })
        .catch(error => {
            // Gérer les erreurs de réseau ici
            Swal.fire({
                title: 'Erreur!',
                text: 'Un problème est survenu lors de la connexion au serveur.',
                icon: 'error'
            });
        });
    });
});

