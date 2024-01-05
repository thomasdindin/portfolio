<?php 
    include_once 'src/header.php';
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        // Sécurité de base pour éviter les inclusions de fichiers non souhaitées
        // Cela suppose que vos scripts se trouvent dans un dossier 'pages'
        if (preg_match('/^[a-z0-9\-]+$/i', $page)) {
            $file = 'src/public_views/' . $page . '.php';
            if (file_exists($file)) {
                include($file);
            } else {
                include('src/public_views//404.php'); // page d'erreur personnalisée
            }
        } else {
            include('src/public_views//404.php'); // page d'erreur personnalisée
        }
    } else {
        include('src/public_views//home.php'); // page d'accueil par défaut
    }
    include_once 'src/footer.php';
    