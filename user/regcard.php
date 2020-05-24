<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Netbank</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js1/cufon-yui.js"></script>
<script type="text/javascript" src="js1/arial.js"></script>
<script type="text/javascript" src="js1/cuf_run.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/7cfc17a9b4.js" crossorigin="anonymous"></script>
<?php
session_start();

include('crdreg.php');

?>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="../user/index.php"><span>Bill</span>Pay</a></h1>
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
          <h2>Card Registration</h2>

        </div>

<div class="cardinfo">

                          <center><form id="form2" name="form2" method="post" action="" style="margin:auto;">
                             <ol>
							    <li>
							<input name="nam" type="hidden" value="<?php if (isset($_SESSION['userlogin'])){ $name= $_SESSION['userlogin'];echo $name ;	} ?>"  style="width:250px; height:25px;" />

              </li>

              <li>
                <label for="password"> Card Number</label>
				<input id="name" class="text" " name="cnum" type="text" placeholder="1111-2222-3333-4444" value="<?php if ((isset($cnum))&&($cnumErr==false)){echo $cnum;}?>"  style="width:250px; height:25px;" />
								  <span style="color:#fff; font-family:Sans-serif; font-size:12px;">*<?php echo $cnumErr;?></span>

			</li>
			 <li>
                <label for="password">Expiry Date</label>
				<input id="name"  " class="text" name="exp1" type="text" placeholder="04" value="<?php if ((isset($exp1))&&($exp1Err==false)){echo $exp1;}?>"  style="width:60px; height:25px;" />
                                	<span style="color:#fff; font-family:Sans-serif; font-size:12px;">*<?php echo $exp1Err;?></span>
				<input id="name" class="text" name="exp2" type="text" placeholder="2020" value="<?php if ((isset($exp2))&&($exp2Err==false)){echo $exp2;}?>"  style="width:60px; height:25px;" />
                                	<span style="color:#fff; font-family:Sans-serif; font-size:12px;">*<?php echo $exp2Err;?></span>
			</li>
			 <li>
                <label for="password"> CVV</label>
				<input id="name"  class="text" name="cvv" type="password" placeholder="345"value="<?php if ((isset($cvv))&&($cvvErr==false)){echo $cvv;}?>"  style="width:60px; height:25px;" />
								  <span style="color:#fff; font-family:Sans-serif; font-size:12px;">*<?php echo $cvvErr;?></span>
			</li>
			 <li>
                <label for="password"> Transaction Password</label>
				 <input id="name"  class="text" name="txncpass" type="password" placeholder="TRANSACTION PASSWORD" value=""  style="width:250px; height:25px;" />
								  <span style="color:#fff; font-family:Sans-serif; font-size:12px;">*<?php echo $txncpassErr;?></span>

				 <br> <br>
			</li>
              <li>
					<button name="reg" type="submit" class="prcdbtn" value="REGISTER" />REGISTER</button>
                    <button name="cancel" class="cancelbtn" type="submit" value="CANCEL" />CANCEL</button>

                <div class="clr"></div>
              </li>
            </ol>
          </form>
		  </center>
		   </div>
          <div class="clr"></div>
    </div>
  </div>




    <div class="clr"></div>
  </div>
</div>
</body>
</html>