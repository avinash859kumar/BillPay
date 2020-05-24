<?php
SESSION_START();
SESSION_DESTROY();
echo "<script type='text/javascript'>alert (' successful');</script>";
header("refresh:0;url='./index.php'");
?>