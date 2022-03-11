<?php
	include 'Controllers/UserController.php';
	$email = $_GET["email"];
	$email1 = checkEmailTravelAgency($email);
	if($email1){
		echo "invalid";
	}
	else echo "valid";

?>