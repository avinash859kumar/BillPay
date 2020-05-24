<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Bill Pay</title>
	<link rel="stylesheet" href="css2/style.css" type="text/css">
       	<script src="https://kit.fontawesome.com/7cfc17a9b4.js" crossorigin="anonymous"></script>
	<?php
session_start();
	?></head>

<body id="background">

		<div id="page">
			<div id="header">
					<div align="right" ><?php if (isset($_SESSION['name']))
      echo "<font color='white'>".$_SESSION['name']."</font><br><br>";

?>
</div>
<div id="logo">
					<a href="index.php"><img src="images/bp1.png" alt="LOGO" height="112" width="150"></a>
				</div>
    <nav>
        <ul>
            <li><a href="../user/index.php" >Home</a></li>
            <li class="selected" class="active"><a href="recharge.php" >Mobile</a></li>
            <li  ><a href="../dth/dthrecharge.php">Dth</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="complaints.php">Complaints</a></li>

            <li><a href='../logout.php'>LOGOUT</a></li>
            <li>
        </ul>
</nav>
			<div id="contents">
				<div id="adbox">
					<img src="images/recharge_banner.png" alt="Img">
					<h1>Easy Recharge</h1>
					<p style="color: #283054;">
						No need to rush to the market for DTH Recharge or Mobile Bill Payment, just login to Paytm and make immediate payments. Cherish your experience with exciting Cashback and Discounts on every recharge or bill payment you make with us. Our online recharge and bill payment service is a one-stop solution for fast & easy Prepaid Mobiles, DTH & Data Card recharge and Postpaid Mobiles & Data Cards Bill Payment. Effortlessly make payments through our safe methods, processed through secured gateways.
					</p>
				</div>
				<div id="main">
					<div class="box">
						<div>
							<div>
								<h3>Services</h3>
								<ul>
							<li>
										<h4><a href="../user/recharge.php">Mobile Recharge</a></h4>
										<span></span>
										<p style="color: #283054;">
											Airtel Recharge | Vodafone Recharge | Aircel Recharge | BSNL Recharge |Idea Recharge | Reliance GSM Recharge | Tata Docomo GSM Recharge | Tata Docomo CDMA Recharge | MTS Recharge | Reliance CDMA Recharge
										</p>
									</li>
									<li>
										<h4><a href="../dth/dthrecharge.php">DTH Recharge</a></h4>
										<span></span>
										<p style="color: #283054;">
											Airtel Digital Recharge | TataSky Recharge | Dishtv Recharge | Videocon d2h Recharge | Reliance Digital Tv Recharge | Sun Direct Recharge
										</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="testimonials" class="box">
						<div>
							<div>
								<h3>Live, Laugh, Enjoy</h3>
								<p style="color: #283054;">
									Relive the moment and revive your daily routine with an amazing experience at an incredible amusement park. Book tickets for theme parks & water parks in seconds at Paytm.com and get ready to make your day an adventurous one.

								</p>
							</div>
						</div>
					</div>
					<div id="testimonials" class="box">
						<div>
							<div>
								<h3>External Links</h3>
								<p >

								<p style="color: #283054;">If You Don't Register You Bank Account Then <a href="regbank.php">CLICK HERE</a></p>
								<p style="color: #283054;">If You Don't Register You Credit Card Then <a href="regcard.php">CLICK HERE</a></p>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div id="sidebar">
					<div class="section">
						<a href="#"><img src="images/airtel.png" alt="Img"></a>
					</div>
					<div class="section">
						<a href="#"><img src="images/vodafone.png" alt="Img"></a>
					</div>
					<div class="section">
						<a href="#"><img src="images/docomo.png" alt="Img"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
        <div class="footer-content">

          <div class="footer-section about">
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
          &copy;  Bill Pay  | Designed by Avinash Kumar
        </div>
      </div>
</body>
</html>