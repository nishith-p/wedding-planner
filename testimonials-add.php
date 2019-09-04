<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheets/testimonials-add.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/cart-very-special.css">
</head>

<body> 

	<?php
		
		include_once 'header.php';
	?>

	<!--HEADER END-->
	
	<section id="main-sec">
	<div class="o-container">
	
	<p class="title-text">Share Your Adventure with the World!</p>
	
	<div class="container-form">
	
	<form id="contact" action="includes/add_testimonials.php" method="POST" enctype="multipart/form-data">
	

	
    <fieldset>
		<input name="fname" placeholder="Full Name" type="text" tabindex="1" required autofocus>
    </fieldset>
	
	<fieldset>
		<input name="pname" placeholder="Partner's Full Name" type="text" tabindex="1" required>
    </fieldset>
	
    <fieldset>
		<input name="email" placeholder="Email Address" type="email" tabindex="2" required>
    </fieldset>
	
    <fieldset>
		<input name="contno" placeholder="Phone Number" type="tel" tabindex="3" required>
    </fieldset>
	
	<p class="head-text">Wedding Date:</p>
	<fieldset>
		<input type="date" name="bday" required>
	</fieldset>
	
	<p class="head-text">Upload Image:</p>
	<fieldset>
		<input type="file" name="file">
	</fieldset>
	
    <fieldset>
		<textarea name="des" placeholder="Type your message here..." tabindex="4" required></textarea>
    </fieldset>
	
    <fieldset>
		<button name="submit" type="submit" id="contact-submit">Submit</button>
    </fieldset>
	
	</form>
 
	</div>
	
	</div>

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