<?php include 'Controllers/PackageController.php';
$hotel = getallHotels(); 
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
		<legend align="center"><h1 id="b3"><b>Hotel Information</b></h1></legend>
	    <p><div id="Search"></div></p>
		<table border="2">
			<tr>
				<td>ID</td>
				<td>Hotel</td>
				<td>Hotel Picture</td>
			</tr>
			<?php
			$i = 1;
			foreach ($hotel as $h) {
				echo "<tr>";
				echo "<td>".$h["id"]."</td>";
				echo "<td>".$h["hotel"]."</td>";
				echo "<td><img width='100px' height='100px' src='".$h["hotelPic"]."'</td>";
				echo "</tr>";
            $i++;  
			}
			?>
		</table>
	</center>
</form>
</body>
</html>
<?php include 'Admin_Footer.php';?>