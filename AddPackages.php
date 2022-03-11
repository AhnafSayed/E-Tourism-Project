<?php require_once 'Controllers/PackageController.php';
require_once 'Agency_header.php';
if(!isset($_SESSION["loggeduser"])){
  	header("Location: Loginoption.php");
  }
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
		<legend align="center"><h1><b>Add Packages</b></h1></legend>
		<table>
			<tr>
				<td>Transport</td>
				<td><input id="transport" type="text" name="transport" value="<?php echo $transport;?>"></td>
				<td><span id="err_transport"><?php echo $err_transport;?></span></td>
			</tr>
			<tr>
				<td>Meal</td>
				
				<td><input id="meal" type="text" name="meal" value="<?php echo $meal;?>"></td>
				<td><span id="err_meal"><?php echo $err_meal;?></span></td>
			</tr>
			<tr>
				<td>Price</td>
				
				<td><input id="price" type="text" name="price" value="<?php echo $price;?>"></td>
				<td><span id="err_price"><?php echo $err_price;?></span></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input id="location" type="text" name="location" value="<?php echo $location;?>"></td>
				<td><span id="err_location"><?php echo $err_location;?></span></td>
			</tr>
			<tr>
				<td>Hotel</td>
				<td><input id="hotel" type="text" name="hotel" value="<?php echo $hotel;?>"></td>
				<td><span id="err_hotel"><?php echo $err_hotel;?></span></td>
			</tr>
			<tr>
				<td>Picture</td>
				
				<td><input type="file" name="hotel_pic" value="<?php echo $hotelPic;?>"><td><span><?php echo $err_hotelPic;?></span></td>
			</tr>
			<tr>
				<td>Room</td>
				<td><input id="room" type="text" name="hotel_room" value="<?php echo $room;?>"></td>
				<td><span id="err_room"><?php echo $err_room;?></span></td>
			</tr>
		</table>
		<input type="submit" name="add_package" value="Add">
	</center>
</form>
<script src="JavaScript/packages.js"></script>
</body>
</html>

<?php require_once 'agency_footer.php';?>