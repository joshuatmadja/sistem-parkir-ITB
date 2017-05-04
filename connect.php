<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "sistemparkiritb";

$mysqli = new mysqli($server,$user,$pass, $db);

if($mysqli->connect_error){
	die("Connection failed: ".$conn->connect_error);
}


?>