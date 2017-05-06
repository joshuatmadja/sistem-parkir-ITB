<?php include "header.php" ?>
<?php
	$area = $_GET['area'];
	$kalender = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

	$query3 = "SELECT * FROM area WHERE `id`='$area'";
	$result = $mysqli->query($query3);
	while($ch = $result->fetch_array(MYSQLI_ASSOC)){
		$kap = intval($ch['kapasitas']);
		$nama = $ch['nama'];
		$arr["kapasitas"]=intval($ch['kapasitas']);
	}

	$query2 = "SELECT SUM(`status`) as occupied FROM logparkir WHERE `id_area`='$area'";
	$result = $mysqli->query($query2);
	while($ch = $result->fetch_array(MYSQLI_ASSOC)){
		$sisa = intval($ch['occupied']); break;
	}

	$tersedia = $kap - $sisa;
?>
<div class="full bgcolor"></div>
<div class="full">
	<div class="container pd-t60">
		<div class="row center">
			<div class="col-md-12 title">Sistem Parkir ITB</div>
			<div class="col-md-12 subtitle mg-t10 mg-b60">Alokasi Parkir Tersedia di <?= $nama ?></div>
		</div>
			<div class="row center mg-t30">
				<div class="col-md-12 title">
					Tersedia <?= $tersedia ?> lahan lagi
				</div>
			</div>
			
			<div class="row mg-t60 mg-b20">
				<div class="btn big-button blue-button center col-md-offset-4 col-md-4" id="btn-parkir">Parkir</div>
			</div>

		<div class="row mg-t10 mg-b60">
				<div class="btn orange-button center col-md-offset-4 col-md-4 col-md-offset-4" id="btn-zona-lain">Lihat Zona Lainnya</div>
			</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script>

		$('#btn-zona-lain').on('click',function(){
			window.location.href = "<?php echo "lihat-alokasi-parkir.php?id=".$area; ?>";
		});

		$('#btn-parkir').on('click',function(){
			window.location.href = "dashboard-admin-gerbangutama.php";
		});
	</script>
<?php include "footer.php" ?>