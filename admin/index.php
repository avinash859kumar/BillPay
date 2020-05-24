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
    ?></head>


<body>


			<div id="header">
					<div align="right" ><?php if (isset($_SESSION['name']))
      echo "<font color='white'>".$_SESSION['name']."</font><br><br>";
	 ;
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
<center>
<div id="slideshow">
  <div class="slide-wrapper">
    <div class="slide"><img src="../images/dashboard_full_1.jpg"></div>
    <div class="slide"><img src="../images/dashboard_full_2.jpg"></div>
    <div class="slide"><img src="../images/dashboard_full_3.jpg"></div>

  </div>
</div>

</center>
<center>
<div class="row">
  <div class="column">
    <h2>What We Did</h2>
    <p>This project is aimed at developing a<br>
     Web site that depicts online Recharge of <br>
     mobiles and dish using Payment Gateway.<br>
     Using this software, companies can improve <br>
     the efficiency of their services.<br></p>
  </div>
  <div class="column">
    <h2>Objective of the project</h2>
    <p>This software helps customer to do mobile recharge<br>
     and dish recharge in a very convenient way without <br>
     going to a shop. It is designed such a way that one<br>
     can view all the offers and recharge plans easily.<br>
     This software helps to initiate people to use <br>
     mobile banking or digital banking so that everyone<br>
      can do a recharge easily at anytime and anywhere.<br></p>
  </div>
  <div class="column">
    <h2>Team members</h2>
    <h4>Avinash Kumar</h4>
    <h4>vaibhav rohilla</h4>
  </div>
</div>
</center>

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