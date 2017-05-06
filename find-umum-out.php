<?php
	include 'connect.php';
	$id = $_GET['id'];
	$arr = array();
	$barcode = 0;

	$query = "SELECT * FROM transaksi_umum JOIN umum JOIN kendaraan ON transaksi_umum.id_umum = umum.id and umum.noplat = kendaraan.noplat WHERE `barcode` = '$id'";
	$result = $mysqli->query($query);
	while($ch=$result->fetch_array(MYSQLI_ASSOC)){
		$arr["jam_masuk"]=$ch['jam_masuk'];
		$arr["jenis"]= $ch['jenis'];
		$arr["no_plat"]=$ch['noplat'];
		$barcode = $ch['barcode'];
		//echo $barcode;
	}
	//print_r($arr);
	//echo $barcode;
	$query1 = "SELECT * FROM datapelanggaran JOIN pelanggaran ON `pelanggaran`.`id` = `datapelanggaran`.`id_jenis` WHERE `datapelanggaran`.`barcode`='$barcode'";
	$result1 = $mysqli->query($query1);
	if($result1->num_rows>0){
		while($ch=$result1->fetch_array(MYSQLI_ASSOC)){
			$arr["tarif"]=intval($ch['tarif']);
		}
	}
	else $arr['tarif']=0;

	echo json_encode($arr);
?>