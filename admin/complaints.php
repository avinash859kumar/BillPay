<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Bill Pay</title>
    <link rel="stylesheet" href="css1/style.css" type="text/css">
     <script src="https://kit.fontawesome.com/7cfc17a9b4.js" crossorigin="anonymous"></script>
<?php
session_start();
if(isset($_POST['back']))
{
header('Location:../admin/index.php');

}
?>
</head>
<body>
	<div id="bg1">

			<div id="header">
			<div align="right" ><?php if (isset($_SESSION['name']))
      echo "<font color='white'>".$_SESSION['name']."</font><br><br>";
	  echo "<a href='../logout.php'><font color='#141414'>LOGOUT</font></a>";
?>
</div>
<div class="logo">
					<a href="index.php"><img src="images/bp2.png" alt="LOGO"></a>
				</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <li class="active" class="selected"><a href="index.php" >home<i class="fas fa-home" style="color:white;margin:12px; " ></i></a></li>
            <li><a href="approve.php">Userlist</a></li>
            <li><a href="bank.php">bank</a></li>
            <div class="dropdown">

            <li><a>offer</a></li>
            <div class="dropdown-content">
            <a href="offers.php">Mobile</a>
            <a href="dthoffers.php">Dth</a>

            </div>
		</div>
		<div class="dropdown">

            <li><a>operators</a></li>
            <div class="dropdown-content">
            <a href="oprtr.php">Mobile</a>
            <a href="dthoprtr.php">Dth</a>

            </div>
		</div>

            <li  ><a href="complaints.php">complaints</a></li>
            <li  > <a href='../logout.php'>LOGOUT</a></li>
</div>

<div id="main">

  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fas fa-bars"></i></span>
</div>


			<div id="contents">
				<div class="box">
					<div>

						<div id="table" class="body">
						<h1>Complaints</h1>

                       <form id="form2" name="form2" method="post" action="" style="margin:auto;">
                              <table>
							  <tbody>
                                <tr>
<th>COMPLAINT No.</th>
<th>NAME</th>
<th>MOBILE NUMBER</th>
<th>E-MAIL</th>
<th>COMPLAINT</th>



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


 $query="select * from tbcomplaints";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$compnum=$row[1];
$name=$row[2];
$cntnum=$row[3];
$email=$row[5];
$complaint=$row[4];

print "
<td align='center'>$compnum</td>
<td align='center'>$name</td>
<td align='center'>$cntnum</td>
<td align='center'>$email</td>
<td align='center'>$complaint</td>
</tr>";
}
?>
							<tr>
							</tr>

                                      <tr>
									  <td></td>
                                        <td><button name="back" type="submit" class="signupbtn">Back</button></td>

                                      </tr>
									  </tbody>
                                  </table>
                            </form>


<h2></h2>


						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
		<div class="footer-bottom">
          &copy;  Bill Pay  | Designed by Avinash Kumar
        </div>
      </div>
	</div>
	<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html>