<?php
  require_once ("login_connect.php");
  
  $username=$_POST["username"];
  $password=$_POST["password"];
   if(!isset($username) || !isset($password))
    {
    echo"username or password error";
    exit();
    }
   else{

//user authorition
//connect database
   $sql="select * from 'users' where username='$username' ";
    $result=mysql_query($sql);
    if(!$result)
   {
    echo"user doesn't exist";
    exit();
   }
   else
   { 
    $row=mysql_fetch_array($result);
    if($password!=$row["password"])
    {
     echo"password error";
    }
    else {
       echo"log in!";
       exit();
    }
   }
  
   }
    
  
 ?>

