<?php
    include "authenticate.php";
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
    // Attempt select query execution
    $sql = "SELECT * FROM tbl_users WHERE id = '$id'";

    if($result = mysqli_query($con, $sql)){
        if($row = mysqli_fetch_array($result)){
            echo "<div class='profile-box'>";

                echo "<div class='flex'>";
                    echo "<h1>PROFILE</br></br></h1>";
                    echo"<div class='edit'>";
                        echo "<a href='edit.php?id=" . $row['id'] . "'><center>Edit Profile</center></a>.</p>";
                    echo"</div>";
                echo "</div>";
                    echo "<div class='container'>"; 
                
                    echo "<div class='profile-element'>";
                        echo "<h2>USERNAME</h2>";
                        echo "<h3>" . $row['username'] . "</h3>";
                    echo "</div>";

                    echo "<div class='profile-element'>";
                        echo "<h2>EMAIL</h2>";
                        echo "<h3>" . $row['email'] . "</h3>";
                    echo "</div>";

                    echo "<div class='profile-element'>";
                        echo "<h2>NAME</h2>";
                        echo "<h3>" . $row['last_Name'] . " ". $row['first_Name'] . "</h3>";
                    echo "</div>";

                    echo "<div class='profile-element'>";
                        echo "<h2>CITY</h2>";
                        echo "<h3>" . $row['city'] . "</h3>";
                    echo "</div>";

                    echo "<div class='profile-element'>";
                        echo "<h2>PHONE NUMBER</h2>";
                        echo "<h3>" . $row['phone_Num'] . "</h3>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
    }

    mysqli_close($con);
?>
<!DOCTYPE html>
 <html>
 <head>
     <title>Profile</title>
     <style>
         <?php include "loginRegister.css" ?>
     </style>
 </head>
 <body>
    <section class="header">
        <a href="home.php #home" class="logo">
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
    </section>

 </body>
 </html>