<?php
// Inclusion du header : 
include_once 'src/header.php';

// On regarde si la page demandée existe, sinon on affiche la page 404 :
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    // Sécurité de base pour éviter les inclusions de fichiers non souhaitées
    if (preg_match('/^[a-z0-9\-]+$/i', $page)) {
        $file = $page;
    } else {
        $file = '404';
    }
} else {
    $file = 'home';
}

// Inclusion de la page demandée :
echo '<main id="' . $file . '">';
if (file_exists('src/public_views/' . $file . '.php')) {
    include_once 'src/public_views/' . $file . '.php';
} else {
    include_once 'src/public_views/404.php';
}
echo '</main>';

// Inclusion du footer :
include_once 'src/footer.php';
