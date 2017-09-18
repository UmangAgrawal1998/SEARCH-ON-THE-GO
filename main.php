<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>ONLINE TRANSPORT SYSTEM</title>
<link rel="stylesheet" type="text/css" href="main.css">
<style>
{box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {
	display:none;
	background-size:contain;
	background-repeat:round;
	position:absolute;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  
}

/* Caption text */

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active {
  background-color: #717171;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
<div class="heading" style="width:1420px;">
<h1 class="abc">SEARCH ON THE GO</h1>
</div>
<div class="container" style="width:1420px;">
<h1><marquee  style="text-align:center;	color:#283593;	font-family: 'Helvetica', sans-serif;	animation: blinker 1s linear infinite;
	text-shadow: 3px 2px #CDDC39;" direction="right">Welcome To Our Portal</marquee></h1><br>

<form method="post" action="abc.php">
<b><center><input style="text-align:center;" class="source" type="text" name="source" placeholder="Enter your source"></center></b>
<b><center><input style="text-align:center;" class="destination" type="text" name="destination" placeholder="Enter your destination"></center></b>
<center><button class="button1" name="search" type="submit">Search <span class="glyphicon glyphicon-search"></span></button></center>
</form>
</div>
<div class="slideshow-container">
<div class="mySlides fade"> 
  <img src="https://s-media-cache-ak0.pinimg.com/originals/e5/bd/fa/e5bdfa7347fe1299cd0e4b03dcaebe6c.jpg" style="width:1420px;height:250px;">  
</div>
<div class="mySlides fade">  
  <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Chennai_Egmore_facade_panorama.jpg" style="width:1420px;height:250px;">  
</div>
<div class="mySlides fade">  
  <img src="http://trekkerpedia.com/wp-content/uploads/Panoramic-view-of-Chennai-from-St.-thomas-mount.jpg" style="width:1420px;height:250px;">
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<center><b><footer style="position:absolute; 
    bottom:0px;
    right:39%;
    left:50%;
    margin-left:-150px;
    color:#EEFF41;" >&copy Copy Rights Reserved</footer></b><center> 


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
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 1000); // Change image every 1 seconds
}
</script>
<center><b><footer style="position:absolute; 
    bottom:0px;
    right:39%;
    left:50%;
    margin-left:-150px;
    color:#EEFF41;" >&copy Copy Rights Reserved</footer></b></center> 


</body>
</html>

