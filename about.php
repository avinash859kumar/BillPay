<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Bill Pay</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="fonts/montserrat/Montserrat-Italic.ttf">
   <link rel="shortcut icon" href="../pay/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/7cfc17a9b4.js" crossorigin="anonymous"></script>
</head>

<body id="background">
    <header>
        <img src="images/BPS.png" >
    </header>
    <nav>
        <ul>
            <li class="selected"><a href="index.php" >home</a></li>
            <li  class="active"><a href="about.php">about</a></li>
            <li><a href="login.php">login</a></li>
            <li><a href="signup.php">sign up</a></li>
            <li><a href="contact.php">contact</a></li>
        </ul>
    </nav>
   <div class="hero-image">

          </div>
 <div class="about">
      <h1>About Us</h1>
      <p> Welcome To Bill Pay,<br>
      your number one source for all your payment problems<br>
      We're dedicated to giving you the best payment options, with focus on customer satisfaction.<br>
      We hope you enjoy our products as much as we enjoy offering them to you.<br>
      If you have any questions or comments,please don't hesitate to <a style="color:teal;" href="contact.php">Contact Us</a>.

      </p>



 </div>

<div class="sec1">

					<h1>Easy Recharge</h1>
					<p>
            No need to rush to the market for DTH Recharge or Mobile Bill Payment, just login to Paytm and make immediate payments.<br>
            Cherish your experience with exciting Cashback and Discounts on every recharge or bill payment you make with us.<br>
            Our online recharge and bill payment service is a one-stop solution for fast & easy Prepaid Mobiles,<br>
            DTH & Data Card recharge and Postpaid Mobiles & Data Cards Bill Payment. Effortlessly make payments through our safe methods, processed through secured gateways.<br>
					</p>
</div>
<div class="ad">
  <img src="images/cus.jpg">
  <h1><u>Bill Pay</u></h1>
  <p><u><i>24/7 Customer Service Support</i></u></p>
</div>

<div class="mobile">
<table>
<td><img style="width: auto;height: 390px;" src="images/offer.png">  Offers</td>

<td><img style="width: auto;height: 390px;position: right;" src="images/secured.png">Security</td>

<td><img style="width: auto;height: 390px;position: right;" src="images/coupons.png">Coupons</td>

<td><img style="width: auto;height: 390px;position: right;" src="images/services.png">Services</td>
</table>
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