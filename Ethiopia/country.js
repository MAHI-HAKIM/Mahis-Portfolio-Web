// NAVBAR FEATUREs
let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector(".menu");

menu.onclick = () => {
  menu.classList.toggle("bx-x");
  navbar.classList.toggle("active");
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
      document.querySelector(".navbar").classList.add("apear");
    } else {
      document.querySelector("navbar").classList.remove("apear");
    }
  }
});
