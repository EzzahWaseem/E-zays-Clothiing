<!DOCTYPE>
<?php 
include("includes/db.php");
//include("functions/functions.php");
//include("cart.php");
//session_start();

?>

	 


<body>

  <form method="post" >
    
          <table align="center"> 
		  
       <tr> 
          <th align="left">
	      Order No.
	      </th>
	      <td align="right">
	      <input id="column-left" type="text" name="invoice" value="<?php echo $_i=9001; $_i++;?>"/> 
	      </td>
	   
	   </tr>
	    
	   <tr>
          <th align="left"> 
		  Your Total Amount 
		  </th>
		  <td align="right">
		  <input id="column-right" type="text" name="totamount" value=" <?php echo "$" . $total; ?>"/>
		  </td>
		</tr>
		<tr>
		<td colspan="4">
		  <input type="radio" name="cash" value="Cash On Delievery" required /> Cash on Delievery</label><br/> <br/>
		</td>
		</tr>
		<tr>
		<td colspan="4">
          <input id="input-button" type="submit"  name="placeorder" value="Place Order" />
		</td>
		</tr>
        </table> 
    </form>
  
</body>

<?php
if(isset($_POST['placeorder'])){
	
	echo "<script>alert('Your order has been placed. Thanks for Shopping Here!!');</script>";
}
?>