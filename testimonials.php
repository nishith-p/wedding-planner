<!DOCTYPE html>
<html>

<head>
	<title>Wedding Planner | Testimonial</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/testimonials.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/cart-very-special.css">
	
	
</head>

<body> 

	<?php
		
		include_once 'header.php';
		
	?>

	<!--HEADER END-->
	
	<section id="main-sec">
	
	<img class="dress-img-1" src="images/testimonials/main.png"></img>

	<div id="wrap">
	<div id="columns" class="columns_4">
	
	<p class="main-text">The weddings we create are only as good as the extent to which they surpass our clients’ expectations.  Here we proudly share with you some of the thoughts of those who have already journeyed down the aisle with us.</p>
	
	<?php
	 
		include 'includes/config.php';
		
		$sql = "SELECT * FROM testimonial";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
				
				if($row['Approval'] == 1) {
					$rowNew = $row['image'];
    ?> 
	<figure>
	<img src="uploads/<?php echo $rowNew;?>">
	<figcaption><?php echo $row['fname'];?> & <?php echo $row['part_name'];?></figcaption>
	<p class="test-text">
	<?php echo $row['description'];?>
	</p>
	
	</figure>
	
	<?php } } } ?>
	
	<!--figure>
	<img src="images/testimonials/2.jpg">
	<figcaption>Darrel & Erika</figcaption>
	<p class="test-text">
	I really can’t thank you enough for truly making my dreams come true and giving us the most beautiful, breath-taking and faultlessly organised wedding!
	Everyone was so lovely and I was really taken aback by how friendly & faultless everyone was. The makeup artist really got me through my nerves and her makeup was perfect, the DJ, the videographer & the photographer were also all so incredible, professional and just such lovely people. Everything ran so smoothly and the decor was just stunning. Walking into the reception room for the first time just left us speechless. I wish we could do it all over again! 
	</p>
    <a class="button" href="#"></a>
	</figure>
	
	<figure>
	<img src="images/testimonials/3.jpg">
	<figcaption>George & Mia</figcaption>
	<p class="test-text">
	We cannot thank you enough for the perfect wedding planning and organization on your end! Thank you for putting up with us for the last year and thank you for making our wedding week, and mainly wedding day sooo perfect! We’re in Mauritius just going over every little perfect moment of Saturday! Can’t wait to see all the professional pictures and videos.
	</p>
    <a class="button" href="#"></a>
	</figure>
  
	<figure>
	<img src="images/testimonials/4.jpg">
	<figcaption>Jordan & Kate</figcaption>
	<p class="test-text">
	We really had a wonderful time at the wedding and have received fabulous feedback from our guests. We want to thank you for making everything look and feel so fantastic and go so smoothly! The whole ‘event’ was just what we had hoped for – chic but relaxed – which left a very memorable impression on both local and overseas guests. Your attention to detail was superb and did not go un-noticed.
    </p>
	<a class="button" href="#"></a>
	</figure>
	
	<figure>
	<img src="images/testimonials/5.jpg">
	<figcaption>Marsh & Hailey</figcaption>
	<p class="test-text">
	No matter how many words to describe how we felt on our wedding day, nothing comes near it. Chris and I would like to thank you so much from the bottom of our hearts for giving us our dream wedding. It truly was mind-blowing, breathtaking and outstandingly beautiful. We are still struggling to believe it actually happened. Everything, from the lighting, the decor, the food, the service, the stationery to the music was excellent. Our guests are all still going on about it. You made our wedding – a ”fairytale” – come true.
	</p>
    <a class="button" href="#"></a>
	</figure>
	
    <figure>
	<img src="images/testimonials/6.jpg">
	<figcaption>Kevin & Natasha</figcaption>
	<p class="test-text">
	Thank you so much for absolutely everything. For your patience, calm disposition, problem-solving ability, integrity, tactfulness and creativity. We appreciate your work so very much, which essentially allowed us to plan the wedding on autopilot from across an ocean! We also particularly appreciate you spending time with Jordan and Zahara and keeping them occupied! Thank you again and we hope we can keep in touch! So, so many thanks!
	</p>
    <a class="button" href="#"></a>
	</figure-->
	
	<p class="btm-text">Have a story to share?</p>
	<a class="button-view" href="testimonials-add.php">SUBMIT A TESTIMONIAL</a>
	
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
