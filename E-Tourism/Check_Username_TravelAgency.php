<?php
	include 'Controllers/UserController.php';
	$username = $_GET["username"];
	$username1 = checkUsernameTravelAgency($username);
	if($username1){
		echo "invalid";
	}
	else echo "valid";

?>