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
    <th>Product ID</th>
    <th>Product Name</th>
	<th>Product Type</th>
    <th>Inner Type</th>
	<th>Quantity</th>
	<th>Price</th>
  </tr>
    <?php
		$sql = "SELECT * FROM product;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
    ?>
   <tr>
    <td><?php echo $row['product_id'];?></td>
    <td><?php echo $row['product_name'];?></td>
    <td><?php echo $row['product_type'];?></td>
	<td><?php echo $row['inner_type'];?></td>
	<td><?php echo $row['quantity'];?></td>
	<td><?php echo $row['price'];?></td>
  </tr>
  
  <?php } } ?>
</table>

</body>
</html>