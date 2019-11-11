<!DOCTYPE html>
<html>
<head>
	<title>Bingoooo</title>
	<link rel="stylesheet" href="./css/navigation.css">
	<style>
		
		.slideshow  img {
			height: 300px;
			width: 500px;
			object-fit: fill;
			display: block;
  			margin-left: auto;
  			margin-right: auto;
  			object-fit: cover;
		}
		.slideshow {
			/*margin-top: -25px;*/
			height: 300px;
			border-style: solid;
		}
		.slideshow-container {
 			 max-width: 1000px;
  			position: relative;
  			margin: auto;
  			text-align: center;
  			margin-top: -30px;
		}
		.mySlides {display: none;}
		.mySlides img {vertical-align: middle;}
		.numbertext {
			position: absolute;
			margin-left:150px;
			font-size: 70%;
		}
	</style>
</head>


<body>
	<div class="header">
  		<h2>BINGOOO </h2>
	</div>

<div id="navbar">
	<ul>
 	 <li><a class="active" href="index.php" style="background-color: white; color: grey">Home</a></li>
 	 <li><a href="cakes.php">Cakes</a></li>
  	 <li><a href="icecream.php">Ice Creams</a></li>
  	 <li><a href="cheesecakes.php">Cheesecakes</a></li>
  	 <li><a href="joinus.php">Join Us</a></li>
	</ul></div><br>

<br>

<!---------------------------------------------------------------------------------------------------------------------->
<div class="slideshow-container">	
	<div class="mySlides fade">
  		<div class="numbertext" style="color: white;">1 / 3</div>
  		<a href="cakes.html"><img src="./images/slide2.jpg" style="width:750px; height: 450px"></a>
  		
	</div>

	<div class="mySlides fade">
  		<div class="numbertext">2 / 3</div>
  		<a href="cheesecakes.html"><img src="./images/slide1.jpg" style="width:750px; height: 450px"></a>
  		
	</div>

	<div class="mySlides fade">
  		<div class="numbertext">3 / 3</div>
  		<a href="icecream.html"><img src="./images/slide4.jpg" style="width:750px; height: 450px"></a>
  		
	</div>
</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
  		var i;
  		var slides = document.getElementsByClassName("mySlides");
  		var dots = document.getElementsByClassName("dot");
  		for (i = 0; i < slides.length; i++) {
    		slides[i].style.display = "none";  
  	}
  	slideIndex++;
  	if (slideIndex > slides.length) {slideIndex = 1}    
  	for (i = 0; i < dots.length; i++) {
    	dots[i].className = dots[i].className.replace(" active", "");
  	}
  	slides[slideIndex-1].style.display = "block";  
  	dots[slideIndex-1].className += " active";
  	setTimeout(showSlides, 2000); 
	}
</script>
</body>
</html>