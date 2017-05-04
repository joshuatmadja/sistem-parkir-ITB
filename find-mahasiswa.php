<?php
	include 'connect.php';
	$id = $_GET['id'];

	$query = "SELECT * FROM mahasiswa WHERE nim='$id'";
	$result = $mysqli->query($query);
	while($ch=$result->fetch_array(MYSQLI_ASSOC)){
		echo json_encode($ch);
	}
?>