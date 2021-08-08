<?php
    session_start();
	if(!isset($_SESSION["loggeduser"])){
		header("Location: Login.php");
	}
?>
<html>
<head>
	<title>E-Tourism</title>
</head>
<body>
	<center>
	<fieldset style="width: 350px" "height: 350px">
		<legend style="color:gray;" align="center"><h1><b>Admin Dashboard</b></h1></legend>
	<p align="left"><a href="Profile.php">Profile</a></p><br>
		<p> Welcome <?php echo $_SESSION["loggeduser"];?></p><br><br><br>
		<a href="ClientInformation.php"><input type="Submit" value="Client Information"></a><br><br><br>
		<a href="TravelAgencyInformation.php"><input type="Submit" value="Travel Agency Information"></a><br><br><br>
		<p align="right"><a href="Login.php"><input type="Submit" value="Logout"></a></p>

</fieldset>
</center>
</body>
</html>