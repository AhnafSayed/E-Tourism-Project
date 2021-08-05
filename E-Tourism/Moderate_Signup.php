<?php
	$username="";
	$err_username="";

	$password="";
	$err_password="";

	$confirmpassword="";
	$err_confirmpassword="";

	$name="";
	$err_name="";

	$gender="";
	$err_gender="";

	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";

	$email="";
	$err_email="";

	$city="";
	$err_city="";
	$state="";
	$err_state="";

	$isdcode="";
	$err_isdcode="";
	$phone="";
	$err_phone="";

	$cardtype="";
	$err_cardtype="";
	$cfirstname="";
	$err_cfirstname="";
	$clastname="";
	$err_clastname="";
	$cardnumber="";
	$err_cardnumber="";

	$cmonth="";
	$err_cmonth="";
	$cyear="";
	$err_cyear="";

	$cvvcode="";
	$err_cvvcode="";

	$hasError=false;


	//if	($_SERVER["REQUEST_METHOD"]=="POST")

//--Username--//

	   if(isset($_POST["submit"]))
		{
			if (strlen($_POST["username"])<6)
			{
				$hasError=true;
				$err_username="Username length must contain 6 characters!";
			}
			elseif(strpos($_POST["username"]," "))
			{
				$hasError=true;
				$err_username="Space is not allowed!";
			}
			else
			{
				$username=$_POST["username"];
			}


//--Password--//

			if(empty($_POST["password"]))
			 {
			  $hasError = true;
			  $err_password="A password required!";
		     }
			 elseif(strlen($_POST["password"])<9)
			 {
                 $hasError=true;
				 $err_password="Password character length must be 9!";
		     }
			 elseif(!strpos($_POST["password"],"#"))
			 {
               $hasError=true;
			   $err_password="Password should contain special character";
		     }
		     elseif(strpos($_POST["password"]," "))
		     {
                $hasError=true;
			    $err_password="Password must not contain space!";
		     }
			 else
			 {
				 $password=$_POST["password"];
			 }

//--Confirm Password--//
			
			if($_POST["confirmpassword"]!=$_POST["password"])
			{
				$hasError=true;
				$err_confirmpassword="Password didn't matched with the upperone!";
			}
			else{
				   $confirmpassword=$_POST["confirmpassword"];
			    }


//--Name--//

			if (empty($_POST["name"]))
			{
				$hasError=true;
				$err_name="A name required!";
			}
			elseif (strlen($_POST["name"])<2)
			{
				$hasError=true;
				$err_name="Name length must be 2 characters or more!";
			}
			else
			{
				$name=$_POST["name"];
			}


//--Gender--//
			
			if(!isset($_POST["gender"]))
			{
				$hasError=true;
				$err_gender="Please select your gender!";
			}
			else
			{
				$gender=$_POST["gender"];
			}


//--Date of birth--//
			
			if (!isset($_POST["day"]))
			{
				$hasError=true;
				$err_day="Day needs to be selected!";
			}
			else
			{
				$day=$_POST["day"];
			}
			if (!isset($_POST["month"]))
			{
				$hasError=true;
				$err_month="Month needs to be selected!";
			}
			else
			{
				$month=$_POST["month"];
			}
			if (!isset($_POST["year"]))
			{
				$hasError=true;
				$err_year="Year needs to be selected!";
			}
			else
			{
				$year=$_POST["year"];
			}


//--Email--//
			
			if(strpos($_POST["email"],"@"))
			{if(strpos($_POST["email"],"."))
			$email=$_POST["email"];
			}

			elseif (strlen($_POST["email"])<6)
			{
				$hasError=true;
				$err_email="Email character length must be 6 or above!";
			} 

			elseif(strpos($_POST["email"]," "))
			{
				$hasError=true;
				$err_email="Space is not allowed in Email!";
			}
			else {
				   $err_email="Email must contain '@' and '.'!";
				 }

//--City--//
            
            if (!isset($_POST["city"]))
			{
				$hasError=true;
				$err_city="A city needs to be selected!";
			}
			else
			{
				$city=$_POST["city"];
			}

//--State--//

			if (empty($_POST["state"]))
			{
				$hasError=true;
				$err_state="Give your state name you live!";
			}
			else
			{
				$state=$_POST["state"];
			}

//--Phone--//

			if(!is_numeric($_POST["isdcode"]))
			{
				$hasError=true;
				$err_isdcode="ISD code should be numeric only!";
			}
			else $phone=$_POST["phone"];
			
			if(!is_numeric($_POST["phone"]))
			{
				$hasError=true;
				$err_phone="Phone number should be numeric only!";
			}

			elseif (strlen($_POST["phone"])<11)
			{
				$hasError=true;
				$err_phone="Phone number length must be 11!";
			} 
			else $phone=$_POST["phone"];

//--Credit Card Type--//
            
             if (!isset($_POST["cardtype"]))
			{
				$hasError=true;
				$err_cardtype="A credit card type needs to be selected!";
			}
			else
			{
				$cardtype=$_POST["cardtype"];
			}

//--First Name--//
            
            if (empty($_POST["cfirstname"]))
			{
				$hasError=true;
				$err_cfirstname="Give credit card holder's first name!";
			}
			elseif (strlen($_POST["cfirstname"])<2)
			{
				$hasError=true;
				$err_cfirstname="Credit card holder's firstname length must be 2 characters or more!";
			}
			else
			{
				$cfirstname=$_POST["cfirstname"];
			}

//--Last Name--//
            
            if (empty($_POST["clastname"]))
			{
				$hasError=true;
				$err_clastname="Give credit card holder's last name!";
			}
			elseif (strlen($_POST["clastname"])<2)
			{
				$hasError=true;
				$err_clastname="Credit card holder's lastname length must be 2 characters or more!";
			}
			else
			{
				$clastname=$_POST["clastname"];
			}

//--Credit Card Number--//
            
            if(!is_numeric($_POST["cardnumber"]))
			{
				$hasError=true;
				$err_cardnumber="Credit card number must be numeric only!";
			}

			elseif (strlen($_POST["cardnumber"])<16)
			{
				$hasError=true;
				$err_cardnumber="Credit card number length must be 16!";
			} 
			else $cardnumber=$_POST["cardnumber"];

//--Credit Card Expiration Date--//

            if (!isset($_POST["cmonth"]))
			{
				$hasError=true;
				$err_cmonth="Credit card expiration month needs to be selected!";
			}
			else
			{
				$cmonth=$_POST["cmonth"];
			}
			if (!isset($_POST["cyear"]))
			{
				$hasError=true;
				$err_cyear="Credit card expiration year needs to be selected!";
			}
			else
			{
				$cyear=$_POST["cyear"];
			}

//--CCV Code--//

            if(!is_numeric($_POST["cvvcode"]))
			{
				$hasError=true;
				$err_cvvcode="CVV code must be numeric only!";
			}

			elseif (strlen($_POST["cvvcode"])<3)
			{
				$hasError=true;
				$err_cvvcode="CVV code length must be 3!";
			} 
			else $cvvcode=$_POST["cvvcode"];      

		echo "Username: ".htmlspecialchars($_POST["username"])."<br>";
		echo "Password: ".htmlspecialchars($_POST["password"])."<br>";
		echo "Name: ".htmlspecialchars($_POST["name"])."<br>";
		echo "Email: ".htmlspecialchars($_POST["email"])."<br>";
		echo "Day: ".htmlspecialchars($_POST["day"])."<br>"; 
		echo "Month: ".htmlspecialchars($_POST["month"])."<br>";
		echo "Year: ".htmlspecialchars($_POST["year"])."<br>";
		echo "City: ".htmlspecialchars($_POST["city"])."<br>";
		echo "State: ".htmlspecialchars($_POST["state"])."<br>";
		echo "ISD: ".htmlspecialchars($_POST["isdcode"])."<br>";
		echo "Phone: ".htmlspecialchars($_POST["phone"])."<br>";
		echo "Card Type: ".htmlspecialchars($_POST["cardtype"])."<br>";
		echo "Card First Name: ".htmlspecialchars($_POST["cfirstname"])."<br>";
		echo "Card Last Name: ".htmlspecialchars($_POST["clastname"])."<br>";
		echo "Card Number: ".htmlspecialchars($_POST["cardnumber"])."<br>";  

		
		}
