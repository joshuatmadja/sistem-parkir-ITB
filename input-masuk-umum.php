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
			<div class="col-xs-12 title">Sistem Parkir ITB</div>
			<div class="col-xs-12 subtitle mg-t10 mg-b60">Kendaraan Masuk Umum</div>
		</div>
		<div id="message"></div>
		<form id="form-input" method="" ="get" action="proses-masuk-umum.php">
			<div class="row">
				<div class="col-xs-offset-3 col-xs-2">
					<div class="input-label">Barcode</div>
				</div>
				<div class="col-xs-4">
					<input class="form-control" type="text" name="barcode" id="barcode" value=<?= $barcode ?> readonly></div>
			</div>
			<div class="row">
				<div class="col-xs-offset-3 col-xs-2">
					<div class="input-label">Nomor Plat</div>
				</div>
				<div class="col-xs-2">
					<input class="form-control" type="text" name="noplat" id="noplat"></div>
			</div>
			<div class="row">
				<div class="col-xs-offset-3 col-xs-2">
					<div class="input-label">Jam Masuk</div>
				</div>
				<div class="col-xs-2">
					<input class="form-control" type="text" name="jam-masuk" id="jam-masuk" readonly></div>
			</div>
			<div class="row">
				<div class="col-xs-offset-3 col-xs-2">
					<div class="input-label">Lokasi Parkir</div>
				</div>
				<div class="col-xs-3">
					<select class="form-control" name="lokasi" id="lokasi">
						<option>Parkiran Sipil</option>
						<option>Parkiran Seni Rupa</option>
						<option>Parkiran Sasana Olahraga Ganesha</option>
					</select>
				</div>
			</div>
			<div class="row mg-t60 mg-b60">
				<div class="btn blue-button center col-xs-offset-5 col-xs-2 col-xs-offset-5" id="btn-submit">Submit</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script>
	$(document).ready(function(){
		var toSeconds = function(s){
			var b = s.split(':');
			return b[0]*3600 + b[1]*60 + b[2]*1 ;
		};
		var setTime= setInterval(function(){
			var d = new Date();
			$('#jam-masuk').val(d.toTimeString().split(' ')[0]);
			
		},1000);

	});

	$('#btn-submit').on('click',function(){
		$('#form-input').submit();
	});
</script>
<?php include "footer.php" ?>