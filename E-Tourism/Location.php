<?php require_once 'Controllers/LocationController.php';
 require_once 'Agency_Header.php';
 if(!isset($_SESSION["loggeduser"])){
  	header("Location: Loginoption.php");
  }
$location = getallLocation(); 
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
		<legend align="center"><h1><b>Locations</b></h1></legend>
		<p><input type="text" placeholder="🔎Search for Location!" onkeyup="searchLocation(this)"></p>
	    <p><div id="Search"></div></p>
		<table border="2">
			<tr>
				<td>Location</td>
				<td>Information</td>
				<td>Picture</td>
			</tr>

			<?php
			$i = 1;
			foreach ($location as $l) {
				echo "<tr>"; 
				echo "<td>".$l["location"]."</td>";
				echo "<td>".$l["information"]."</td>";
				echo "<td><img width='80px' height='100px' src='".$l["locationPic"]."'</td>";
				echo '<td><button><a id="b1" href = "Editlocation.php?id='.$l["id"].'">Update</a></button></td>';
				echo '<td><button><a id="b1" href = "Deletelocation.php?id='.$l["id"].'">Delete</a></button></td>';
				echo "</tr>";
            $i++;  
			}

			?>



		</table>
		<button><a id="b1" href="AddLocation.php">Add</a></button>
	</center>
</form>
</body>
<script src="JavaScript/location.js"></script>
</html>


<?php require_once 'Agency_Footer.php';?>