<?php include 'Controllers/LocationController.php';
require_once 'Agency_Header.php';
 ?>

<!DOCTYPE html>
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
		<legend align="center"><h1><b>Add Location</b></h1></legend>
		<table>
			<tr>
				<td>Location</td>
				<td><input id="location" type="text" name="location" value="<?php echo $location;?>"></td>
				<td><span id="err_location"><?php echo $err_location;?></span></td>
			</tr>
			<tr>
				<td>Information</td>
				
				<td><input id="information" type="text" name="information" value="<?php echo $information;?>"></td>
				<td><span id="err_information"><?php echo $err_information;?></span></td>
			</tr>
			<tr>
				<td>Picture</td>
			
				<td><input id="locationPic" type="file" name="location_pic" value="<?php echo $locationPic;?>"></td>
				<td><span id="err_locationPic"><?php echo $err_locationPic;?></span></td>
			</tr>
		</table>
		<input type="submit" name="add_location" value="Add">
	</center>
</form>
<script src="JavaScript/location.js"></script>
</body>
</html>

<?php require_once 'agency_footer.php';?>