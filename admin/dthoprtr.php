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
include('dthoprtrreg.php');
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
 	    <li><a href="oprtr.php">operators</a></li>
            <li  ><a href="complaints.php">complaints</a></li>
            <li  > <a href='../logout.php'>LOGOUT</a></li>
</div>
	<div id="contents">
				<div class="box">
					<div>

						<div id="contact" class="body">
						<h1>Dth Operators</h1>
                        <form id="form2" name="form2" method="post" action="" style="margin:auto;">
						<table>
									<tbody>
										<tr>
											<td>Add Operator:</td>
											<td>
											<input name="operator" type="text" value="<?php if ((isset($operator))&&($operatorErr==false)){echo $operator;}?>"  class="txtfield" />
								  <span style="color:white; font-family:sans-serif; font-size:12px;">*<?php echo $operatorErr;?></span>

										</td>
										</tr>

										<tr>
											<td>Operator:   </td>
										<td>
										<select name="oprtr" value=""   class="txtfield">
                    <option value="">Added Operator</option>
        	        <?php
					 $query="select * from tbdthoprtr";
					$result=mysqli_query($conn,$query);
					  while($array = mysqli_fetch_array($result))
			  {
				echo "<option value='$array[1]'>$array[1]</option>";
			  }
			  ?>
      	             <span style="color:White; font-family:sans-serif; font-size:12px;">*<?php echo $oprtrErr;?></span>
										</td>
										</tr>
										 <tr>
											<td></td>
											<td>
					<button name="add" type="submit" class="signupbtn">Add</button>
                                       <button name="cancel" type="submit" class="cancelbtn">Cancel</button>

										</td>
										</tr>

										<tr>
										<td >
										<a  href="oprtr.php">Back To Mobile operator</a></td>
										</tr>
									</tbody>
								</table>
                             </form>


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
</body>
</html>