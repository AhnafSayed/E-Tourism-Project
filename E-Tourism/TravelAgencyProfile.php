<?php 
require_once	'Models/db_config.php';
require_once 'Agency_Header.php';
session_start();
if(!isset($_SESSION["loggeduser"])){
  	header("Location: Loginoption.php");
  }
  /*$id = $_GET['id'];
  $query = "select * from travel_agency where id = '$id'";
  $result = get($query);*/



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E-Tourism</title>
</head>
<body>
	<center>

	<table border="2">
  <tr>
 <td>ID</td>
 <td>NAME</td>
<td>USERNAME</td>
<td>Email</td>
<td>PHONE NUMBER</td>
<td>ETIN NUMBER</td>

</tr>

<tr>
 <td>01</td>
 <td>ABC TRAVELS</td>
<td>abctra001</td>
<td>abctravel07@hotmial.com</td>
<td>1641991515</td>
<td>123456</td>

</tr>


<!--<?php
			$i = 1;
			foreach ($result as $r) {
				echo "<tr>"; 
				echo "<td>".$r["id"]."</td>";
				echo "<td>".$r["name"]."</td>";
				echo "<td>".$r["username"]."</td>";
				echo "<td>".$r["email"]."</td>";
				echo "<td>".$r["phone"]."</td>";
				echo "<td>".$r["etin"]."</td>";
            $i++;  
			}

			?>-->
		
	</table>

</center>

</body>
</html>

<?php require_once 'Agency_Footer.php';?>