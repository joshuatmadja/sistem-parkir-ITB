<?php
	include 'connect.php';
	echo 'masuk';
	$barcode = $_GET['barcode'];
	$jam_keluar = $_GET['jam-keluar'];
	$total = $_GET['biaya'];

	$queryupdate = "UPDATE transaksi_mahasiswa SET jam_keluar='$jam_keluar' WHERE barcode='$barcode'";
	$queryupdate2 = "UPDATE transaksi SET total='$total' WHERE barcode='$barcode'";
	

	$res = $mysqli->query($queryupdate);
	echo 'lolos 1';
	$res = $mysqli->query($queryupdate2);
	echo 'lolos 2';

	header('Location:dashboard-admin.php?status=2');
?>