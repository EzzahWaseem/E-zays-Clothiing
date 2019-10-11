<!DOCTYPE>
<?php 
session_start();
include("functions/functions.php");

?>
<html>
	<head>
		<title>My Online Shop</title>
		
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>
	
<body>
	
	<!--Main Container starts here-->
	<div class="main_container">
	
		<!--Header starts here-->
		<div class="main_header">
		
			<a href="index.php"><img id="img1" src="images/shopbag.gif" /> </a>
			<img id="img2" src="images/ezays.png" />
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menu_bar">
			
			<ul id="menu">
             <li><a href="index.php" >Home</a> </li>
            <li><a href="allproducts.php">All Products</a></li>
            <li><a href="customers/my_account.php">My Account</a></li>
            <li><a href="customer_register.php">Sign Up</a></li>
            <li><a href="cart.php">Shopping Cart</a></li>
            <li><a href="#footer">Contact Us</a></li>  
            </ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="query" placeholder="Search a Product"/ > 
					<input type="submit" name="Search" value="search" />
				</form>
			
			</div>
			
		</div>
		<!--Navigation Bar ends-->
	
		<!--Content wrapper starts-->
		<div class="main_content">
		
			<div id="side_bar">
			
				<div id="sidebar_title">Categories</div>
				
				<ul id="cats">
				
				<?php getCategories(); ?>
				
				<ul>
					
				<div id="sidebar_title">Brands</div>
				
				<ul id="cats">
					
					<?php getBrands(); ?>
				
				<ul>
			
			
			</div>
		
			<div id="content_area">
			
			<?php cart(); ?>
			
			<div id="shopping_cart" style="background:black; color:white;"> 
					
					<span style=" font-size:18px; padding:3px; line-height:40px;">
					
					<?php 
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>" ;
					}
					else {
					echo "<b>Welcome Guest:</b>";
					}
					?>
					
					
					<b style="color:yellow">Shopping Cart -</b> Total Items: <?php total_items();?> Total Price: <?php total_price(); ?> <a href="cart.php" style="color:yellow">Go to Cart</a>
					
					
					
					</span>
			</div>
			
				<div id="products_box">
				
				<?php 
				if(!isset($_SESSION['customer_email'])){
					
					include("customer_login.php");
				}
				else {
				
				header('location:cart.php');
				
				}
				
				?>
				
				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
		<div id="footer">
		
		<p style="text-align:centre; padding-top:40px;padding-left:220px; font-weight:bolder; font-size:30px; "> &copy; 2019 by www.EzaysCollection.com </p>
		
		</div>
	
	
	
	
	
	
	</div> 
<!--Main Container ends here-->


</body>
</html>