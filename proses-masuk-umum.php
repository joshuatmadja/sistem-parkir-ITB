<?php
	include 'connect.php';
	echo 'masuk';
	$barcode = $_GET['barcode'];
	$jam_masuk = $_GET['jam-masuk'];
	$noplat = $_GET['noplat'];
	$tgl = date("Y-m-d");

	$queryselect = "SELECT * FROM kendaraan WHERE noplat='$noplat'";
	while($c = $mysqli->query($queryselect)->fetch_array(MYSQLI_ASSOC)){
		$kelas = $c['kelas'];
		break;
	}
	$queryinsert = "INSERT INTO transaksi (`barcode`,`tanggal`,`kelas`) VALUES ('$barcode', '$tgl', '$kelas')";
	
	$res = $mysqli->query($queryinsert);
	echo 'lolos 1';

	$queryselect = "SELECT * FROM umum WHERE noplat='$noplat'";
	while($c = $mysqli->query($queryselect)->fetch_array(MYSQLI_ASSOC)){
		$id_tamu = $c['id'];
		break;
	}

	$queryinsert2 = "INSERT INTO transaksi_umum (`barcode`,`id_umum`,`jam_masuk`) VALUES ('$barcode', '$id_tamu' ,'$jam_masuk')";

	$res = $mysqli->query($queryinsert2);
	echo 'lolos 2';

	header('Location:dashboard-admin.php?status=3');
?>