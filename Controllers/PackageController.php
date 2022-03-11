<?php 
      require_once 'Models/db_config.php';

      session_start();

      $transport='';
      $err_transport='';
      $meal='';
      $err_meal='';
      $price='';
      $err_price='';
      $location='';
      $err_location='';
      $hotel='';
      $err_hotel='';
      $hotelPic='';
      $err_hotelPic='';
      $room='';
      $err_room='';
      $err_db='';

      $hasError= False;

      if(isset($_POST["add_package"]))
      {

		if (empty($_POST["transport"]))
			{
				$hasError=true;
				$err_transport="Transport required!";
			}
			else
			{
				$transport=$_POST["transport"];
			}

		if (empty($_POST["meal"]))
			{
				$hasError=true;
				$err_meal="Meal required!";
			}
			else
			{
				$meal=$_POST["meal"];
			}

		if (empty($_POST["price"]))
			{
				$hasError=true;
				$err_price="Price required!";
			}
			else
			{
				$price=$_POST["price"];
			}

		if (empty($_POST["location"]))
			{
				$hasError=true;
				$err_location="Location required!";
			}
			else
			{
				$location=$_POST["location"];
			}

		if (empty($_POST["hotel"]))
			{
				$hasError=true;
				$err_hotel="Hotel required!";
			}
			else
			{
				$hotel=$_POST["hotel"];
			}


		if (empty($_POST["hotel_room"]))
			{
				$hasError=true;
				$err_room="Room required!";
			}
			else
			{
				$room=$_POST["hotel_room"];
			}

			if(!$hasError){

				$filetype = strtolower(pathinfo(basename($_FILES["hotel_pic"]["name"]),PATHINFO_EXTENSION));
		$target = 'Storage/package_images/'.uniqid().".$filetype";
		move_uploaded_file($_FILES["hotel_pic"]["tmp_name"], $target);

			$rs = insertPackages($transport,$meal,$price,$location,$hotel,$target,$room);
			if ($rs === true){
				header("Location: Packages.php");
			}
			$err_db = $rs;
		}

	}

	else if (isset($_POST["edit_package"])) {
		if (empty($_POST["transport"]))
			{
				$hasError=true;
				$err_transport="Transport required!";
			}
			else
			{
				$transport=$_POST["transport"];
			}

		if (empty($_POST["meal"]))
			{
				$hasError=true;
				$err_meal="Meal required!";
			}
			else
			{
				$meal=$_POST["meal"];
			}

		if (empty($_POST["price"]))
			{
				$hasError=true;
				$err_price="Price required!";
			}
			else
			{
				$price=$_POST["price"];
			}

		if (empty($_POST["location"]))
			{
				$hasError=true;
				$err_location="Location required!";
			}
			else
			{
				$location=$_POST["location"];
			}

		if (empty($_POST["hotel"]))
			{
				$hasError=true;
				$err_hotel="Hotel required!";
			}
			else
			{
				$hotel=$_POST["hotel"];
			}

		if (empty($_POST["hotel_room"]))
			{
				$hasError=true;
				$err_room="Room required!";
			}
			else
			{
				$room=$_POST["hotel_room"];
			}

		if(!$hasError){
			$filetype = strtolower(pathinfo(basename($_FILES["hotel_pic"]["name"]),PATHINFO_EXTENSION));
		$target = 'Storage/package_images/'.uniqid().".$filetype";
		move_uploaded_file($_FILES["hotel_pic"]["tmp_name"], $target);

			$rs = editPackages($transport,$meal,$price,$location,$hotel,$target,$room,$_POST["id"]);
			if ($rs === true){
				header("Location: Packages.php");
			}
			$err_db = $rs;
		}	
		
	}

	else if (isset($_POST["delete_package"])) {

		if(!$hasError){
		$rs = deletePackage($_GET["id"]);
		if ($rs === true){
			header("Location: Packages.php");
		}
		$err_db = $rs;

	}

	}

		function insertPackages($transport,$meal,$price,$location,$hotel,$hotelPic,$room){
			$query = "insert into packages values (NULL,'$transport','$meal','$price','$location','$hotel','$hotelPic','$room')";
			return execute($query);
		}

		function getallPackages(){
			$query = "select * from packages";
			$rs = get($query);
			return $rs;
		}
		
		function getallHotels(){
			$query = "select * from packages";
			$rs = get($query);
			return $rs;
		}

		function getPackage($id){
			$query = "select * from packages where id= $id";
			$rs = get($query);
			return $rs[0];
		}

		function editPackages($transport,$meal,$price,$location,$hotel,$hotelPic,$room,$id){
			$query = "update packages set transport='$transport',meal='$meal',price='$price',location='$location',hotel='$hotel',hotelPic='$hotelPic',room='$room' where id= $id";
			return execute($query);
		}

		function deletePackage($id){
			$query = "delete from packages where id = $id ";
			return execute($query);
		}


?>