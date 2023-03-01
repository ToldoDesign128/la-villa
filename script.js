//Gsap

gsap.registerPlugin(ScrollTrigger);

let mm = gsap.matchMedia();

mm.add("(min-width: 769px)", () => {
  // -----HOME

  // Hero
  gsap.from("#navigation", {
    y: -100,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });

  gsap.from(".hero__content__image", {
    scrollTrigger: {
      trigger: ".hero__content__image",
      toggleActions: "restart reverse restart reverse",
    },
    x: -200,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power1.inOut",
  });

  gsap.from(".hero__content__block", {
    scrollTrigger: {
      trigger: ".hero__content__block",
      toggleActions: "restart reverse restart reverse",
    },
    x: 200,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power1.inOut",
  });

  // Poster
  gsap.from(".poster__container__block__text", {
    scrollTrigger: {
      trigger: ".poster__container__block__text",
      toggleActions: "restart reverse restart reverse",
    },
    x: -200,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power1.inOut",
  });

  gsap.from(".poster__container__block__image", {
    scrollTrigger: {
      trigger: ".poster__container__block__image",
      toggleActions: "restart reverse restart reverse",
    },
    x: 200,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });

  // Poster 2
  gsap.from(".poster2__container__block__image", {
    scrollTrigger: {
      trigger: ".poster2__container__block__image",
      toggleActions: "restart reverse restart reverse",
    },
    x: -200,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });

  gsap.from(".poster2__container__block__text", {
    scrollTrigger: {
      trigger: ".poster2__container__block__text",
      toggleActions: "restart reverse restart reverse",
    },
    x: 200,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power1.inOut",
  });

  // Focus
  gsap.from(".focus__text", {
    scrollTrigger: {
      trigger: ".focus__text",
      toggleActions: "restart reverse restart reverse",
    },
    x: -200,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });

  // Ristorante
  gsap.from(".ristorante__container__block__text", {
    scrollTrigger: {
      trigger: ".ristorante__container__block__text",
      toggleActions: "restart reverse restart reverse",
    },
    x: -200,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });

  gsap.from(".ristorante__container__block__image", {
    scrollTrigger: {
      trigger: ".ristorante__container__block__image",
      toggleActions: "restart reverse restart reverse",
    },
    x: 200,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power1.inOut",
  });

  // Bando
  gsap.from(".poster3__container__block__image", {
    scrollTrigger: {
      trigger: ".poster3__container__block__image",
      toggleActions: "restart reverse restart reverse",
    },
    x: -200,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power1.inOut",
  });

  gsap.from(".poster3__container__block__text", {
    scrollTrigger: {
      trigger: ".poster3__container__block__text",
      toggleActions: "restart reverse restart reverse",
    },
    x: 200,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });

  // -----CAMERE

  // Poster
  gsap.from(".camere__poster__container__block__text", {
    scrollTrigger: {
      trigger: ".camere__poster__container__block__text",
      toggleActions: "restart reverse restart reverse",
    },
    x: -200,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power1.inOut",
  });

  gsap.from(".camere__poster__container__block__image", {
    scrollTrigger: {
      trigger: ".camere__poster__container__block__image",
      toggleActions: "restart reverse restart reverse",
    },
    x: 200,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });

  // Poster 2
  gsap.from(".camere__frase__container__title", {
    scrollTrigger: {
      trigger: ".camere__frase__container__title",
      toggleActions: "restart reverse restart reverse",
    },
    Y: -100,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });

  // Camera Gallery
  gsap.from(".camere__gallery__container__block__text", {
    scrollTrigger: {
      trigger: ".camere__gallery__container__block__text",
      toggleActions: "restart reverse restart reverse",
    },
    x: -200,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });

  gsap.from(".camere__gallery__container__block__image", {
    scrollTrigger: {
      trigger: ".camere__gallery__container__block__image",
      toggleActions: "restart reverse restart reverse",
    },
    x: 200,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power1.inOut",
  });

  // Camera Gallery 2
  gsap.from(".camere__gallery2__container__block__text", {
    scrollTrigger: {
      trigger: ".camere__gallery2__container__block__text",
      toggleActions: "restart reverse restart reverse",
    },
    x: 200,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });

  gsap.from(".camere__gallery2__container__block__image", {
    scrollTrigger: {
      trigger: ".camere__gallery2__container__block__image",
      toggleActions: "restart reverse restart reverse",
    },
    x: -200,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power1.inOut",
  });

  // -----RISTORANTE

  // Frase
  gsap.from(".ristorante__frase__container", {
    scrollTrigger: {
      trigger: ".ristorante__frase__container",
      toggleActions: "restart reverse restart reverse",
    },
    Y: -100,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });
  // Poster
  gsap.from(".ristorante__poster__container__block__text", {
    scrollTrigger: {
      trigger: ".ristorante__poster__container__block__text",
      toggleActions: "restart reverse restart reverse",
    },
    x: -200,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power1.inOut",
  });
  gsap.from(".ristorante__poster__container__block__image", {
    scrollTrigger: {
      trigger: ".ristorante__poster__container__block__image",
      toggleActions: "restart reverse restart reverse",
    },
    x: 200,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });
  // Poster 2
  gsap.from(".ristorante__poster2__container__block__text", {
    scrollTrigger: {
      trigger: ".ristorante__poster2__container__block__text",
      toggleActions: "restart reverse restart reverse",
    },
    x: 200,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power1.inOut",
  });
  gsap.from(".ristorante__poster2__container__block__image", {
    scrollTrigger: {
      trigger: ".ristorante__poster2__container__block__image",
      toggleActions: "restart reverse restart reverse",
    },
    x: -200,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });
  // Poster 3
  gsap.from(".ristorante__poster3__container__block__text", {
    scrollTrigger: {
      trigger: ".ristorante__poster3__container__block__text",
      toggleActions: "restart reverse restart reverse",
    },
    x: -200,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power1.inOut",
  });
  gsap.from(".ristorante__poster3__container__block__image", {
    scrollTrigger: {
      trigger: ".ristorante__poster3__container__block__image",
      toggleActions: "restart reverse restart reverse",
    },
    x: 200,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });
  // Poster 4
  gsap.from(".ristorante__poster4__container__block__text", {
    scrollTrigger: {
      trigger: ".ristorante__poster4__container__block__text",
      toggleActions: "restart reverse restart reverse",
    },
    x: 200,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power1.inOut",
  });
  gsap.from(".ristorante__poster4__container__block__image", {
    scrollTrigger: {
      trigger: ".ristorante__poster4__container__block__image",
      toggleActions: "restart reverse restart reverse",
    },
    x: -200,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });
  // Frase 2
  gsap.from(".ristorante__frase2__container", {
    scrollTrigger: {
      trigger: ".ristorante__frase2__container",
      toggleActions: "restart reverse restart reverse",
    },
    Y: -100,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });
  // Poster 5
  gsap.from(".ristorante__poster5__container__block__text", {
    scrollTrigger: {
      trigger: ".ristorante__poster5__container__block__text",
      toggleActions: "restart reverse restart reverse",
    },
    x: -200,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power1.inOut",
  });
  gsap.from(".ristorante__poster5__container__block__image", {
    scrollTrigger: {
      trigger: ".ristorante__poster5__container__block__image",
      toggleActions: "restart reverse restart reverse",
    },
    x: 200,
    opacity: 0,
    duration: 1,
    ease: "power1.inOut",
  });
});

jQuery(document).ready(function () {
  //Hamburger menu
  jQuery(".hamburger").click(function () {
    jQuery(".hamburger").toggleClass("is-active");
    jQuery(this)
      .parent()
      .parent()
      .parent()
      .parent(".container")
      .children(".menu__mobile")
      .toggleClass("open");
  });

  //Splide
  var elms = document.getElementsByClassName("splide");

  for (var i = 0; i < elms.length; i++) {
    new Splide(elms[i], {
      type: "loop",
      perPage: 1,
    }).mount();
  }
});
