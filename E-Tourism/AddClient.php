<?php include 'Controllers/UserController.php';
include 'Admin_Header.php';
?>


<html>
<head>
	<title>E-Tourism</title>
</head>
<body>
	<h5><?php echo $err_db;?></h5>
	<form action="" method="post">
	<center>
		<fieldset style="width: 800px; height: 500px;">
		<legend align="center"><h1 id="b3"><b>Add Client</b></h1></legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" onfocusout="checkUsernameClient(this)" name="username" value="<?php echo $username;?>"><td><span id="err_username"><?php echo $err_username;?></span></td>
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
				<td>Client Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"><td><span><?php echo $err_name;?></span></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="Male"><span>Male</span>
				<input type="radio" name="gender" value="Female"><span>Female</span> </td><td><span> <?php echo $err_gender;?></span></td><br>
			</tr>
			<tr>
				<td><span>Date of Birth</span></td>
				<td>
				<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mon);$j++)
						{
							echo "<option>$mon[$j]</option>";
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1971;$k<=2090;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td>
				<td><?php echo "$err_day"."  "."$err_month"."  "."$err_year"?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" onfocusout="checkEmailClient(this)" name="email" value="<?php echo $email;?>"><td><span id="err_email"><?php echo $err_email;?></span></td>
			</tr>
			<tr>
				<td><span>Address</span></td>
					<td>
					<select name="city">
					<option disabled selected>City</option>
					<?php
						$cit= array("Dhaka","Barishal","Syhlet","Noakhali","Cumilla","Chandpur","Chittagong","Cox's Bazar","Rajshahi","Bhola","Mymensingh","Dinajpur","Pabna","Khulna");
						for($l=0;$l<count($cit);$l++)
						{
							echo "<option>$cit[$l]</option>";
						}
					?>
				</select>
			    </td>
			    <td><span> <?php echo $err_city;?> </span></td>
			</tr>
            <tr>
				<td>State</td>
				<td><input type="text" name="state" value="<?php echo $state;?>"><td><span><?php echo $err_state;?></span></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" onfocusout="checkPhoneClient(this)" name="phone" placeholder="Phone Number" size="12" value="<?php echo $phone;?>"><td><span><?php echo $err_phone;?></span></td>
			</tr>
		</table>
		<input id="b3" type="submit" name="add_client" value="Add">
		<a href="ClientInformation.php"><input id="b3" type="submit" value="Cancel"></a>
	</center>
</form>
</body>
</html>
<?php include 'Admin_Footer.php';?>
<script src="JavaScript/CheckUsernameClient.js"></script>
<script src="JavaScript/CheckEmailClient.js"></script>
<script src="JavaScript/CheckPhoneClient.js"></script>