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

// Loader
document.addEventListener("DOMContentLoaded", function() {
  setTimeout(function() {
      document.querySelector("body").classList.add("loaded");
  }, 100)
});
