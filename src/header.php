<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <p>THOMAS <span>DINDIN</span></p>
        <ul class="nav">
            <li><a href="#about">A propos</a></li>
            <li><a href="#exp">Experience</a></li>
            <li><a href="#veille">Veille technologique</a></li>
            <li><button class="primary" id="bigContact">
                    Me contacter
                </button></li>
        </ul>

        <i class="fa-solid fa-caret-down phone-nav" id="menu"></i>
        <div class="sidenav closed">
            <ul class="column-nav">
                <li><a href="/#about">A propos</a></li>
                <li><a href="#exp">Experience</a></li>
                <li><a href="#veille">Veille technologique</a></li>
                <li><a class="primary" href="<?php echo $_SERVER['DOCUMENT_ROOT'] ?>/remake/src/public_views/contact.php">Me contacter</a></li>
            </ul>
        </div>


    </header>