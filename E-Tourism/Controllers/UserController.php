<?php
    require_once 'Models/db_config.php';
//--Session--//
    session_start();
//--Sign-In--//
	$username="";
	$err_username="";
	
	$password="";
	$err_password="";
	
//--Client Sign-Up--//
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

//--Travel Agency Signup--//	
    $etin="";
	$err_etin="";
	
	
	
	$err_db="";
	
	$hasError=false;

//--Travel Agency--//


	   if(isset($_POST["travelagency_signup"]))
		{   
//--Name--//

			if (empty($_POST["name"]))
			{
				$hasError=true;
				$err_name="Travel Agency name required!";
			}
			elseif (strlen($_POST["name"])<2)
			{
				$hasError=true;
				$err_name="Travel Agency name length must be 2 characters or more!";
			}
			else
			{
				$name=$_POST["name"];
			}

//--Username--//

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



//--Phone--//
            
			if(empty($_POST["phone"]))
			{
			  $hasError = true;
			  $err_phone="Phone number required!";
		    }
			
			elseif(!is_numeric($_POST["phone"]))
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

//--ETIN--//

            if(empty($_POST["etinnum"]))
			{
			  $hasError = true;
			  $err_etin="A ETIN number required!";
		    }
			elseif(!is_numeric($_POST["etinnum"]))
			{
				$hasError=true;
				$err_etin="ETIN number must be numeric only!";
			}
			elseif (strlen($_POST["etinnum"])<6)
			{
				$hasError=true;
				$err_etin="ETIN number length must be 6!";
			} 
			else
			{				
				$etin=$_POST["etinnum"];
			}
            if(!$hasError){
			$rs = insertTravelAgency($username,$password,$name,$email,$phone,$etin);
			if ($rs === true){
				header("Location: Login.php");
			}
			$err_db = $rs;
		}			
		}

//--Client Update--//

     if (isset($_POST["update_client"])) 
	 {
//--Username--//

		    if(empty($_POST["username"]))
			{
			  $hasError = true;
			  $err_username="Username is required!";
		    }
			elseif (strlen($_POST["username"])<6)
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
			
			if(empty($_POST["phone"]))
			{
			  $hasError = true;
			  $err_phone="Phone number required!";
		    }
			elseif(!is_numeric($_POST["phone"]))
			{
				$hasError=true;
				$err_phone="Phone number should be numeric only!";
			}

			elseif (strlen($_POST["phone"])<11)
			{
				$hasError=true;
				$err_phone="Phone number length must be 11!";
			} 
			else
			{	
				$phone=$_POST["phone"];
			}

		    if(!$hasError){
			$rs = updateClient($username,$password,$name,$gender,$day,$month,$year,$email,$city,$state,$phone,$_POST["id"]);
			if ($rs === true){
				header("Location: ClientInformation.php");
			}
			$err_db = $rs;
		}	
		
	}
	
	
//--Client Add--//

     if (isset($_POST["add_client"])) 
	 {
//--Username--//

		    if(empty($_POST["username"]))
			{
			  $hasError = true;
			  $err_username="A client username is required!";
		    }
			elseif (strlen($_POST["username"])<6)
			{
				$hasError=true;
				$err_username="A client username length must contain 6 characters!";
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
				$err_name="A client name required!";
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
				$err_gender="Please select your client's gender!";
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
			
			if(empty($_POST["phone"]))
			{
			  $hasError = true;
			  $err_phone="Client's phone number required!";
		    }
			elseif(!is_numeric($_POST["phone"]))
			{
				$hasError=true;
				$err_phone="Phone number should be numeric only!";
			}

			elseif (strlen($_POST["phone"])<11)
			{
				$hasError=true;
				$err_phone="Phone number length must be 11!";
			} 
			else
			{	
				$phone=$_POST["phone"];
			}

		    if(!$hasError){
			$rs = addClient($username,$password,$name,$gender,$day,$month,$year,$email,$city,$state,$phone);
			if ($rs === true){
				header("Location: ClientInformation.php");
			}
			$err_db = $rs;
		}	
		
	}


//--Client Registration--//
	
//--Username--//	
	if(isset($_POST["client_signup"]))
		{   
	        if(empty($_POST["username"]))
			{
			  $hasError = true;
			  $err_username="Username is required!";
		    }
			elseif (strlen($_POST["username"])<6)
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

			if(empty($_POST["phone"]))
			{
			  $hasError = true;
			  $err_phone="Phone number required!";
		    }
			elseif(!is_numeric($_POST["phone"]))
			{
				$hasError=true;
				$err_phone="Phone number should be numeric only!";
			}

			elseif (strlen($_POST["phone"])<11)
			{
				$hasError=true;
				$err_phone="Phone number length must be 11!";
			} 
			else
			{	
				$phone=$_POST["phone"];
			}
			
			if(!$hasError){
			$rs = insertUser($username,$password,$name,$gender,$day,$month,$year,$email,$city,$state,$phone);
			if ($rs === true){
				header("Location: Login.php");
			}
			$err_db = $rs;
		}
	}
	
	
//--Login--//
	
	if (isset($_POST["btn_login"])){
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username = "Username Required!";
		}
		else{
			$username = $_POST["username"];
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password = "Password Required!";
		}
		else{
			$password = $_POST["password"];
		}
		if(!$hasError){
			if(authenticateUser($username,$password)){
				$_SESSION["loggeduser"] = $username; //--Session--//
				header("Location: Admin_Account.php");
			}
			$err_db = "Username and password invalid!";
		}
	}
	
	    function insertUser($username,$password,$name,$gender,$day,$month,$year,$email,$city,$state,$phone){
		$query = "insert into clients values (NULL,'$username','$password','$name','$gender','$day','$month','$year','$email','$city','$state','$phone')";
		return execute($query);
		
	}
	
	    function addClient($username,$password,$name,$gender,$day,$month,$year,$email,$city,$state,$phone){
		$query = "insert into clients values (NULL,'$username','$password','$name','$gender','$day','$month','$year','$email','$city','$state','$phone')";
		return execute($query);
		
	}
	 
	    function insertTravelAgency($username,$password,$name,$email,$phone,$etin){
		$query = "insert into travel_agency values (NULL,'$username','$password','$name','$email','$phone','$etin')";
		return execute($query);
		
	}
	
	    function getallClients(){
			$query = "select * from clients";
			$rs = get($query);
			return $rs;
	}
		
		function getClient($id){
			$query = "select * from clients where id= $id";
			$rs = get($query);
			return $rs[0];
	}
		
		
		function updateClient($username,$password,$name,$gender,$day,$month,$year,$email,$city,$state,$phone,$id){
			$query = "update clients set username='$username',password='$password',name='$name',gender='$gender',day='$day',month='$month',year='$year',email='$email',city='$city',state='$state',phone='$phone' where id= $id";
			return execute($query);
	}
		
		
		function authenticateUser($username,$password){
		$query = "select * from admin where username='$username' and password='$password'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	
	    function checkUsername($username){
		$query = "select * from clients where username='$username'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}
	
	    function checkEmail($email){
		$query = "select * from clients where email='$email'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}
?>