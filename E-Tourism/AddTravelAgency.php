<?php include 'Controllers/UserController.php';
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
	<form action="" onsubmit="return validateaddTravelAgency()" method="post">
	<center>
		<fieldset style="width: 800px; height: 500px;">
		<legend align="center"><h1 id="b3"><b>Add Travel Agency</b></h1></legend>
		<table>
			    <tr>
					<td><span>Travel Agency Name:</span></td>
					<td><input id="name" type="text" name="name" value="<?php echo $name;?>">
					<td><span id="err_name"><?php echo $err_name;?></span></td>
				</tr>

				<tr>
					<td><span>Username:</span></td>
					<td><input id="username" type="text" name="username" value="<?php echo $username;?>"> </td>
					<td><span id="err_username"><?php echo $err_username;?></span></td>
				</tr>

				<tr>
					<td><span>Password:</span></td>
					<td><input id="password" type="password" name="password" value="<?php echo $password;?>"> </td>
					<td><span id="err_password"><?php echo $err_password;?></span></td>
				</tr>

				<tr>
					<td><span>Confirm Password:</span></td>
					<td><input id="confirmpassword" type="password" name="confirmpassword" value="<?php echo $confirmpassword;?>"></td>
					<td><span id="err_confirmpassword"><?php echo $err_confirmpassword;?></span></td>
				</tr>

				<tr>
					<td><span>Email:</span></td>
					<td><input id="email" type="text" size="25" name="email" value="<?php echo $email;?>"></td>
					<td><span id="err_email"><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span>Phone:</span></td>
					<td><input id="phone" type="text" name="phone" value="<?php echo $phone;?>" size="11"></td>
					<td><span id="err_phone"></span><span><?php echo $err_phone;?></span></td>
				</tr>

				<tr>
					<td><span>ETIN Number:</span></td>
					<td><input id="etinum" type="text" name="etinnum" value="<?php echo $etin;?>"> </td>
					<td><span id="err_etinum"><?php echo $err_etin;?></span></td>
				</tr>
		</table>
		<h5><?php echo $err_db;?></h5>
		<input id="b3" type="submit" name="add_travelagency" value="Add">
		<a href="TravelAgencyInformation.php"><input id="b3" type="submit" value="Cancel"></a>
	</center>
</form>
</body>
</html>
<?php include 'Admin_Footer.php';?>
<script src="JavaScript/CheckUsernameTravelAgency.js"></script>
<script src="JavaScript/CheckEmailTravelAgency.js"></script>
<script src="JavaScript/CheckPhoneTravelAgency.js"></script>
<script src="JavaScript/CheckETINTravelAgency.js"></script>
<script src="JavaScript/TravelAgencyAddValidation.js"></script>