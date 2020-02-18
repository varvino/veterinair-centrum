const button = document.querySelector(".js-hamburger");
const sideNavButton = document.querySelector(".js-close-icon");
const sidenav = document.querySelector(".js-sidenav");

button.addEventListener("click", () => {
    sidenav.classList.toggle("js-sidenav--toggled");
});

sideNavButton.addEventListener("click", () => {
  sidenav.classList.remove("js-sidenav--toggled");
});
