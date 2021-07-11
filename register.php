
<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $domain = $_POST['domain'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);


    if ($password == $cpassword) 
{
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) 
        {
            $sql = "INSERT INTO users (username, email, mobile, branch, year, domain, password)
                    VALUES ('$username', '$email','$mobile','$branch', '$year','$domain','$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) 
            {
                echo "<script>alert('Wow! User Registration Completed.')</script>";

                $username = "";
                $email = "";
                $mobile = "";
                $branch = "";
                $year = "";
                $domain = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                header("Location: login.php");
            } 
            else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
        } 
        else 
        {
            echo "<script>alert('Woops! Email Already Exists.')</script>";
        }
        
    } 
    else {
        echo "<script>alert('Password Not Matched.')</script>";
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register_style.css">
    <title>Spectrum</title>
</head>
<body>
<section id="headernav">
    <div class="headernav container">
        <div class="navbar">
            <div class="icon"><img src="logoadj.png" alt="" height="80px" width="80px"></div>
            <div class="brand">
                <a href="index.php"><h1>SPE<span>CTR</span>UM</h1></a>
            </div>
            <div class="navbar_list">
                <div class="hamburger"><div class="bar"></div></div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="register.php">signup</a></li>
                    <li><a href="login.php">login</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="aboutus">
        <div class="container aboutus reg">
            <div class="aboutus_top">
             <h1 class="title">reg<span>is</span>ter</h1>
             
            </div>
            <div class="aboutus_bottom reg_bottom">
                <div class="container_reg">
        <form action="" method="POST" class="login-email">
            
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Mobile number" name="mobile" value="<?php echo $mobile; ?>"required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Branch" name="branch" value="<?php echo $branch; ?>"required>
                
            </div>
            <div class="input-group">
                <input type="text" placeholder="Year" name="year" value="<?php echo $year; ?>"required>
            </div>
            <div class="input-group">
                <input type="domain" placeholder="Domain" name="domain" value="<?php echo $domain; ?>"required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
        </form>
        
       </div>
        </div>
    </div>
    </section>


   


<script src="app.js"></script>


</body>
</html>