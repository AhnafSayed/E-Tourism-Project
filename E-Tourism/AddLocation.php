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
	<form action="" method="post" enctype="multipart/form-data">
	<center>
		<fieldset style="width: 800px; height: 350px;">
		<legend align="center"><h1><b>Add Location</b></h1></legend>
		<table>
			<tr>
				<td>Location</td>

				<td><input type="text" name="location" value="<?php echo $location;?>"><td><span><?php echo $err_location;?></span></td>
			</tr>
			<tr>
				<td>Information</td>
				
				<td><input type="text" name="information" value="<?php echo $information;?>"></td><td><span><?php echo $err_information;?></span></td>
			</tr>
			<tr>
				<td>Picture</td>
			
				<td><input type="file" name="location_pic" value="<?php echo $locationPic;?>"><td><span><?php echo $err_locationPic;?></span></td>
			</tr>
		</table>
		<input type="submit" name="add_location" value="Add">
	</center>
</form>

</body>
</html>