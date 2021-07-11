
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register_style.css">
    <style>
    @media only screen and (min-width: 100px) {
    
    #headernav .hamburger {
        display: none;
    }
    #headernav .navbar_list ul {
        position: initial;
        display: block;
        height: auto;
        width: fit-content;
        background-color: transparent;

    }
    #headernav .navbar_list ul li {
        display: inline-block;
    }
    #headernav .navbar_list ul li a {
        font-size: 1.5rem;
    } 
    }
</style>
    <title>Spectrum</title>
</head>
<body>
<section id="headernav">
    <div class="headernav container">
        <div class="navbar">
            <div class="icon"><img src="logoadj.png" alt="" height="80px" width="80px"></div>
            <div class="brand">
                <a href="welcome.php"><h1>SPE<span>CTR</span>UM</h1></a>
            </div>
            <div class="navbar_list">
                <div class="hamburger"><div class="bar"></div></div>
                <ul>
                    <li><a href="logout.php">logout</a></li>
                   
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
include 'config.php';

session_start();
$user=$_SESSION['username']; 
$selectquery = "SELECT * FROM users WHERE username='$user';";
$query = mysqli_query($conn,$selectquery);
$res = mysqli_fetch_array($query)

?>

<section id="profile">
    <div class="container profile">
        <!-- <div class="profile_body"> -->
        <div class="profile_item">

 

           <div class="profile_picture"><img src="profile_img.jpg"></div>
           <div class="brand"><h1><?php echo $res['username']; ?></h1>
        </div>
        </div>
        <div class="profile_item">
            <ul>
                <li>
                    <div class="icon"><img src="https://img.icons8.com/ios-filled/100/000000/computer.png"/></div>
                    <div class="info"><h2>Domain</h2><?php echo $res['domain']; ?></div>
                </li>
                <li>
                    <div class="icon"><img src="https://img.icons8.com/ios-filled/100/000000/motarboard.png"/></div>
                    <div class="info"><h2>branch</h2><?php echo $res['branch']; ?></div>
                </li>
                <li>
                    <div class="icon"><img src="https://img.icons8.com/ios-filled/100/000000/hand-with-pen.png"/></div>
                    <div class="info"><h2>year</h2><?php echo $res['year']; ?></div>
                </li>
                <li>
                    <div class="icon"><img src="https://img.icons8.com/ios-filled/100/000000/email-open.png"/></div>
                    <div class="info"><h2>email</h2><?php echo $res['email']; ?></div>
                </li>
                <li>
                    <div class="icon"><img src="https://img.icons8.com/ios-filled/100/000000/phone.png"/></div>
                   <div class="info"> <h2>phone</h2><?php echo $res['mobile']; ?></div>
               </li>
            </ul>
        </div>
       <!-- </div> -->
    </div>
</section>

<script src="app.js"></script>


</body>
</html>










