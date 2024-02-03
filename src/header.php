<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
    // Récupération du nom de la page pour charger le CSS spécifique
    $pageCss = 'home'; // Valeur par défaut pour la page d'accueil
    if (isset($_GET['page']) && preg_match('/^[a-z0-9\-]+$/i', $_GET['page'])) {
        $pageCss = $_GET['page'];
    }
    if (file_exists('./assets/css/' . $pageCss . '.css')) {
        echo '<link rel="stylesheet" href="./assets/css/' . $pageCss . '.css">';
    }
    ?>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins&display=swap"
        rel="stylesheet">
    <title>Portfolio</title>
</head>

<body>
    <header>
        <a href="/">
            <p>THOMAS <span>DINDIN</span></p>
        </a>
        <ul class="nav">
            <li><a href="#hero">A propos</a></li>
            <li><a href="#exp">Experience</a></li>
            <li><a href="#veille">Veille technologique</a></li>
        </ul>

        <i class="fa-solid fa-caret-down phone-nav" id="menu"></i>
        <div class="sidenav closed">
            <ul class="column-nav">
                <li><a href="/#hero">A propos</a></li>
                <li><a href="/#exp">Experience</a></li>
                <li><a href="/#veille">Veille technologique</a></li>
            </ul>
        </div>
    </header>