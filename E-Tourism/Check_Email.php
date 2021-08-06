<?php
	include 'Controllers/UserController.php';
	$email = $_GET["email"];
	$email = checkEmail($email);
	if($email){
		echo "invalid";
	}
	else echo "valid";

?>