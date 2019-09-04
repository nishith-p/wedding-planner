<?php

	include_once 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheets/admin_product.css">
</head>

<body>
<table id="customers">
  <tr>
	<th>Order ID</th>
    <th>Customer ID</th>
    <th>Order Date</th>
	<th>Customer Name</th>
    <th>Customer Email</th>
	<th>Order Address</th>
	<th>Total Price</th>
  </tr>
    <?php
		$sql = "SELECT * FROM orders;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$n = $row['order_id'];
    ?>
   <tr>
    <td><?php echo $row['order_id'];?></td>
    <td><?php echo $row['cus_id'];?></td>
    <td><?php echo $row['order_date'];?></td>
	<td><?php echo $row['order_name'];?></td>
	<td><?php echo $row['order_email'];?></td>
	<td><?php echo $row['order_address'];?></td>
	<?php 
		$sql1 = "SELECT * FROM orders_items WHERE order_id='$n';";
		$result1 = mysqli_query($conn, $sql1);
		$resultCheck1 = mysqli_num_rows($result1);
		$ans = 0;
		
		if($resultCheck1 > 0) {
			while($row1 = mysqli_fetch_assoc($result1)){
				$n1 = $row1['product_id'];
				$n3 = $row1['quantity'];
				
				$sql2 = "SELECT * FROM product WHERE product_id='$n1';";
				$result2 = mysqli_query($conn, $sql2);
				$resultCheck2 = mysqli_num_rows($result2);
				
				if($resultCheck2 > 0) {
					$row2 = mysqli_fetch_assoc($result2);
					$n2 = $row2['price'];
					$ans += ($n2 * $n3);
		} } }?>
		<td><?php echo $ans;?></td>
	
	
	
  </tr>
  
  <?php } } ?>
</table>

</body>
</html>