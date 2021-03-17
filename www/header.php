<?php
    session_start();  //start session on every single page
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/43aa2c6dac.js" crossorigin="anonymous"></script>
    <title>Ogis School</title>
</head>

<body>
    <header>

        <img class="logo" src="assets/logo.jpg" alt="logo goes here">
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav>
            <ul>
                <li><a href="#">ABOUT</a></li>
                <li><a href="schedule.php">SCHEDULE</a></li>
                <?php
                if (isset($_SESSION["useremail"])) {
                    echo "<li><a href='profile.php'>HELLO, ". $_SESSION["useremail"]."</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>LOGOUT</a></li>";
                    
                }else{
                    echo "<li><a href='register.php'>REGISTER</a></li>";
                    echo "<li><a href='login.php'>LOGIN</a></li>";
                }

                ?>

        
            </ul>
        </nav>
        <label for="nav-toggle" class="nav-toggle-label"><!--this is so the checkbox connects to it, to its id-->
            <span></span>
          </label>



    </header>

    <div class="content">