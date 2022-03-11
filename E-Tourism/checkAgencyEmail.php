<?php 
require_once 'Controllers/UserController.php';

$email = $_GET["email"];
$email = checkEmailTravelAgency($email);

if($email){
	echo "invalid";
} 
else echo "valid";


?>

