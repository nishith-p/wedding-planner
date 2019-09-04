<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheets/user.css">
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
		<li><a class="active" href="additems.php">Add Products</a></li>
		<li><a href="update.delete.php">Update/Delete Products</a></li>
		<li><a href="admin.messages.php">Messages</a></li>
		</ul>
		</div>
		
	<div class="o-container">
	
		<form action="includes/add.php" method="POST" enctype="multipart/form-data">
			<input type="text" placeholder="Product Name" name="pname" class="pname" required>
			<select name="ptype" class="ptype"required>
				<option value="Venue">Venue</option>
				<option value="Jewellery">Jewellery</option>
				<option value="Wedding Dress">Dressing</option>
				<option value="Wedding Car">Wedding Car</option>
				<option value="Photography">Photography</option>
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
			<input type="number" placeholder="Quantity" name="pquan" class="pquan" required>
			<input type="number" placeholder="Price" name="pprice" class="pprice" required>
			<textarea type="text" placeholder="Description" name="des" class="area" required></textarea>
			<input type="file" name="file" class="file" required>
			<button name="submit" type="submit" class="add">Add</button>
		</form>
	
	</div>
	</section>
	
	<!--FOOTER START-->
	
	<?php
	
		include_once 'footer.php';
	?>
	
</body>


</html>