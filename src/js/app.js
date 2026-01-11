(function ($) {
  $("document").ready(function () {
    $(".menu-toggle").on("click", function () {
      $("header").toggleClass("header--menu-is-open");
      // Toggle aria-expanded attribute on click
      $(".main-navigation").toggleClass("menu-is-open");
    });

    // Fermer le menu quand on clique sur un item
    $("#primary-menu a").on("click", function () {
      $("header").removeClass("header--menu-is-open");
      $(".main-navigation").removeClass("menu-is-open");
    });
    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray(".anim-section").forEach((section, index) => {
      const direction = 1;

      // État initial (hors écran)
      gsap.set(section, {
        yPercent: 10 * direction,
        opacity: 1,
        transformOrigin: "0% 0%",
        willChange: "transform",
      });

      // Apparition
      const show = () => {
        gsap.to(section, {
          yPercent: 0,
          duration: 0.2,
          opacity: 1,
          ease: "power3.out",
          overwrite: "auto",
        });
      };

      // Disparition
      const hide = () => {
        gsap.to(section, {
          yPercent: 10 * direction,
          duration: 0.2,
          opacity: 0,
          ease: "power3.in",
          overwrite: "auto",
        });
      };

      ScrollTrigger.create({
        trigger: section,

        // TOP du bloc à 20% du bas
        start: "top 90%",

        // BAS du bloc à 20% du haut
        end: "bottom 10%",

        onEnter: show,
        onEnterBack: show,

        onLeave: hide,
        onLeaveBack: hide,
      });
    });

    // Animation des h2
    gsap.utils.toArray("h2").forEach((h2) => {
      // Séparer le texte en mots au lieu de caractères
      const text = h2.textContent;
      const words = text.split(" ");

      h2.innerHTML = words
        .map((word) => {
          const chars = word
            .split("")
            .map((char) => `<span style="display:inline-block;">${char}</span>`)
            .join("");
          return `<span style="display:inline-block; white-space:nowrap;">${chars}</span>`;
        })
        .join(' ');

      const wordSpans = h2.querySelectorAll("span > span");

      // État initial
      gsap.set(wordSpans, {
        opacity: 0,
        y: 50,
        rotationX: -90,
      });

      // Apparition
      const show = () => {
        gsap.to(wordSpans, {
          opacity: 1,
          y: 0,
          rotationX: 0,
          duration: 0.2,
          stagger: 0.03,
          ease: "back.out(1.7)",
          overwrite: "auto",
        });
      };

      // Disparition
      const hide = () => {
        gsap.to(wordSpans, {
          opacity: 0,
          y: 50,
          rotationX: -90,
          duration: 0.2,
          stagger: 0.02,
          ease: "power3.in",
          overwrite: "auto",
        });
      };

      // Animation au scroll
      ScrollTrigger.create({
        trigger: h2,
        start: "top 90%",
        end: "bottom 10%",
        onEnter: show,
        onEnterBack: show,
        onLeave: hide,
        onLeaveBack: hide,
      });
    });

    // Animation des bulles de background
    const bubble1 = document.querySelector(".body-bubble");
    const bubble2 = document.querySelector(".body-bubble-2");
    const bubble3 = document.querySelector(".body-bubble-3");

    if (bubble1 && bubble2 && bubble3) {
      function animateBubble(bubble, duration) {
        const bubbleWidth = bubble.offsetWidth;
        const bubbleHeight = bubble.offsetHeight;
        const randomX = () => Math.random() * (window.innerWidth - bubbleWidth);
        const randomY = () => Math.random() * (window.innerHeight - bubbleHeight);
        const randomScale = () => 0.8 + Math.random() * 0.5;

        gsap.to(bubble, {
          x: randomX(),
          y: randomY(),
          scale: randomScale(),
          duration: duration,
          ease: "power1.inOut",
          onComplete: () => animateBubble(bubble, duration),
        });
      }

      // Position initiale aléatoire dans le viewport
      gsap.set(bubble1, {
        x: Math.random() * (window.innerWidth - 600),
        y: Math.random() * (window.innerHeight - 600),
      });
      gsap.set(bubble2, {
        x: Math.random() * (window.innerWidth - 700),
        y: Math.random() * (window.innerHeight - 700),
      });
      gsap.set(bubble3, {
        x: Math.random() * (window.innerWidth - 650),
        y: Math.random() * (window.innerHeight - 650),
      });

      // Démarrer les animations avec des durées différentes
      animateBubble(bubble1, 15);
      animateBubble(bubble2, 20);
      animateBubble(bubble3, 18);
    }

    // Animation wave effect pour .wave-text
    gsap.utils.toArray(".wave-text").forEach((element) => {
      const text = element.textContent;
      const chars = text.split("");

      element.innerHTML = chars
        .map((char) => `<span style="display:inline-block;">${char === ' ' ? '&nbsp;' : char}</span>`)
        .join("");

      const charSpans = element.querySelectorAll("span");

      gsap.to(charSpans, {
        y: -10,
        duration: 0.5,
        ease: "sine.inOut",
        stagger: {
          each: 0.05,
          repeat: -1,
          yoyo: true,
        },
      });
    });

    // Animation glitch effect pour .glitch-text
    gsap.utils.toArray(".glitch-text").forEach((element) => {
      const text = element.textContent;

      // Créer 3 couches pour l'effet glitch
      element.innerHTML = `
        <span class="glitch-layer glitch-layer-1">${text}</span>
        <span class="glitch-layer glitch-layer-2">${text}</span>
        <span class="glitch-layer glitch-layer-3">${text}</span>
      `;

      const layer2 = element.querySelector(".glitch-layer-2");
      const layer3 = element.querySelector(".glitch-layer-3");

      // Animation glitch aléatoire
      const glitch = () => {
        const randomX1 = Math.random() * 4 - 2;
        const randomX2 = Math.random() * 4 - 2;

        gsap.to(layer2, {
          x: randomX1,
          duration: 0.1,
          ease: "none",
        });

        gsap.to(layer3, {
          x: randomX2,
          duration: 0.1,
          ease: "none",
        });

        gsap.delayedCall(Math.random() * 2 + 1, glitch);
      };

      glitch();
    });

    // Animation bounce effect pour .bounce-text
    gsap.utils.toArray(".bounce-text").forEach((element) => {
      const text = element.textContent;
      const chars = text.split("");

      element.innerHTML = chars
        .map((char) => `<span style="display:inline-block;">${char === ' ' ? '&nbsp;' : char}</span>`)
        .join("");

      const charSpans = element.querySelectorAll("span");

      charSpans.forEach((char, index) => {
        gsap.from(char, {
          y: -10,
          rotate: 5,
          duration: 0.6,
          ease: "bounce.out",
          repeat: -1,
          repeatDelay: 2,
          delay: index * 0.1,
        });
        gsap.to(char, {
          y: 0,
          rotate: 0,
          duration: 0.6,
          ease: "bounce.out",
          repeat: -1,
          repeatDelay: 2,
          delay: index * 0.1,
        });
      });
    });

    // Animation des lignes courbes (splines)
    const spline1 = document.querySelector(".spline-path-1");
    const spline2 = document.querySelector(".spline-path-2");
    const spline3 = document.querySelector(".spline-path-3");

    if (spline1 && spline2 && spline3) {
      function animateSpline(path, basePoints, duration, amplitude, speed) {
        let time = 0;

        gsap.to(
          {},
          {
            duration: duration,
            repeat: -1,
            ease: "none",
            onUpdate: function () {
              time += speed;

              // Créer une nouvelle courbe ondulante
              const points = basePoints.map((point, index) => {
                const offset = Math.sin(time + index * 0.5) * amplitude;
                return {
                  x: point.x + offset,
                  y: point.y,
                };
              });

              // Construire le path d
              const d = `M${points[0].x},${points[0].y} Q${points[1].x},${points[1].y} ${points[2].x},${points[2].y} T${points[3].x},${points[3].y} Q${points[4].x},${points[4].y} ${points[5].x},${points[5].y}`;
              path.setAttribute("d", d);
            },
          }
        );
      }

      // Points de base pour chaque ligne
      const basePoints1 = [
        { x: 200, y: 0 },
        { x: 300, y: 200 },
        { x: 400, y: 400 },
        { x: 600, y: 800 },
        { x: 700, y: 950 },
        { x: 800, y: 1080 },
      ];

      const basePoints2 = [
        { x: 800, y: 0 },
        { x: 900, y: 250 },
        { x: 1000, y: 500 },
        { x: 1200, y: 850 },
        { x: 1300, y: 1000 },
        { x: 1400, y: 1080 },
      ];

      const basePoints3 = [
        { x: 1400, y: 0 },
        { x: 1500, y: 300 },
        { x: 1600, y: 600 },
        { x: 1800, y: 950 },
        { x: 1850, y: 1050 },
        { x: 1920, y: 1080 },
      ];

      // Animer chaque ligne avec des paramètres différents
      animateSpline(spline1, basePoints1, 500, 80, 0.003);
      animateSpline(spline2, basePoints2, 500, 80, 0.0025);
      animateSpline(spline3, basePoints3, 500, 85, 0.0035);
    }

    // Scroll to top button functionality
    const scrollToTopBtn = $(".scroll-to-top");
    const threshold = window.innerHeight; // 100vh

    $(window).scroll(function () {
      if ($(window).scrollTop() > threshold) {
        scrollToTopBtn.addClass("visible");
      } else {
        scrollToTopBtn.removeClass("visible");
      }
    });

    scrollToTopBtn.on("click", function () {
      $("html, body").animate({ scrollTop: 0 }, 600, "swing");
    });
  });
})(jQuery);
