<?php include 'Controllers/UserController.php';
      include 'Admin_Header.php';
   $Id = $_GET["id"];
   $a = getAdmin($Id);
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
		<fieldset style="width: 800px; height: 500px;">
		<legend align="center"><h1 id="b3"><b>Update Admin Profile</b></h1></legend>
		<table>
		    <tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $a["Name"];?>"><td><span><?php echo $err_name;?></span></td>
			</tr>
			<tr>
				<td>Username</td>
				<input type="hidden" name="id" value="<?php echo $a["Id"];?>">
				<td><input type="text" name="username" value="<?php echo $a["Username"];?>"><td><span id="err_username"><?php echo $err_username;?></span></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo $a["Password"];?>"><td><span><?php echo $err_password;?></span></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $a["Email"];?>"><td><span><?php echo $err_email;?></span></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone" value="<?php echo $a["Phone"];?>"><td><span><?php echo $err_phone;?></span></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" value="<?php echo $a["Address"];?>"><td><span><?php echo $err_address;?></span></td>
			</tr>
		</table>
		<h5><?php echo $err_db;?></h5>
		<input id="b3" type="submit" name="update_admin" value="Update">
		<a href="Admin_Profile.php"><input id="b3" type="submit" value="Cancel"></a>
	</center>
</form>
</body>
</html>
<?php include 'Admin_Footer.php';?>