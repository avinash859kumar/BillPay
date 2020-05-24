<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Bill Pay</title>
	<link rel="stylesheet" href="css2/style.css" type="text/css">
<?php
include('ccreg.php');


?>
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
					<a href="../user/index.php"><img src="images/bp1.png" alt="LOGO" height="112" width="150"></a>
				</div>
				<nav>
        <ul>
            <li><a href="../user/index.php" >Home</a></li>
            <li><a href="../user/recharge.php" >Mobile</a></li>
            <li  ><a href="../dth/dthrecharge.php">Dth</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="complaints.php">Complaints</a></li>
            <li><a href='../logout.php'>LOGOUT</a></li>
        </ul>
</nav>
			<div class="card">

                                 <div class="body">


						<h1>Card Details</h1>
                      <center>  <form id="form2" name="form2" method="post" action="" style="margin:auto;">
						                            <table>
									<tbody>

										<tr>
											<td style="color: #283054;">Card Number</td>
											<td>
											 <input name="cnum" placeholder="Card Number" type="text" value="<?php if ((isset($cnum))&&($cnumErr==false)){echo $cnum;}?>"  class="txtfield" />
								  <span style="color:#000150; font-family:Helvatica; font-size:12px;">*<?php echo $cnumErr;?></span>
								  </td>
										</tr>
										<tr>
											<td style="color:#283054;">Expiry Date</td>
											<td>
											<input name="exp1" type="text" placeholder="MONTH" value="<?php if ((isset($exp1))&&($exp1Err==false)){echo $exp1;}?>"  class="txtfield" />
                                	<span style="color:#000150; font-family:Helvatica; font-size:12px;"><?php echo $exp1Err;?></span>
									<input name="exp2" type="text" placeholder="YEAR" value="<?php if ((isset($exp2))&&($exp2Err==false)){echo $exp2;}?>"  class="txtfield"  />
                                	<span style="color:#000150; font-family:Helvatica; font-size:12px;">*<?php echo $exp2Err;?></span>
									</td>
										</tr>
										<tr>
											<td style="color:#283054;">CVV</td>
											<td>
											 <input name="cvv" type="password" placeholder="CVV"value="<?php if ((isset($cvv))&&($cvvErr==false)){echo $cvv;}?>"  class="txtfield" />
								  <span style="color:#000150; font-family:Helvatica; font-size:12px;">*<?php echo $cvvErr;?></span>

									</td>
										</tr>
										 <tr>
											<td></td>
											<td>
											 <button name="prcd" type="submit" value="Proceed"class="btn"/>Proceed</button>
                                       <button name="cancel" type="submit" value="Cancel" class="cancelbtn"/>Cancel</button>

										</td>
										</tr>
									</tbody>
								</table>
                             </form></center>
						<h4>Bill Pay</h4>


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