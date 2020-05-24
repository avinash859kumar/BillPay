<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Bill Pay</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="shortcut icon" href="../pay/favicon.ico" type="image/x-icon">
     <script src="https://kit.fontawesome.com/7cfc17a9b4.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

 <script  src="js/script.js"></script>

</head>
<body id="background">
    <header>
        <img src="images/BPS.png" >

    </header>

    <nav>
        <ul>
            <li ><a href="index.php" >home</a></li>
            <li ><a href="about.php">about</a></li>
            <li><a href="login.php">login</a></li>
            <li><a href="signup.php">sign up</a></li>
            <li class="active" class="selected"><a href="contact.php">contact</a></li>
        </ul>
    </nav>

  <h2>Contact Us</h2>
  <div class="contactus">
  <div class="bodys">
  <form id="form2" name="form2" method="post" action="" style="margin:auto;">
						                            <table style="margin: 72px 320px 48px; padding: 15px;" >
									<tbody>
									<tr>
									<td style="color:#000000; font-family:sans-serif; font-weight:100; font-size: 17px;"> Name</td>
											<td>
											 <input name="nm" type="text"  class="txtfield" />
								  <span style="color:#000150; font-family:Helvatica; font-size:12px;"></span>

										</td>
										</tr>
										<tr>

										</tr>
										<tr>
											<td style="color:#000000; font-family:sans-serif; font-weight:100; font-size: 17px;">E-Mail</td>
											<td>
											<input name="eml"  type="text"   class="txtfield" />
                                <span style="color:#000150; font-family:Helvatica; font-size:12px;"></span>
								</td>
										</tr>
										<tr>
											<td style="color:#000000; font-family:sans-serif; font-weight:100; font-size: 17px;">Messages</td>
											<td>
											<textarea name="cmp"    class="txtfield" style="width:280px; height:80px;" ></textarea>
                               <span style="color:#000150; font-family:Helvatica; font-size:12px;"></span>

								</td>
										</tr>
										 <tr>
											<td></td>
											<td>
										<span>	<button name="signup" type="submit"value="Send"  class="signupbtn"/>Send</button>
                                       <button name="cancel" type="submit" value="Cancel" class="cancelbtn"/>Cancel</button></span>

										</td>
										</tr>
									</tbody>
								</table>
                             </form>
</div>
</div>
			<script src="js/script.js"></script>

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


       <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script>
jQuery(document).ready(function($)
{
$('.counter').counterUp({
    delay: 10,
    time: 1000
});
$(document).ready(function(){
	$('.frame').click(function(){
		$('.top').addClass('open');
		$('.message').addClass('pull');
	})
});
});
</script>
</body>
</html>