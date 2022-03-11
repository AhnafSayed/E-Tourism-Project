<?php
require_once 'Agency_Header.php';
session_start();
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
	<form action="" method="post">
	<center>
		<fieldset style="width: 800px; height: 300px;">
		<legend align="center"><h1><b>Booking Request</b></h1></legend>
		<table border="2">
			<tr>
				<td>Client ID</td>
				<td>Requested</td>
			</tr>
			<input type="Submit" value="Confirm">
		<input type="Submit" value="Decline">
		</table>
	</center>
</form>
</body>
</html>