<?php
	include 'Controllers/UserController.php';
	$email = $_GET["email"];
	$email1 = checkEmailClient($email);
	if($email1){
		echo "invalid";
	}
	else echo "valid";

?>