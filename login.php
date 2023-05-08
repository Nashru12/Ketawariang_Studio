<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}
if (isset($_POST["submit"])) {
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) > 0) {
    if ($password == $row['password']) {
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    } else {
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  } else {
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style\loginsignup.css">
  <title>Login</title>
</head>

<body>
  <div class="container">
    <div class="left">
      <div class="logo">
        <img src="images\logo company.jpg">
        <h2 style="margin-top: 50px; font-size: 30px;">KETAWARIANG STUDIO</h2>
      </div>
    </div>
    <div class="right">
      <h1>Login</h1>
      <form class="" action="" method="post" autocomplete="off">
        <label for="usernameemail">Username: </label>
        <input type="text" name="usernameemail" id="usernameemail" required value="">
        <label for="password">Password : </label>
        <input type="password" name="password" id="password" required value=""><br>
        <!-- <a href="#">Forgot Password?</a> -->
        <button type="submit" name="submit">Login</button>
      </form>

      <a class="signup" href="registration.php">Don't Have an Account</a>
      <!-- <div class="signup">
                <p>Don't have an account?</p>
                <button type="button">Sign up</button>
            </div> -->
    </div>
  </div>
</body>

</html>