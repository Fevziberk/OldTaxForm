function register() {
  var username = document.getElementsByName("username")[0].value;
  var password = document.getElementsByName("password")[0].value;
  var reenterPassword = document.getElementsByName("reenterpassword")[0].value;
  if (username === "" || password === "" || reenterPassword === "") {
    alert("Missing information.");
  } else {
    if (password === reenterPassword) {
      alert("Username and password successfully registered!");
    }
    if (password != reenterPassword) {
      alert("Passwords missmatch");
    }
  }
}
