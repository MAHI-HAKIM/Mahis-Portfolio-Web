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

let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

menu.onclick = () => {
  menu.classList.toggle("bx-x");
  navbar.classList.toggle("open");
};
