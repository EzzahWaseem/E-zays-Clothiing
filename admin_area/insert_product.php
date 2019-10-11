<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include("includes/db.php");

?>

<!DOCTYPE>
<html>
<head>
      <title>Inserting Products</title>
	  <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
      <script>tinymce.init({selector:'textarea'});</script>
</head>
<body bgcolor="pink">
<form method="post" action="insert_product.php" enctype="multipart/form-data">
<table align="center" width="795" bgcolor="#187eae" border="2">

<tr align="center">
<td colspan="7"><h2>Insert New Product Here</h2></td>
</tr>
<tr>
<td align="right"> <b>Product Title</b></td>
<td><input type="text" name="Product_title" size="60" required /></td>
</tr>

<tr> 
<td align="right"><b> Product Category</b></td>
<td>
<select name="Product_cat">
<option>Select Category</option>
<?php

	$get_cats="Select * from categories";
	$run_cats=mysqli_query($con,$get_cats);
	
	while($row_cats=mysqli_fetch_array($run_cats)){
		
	$cat_id=$row_cats['cat_id'];
	$cat_title=$row_cats['cat_title'];
	
	
	echo"<option value='$cat_id'>$cat_title</option>";
	
	}
?>
</select>
</td>
</tr>

<tr>
<td align="right"><b> Product Brand</b></td>
<td><select name="Product_brand" required>
<option>Select Brand</option>
<?php

	$get_brands="Select * from brands";
	$run_brands=mysqli_query($con,$get_brands);
	
	while($row_brands=mysqli_fetch_array($run_brands)){
		
	$brand_id=$row_brands['brand_id'];
	$brand_title=$row_brands['brand_title'];
	
	
	echo"<option value='$brand_id'>$brand_title</option>";
	
	}
?>
</select></td>
</tr>

<tr>
<td align="right"> <b>Product Image</b></td>
<td><input type="file" name="Product_image" required /></td>
</tr>

<tr>
<td align="right"><b> Product Price</b></td>
<td><input type="text" name="Product_price" required /></td>
</tr>

<tr>
<td align="right"><b> Product Description</b></td>
<td><textarea name="Product_desc" cols="20" rows="10"></textarea></td>
</tr>

<tr>
<td align="right"> <b>Product Keywords</b></td>
<td><input type="text" name="Product_keywords" size="50" required /></td>
</tr>

<tr align="center">
<td colspan="7" ><input type="submit" name="insert_post" value="Insert"/></td>
</tr>

</table>
</form>
</body>

</html>

<?php


if(isset($_POST['insert_post'])){
	
	$product_title=$_POST['Product_title'];
	$product_cat=$_POST['Product_cat'];
	$product_brand=$_POST['Product_brand'];
	$product_price=$_POST['Product_price'];
	$product_desc=$_POST['Product_desc'];
	$product_keywords=$_POST['Product_keywords'];
	
	
	$product_image=$_FILES['Product_image']['name'];
	$product_image_tmp=$_FILES['Product_image']['tmp_name'];
	
	move_uploaded_file($product_image_tmp,"product_images/$product_image");
	
     $insert_product="insert into products(product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) values('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
	
	$insert_pro = mysqli_query($con, $insert_product);
	echo $insert_pro;
	
	if($insert_pro){
		
		
		
		echo"<script>alert('Product has been  added in the list')</script>";
		echo"<script>window.open('index.php?insert_product.php','_self')</script>";
		
	}
}






















?>
