<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Bill Pay</title>
	<link rel="stylesheet" href="css3/style.css" type="text/css">
<?php
session_start();
include('../conn.php');
include('payreg.php');
?>
</head>
</head>
<body>
	<div id="background">
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
        </ul>
</nav>
			<div class="content">

						<div class="body">
						<h1>Payment Method</h1>

                        <form id="form2" name="form2" method="post" action="" style="margin:auto;">
                              <table>
									<tbody>
									<tr>
									<td style="color:#283054;">Credit Card</td>
											<td>
											 <input type="radio" style="color: #283054;width: 80px;"name="card"value="cc" checked>

										</td>
										</tr>
										<tr>
											<td style="color: #283054;">Debit Card</td>
											<td>
											 <input type="radio" style="color: #283054;width: 80px;" name="card"value="dc">

										</td>
										</tr>
										<tr>
											<td style="color:#283054;">Internet</td>
										<td>
										 <input type="radio" style="color: #283054;width: 80px;" name="card"	 value="ib">
										</td>
										</tr>


											<td></td>
											<td>
											<button name="next" type="submit" value="Next"class="btn" />Next</button>
											<button name="cancel" type="submit" value="Cancel" class="cancelbtn" />Cancel</button>

										</td>
										</tr>
									</tbody>
								</table>
                             </form>
<h4>Bill Pay</h4>

						</div>
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
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
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