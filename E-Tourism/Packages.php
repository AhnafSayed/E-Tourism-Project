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
		<p><input type="text" placeholder="🔎Search for Packages!" onkeyup="searchPackages(this)"></p>
	    <p><div id="Search"></div></p>
		<table border="2">
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
				echo '<td><button><a id="b1" href = "EditPackages.php?id='.$p["id"].'">Update</a></button></td>';
				echo '<td><button><a id="b1" href = "DeletePackage.php?id='.$p["id"].'">Delete</button></td>';
				echo "</tr>";
            $i++;  
			}

			?>
		</table>
		<button><a id="b1" href="AddPackages.php">Add</a></button>
	</center>
</form>
</body>
<script src="JavaScript/packages.js"></script>
</html>

<?php require_once 'Agency_Footer.php';?>