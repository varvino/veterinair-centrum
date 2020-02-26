const button = document.querySelector(".js-hamburger")
const sideNavButton = document.querySelector(".js-close-icon")
const sidenav = document.querySelector(".js-sidenav")
const navItems = document.querySelectorAll('.nav__item')

// Toggle sidenav when hamburger icon has been clicked on
button.addEventListener("click", () => {
  sidenav.classList.toggle("js-sidenav--toggled")
})

// Remove sidenav when close icon has been clicked on
sideNavButton.addEventListener("click", () => {
  sidenav.classList.remove("js-sidenav--toggled")
})

// Remove sidenav when nav items have been clicked on
navItems.forEach(function (element) {
  element.addEventListener('click', function (e) {
    sidenav.classList.remove("js-sidenav--toggled")
  })
})