<?php
	include 'Controllers/UserController.php';
	$etin = $_GET["etin"];
	$etin1 = checkETINTravelAgency($etin);
	if($etin1){
		echo "invalid";
	}
	else echo "valid";

?>