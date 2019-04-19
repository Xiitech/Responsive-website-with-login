<!-- Author: Mateja Radojicic - Test example for internship -->

<?php
//Remove this php part of code if you wanna fast preview without login
session_start();
if (!isset($_SESSION['email'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

	<head>
    <meta charset="utf-8">
    <title>Login</title>

	<link href="css/reset.css" rel="stylesheet" media="screen">
	<link href="css/index.css" rel="stylesheet" media="screen">	
	

</head>
<body>
	<div class="navbar-capsule">
		<div class="logoDiv">
			<div class="logo-capsule"><a href="#" class="logoAtag">Alpha</a> by HTML5 UP</div>
		</div>
		<div class="buttonDiv">	
			<div class="buttons-capsule">
				<button class="navbar-button leftEdge">Home</button><button class="navbar-button">Layaouts</button><button class="navbar-button rightEdge">Sign Up</button>	
			</div>
		</div>
	</div>
	<div class="wallpaper"></div>
	<div class="back1">
		<div class="back1Inside">
			<p class="back1H2">
			Alpha
			</p>
			<p class="back1H5">
			Another fine responsive site template freebie by HTML5 UP.
			</p>
			<button class="back1Button1" onclick="#">Sign up</button>
			<button class="back1Button2" onclick="#" >Learn More</button>
		</div>
	</div>
	<div class="back2">
		<p style="text-align:center;" class="back2Text">Introducing the ultimate mobile app for doing stuff with your phone </p>
		<p style="text-align:center;" class="back2TextSmall">Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc ornare adipiscing nunc adipiscing. Condimentum turpis massa.</p>
		<a onclick="changeImage();"><img alt="wallpaper" src="images/prva.jpg" id="back2Image" class="back2Image"></a>
	</div>
<div class="back3">
	<div class="back3Margin marginFirst">
		<div class="back3Div marginFirstRight">
		<div class="pasus" >
			<img  style="text-align:center;" src="images/home.png" alt="Dribbble"  height="70" width="70" class="pasusImage"><br>
			<p class="pasusTittle">Magna Etiam</p>
			<p class="pasusText">Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.
			</p>
		</div>	
		</div>
		<div class="back3Div">
		<div class="pasus" >
			<img  style="text-align:center;" src="images/home.png" alt="Dribbble" height="70" width="70" class="pasusImage"><br>
			<p class="pasusTittle">Ispum dolor</p>
			<p class="pasusText">Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.
			</p>
		</div>	
		</div>
	</div>
	<div class="back3Margin">
		<div class="back3Div marginFirstRight">
		<div class="pasus" >
			<img  style="text-align:center;" src="images/home.png" alt="Dribbble"  height="70" width="70" class="pasusImage"><br>
			<p class="pasusTittle">Sed feugiat</p>
			<p class="pasusText">Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.
			</p>
		</div>	
		</div>
		<div class="back3Div">
		<div class="pasus" >
			<img  style="text-align:center;" src="images/home.png" alt="Dribbble" height="70" width="70" class="pasusImage"><br>
			<p class="pasusTittle">Ispum dolor</p>
			<p class="pasusText">Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.
			</p>
		</div>	
		</div>
	</div>
</div>
<div class="back4">
	<div class="back4LeftDiv">
		<img alt="zgrade" src="images/druga.jpg" class="back4Image1">
		<p class="back4Tittle">Sed lorem adipiscing</p>
		<p class="back4Text">Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.
        </p>
		<button class="back4Button trigger1" onclick="#">Learn More</button>
	</div>
	<div class="back4RightDiv">
	   <img alt="zgrade" src="images/treca.jpg" class="back4Image2">
			<p class="back4Tittle">Accumsan integer</p>
		<p class="back4Text">Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.
        </p>
		<button class="back4Button trigger2" onclick="#">Learn More</button>
	</div>
</div>

<div class="modal">
    <div class="modal-content">
        <span class="close-button">×</span>
        <h1>Modal box is open, scroll disabled. <br> Click close button to enable scroll again.</h1>
    </div>
</div>

<div class="footer">
	<a href="#" ><img src="images/icon1.png" alt="Dribbble" height="30" width="30" class="footerIcons"></a>
	<a href="#" ><img src="images/icon2.png" alt="Twitter" height="30" width="30" class="footerIcons"></a>
	<a href="#" ><img src="images/icon3.png" alt="Vimeo" height="30" width="30" class="footerIcons"></a>
	<a href="#" ><img src="images/icon4.png" alt="Wordpress" height="30" width="30" class="footerIcons"></a>
	<a href="#" ><img src="images/icon5.png" alt="Pinteres" height="30" width="30" class="footerIcons"></a>
	<a href="#" ><img src="images/icon6.png" alt="Skype" height="30" width="30" class="footerIcons"></a>
	<p style="text-align:center;" class="footerText">&copy; Untitled. All rights reserved. Design: <a href="#" class="logoAtag">HTML5 UP</a> </p> 
</div>
<script src="js/index.js"></script>
</body>
</html>

