<?php include 'main_header.php';
	  include 'Controllers/UserController.php';
?>

<html>
	<head></head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset style="width: 800px; height: 500px;">
		<legend align="center"><h1><b>Client Registration</b></h1></legend>
			<table>

				<tr>
					<td><span >Username:</span></td>
					<td></td>
					<td><input type="text" onfocusout="checkUsername(this)" name="username" value="<?php echo $username;?>"> </td><td><span><?php echo $err_username;?></span></td>
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
					<td><input type="text" onfocusout="checkEmail(this)" size="25" name="email" value="<?php echo $email;?>"> </td><td><span><?php echo $err_email;?></span></td>
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
					<td><input type="text" name="isdcode" value="<?php echo $isdcode;?>" placeholder="ISD" size="4"><b>-</b><input type="text" name="phone" value="<?php echo $phone;?>" placeholder = "Number" size="9"> </td><td><span><?php echo $err_isdcode;?></span><span><?php echo $err_phone;?></span></td>
				</tr>

				<tr>
				<td colspan="3" align="center">
				<input type="Submit" name="submit" value="Register">
				</td>
				</tr>
			</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>
<script src="JavaScript/Username_Signup.js"></script>
<script src="JavaScript/Email_Signup.js"></script>
<?php include 'main_footer.php';?>