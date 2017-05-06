<?php include "header.php" ?>
<?php
	$bulan = $_GET['bulan'];
	$tahun = $_GET['tahun'];
	$kalender = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
	$query = "SELECT `kelas`,SUM(`total`) as `totalT` FROM `transaksi` WHERE MONTH(`tanggal`)='$bulan' AND YEAR(`tanggal`)='$tahun' GROUP BY `kelas`";

	$res = $mysqli->query($query);
?>
<div class="full bgcolor"></div>
<div class="full">
	<div class="container pd-t60">
		<div class="row center">
			<div class="col-md-12 title">Sistem Parkir ITB</div>
			<div class="col-md-12 subtitle mg-t10 mg-b60">Lihat pendapatan bulan <?= $kalender[$bulan-1] ?> tahun <?= $tahun ?></div>
		</div>
		<?php
			if($res->num_rows>0){
			while($ch = $res->fetch_array(MYSQLI_ASSOC)){
		?>
			<div class="row mg-t10">
				<div class="col-md-offset-3 col-md-2">
					<div class="input-label"><?= $ch['kelas']?></div>
				</div>
				<div class="col-md-4">
					<input class="form-control" type="text" value=<?php echo $ch['totalT']; ?> disabled></div>
			</div>
			

		<?php } } else{ ?>
		<div class="row mg-t30 center subtitle">Data tidak tersedia</div>
		<?php } ?> 
		<div class="row mg-t60 mg-b60">
				<div class="btn red-button center col-md-offset-4 col-md-4 col-md-offset-4" id="btn-kembali">Kembali ke dashboard</div>
			</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script>
		$('#btn-kembali').on('click',function(){
			window.location.href = "dashboard-sarpras.php";
		});
	</script>
<?php include "footer.php" ?>