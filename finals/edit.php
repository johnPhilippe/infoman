<?php
// Include config file
require_once "dbcon.php";
 
// Define variables and initialize with empty values
$fname = $lname = $username = $city = $email = $phone_Num = "";
$fname_err = $lname_err = $username_err = $city_err = $email_err = $phone_Num_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
   // Validate name
    $input_fname = trim($_POST["fname"]);
    if(empty($input_fname)){
        $fname_err = "Please enter first name.";
    } else{
        $fname = $input_fname;
    }
    
    // Validate lastname
    $input_lname = trim($_POST["lname"]);
    if(empty($input_lname)){
        $lname_err = "Please enter lastname.";     
    } else{
        $lname = $input_lname;
    }
    
    $input_username= trim($_POST["username"]);
     if(empty($input_username)){
        $username_err = "Please enter representative number.";     
    } else{
        $username = $input_username;
    }

    $input_city = trim($_POST["city"]);
    if(empty($input_city)){
        $city_err = "Please enter city.";     
    } else{
        $city = $input_city;
    }

    $input_email= trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter email.";     
    } else{
        $email = $input_email;
    }

    $input_phone_Num= trim($_POST["phone_Num"]);
    if(empty($input_phone_Num)){
        $phone_Num_err = "Please enter Phone Number.";     
    } else{
        $phone_Num = $input_phone_Num;
    }
    
    
    // Check input errors before inserting in database
    if(empty($fname_err) && empty($lname_err) && empty($username_err) && empty($city_err) && empty($email_err) && empty($phone_Num_err)){
        // Prepare an update statement
        $sql = "UPDATE tbl_users SET first_Name=?, last_Name=?, username=?, city=?, email=?, phone_Num=? WHERE id=$id";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
             mysqli_stmt_bind_param($stmt, "ssssss", $param_fname, $param_lname, $param_username, $param_city, $param_email, $param_phone_num);
             echo "update hello";
             // Set parameters
            $param_fname = $fname;
            $param_lname = $lname;
            $param_username = $username;
            $param_city = $city;
            $param_email = $email;
            $param_phone_num = $phone_Num;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: profile.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($con);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM tbl_users WHERE id = ?";
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $fname = $row["first_Name"];
                    $lname = $row["last_Name"];
                    $username = $row["username"];
                    $city = $row["city"];
                    $email = $row["email"];
                    $phone_Num = $row["phone_Num"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($con);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
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
  <div class="edit-box">
    <h1>Edit Profile</h1>
    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="fname" class="form-control <?php echo (!empty($fname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $fname; ?>">
            <span class="invalid-feedback"><?php echo $fname_err;?></span>
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lname" class="form-control <?php echo (!empty($lname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $lname; ?>">
            <span class="invalid-feedback"><?php echo $lname_err;?></span>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err;?></span>
        </div>
        <div class="form-group">
            <label>City</label>
            <input type="text" name="city" class="form-control <?php echo (!empty($city_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $city; ?>">
            <span class="invalid-feedback"><?php echo $city_err;?></span>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
            <span class="invalid-feedback"><?php echo $email_err;?></span>
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="phone_Num" class="form-control <?php echo (!empty($phone_Num_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone_Num; ?>">
            <span class="invalid-feedback"><?php echo $phone_Num_err;?></span>
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <input type="Submit" class="btn-edit-submit" value="Save Changes">
        <a href="profile.php" class="btn-edit-cancel">Cancel</a>
    </form>
  </div>
</body>
</html>