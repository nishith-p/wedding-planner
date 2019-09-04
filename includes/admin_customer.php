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
    <th>Customer ID</th>
    <th>Email</th>
	<th>User Name</th>
    <th>First Name</th>
	<th>Last Name</th>
	<th>Address</th>
	<th>Contact No</th>
  </tr>
    <?php
		$sql = "SELECT * FROM customers;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
    ?>
   <tr>
    <td><?php echo $row['customer_id'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['user_name'];?></td>
	<td><?php echo $row['first_name'];?></td>
	<td><?php echo $row['last_name'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['contact_no'];?></td>
  </tr>
  
  <?php } } ?>
</table>

</body>
</html>