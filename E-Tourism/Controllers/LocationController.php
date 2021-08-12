<?php 

require_once'Models/db_config.php';

session_start();

$location='';
$err_location='';
$information='';
$err_information='';
$locationPic='';
$err_locationPic='';


$err_db='';

$hasError = False;

if(isset($_POST["add_location"])){
	if(empty($_POST["location"])){
		$hasError = true;
		$err_location = "Location Required!";
	}
	else
	{
		$location=$_POST["location"];
	}
	
	if(empty($_POST['information'])){
		$hasError = true;
		$err_information = "Information Required!";
	}
	else
	{
		$information = $_POST["information"];
	}
	if(!$hasError){
		$filetype = strtolower(pathinfo(basename($_FILES["location_pic"]["name"]),PATHINFO_EXTENSION));
		$target = 'Storage/location_images/'.uniqid().".$filetype";
		move_uploaded_file($_FILES["location_pic"]["tmp_name"], $target);


			$rs = insertLocation($location,$information,$target);
			if ($rs === true){
				header("Location: Location.php");
			}
			$err_db = $rs;
		}

	}
else if (isset($_POST["edit_location"])){

		if (empty($_POST["location"]))
			{
				$hasError=true;
				$err_location="Location required!";
			}
			else
			{
				$location=$_POST["location"];
			}

		if (empty($_POST["information"]))
			{
				$hasError=true;
				$err_information="Information required!";
			}
			else
			{
				$information=$_POST["information"];
			}


		if(!$hasError){
			$filetype = strtolower(pathinfo(basename($_FILES["location_pic"]["name"]),PATHINFO_EXTENSION));
		$target = 'Storage/location_images/'.uniqid().".$filetype";
		move_uploaded_file($_FILES["location_pic"]["tmp_name"], $target);

			$rs = editLocation($location,$information,$target,$_POST["id"]);
			if ($rs === true){
				header("Location: Location.php");
			}
			$err_db = $rs;
		}	
		
	}
	else if (isset($_POST["delete_location"])) {

		if(!$hasError){
		$rs = deleteLocation($_GET["id"]);
		if ($rs === true){
			header("Location: Location.php");
		}
		$err_db = $rs;

	}

}	



function insertLocation($location,$information,$locationPic){
			$query = "insert into location values (NULL,'$location','$information','$locationPic')";
			return execute($query);
		}

		function getallLocation(){
			$query = "select * from location";
			$rs = get($query);
			return $rs;
		}

		function getLocation($id){
			$query = "select * from location where id= $id";
			$rs = get($query);
			return $rs[0];
		}

		function editLocation($location,$information,$locationPic,$id){
			$query = "update location set location = '$location',information = '$information',locationPic = '$locationPic' where id= $id";
			return execute($query);
		}

		function deleteLocation($id){
			$query = "delete from location where id = $id ";
			return execute($query);

		}

?>