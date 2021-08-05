<html>
<head><h1 align="center"> Standard Account Created!</h1></head>
<body>


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
?>
</body>
</html>

