<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Bill Pay</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css2/style.css" type="text/css">
    <script src="https://kit.fontawesome.com/7cfc17a9b4.js" crossorigin="anonymous"></script>
<?php

session_start();
include('rcreg.php');
include('../conn.php');

?>
</head>
<body>
	<div class ="background">

			<div class="header">
			<div align="right" ><?php if (isset($_SESSION['name']))
      echo "<font color='white'>".$_SESSION['name']."</font><br><br>";

?>
</div>
        </div>
				<div id="logo">
					<a href="index.php"><img src="images/bp1.png" alt="LOGO" height="112" width="150"></a>
				</div>
<nav>
        <ul>
            <li><a href="../user/index.php" >Home</a></li>
            <li class="selected" class="active"><a href="recharge.php" >Mobile</a></li>
            <li  ><a href="../dth/dthrecharge.php">Dth</a></li>
            <li><a href="../user/history.php">History</a></li>
            <li><a href="../user/complaints.php">Complaints</a></li>
            <li><a href='../logout.php'>LOGOUT</a></li>
        </ul>
</nav>
<div class="details">
  <div class="box">
					<h1>Mobile Recharge</h1>



                        <form id="form2" name="form2" method="post" action="" style="margin:auto;">

                            <table style="margin: 72px 320px 48px; padding: 15px;">
				<tbody>
				 <tr>
				<td>
				<input name="nam" type="hidden" value="<?php if (isset($_SESSION['userlogin'])){$name= $_SESSION['userlogin'];echo $name;}?>" class="txtfield"  />

										</td>
										</tr>
										<tr>
											<td style="color:#283054;"> Mobile Number</td>
											<td>
											 <input name="mnum"  type="text" value="<?php if ((isset($mnum))&&($mnumErr==false)){echo $mnum;}?>" class="txtfield" />
								  <span style="color:#000150; font-family:Helvatica; font-size:12px;">*<?php echo $mnumErr;?></span>

										</td>
										</tr>
										<tr>
											<td style="color:#283054;">Type</td>
										<td>
				<select name="typ" value="<?php if ((isset($typ))&&($typErr==false)){echo $typ;}?>"  class="txtfield">
                    <option value="" style="color: #009933;">Please Select Type</option>
					<option value="PREPAID">PREPAID</option>
					<option value="POSTPAID">POSTPAID</option>
					</select>
						<span style="color:#000150;" >*<?php echo $typErr;?></span>
										</td>
										</tr>
										<tr>
											<td style="color:#283054;">Operator</td>
										<td>
										<select name="oprtr" value="<?php if ((isset($oprtr))&&($oprtrErr==false)){echo $oprtr;}?>"   class="txtfield">
                    <option value="">Please Select Your Operator</option>
        	        <?php
					 $query="select * from tboprtr";
					$result=mysqli_query($conn,$query);
					  while($array = mysqli_fetch_array($result))
			  {
				echo "<option value='$array[1]'>$array[1]</option>";
			  }
			  ?>
      	            </select>
                      <span style="color:#000150;" >*<?php echo $oprtrErr;?></span>
										</td>
										</tr>
										<tr>
											<td style="color:#283054;">Amount</td>
											<td>
											<input name="rcamt" type="text" value="<?php if ((isset($rcamt))&&($rcamtErr==false)){echo $rcamt;}?>" class="txtfield" />
                                	<span style="color:#000150;" >*<?php echo $rcamtErr;?></span><a style="color:#000150;" href="offer.php">Show Offers</a>

										</td>
										</tr>
										 <tr>
											<td></td>
											<td>
					<button name="next" type="submit"  class="signupbtn" value="Next" >Next</button>
                                       <button name="cancel" type="submit" class="cancelbtn" value="Cancel" >Cancel</button>

										</td>
										</tr>
									</tbody>
								</table>
                             </form>


						<h2>Bill Pay</h2><br>
						<p style="color:#283054;">Haven't registered your Card/NetBanking Account ?</p>
                       <table>     <a href="regcard.php"><i class="fa fa-credit-card" style="font-size: 142px;color: white;display: inline-block;"></i></a>

		                  <td><a href="regbank.php"><i class="fas fa-bank" style="font-size: 142px;color: white;float: left;display: inline-block;"></i></a>
			</table>
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
