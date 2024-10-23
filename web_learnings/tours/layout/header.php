<?php include('config.php'); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$appName?></title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
      <!-- Font Awsome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <script src="js/slider.js"></script>

</head>

<body>

    <!--------------- NavBar --------------->
    <ul class="navbar">
        <li> <img src="assets/images/logo.png" class="logo" width="80px" alt="" srcset="" style="margin-right: 5rem;"> </li>
        <li><a class="<?=($active=='home')?'active':''?>" href="index.php">Home</a></li>
        <li><a class="<?=($active=='excursions')?'active':''?>" href="excursions.php">Excursions</a></li>
        <li><a class="<?=($active=='about')?'active':''?>" href="about.php">About</a></li>
        <li><a class="<?=($active=='contact')?'active':''?>" href="contact.php">Contact</a></li>
        <?php
        if(isset($_SESSION['user'])){ ?>
            <li><a class="<?=($active=='bookings')?'active':''?>" href="my-bookings.php">My Bookings</a></li>
            <li><a class="<?=($active=='logout')?'active':''?>" href="functions.php?logout=1">Logout</a></li>
        <?php } 
        else{?>
            <li><a class="<?=($active=='login')?'active':''?>" href="login.php">Login</a></li>
            <li><a class="<?=($active=='register')?'active':''?>" href="register.php">Register</a></li>
        <?php }?>
    </ul>
