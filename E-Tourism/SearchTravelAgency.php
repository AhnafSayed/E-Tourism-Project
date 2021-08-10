<?php
	include 'controllers/UserController.php';
	$travelagencykey = $_GET["travelagencykey"];
	$travelagency1 = searchTravelAgency($travelagencykey);
	
	if(count($travelagency1)> 0){
		foreach($travelagency1 as $t){
			echo "<a href='UpdateTravelAgency.php?id=".$t["id"]."'>".$t["name"]."</a><br>";
		}
	}
?>