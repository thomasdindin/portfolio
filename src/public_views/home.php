<!-- HERO -->
<section id="hero">
    <div class="wrapper">
        <div class="container scrollx">
            <section class="sec1 pin">
                <h1 class="anim">Bienvenue sur mon portfolio !</h1>
                <p class="anim">Je suis <span id="changingText"> Thomas Dindin.</span></p>
            </section>
            <section class="sec2 pin">
                <h1 class="anim">Quelques informations ... </h1>

                <div class="col anim">
                    <ul>
                        <li class="anim">Lieu de résidence : Maubeuge, France</li>
                        <li class="anim">email : thomas.dindin@gmail.com</li>
                        <li class="anim">Développeur Web et mobile</li>
                        <li class="anim"><?php
                                            $today = new DateTime();
                                            $tenthOfMarch = new DateTime('2001-03-10');
                                            $interval = $today->diff($tenthOfMarch);
                                            echo $interval->y . " ans";
                                            ?></li>
                        <li class="anim">Permis B</li>
                    </ul>
                </div>
            </section>
            <section class="sec3 pin">
                <h1 class="anim">Mes qualités</h1>

                <div class="col anim">
                    <ul>
                        <li class="anim">Autonome</li>
                        <li class="anim">Curieux</li>
                        <li class="anim">Créatif</li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</section>

<!-- A propos -->
<section id="about">
    <h2>Mon parcours</h2>
    <div class="container">
  <div class="timeline">
    <ul>
      <li>
        <div class="timeline-content">
          <h3 class="date">20th may, 2010</h3>
          <h1>Heading 1</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora ab laudantium voluptatibus aut eos placeat laborum, quibusdam exercitationem labore.</p>
        </div>
      </li>
      <li>
        <div class="timeline-content">
          <h3 class="date">20th may, 2010</h3>
          <h1>Heading 2</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora ab laudantium voluptatibus aut eos placeat laborum, quibusdam exercitationem labore.</p>
        </div>
      </li>
      <li>
        <div class="timeline-content">
          <h3 class="date">20th may, 2010</h3>
          <h1>Heading 3</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora ab laudantium voluptatibus aut eos placeat laborum, quibusdam exercitationem labore.</p>
        </div>
      </li>
      <li>
        <div class="timeline-content">
          <h3 class="date">20th may, 2010</h3>
          <h1>Heading 4</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora ab laudantium voluptatibus aut eos placeat laborum, quibusdam exercitationem labore.</p>
        </div>
      </li>
    </ul>
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

                    <a href="#" class="read-more">
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

                    <a href="#" class="read-more">
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
    <p>
        Lors de mon premier stage, j'ai découvert le Framework Flutter, qui permet de développer une application
        une seule fois et de la rendre disponible sur plusieurs plateformes.
        Flutter a vraiment piqué ma curiosité, car l'architecture des projets, le concept de développement est,
        à mon sens, très intéressant. Je m'informe de manière quotidienne sur le sujet
        en regardant, par exemple, des "Shorts" sur YouTube. Je trouve aussi les vidéos de <a href="https://www.youtube.com/@createdbykoko" target="_blank" rel="noopener noreferrer">MitchKoko</a> et <a href="https://www.youtube.com/@MaxonFlutter" target="_blank" rel="noopener noreferrer">MaxonFlutter</a> très instructives.
        Pour suivre l'actualité et maintenir ma version de Flutter à jour, je consulte aussi régulièrement la
        section <a href="https://docs.flutter.dev/release/whats-new" target="_blank" rel="noopener noreferrer">What's New ?</a> du site officiel de Flutter.
    </p>
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