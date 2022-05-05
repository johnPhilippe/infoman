<!DOCTYPE html>
 <html>
 <head>
     <title>Registration</title>
     <style>
         <?php include "loginRegister.css" ?>
     </style>
 </head>
 <body>

 <?php 
    include 'dbcon.php';
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con,$username);
        $first_Name = stripslashes($_REQUEST['first_Name']);
        $first_Name = mysqli_real_escape_string($con,$first_Name);
        $last_Name = stripslashes($_REQUEST['last_Name']);
        $last_Name = mysqli_real_escape_string($con,$last_Name);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $city = stripslashes($_REQUEST['city']);
        $city = mysqli_real_escape_string($con,$city);
        $phone_Num = stripslashes($_REQUEST['phone_Num']);
        $phone_Num = mysqli_real_escape_string($con,$phone_Num);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $password = md5($password);

        $query = "INSERT INTO tbl_users(username, password, email, first_Name, last_Name, city, phone_Num ) VALUES('$username', '$password', '$email', '$first_Name', '$last_Name', '$city', '$phone_Num')";
        $result = mysqli_query($con,$query);

        if ($result) {
            echo "<script>alert('You have successfully registered');</script>"; 
            echo "<script>window.location.href = 'login.php'</script>"; 
        }
    }
    else{
  ?>
 <header class="header">
    <a href="#home" class="logo">
        <img src="images/logo5.png" alt="">
    </a>

    <nav class="nav">
      <ul class="nav-links">
        <li><a href="home.php #home">Home</a></li>
        <li><a href="home.php #about">About</a></li>
        <li><a href="home.php #product">Products</a></li>
        <li><a href="home.php #review">Reviews</a></li>
      </ul>
    </nav>

    <div class="menu">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
    
  </header>

  <div class="reg-box">
    <h3>Registration Form <br><br></h3>
    <form method="post">
        <input type="text" name="username" placeholder="Username"/> <br/>
        <input type="password" name="password" placeholder="Password"/> <br/>
        <input type="email" name="email" placeholder="Email"/> <br/>
        <input type="text" name="first_Name" placeholder="First Name"/> <br/>
        <input type="text" name="last_Name" placeholder="Last Name"/> <br/>
        <input type="text" name="city" placeholder="City"/> <br/>
        <input type="text" name="phone_Num"  placeholder="Phone Number">
        <input type="submit" name="submit" value="Register" class="registerbtn"/>
        <input type="reset" name="reset" value="Clear" class="registerbtn"/>
    </form>
    <div class="container signin">
        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>
  </div>
 
  

 <?php 
}
  ?>

 </body>
 </html>