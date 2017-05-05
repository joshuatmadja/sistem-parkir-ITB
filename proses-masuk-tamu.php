<?php
	include 'connect.php';
	echo 'masuk';
	$barcode = $_GET['barcode'];
	$ktp = $_GET['ktp'];
	$jam_masuk = $_GET['jam-masuk'];
	$noplat = $_GET['noplat'];
	$lokasi = $_GET['lokasi'];
	$tgl = date("Y-m-d");

	$queryselect = "SELECT * FROM kendaraan WHERE noplat='$noplat'";
	while($c = $mysqli->query($queryselect)->fetch_array(MYSQLI_ASSOC)){
		$kelas = $c['kelas'];
		break;
	}
	$queryinsert = "INSERT INTO transaksi (`barcode`,`tanggal`,`kelas`) VALUES ('$barcode', '$tgl', '$kelas')";
	$queryinsert2 = "INSERT INTO transaksi_tamu (`barcode`,`id_pengenal`,`jam_masuk`) VALUES ('$barcode', '$ktp', '$jam_masuk')";

	$res = $mysqli->query($queryinsert);
	echo 'lolos 1';
	$res = $mysqli->query($queryinsert2);
	echo 'lolos 2';

	header('Location:dashboard-admin-gerbangutama.php');
?>