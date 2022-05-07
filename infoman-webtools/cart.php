<?php include "authenticate.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Cart</title>
    <style>
      <?php include "style.css" 
      ?>
    </style>
</head>

<body>
    
    <header class="header">
        <a href="#home" class="logo">
            <img src="images/logo5.png" alt="">
        </a>

        <nav class="nav">
            <ul class="nav-links">
                <li><a href="home.php #home">Home</a></li>
                <li><a href="home.php #about">About</a></li>
                <li><a href="home.php #review">Reviews</a></li>
                <li><a href="order.php">Order Now</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
            
        <div class="register">
            <ul>
                <a href="profile.php" class="sign"><?php echo $_SESSION['username']; ?></a>
                <a href="logout.php" class="log">logout</a>
            </ul>
        </div>
        
        <div class="menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        </div>
    </header>

    
</body>
</html>