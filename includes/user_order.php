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
    <th>Order Date</th>
	<th>Product Name</th>
	<th>Quantity</th>
    <th>Price</th>
  </tr>
    <?php
		$n = $_SESSION['u_id'];
		$sql = "SELECT * FROM orders WHERE cus_id='$n';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$n1 = $row['order_id'];
    ?>
   <tr>
    
	<?php
				$sql1 = "SELECT * FROM orders_items WHERE order_id='$n1';";
				$result1 = mysqli_query($conn, $sql1);
				$resultCheck1 = mysqli_num_rows($result1);
				
				if($resultCheck1 > 0) {
					while($row1 = mysqli_fetch_assoc($result1)) {
					
					$n2 = $row1['product_id'];
					
					$sql2 = "SELECT * FROM product WHERE product_id='$n2';";
					$result2 = mysqli_query($conn, $sql2);
					$resultCheck2 = mysqli_num_rows($result2);
				
					if($resultCheck2 > 0) {
						$row2 = mysqli_fetch_assoc($result2);
						$price = $row2['price'];
    ?>
	<td><?php echo $row['order_id'];?></td>
    <td><?php echo $row['order_date'];?></td>
    <td><?php echo $row2['product_name'];?></td>
	<?php } ?>
	<td><?php echo $row1['quantity'];?></td>
	<td><?php echo $row1['quantity'] * $price;?></td>
	</tr>
	<?php  			} 
			}
			}
		}
	?>
  
</table>

</body>
</html>