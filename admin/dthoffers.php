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
include('dthofrreg.php');
include('../conn.php');
session_start();
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
 	    <li><a href="oprtr.php">operators</a></li>
            <li  ><a href="complaints.php">complaints</a></li>
            <li  > <a href='../logout.php'>LOGOUT</a></li>
</div>

<div id="main">

<span style="font-size:30px;cursor:pointer;color: black;" onclick="openNav()"><i class="fas fa-bars"></i></span>
</div>
			<div id="contents">
				<div class="box">
					<div>

						<div id="contact" class="body">
						<h1>Add DTH Offers</h1>
                        <form id="form2" name="form2" method="post" action="" style="margin:auto;">
												<table>
									<tbody>
										<tr>
											<td>Amount</td>
											<td>
											<input name="rcamt" type="text" value="<?php if ((isset($rcamt))&&($rcamtErr==false)){echo $rcamt;}?>"  class="txtfield"/>
								  <span style="color:black; font-family:sans-serif; font-size:12px;">*<?php echo $rcamtErr;?></span>
										</td>
										</tr>
										<tr>
											<td>Validity</td>
											<td>
											<input name="val" type="text" value="<?php if ((isset($val))&&($valErr==false)){echo $val;}?>"  class="txtfield" />
                                <span style="color:black; font-family:sans-serif; font-size:12px;">*<?php echo $valErr;?></span>

									</td>
										</tr>

										<tr>
											<td>Operator</td>
										<td>
										<select name="oprtr" value="<?php if ((isset($oprtr))&&($oprtrErr==false)){echo $oprtr;}?>"  class="txtfield">
                    <option value="">Please Select Your Operator</option>
        	        <?php
					 $query="select * from tbdthoprtr";
					$result=mysqli_query($conn,$query);
					  while($array = mysqli_fetch_array($result))
			  {
				echo "<option value='$array[1]'>$array[1]</option>";
			  }
			  ?>
      	            </select>

                      <span style="color:white; font-family:sans-serif; font-size:12px;">*<?php echo $oprtrErr;?></span>
										</td>
										</tr>
										 <tr>
											<td></td>
											<td>
											<button name="add" type="submit" class="signupbtn" >Add</button>
                                       <button name="cancel" type="submit" class="cancelbtn">Cancel</button>

										</td>
										</tr>

										<tr>
										<td >
										<a  href="offers.php" style="color:white;">Back To Mobile Offers</a></td>
										</tr>
									</tbody>
								</table>
                             </form>

						<p><img src="images/rechargeimg.png" alt="Img"></p>
							<p><img src="images/banner.jpg" alt="Img"></p>
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