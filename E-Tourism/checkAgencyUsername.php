<?php 
require_once 'Controllers/UserController.php';
$username = $_GET["username"];
$user = checkUsernameTravelAgency($username);

if($user){
	echo "invalid";
} 
else echo "valid";





?>

