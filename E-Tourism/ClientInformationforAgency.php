<?php include 'Controllers/UserController.php';
$client = getallClients(); 
include 'Agency_Header.php';
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
		<legend align="center"><h1 id="b3"><b>Client Information</b></h1></legend>
		<p><input type="text" placeholder="🔎Search for Client!" onkeyup="searchClient(this)"></p>
	    <p><div id="Search"></div></p>
		<table border="2">
			<tr>
				<td>ID</td>
				<td>Username</td>
				<td>Name</td>
				<td>Gender</td>
				<td>Day</td>
				<td>Month</td>
				<td>Year</td>
				<td>Email</td>
				<td>City</td>
				<td>State</td>
				<td>Phone</td>
			</tr>
			<?php
			$i = 1;
			foreach ($client as $c) {
				echo "<tr>";
				echo "<td>".$c["Id"]."</td>";
				echo "<td>".$c["Username"]."</td>";
				echo "<td>".$c["Name"]."</td>";
				echo "<td>".$c["Gender"]."</td>";
				echo "<td>".$c["Day"]."</td>";
				echo "<td>".$c["Month"]."</td>";
				echo "<td>".$c["Year"]."</td>";
				echo "<td>".$c["Email"]."</td>";
				echo "<td>".$c["City"]."</td>";
				echo "<td>".$c["State"]."</td>";
				echo "<td>".$c["Phone"]."</td>";
				
				echo "</tr>";
            $i++;  
			}


			?>
		</table>
	</center>
</form>
</body>
</html>
<script src="JavaScript/SearchClient.js"></script>
<?php include 'Agency_Footer.php';?>