<?php 
	if(!isset($_COOKIE["loggeduser"])){
		header("Location: Loginoption.php");
	}
?>
<html>
	<head>
	</head>
	<style>
	     #b1{
	       background-color:green;
		   color:orange;
		   align:center;
	      }
		 #b2{
			 background-color:blue;
			 color:orange;
			 align:center;
		    }
		 #b3{
			 color:orange;
			 background-color:black;
		    }
	</style>
	<body>
	    <center>
		<h1><b id="b3">Travel Agency Dashboard</b></h1>
		<img height="100px" width="100px" src="Storage/Header_image/Travel Agency.png" align="left"></a>
		<table align="right" border="1"> 	
			<tr>
			<td align="center">
			<a href="Home.php"><input type="Submit" id="b3" value="Home"></a>
			<a href="TravelAgencyProfile.php"><input type="Submit" id="b3" value="Profile"></a>
		<form action="logout.php" method="post">
			<input type="Submit" id="b3" name="logout_btn" value="Logout">
		</form>
            </td>
            </tr>			
        </table>			
		</div>
		</div>