<?php include 'Controllers/UserController.php';
$admin = getallAdminInfo(); 
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
		<legend align="center"><h1 id="b3"><b>Profile</b></h1></legend>
		<table border="2">
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Username</td>
				<td>Password</td>
				<td>Email</td>
				<td>Phone</td>
				<td>Address</td>
			</tr>
			<?php
			$i = 1;
			foreach ($admin as $a) {
				echo "<tr>";
				echo "<td>".$a["Id"]."</td>";
				echo "<td>".$a["Name"]."</td>";
				echo "<td>".$a["Username"]."</td>";
				echo "<td>".$a["Password"]."</td>";
				echo "<td>".$a["Email"]."</td>";
				echo "<td>".$a["Phone"]."</td>";
				echo "<td>".$a["Address"]."</td>";
				echo '<td><a href="UpdateAdminProfile.php?id='.$a["Id"].'"><input id="b3" type="Submit" value="Update"></a></td>';
				/*echo '<td><a href = "EditClients.php?Id='.$t["Id"].'"><input type="Submit" value="Update"></a></td>';
				/*echo '<td><a href = "DeleteClient.php?id='.$t["Id"].'" <input type="Submit" value="Delete"></a></td>';*/
				echo "</tr>";
            $i++;  
			}
			?>
		</table>
		<p><a href="AdminAccount.php"><input id="b3" type="Submit" value="Back"></a></p>
	</center>
</form>
</body>
</html>
<?php include 'Admin_Footer.php';?>