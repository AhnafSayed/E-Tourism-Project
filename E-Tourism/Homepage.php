<?php require_once 'Controllers/UserController.php';
require_once'main_header.php';

$agency = getallTravelAgencies();

 ?>

<html>
<head></head>
	<body>
		<center>
		<form action="" method="post">
			<h1>Our Agencies</h1>
			<p align="right"><a id="b3" href="About us.php">About us</a></p>
		<table border="2">
			<tr>
				<td>Travel Agency</td>
				<td>Email</td>
				<td>Phone</td>
			</tr>

			<?php
			$i = 1;
			foreach ($agency as $a) {
				echo "<tr>"; 
				echo "<td>".$a["Name"]."</td>";
				echo "<td>".$a["Email"]."</td>";
				echo "<td>".$a["Phone"]."</td>";
				echo "</tr>";
            $i++;  
			}

			?>
		</table>
		<h5><?php echo $err_db;?></h5>
		</form>
		</center>
		</body>
		</html>
<?php require_once'main_footer.php';
?>