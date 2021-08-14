<?php include 'Controllers/UserController.php';
      include 'Admin_Header.php';
   $Id = $_GET["id"];
   $t = getTravelAgency($Id);
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
		<legend align="center"><h1 id="b3"><b>Update Travel Agency</b></h1></legend>
		<table>
			<tr>
				<td>Username</td>
				<input type="hidden" name="id" value="<?php echo $t["Id"];?>">
				<td><input type="text" onfocusout="checkUsernameTravelAgency(this)" name="username" value="<?php echo $t["Username"];?>"><td><span id="err_username"><?php echo $err_username;?></span></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo $t["Password"];?>"><td><span><?php echo $err_password;?></span></td>
			</tr>
			<tr>
				<td>Travel Agency Name</td>
				<td><input type="text" name="name" value="<?php echo $t["Name"];?>"><td><span><?php echo $err_name;?></span></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" onfocusout="checkEmailTravelAgency(this)" name="email" value="<?php echo $t["Email"];?>"><td><span id="err_email"><?php echo $err_email;?></span></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" onfocusout="checkPhoneTravelAgency(this)" name="phone" value="<?php echo $t["Phone"];?>"><td><span id="err_phone"><?php echo $err_phone;?></span></td>
			</tr>
			<tr>
				<td>ETIN</td>
				<td><input type="text" onfocusout="checkETINTravelAgency(this)" name="etinnum" value="<?php echo $t["ETIN"];?>"><td><span id="err_etin"><?php echo $err_etin;?></span></td>
			</tr>
		</table>
		<h5><?php echo $err_db;?></h5>
		<input id="b3" type="submit" name="update_travelagency" value="Update">
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