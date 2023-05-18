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

// // form-validation
// var form = document.querySelector("form");
// var username = document.getElementById("username");
// var password = document.getElementById("password");

// form.addEventListener("submit", function (e) {
//   var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

//   username.setCustomValidity("");
//   password.setCustomValidity("");

//   if (username.value.trim() === "") {
//     e.preventDefault();
//     username.setCustomValidity("Username cannot be empty");
//   } else if (password.value.trim() === "") {
//     e.preventDefault();
//     password.setCustomValidity("Password cannot be empty");
//   } else if (!emailPattern.test(username.value)) {
//     e.preventDefault();
//     username.setCustomValidity("Please enter a valid email address");
//   }

//   username.reportValidity();
//   password.reportValidity();
// });
