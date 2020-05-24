<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Netbank</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js1/cufon-yui.js"></script>
<script type="text/javascript" src="js1/arial.js"></script>
<script type="text/javascript" src="js1/cuf_run.js"></script>
<script src="https://kit.fontawesome.com/7cfc17a9b4.js" crossorigin="anonymous"></script>
<?php

include('fnlstp.php');

?>

</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="#"><span>Bill</span>Pay</a></h1>
      </div>

      <div class="clr"></div>
    </div>
  </div>
  <div class="hbg">
    <div class="hbg_resize"> <i style="font-size: 342px;color: white; float: center;" class="fa fa-credit-card"></i>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Pay By Card</h2>

        </div>
        <div class="article">


                          <center><form id="form2" name="form2" method="post" action="" style="margin:auto;">

                               <ol>
							    <li>
                <label for="email">Name</label>
				<?php
							if (isset($_SESSION['userlogin']))
   {
      $name= $_SESSION['userlogin'];
	  echo strtoupper($name);

	  }?>


              </li>

              <li>
                <label for="password">Transaction Password:</label>
				<input id="name" class="text" name="txnpass" type="password" placeholder="PASSWORD"value=""  style="width:250px; height:25px;" />
								  <span style="color:red; font-family:Times New Roman; font-size:12px;"></span>

				<br></br>

              </li>

              <li>
			     <button name="prcd" type="submit" value="PROCEED" class="prcdbtn" />Proceed</button>
                                       <button name="cancel" type="submit" value="CANCEL"  class="cancelbtn"/>Cancel</button>

                <div class="clr"></div>
              </li>
            </ol>
          </form>
		  </center>
          </div>
      </div>

      <div class="clr"></div>
    </div>
  </div>


</body>
</html>