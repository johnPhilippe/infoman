<?php 
include 'authenticate.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>Secured Page</title>
     <style>
         <?php include "loginRegister.css" ?>
     </style>
 </head>
 <body>
    <header class="header">
        <a href="#home" class="logo">
            <img src="images/logo5.png" alt="">
        </a>

        <nav class="nav">
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#review">Reviews</a></li>
            <li><a href="order.php">Order Now</a></li>
            <li><a href="cart.php">Cart</a></li>
        </ul>
        </nav>

        <div class="menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        </div>
        
    </header>

    <div class="index-box">
        <h2><center> Welcome <?php echo $_SESSION['username']; ?>! </center></h2>
        <a href="logout.php"><center>Logout</center></a>
        <a href="home.php"><center>Go to our Main Page</center></a>
    </div>
 
 </body>
 </html>