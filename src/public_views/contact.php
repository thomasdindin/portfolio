<section class="contact-form">
    <h1>Formulaire de contact</h1>
    <p>Merci de prendre le temps de me contacter! Que ce soit pour un retour sur mon portfolio, une proposition de projet ou une offre de travail, j'apprécie beaucoup et je ferais en sorte de traiter votre mail dans les plus brefs délais.</p>
    <form action='https://thomasdindin.fr/src/form/mailer.php' method="post">
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    const form = document.querySelector('form');

    // Gestionnaire d'événement pour le formulaire sur 'submit'
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Empêche la soumission normale du formulaire

        const formData = new FormData(form);

        // Envoyer les données du formulaire en AJAX
        console.log("Form action :", form.action);
        console.log("Form data :", formData);

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
                console.log(data);
                if (data.success) {
                    swal("Succès !", data.message, "success");
                } else {
                    // Popup d'erreur
                    swal("Oups...", data.message, "error");
                }
            })
            .catch(error => {
                // Gérer les erreurs de réseau ici
                console.error(error);
                swal("Vous êtes toujours connecté ?", error, "info");
            });
    });
</script>