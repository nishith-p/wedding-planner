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
    <th>Message ID</th>
    <th>Customer Name</th>
	<th>Email</th>
    <th>Contact No</th>
	<th>Message</th>
  </tr>
    <?php
		$sql = "SELECT * FROM contact;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
    ?>
   <tr>
    <td><?php echo $row['msj_id'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
	<td><?php echo $row['cont_no'];?></td>
	<td><?php echo $row['message'];?></td>
  </tr>
  
  <?php } } ?>
</table>

</body>
</html>