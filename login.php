<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: welcome.php");
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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
             <h1 class="title">Log<span>in</span></h1>
             
            </div>
            <div class="aboutus_bottom reg_bottom">
                <div class="container_reg">
        <form action="" method="POST" class="login-email">
           
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
            
        </form>
        
       </div>
        </div>
    </div>
    </section>


   


<script src="app.js"></script>


</body>
</html>