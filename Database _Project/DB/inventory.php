
<!DOCTYPE HTML>
<html>
<head>
<title>Inventory</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/jquery.easydropdown.js"></script>
</head>
<body> 
	<div class="header-top">
			<div class="wrap"> 
			  <div class="header-top-left">
			  	   <div class="box"></div>
   				    <div class="box1"></div>
   				    <div class="clear"></div>
   			 </div>
			 <div class="cssmenu">
				<ul>
					
					<li><a href="checkout.html">Order</a></li> |
					
					<li><a href="login.html">Log In</a></li> |
					<li><a href="inventory.php">Inventory</a></li>
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
	 <div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt=""/></a>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
			<li class="active grid"><a href="index.html">Home</a></li>
			<li><a class="color4" href="Phone.html">Phone</a></li>	
			<li><a class="color5" href="Desktop.html">Desktop</a></li>
			<li><a class="color6" href="PC.html">PC</a></li>
			<li><a class="color7" href="Camera.html">Camera</a></li>
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
	     <div class="tag-list">
	    
	    
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>
          <div class="register_account">
          	<div class="wrap">
    	      <h4 class="title"> inventory information </h4>
			  <?php
			  $url=$_SERVER["REQUEST_URI"];
$url=parse_url($url);
$url=$url['path'];
$pagesize=1;
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("project2", $con);
$sql="select * from product ";
$query=mysql_query($sql);
//print_r($query);
$rows=mysql_num_rows($query);
$pageval=1;
$page=($pageval-1)*$pagesize;
if(@$_GET['page']){
    $pageval=$_GET['page'];
    if ($pageval<=0){ 
    $pageval=1;
    }
    $page=($pageval-1)*$pagesize;
    }

$pagenum=ceil($rows/$pagesize);
 
if($rows>$pagesize){
  if ($pageval==1){ 
echo "<a href=$url?page=".($pageval+1)."><button class='grey' type='button' style='float:left;margin-left:15px;'>previous </button></a>";
}else{
     if ($pageval*$pagesize>=$rows){
    echo  "<a href=$url?page=".($pageval-1)."><button class='grey' type='button' style='float:left;margin-left:15px;'>previous </button></a>";
   }else{
    echo  "<a href=$url?page=".($pageval-1)."><button class='grey' type='button' style='float:left;margin-left:15px;'>previous</button></a> "."<a href=$url?page=".($pageval+1)."><button class='grey' type='button' style='float:left;margin-left:15px;'>next </button></a>";
   }
}
}
echo "<br>";
$sqli="select * from product limit $page,$pagesize";
$que=mysql_query($sqli);
while($row=mysql_fetch_array($que)){
   ?>
<br>
  <form method='post' action="update_inventory.php">
    			 <div class="col_1_of_2 span_1_of_2">
		   			 <div><input name="pID" type="text" value=<?php echo $row['pID']?>></div>
		    			<div><input name="pname" type="text" value=<?php echo $row['pname']?>></div>
		    			<div><input name="inventory" type="text" value=<?php echo $row['inventory']?>></div>

		    			<div><input name="price" type="text" value=<?php echo $row['price']?>></div>
		    	 </div>
		    	  <div class="col_1_of_2 span_1_of_2">	
		    		<div><input name="category"type="text" value=<?php echo $row['category']?>></div>
<div><input name="cost"type="text" value=<?php echo $row['cost']?>></div>
				   <div>
		          </div>
		          	
		          </div>
		      
			  <?php }
?>
		    <div class="clear">
		      <a href="new_inventory.php"><button class="grey"type="button" style="margin-left:400px;">add new </button></a>
			  	<button class="grey"type="button" style="float:left;margin-left:15px;">update </button>	    
			</form>
			</div>
		    
			
    	</div>
    <br>
	<br>
	<br>
    <div class="footer">
		<div class="footer-top">
			<div class="wrap">
			  <div class="section group example">
				<div class="col_1_of_2 span_1_of_2">
					<ul class="f-list">
					  <li><img src="images/2.png"><span class="f-text">Free Shipping on orders over $ 100</span><div class="clear"></div></li>
					</ul>
				</div>
				<div class="col_1_of_2 span_1_of_2">
					<ul class="f-list">
					  <li><img src="images/3.png"><span class="f-text">Call us! toll free-412-999-8179 </span>
					    <div class="clear"></div></li>
					</ul>
				</div>
				<div class="clear"></div>
		      </div>
			</div>
		</div>
		<div class="footer-middle">
			<div class="wrap">
			 <div class="section group example">
			  <div class="col_1_of_f_1 span_1_of_f_1">
				 <div class="section group example">
				   <div class="col_1_of_f_2 span_1_of_f_2">
				      <h3>Facebook</h3>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="like_box">	
							<div class="fb-like-box" data-href="http://www.cssmoban.com/" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
						</div>
 				  </div>
				  <div class="col_1_of_f_2 span_1_of_f_2">
						<h3>From Twitter</h3>
				       <div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
							</div>
							<div class="clear"> </div>
					   </div>
					   <div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
							</div>
							<div class="clear"> </div>
					  </div>
				</div>
				<div class="clear"></div>
		      </div>
 			 </div>
			 <div class="col_1_of_f_1 span_1_of_f_1">
			   <div class="section group example">
				 <div class="col_1_of_f_2 span_1_of_f_2">
				    <h3>Information</h3>
						<ul class="f-list1">
						    <li><a href="#">Duis autem vel eum iriure </a></li>
				            <li><a href="#">anteposuerit litterarum formas </a></li>
				            <li><a href="#">Tduis dolore te feugait nulla</a></li>
				             <li><a href="#">Duis autem vel eum iriure </a></li>
				            <li><a href="#">anteposuerit litterarum formas </a></li>
				            <li><a href="#">Tduis dolore te feugait nulla</a></li>
			         	</ul>
 				 </div>
				 <div class="col_1_of_f_2 span_1_of_f_2">
				   <h3>Contact us</h3>
						<div class="company_address">
					                <p>500 Lorem Ipsum Dolor Sit,</p>
							   		<p>22-56-2-9 Sit Amet, Lorem,</p>
							   		<p>USA</p>
					   		<p>Phone:(00) 222 666 444</p>
					   		<p>Fax: (000) 000 00 00 0</p>
					 	 	<p>Email: <span>mail[at]leoshop.com</span></p>
					   		
					   </div>
					   <div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="Google"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Linked in"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Rss"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a href="#" target="_blank"> </a></span></li>
						    </ul>
					   </div>
				</div>
				<div class="clear"></div>
		    </div>
		   </div>
		  <div class="clear"></div>
		    </div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="wrap">
	            <div class="copy">
			           <p>Copyright &copy; 2015. S.B. StoreAll rights reserved.</p>
		       </div>
		        <div class="clear"></div>
	      </div>
	  </div>
</div>
<div style="display:none"></div>
</body>
</html>