
<?php

$link= mysql_connect("localhost","root","");
  if(!$link)
 {
     echo"not connect";
 }
else
 {
  $con=mysql_select_db("project2");
  if(!$con)
  {
  echo"not connect";
  }
  
 }
 ?>
