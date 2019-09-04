<!DOCTYPE html>
<html>

<head>
	<title>Wedding Planner | User Account</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/user3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/cart-very-special.css">
	
</head>

<body> 

	<?php
		
		include_once 'header.php';
		include_once 'includes/config.php';
	
	
	$n = $_SESSION['u_id'];
	$customerPwd = $_SESSION['u_pwd'];
	
	$sql = "SELECT * FROM customers WHERE customer_id='$n';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	?>

	<!--HEADER END-->
	
	<section id="main-sec">
	
		<div class="left-nav">
		<ul>
		<li><a class="active" href="user-general.html">General</a></li>
		<li><a href="user-order.php">Orders</a></li>
		</ul>
		</div>
		
	<div class="o-container">
		
			<form action="includes/user_general.php" method="POST">
				<div>
				<label class="one">User Name</label>
				<input type="text" name="uname" id="un" class="userid" value="<?php echo $row['user_name']; ?>">
				</div>
				<div>
				<label class="one two">User Email</label>
				<input type="text" name="email" class="userid xa" value="<?php echo $row['email']; ?>">
				</div>
				<div>
				<label class="one two">First Name</label>
				<input type="text" name="fname" class="userid xa" value="<?php echo $row['first_name']; ?>">
				</div>
				<div>
				<label class="one two">Last Name</label>
				<input type="text" name="lname" id="ln" class="userid xa" value="<?php echo $row['last_name']; ?>">
				</div>
				<div>
				<label class="one two">Address</label>
				<input type="text" name="addres" id="ad" class="userid xa" value="<?php echo $row['address']; ?>">
				</div>
				<div>
				<label class="one two">Conatact No</label>
				<input type="text" name="contactno" id="con" class="userid xa" value="<?php echo $row['contact_no']; ?>">
				</div>
				<div>
				<label class="one two">Change Password</label>
				<input type="password" name="password" id="cp" class="userid xa" value="<?php echo $_SESSION['u_pwd']; ?>">
				</div>
				<div>
				<label class="one two">Retype Passowrd</label>
				<input type="password" name="rpassword" id="rp" class="userid xa" value="<?php echo $_SESSION['u_pwd']; ?>">
				</div>
				<button name="submit" type="submit" class="add">Update</button>
			</form>
		
	

	
	</div>
	</section>
	
	<!-- THE MODAL -->
	
	<div id="myModal" class="modal">
	<div class="modal-content">
    <span class="close">&times;</span>
	<div class="container"><div class="row"><div class="col" id="cart"></div></div></div>
	</div>
	</div>
	
	<!--FOOTER START-->
	
	<?php
	
		include_once 'footer.php';
	?>
	
	
</body>
<script src="myModal.js"></script>


</html>