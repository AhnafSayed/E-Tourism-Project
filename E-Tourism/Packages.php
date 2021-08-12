<?php require_once 'Controllers/PackageController.php';
require_once 'Agency_Header.php';
if(!isset($_SESSION["loggeduser"])){
  	header("Location: Loginoption.php");
  }

$package = getallPackages();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h5><?php echo $err_db;?></h5>
	<form action="" method="post">
	<center>
		<fieldset style="width: 800px; height: 1500px;">
		<legend align="center"><h1><b>Packages</b></h1></legend>
		<table>
			<tr>
				<td>Package Number</td>
				<td>Transport</td>
				<td>Meal(Per Day)</td>
				<td>Price(Per Person)</td>
				<td>Location</td>
				<td>Hotel</td>
				<td>Picture</td>
				<td>Room</td>
			</tr>
			<?php
			$i = 1;
			foreach ($package as $p) {
				echo "<tr>";
				echo "<td>".$p["id"]."</td>";
				echo "<td>".$p["transport"]."</td>";
				echo "<td>".$p["meal"]."</td>";
				echo "<td>".$p["price"]."</td>";
				echo "<td>".$p["location"]."</td>";
				echo "<td>".$p["hotel"]."</td>";
				echo "<td><img width='80px' height='100px' src='".$p["hotelPic"]."'</td>";
				echo "<td>".$p["room"]."</td>";
				echo '<td><a href = "EditPackages.php?id='.$p["id"].'">Update</a></td>';
				echo '<td><a href = "DeletePackage.php?id='.$p["id"].'">Delete</td>';
				echo "</tr>";
            $i++;  
			}

			?>
		</table>
		<a href="AddPackages.php">Add</a>
	</center>
</form>
</body>
</html>

<?php require_once 'Agency_Footer.php';?>