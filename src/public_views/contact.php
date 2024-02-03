<?php
include_once 'src/mailer.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<section class="contact-form">
    <h1>Formulaire de contact</h1>
    <p>Merci de prendre le temps de me contacter! Que ce soit pour un retour sur mon portfolio, une proposition de projet ou une offre de travail, j'apprécie beaucoup et je ferais en sorte de traiter votre mail dans les plus brefs délais.</p>
    <form action='' method="post">
        <div class="form-group">
            <label for="email">E-mail :</label>
            <input type="email" name="email" id="email" placeholder="Votre adresse e-mail" required>
        </div>
        <div class="form-group">
            <label for="subject">Sujet :</label>
            <input type="text" name="subject" id="subject" placeholder="Sujet de votre message" required>
        </div>
        <div class="form-group">
            <label for="message">Message :</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message ..." required></textarea>
        </div>
        <button type="submit" class="primary">Envoyer</button>

        <!-- Ne marche pas, pas le temps de le refaire : div class="g-recaptcha" data-sitekey="6LcZQl4pAAAAAAFzuJtiPxeeOzBaINg3Jxqa-Xs5"></div -->
    </form>
</section>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
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
                    if (data.success) {
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
</script>