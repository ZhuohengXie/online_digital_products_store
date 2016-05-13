
 <?php 
 @mysql_connect("localhost", "root","1981427") //选择数据库之前需要先连接数据库服务器 
or die("数据库服务器连接失败"); 
 @mysql_select_db("project2") //选择数据库project2 
 or die("数据库不存在或不可用"); 
 //获取用户输入 
$username = $_POST['username']; 
 $passcode = $_POST['passcode']; 
 //执行SQL语句获得Session的值 
$query = @mysql_query("select username, userflag from users " 
 ."where username = '$username' and passcode = '$passcode'") 
 or die("SQL语句执行失败"); 
 //判断用户是否存在，密码是否正确 
if($row = mysql_fetch_array($query)) 
 { 
 session_start(); //标志Session的开始 
//判断用户的权限信息是否有效，如果为1或0则说明有效 
if($row['userflag'] == 1 or $row['userflag'] == 0) 
 { 
 $_SESSION['username'] = $row['username']; 
 $_SESSION['userflag'] = $row['userflag']; 
 echo "<a href="main.php" href="main.php">欢迎登录，点击此处进入欢迎界面</a>"; 
 } 
 else //如果权限信息无效输出错误信息 
{ 
echo "用户权限信息不正确"; 
 } 
 } 
else //如果用户名和密码不正确，则输出错误 
{ 
echo "用户名或密码错误"; 
 } 
 ?>


 <?php 
 unset($_SESSION['username']); 
 unset($_SESSION['passcode']); 
 unset($_SESSION['userflag']); 
 echo "注销成功"; 
 ?> 

 