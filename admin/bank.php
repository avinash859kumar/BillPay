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
include('bnknmreg.php');
include('../conn.php');
session_start();
?>
</head>
<body>
	<div id="bg1">

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
	<div id="contents">
				<div class="box">
					<div class="mid">

						<div id="contact" class="body">
						<h1>Add Bank</h1>
                <center>        <form id="form2" name="form2" method="post" action="" >
						<table>
									<tbody>
										<tr>
											<td>  Bank Name</td>
											<td>
											<input name="bn" type="text" value="<?php if ((isset($bn))&&($bnErr==false)){echo $bn;}?>" class="txtfield"   />
								  <span style="color:white; font-family:sans-serif ; font-size:12px;">*<?php echo $bnErr;?></span>

									</td>
										</tr>
										<tr>
											<td>Bank List</td>
										<td>

        	        <?php
					 $query="select * from tbbanknm";
					$result=mysqli_query($conn,$query);
					  while($array = mysqli_fetch_array($result))
			  {
				echo "<option value='$array[1]'>$array[1]</option>";
			  }
			  ?>

										</tr>
										 <tr>
											<td></td>
											<td>
											<button name="adbnk" type="submit" class="signupbtn" >Add</button>
                                       <button name="cancel" type="submit" class="cancelbtn" >Cancel</button>
										</td>
										</tr>
									</tbody>
								</table>
                             </form></center>


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