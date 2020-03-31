const notificationCloseIcon = document.querySelector(".js-notification__close-icon")
const notification = document.querySelector(".js-notification")

// Remove notification when close icon has been clicked on
notificationCloseIcon.addEventListener("click", () => {
  notification.classList.add("js-notification--hidden")
})