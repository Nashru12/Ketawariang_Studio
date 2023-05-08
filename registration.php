<?php
require 'config.php';

if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}
if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $phonenumber = $_POST["phonenumber"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if (mysqli_num_rows($duplicate) > 0) {
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  } else {
    if ($password == $confirmpassword) {
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$phonenumber','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      header("Location: index.php");
    } else {
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style\signup.css">
  <title>Registration</title>
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
      <h1>Sign Up</h1>
      <form class="" action="" method="post" autocomplete="off">
        <label for="name">Name : </label>
        <input type="text" name="name" id="name" required value="">
        <label for="username">Username : </label>
        <input type="text" name="username" id="username" required value="">
        <label for="email">Email : </label>
        <input type="email" name="email" id="email" required value="">
        <label for="phonenumber">Phone Number : </label>
        <input type="text" name="phonenumber" id="phonenumber" required value="">
        <label for="password">Password : </label>
        <input type="password" name="password" id="password" required value="">
        <label for="confirmpassword">Confirm Password : </label>
        <input type="password" name="confirmpassword" id="confirmpassword" required value="">
        <button type="submit" name="submit">Register</button>
      </form>
    </div>
  </div>
</body>

</html>