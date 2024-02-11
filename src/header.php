<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ceci est mon site portfolio. Je m'appelle Thomas Dindin, et je suis développeur junior.">
    <meta name="keywords" content="portfolio, développeur, Thomas Dindin">
    <meta name="author" content="Thomas Dindin">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://thomasdindin.fr">
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins&display=swap" rel="stylesheet">

    <?php
    // Récupération du nom de la page pour charger le CSS spécifique
    $pageCss = 'home'; // Valeur par défaut pour la page d'accueil
    if (isset($_GET['page']) && preg_match('/^[a-z0-9\-]+$/i', $_GET['page'])) {
        $pageCss = $_GET['page'];
    }
    if (file_exists('./assets/css/' . $pageCss . '.css')) {
        echo '<link rel="stylesheet" href="./assets/css/' . $pageCss . '.css">';
    } else {
        if ($_GET['page'] === 'cocoveto' || $_GET['page'] === 'lyreco' || $_GET['page'] === 'btssio' || $_GET['page'] === 'flutter') echo '<link rel="stylesheet" href="./assets/css/stage.css">';
        else echo '<link rel="stylesheet" href="./assets/css/404.css">';
    }
    ?>
    <title>Mon portfolio</title>
</head>

<body>
    <header>
        <a href="/">
            <p>THOMAS <span>DINDIN</span></p>
        </a>
        <ul class="nav"></ul>
    </header>