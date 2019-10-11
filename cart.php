<?php 
session_start();
 
include("functions/functions.php");
?>

<!DOCTYPE>



	 <?php
	 
	 global $con;
	 
	 /*if(isset($_GET['my_cart']) && isset($_GET['qty'])){*/
	 if(isset($_POST['update_cart']) && isset($_POST['qty'])){



		$_SESSION['qty'] = array();

		foreach($_POST['qty'] as $pro_id => $qty ){
			
			////echo $pro_id;
			//echo $qty;
			//echo '<br><br><br>';
			
			//$_SESSION['qty'] = $_SESSION['qty'] || [];
			
			$_SESSION['qty'][$pro_id]=$qty;
			
			$update_qty="update cart set qty='$qty' where p_id='$pro_id'";
			$run_qty=mysqli_query($con,$update_qty);
			
			//$total=$total*$qty;
			  
		  }
		  
		  
		
		/*$pro_id=$_GET['my_cart'];
	
		 $qty= $_GET['qty'];
		 $update_qty="update from cart set qty='$qty' where p_id='$pro_id'";
		 $run_qty=mysqli_query($con,$update_qty);
		 
		 $_SESSION[$pro_id]['qty']=$qty;
		 $total=$total*$qty;*/
	 }
	 
	  
	
	 ?>
	 
<?php
	
	function UpdateCart(){
	global $con;
	$ip= getIp();
	
      if(isset($_POST['update_cart']) && isset($_POST['remove'])){
		  
		 
		  
		  foreach($_POST['remove'] as $remove_id){
			  
			  $delete_product="delete from cart where p_id='$remove_id' AND ip_add='$ip'";
			  $run_delete=mysqli_query($con,$delete_product);
			  
			  if($run_delete){
				  echo"<script>window.open('cart.php','_self');</script>";
				  
			  }
			  
		  }
		  
	  }
	
	if(isset($_POST['continue'])){
		
		echo"<script>window.open('index.php','_self');</script>";
		
	}
	
	}
	UpdateCart();
	
	?>

<html>
<head>
<title>My First Page</title>
<link rel="stylesheet" href="styles/style.css" media="all"></link>
</head>
<body>
<div class="main_container" style="background:black">
<div class="main_header">

<a href="index.php"><img id="img1" src="images/shopbag.gif" /></a>
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
	<?php cart();?>
	<div id="shopping_cart" style="background:black; color:white;">
	<span  style=" font-size:17px; padding:3px; line-height:40px;">
	<?php
	if(isset($_SESSION['customer_email'])){
		
		echo"<b>Welcome :</b>".$_SESSION['customer_email']."<b style='color:yellow'>Your</b>";
		
	}
		else{
			
			echo"<b>Welcome Guest :</b>";
	}
	
	
	
	
	?>
	
	
	<b style="color:yellow">Shopping Cart -</b> Total Items :  <?php total_items(); ?> Total Prize : <?php total_price(); ?> <a href="index.php" style="color:yellow">Back To Shop</a>
	
	<?php
	if(!isset($_SESSION['customer_email'])){
		echo"<a href='checkout.php' style='color:orange'>LogIn</a>";
		
	}
	else{
		echo"<a href='logout.php' style='color:blue'>LogOut</a>";
	}
	
	
	?>
	</span>
	
	</div>
	
	
	<div id="products_box">
	
	<form method="post" enctype="multipart/form-data">
	
	 <table align="center" width="700" bgcolor="pink" >
	 
	 <tr  align="center">
	 
	 <th>Remove</th>
	 <th>Product(S)</th>
	 <th>Quantity</th>
	 <th>Total Price</th>
	 <th>Update</th>
	 
	 </tr>
	 <?php

    $total=0;
	global $con;
	$ip=getIp();
	$sel_price="select * from cart where ip_add='$ip'";
	$run_price=mysqli_query($con,$sel_price);
	while($p_price=mysqli_fetch_array($run_price)){
		$pro_id=$p_price['p_id'];
		$pro_price="select * from products where product_id='$pro_id'";
		$run_pro_price=mysqli_query($con,$pro_price);
		while($pp_price=mysqli_fetch_array($run_pro_price)){
			
			$product_price= array($pp_price['product_price']);
			$product_title=$pp_price['product_title'];
			$product_image=$pp_price['product_image'];
			$single_price=$pp_price['product_price'];
			
			
			
			$values=array_sum($product_price);
			$total +=($values * $_SESSION['qty'][$pro_id]);
			
			
			

	 ?>
	 
	 <tr align="center">
	 
	 <td><input type="checkbox" name="remove[]" value=" <?php echo $pro_id ;?>"/> </td>
	 <td>
	 <?php echo $product_title; ?>
	 <br>
	 <img src="/Ecommerce/images/<?php echo $product_image; ?>" width="60" height="60"/>
	 </td>
	 <td><input type="text" size="6" name="qty[<?php echo $pro_id; ?>]" value="<?php  echo isset($_SESSION['qty'][$pro_id]) ? $_SESSION['qty'][$pro_id] : 0; ?>"/></td>
	 
	 <td> <?php echo "$" .$single_price ;?></td>
	 
	 <td><!--<a href="cart.php?qty_update=">Update </a>--></td>
	 
	 </tr>
	 
	
	<?php } } ?>
	
	 <tr align="right">
       <td colspan="4"><b> Sub Total</b> </td>
	   <td> <?php echo "$" . $total; ?></td>
	 </tr>
	 
	
	 <tr align="center">
	 
	 <td colspan="2"><input type="submit" name="update_cart" value="update cart" /></td>
	 <td><input type="submit" name="continue" value="Continue Shopping" /></td>
	 <td><button><a href="checkout.php"  style="text-decoration:none; color:black;" value="payment">CheckOut </a></button> </td>
	 
	 </tr>
	 
	 </table>
	
	</form>
	
	
	
	
	
	
	</div>
	
	
	<?php 
				if(!isset($_SESSION['payment'])){
					if(isset($_SESSION['customer_email'])){
					//include("customer_login.php");
					include("payment.php");
				}
				}
				?>
</div>
<div id="footer">

<p style="text-align:centre; padding-top:40px;padding-left:220px; font-weight:bolder; font-size:30px; "> &copy; 2019 by www.EzaysCollection.com </p>

</div>


</div>
















</body>
</html>