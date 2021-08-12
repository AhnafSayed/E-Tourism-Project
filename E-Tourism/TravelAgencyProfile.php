<?php require_once 'Agency_Header.php';
session_start();
if(!isset($_SESSION["loggeduser"])){
  	header("Location: Loginoption.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My profile</title>
</head>
<body>
	<center>

	<table border="1">
		<tr>
			<td>Name:</td>
			<td>Farhan Hassan Jabil</td>
		</tr>
		<tr>
			<td>Worker Id: </td>
			<td>0001</td>
		</tr>
		<tr>
			<td>Username: </td>
			<td>FarhanJabil</td>
		</tr>
		<tr>
			<td>Password: </td>
			<td>135790</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>Farhanhasan295@gmail.com</td>
		</tr>
		<tr>
			<td>Address:</td>
			<td>Uttara,Dhaka</td>
		</tr>
		<tr>
			<td>Phone:</td>
			<td>016*******</td>
		</tr>
		<tr>
			<td>Salary:</td>
			<td>15000 taka</td>
		</tr>
		<tr>
			<td>Joining Date:</td>
			<td>01/07/2021</td>
		</tr>
		
	</table>

</center>

</body>
</html>

<?php require_once 'Agency_Footer.php';?>