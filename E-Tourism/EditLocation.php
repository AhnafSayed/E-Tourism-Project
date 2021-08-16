<?php require_once 'Controllers/LocationController.php';
require_once 'Agency_Header.php';
if(!isset($_SESSION["loggeduser"])){
  	header("Location: Loginoption.php");
  }
  $id = $_GET['id'];
  $l = getLocation($id)


 ?>


<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h5><?php echo $err_db;?></h5>
	<form action="" onsubmit="return validate()" method="post" enctype="multipart/form-data">
	<center>
		<fieldset style="width: 800px; height: 350px;">
		<legend align="center"><h1><b>Edit Location</b></h1></legend>
		<table>
			<tr>
				<input type="hidden" name="id" value="<?php echo $l["id"];?>">
				<td>Location</td>
				<td><input id="location" type="text" name="location" value="<?php echo $l["location"];?>"></td>
				<td><span id="err_location"><?php echo $err_location;?></span></td>
			</tr>
			<tr>
				<td>Information</td>
				<td><input id="information" type="text" name="information" value="<?php echo $l["information"];?>"></td>
				<td><span id="err_information"><?php echo $err_information;?></span></td>
			</tr>
			<tr>
				<td>Location Picture</td>
				<td><input type="file" name="location_pic" value="<?php echo $l["locationPic"];?>"><td><span><?php echo $err_locationPic;?></span></td>
			</tr>
		</table>
		<input type="submit" name="edit_location" value="Update">
	</center>
</form>
<script src="JavaScript/location.js"></script>
</body>
</html>

<?php require_once 'agency_footer.php';?>