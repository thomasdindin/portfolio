<footer>
        <div id="footer-nav">
            <ul class="nav">
                <li><a href="#about">A propos</a></li>
                <li><a href="#exp">Experience</a></li>
                <li><a href="#veille">Veille</a></li>

            </ul>
        </div>
        <div class="social">
            <div class="socials">
                <a href="https://github.com/thomasdindin" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/thomas-dindin-3135a9261/" target="_blank"
                    rel="noopener noreferrer">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
            <span>© <?php echo date("Y"); ?> Thomas Dindin</span>
        </div>
    </footer>

    <!-- Pour les icônes -->
    <script src="https://kit.fontawesome.com/6c69bc0812.js" crossorigin="anonymous"></script>

    <!-- Le JavaScript général -->
    <script type="module" src="./assets/js/app.js"></script>

    <!-- Le JavaScript spécifique à la page -->
    <?php
    $page = 'home'; // Valeur par défaut pour la page d'accueil
    if (isset($_GET['page']) && preg_match('/^[a-z0-9\-]+$/i', $_GET['page'])) {
        $page = $_GET['page'];
    }
    if (file_exists('./assets/js/' . $page . '.js')) {
        echo '<script type="module" src="./assets/js/' . $page . '.js"></script>';
    }
    ?>
</body>

</html>