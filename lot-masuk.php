<?php
	include 'connect.php';
	$time = date("Y-m-d H:m:s");
	$area = $_GET['area'];
	$petugas = $_GET['petugas'];

	$query = "INSERT INTO logparkir (`tanggal`, `id_area`, `status`,`id_petugas`) VALUES ('$time', '$area', '1', '$petugas')";
	$mysqli->query($query);
	$last_id = $mysqli->insert_id;

	$query3 = "SELECT * FROM area WHERE `id`='$area'";
	$result = $mysqli->query($query3);
	while($ch = $result->fetch_array(MYSQLI_ASSOC)){
		$kap = intval($ch['kapasitas']);
		$arr["kapasitas"]=intval($ch['kapasitas']);
	}
	
	$query2 = "SELECT SUM(`status`) as occupied FROM logparkir WHERE `id_area`='$area'";
	$result = $mysqli->query($query2);
	while($ch = $result->fetch_array(MYSQLI_ASSOC)){
		$sisa = $ch['occupied'];
		$arr["sisa"]=intval($sisa);
	}

	if($sisa>=0 && $sisa <= $kap) echo json_encode($arr);
	else{
		$res = $mysqli->query("DELETE FROM logparkir WHERE `id`='$last_id'");
		$arr["sisa"]=$kap;
		echo json_encode($arr);
	}

?>