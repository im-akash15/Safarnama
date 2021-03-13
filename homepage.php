<!DOCTYPE html>
<html>
<title>Safarnama</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="awfont.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
<div class="w3-bar w3-black w3-card">
<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
<a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
<a href="VC.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CARS</a>
<a href="sign_up.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SIGNUP</a>
<div class="w3-dropdown-hover w3-hide-small">
<button class="w3-padding-large w3-button" title="Login">LOGIN<i class="fa fa-caret-down"></i></button>     
<div class="w3-dropdown-content w3-bar-block w3-card-4">
<a href="userloginphp.php" class="w3-bar-item w3-button">User Login</a>
        <a href="adminlogin.php" class="w3-bar-item w3-button">Admin Login</a>
      </div>
    </div>
<a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
</div>
<a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
</div>
</div>


<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

<!-- Automatic Slideshow Images -->
<div class="img">
<img src="car-wallpapers-31955-9961869.jpg" style="width:100%">
<div class="w3-display-bottomleft w3-container w3-text-white w3-padding-32 w3-hide-small">
<h1><b>Safarnama</b></h1>
<h5><i>"Suru Tumse Khatam Tumpe Yeh Hamara Safarnama!"</i></h5> 
</div>
</div>

<!-- The Band Section -->
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
<h2 class="w3-wide">SAFARNAMA</h2>
<p class="w3-opacity"><i>Travel!! Before You Run Out Of Time .</i></p>
<p class="w3-justify">We provide the best cab services in India. The safest and comfortable companion for your journey. We have the most skillfull drivers who will charm you with his humour during all journey. The drivers are all verified.The Cars are very much luxourious and well maintained. We have a wide range of cars to choose from. Thank you!! </p>
<div class="w3-row w3-padding-32">
<div class="w3-third">
<p>Honda City</p>
<img src="city.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
</div>
<div class="w3-third">
<p>Audi</p>
<img src="audi.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
</div>
<div class="w3-third">
<p>Toyota Fortuner</p>
<img src="a1f515e8a0212d5ceb77d417a6364931.jpg" class="w3-round" alt="Random Name" style="width:60%">
</div>
</div>
</div>

<!-- The Tour Section -->
<div class="w3-black" id="tour">
<div class="w3-container w3-content w3-padding-64" style="max-width:800px">
<h2 class="w3-wide w3-center">EXPLORE</h2>
<p class="w3-opacity w3-center"><i>Explore these cities with us!</i></p><br>

<ul class="w3-ul w3-border w3-white w3-text-grey">
<li class="w3-padding">KOLKATA <span class="w3-tag w3-red w3-margin-left">Available</span></li>
<li class="w3-padding">DELHI <span class="w3-tag w3-red w3-margin-left">  Available</span></li>
<li class="w3-padding">MUMBAI <span class="w3-tag w3-red w3-margin-left"> Available</span></li>
<li class="w3-padding">PATNA <span class="w3-tag w3-red w3-margin-left">  Available</span></li>
<li class="w3-padding">RANCHI <span class="w3-tag w3-red w3-margin-left"> Available</span></li>
</ul>

<div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
<div class="w3-third w3-margin-bottom">
<img src="69658087-delhi-wallpapers.jpg" alt="dilli" style="width:100%" class="w3-hover-opacity">
<div class="w3-container w3-white">
<p><b>Delhi</b></p>
</div>
</div>
<div class="w3-third w3-margin-bottom">
<img src="Victoria-Memorial-Kolkata.jpg" alt="kolkata" style="width:100%" class="w3-hover-opacity">
<div class="w3-container w3-white">
<p><b>Kolkata</b></p>
</div>
</div>
<div class="w3-third w3-margin-bottom">
<img src="gateway_of_india_mumbai-t3.jpg" alt="mumbai" style="width:100%" class="w3-hover-opacity">
<div class="w3-container w3-white">
<p><b>Mumbai</b></p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- The Contact Section -->
<div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
<h2 class="w3-wide w3-center">CONTACT</h2>
<p class="w3-opacity w3-center"><i>Have a Query? Ask Us</i></p>
<div class="w3-row w3-padding-32">
<div class="w3-col m6 w3-large w3-margin-bottom">
<i class="fa fa-map-marker" style="width:30px"></i> Kolkata, WB<br>
<i class="fa fa-phone" style="width:30px"></i> Phone: +91 1515151515<br>
<i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
</div>
<div class="w3-col m6">
<form action="contactus.php" method="post">
<div class="w3-row-padding" style="margin:0 -16px 8px -16px">
<div class="w3-half">
<input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
</div>
<div class="w3-half">
<input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
</div>
</div>
<input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
<button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
</form>
</div>
</div>
</div>

<!-- End Page Content -->
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
<p class="w3-medium">Created by Akash</a></p>
</footer>

</body>
</html>

