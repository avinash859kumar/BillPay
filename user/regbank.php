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
session_start();

include('bankreg.php');

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
    <div class="hbg_resize"> <i  style="font-size: 342px;color: white; float: center;" class="fas fa-university"></i>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Pay By Netbanking</h2>

        </div>
        <div class="article">


                          <center><form id="form2" name="form2" method="post" action="" style="margin:auto;">
                             <ol>
							    <li>
								 <input id="name"class="text" name="nm" type="hidden" value="<?php  if (isset($_SESSION['userlogin'])){echo $_SESSION['userlogin'];}?>"  style="width:250px; height:20px;" />

              </li>

              <li>
                <label for="password">Name</label>
				 <input id="name" class="text" name="nam" type="text" placeholder="NAME" value="<?php if ((isset($nam))&&($namErr==false)){echo $nam;}?>"  style="width:250px; height:25px;"  />
								  <span style="color:#fff; font-family:Sans-serif; font-size:12px;">*<?php echo $namErr;?></span>
			</li>
               <li>
                <label for="password">Bank</label>
				<select id="name"class="text" name="bank" value=""  style="width:250px; height:25px;">
                    <option value="">Please Select Your Bank</option>
        	        <?php
					include('../conn.php');
					 $query="select * from tbbanknm";
					$result=mysqli_query($conn,$query);
					  while($array = mysqli_fetch_array($result))
			  {
				echo "<option value='$array[1]'>$array[1]</option>";
			  }
			  ?>
      	            </select>
                  <span style="color:#fff; font-family:Sans-serif; font-size:12px;">*<?php echo $bnameErr;?></span>

			</li>
			 <li>
                <label for="password">Bank User Name</label>
				 <input  id="name" class="text" name="bnam" type="text" placeholder="USERNAME" value="<?php if ((isset($bnam))&&($bnamErr==false)){echo $bnam;}?>"  style="width:250px; height:25px;"/>
								  <span style="color:#fff; font-family:Sans-serif; font-size:12px;">*<?php echo $bnamErr;?></span>

			</li>
			 <li>
                <label for="password"> Account Number</label>
				<input  id="name"class="text" name="cnum" type="text" placeholder="ACCOUNT NUMBER" value="<?php if ((isset($cnum))&&($cnumErr==false)){echo $cnum;}?>"  style="width:250px; height:25px;" />
								  <span style="color:#fff; font-family:Sans-serif; font-size:12px;">*<?php echo $cnumErr;?></span>

			</li>
			 <li>
                <label for="password"> Bank Login Password</label>
				 <input id="name" class="text" name="blogpass" type="text" placeholder="LOGIN PASSWORD" value="<?php if ((isset($blogpass))&&($blogpassErr==false)){echo $blogpass;}?>"  style="width:250px; height:25px;" />
								  <span style="color:#fff; font-family:Sans-serif; font-size:12px;">*<?php echo $blogpassErr;?></span>

			</li>
			 <li>
                <label for="password"> Transaction Password</label>
				 <input id="name"  class="text" name="txnpass" type="text" placeholder="TRANSACTION PASSWORD" value="<?php if ((isset($txnpass))&&($txnpassErr==false)){echo $txnpass;}?>"  style="width:250px; height:25px;" />
								  <span style="color:#fff; font-family:Sans-serif; font-size:12px;">*<?php echo $txnpassErr;?></span>
				 <br> <br>
			</li>
              <li>
			   <button name="prcd" type="submit" class="prcdbtn" value="PROCEED" />PROCEED</button>
                                       <button name="cancel" type="submit" class="cancelbtn" value="CANCEL" />CANCEL</button>

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