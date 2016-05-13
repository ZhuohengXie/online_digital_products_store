<?php
$pID=$_POST['pID'];
$pname=$_POST['pname'];
$inventory=$_POST['inventory'];
$price=$_POST['price'];$category=$_POST['category'];
$cost=$_POST['cost'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("project2", $con);
$sql="update product set pID='$pID',pname='$pname',inventory='$inventory',price='$price',category='$category',cost='$cost' where pID='$pID'";
mysql_query($sql,$con);



mysql_close($con);
echo "<script>alert('Update Successfully!')</script>";
header("refresh:0;url=inventory.php"); 
?>