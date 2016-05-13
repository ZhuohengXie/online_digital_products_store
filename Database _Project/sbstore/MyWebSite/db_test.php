<?php 
require_once('db_config.php'); 
 
$mysqli = new MySQLI($db_host,$db_user,$db_password,$db_name); 
$sql = "SHOW DATABASES;"; 
$result = $mysqli->query($sql); 
while($row = $result->fetch_assoc()){ 
echo $row['Database'].'<br/>'; 
} 
$result->free(); 
$mysqli->close(); 
 
?> 