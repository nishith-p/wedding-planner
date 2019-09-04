<!DOCTYPE html>
<html>

<head>
	<title>Wedding Planner | Login</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/cart-very-special.css">
	<style>
	#main-sec{
		background-image: url("images/login2.png");
		height: 100%;
		background-position:center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
</head>

<body> 

	<?php
		
		include_once 'header.php';
	?>

	<!--HEADER END-->
	
	<section id="main-sec">
	<div class="o-container">
	
	<form action="includes/login_inc.php" method="POST">
	
	<h2 style="font-size:30px; text-align:center; color:white;">Log into your account.</h2><br>
	
    <input name="email" type="text" placeholder="Username" required>
	<input name="psw" type="password" placeholder="Password" required>
        
    <button name="login" class="login-button" type="POST">Login</button>
	
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