?>


<html>
	<head></head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset style="width: 800px; height: 700px;">
		<legend align="center"><h1><b>Moderate Registration</b></h1></legend>
			<table>

				<tr>
					<td><span >Username:</span></td>
					<td></td>
					<td><input type="text" name="username" value="<?php echo $username;?>"> </td><td><span><?php echo $err_username;?></span></td>
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
					<td><input type="text" size="25" name="email" value="<?php echo $email;?>"> </td><td><span><?php echo $err_email;?></span></td>
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
                	<td><p align="left"><h3><b>Credit Card Information:</b></h3></p></td>
                </tr> 

                <tr>
				<td><span>Card Type:</span></td>
				<td></td>
				<td>
				<select name="cardtype">
					<option disabled selected>None</option>
					<?php
						$cardt= array("VISA","Master Card","American Express");
						for($n=0;$n<count($cardt);$n++)
						{
							echo "<option>$cardt[$n]</option>";
						}
					?>
					</select>
					</td>
			    <td><span> <?php echo $err_cardtype;?> </span></td>
			    </tr>

			    <tr>
					<td><span >First Name and Last Name:</span></td>
					<td></td>
					<td><input type="text" name="cfirstname" placeholder="Card holder's first name" value="<?php echo $cfirstname;?>"> <input type="text" name="clastname" placeholder="Card holder's last name" value="<?php echo $clastname;?>"> </td><td><span><?php echo $err_cfirstname;?></span><span><?php echo $err_clastname;?></span></td>
				</tr>

				<tr>
					<td><span>Card Number:</span></td>
					<td></td>
					<td><input type="text" name="cardnumber" value="<?php echo $cardnumber;?>"> </td><td><span><?php echo $err_cardnumber;?></span></td>
				</tr>


				<tr>
				<td><span>Expiration Date:</span></td>
				<td></td>
				<td>
				<select name="cmonth">
					<option disabled selected>MM</option>
					<?php
						for($o=1;$o<=12;$o++)
						{
							echo "<option>$o</option>";
						}
					?>
					</select>

					<select name="cyear">
					<option disabled selected>YYYY</option>
					<?php
						for($p=1971;$p<=2090;$p++)
						{
							echo "<option>$p</option>";
						}
					?>
				</select>
				</td>
				<td><?php echo "$err_cmonth"."  "."$err_cyear"?></td>
				</tr>


				<tr>
					<td><span>CVV Code:</span></td>
					<td></td>
					<td><input type="text" name="cvvcode" value="<?php echo $cvvcode;?>"> </td><td><span><?php echo $err_cvvcode;?></span></td>
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