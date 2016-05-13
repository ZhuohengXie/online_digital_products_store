<?php
$orderID=$_POST['orderID'];
$sID=1203;
$con = mysql_connect("localhost","zhy38","qweasd1234");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("project2", $con);
$sql="update transaction set sID=1111 where orderID='$orderID'";
mysql_query($sql,$con);



mysql_close($con);
echo "<script>alert('Check Successfully!')</script>";
header("refresh:0;url=salesperson.php"); 
?>
