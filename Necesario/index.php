<?php include_once("includes/header.php");
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: login.php");
	}
?>


<?php include_once("includes/footer.php");?>