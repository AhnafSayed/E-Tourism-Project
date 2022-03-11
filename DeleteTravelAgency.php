<?php
include 'Admin_Header.php';
require_once 'Controllers/UserController.php';
$Id= $_GET['id'];
if(!isset($_SESSION["loggeduser"])){
	header("Location: AdminLogin.php");
}

?>

<html>
<head>
	<title>E-Tourism</title>
</head>
<body>
	<h5><?php echo $err_db;?></h5>
	<form action="" method="post">
	<center>
		<fieldset style="width: 800px; height: 300px;">
		<legend align="center"><h1 id="b3"><b>Delete Travel Agency</b></h1></legend>
		<h3>Confirm to delete travel agency!</h3><br>
		<input id="b3" type="submit" name="delete_travelagency" value="Confirm">
		<a href="TravelAgencyInformation.php"><input id="b3" type="submit" value="Cancel"></a>

</body>
</html>
<?php include 'Admin_Footer.php';?>