<?php include 'Admin_Header.php';
    session_start();
	if(!isset($_SESSION["loggeduser"])){
		header("Location: AdminLogin.php");
	}
?>
<html>
<head>
	<title>E-Tourism</title>
</head>
<body>
	<center>
	
	<p align="left"><a href="Profile.php">Profile</a></p><br>
		<p id="b2"> Welcome <?php echo $_SESSION["loggeduser"];?></p><br><br><br>
		<a href="ClientInformation.php"><input type="Submit" value="Client Information"></a><br><br><br>
		<a href="TravelAgencyInformation.php"><input type="Submit" value="Travel Agency Information"></a><br><br><br>

</fieldset>
</center>
</body>
</html>
<?php include 'Admin_Footer.php';?>