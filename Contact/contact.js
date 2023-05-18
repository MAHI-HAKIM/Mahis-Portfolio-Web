document.addEventListener("DOMContentLoaded", function () {
  // Get form element
  let form = document.getElementById("form");

  // Get input fields
  let nameInput = document.getElementById("name-input");
  let emailInput = document.getElementById("email-input");
  let messageInput = document.getElementById("message-input");

  // Validation function
  function validateInput() {
    // Reset custom validation messages
    nameInput.setCustomValidity("");
    emailInput.setCustomValidity("");
    messageInput.setCustomValidity("");

    // Trim input values and check if fields are empty
    if (nameInput.value.trim() === "") {
      nameInput.setCustomValidity("Name can not be empty!");
    }

    if (emailInput.value.trim() === "") {
      emailInput.setCustomValidity("Email can not be empty!");
    } else {
      // Check if email is valid
      let emailFormat = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
      if (!emailInput.value.match(emailFormat)) {
        emailInput.setCustomValidity(
          "Please enter a valid email address with @ "
        );
      }
    }

    if (messageInput.value.trim() === "") {
      messageInput.setCustomValidity("message box can not be empty!");
    }
  }

  // Event listener for form submission
  form.addEventListener("submit", function (event) {
    validateInput();

    // Call the reportValidity function to trigger the validation UI
    if (!form.checkValidity()) {
      event.preventDefault();
      if (!messageInput.checkValidity()) {
        messageInput.reportValidity();
      }
      if (!emailInput.checkValidity()) {
        emailInput.reportValidity();
      }
      if (!nameInput.checkValidity()) {
        nameInput.reportValidity();
      }
    }
  });

  // Event listeners for input changes
  nameInput.addEventListener("input", validateInput);
  emailInput.addEventListener("input", validateInput);
  messageInput.addEventListener("input", validateInput);
});
