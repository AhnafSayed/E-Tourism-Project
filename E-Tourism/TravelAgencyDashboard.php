<?php require_once 'Controllers/UserController.php';
require_once 'Agency_Header.php';
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
	<fieldset style="width: 400px" "height: 700px">
		<p align="left"> Welcome, <b><?php echo $_SESSION["loggeduser"];?></b></p><br><br><br>
		<table>
		<tr align="center">
		<td><button><a href="Packages.php" id="b2">Package Information</a></button></td>
	</tr>
	<tr align="center">
		<td><button><a href="Location.php" id="b2">Locations</a></button></td>
	</tr>
	<tr align="center">
		<td><button><a href="ClientInformationforAgency.php" id="b2">Client Information</a></button></td>
	</tr>
	<tr align="center">
		<td><button><a href="booking_rqst.php" id="b2">Booking Requests</a></button></td>
	</tr>
	<!--<tr align="center">
		<td><button><a href="TravelAgencyProfile.php" id="b2">Profile</a></button></td>
	</tr>-->

	</table>

</fieldset>
</center>
</form>
</body>
</html>

<?php require_once 'Agency_Footer.php';?>


