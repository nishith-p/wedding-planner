<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheets/user1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body> 

	<?php
		
		include_once 'header.php';
	?>

	<!--HEADER END-->
	
	<section id="main-sec">
	
		<div class="left-nav">
		<ul>
		<li><a href="admin.customer.php">Customers</a></li>
		<li><a href="admin.product.php">Products</a></li>
		<li><a href="admin.orders.php">Orders</a></li>
		<li><a href="admin.testimonial.php">Testimonial</a></li>
		<li><a href="additems.php">Add Products</a></li>
		<li><a class="active" href="update.delete.php">Update/Delete Products</a></li>
		<li><a href="admin.messages.php">Messages</a></li>
		</ul>
		</div>
		
	<div class="o-container">
	
		<form action="includes/update_delete.php" method="POST" enctype="multipart/form-data">
			<input type="number" placeholder="Product ID" name="pid" id="p_id" required>
			<input type="text" placeholder="Product Name" name="pname" class="pname">
			<select name="ptype" class="ptype">
				<option value="venue">Venue</option>
				<option value="jewellery">Jewellery</option>
				<option value="dressing">Dressing</option>
				<option value="weddingcar">Wedding Car</option>
				<option value="photography">Photography</option>
			</select>
			<select name="innertype" class="ppackage">
				<option value="Null">Null</option>
				<option value="bride_d">Bride Dressing</option>
				<option value="groom_d">Groom Dressing</option>
				<option value="bride_r">Bride Rings</option>
				<option value="groom_r">Groom Rings</option>
				<option value="necklace">Necklaces</option>
				<option value="earring">Earrings</option>
				<option value="bracelet">Bracelets</option>
			</select>
			<input type="number" placeholder="Quantity" name="pquan" class="pquan">
			<input type="number" placeholder="Price" name="pprice" class="pprice">
			<textarea type="text" placeholder="Description" name="des" class="area"></textarea>
			<input type="file" name="file" class="file">
			<button name="update" type="submit" class="add">Update</button>
			<button name="delete" type="submit" class="add x">Delete</button>
		</form>
	
	</div>
	</section>
	
	<!--FOOTER START-->
	
	<?php
	
		include_once 'footer.php';
	?>
	
</body>


</html>