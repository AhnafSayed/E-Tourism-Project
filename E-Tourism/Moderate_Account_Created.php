<html>
<head><h1 align="center">Moderate Account Created!</h1></head>
<body>
	<fieldset style="width: 800px; height: 700px;">
		<legend align="center"><h1><b>Moderate Registration</b></h1></legend>

<?php  
		echo "Username: ".htmlspecialchars($_POST["username"])."<br>";
		echo "Password: ".htmlspecialchars($_POST["password"])."<br>";
		echo "Name: ".htmlspecialchars($_POST["name"])."<br>";
		echo "Email: ".htmlspecialchars($_POST["email"])."<br>";
		echo "Day: ".htmlspecialchars($_POST["day"])."<br>"; 
		echo "Month: ".htmlspecialchars($_POST["month"])."<br>";
		echo "Year: ".htmlspecialchars($_POST["year"])."<br>";
		echo "City: ".htmlspecialchars($_POST["city"])."<br>";
		echo "State: ".htmlspecialchars($_POST["state"])."<br>";
		echo "ISD: ".htmlspecialchars($_POST["isdcode"])."<br>";
		echo "Phone: ".htmlspecialchars($_POST["phone"])."<br>";
		echo "Card Type: ".htmlspecialchars($_POST["cardtype"])."<br>";
		echo "Card First Name: ".htmlspecialchars($_POST["cfirstname"])."<br>";
		echo "Card Last Name: ".htmlspecialchars($_POST["clastname"])."<br>";
		echo "Card Number: ".htmlspecialchars($_POST["cardnumber"])."<br>";
?>
	
</body>
</html>

