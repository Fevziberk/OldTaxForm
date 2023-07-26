<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Register Page</title>
  <link rel="stylesheet" href="register.css" />
  <script src="register.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <div class="box">
    <h1>Welcome!</h1>
    <p>
      Please register to <br />
      begin your work!
    </p>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
      <input type="text" name="username" placeholder="Username" />
      <input type="password" name="password" placeholder="Password" />
      <input type="password" name="reenterpassword" placeholder="Re-enter Password" />
      <button type="submit" name="submit">Register</button>
    </form>


    <div class="member">
      Already have an account? <a href="index.php">Log in now!</a>
    </div>
  </div>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
  $passwordreenter = filter_input(INPUT_POST, "reenterpassword", FILTER_SANITIZE_SPECIAL_CHARS);

  if ($password == $passwordreenter && $username != "") {
    
    $sql_check = "SELECT * FROM userinfo WHERE username = '$username'";
    $result_check = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result_check) > 0) {
      
      echo "Username already taken. Please choose a different username.";
    } else {
     
      $hash = password_hash($password, PASSWORD_DEFAULT);

      
      $sql_userinfo = "INSERT INTO userinfo (username, password) VALUES ('$username', '$hash')";
      mysqli_query($conn, $sql_userinfo);

    
      $sql_dateinfo = "INSERT INTO dateinfo (Username) VALUES ('$username')";
      mysqli_query($conn, $sql_dateinfo);

    
      $sql_noinfo = "INSERT INTO noinfo (Username) VALUES ('$username')";
      mysqli_query($conn, $sql_noinfo);

      
      $sql_whofrominfo = "INSERT INTO whofrominfo (Username) VALUES ('$username')";
      mysqli_query($conn, $sql_whofrominfo);

      
      $sql_typeinfo = "INSERT INTO typeinfo (Username) VALUES ('$username')";
      mysqli_query($conn, $sql_typeinfo);

      
      $sql_priceinfo = "INSERT INTO priceinfo (Username) VALUES ('$username')";
      mysqli_query($conn, $sql_priceinfo);

      echo "Successfully registered!";
    }
  } elseif ($password != $passwordreenter) {
    echo "Passwords mismatch";
  } elseif ($username == "") {
    echo "Missing username";
  }
}
mysqli_close($conn);
?>

