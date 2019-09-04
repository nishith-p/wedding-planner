<!DOCTYPE html>
<html>

<head>
	<title>Wedding Planner | Sign Up</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/register.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/cart-very-special.css">
	<style>
	#main-sec{
		background-image: url("images/sbg4.png");
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
	
	<form action="includes/signup_inc.php" method="POST">
	
	<h2 style="font-size:30px; text-align:center; color:white; margin:-70px 0 0 0;">Your wedding planning starts here.</h2><br>
   
    <input type="text" placeholder="Email" name="email" required>
	<input type="text" placeholder="User Name" name="uname" required>
    <input type="text" placeholder="First Name" name="fname" required>
	<input type="text" placeholder="Last Name" name="lname" required>
	<input type="text" placeholder="Address" name="adrs" required>
	<input type="text" placeholder="Contact Number" name="contactn" required>
    <input type="password" placeholder="Password" name="psw" required>
    <input type="password" placeholder="Repeat Password" name="rpsw" required>
    
    <p style="font-size:11px; text-align:center;"><br>By signing up, you agree to our Terms and Privacy Policy.</p><br>

    <button name="signup" type="submit" class="sign-button">Sign Up</button>
	
	<p style="font-size:11px; text-align:center;">Already a member? <a href="loginp.php">Log In</a></p>
	
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