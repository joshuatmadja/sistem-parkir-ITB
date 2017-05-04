<?php
	include 'connect.php';
	$id = $_GET['id'];

	$query = "SELECT dosen.noplat,area.nama FROM dosen JOIN area on `dosen`.`id_area`=`area`.`id` WHERE nip='$id'";
	$result = $mysqli->query($query);
	while($ch = $result->fetch_array(MYSQLI_ASSOC)){
		echo json_encode($ch);
	}
?>