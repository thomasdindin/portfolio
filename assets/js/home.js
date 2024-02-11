document.addEventListener('DOMContentLoaded', function () {
    // GSAP : 
    gsap.registerPlugin(ScrollTrigger);


    const mots = ["Thomas Dindin.", "autonome.", "créatif.", "curieux."];
    let currentWordIndex = 0;

    function animateWord(word) {
        let tl = gsap.timeline({
            onComplete: () => {
                currentWordIndex = (currentWordIndex + 1) % mots.length;
                animateWord(mots[currentWordIndex]);
            }
        });

        // Animation de frappe
        word.split("").forEach((letter, index) => {
            tl.to('#changingText', {
                duration: 0.1,
                text: word.substring(0, index + 1),
                ease: "none"
            });
        });

        // Attente un peu avant de commencer à effacer
        tl.to('#changingText', {
            duration: 1,
            text: word,
            ease: "none"
        });

        // Animation d'effacement
        for (let i = word.length; i >= 0; i--) {
            tl.to('#changingText', {
                duration: 0.1,
                text: word.substring(0, i),
                ease: "none"
            });
        }
    }

    // Démarrer l'animation avec le premier mot
    animateWord(mots[currentWordIndex]);



    // The background animation for the hero section
    VANTA.NET({
        el: "#hero",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0x5413CC,
        backgroundColor: 0x060918,
        points: 20.00,
        maxDistance: 25.00,
        spacing: 20.00
    })




    // grab the scoped text
    let text = document.querySelectorAll(".anim");

    // bump out if there's no items to animate
    if (text.length === 0) return

    // do a little stagger
    gsap.from(text, {
        y: -130,
        opacity: 0,
        duration: 2,
        ease: "elastic",
        stagger: 0.1,
        scrollTrigger: {
            trigger: text,
            start: "left center",
        }
    });

    gsap.from('#hero .wrapper', {
        y: -130,
        opacity: 0,
        duration: 3,
        ease: "elastic",
        stagger: 0.1,
        scrollTrigger: {
            trigger: '#hero .wrapper',
            start: "left center",
        }
    })


    // Animation pour les articles
    gsap.utils.toArray('.article-wrapper').forEach((article, index) => {
        // Créer une timeline pour chaque article
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: article,
                start: 'top 80%', // Légèrement avant que l'article n'atteigne le bas du viewport
                end: 'bottom top',
                toggleActions: 'play none none reverse'
            }
        });

        // Ajouter des animations à la timeline
        tl.fromTo(article,
            { autoAlpha: 0, y: 100, scale: 0.95 },
            { autoAlpha: 1, y: 0, scale: 1, duration: 1.2, ease: 'power3.out' })
            .from(article.querySelectorAll('.skills span'),
                { y: 20, autoAlpha: 0, stagger: 0.1, ease: 'power1.out' },
                '-=0.8'); // Décale légèrement pour que l'animation commence avant que l'article ne soit complètement animé
    });

    // Animation pour les retours
    gsap.from('.retours', {
        opacity: 0,
        y: 50,
        duration: 1,
        scrollTrigger: {
            trigger: '.retours',
            start: 'top 90%',
            end: 'bottom top',
            toggleActions: 'play none none reverse',
        }
    });

    // Animation pour les infos
    let infos = gsap.utils.toArray('.info');
    infos.forEach((info, index) => {
        gsap.from(info, {
            opacity: 0,
            y: 50,
            duration: 1,
            scrollTrigger: {
                trigger: info,
                start: 'top 90%',
                end: 'bottom top',
                toggleActions: 'play none none reverse',
            }
        });
    });

    // Animation pour la timeline
    let timeline = gsap.utils.toArray('.timeline-item');
    timeline.forEach((timeline, index) => {
        gsap.from(timeline, {
            opacity: 0,
            y: 50,
            duration: 1,
            scrollTrigger: {
                trigger: timeline,
                start: 'top 90%',
                end: 'bottom top',
                toggleActions: 'play none none reverse',
            }
        });
    });

    // Animation pour le lien de téléchargement du CV
    gsap.from('#cv', {
        opacity: 0,
        y: 50,
        duration: 1,
        scrollTrigger: {
            trigger: '#cv',
            start: 'top 100%',
            end: 'bottom top',
            toggleActions: 'play none none reverse',
        }
    });

}, false);
