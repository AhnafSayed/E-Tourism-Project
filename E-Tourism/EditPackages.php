<?php include 'Controllers/PackageController.php';
   $id = $_GET["id"];
   $p = getPackage($id)

 ?>


<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h5><?php echo $err_db;?></h5>
	<form action="" method="post">
	<center>
		<fieldset style="width: 800px; height: 350px;">
		<legend align="center"><h1><b>Edit Packages</b></h1></legend>
		<span align= 'right'><a href="Packages.php">Packages</a></span>
		<table>
			<tr>
				<td>Transport</td>
				<input type="hidden" name="id" value="<?php echo $p["id"];?>">
				<td><input type="text" name="transport" value="<?php echo $p["transport"];?>"><td><span><?php echo $err_transport;?></span></td>
			</tr>
			<tr>
				<td>Meal</td>
				
				<td><input type="text" name="meal" value="<?php echo $p["meal"];?>"><td><span><?php echo $err_meal;?></span></td>
			</tr>
			<tr>
				<td>Price</td>
				
				<td><input type="text" name="price" value="<?php echo $p["price"];?>"><td><span><?php echo $err_price;?></span></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="location" value="<?php echo $p["location"];?>"><td><span><?php echo $err_location;?></span></td>
			</tr>
			<tr>
				<td>Hotel</td>
				<td><input type="text" name="hotel" value="<?php echo $p["hotel"];?>"><td><span><?php echo $err_hotel;?></span></td>
			</tr>
			<tr>
				<td>Picture</td>
				
				<td><input type="text" name="hotel_pic" value="<?php echo $p["hotelPic"];?>"><td><span><?php echo $err_hotelPic;?></span></td>
			</tr>
			<tr>
				<td>Room</td>
				<td><input type="text" name="hotel_room" value="<?php echo $p["room"];?>"><td><span><?php echo $err_room;?></span></td>
			</tr>
		</table>
		<input type="submit" name="edit_package" value="Edit">
	</center>
</form>
</body>
</html>