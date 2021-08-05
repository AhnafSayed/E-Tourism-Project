<?php
    require_once 'Models/db_config.php';
	$username="";
	$err_username="";
	
	$password="";
	$err_password="";
	
	$err_db="";
	
	$hasError=false;
	
	if (isset($_POST["btn_login"])){
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username = "Username Required";
		}
		else{
			$username = $_POST["username"];
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password = "Password Required";
		}
		else{
			$password = $_POST["password"];
		}
		if(!$hasError){
			if(authenticateUser($username,$password)){
				
				header("Location: Admin_Account.php");
			}
			$err_db = "Username password invalid";
		}
		
	}
		
		function authenticateUser($username,$password){
		$query = "select * from admin where username='$username' and password='$password'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}
?>