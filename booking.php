<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: login.php");
}

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $phonenum = $_POST["phonenum"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $date = $_POST["date"];
    if (!empty($name) && !empty($phonenum) && !empty($email) && !empty($address) && !empty($date) && !is_numeric($name)) {
        $query = "INSERT INTO booking VALUES('','$name','$phonenum','$email','$address','$date')";
        mysqli_query($conn, $query);
        // echo "<script> alert('Registration Successful'); </script>";
        // // header("Location: index.php");
    } else {
        echo
        "<script> alert('Please Enter Valid Information'); </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style5 copy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Booking Form</title>
</head>

<body">
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

            <h1 style="text-align: center; margin-top: 26px;">Booking Form</h1>
            <div class="bookingform">
                <div class="booking">
                    <form class="" action="" method="post" autocomplete="off">
                        <p class="formname">KETAWARIANG STUDIO</p>

                        <label for="name">Event Name</label>
                        <input type="text" id="name" name="name" placeholder="Name">

                        <label for="phonenum">Phone Number</label>
                        <input type="text" id="phonenum" name="phonenum" placeholder="Phone Number">

                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Email">

                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Address">

                        <label for="date">Event Date</label>
                        <input type="date" id="date" name="date" placeholder="Password">

                        <input type="submit" name="submit" value="Submit">
                    </form>
                </div>
            </div>

            <br />

            <div class="foot1">
                <footer>
                    <p>&copy; Ketawariang Studio</p>
                </footer>
            </div>
        </div>
    </div>
</body>