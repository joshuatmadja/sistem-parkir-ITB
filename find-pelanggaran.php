<?php
	include 'connect.php';
	$id = $_GET['id'];
	$arr = array();
	$barcode = 0;

	$query = "SELECT * FROM kendaraan JOIN mahasiswa JOIN transaksi_mahasiswa ON `transaksi_mahasiswa`.`nim` = `mahasiswa`.`nim` and `mahasiswa`.`noplat` = `kendaraan`.`noplat` WHERE `kendaraan`.`noplat` = '$id'";
	$result = $mysqli->query($query);
	if($result->num_rows>0){
		while($ch=$result->fetch_array(MYSQLI_ASSOC)){
			$arr["barcode"] = $ch['barcode'];
			$arr["jenis"]=$ch['jenis'];
			$arr["no_hp"]=$ch['nohp'];
			//$barcode = $ch['barcode'];
			//echo $barcode;
		}
	}

	$query = "SELECT * FROM kendaraan JOIN tamu JOIN transaksi_tamu ON `transaksi_tamu`.`id_pengenal` = `tamu`.`id` and `tamu`.`noplat` = `kendaraan`.`noplat` WHERE `kendaraan`.`noplat` = '$id'";
	$result = $mysqli->query($query);
	if($result->num_rows>0){
		while($ch=$result->fetch_array(MYSQLI_ASSOC)){
			$arr["barcode"] = $ch['barcode'];
			$arr["jenis"]=$ch['jenis'];
			$arr["no_hp"]=$ch['nohp'];
			//$barcode = $ch['barcode'];
			//echo $barcode;
		}
	}

	$query = "SELECT * FROM kendaraan JOIN dosen JOIN transaksi_dosen ON `transaksi_dosen`.`nip` = `dosen`.`nip` and `dosen`.`noplat` = `kendaraan`.`noplat` WHERE `kendaraan`.`noplat` = '$id'";
	$result = $mysqli->query($query);
	if($result->num_rows>0){
		while($ch=$result->fetch_array(MYSQLI_ASSOC)){
			$arr["barcode"] = $ch['barcode'];
			$arr["jenis"]=$ch['jenis'];
			$arr["no_hp"]=$ch['nohp'];
			//$barcode = $ch['barcode'];
			//echo $barcode;
		}
	}

	$query = "SELECT * FROM kendaraan JOIN umum JOIN transaksi_umum ON `transaksi_umum`.`id_umum` = `umum`.`id` and `umum`.`noplat` = `kendaraan`.`noplat` WHERE `kendaraan`.`noplat` = '$id'";
	$result = $mysqli->query($query);
	if($result->num_rows>0){
		while($ch=$result->fetch_array(MYSQLI_ASSOC)){
			$arr["barcode"] = $ch['barcode'];
			$arr["jenis"]=$ch['jenis'];
			$arr["no_hp"]=$ch['nohp'];
			//$barcode = $ch['barcode'];
			//echo $barcode;
		}
	}
	//print_r($arr);
	//echo $barcode;
	// $query1 = "SELECT * FROM datapelanggaran JOIN pelanggaran ON `pelanggaran`.`id` = `datapelanggaran`.`id_jenis` WHERE `datapelanggaran`.`barcode`='$barcode'";
	// $result1 = $mysqli->query($query1);
	// if($result1->num_rows>0){
	// 	while($ch=$result1->fetch_array(MYSQLI_ASSOC)){
	// 		$arr["tarif"]=intval($ch['tarif']);
	// 	}
	// }
	// else $arr['tarif']=0;

	echo json_encode($arr);
?>