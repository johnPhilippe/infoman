<?php
    include 'dbcon.php';
    session_start(); 
    if (isset($_POST['username'])) 
    {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con,$username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM tbl_users WHERE username='$username' and password='".md5($password)."'";
        $result = mysqli_query($con,$query) or die(mysql_error());

        $rows = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        if ($rows==1) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            header("Location: index.php");
        }
        else
        {
            echo "<script>alert('Username/password is incorrect');</script>"; 
            echo "<script>window.location.href = 'login.php'</script>"; 
        }

    }
    else
    {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log-in Page</title>
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
            <h3>Log In</h3>
            <form method="post" action="">
                <input type="text" name="username" placeholder="Username"/> <br/>
                <input type="password" name="password" placeholder="Password"/><br/>
                <input type="submit" name="submit" value="Login" class="registerbtn"/><br/>
            </form>
            <div class="container signin">
                <p>Not registered yet? <a href="registration.php">Register Here</a>
            </p>
            </div>
        </div>
        

    <?php 
    }
     ?>
</body>
</html>