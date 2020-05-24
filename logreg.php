<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$usrname=trim($_POST["usr"]);
	$passwrd=trim($_POST["pwd"]);


			include('conn.php');
			$query="SELECT * FROM tbusr WHERE usernam='$usrname' and password='$passwrd'";
			$result=mysqli_query($conn,$query);

			 if (mysqli_num_rows($result) == 1)
			 {
			$row=mysqli_fetch_array($result);
			$_SESSION['recharge']='true';
			$_SESSION['id']=$row[0];
			$name=$row[1];
			$uname=$row[2];
			$_SESSION['usrrol']=$row[4];
			$active=$row[6];
			$urol=$row[4];


           $_SESSION['userlogin'] = $uname;
	   $_SESSION['name'] = $name;
			if($active=='0')
			{
			echo "<script type='text/javascript'>alert('Your account is not activated Yet');</script>";
			header('Refresh:2,URL=./login.php');
			}
			else if($urol=='A')
			{
			header('Location:./admin/index.php');
			}
			else if($urol=='S')
			{
			header('Location:./user/index.php');
			}
			else
			{
			 echo '<script type="text/javascript"> ';
   			 echo 'alert("Username / Password DO not match");';

  		         echo '</script>';
			header("refresh:0;url='./index.php'");
			}

			}

			else
			{
			 echo '<script type="text/javascript"> ';
   			 echo 'alert("Credentials do not match!!");';

  		         echo '</script>';
			header("refresh:0;url='./index.php'");
			}

}

if(isset($_POST['signup']))
{
header('Location:signup.php');
}
?>
