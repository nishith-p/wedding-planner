<!DOCTYPE html>
<html>

<head>
	<title>Wedding Planner | Home</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/index.css">
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
	
	<div class="slideshow-container">
	
	<div class="mySlides fade">
	<h1 class="alpha fade">Your wedding planner <br>awaits.</h1>
	<h2 class="beta fade">Your personal wedding planner works behind the scenes <br>taking care of who, what, where and when for all your events.</h2>
	</div>
	
	<div class="mySlides fade">
	<h1 class="alpha fade">Planning a wedding has<br>never been easier.</h1>
	<h2 class="beta fade">Sign up now and get access to your all-in-one wedding planner.<br>&nbsp</h2>
	</div>

	<div class="mySlides fade">
	<h1 class="alpha fade">Your dream adventure <br>starts here.</h1>
	<h2 class="beta fade">We'll guide you every step of the way with expert wedding <br>planning tips, articles, vendors, inspiration and more.</h2>
	</div>
	
	</div>
	
	<img class="main-img" src="images/index/main-1.png"></img> 
	</div>
	</section>
	
	<!-- PACKAGES -->
	
	<div class = "o2-container"> 
	
	<h1 class="txt-3">Wedding Planning Packages</h1>
	<h2 class="txt-4">Everyone deserves a memorable wedding ceremony - one that is truly unique and meaningful, and at an affordable price.<br>Define your wedding style with these 3 affordable packages that have choices of their own.</h2>
	
	<div class="jquery-script-clear"></div>
	<div class="demo-wrap">
	<div id="demo" class="demo">
	
	<ul class="slide-wrap" id="example">
		
		<!--GOLD-->
		<li class="pos2">
		<div class="inner">
		<a href="planning.php"><img src="images/index/pk3.png"/></a>
		</div>
		</li>
		
		<!--PLATINUM-->
		<li class="pos3">
		<div class="inner">
		<a href="planning.php"><img src="images/index/pk1.png"/></a>
		</div>
		</li>
		
		<!--SILVER--> 
		<li class="pos4">
		<div class="inner">
		<a href="planning.php"><img src="images/index/pk2.png"/></a>
		</div>
		</li>
		
	</ul>
		
		<i class="arrow prev" id="jprev">&lt;</i>
		<i class="arrow next" id="jnext">&gt;</i>
		
	</div>
	</div>
	</div> 
	
	<!--GALLERY-->
	
	<section id="main-sec-2">
	
	<div class = "o3-container"> 
	
	<h1 class="txt-5">Photo Gallery</h1>
	<h2 class="txt-6"> Romantic, Unforgettable and Affordable.  We strive to make your wedding day perfect in every way at an affordable price.</h2>
	
	<br><br>
	
	<div class="row">
	<div class="column">
    <img src="images/index/gallery/1.jpg" style="width:100%" onclick="openModal1();currentSlide(1)" class="hover-shadow cursor">
	</div>
	<div class="column">
    <img src="images/index/gallery/2.jpg" style="width:100%" onclick="openModal1();currentSlide(2)" class="hover-shadow cursor">
	</div>
	<div class="column">
	<img src="images/index/gallery/3.jpg" style="width:100%" onclick="openModal1();currentSlide(3)" class="hover-shadow cursor">
	</div>
	<div class="column">
    <img src="images/index/gallery/4.jpg" style="width:100%" onclick="openModal1();currentSlide(4)" class="hover-shadow cursor">
	</div>
	</div>
	
	<div class="row">
	<div class="column">
    <img src="images/index/gallery/5.jpg" style="width:100%" onclick="openModal()1;currentSlide(5)" class="hover-shadow cursor">
	</div>
	<div class="column">
    <img src="images/index/gallery/6.jpg" style="width:100%" onclick="openModal()1;currentSlide(6)" class="hover-shadow cursor">
	</div>
	<div class="column">
	<img src="images/index/gallery/14.jpg" style="width:100%" onclick="openModal()1;currentSlide(7)" class="hover-shadow cursor">
	</div>
	<div class="column">
    <img src="images/index/gallery/8.jpg" style="width:100%" onclick="openModal()1;currentSlide(8)" class="hover-shadow cursor">
	</div>
	</div>

	<div id="myModal1" class="modal">
	<span class="close cursor" onclick="closeModal()">&times;</span>
	<div class="modal-content">

    <div class="mySlides-1">
    <img src="images/index/gallery/1.jpg" style="width:100%">
    </div>

    <div class="mySlides-1">
    <img src="images/index/gallery/2.jpg" style="width:100%">
    </div>

    <div class="mySlides-1">
    <img src="images/index/gallery/3.jpg" style="width:100%">
    </div>
    
    <div class="mySlides-1">
    <img src="images/index/gallery/4.jpg" style="width:100%">
    </div>
	
	<div class="mySlides-1">
    <img src="images/index/gallery/5.jpg" style="width:100%">
    </div>

    <div class="mySlides-1">
    <img src="images/index/gallery/6.jpg" style="width:100%">
    </div>

    <div class="mySlides-1">
    <img src="images/index/gallery/14.jpg" style="width:100%">
    </div>
    
    <div class="mySlides-1">
    <img src="images/index/gallery/8.jpg" style="width:100%">
    </div>
    
    <a class="prev-2" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next-2" onclick="plusSlides(1)">&#10095;</a>

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
	
	<!--TESTIMONIALS--> 
	
	<img class="test-img-1" src="images/index/test5.png"></img>
	<img class="test-img-2" src="images/index/test6.png"></img>
	
	<!--FOOTER START-->
	
	<?php
	
		include_once 'footer.php';
	?>
	
</body>

<script src="myModal.js"></script>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 6000); // Change image every 6 seconds
}

</script>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="script/jquery.rollingslider.js"></script>

<script>
			$('#demo').RollingSlider({
				showArea:"#example",
				prev:"#jprev",
				next:"#jnext",
				moveSpeed:300,
				autoPlay:false
			});
</script>

<script>
function openModal1() {
  document.getElementById('myModal1').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal1').style.display = "none";
}

var slideIndex2 = 1;
showSlides2(slideIndex);

function plusSlides(n) {
  showSlides2(slideIndex2 += n);
}

function currentSlide(n) {
  showSlides2(slideIndex2 = n);
}

function showSlides2(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides-1");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex2 = 1}
  if (n < 1) {slideIndex2 = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex2-1].style.display = "block";
  dots[slideIndex2-1].className += " active";
  captionText.innerHTML = dots[slideIndex2-1].alt;
}
</script>


</html>