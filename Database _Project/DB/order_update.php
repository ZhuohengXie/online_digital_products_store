<?php
$orderID=$_POST['orderID'];
$pID=$_POST['pID'];
$cID=$_POST['cID'];
$sID=$_POST['sID'];$date=$_POST['date'];
$amount=$_POST['amount'];
$con = mysql_connect("localhost","zhy38","qweasd1234");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("project2", $con);
$sql="update transaction set pID='$pID',cID='$cID',sID='$sID',date='$date',amount='$amount' where orderID='$orderID'";
mysql_query($sql,$con);



mysql_close($con);
echo "<script>alert('Update Successfully!')</script>";
header("refresh:0;url=salesperson.php"); 
?>