
<!DOCTYPE HTML>
<html>
<head>
<title>Customer Order</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
</head>
<body>
       <div class="header-top">
         <div class="wrap">
           <div class="header-top-left">
             <div class="clear"></div>
           </div>
           <div class="cssmenu">
             <ul>
               |
               <li><a href="c_order.php">Orders</a></li>
               <li><a href="login.html">Log In</a></li>
               <li><a href="register.html">Sign Up</a></li>
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
			<li><a class="color7" href="camera.html">Camera</a></li>
			</ul>
		</div>
	          <div class="clear"></div>
     </div>
	</div>
         
           <div class="wrap">
    	     <h4 class="title">Order history </h4>
    	     <?php
			 error_reporting(E_ALL ^ E_DEPRECATED);
		 
            $con = mysql_connect("localhost","zhy38","qweasd1234");
                 if (!$con)
                 {
                    die('Could not connect: ' . mysql_error());
                        }

             mysql_select_db("project2", $con);

             $result = mysql_query("SELECT * FROM transaction 
                       where cID='h0001'");

           echo "<table border='1' color='red'>
           <tr align='center'>
           <th width='100px' >OrderID</th>
           <th width='100px'>ProductID</th>
           <th width='100px'>CustomerID</th>
           <th width='100px'>SalespersonID</th>
           <th width='100px'>Date</th>
           <th width='100px'>Amount</th>
           </tr>";

           while($row = mysql_fetch_array($result))
           {
            ?>
           <tr align="center">
  
           <td width='100px'><a href=" >"> <?php echo $row['orderID']?></a > </td>
           <td width='100px'><?php echo $row['pID']?></td>
           <td width='100px'><?php echo $row['cID'] ?></td>
           <td width='100px'><?php echo $row['sID']?></td>
           <td width='100px'><?php echo $row['date']?></td>
           <td width='100px'><?php echo $row['amount']?></td>
           </tr>
           <?php
               }
            echo "</table>";

            mysql_close($con);
            ?>
			
    	   </div>
    	
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
                <p>Copyright &copy; 2015.S.B. StoreAll rights reserved.</p>
		      </div>
			  <div class="clear"></div>
	      </div>
			</div>
		</div>
<div style="display:none"></div>
</body>
</html>