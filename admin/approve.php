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
<body id="bg1">


<div id="header">
		<div align="right" ><?php if (isset($_SESSION['name']))
echo "<font color='white'>".$_SESSION['name']."</font><br><br>";

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

<span style="font-size:30px;cursor:pointer;color: black;" onclick="openNav()"><i class="fas fa-bars"></i></span>
</div>


</nav>
			<div class="contents">
				<div class="box">
						<h1>User List</h1>

						<center>	<form id="form2" name="form2" method="post" action="" >
                              <table>
							  <tbody>
                                <tr>
 <th>ID </th>
<th>NAME</th>
<th>USERNAME </th>
<th>PASSWORD</th>
<th>A/C STATUS </th>
<th>DELETE </th>

							  </tr>
							  <?php
include('../conn.php');
if(isset($_GET['del']))
{
$del_id=$_GET['del'];
$query=("delete from tbusr where id =$del_id");
if(mysqli_query($conn,$query))
{
echo "<script type='text/javascript'>alert ('user id $del_id id deleted');</script>";
}
else
{
print "error deleted record:".mysqli_error($conn);
}
}$query="select* from tbusr";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$showid=$row[0];
$showname=$row[1];
$showusername=$row[2];
$showpassword=$row[3];
$showstatus=$row[6];
print "<tr align='center'>
<td>$showid</td>
<td>$showname</td>
<td>$showusername</td>
<td>$showpassword</td>";
?>

<?php print "<td>";
if($showstatus==0)
{
echo "<a href='status.php?status=$showstatus &id=$showid' id='inactive' style='color:teal;'>Inactive";
}
else
{
echo "<a href='status.php? status=$showstatus &id=$showid' id='active' style='color:green;'> Active";
}
?>
<?php print "</td>
<td><a href='approve.php? del=$showid ' style='color:red;'>Delete </td>
</tr>";
}
?>
							  <tr>
							  </tr>
							  <tr>
											<td></td>
											<td>
											<button name="back" type="submit" class="signupbtn">Back</button>

											</td>
										</tr>

							</tbody>
							</table>





                            </form>
                            </center>

<h2></h2>


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