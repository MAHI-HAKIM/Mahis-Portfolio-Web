// NAVBAR FEATURES
let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

menu.onclick = () => {
  menu.classList.toggle("bx-x");
  navbar.classList.toggle("open");
};
document.addEventListener("DOMContentLoaded", function () {
  window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    if (
      document.body.scrollTop > 100 ||
      document.documentElement.scrollTop > 100
    ) {
      document.querySelector("header").classList.add("scrolled");
    } else {
      document.querySelector("header").classList.remove("scrolled");
    }
  }
});

//AUTOMATIC TYPING FEATURE
document.addEventListener("DOMContentLoaded", function () {
  var typed = new Typed("#typed-text", {
    strings: [
      "a Website,UI/UX designer",
      "a Photographer",
      "a Videographer",
      "a Gamer",
    ],
    typeSpeed: 70,
    backSpeed: 60,
    loop: true,
  });
});
