<?php
include("database.php");

// Function to redirect to a new page
function redirectTo($page) {
  header("Location: $page");
  exit(); // Ensure that the script stops execution after the redirect
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Login Page</title>
  <link rel="stylesheet" href="login.css" />
  <script src="login.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <div class="box">
    <h1>Welcome Again!</h1>
    <p>
      Please log in to <br />
      continue your work!
    </p>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
      <input type="text" name="username" placeholder="Username" />
      <input type="password" name="password" placeholder="Password" />
      <button type="submit" name="submit">Sign in</button>
    </form>


    <div class="notMember">
      Not have an account? <a href="register.php">Register Now!</a>
    </div>
  </div>
</body>

</html>

<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

  if ($password != "" && $username != "") {
   
    $sql = "SELECT password FROM userinfo WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row["password"];
        
        if (password_verify($password, $hashedPassword)) {
          
          $_SESSION['username'] = $username;
          redirectTo("page1.php");
        } else {
          echo "Incorrect password.";
        }
      } else {
        echo "User not found.";
      }
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  } else {
    echo "Username and password are required.";
  }
}

mysqli_close($conn);
?>

