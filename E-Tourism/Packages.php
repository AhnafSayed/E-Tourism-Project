<?php include 'Controllers/PackageController.php';
$package = getallPackages(); 

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
		<fieldset style="width: 800px; height: 500px;">
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
				echo "<td>".$p["hotelPic"]."</td>";
				echo "<td>".$p["room"]."</td>";
				echo '<td><a href = "EditPackages.php?id='.$p["id"].'" class="btn btn-success">Edit</a></td>';
				echo '<td><class="btn btn-danger">Delete</a></td>';
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