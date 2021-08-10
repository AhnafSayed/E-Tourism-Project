<?php
	include 'controllers/UserController.php';
	$clientkey = $_GET["clientkey"];
	$client1 = searchClient($clientkey);
	
	if(count($client1)> 0){
		foreach($client1 as $c){
			echo "<a href='UpdateClient.php?id=".$c["id"]."'>".$c["name"]."</a><br>";
		}
	}
?>