<nav>
    <a href="#about">A propos</a>
    <a href="#exp">Experience</a>
    <a href="#veille">Veille technologique</a>
    <a href="#contact">Contact</a>
</nav>

<!-- HERO -->
<section id="hero">
    <h1 class="anim">Bienvenue sur mon portfolio !</h1>
    <p class="anim">Je suis <span id="changingText"> Thomas Dindin.</span></p>
</section>

<!-- A propos -->
<section id="about">
    <h2>A propos de moi ...</h2>
    <div class="container">
        <h3>
            Qui suis-je ?
        </h3>
        <div class="infos-perso">
            <div class="info">
                Maubeuge, France.
            </div>
            <div class="info">
                <?php echo date('Y') - 2001; ?> ans.
            </div>
            <div class="info">
                Véhiculé.
            </div>
            <div class="info">
                thomas.dindin@gmail.com
            </div>
            <div class="info">
                06 10 94 40 94
            </div>
            <div class="info">
                Qualités : Autonome, rigoureux, curieux.
            </div>
        </div>

    </div>

    <div class="container">
        <h3>
            Mon parcours
        </h3>

        <div class="timeline">
            <div class="timeline-line"></div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <h4 class="date">2022 - 2024</h4>
                    <a href="/btssio">BTS SIO option SLAM </a>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <h4 class="date">2021 - 2022</h4>
                    <p>Travail à l'usine.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <h4 class="date">2019 - 2021</h4>
                    <p>Licence SESI bilingue, université de Lille 1.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-content">
                    <h4 class="date">2019</h4>
                    <p>Baccalauréat Scientifique, spécialité SVT.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Experience -->
<section id="exp">
    <h2>Mon expérience</h2>
    <div class="articles">
        <article>
            <div class="article-wrapper">
                <figure>
                    <img src="./assets/img/cocoveto.webp" alt="Robin Hoffmeister et CocoVeto" />
                </figure>
                <div class="article-body">
                    <h2>Cocoveto</h2>
                    <p>Réalisation d'une application de télémédecine vétérinaire ayant pour but de fournir aux
                        éleveurs des conseils sur l'alimentation d'un troupeau.</p>

                    <div class="skills">
                        <span>Flutter</span>
                        <span>Web</span>
                        <span>API</span>
                    </div>

                    <a href="/cocoveto" class="read-more">
                        En savoir plus
                    </a>
                </div>
            </div>
        </article>

        <article>
            <div class="article-wrapper">
                <figure>
                    <img src="./assets/img/lyreco.webp" alt="Logo Lyreco" />
                </figure>
                <div class="article-body">
                    <h2>Lyreco France</h2>
                    <p>Réalisation d'un site web permettant aux commerciaux de créer des contrats pour une solution, CleanPack, plus facilement.</p>

                    <div class="skills">
                        <span>PHP</span>
                        <span>TypeScript</span>
                        <span>Tailwind</span>
                    </div>

                    <a href="/lyreco" class="read-more">
                        En savoir plus
                    </a>
                </div>
            </div>
        </article>
    </div>

    <h2>Retour de mes employeurs :</h2>
    <div class="retours">
        <div class="retour">
            <p>Très bien, la majorité des objectifs ont été atteints, les échanges nourris et constructifs</p>
            <span class="auteur">- Robin Hoffmeister, CEO de CocoVeto.</span>
        </div>
        <div class="retour">
            <p>Thomas a démontré une qualité de travail exemplaire. Nous sommes reconnaissants pour sa contribution exceptionnelle.</p>
            <span class="auteur">- Baptiste Dhaussy, chef de projet chez Lyreco France.</span>
        </div>
    </div>
    <p id="cv">Vous pouvez aussi <a href="./assets/pdf/CV_THOMAS_DINDIN_2023-07-23.pdf" download="CV">Télécharger mon cv</a> .</p>
</section>

<!-- Veille technologique : Flutter-->
<section id="veille">
    <h2>Veille technologique</h2>

    <div class="spinner-wrapper">
        <div class="spinner-inner">
            <img src="/assets/img/flutter_logo.png" alt="Logo de flutter">
        </div>

        <div class="spinner-outer">
            <div class="link" data-tooltip="MitchKoko">
                <a href="https://www.youtube.com/@createdbykoko" target="_blank" rel="noopener noreferrer">
                    <img src="/assets/svg/YouTube-Icon-Almost-Black-Logo.wine.svg" alt="MitchKoko channel">
                </a>
            </div>
            <div class="link" data-tooltip="MaxonFlutter">
                <a href="https://www.youtube.com/@MaxonFlutter" target="_blank" rel="noopener noreferrer">
                    <img src="/assets/svg/YouTube-Icon-Almost-Black-Logo.wine.svg" alt="MaxonFlutter channel">
                </a>
            </div>
            <div class="link" data-tooltip="Flutter doc">
                <a href="https://docs.flutter.dev/release/whats-new" target="_blank" rel="noopener noreferrer">
                    <img src="/assets/svg/GNOME_Web-Logo.wine.svg" alt="Flutter documentation">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact">
    <h2>Contact</h2>
    <p>Merci de m'avoir lu jusqu'ici ! Si vous souhaitez me contacter, vous pouvez le faire via ce formulaire :</p>
    <a href="/contact" target="_blank" rel="noopener noreferrer">Me contacter</a>
</section>

<!-- VantaJS pour le fond animé du Hero -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

<!-- GSAP pour les animations -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/TextPlugin.min.js"></script>