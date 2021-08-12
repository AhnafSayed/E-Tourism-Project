<?php
require_once 'Agency_Header.php';
session_start();
if(!isset($_SESSION["loggeduser"])){
  	header("Location: Loginoption.php");
  }
?>


<html>
<head>
	</head>
<body>
	<center>
	<fieldset style="width: 800px" "height: 300px">
		<legend style="color:darkred;" align="center"><h1><b>Client</b></h1></legend>
		<table border="2">
			<tr>
				<td>Name: </td>
				<td>Abu Shaker</td>
		</tr>
		<tr>
			<td>Username: </td>
			<td>Abushaker01</td>
		</tr>
		<tr>
			<td>Password: </td>
			<td>abushaker01#</td>
		</tr>
		<tr>
			<td>Email: </td>
			<td>Ashaker01@gmail.com</td>
		</tr>
		<tr>
			<td>Address: </td>
			<td>Uttara,Dhaka</td>
		</tr>
		<tr>
			<td>Phone: </td>
			<td>01676543657</td>
		</tr>
		<tr>
			<td>Credit Card Type: </td>
			<td>Standard</td>
		</tr>
		<tr>
			<td>Credit Card Number: </td>
			<td>(None)</td>
		</tr>
	</table>
	
</fieldset>
</center>
</body>
</html>