<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

require __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../..');
$dotenv->load();


$mail = new PHPMailer(true); // Passing `true` enables exceptions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['subject'], $_POST['message'])) {
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
        $mail->Username = $_ENV["SMTP_USERNAME"]; // Nom d'utilisateur SMTP (votre adresse email complète)
        $mail->Password = $_ENV['SMTP_PASSWORD']; // Mot de passe SMTP
        $mail->SMTPSecure = 'ssl'; // Activer le cryptage TLS, `ssl` également accepté
        $mail->Port = 465; // Port TCP pour se connecter à

        // Destinataires
        $mail->setFrom('contact@thomasdindin.fr', 'Soumission de formulaire de contact');
        $mail->addAddress('thomas.dindin@gmail.com', 'Thomas Dindin');

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message. "Envoyé par : " . $email;
        $mail->AltBody = strip_tags($message);

        $mail->send();
        $response = ['success' => true, 'message' => 'Le message a été envoyé'];
    } catch (Exception $e) {
        $response = ['success' => false, 'message' => 'Le message n\'a pas pu être envoyé. Mailer Error: ' . $mail->ErrorInfo . "with credentials " . getenv('SMTP_USERNAME') . " and " . getenv('SMTP_PASSWORD')];
    }

    // Envoie la réponse en JSON pour que le JavaScript puisse la traiter
    echo json_encode($response);
} else {
    // Si la requête n'est pas de type POST, redirigez l'utilisateur vers la page d'accueil
    header('Location: /');
    exit;
}
