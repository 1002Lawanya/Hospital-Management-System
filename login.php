<?php
include 'connect.php';


session_start();

error_reporting(0);
if (isset($_SESSION['name'])) {
    header("Location: user.php");
}



if(isset($_POST['submit'])){
    $mail = $_POST['mail'];
    $paswd = $_POST['paswd'];

    $sql = "SELECT * FROM user WHERE mail='$mail' AND paswd='$paswd'";
    $result=mysqli_query($con,$sql);
    if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['name'] = $row['name'];
        $_SESSION['mail'] = $row['mail'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['gender'] = $row['gender'];

		header("Location: user.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Log In</title>
    <!-- link to css-->
    <link rel="stylesheet" href="home%20style.css">
    <!--Box icon -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
</head>    
<body>
    <header><br>
        <div class="nav container">
            
            <a href="index.php" class="logo"><i class='bx bx-home-smile bx-burst' ></i>+Smile <br> Hospital.lk</a>
            
                            <input type="checkbox" name="" id="menu">
            <label for="menu"><i class='bx bx-menu' ></i></label>
      <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.html">About Us </a></li>
        <li><a href="channeling.html">Channeling</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="facilities.html">Facilities</a></li>
        <li><a href="#S">User Account</a></li>
    </ul>
            <a href="sign-up.php" class="btn">Sign Up</a>
        
        </div>
    </header><br>
    <div class="pc_img">
              <img src="img/lk.jpg.png" alt="" class="pc_img">
            </div>
    
<!--login-->
    <div class="login container">
        <div class="login-container">
            <h2><br><br><br><br>Login to continue...</h2>
            <p>Login with your data that you entered<br>during your registaion</p>
            
            <!--login form-->
            <form action="" method="post">
                <span>Enter your email address</span>
                <input type="email" name="mail"  placeholder="youremail@gmail.com" value="<?php echo $mail; ?>" required>
                <span>Enter your password </span>
                <input type="password" name="paswd" placeholder="password" value="<?php echo $_POST['paswd']; ?>" required>
                

                <a href="#">Forget Password ?</a>
                <input type="submit" name="submit" class="buttom" value="Login">
           </form>
            <a href="sign-up.php" class="btn">Sign up now</a>
        </div>
        <!--login image-->
        <div class="login-image">
            <img src="img/welcom2.png" alt="">
        </div>
    </div>
    
    
<!--Footer-->
<section class="footer">
    <div class="footer-container container">
        <h2><br><br>+Smile Hospital.lk<br><h10>Our Hospital, Your Healing Sanctuary.<br> Compassionate care awaits.</h10></h2>
        <div class="footer-box">
            <h3><br><br>Quick links</h3>
            <a href="#"><i class='bx bx-home-smile' ></i> Home</a>
            <a href="channeling.html"><i class='bx bx-channeling-house' ></i> Channeling</a>
            <a href="#">Rates <i class='bx bxs-star' ></i><i class='bx bxs-star' ></i><i class='bx bxs-star' ></i><i class='bx bxs-star' ></i><i class='bx bxs-star-half' ></i></a>
        </div>
        <div class="footer-box">
            <h3><br><br>Locations</h3>
            <a href="#"><i class='bx bx-location-plus' ></i> Colombo</a>
          
        </div>
        <div class="footer-box">
            <h3><br><br>Contacts</h3>
            <a href="#"><i class='bx bx-phone-call' ></i>  +94 312 234 476</a>
            <a href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=CllgCJfrLfwMrDLmwnPbrFlthmVCwdxMblVGvLnnHwMgfMQkBtmsRndqqmGXtNHwCZJWFhHRrcL"><i class='bx bx-envelope' ></i> smilehospital.lk@gmail.com</a>
            <div class="social">
            <a href="https://www.facebook.com"><i class='bx bxl-facebook'></i></a>
            <a href="https://twitter.com/i/flow/login"><i class='bx bxl-twitter'></i></a>
            <a href="https://www.instagram.com/accounts/login/"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bx-qr'></i></a> 
            </div>
        </div>
    </div>  
</section>

<!--copyright-->
<div class="copyright">
        <p>&#169; Simle Hospital.lk All Right Reserved 2022</p>
    
    </div>
    
    </body>
</html>