// Show password for login
var fields = document.querySelectorAll(".text-login input");

document.querySelector(".showpass").addEventListener("click", function () {
  if (this.classList[2] == "fa-eye-slash") {
    this.classList.remove("fa-eye-slash");
    this.classList.add("fa-eye");
    fields[1].type = "text";
  } else {
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
    fields[1].type = "password";
  }
});

// Validation LOGIN for submit
function validationLogin() {
  // Call methods
  vlEmail();
  vlPassword();

  //   Teleport to home page
  if (vlEmail() && vlPassword() === true) {
    window.location.replace("home.html");
  }
}

// Validation LOGIN for submit
function validationRegister() {
  // Call methods
  vlName();
  vlEmail();
  vlAddress();
  vlDOB();
  vlNotelp();
  vlPassword();

  //   Teleport to home page
  if (vlName() && vlAddress() && vlDOB() && vlNotelp() && vlEmail() && vlPassword() === true) {
    window.location.replace("home.html");
  }
}

// Name
function vlName() {
  //Get value name
  var name = document.getElementById("name").value;
  //Get value error name
  var vname = document.getElementById("error-name");

  if (name.length == 0) {
    vname.textContent = "Name must be filled!";
    vname.style.fontSize = "15px";
    vname.style.color = "white";
    vname.style.fontWeight = "600";
    return;
  } else {
    vname.style.display = "none";
    return true;
  }
}

// Address
function vlAddress() {
  //Get value name
  var address = document.getElementById("address").value;
  //Get value error name
  var vaddress = document.getElementById("error-address");

  if (address.length == 0) {
    vaddress.textContent = "Address must be filled!";
    vaddress.style.fontSize = "15px";
    vaddress.style.color = "white";
    vaddress.style.fontWeight = "600";
    return;
  } else {
    vaddress.style.display = "none";
    return true;
  }
}

//DOB

function vlDOB() {
  var dob = document.getElementById("date").value;
  var vldob = document.getElementById("error-lahir");
  var date_regex =
    /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$|(?:(?:1[6-9]|[2-9]\d)?\d{2})(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\5(?:0?[1-9]|1\d|2[0-8])$|^(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(\/|-|\.)0?2\6(29)$|^(?:(?:1[6-9]|[2-9]\d)?\d{2})(?:(?:(\/|-|\.)(?:0?[1,3-9]|1[0-2])\8(?:29|30))|(?:(\/|-|\.)(?:0?[13578]|1[02])\9(?:31)))$/;
  if (dob.length == "") {
    vldob.textContent = "DOB must be filled!";
    vldob.style.fontSize = "15px";
    vldob.style.color = "white";
    vldob.style.fontWeight = "600";
    return;
  } else if (!dob.match(date_regex)) {
    vldob.textContent = "Invalid date format!";
    vldob.style.fontSize = "15px";
    vldob.style.color = "white";
    vldob.style.fontWeight = "600";
    return;
  } else {
    vldob.style.display = "none";
    return true;
  }
}

function vlNotelp() {
  //Get value notelp
  var notelp = document.getElementById("notelp").value;
  //Get value error notelp
  var vnotelp = document.getElementById("error-notelp");
  var notelpmatch = /^(\+62|62)?[\s-]?0?8[1-9]{1}\d{1}[\s-]?\d{4}[\s-]?\d{2,5}$/;

  if (notelp.length == "") {
    vnotelp.textContent = "Notelp must be filled!";
    vnotelp.style.fontSize = "15px";
    vnotelp.style.color = "white";
    vnotelp.style.fontWeight = "600";
    return;
  } else if (!notelp.match(notelpmatch)) {
    vnotelp.textContent = "Notelp must be the correct format!";
    vnotelp.style.fontSize = "15px";
    vnotelp.style.color = "white";
    vnotelp.style.fontWeight = "600";
  } else if (!notelp > 13) {
    vnotelp.textContent = "Notelp max 13 digit!";
    vnotelp.style.fontSize = "15px";
    vnotelp.style.color = "white";
    vnotelp.style.fontWeight = "600";
  } else {
    vnotelp.style.display = "none";
    return true;
  }
}
// Email
function vlEmail() {
  //Get value email
  var email = document.getElementById("email").value;
  //Get value error email
  var vlemail = document.getElementById("error-email");

  //   Validation Email
  if (email.length == 0) {
    vlemail.textContent = "Email must be filled!";
    vlemail.style.fontSize = "15px";
    vlemail.style.color = "white";
    vlemail.style.fontWeight = "600";
    return;
  } else if (!(email.indexOf("@") != -1)) {
    vlemail.textContent = "Email must contain @";
    vlemail.style.fontSize = "15px";
    vlemail.style.color = "white";
    vlemail.style.fontWeight = "600";
    return;
  } else if (!email.endsWith(".com")) {
    vlemail.textContent = "Email must contain .com";
    vlemail.style.fontSize = "15px";
    vlemail.style.color = "white";
    vlemail.style.fontWeight = "600";
    return;
  } else {
    vlemail.style.display = "none";
    return true;
  }
}

// Password
function isStrPwd(password) {
  var upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  var numbers = "1234567890";
  var upCheck = pwdContains(password, upperCase);
  var numCheck = pwdContains(password, numbers);

  if (upCheck && numCheck) {
    return true;
  } else return false;
}

function pwdContains(password, contains) {
  for (var a = 0; a < password.length; a++) {
    var char = password.charAt(a);
    if (contains.indexOf(char) >= 0) {
      return true;
    }
  }
}

function vlPassword() {
  // Get value password
  var password = document.getElementById("password").value;
  //   Get error valid password
  var vlpassword = document.getElementById("error-password");

  // Password validation
  if (password.length == 0) {
    vlpassword.textContent = "Password must be filled!";
    vlpassword.style.fontSize = "15px";
    vlpassword.style.color = "white";
    vlpassword.style.fontWeight = "600";
    return;
  } else if (password.length < 8 || password.length > 10) {
    vlpassword.textContent = "Password must be min 8 and max 10!";
    vlpassword.style.fontSize = "15px";
    vlpassword.style.color = "white";
    vlpassword.style.fontWeight = "600";
    return;
  } else if (!isStrPwd(password)) {
    vlpassword.textContent = "Password must contains uppercase and number!";
    vlpassword.style.fontSize = "15px";
    vlpassword.style.color = "white";
    vlpassword.style.fontWeight = "600";
    return;
  } else {
    vlpassword.style.display = "none";
    return true;
  }
}
