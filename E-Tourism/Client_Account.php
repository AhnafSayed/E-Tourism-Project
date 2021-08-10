<?php
	if(!isset($_COOKIE["loggeduser"])){
		header("Location: ClientLogin.php");
	}
?>
<html>
	<body>
		<h1 align="center">Welcome <?php echo $_COOKIE["loggeduser"];?></h1>
		<form action="" method="post">
		</form>
	</body>
</html>