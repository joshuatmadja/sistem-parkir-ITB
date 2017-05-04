<?php include "header.php" ?>
<?php
	$barcode = "";
	for($i = 1; $i <= 20; $i++){
		$barcode = $barcode . strval(rand(0,9));
	}
	$query = "SELECT * FROM transaksi where barcode='$barcode'";
	while($mysqli->query($query)->num_rows>0){
		$barcode = "";
		for($i = 1; $i <= 20; $i++){
			$barcode = $barcode . (string) rand(0,9);
		}
	}
?>
<div class="full bgcolor"></div>
<div class="full">
	<div class="container pd-t60">
		<div class="row center">
			<div class="col-md-12 title">Sistem Parkir ITB</div>
			<div class="col-md-12 subtitle mg-t10 mg-b60">Kendaraan Masuk Umum</div>
		</div>
		<div id="message"></div>
		<form name="masukumum" action="get" action="mid/umum-in.php">
			<div class="row">
				<div class="col-md-offset-3 col-md-2">
					<div class="input-label">Barcode</div>
				</div>
				<div class="col-md-4">
					<input class="form-control" type="text" name="barcode" id="barcode" value=<?= $barcode ?> disabled></div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-2">
					<div class="input-label">Nomor Plat</div>
				</div>
				<div class="col-md-2">
					<input class="form-control" type="text" name="noplat" id="noplat"></div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-2">
					<div class="input-label">Jam Masuk</div>
				</div>
				<div class="col-md-2">
					<input class="form-control" type="text" name="jam-masuk" id="jam-masuk" disabled="true"></div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-2">
					<div class="input-label">Lokasi Parkir</div>
				</div>
				<div class="col-md-2">
					<select class="form-control" name="lokasi" id="lokasi">
						<option>Parkiran Sipil</option>
						<option>Parkiran Seni Rupa</option>
						<option>Parkiran Sasana Olahraga Ganesha</option>
					</select>
				</div>
			</div>
			<div class="row mg-t60 mg-b60">
				<div class="btn blue-button center col-md-offset-5 col-md-2 col-md-offset-5" id="btn-submit">Submit</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script>
	var d = new Date();
	$('#jam-masuk').val(d.getHours()+":"+d.getMinutes());

	$('#btn-submit').on('click',function(){
		window.location.href = "dashboard-admin.php?status=3";
	});
</script>
<?php include "footer.php" ?>