<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheets/main.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="cart.js"></script>
	
</head>

<body> 

	<header>	
		<a class="logo-wed" href="#"><img alt="Wedding Planner Logo" src="images/main/logo7.png" style="width:300px;"></a> 
		<nav class="t-nav">
		<div class="top-nav">
		<ul class="menu-bar">
			<li><a href="index.php">Home</a></li>
			<li><a href="planning.php">Planning</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>
		
		</div>
		<img id="log-bag" src="images/main/bag.png" onclick="openthis();toggleCart();"></img> 
		<?php
			if(isset($_SESSION['u_id'])) { 
			
				if($_SESSION['u_id'] == 3) { ?>
					<a href="admin.customer.php" class="usern"> <?php $n = $_SESSION['u_email'];
					echo $n;
					echo '<form action="includes/logout_inc.php" method="POST">
						  <button type="submit" name="submit" class="aTest al">Log out</button>
						  </form>'; 
				}else { ?></a>
					<a href="user-general.php" class="usern"> <?php $n = $_SESSION['u_email'];
					echo $n;
					echo '<form action="includes/logout_inc.php" method="POST">
						  <button type="submit" name="submit" class="aTest al">Log out</button>
						  </form>';
					
				}		
					
			 }else {
			
				echo '<form action="includes/login_inc.php" method="POST">
					  <button class="aTest" type="submit" formaction="loginp.php">Login</button>
					  <button class="aTest a" type="submit" formaction="signp.php">Sign Up</button>
					  </form>';
			}
		?></a>
		
		</nav>
	</header>
	
</body>

<script>
//Modal Element
var modal = document.getElementById('myModal');
//Button that open the modal. 
var btn = document.getElementById("log-bag");
//Button that closes the modal. 
var span = document.getElementsByClassName("close")[0];
//Open function
function openthis() {
    modal.style.display = "block";
}
//Close function
span.onclick = function() {
    modal.style.display = "none";
}
//Close function (no button)
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</html>