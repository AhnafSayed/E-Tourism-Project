<?php 
session_start();

if(isset($_POST["Admin_Logout"]))
{
	session_destroy();
	header("Location: AdminLogin.php");
}


?>