<?php include "authenticate.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Coffee Shop</title>
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
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#product">Products</a></li>
        <li><a href="#review">Reviews</a></li>
      </ul>
    </nav>

    <div class="register">
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

  <section class="home" id="home">

    <div class="home-content">
      <h2>Town's Finest</h2>
      <h3>Discover Greatness</h3>
      <p>Delivered At Your Doorstep</p>
      <a href="#product" class="order-btn">Order Now</a>
    </div>
    
  </section>

  <section class="about" id="about">
    <h1 class="headings">About Us</h1>

    <div class="line">
      <div class="about-content">
        <h2>What is Beans Cafe All About?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
      </div> 
      <div class="about-img">
        <img src="images/about-img2.jpg" class="abt-img" alt="">
        <img src="images/about-img.jpg" class="abt-img" alt="">
      </div>
    </div>

  </section>

  <section class="product" id="product">

    <div class="product-content">
      <h1 class="headings">Products</h1>
      <div class="gallery">
          <img src="images/drink1.png" alt="monkey1" class="profile_photo">
        <div class="desc">Capuccino<span class="price"><br>₱199.99</span></div>
      </div>

      <div class="gallery">
          <img src="images/drink2.png" alt="monkey2" class="profile_photo">
        <div class="desc">Robusta<span class="price"><br>₱199.99</span></div>
      </div>

      <div class="gallery">
          <img src="images/drink3.png"  alt="monkey3" class="profile_photo">
        <div class="desc">Latte<span class="price"><br>₱199.99</span></div>
      </div>

      <div class="gallery">
          <img src="images/drink4.png"  alt="monkey4" class="profile_photo">
        <div class="desc">Espresso<span class="price"><br>₱199.99</span></div>
      </div>

      <div class="gallery">
          <img src="images/drink5.png"  alt="monkey5" class="profile_photo">
        <div class="desc">Macchiato<span class="price"><br>₱199.99</span></div>
      </div>

      <div class="gallery">
          <img src="images/drink6.png"  alt="monkey6" class="profile_photo">
        <div class="desc">Black Coffee<span class="price"><br>₱199.99</span></div>
      </div>
    </div>
  </section>
  
  <section class="review" id="review">
    <h1 class="headings">Reviews</h1>

    <div class="review-div">

      <div class="rev-box">
        <img src="images/rev1.png" alt="">
        <h3 class="rev-h3">John Doe</h3>
        <p class="rev-p">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo impedit error consequatur, quis consectetur placeat minima facilis cupiditate eligendi nam eum pariatur iste. Mollitia excepturi similique beatae delectus, nostrum enim.</p>
      </div>

      <div class="rev-box">
        <img src="images/rev2.png" alt="">
        <h3 class="rev-h3">John dee</h3>
        <p class="rev-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ea quasi accusantium soluta odio. Quasi esse quo officiis odit accusantium nam provident inventore ipsa at! Repudiandae possimus odio aperiam rerum.</p>
      </div>

      <div class="rev-box">
        <img src="images/rev3.png" alt="">
        <h3 class="rev-h3">John faa</h3>
        <p class="rev-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae nesciunt earum ducimus quod doloremque incidunt nulla et, saepe vel. Perferendis id cumque unde fugit quidem nesciunt excepturi, repellat nobis praesentium.</p>
      </div>

    </div>
  </section>

  <section class="footer">
    <div class="footer-content">
      <h2 class="h2-footer">Created By Me |  &copy; Copyrights. All rights reserved.</h2>
    </div>
  </section>

  <script src="app.js"></script>
</body>
</html>