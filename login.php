<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Bill Pay</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
     <script src="https://kit.fontawesome.com/7cfc17a9b4.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../pay/favicon.ico" type="image/x-icon">
<?php

session_start();
include('logreg.php');


?>
</head>
<body id="background">
    <header>
        <img src="images/BPS.png" >
    </header>

    <nav>
        <ul>
            <li  ><a href="index.php" >home</a></li>
            <li  ><a href="about.php">about</a></li>
            <li class="active"class="selected"><a href="login.php">login</a></li>
            <li><a href="signup.php">sign up</a></li>
            <li><a href="contact.php">contact</a></li>
        </ul>
    </nav>


	<h2>Login </h2>
<div class="login">
  <div class="body">
<form action="logreg.php" method="post">
  <div class="imgcontainer">
    <img src="images/user-circle.svg" style="width:200px; height: 200px; background-color: #B5BCCC;"  class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
	<input type="text" placeholder="Enter Username" name="usr" required>
	<br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>



  </div>
<div class="clearfix">
  <div class="container">
    <button type="button" action="index.php" method="POST" class="cancelbtn">Cancel</button>
    <button type="submit" class="signupbtn">Login</button>
  </div>
  </div>
  </div>
  </div>
</form>

		<div class="footer">
        <div class="footer-content">

          <div class="footer-section">
          <div class="contact">
            <span><i class="fas fa-phone"></i>&nbsp; 123-456-789</span>
            <span><i class="fas fa-envelope"></i>&nbsp; info@billpay.com</span>
          </div>
          <div class="socials">
            <a href="#"><i class="fab fa-facebook" style="color:#3b5998;font-size: 48px;"></i></a>
            <a href="#"><i class="fab fa-instagram" style="color: #3f729b;font-size: 48px;"></i></a>
            <a href="#"><i class="fab fa-twitter" style="color:  #55acee;font-size: 48px;"></i></a>
            <a href="#"><i class="fab fa-youtube" style="color:  #e52d27;font-size: 48px;"></i></a>
          </div>
          </div>
          <div class="footer-section links">
            <h2>DTH Recharges</h2>

            <ul>
              <a href="login.php">
                <li>Airtel</li>
              </a>
              <a href="login.php">
                <li>Tata Sky</li>
              </a>
              <a href="login.php">
              <li>Dish Tv</li>
              </a>
              <a href="login.php">
              <li>Videocon</li>
              </a>
              <a href="login.php">
              <li>Zippytel</li>
              </a>
              <a href="login.php">
              <li>Free dish</li>
              </a>
            </ul>

          </div>
          <div class="footer-section links2">

          <h2>Mobile Recharges</h2>

            <ul>
              <a href="login.php">
                <li>Airtel</li>
              </a>
              <a href="login.php">
                <li>Vodafone</li>
              </a>
              <a href="login.php">
              <li>Jio</li>
              </a>
              <a href="login.php">
              <li>Idea</li>
              </a>
              <a href="login.php">
              <li>BSNL</li>
              </a>
              <a href="login.php">
              <li>Telenor</li>
              </a>
            </ul>

        </div>
        <div class="footer-bottom">
          &copy;  Bill Pay
        </div>
      </div>


        <script>
            var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
        </script>
</body>
</html>






  </tr>
</table>
</body>
</html>