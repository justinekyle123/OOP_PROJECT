<?php 

$host = "localhost";
$name = "root";
$pass = "";
$db = "CRUD";

$con = new mysqli($host,$name,$pass,$db);

if ($con->connect_error){
	die($con->connect_error);
}


?>