<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    // $name = $_SESSION["name"];
    // $username = $_SESSION["username"];
    // $email = $_SESSION["email"];
    // $password = $_SESSION["password"];
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
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Booking Form</title>
</head>

<body>
    <div class="container">
        <div class="main">
            <div class="nav">
                <a href="logout.php">LOGOUT</a>
                <a href="profile-update.php">PROFILE</a>
                <a href="booking.php">BOOKING</a>
                <a href="packages.php">INFORMATION</a>
                <a href="index.php">HOME</a>
                <img src="images\logo company.jpg">
            </div>

            <h1 style="text-align: center; margin-top: 26px;">PROFILE PAGE</h1>
            <div class="bookingform">
                <div class="booking">
                    <form class="" action="" method="post" autocomplete="off">
                        <p class="formname">KETAWARIANG STUDIO</p>

                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="<?php echo $_SESSION['name']?>" placeholder="Name">

                        <label for="phonenum">Username</label>
                        <input type="text" id="phonenum" name="phonenum" placeholder="Phone Number">

                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Email">

                        <label for="address">Password</label>
                        <input type="text" id="address" name="address" placeholder="Address">

                        <input type="submit" name="update" value="Update">
                    </form>

                    <?php
                    if (isset($_POST['update'])) {
                        $name = mysqli_real_escape_string($conn, $_POST['name']);
                        $username = mysqli_real_escape_string($conn, $_POST['username']);
                        $email = mysqli_real_escape_string($conn, $_POST['email']);
                        $password = mysqli_real_escape_string($conn, $_POST['password']);

                        if(empty($name) OR empty($username) OR empty($email) OR empty($password)){
                            echo "Please Enter The Information";
                        }else{
                            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                echo "Please enter valid email";
                            }else{
                                $id = $_SESSION['id'];
                                $sql = "UPDATE 'tb_user' SET name = '$name', username = '$username', email = '$email', phonenumber = '$phonenumber', password = '$password' WHERE id = '$id';";
                                if(mysqli_query($conn, $sql)){
                                    $_SESSION['name'] = $name;
                                    $_SESSION['username'] = $username;
                                    $_SESSION['email'] = $email;
                                    $_SESSION['password'] = $password;

                                    echo "Update Succesful";
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>

            <br />
        </div>
    </div>
</body>