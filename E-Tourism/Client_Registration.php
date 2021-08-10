<?php include 'main_header.php';
	  include 'Controllers/UserController.php';
?>

<html>
	<head><title>E-Tourism</title>
	</head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset style="width: 800px; height: 500px;">
		<legend align="center"><h1 id="b3"><b>Client Registration</b></h1></legend>
			<table>

				<tr>
					<td><span >Username:</span></td>
					<td></td>
					<td><input type="text" onfocusout="checkUsernameClient(this)" name="username" value="<?php echo $username;?>"> </td><td><span id="err_username"><?php echo $err_username;?></span></td>
				</tr>

				<tr>
					<td><span>Password:</span></td>
					<td></td>
					<td><input type="password" name="password" value="<?php echo $password;?>"> </td><td><span><?php echo $err_password;?></span></td>
				</tr>

				<tr>
					<td><span>Confirm Password:</span></td>
					<td></td>
					<td><input type="password" name="confirmpassword" value="<?php echo $confirmpassword;?>"> </td><td><span><?php echo $err_confirmpassword;?></span></td>
				</tr>


				<tr>
					<td><span >Name:</span></td>
					<td></td>
					<td><input type="text" name="name" value="<?php echo $name;?>"><td><span><?php echo $err_name;?></span></td>
				</tr>

				<tr>
				<td><span>Gender:</span></td>
				<td></td>
				<td><input type="radio" name="gender" value="Male"><span>Male</span>
				<input type="radio" name="gender" value="Female"><span>Female</span> </td><td><span> <?php echo $err_gender;?></span></td><br>
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
					<td><input type="text" onfocusout="checkEmailClient(this)" size="25" name="email" value="<?php echo $email;?>"> </td><td><span id="err_email"><?php echo $err_email;?></span></td>
				</tr>

				<br>

				<tr>
				<td><span>Address:</span></td>
				<td></td>
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
			    	<td><span>State:</span></td>
			    	<td></td>
				<td><input align="right" type="text" name="state" placeholder = "State" size="10"></td><td><span><?php echo $err_state;?></span></td>
			    </tr>

				<tr>
					<td><span>Phone:</span></td>
					<td></td>
					<td><input type="text" onfocusout="checkPhoneClient(this)" name="phone" value="<?php echo $phone;?>" placeholder = "Phone Number" size="12"> </td><td><span id="err_phone"><?php echo $err_phone;?></span></td>
				</tr>

				<tr>
				<td colspan="3" align="center">
				<input id="b3" type="Submit" name="client_signup" value="Register">
				</td>
				</tr>
			</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>
<script src="JavaScript/CheckUsernameClient.js"></script>
<script src="JavaScript/CheckEmailClient.js"></script>
<script src="JavaScript/CheckPhoneClient.js"></script>
<?php include 'main_footer.php';?>