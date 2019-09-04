<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheets/contact.css">
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
	
	<div class="container-form">
	
	<form id="contact" action="includes/add_contacts.php" method="POST">
	
    <h3>Let's Talk.</h3>
	
    <fieldset>
		<input name="fname" placeholder="Full Name" type="text" tabindex="1" required autofocus>
    </fieldset>
	
    <fieldset>
		<input name="email" placeholder="Email Address" type="email" tabindex="2" required>
    </fieldset>
	
    <fieldset>
		<input name="contno"placeholder="Phone Number" type="tel" tabindex="3" required>
    </fieldset>
	
    <fieldset>
		<textarea name="msj" placeholder="Type your message here..." tabindex="4" required></textarea>
    </fieldset>
	
    <fieldset>
		<button name="submit" type="submit" id="contact-submit">Submit</button>
    </fieldset>
	
	</form>
 
	</div>
	
	</div>
	
	<!-- MAP -->
	
	<div class="mapouter">
	<div class="gmap_canvas">
	<iframe width="1000" height="225" id="gmap_canvas" src="https://maps.google.com/maps?q=SLIIT%20Malabe&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
	<a href="https://www.pureblack.de">webdesign agentur</a>
	</div>
	</div>
	
	<div class="contact-details">
	<div class="contact-info-1">
	<p id="con-title">Address:</p>
	<p id="address">
	No. 123, <br>
	Gemunupura Lane, <br>
	Kaduwela Road, <br>
	Malabe.
	</p>
	</div>
	
	<div class="contact-info-2">
	<p id="con-title">Phone:</p>
	<p id="phone-no">+94 11 2475399</p>
	</div>
	
	<div class="contact-info-3">
	<p id="con-title">Email:</p>
	<p id="email-add">myweddingplanner@gmail.com</p>
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