
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Bill Pay</title>
	<link rel="stylesheet" href="css2/style.css" type="text/css">
<?php

 include('../conn.php');

session_start();

 if(isset($_POST['done']))
{
header('location:./index.php');
}
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
					<a href="index.php"><img src="images/bp1.png" alt="LOGO" height="112" width="150"></a>
				</div>
				<nav>
        <ul>
			      <li><a href="../user/index.php" >Home</a></li>
            <li class="selected" class="active"><a href="../user/recharge.php" >Mobile</a></li>
            <li  ><a href="../dth/dthrecharge.php">Dth</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="complaints.php">Complaints</a></li>
            <li><a href='../logout.php'>LOGOUT</a></li>
        </ul>
</nav>
			<div class="trans">
			          <div class="body">
						<h1>Transaction Details</h1>
                        <form id="form2" name="form2" method="post" action="" style="margin:auto; color: #283054;padding:10px 12px 20px;">

                                <table align="center" >
							  <tbody>
                                <tr>
                          	<?php
							if (isset($_SESSION['userlogin']))
   {
      $name= $_SESSION['userlogin'];
	  echo "Name : "."   ".$name."<td>";

	  }
	  $query="select * from tbrc where name='$name'";
$result=mysqli_query($conn,$query);
			 while($row=mysqli_fetch_array($result))
			 {
			 $txn=$row[1];
			$num=$row[3];
			$type=$row[4];
			$oprtr=$row[5];
			$amt=$row[6];
			$status=$row[7];


			}
			 echo "Transaction Number :".$txn."<br>";
			 echo "Mobile Number :".$num."<br>";
			  echo "Opeartor :".$oprtr."<br>";
			   echo "Type :".$type."<br>";
			   echo "Amount :".$amt."<br>";
			    echo "Status :".$status."<br>";

	  ?>


	  <br><br><br></table>
			<table >
							<tr></tr>
                                      <tr>

									 <td align="center"><button name="done" type="submit" value="DONE" class="btn"/>Done</button><td>


                                      </tr>
									  </tbody>
                                  </table>
                            </form>
							<h2></h2>

							<p></p>

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