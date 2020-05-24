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

if(isset($_POST['back']))
{
header('location:./dthrecharge.php');
}
?>
</head>
<style>

table {
  border-collapse: collapse;
  width: 100%;
  color: #;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
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
            <li class="selected" class="active"><a href="recharge.php" >Mobile</a></li>
            <li  ><a href="../dth/dthrecharge.php">Dth</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="complaints.php">Complaints</a></li>
            <li><a href='../logout.php'>LOGOUT</a></li>
        </ul>
</nav>


					<div>

						<div id="table" class="body">
						<h1>DTH Offers</h1>

                       <form id="form2" name="form2" method="post" action="" style="margin:auto;">
                             <table align="center">
							  <tbody>
                                <tr>
<th width="40%">AMOUNT</th>


<th width="40%">VALIDITY</th>




							  </tr>
							  <?php
include('../conn.php');
if(isset($_GET['getapnt']))
{
header('location:./appointmentt.php');
$del_id=$_GET['getapnt'];
$query=("delete from tbusr where id =$del_id");
if(mysqli_query($conn,$query))
{
echo "<script type='text/javascript'>alert ('user id $del_id id deleted');</script>";
}
else
{
print "error deleted record:".mysqli_error($conn);
}
 }


 $query="select * from dthoffrs";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$ammount=$row[1];
$validity=$row[2];



print "
<td align='center'>$ammount</td>
<td align='center'>$validity</td>

</tr>";
}
?>
</table>
			<table >
							<tr></tr>
                                      <tr>

									 <td align="left"><button type="submit" name="back" value="Back" class="signupbtn"/>Back</button><td>


                                      </tr>
									  </tbody>
                                  </table>
                            </form>
	<h2></h2>

							<p><img src="images/banner.jpg" alt="Img"></p>
						</div>
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