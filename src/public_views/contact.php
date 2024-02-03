<?php
    include_once 'src/mailer.php';
?>

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

        <div class="g-recaptcha" data-sitekey="6LcZQl4pAAAAAAFzuJtiPxeeOzBaINg3Jxqa-Xs5"></div>
    </form>
</section>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>