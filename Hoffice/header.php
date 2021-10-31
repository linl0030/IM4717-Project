<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Hoffice</title>
    <meta charset=“utf-8”>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<!--    <link rel="stylesheet" href="css/product-details.css">-->
<!--    <link rel="stylesheet" href="css/orderHistory.css">-->
<!--    <link rel="stylesheet" href="css/orderSummary.css">-->
<!--    <link rel="stylesheet" href="css/settings.css">-->
<!--    <link rel="stylesheet" href="css/cart.css">-->
<!--    <link rel="stylesheet" type="text/css" href="css/login-signup.css">-->
    <script type="text/javascript" src="js/mainSlide.js"></script>
    <script type="text/javascript" src="js/loginSignup.js"></script>
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/openDetail.js"></script>
</head>

<body>

<div class="header">
    <div class="inner-header">

        <div class="logo-container">
            <h1><a href="index.php">HO<span>FFICE</span></a></h1>
        </div>

        <div class="nav-bar">
            <ul class="navigation">
                <a href="furniture.php">
                    <li>Furniture</li>
                </a>
                <a href="home-electronics.php">
                    <li>Home Electronics</li>
                </a>
                <a href="lightening.php">
                    <li>Lightening</li>
                </a>
                <a href="organizer.php">
                    <li>Organizer</li>
                </a>
                <a href="storage.php">
                    <li>Storage</li>
                </a>
                <a href="stationary.php">
                    <li>Stationary</li>
                </a>
                <a href="aboutus.php">
                    <li>About Us</li>
                </a>

            </ul>
            <div class="nav-user-center">
                <?php
                if (isset($_SESSION['valid_user'])) {
                    // include "connect.php";
                    // $query = 'select username from user '
                    // 	 ."where userid=".$_SESSION['userid'];
                    // $result=$conn->query($query);
                    // $username=$result->fetch_assoc();
                    echo "<a href='settings.php'> Hi, " . $_SESSION['valid_user'] . "</a>";
                    echo "<a href='cart.php'><img class = 'icon' src='picture/online-shopping.png'></a>";
                } else {
                    echo "<a href='login_signup.php'><img class = 'icon' src='picture/user.png'></a>";
                    echo "<a href='login_signup.php'><img class = 'icon' src='picture/online-shopping.png'></a>";
                }

                // if(isset($_SESSION['userid'])){
                // 	include "connect.php";
                // 	$query = 'select username from user '
                // 		 ."where userid='$userid' ";
                // 	$result=$conn->query($query);
                // 	$username=$result->fetch_assoc();
                // 	echo "<a href='cart.html'><img class = 'icon' src='picture/online-shopping.png'>";
                // }else{
                // 	echo "<a href='login_signup.php'><img class = 'icon' src='picture/online-shopping.png'></a>";
                // }
                ?>
                <!-- <a href=""><img class = "icon" src="picture/online-shopping.png"></a> -->
                <!-- <a href=""><img class = "icon" src="picture/search.png"></a> -->
            </div>
        </div>
    </div>

</div>