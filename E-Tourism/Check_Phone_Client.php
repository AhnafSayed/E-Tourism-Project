<?php
	include 'Controllers/UserController.php';
	$phone = $_GET["phone"];
	$phone1 = checkPhoneClient($phone);
	if($phone1){
		echo "invalid";
	}
	else echo "valid";

?>