<?php
$orderID=$_POST['orderID'];
$con = mysql_connect("localhost","zhy38","qweasd1234");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("project2", $con);
$sql="delete from transaction where orderID='$orderID'";
mysql_query($sql,$con);



mysql_close($con);
echo "<script>alert('Delete Successfully!')</script>";
header("refresh:0;url=salesperson.php"); 
?>