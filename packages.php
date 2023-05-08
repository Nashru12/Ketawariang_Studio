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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Packages</title>
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

            <h1 id="topic1" style="text-align: center; margin: 40px;">Services</h1>

            <div class="block">
                <div class="box">
                    <img src="images\cincin.jpeg" alt="Image 1">
                    <h2>Wedding</h2>
                    <p>Our main service is wedding. We will make your beautiful day as unforgettable memory.</p>
                    <a href="wedding-packages.php"  class="button-link">Preview</a>
                </div>
                <div class="box">
                    <img src="images\nabilarzali.jpeg" alt="Image 2">
                    <h2>Event Photoshoot</h2>
                    <p>We accept to do party photoshoot. We will ensure the joy is displayed in your face</p>
                    <a href="event-packages.php" class="button-link">Preview</a>
                </div>
                <div class="box">
                    <img src="images\jump.jpeg" alt="Image 3">
                    <h2>Other</h2>
                    <p>Others event that require photographer we will accept. The memories will remain in every single picture.</p>
                    <a href="others-packages.php" class="button-link">Preview</a>
                </div>
            </div>

            <div class="foot1">
                <footer>
                    <p>&copy; Ketawariang Studio</p>
                </footer>
            </div>


            <!-- <div class="pakej">
                <div class="rows1">
                    <img src="images\wedding1.jpeg" alt="nike logo">
                    <h3>Pakej 1</h3>
                </div>
                <div class="rows2">
                    <img src="images\wedding2.jpeg" alt="Adidas logo">
                    <h3>Pakej 2</h3>
                </div>
                <div class="rows3">
                    <img src="images\wedding 4.jpeg" alt="Puma logo">
                    <h3>Pakej 3</h3>
                </div>
            </div>

            <h2 id="topic2">Non-Wedding Events</h2>
            <div class="rows1">
                <img src="images\non wedding.jpeg" alt="nike logo">
                <h3>Pakej 4</h3>
            </div> -->

        </div>
    </div>
</body>

</html>