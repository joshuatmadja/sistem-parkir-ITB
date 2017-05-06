<?php
	include 'connect.php';
	$id = $_GET['zona'];
	$arr = array();
	
	
	$query = "SELECT * FROM area WHERE id='$id'";
	$result = $mysqli->query($query);
	while($ch = $result->fetch_array(MYSQLI_ASSOC)){
		$kapasitas = $ch['kapasitas'];
		$arr["kapasitas"]=intval($ch['kapasitas']);
	}

	$query2 = "SELECT SUM(`status`) as occupied FROM logparkir WHERE `id_area`='$id'";
	$result = $mysqli->query($query2);
	while($ch = $result->fetch_array(MYSQLI_ASSOC)){
		$sisa = $ch['occupied'];
		$arr["sisa"]=intval($sisa);
	}
	echo json_encode($arr);
	
?>