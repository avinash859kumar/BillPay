<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html,body{
    font-family: sans-serif;

}
.loader {
  border: 16px solid #fff;
  border-radius: 50%;
  border-top: 16px solid #19094a;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
  
  border-bottom: 16px solid #19094a;
}
/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body style=" background-image: url('../user/images1/bg.png'); width: 100%; height: 100%; background-repeat: y no-repeat;position: fixed;">


<center>
<div class="loader"></div>
</center>


<center><p style="color: #fff;" >Please Wait.....</center>
<span><center><p style="color: #fff;">Redirecting</center></span>
<?php
header("refresh:5;url='./transdetal.php'");
?>
</body>
</html>
