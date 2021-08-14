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
	<form action="" onsubmit="return validateaddClient()" method="post">
	<center>
		<fieldset style="width: 800px; height: 500px;">
		<legend align="center"><h1 id="b3"><b>Add Client</b></h1></legend>
		<table>
			<tr>
					<td><span >Username:</span></td>
					<td></td>
					<td><input id="username" type="text" onfocusout="checkUsernameClient(this)" name="username" value="<?php echo $username;?>"> </td><td><span id="err_username"><?php echo $err_username;?></span></td>
				</tr>

				<tr>
					<td><span>Password:</span></td>
					<td></td>
					<td><input id="password" type="password" name="password" value="<?php echo $password;?>"> </td><td><span id="err_password"><?php echo $err_password;?></span></td>
				</tr>

				<tr>
					<td><span>Confirm Password:</span></td>
					<td></td>
					<td><input id="confirmpassword" type="password" name="confirmpassword" value="<?php echo $confirmpassword;?>"> </td><td><span id="err_confirmpassword"><?php echo $err_confirmpassword;?></span></td>
				</tr>


				<tr>
					<td><span >Name:</span></td>
					<td></td>
					<td><input id="name" type="text" name="name" value="<?php echo $name;?>"><td><span id="err_name"><?php echo $err_name;?></span></td>
				</tr>

				<tr>
				<td><span>Gender:</span></td>
				<td></td>
				<td><input id="male" type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked";?>><span>Male</span>
				<input id="female" type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked"; ?>><span>Female</span> </td><td><span id="err_gender"> <?php echo $err_gender;?></span></td><br>
				</tr>

				<tr>
				<td><span>Date of Birth:</span></td>
				<td></td>
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
					<td><span>Email:</span></td>
					<td></td>
					<td><input id="email" type="text" onfocusout="checkEmailClient(this)" size="25" name="email" value="<?php echo $email;?>"> </td><td><span id="err_email"><?php echo $err_email;?></span></td>
				</tr>

				<br>

				<tr>
				<td><span>Address:</span></td>
				<td></td>
					<td>
					<select id="city" name="city">
					<option disabled selected>City</option>
					<?php
						$cit= array("Dhaka","Barishal","Syhlet","Noakhali","Cumilla","Chandpur","Chittagong","Cox's Bazar","Rajshahi","Bhola","Mymensingh","Dinajpur","Pabna","Khulna");
						for($l=0;$l<count($cit);$l++){
							if($cit[$l] == $city) 
								echo "<option selected>$cit[$l]</option>";
							else
							    echo "<option>$cit[$l]</option>";
						}
					?>
				</select>
			    </td>
			    <td><span id="err_city"> <?php echo $err_city;?> </span></td>
			    </tr>

			    <tr>
			    	<td><span>State:</span></td>
			    	<td></td>
				<td><input id="state" align="right" type="text" name="state" placeholder = "State" size="10"></td><td><span id="err_state"><?php echo $err_state;?></span></td>
			    </tr>

				<tr>
					<td><span>Phone:</span></td>
					<td></td>
					<td><input id="phone" type="text" onfocusout="checkPhoneClient(this)" name="phone" value="<?php echo $phone;?>" placeholder = "Phone Number" size="12"> </td><td><span id="err_phone"><?php echo $err_phone;?></span></td>
				</tr>
		</table>
		<h5><?php echo $err_db;?></h5>
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
<script src="JavaScript/ClientAddValidation.js"></script>