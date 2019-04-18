<?php


require ('database-connection.php');

// Define $myusername and $mypassword
$email = $_POST['myemail'];
$password = $_POST['mypassword'];

// To protect MySQL injection
$email = stripslashes($email);
$password = stripslashes($password);

$query = "SELECT * FROM USERS WHERE USERS.Mail = '$email' ";
$result = mysqli_query($bp, $query);
if (!$result)die(json_encode(mysqli_error($bp)));
$result = mysqli_fetch_object($result);
$hashPass = hash('sha256', $_POST['mypassword']);

if (!is_object($result)){
	echo json_encode("wrong Email");
}else{
	if (($result->Password)==$hashPass){
		session_start();	
		$_SESSION["email"] = ($result->Mail);	
		echo json_encode("accept");	
	}else{
		echo json_encode("wrong Password");
	}
}



