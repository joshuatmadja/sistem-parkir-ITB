<?php
	include 'connect.php';
	echo 'masuk';
	$barcode = $_GET['barcode'];
	$jenis = $_GET['pelanggaran'];

	$queryinsert = "INSERT INTO datapelanggaran (`id_jenis`,`barcode`) VALUES ('$jenis','$barcode')";
	

	$res = $mysqli->query($queryinsert);
	echo 'lolos 1';
	

	header('Location:dashboard-satpam.php?status=3');
?>