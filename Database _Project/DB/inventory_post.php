<?php

$con = mysql_connect("localhost","zhy38","qweasd1234");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("project2", $con);


$sql="INSERT INTO product (pID,pname,inventory,price,category,cost)
VALUES
('$_POST[pID]','$_POST[pname]','$_POST[inventory]','$_POST[price]','$_POST[category]','$_POST[cost]')";

mysql_query($sql,$con);



mysql_close($con);
echo "<script>alert('Successful!')</script>";
header("refresh:0;url=salesperson.php"); 
?>
