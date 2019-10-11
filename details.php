<!DOCTYPE>
<?php  
include("functions/functions.php");
?>

<html>
<head>
<title>My First Page</title>
<link rel="stylesheet" href="styles/style.css" media="all"></link>
</head>
<body>
<div class="main_container" style="background:black">
<div class="main_header">

<img id="img1" src="images/shopbag.gif" />
<img id="img2" src="images/ezays.png"/>

</div>
<div class="menu_bar">
<ul id="menu">
<li><a href="index.php" >Home</a> </li>
<li><a href="allproducts.php">All Products</a></li>
<li><a href="customers/my_account.php">My Account</a></li>
<li><a href="customer_register.php">Sign Up</a></li>
<li><a href="cart.php">Shopping Cart</a></li>
<li><a href="#footer">Contact Us</a></li>
</ul>

<div  id="form">
<form method="get" action="results.php" enctype="multipart/form-data">
<input type="text" name="query" placeholder="Search a Product" />
<input type="submit" name="Search" value="search" />
</form>

</div>

</div>
<div class="main_content">
    <div id="side_bar" >
	<div id="sidebar_title" >Categories</div>
	<ul id="cats">
	<?php getCategories(); ?>
	</ul>
	
	<div id="sidebar_title" >Brands</div>
	<ul id="cats">
	<?php getBrands(); ?>
	</ul>
	
	</div>
    <div id="content_area" >
	
	<div id="shopping_cart" style="background:black; color:white;">
	<span id="span" style="margin-left:350px; font-size:18px; padding:5px; line-height:40px;">
	Welcome Guest <b style="color:yellow">Shopping Cart -</b> Total Items : Total Prize :<a href="cart.php" style="color:yellow">GoTo Cart</a>
	</span>
	
	</div>
	
	
	<div id="products_box">
	<?php
	if(isset($_GET['pro_id'])){
	$product_id= $_GET['pro_id'];
	$get_pro= "select * from products where product_id ='$product_id'";
	 
	 $run_pro= mysqli_query($con,$get_pro);
	 
	 while($row_pro= mysqli_fetch_array($run_pro)){
	 
	 $pro_id= $row_pro['product_id'];
	 $pro_title= $row_pro['product_title'];
	 $pro_price= $row_pro['product_price'];
	 $pro_image= $row_pro['product_image'];
	 $pro_desc= $row_pro['product_desc'];
	 
	 echo"
	 <div id='single_product'>
	 
	 <h3>$pro_title</h3>
	 
	 <img src='/Ecommerce/images/$pro_image/' width='400' height='300'/>
	 
	 <p><b>$ $pro_price</b></p>
	 <p>$pro_desc</p>
	 
	 <a href='index.php?pro_id=$pro_id' style='float:left;'>Go Back</a>
	 <a href='index.php?pro_id=$pro_id'><button style='float:right;'>Add To Cart</button></a>
	 
	 </div>
	 ";
	 
	 }
	 
	 
	 
	 
	 
	 
	 
	 
	}
	
	
?>
	</div>
	</div>
</div>
<div id="footer">

<p style="text-align:centre; padding-top:40px;padding-left:220px; font-weight:bolder; font-size:30px; "> &copy; 2019 by www.EzaysCollection.com </p>

</div>


</div>
















</body>
</html>