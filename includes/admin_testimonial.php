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
    <th>Testimonial ID</th>
    <th>Name</th>
	<th>Partner's Name</th>
    <th>Email</th>
	<th>Contact No</th>
	<th>Wedding Date</th>
	<th>Description</th>
	<th>Approval</th>
  </tr>
    <?php
		$sql = "SELECT * FROM testimonial;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
    ?>
   <tr>
    <td><?php echo $row['test_id'];?></td>
    <td><?php echo $row['fname'];?></td>
    <td><?php echo $row['part_name'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['cont_no'];?></td>
	<td><?php echo $row['date'];?></td>
	<td><?php echo $row['description'];?></td>
	<td><?php echo $row['Approval'];?></td>
  </tr>
  
  <?php } } ?>
</table>

</body>
</html>