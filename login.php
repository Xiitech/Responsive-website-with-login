<?php
session_start();
//if (isset($_SESSION['username'])) {
//    header("location:../index.php");
//}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <title>Login</title>
	<link href="css/reset.css" rel="stylesheet" media="screen">
	<link href="css/login.css" rel="stylesheet" media="screen">
	
	</head>

<body>
	<div class="login-form-capsule">
	<div class="login-form">
    <form name="form1" >
    <br><h2>Login</h2><br>
    <br><h3 >Please sign in</h3><br>
        <input name="myemail" id="myemail" type="text" placeholder="Email" autofocus>
        <input name="mypassword" id="mypassword" type="password" placeholder="Password">
        <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
        <button name="Submit" id="submit" type="submit">Sign in</button>
		

        <div id="message"></div><br>
    </form>
	</div>
	</div>

    <!-- jQuery -->
    <script src="js/jquery-2.2.4.min.js"></script>

    <!-- The AJAX login script -->
    <script src="js/login.js"></script>
  </body>
  

  
 
</html>
  
  
  
