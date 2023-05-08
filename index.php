<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
} else {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style\style5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Homepage</title>
</head>

<body>
  <div class="container">
    <div class="main">
      <div class="nav">
        <a href="logout.php">LOGOUT</a>
        <a href="profile.php">PROFILE</a>
        <a href="booking.php">BOOKING</a>
        <a href="packages.php">INFORMATION</a>
        <a href="index.php">HOME</a>
        <img src="images\logo company.jpg">
      </div>

      <div class="rectangle">
        <div class="inside">
          <div class="left-side">
            <h2>WELCOME TO KETAWARIANG STUDIO</h2>
            <p>We Will Bring Joy To Your Wonderful Day</p>
            <a href="packages.php">
              <button>More</button>
            <!-- <div class="morebutton">
            <a style="text-decoration: none;" href="packages.php">
              <button>More</button>
            </a>
          </div> -->
          </div>
          <div class="right-side">
            <img src="images\tangan.jpeg">
          </div>
        </div>
      </div>

      <div class="foot">
        <footer>
          <p>&copy;Ketawariang Studio</p>
        </footer>
      </div>


    </div>
  </div>
  <!-- <a href="logout.php">Logout</a> -->
</body>

</html>