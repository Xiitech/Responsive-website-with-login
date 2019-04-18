<?php
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
	</head>

<body>
<div class="wallpaper"></div>
<div class="back1">
<p class="back1Inside">
123
</p>
</div>
<div class="back2">123</div>


</body>
</html>

