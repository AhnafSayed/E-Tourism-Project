<?php include 'Controllers/UserController.php';
      include 'Admin_Header.php';
   $Id = $_GET["id"];
   $c = getClient($Id);
   if(!isset($_SESSION["loggeduser"])){
		header("Location: AdminLogin.php");
	}	 

 ?>


<html>
<head>
	<title>E-Tourism</title>
</head>
<body>
	<form action="" onsubmit="return validateupdateClient()" method="post">
	<center>
		<fieldset style="width: 800px; height: 500px;">
		<legend align="center"><h1 id="b3"><b>Update Client</b></h1></legend>
		<table>
			<tr>
				<td>Username</td>
				<input type="hidden" name="id" value="<?php echo $c["Id"];?>">
				<td><input type="text" onfocusout="checkUsernameClient(this)" name="username" value="<?php echo $c["Username"];?>"><td><span id="err_username"><?php echo $err_username;?></span></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo $c["Password"];?>"><td><span><?php echo $err_password;?></span></td>
			</tr>
			<tr>
				<td>Client Name</td>
				<td><input type="text" name="name" value="<?php echo $c["Name"];?>"><td><span><?php echo $err_name;?></span></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender" value="<?php echo $c["Gender"];?>"><td><span><?php echo $err_gender;?></span></td>
			</tr>
			<tr>
				<td>Day</td>
				<td><input type="text" name="day" value="<?php echo $c["Day"];?>"><td><span><?php echo $err_day;?></span></td>
			</tr>
			<tr>
				<td>Month</td>
				<td><input type="text" name="month" value="<?php echo $c["Month"];?>"><td><span><?php echo $err_month;?></span></td>
			</tr>
			<tr>
				<td>Year</td>
				<td><input type="text" name="year" value="<?php echo $c["Year"];?>"><td><span><?php echo $err_year;?></span></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" onfocusout="checkEmailClient(this)" name="email" value="<?php echo $c["Email"];?>"><td><span id="err_email"><?php echo $err_email;?></span></td>
			</tr>
			<tr>
				<td>City</td>
				<td><input type="text" name="city" value="<?php echo $c["City"];?>"><td><span><?php echo $err_city;?></span></td>
			</tr>
			<tr>
				<td>State</td>
				<td><input type="text" name="state" value="<?php echo $c["State"];?>"><td><span><?php echo $err_state;?></span></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" onfocusout="checkPhoneClient(this)" name="phone" value="<?php echo $c["Phone"];?>"><td><span id="err_phone"><?php echo $err_phone;?></span></td>
			</tr>
		</table>
		<h5><?php echo $err_db;?></h5>
		<input id="b3" type="submit" name="update_client" value="Update">
		<a href="ClientInformation.php"><input id="b3" type="submit" value="Cancel"></a>
	</center>
</form>
</body>
</html>
<?php include 'Admin_Footer.php';?>
<script src="JavaScript/CheckUsernameClient.js"></script>
<script src="JavaScript/CheckEmailClient.js"></script>
<script src="JavaScript/CheckPhoneClient.js"></script>