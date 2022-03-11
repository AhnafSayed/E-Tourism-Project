<?php
	include 'controllers/UserController.php';
	$locationkey = $_GET["locationkey"];
	$location1 = searchLocation($locationkey);
	
	if(count($location1)> 0){
		foreach($location1 as $l){
			echo "<a href='EditLocation.php?id=".$l["id"]."'>".$l["location"]."</a><br>";
		}
	}
?>