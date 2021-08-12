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
	<fieldset style="width: 400px" "height: 600px">
		<p align="left"> Welcome, <b><?php echo $_SESSION["loggeduser"];?></b></p><br><br><br>
		<a href="Packages.php">Package Information</a><br><br>
		<a href="Client.php">Client Information</a><br><br>
		<a href="booking_rqst.php">Booking Requests</a><br><br>
		<a href="Location.php">Locations</a><br><br>

</fieldset>
</center>
</form>
</body>
</html>

<?php require_once 'Agency_Footer.php';?>


