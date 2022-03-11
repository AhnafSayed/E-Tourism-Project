<?php
require_once 'Controllers/LocationController.php';
require_once 'Agency_Header.php';
$id= $_GET['id'];
if(!isset($_SESSION["loggeduser"])){
  	header("Location: Loginoption.php");
  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h5><?php echo $err_db;?></h5>
	<form action="" method="post">
	<center>
		<fieldset style="width: 800px; height: 300px;">
		<legend align="center"><h1><b>Delete Location</b></h1></legend>
		<h3>Confirm for delete</h3><br>
		<input type="submit" name="delete_location" value="Confirm">
		<a href="Packages.php">Cancel</a>

</body>
</html>