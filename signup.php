
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Bill Pay</title>
    <script src="https://kit.fontawesome.com/7cfc17a9b4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="shortcut icon" href="../pay/favicon.ico" type="image/x-icon">
	<?php
include('signreg.php');
?>
</head>
<body id="background">
    <header>
        <img src="images/BPS.png" >
    </header>
    <nav>
        <ul>
            <li ><a href="index.php" >home</a></li>
            <li  ><a href="about.php">about</a></li>
            <li><a href="login.php">login</a></li>
            <li class="active" class="selected"><a href="signup.php">sign up</a></li>
            <li><a href="contact.php">contact</a></li>
        </ul>
    </nav>

    <div class="signup">
     <div class="body">
    <form id="form2" name="form2" method="post" action="">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>


      <label for="fnm"><b>Name</b></label><br>
      <input type="text" placeholder="Enter Name" name="fnm" class="txtfield"   value="<?php if ((isset($name))&&($nameErr==false)){echo $name;}?>"><?php echo $nameErr;?>
      <br>
      <label for="usr"><b>User Name</b></label><br>
      <input type="text" placeholder="Enter User Name" name="usr" class="txtfield"  value="<?php if ((isset($usrname))&&($usrErr==false)){echo $usrname;}?>" required><?php echo $usrErr;?>
      <br>
      <label for="cnt"><b>Contact Number</b></label><br>
      <input type="text" placeholder="Contact Number" name="cnt" class="txtfield"  value="<?php if ((isset($cnt))&&($cntErr==false)){echo $cnt;}?>" required><?php echo $cntErr;?>
      <br>
      <label for="password"><b>Enter Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="password" value=""class="input3" class="txtfield" required><?php echo $pwdErr;?>
      <br>
      <label for="cpassword"><b>Confirm Password</b></label><br>
      <input type="password" placeholder="Confirm Password" name="cpassword" value="" class="txtfield" required><?php echo $cpwdErr;?>
      <br>


      <p>By creating an account you agree to our <a href="#" style="color:blue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button"  action="index.php" method="post" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>






						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</div>
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