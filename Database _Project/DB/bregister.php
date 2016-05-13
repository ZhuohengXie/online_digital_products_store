<?php

$con = mysql_connect("localhost","zhy38","qweasd1234");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("project2", $con);
$sql="select count(*) from b_customer";
$result=mysql_query($sql,$con);
list($cnt)=mysql_fetch_row($result);
$cnt=$cnt+1001;
$cID="b".$cnt;
$sql1="INSERT INTO customer (cID,name,address)
VALUES
('$cID','$_POST[Name]','$_POST[Address]')";
$sql2="INSERT INTO b_customer (cID,income,category,username,password)
VALUES
('$cID','$_POST[Income]','$_POST[Category]','$_POST[Username]','$_POST[Password1]')";
mysql_query($sql1,$con);
mysql_query($sql2,$con);


mysql_close($con);
echo "<script>alert('Successful!')</script>";
header("refresh:0;url=login.html"); 
?>
