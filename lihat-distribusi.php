<?php include "header.php" ?>
<?php
	$bulan = $_GET['bulan'];
	$tahun = $_GET['tahun'];
	$kalender = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

	$query = "SELECT * FROM area";

	$res = $mysqli->query($query);
?>
<div class="full bgcolor"></div>
<div class="full">
	<div class="container pd-t60">
		<div class="row center">
			<div class="col-md-12 title">Sistem Parkir ITB</div>
			<div class="col-md-12 subtitle mg-t10 mg-b60">Lihat distribusi parkir bulan <?= $kalender[$bulan-1] ?> tahun <?= $tahun ?></div>
		</div>
		<form id="form-input" method="get" action="lihat-distribusi.php">
			<div class="row">
				<div class="col-md-offset-3 col-md-2">
					<div class="input-label">Bulan</div>
				</div>
				<div class="col-md-3">
					<select class="form-control" name="bulan" id="bulan">
						<option></option>
						<option value="1">Januari</option>		
						<option value="2">Februari</option>	
						<option value="3">Maret</option>	
						<option value="4">April</option>	
						<option value="5">Mei</option>	
						<option value="6">Juni</option>	
						<option value="7">Juli</option>	
						<option value="8">Agustus</option>	
						<option value="9">September</option>	
						<option value="10">Oktober</option>	
						<option value="11">November</option>	
						<option value="12">Desemeber</option>	
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-2">
					<div class="input-label">Tahun</div>
				</div>
				<div class="col-md-2">
					<input class="form-control" type="text" name="tahun" id="tahun" value="2017"></div>
			</div>
			<div class="row mg-t10 mg-b20">
				<div class="btn blue-button center col-md-offset-5 col-md-2 col-md-offset-5" id="btn-lihat">Lihat</div>
			</div>
		</form>
		<hr>
		<?php
			if($res->num_rows>0){
			while($ch = $res->fetch_array(MYSQLI_ASSOC)){
		?>
			<div class="row mg-t10">
				<div class="col-md-offset-4 col-md-2">
					<div class="input-label"><?= $ch['nama']?></div>
				</div>
				<div class="col-md-2">
				<?php
					$zone = $ch["id"];
					$q = "SELECT COUNT(`status`) as c FROM `logparkir` WHERE `status`=1 and `id_area`='$zone' and MONTH(`tanggal`)='$bulan' and YEAR(`tanggal`)='$tahun'";
					if($t = $mysqli->query($q)->fetch_array(MYSQLI_ASSOC)){
				?>
					<input class="form-control" type="text" value=<?php echo $t['c']; ?> disabled></div>
				<?php } ?>
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
		$(document).ready(function(){
			$('#bulan').val(<?= $bulan ?>);
		});

		$('#btn-kembali').on('click',function(){
			window.location.href = "dashboard-sarpras.php";
		});

		$('#btn-lihat').on('click',function(){
			$('#form-input').submit();
		});
	</script>
<?php include "footer.php" ?>