<?php
	include 'controllers/UserController.php';
	$packagekey = $_GET["packagekey"];
	$package1 = searchPackages($packagekey);
	
	if(count($package1)> 0){
		foreach($package1 as $p){
			echo "<a href='EditPackages.php?id=".$p["id"]."'>".$p["location"]."</a><br>";
		}
	}
?>