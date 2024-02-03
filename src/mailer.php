<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true); // Passing `true` enables exceptions

// Assainissement des données
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$subject = htmlspecialchars($_POST['subject'], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

// Assurez-vous que les données sont valides...

try {
    // Paramètres du serveur
    $mail->isSMTP(); // Utiliser SMTP
    $mail->Host = 'mail.thomasdindin.fr'; // Serveur SMTP
    $mail->SMTPAuth = true; // Activer l'authentification SMTP
    $mail->Username = 'contact@thomasdindin.fr'; // Nom d'utilisateur SMTP
    $mail->Password = 'pP2*BchT*GxNBBx'; // Mot de passe SMTP
    $mail->SMTPSecure = 'ssl'; // Activer le cryptage TLS, `ssl` également accepté
    $mail->Port = 465; // Port TCP pour se connecter à

    // Destinataires
    $mail->setFrom('contact@thomasdindin.fr', 'Formulaire de Contact');
    $mail->addAddress('thomas.dindin@gmail.com', 'Thomas Dindin');

    // Contenu
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = strip_tags($message);

    $mail->send();
    echo 'Le message a été envoyé';
} catch (Exception $e) {
    echo 'Le message n\'a pas pu être envoyé. Mailer Error: ', $mail->ErrorInfo;
}
