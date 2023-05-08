<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM booking WHERE id = $id");
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


            <h1 style="text-align: center; margin-top: 35px;">Booking</h1>
            <div class="inbox" style="background-color: #E6E8FE; border-radius:30px;">
                <div class="maklumat">
                    <p>Name: </p>
                    <p>Phone Number: </p>
                    <p>Email: </p>
                    <p>Address: </p>
                    <p>Event Date: </p>
                </div>
            </div>

            <div class="foot1" style="margin-top: 122px;">
                <footer>
                    <p>&copy; Ketawariang Studio</p>
                </footer>
            </div>
        </div>
    </div>
    </div>

</body>