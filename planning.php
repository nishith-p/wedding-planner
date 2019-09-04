<!DOCTYPE html>
<html>

<head>
	<title>Wedding Planner | Planning</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/planning.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/cart-very-special.css">
</head>

<body> 

	<?php
		
		include_once 'header.php';
	?>

	<!--HEADER END-->
	
	<section id="main-sec">
		<ul class="scroll-click">
		<li><a href="#red">^</a></li>
		</ul>
	
	<div id="container-scroll">
		
		<div id="red">
		<div id="wrap">
		<div id="columns" class="columns_4">
	
		<h2>&nbsp</h2>
		
		<figure>
		<img src="images/planning/1.png">

		<a class="button" href="#green">Platinum</a>
		</figure>
		
		<figure>
		<img src="images/planning/2.png">
		<a class="button" href="#blue">Gold</a>
		</figure>
		
		<figure>
		<img src="images/planning/3.png">
		<a class="button" href="#yellow">Silver</a>
		</figure>
		
		</div>
		</div>
		</div>
		
		<div id="green">
		
		<p class="pkg-title">~ PLATINUM ~</p> 
		
		<div class="o-container"> 
		<p class="desc">
		If you are starting from scratch and has practically no idea where to start your wedding planning; or you simply want to have your wedding preparation handled by experts while you sit back and relax until the big day, this is our recommended package for you. Complete assistance in the planning and preparation of all the event details, from start to finish.
		</p>
		
		<div class="grid-container" style="height: 300px; margin-bottom:165px;">
		<div class="grid-item">
		<p class="grid-title">PRE-EVENT</p>
		<div class="grid-list">
		❉ Advise and consultation on budget planning and management; wedding etiquette, trends and customs; selection of music for the ceremony, reception and dinner
		<br>
		❉ Scout for the ideal venues for your wedding – from the church (or ceremony site) to the reception
		<br>
		❉ Conceptualize wedding reception program
		<br>
		❉ Refer and meet with the Emcee to discuss the program with
		<br>
		❉ Match-up with pre-screened professional wedding merchants and providers, as well as assistance in the review of contracts
		<br>
		❉ Unlimited meet-ups
		<br>
		❉ Oversee of wedding invitations. We check the addressing and content/ appropriateness of your invitation cards as well as source for the best calligrapher for your invites
		<br>
		❉ Create content and select readings for the  Missalette and wedding ceremony program
		<br>
		❉ Plan and coordinate wedding rehearsals and/or bridal shower
		<br>
		❉ Provide RSVP services
		<br>
		❉ Final check on the wedding arrangements, requirements,  wedding day schedule, copy of the programs, arrangements made with the service providers, and guest list
		</div>
		
		</div>
		<div class="grid-item">
		<p class="grid-title">WEDDING DAY PROPER</p>
		<div class="grid-list">
		❉ Check on the bride 5 hours before the ceremony, and coordinate on last minute details. A staff is assigned to assist the bride with the general preparation such as donning of the bridal gown; getting into the bridal car and during the bridal entrance
		<br>
		❉ Assist in laying out of wedding gown and all bridal items and accessories for the pictorials
		<br>
		❉ Check the flower count delivered for the principal sponsors and entourage
		<br>
		❉ Monitor on the tasks delegated to Hair and Make-up stylist, photographers, and videographers, Florists, Bridal Car
		<br>
		❉ Assemble items for the reception: gifts, favors; wines, etc.
		<br>
		❉ Assemble items for the wedding ceremony:  Missalettes/programmes, veil, cord, matches, unity candle (if applicable), flowers, etc.
		<br>
		❉ Provide client with entourage duties during the ceremony and reception
		<br>
		❉ Facilitate in minor tasks such as coordinate payment for suppliers, order meals , etc
		</div>
		
		</div>
		<div class="grid-item">
		<p class="grid-title">CEREMONY VENUE</p>
		<div class="grid-list">
		❉ Coordinate with the Church staff/ceremony venue manager
		<br>
		❉ Check the ceremony venue set-up, such as seating arrangements of entourage/sponsors/parents; couple’s pews and chairs; set-up of the two big candles and/or the Unity Candle Set; musician’s seating arrangements; carpet laying; delivery and set up of flower decoration
		<br>
		❉ Ensure the prompt arrival of the musicians and singer; the Officiating Priest/Minister; the lector,  commentator, and readers (Catholic)-or equivalent
		<br>
		❉ Take charge with the distribution of corsages, bouquets and boutonnieres to the entourage; and the Missalettes or wedding programs
		<br>
		❉ Provide instructions to the attendants on seating plan of Sponsors: Principal, Secondary, other Bridal Entourage
		<br>
		❉ Assemble the veil, cord, matches, candles, offertory items, ring and arras pillows; and hand over the items correspondingly
		<br>
		❉ Assist in the Processional line-up
		<br>
		❉ Collect for safekeeping the candles, veil, cord, arras and arras pillows, and the copy of marriage license (if provided) after the ceremony
		<br>
		❉ Final check to ensure items are intact before leaving the venue
		
		</div>
		</div>  
		</div>
		
		<div class="buttons">
		<a class="button-order-1" <?php 
										if(isset($_SESSION["u_id"])) {
											echo "onclick='addToCart(34)'";
										} else {
											echo "onclick='error()'";
										}
									?>>PLACE ORDER</a>
		<a class="button-order-2" href="product-dress.php">CHECK ADD-ONS</a>
		</div>
		</div>
		
		</div>
		
		<div id="blue">
		
		<p class="pkg-title">~ GOLD ~</p> 
		
		<div class="o-container"> 
		<p class="desc">
		If you are starting from scratch and has practically no idea where to start your wedding planning; or you simply want to have your wedding preparation handled by experts while you sit back and relax until the big day, this is our recommended package for you. Complete assistance in the planning and preparation of all the event details, from start to finish.
		</p>
		
		<div class="grid-container" style="height: 300px; margin-bottom:165px;">
		<div class="grid-item">
		<p class="grid-title">PRE-EVENT</p>
		<div class="grid-list">
		❉ Advise and consultation on budget planning and management; wedding etiquette, trends and customs; selection of music for the ceremony, reception and dinner
		<br>
		❉ Scout for the ideal venues for your wedding – from the church (or ceremony site) to the reception
		<br>
		❉ Conceptualize wedding reception program
		<br>
		❉ Refer and meet with the Emcee to discuss the program with
		<br>
		❉ Match-up with pre-screened professional wedding merchants and providers, as well as assistance in the review of contracts
		<br>
		❉ Unlimited meet-ups
		<br>
		❉ Oversee of wedding invitations. We check the addressing and content/ appropriateness of your invitation cards as well as source for the best calligrapher for your invites
		<br>
		❉ Create content and select readings for the  Missalette and wedding ceremony program
		<br>
		❉ Plan and coordinate wedding rehearsals and/or bridal shower
		<br>
		❉ Provide RSVP services
		<br>
		❉ Final check on the wedding arrangements, requirements,  wedding day schedule, copy of the programs, arrangements made with the service providers, and guest list
		</div>
		
		</div>
		<div class="grid-item">
		<p class="grid-title">WEDDING DAY PROPER</p>
		<div class="grid-list">
		❉ Check on the bride 5 hours before the ceremony, and coordinate on last minute details. A staff is assigned to assist the bride with the general preparation such as donning of the bridal gown; getting into the bridal car and during the bridal entrance
		<br>
		❉ Assist in laying out of wedding gown and all bridal items and accessories for the pictorials
		<br>
		❉ Check the flower count delivered for the principal sponsors and entourage
		<br>
		❉ Monitor on the tasks delegated to Hair and Make-up stylist, photographers, and videographers, Florists, Bridal Car
		<br>
		❉ Assemble items for the reception: gifts, favors; wines, etc.
		<br>
		❉ Assemble items for the wedding ceremony:  Missalettes/programmes, veil, cord, matches, unity candle (if applicable), flowers, etc.
		<br>
		❉ Provide client with entourage duties during the ceremony and reception
		<br>
		❉ Facilitate in minor tasks such as coordinate payment for suppliers, order meals , etc
		</div>
		
		</div>
		<div class="grid-item">
		<p class="grid-title">CEREMONY VENUE</p>
		<div class="grid-list">
		❉ Coordinate with the Church staff/ceremony venue manager
		<br>
		❉ Check the ceremony venue set-up, such as seating arrangements of entourage/sponsors/parents; couple’s pews and chairs; set-up of the two big candles and/or the Unity Candle Set; musician’s seating arrangements; carpet laying; delivery and set up of flower decoration
		<br>
		❉ Ensure the prompt arrival of the musicians and singer; the Officiating Priest/Minister; the lector,  commentator, and readers (Catholic)-or equivalent
		<br>
		❉ Take charge with the distribution of corsages, bouquets and boutonnieres to the entourage; and the Missalettes or wedding programs
		<br>
		❉ Provide instructions to the attendants on seating plan of Sponsors: Principal, Secondary, other Bridal Entourage
		<br>
		❉ Assemble the veil, cord, matches, candles, offertory items, ring and arras pillows; and hand over the items correspondingly
		<br>
		❉ Assist in the Processional line-up
		<br>
		❉ Collect for safekeeping the candles, veil, cord, arras and arras pillows, and the copy of marriage license (if provided) after the ceremony
		<br>
		❉ Final check to ensure items are intact before leaving the venue
		</div>
		
		</div>  
		</div>

		<div class="buttons">
		<a class="button-order-1" <?php 
										if(isset($_SESSION["u_id"])) {
											echo "onclick='addToCart(34)'";
										} else {
											echo "onclick='error()'";
										}
									?>>PLACE ORDER</a>
		<a class="button-order-2" href="product-dress.php">CHECK ADD-ONS</a>
		</div>
		
		</div>
		
		</div>
		
		
		<div id="yellow">
		
		<p class="pkg-title">~ SILVER ~</p> 
		
		<div class="o-container"> 
		<p class="desc">
		If you are starting from scratch and has practically no idea where to start your wedding planning; or you simply want to have your wedding preparation handled by experts while you sit back and relax until the big day, this is our recommended package for you. Complete assistance in the planning and preparation of all the event details, from start to finish.
		</p>
		
		<div class="grid-container" style="height: 300px; margin-bottom:165px;">
		<div class="grid-item">
		<p class="grid-title">PRE-EVENT</p>
		<div class="grid-list">
		❉ Advise and consultation on budget planning and management; wedding etiquette, trends and customs; selection of music for the ceremony, reception and dinner
		<br>
		❉ Scout for the ideal venues for your wedding – from the church (or ceremony site) to the reception
		<br>
		❉ Conceptualize wedding reception program
		<br>
		❉ Refer and meet with the Emcee to discuss the program with
		<br>
		❉ Match-up with pre-screened professional wedding merchants and providers, as well as assistance in the review of contracts
		<br>
		❉ Unlimited meet-ups
		<br>
		❉ Oversee of wedding invitations. We check the addressing and content/ appropriateness of your invitation cards as well as source for the best calligrapher for your invites
		<br>
		❉ Create content and select readings for the  Missalette and wedding ceremony program
		<br>
		❉ Plan and coordinate wedding rehearsals and/or bridal shower
		<br>
		❉ Provide RSVP services
		<br>
		❉ Final check on the wedding arrangements, requirements,  wedding day schedule, copy of the programs, arrangements made with the service providers, and guest list
		</div>
		
		</div>
		<div class="grid-item">
		<p class="grid-title">WEDDING DAY PROPER</p>
		<div class="grid-list">
		❉ Check on the bride 5 hours before the ceremony, and coordinate on last minute details. A staff is assigned to assist the bride with the general preparation such as donning of the bridal gown; getting into the bridal car and during the bridal entrance
		<br>
		❉ Assist in laying out of wedding gown and all bridal items and accessories for the pictorials
		<br>
		❉ Check the flower count delivered for the principal sponsors and entourage
		<br>
		❉ Monitor on the tasks delegated to Hair and Make-up stylist, photographers, and videographers, Florists, Bridal Car
		<br>
		❉ Assemble items for the reception: gifts, favors; wines, etc.
		<br>
		❉ Assemble items for the wedding ceremony:  Missalettes/programmes, veil, cord, matches, unity candle (if applicable), flowers, etc.
		<br>
		❉ Provide client with entourage duties during the ceremony and reception
		<br>
		❉ Facilitate in minor tasks such as coordinate payment for suppliers, order meals , etc
		</div>
		
		</div>
		<div class="grid-item">
		<p class="grid-title">CEREMONY VENUE</p>
		<div class="grid-list">
		❉ Coordinate with the Church staff/ceremony venue manager
		<br>
		❉ Check the ceremony venue set-up, such as seating arrangements of entourage/sponsors/parents; couple’s pews and chairs; set-up of the two big candles and/or the Unity Candle Set; musician’s seating arrangements; carpet laying; delivery and set up of flower decoration
		<br>
		❉ Ensure the prompt arrival of the musicians and singer; the Officiating Priest/Minister; the lector,  commentator, and readers (Catholic)-or equivalent
		<br>
		❉ Take charge with the distribution of corsages, bouquets and boutonnieres to the entourage; and the Missalettes or wedding programs
		<br>
		❉ Provide instructions to the attendants on seating plan of Sponsors: Principal, Secondary, other Bridal Entourage
		<br>
		❉ Assemble the veil, cord, matches, candles, offertory items, ring and arras pillows; and hand over the items correspondingly
		<br>
		❉ Assist in the Processional line-up
		<br>
		❉ Collect for safekeeping the candles, veil, cord, arras and arras pillows, and the copy of marriage license (if provided) after the ceremony
		<br>
		❉ Final check to ensure items are intact before leaving the venue
		</div>
		
		</div>  
		</div>

		<div class="buttons">
		<a class="button-order-1" <?php 
										if(isset($_SESSION["u_id"])) {
											echo "onclick='addToCart(34)'";
										} else {
											echo "onclick='error()'";
										}
									?>
		>PLACE ORDER</a>
		<a class="button-order-2" href="product-dress.php">CHECK ADD-ONS</a>
		</div>
		
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
<script>
function error(){
	var message = "Please first login to the website!";
	alert(message);
	window.location.href='planning.php';
}
</script>
</html>