  //Gsap

  gsap.registerPlugin(ScrollTrigger);

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