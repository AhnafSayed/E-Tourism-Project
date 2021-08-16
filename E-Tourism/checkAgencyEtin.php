<?php 
require_once 'Controllers/UserController.php';

$etin = $_GET["etin"];
$etin = checkETINTravelAgency($etin);

if($etin){
	echo "invalid";
} 
else echo "valid";



?>

