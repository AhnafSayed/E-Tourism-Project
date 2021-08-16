<?php include 'Controllers/UserController.php';
include 'main_header.php';
?>

<html>
	<head></head>
	<body>
		<center>
			<h5><?php echo $err_db?></h5>
		<form action="" onsubmit="return validate()" method="post">
		<fieldset style="width: 800px; height: 300px;">
		<legend align="center"><h1><b id="b3">Travel Agency Registration</b></h1></legend>
			<table>

				<tr>
					<td><span>Agency Name:</span></td>
					<td><input id="name" type="text" name="name" value="<?php echo $name;?>">
					<td><span id="err_name"><?php echo $err_name;?></span></td>
				</tr>

				<tr>
					<td><span>Username:</span></td>
					<td><input id="username" type="text" onfocusout="checkUsername(this)" name="username" value="<?php echo $username;?>"> </td>
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
					<td><input id="email" type="text" onfocusout="checkEmail(this)" size="25" name="email" value="<?php echo $email;?>"></td>
					<td><span id="err_email"><?php echo $err_email;?></span></td>
				</tr>

				<br>

				

				<tr>
					<td><span>Phone:</span></td>
					<td><input id="phone" type="text" name="phone" value="<?php echo $phone;?>" size="11"></td>
					<td><span id="err_phone"></span><span><?php echo $err_phone;?></span></td>
				</tr>

				<tr>
					<td><span>ETIN Number:</span></td>
					<td><input id="etinum" type="text" onfocusout="checkEtin(this)" name="etinnum" value="<?php echo $etin;?>"> </td>
					<td><span id="err_etinum"><?php echo $err_etin;?></span></td>
				</tr>

				<tr>
				<td colspan="3" align="center">
				<input id="b3" type="Submit" name="travelagency_signup" value="Register">
				</td>
				</tr>
			</table>
	</fieldset>
		</form>
		</center>
		<script src="JavaScript/agency_reg.js"></script>
	</body>
</html>

<?php require_once 'main_footer.php';?>