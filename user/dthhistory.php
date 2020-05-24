<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Bill Pay</title>
	<script src="https://kit.fontawesome.com/7cfc17a9b4.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css2/style.css" type="text/css">
<?php
session_start();

   if (isset($_SESSION['name']))
   {

      $name= $_SESSION['name'];
	   $uname= $_SESSION['userlogin'];

	  }
if(isset($_POST['back']))
{
header('location:../user/index.php');
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
					<a href="index.php"><img src="images/bp1.png" alt="LOGO" height="112" width="150"></a>
				</div>
				<nav>
        <ul>
		    <li><a href="../user/index.php" >Home</a></li>
            <li class="selected" class="active"><a href="rchistory.php" >Mobile</a></li>
            <li  ><a href="dthhistory.php">Dth</a></li>
            <li><a href='../logout.php'>LOGOUT</a></li>
        </ul>
</nav>
			<div id="contents">
				<div class="box">
					<div>

						<div id="table" class="body">
						<h1>Complaints</h1>
						<form id="form2" name="form2" method="post" action="" style="margin:auto;">
                              <table align="center">
							  <tbody>
                                <tr>
<th width="25%">TRANSACTION No.</th>
<th width="30%">DTH ID</th>
<th width="20%">OPERATOR</th>
<th width="30%">AMOUNT</th>
<th width="30%">STATUS</th>





							  </tr>
							  <?php
include('../conn.php');
/*if(isset($_GET['getapnt']))
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
 }*/


$query="select * from tbdthrc where name='$username'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$txn=$row[1];
$dthid=$row[3];
$oprtr=$row[4];
$amt=$row[5];
$sts=$row[6];


print "
<td align='center'>$txn</td>
<td align='center'>$dthid</td>
<td align='center'>$oprtr</td>
<td align='center'>$amt</td>
<td align='center'>$sts</td>

</tr>";
}
?>

                    	</table>
			<table >
							<tr></tr>
                                      <tr>

									 <td >
									 <button type="submit" name="back" value="Back" class="btn"/>Back</button>
									 </td>


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
          &copy;  Bill Pay  | Designed by Avinash Kumar
        </div>
      </div>
      </body>
</html>