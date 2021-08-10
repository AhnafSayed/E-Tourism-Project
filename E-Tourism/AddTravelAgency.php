<?php include 'Controllers/UserController.php';
      include 'Admin_Header.php';?>


<html>
<head>
	<title>E-Tourism</title>
</head>
<body>
	<h5><?php echo $err_db;?></h5>
	<form action="" method="post">
	<center>
		<fieldset style="width: 800px; height: 500px;">
		<legend align="center"><h1 id="b3"><b>Add Travel Agency</b></h1></legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" onfocusout="checkUsernameTravelAgency(this)" name="username" value="<?php echo $username;?>"><td><span id="err_username"><?php echo $err_username;?></span></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo $password;?>"><td><span><?php echo $err_password;?></span></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" name="confirmpassword" value="<?php echo $confirmpassword;?>"><td><span><?php echo $err_confirmpassword;?></span></td>
			</tr>
			<tr>
				<td>Travel Agency Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"><td><span><?php echo $err_name;?></span></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" onfocusout="checkEmailTravelAgency(this)" name="email" value="<?php echo $email;?>"><td><span id="err_email"><?php echo $err_email;?></span></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" onfocusout="checkPhoneTravelAgency(this)" name="phone" placeholder="Phone Number" size="12" value="<?php echo $phone;?>"><td><span id="err_phone"><?php echo $err_phone;?></span></td>
			</tr>
			<tr>
				<td>ETIN</td>
				<td><input type="text" onfocusout="checkETINTravelAgency(this)" name="etinnum" value="<?php echo $etin;?>"><td><span id="err_etin"><?php echo $err_etin;?></span></td>
			</tr>
		</table>
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