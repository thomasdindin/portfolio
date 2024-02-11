<footer>
        <div id="footer-nav">
            <ul class="nav"></ul>
        </div>
        <div class="social">
            <div class="socials">
                <a href="https://github.com/thomasdindin" target="_blank" rel="noopener noreferrer">
                    <img src="/assets/svg/icons8-github.svg" alt="GitHub">
                </a>
                <a href="https://www.linkedin.com/in/thomas-dindin-3135a9261/" target="_blank"
                    rel="noopener noreferrer">
                    <img src="/assets/svg/icons8-linkedin.svg" alt="LinkedIn">
                </a>
            </div>
            <span>© <?php echo date("Y"); ?> Thomas Dindin</span>
        </div>
    </footer>

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