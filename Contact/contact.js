let emailInput = document.getElementById("email-input");
let nameInput = document.getElementById("name-input");
let messageInput = document.getElementById("message-input");

emailInput.addEventListener("input", function (event) {
  let email = emailInput.value;
  let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

  if (email.match(pattern)) {
    emailInput.setCustomValidity(""); // This will clear the error message
  } else if (emailInput.value.trim() === "") {
    emailInput.setCustomValidity("Email field cannot be empty.");
  } else {
    emailInput.setCustomValidity("Please enter a valid email address!!!"); // This will set the error message
  }
});

passwordInput.addEventListener("input", function (event) {
  if (passwordInput.value.trim() === "") {
    passwordInput.setCustomValidity("Name field cannot be empty.");
  } else {
    passwordInput.setCustomValidity("");
  }
});

messageInput.addEventListener("input", function (event) {
  if (messageInput.value.trim() === "") {
    messageInput.setCustomValidity("Message field cannot be empty.");
  } else {
    messageInput.setCustomValidity("");
  }
});
