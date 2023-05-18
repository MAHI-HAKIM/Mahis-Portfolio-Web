const inputs = document.querySelectorAll(".input");

function addcl() {
  let parent = this.parentNode.parentNode;
  parent.classList.add("focus");
}

function remcl() {
  let parent = this.parentNode.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", addcl);
  input.addEventListener("blur", remcl);
});

// TEXT VALIDATOR
document.addEventListener("DOMContentLoaded", function () {
  // Get form element
  let form = document.getElementById("form");

  let username = document.getElementById("username");
  let password = document.getElementById("password");

  function validateInput() {
    username.setCustomValidity("");
    password.setCustomValidity("");

    if (username.value.trim() === "") {
      username.setCustomValidity("UserName can not be empty!");
    }
    if (password.value.trim() === "") {
      password.setCustomValidity("message box can not be empty!");
    }
  }

  form.addEventListener("submit", function (event) {
    validateInput();

    if (!form.checkValidity()) {
      event.preventDefault();
      if (!password.checkValidity()) {
        password.reportValidity();
      }
      if (!username.checkValidity()) {
        username.reportValidity();
      }
    }
  });

  username.addEventListener("input", validateInput);
  password.addEventListener("input", validateInput);
});
