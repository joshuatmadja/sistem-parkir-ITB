<?php include "header.php" ?>
<?php
	$barcode = "";
	for($i = 1; $i <= 20; $i++){
		$barcode = $barcode . strval(rand(0,9));
	}
	$query = "SELECT * FROM transaksi where barcode='$barcode'";
	while($mysqli-> query($query)->num_rows>0){
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
			<div class="col-md-12 subtitle mg-t10 mg-b60">Kendaraan Masuk Dosen</div>
		</div>
		<div id="message"></div>
		<form id="form-input" method="get" action="proses-masuk-dosen.php">
			<div class="row">
				<div class="col-md-offset-3 col-md-2">
					<div class="input-label">Barcode</div>
				</div>
				<div class="col-md-4">
					<input class="form-control" type="text" name="barcode" id="barcode" value=<?= $barcode ?> readonly></div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-2">
					<div class="input-label">NIP</div>
				</div>
				<div class="col-md-4">
					<input class="form-control" type="text" name="nip" id="nip"></div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-2">
					<div class="input-label">Nomor Plat</div>
				</div>
				<div class="col-md-2">
					<input class="form-control" style="font-weight:bold;" type="text" name="noplat" id="noplat" readonly="true"></div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-2">
					<div class="input-label">Lokasi Parkir</div>
				</div>
				<div class="col-md-2">
					<input class="form-control" style="font-weight:bold;" type="text" name="parkir" id="parkir" readonly="true"></div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-2">
					<div class="input-label">Jam Masuk</div>
				</div>
				<div class="col-md-2">
					<input class="form-control" type="text" name="jam-masuk" id="jam-masuk" readonly="true"></div>
			</div>
			<div class="row mg-t60 mg-b60">
				<div class="btn blue-button center col-md-offset-5 col-md-2 col-md-offset-5" id="btn-submit">Submit</div>
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
	$('#nip').on('keyup',function (){
		var setInput = function(a,b){
			$('#noplat').val(a);
			$('#parkir').val(b);
		}
		$.ajax({url:"find-dosen.php?id="+$(this).val(), success: function(result){
				if(result.length > 0){
					var json = JSON.parse(result);
					console.log(json);
					setInput(json.noplat,json.nama);
				}
				else{
					setInput("","");
				}
			}
		});
	});

	$('#btn-submit').on('click',function(){
		$('#form-input').submit();
	});
</script>
<?php include "footer.php" ?>