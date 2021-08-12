<?php include 'Controllers/UserController.php';
$travelagency = getallTravelAgencies(); 
include 'Admin_Header.php';
if(!isset($_SESSION["loggeduser"])){
		header("Location: AdminLogin.php");
	}	 

?>
<html>
<head>
	<title>E-Tourism</title>
</head>
<body>
	<form action="" method="post">
	<center>
		<fieldset style="width: 1000px; height: 800px;">
		<legend align="center"><h1 id="b3"><b>Travel Agency Information</b></h1></legend>
		<p><input type="text" placeholder="🔎Search for Travel Agency!" size="23" onkeyup="searchTravelAgency(this)"></p>
	    <p><div id="Search"></div></p>
		<table border="2">
			<tr>
				<td>ID</td>
				<td>Username</td>
				<td>Password</td>
				<td>Travel Agency Name</td>
				<td>Email</td>
				<td>Phone</td>
				<td>ETIN</td>
			</tr>
			<?php
			$i = 1;
			foreach ($travelagency as $t) {
				echo "<tr>";
				echo "<td>".$t["Id"]."</td>";
				echo "<td>".$t["Username"]."</td>";
				echo "<td>".$t["Password"]."</td>";
				echo "<td>".$t["Name"]."</td>";
				echo "<td>".$t["Email"]."</td>";
				echo "<td>".$t["Phone"]."</td>";
				echo "<td>".$t["ETIN"]."</td>";
				echo '<td><a href="UpdateTravelAgency.php?id='.$t["Id"].'"><input id="b3" type="Submit" value="Update"></a></td>';
				echo '<td><a href = "DeleteTravelAgency.php?id='.$t["Id"].'"><input id="b3" type="Submit" value="Delete"></a></td>';
				/*echo '<td><a href = "EditClients.php?Id='.$t["Id"].'"><input type="Submit" value="Update"></a></td>';
				/*echo '<td><a href = "DeleteClient.php?id='.$t["Id"].'" <input type="Submit" value="Delete"></a></td>';*/
				echo "</tr>";
            $i++;  
			}


			?>
		</table>
		<p><a href="AddTravelAgency.php"><input id="b3" type="Submit" value="Add Travel Agency"></a></p>
	</center>
</form>
</body>
</html>
<script src="JavaScript/SearchTravelAgency.js"></script>
<?php include 'Admin_Footer.php';?>