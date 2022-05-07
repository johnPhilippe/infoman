<?php include "authenticate.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Orders</title>
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

    <section class="product" id="product">

        <div class="product-content">
        <h1 class="headings">Products</h1>
        <div class="gallery" style="border-style: solid; border-width: thin; border-color: white; ">
            <img src="images/drink1.png" alt="monkey1" class="profile_photo">
            <div class="desc">Capuccino<span class="price" name="price"><br>₱199.99</span></div>
            <form action="cart.php" method="post">
                <center><input type="number" name="quantity" class="quantity" placeholder="1" min="0" max="100" step="1" value="1">
                <input type="hidden" name="Product_Number" value="<?=$product['Product_No']?>">
                <input type="submit" value="Add To Cart" class="submit">
            </form>
        </div>

        <div class="gallery" style="border-style: solid; border-width: thin; border-color: white; ">
            <img src="images/drink2.png" alt="monkey2" class="profile_photo">
            <div class="desc">Robusta<span class="price"><br>₱199.99</span></div>
            <form action="cart.php" method="post">
                <center><input type="number" name="quantity" class="quantity" placeholder="1" min="0" max="100" step="1" value="1">
                <input type="hidden" name="Product_No" value="<?=$product['Product_No']?>">
                <input type="submit" value="Add To Cart" class="submit">
            </form>
        </div>

        <div class="gallery" style="border-style: solid; border-width: thin; border-color: white; ">
            <img src="images/drink3.png"  alt="monkey3" class="profile_photo">
            <div class="desc">Latte<span class="price"><br>₱199.99</span></div>
            <form action="cart.php" method="post">
                <center><input type="number" name="quantity" class="quantity" placeholder="1" min="0" max="100" step="1" value="1">
                <input type="hidden" name="Product_No" value="<?=$product['Product_No']?>">
                <input type="submit" value="Add To Cart" class="submit">
            </form>
        </div>

        <div class="gallery" style="border-style: solid; border-width: thin; border-color: white; ">
            <img src="images/drink4.png"  alt="monkey4" class="profile_photo">
            <div class="desc">Espresso<span class="price"><br>₱199.99</span></div>
            <form action="cart.php" method="post">
                <center><input type="number" name="quantity" class="quantity" placeholder="1" min="0" max="100" step="1" value="1">
                <input type="hidden" name="Product_No" value="<?=$product['Product_No']?>">
                <input type="submit" value="Add To Cart" class="submit">
            </form>
        </div>

        <div class="gallery" style="border-style: solid; border-width: thin; border-color: white; ">
            <img src="images/drink5.png"  alt="monkey5" class="profile_photo">
            <div class="desc">Macchiato<span class="price"><br>₱199.99</span></div>
            <form action="cart.php" method="post">
                <center><input type="number" name="quantity" class="quantity" placeholder="1" min="0" max="100" step="1" value="1">
                <input type="hidden" name="Product_No" value="<?=$product['Product_No']?>">
                <input type="submit" value="Add To Cart" class="submit">
            </form>
        </div>

        <div class="gallery" style="border-style: solid; border-width: thin; border-color: white; ">
            <img src="images/drink6.png"  alt="monkey6" class="profile_photo">
            <div class="desc">Black Coffee<span class="price"><br>₱199.99</span></div>
            <form action="cart.php" method="post">
                <center><input type="number" name="quantity" class="quantity" placeholder="1" min="0" max="100" step="1" value="1">
                <input type="hidden" name="Product_No" value="<?=$product['Product_No']?>">
                <input type="submit" value="Add To Cart" class="submit">
            </form>
        </div>
        </div>
    </section>
    <?php
    
    ?>
</body>
</html>
