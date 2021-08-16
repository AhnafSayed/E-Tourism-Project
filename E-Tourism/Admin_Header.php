<?php 
	if(!isset($_COOKIE["loggeduser1"])){
		header("Location: AdminLogin.php");
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
		body{
             background-image: url('Storage/Header_image/Keokradong.jpg');
             background-repeat: no-repeat;
             background-attachment: fixed;
             background-size: 100% 100%;
            }
	</style>
	<body>
	    <center>
	    <fieldset style="width: 1000px; height: 1100px;">
		<legend align="center"><h1><b id="b3">Admin Dashboard</b></h1></legend>
		<img height="100px" width="100px" src="Storage/Header_image/Travel Agency.png" align="left"></a>
		<h1><b align="center" id="b1">E-Tourism</b></h1><h1><b align="center" id="b2">Your Tour Specialist</b></h1>
		<table align="center" border="1"> 	
			<tr>
			<td align="center">
			<a href="ClientInformation.php" align="center"><input type="Submit" id="b3" value="Client Information"></a>
			<a href="TravelAgencyInformation.php"><input type="Submit" id="b3" value="Travel Agency Information"></a>
			<a href="HotelInformation.php"><input type="Submit" id="b3" value="Hotel Information"></a>
			<a href="Admin_Account.php"><input type="Submit" id="b3" value="Admin Dashboard"></a>
			<a href="AddClient.php"><input type="Submit" id="b3" value="Add Client"></a>
			<a href="AddTravelAgency.php"><input type="Submit" id="b3" value="Add Travel Agency"></a>
			<form action="AdminLogout.php" method="post">	
			<input id="b3" type="Submit" name="Admin_Logout" value="Logout">
		    </form>		
            </td>
            </tr>		
        </table>			
		</div>
		</div>