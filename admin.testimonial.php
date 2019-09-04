<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheets/user4.css">
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
		<li><a class="active" href="admin.testimonial.php">Testimonial</a></li>
		<li><a href="additems.php">Add Products</a></li>
		<li><a href="update.delete.php">Update/Delete Products</a></li>
		<li><a href="admin.messages.php">Messages</a></li>
		</ul>
		</div>
		
		<div class="o-container">
	
		<?php
		
			include_once 'includes/admin_testimonial.php';
		?>
	
		</div>
		
		<form action="includes/admin_add_testimonial.php" method="POST" enctype="multipart/form-data">
			<input type="number" placeholder="Product ID" name="pid" id="p_id" required>
			<select name="ptype" class="ptype">
				<option value="1">Approved</option>
				<option value="0">Disapproved</option>
			</select>
			<button name="update" type="submit" class="add">Add</button>
			<button name="delete" type="submit" class="add x">Delete</button>
		</form>
		
	</section>
	
	<!--FOOTER START-->
	
	<?php
	
		include_once 'footer.php';
	?>
	
</body>


</html>