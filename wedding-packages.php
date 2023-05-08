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
    <title>Wedding</title>
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

            <h2 id="topic1" style="text-align: center; margin: 35px;">Wedding</h2>

            <div class="rect">
                <div class="kotak">
                    <img src="images\package-wedding.jpeg">
                    <div class="content">
                        <h3>Pakej Nikah(Album)</h3>
                        <ul>
                            <li>RM750</li>
                            <li>8X12 Crystal Album</li>
                            <li>12x18 Photo Frame</li>
                            <li>Wooden USB</li>
                            <li>Unlimited Shoot</li>
                            <li>Outdoor Session</li>
                            <li>All Edited Photo Given</li>
                        </ul>
                    </div>
                </div>
                <div class="kotak">
                    <img src="images\wedd2.jpeg">
                    <div class="content">
                        <h3>Pakej Nikah(Without Album)</h3>
                        <ul>
                            <li>RM500</li>
                            <li>12x18 Photo Frame</li>
                            <li>Wooden USB</li>
                            <li>Unlimited Shoot</li>
                            <li>Outdoor Session</li>
                            <li>All Edited Photo Given</li>
                        </ul>
                    </div>
                </div>
                <div class="kotak">
                    <img src="images\wedd3.jpeg">
                    <div class="content">
                        <h3>Pakej Tunang</h3>
                        <ul>
                            <li>RM300</li>
                            <li>Wooden USB</li>
                            <li>Unlimited Shoot</li>
                            <li>Outdoor Session</li>
                            <li>All Edited Photo Given</li>
                        </ul>
                    </div>
                </div>
                <div class="kotak">
                    <img src="images\wedd4.jpeg">
                    <div class="content">
                        <h3>Pakej Nikah + Sanding</h3>
                        <ul>
                            <li>RM1200</li>
                            <li>10X12 Crystal Album</li>
                            <li>12x18 Photo Frame</li>
                            <li>Wooden USB</li>
                            <li>Unlimited Shoot</li>
                            <li>Outdoor Session</li>
                            <li>All Edited Photo Given</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="butang">
                <a href="booking.php" style="text-align: center;">Book Now!</a>
            </div>

            <div class="foot1">
                <footer>
                    <p>&copy; Ketawariang Studio</p>
                </footer>
            </div>
        </div>

    </div>
</body>

</html>