<?php include "header.php" ?>
<div class="full bgcolor"></div>
<div class="full">
	<div class="container pd-t60">
		<div class="row center">
			<div class="col-md-12 title">Sistem Parkir ITB</div>
			<div class="col-md-12 subtitle mg-t10 mg-b60">Selamat datang, administrator gerbang utama</div>
		</div>
		<div class="row">
			<div class="btn big-button blue-button center col-md-offset-2 col-md-8 col-md-offset-2" id="btn-masuk-dosen">Kendaraan Masuk dosen &amp; staff</div>
		</div>
		<div class="row">
			<div class="btn big-button blue-button mg-t10 center col-md-offset-2 col-md-8 col-md-offset-2" id="btn-keluar-dosen">Kendaraan Keluar dosen &amp; staff</div>
		</div>
		<div class="row">
			<div class="btn big-button magenta-button mg-t10 center col-md-offset-2 col-md-8 col-md-offset-2" id="btn-masuk-tamu">Kendaraan Masuk tamu</div>
		</div>
		<div class="row">
			<div class="btn big-button magenta-button mg-t10 center col-md-offset-2 col-md-8 col-md-offset-2" id="btn-keluar-tamu">Kendaraan Keluar tamu</div>
		</div>
		<div class="row mg-t60 mg-b60">
			<div class="btn red-button center col-md-offset-5 col-md-2 col-md-offset-5" id="btn-logout">Log out</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script>
		$('#btn-masuk-tamu').on('click',function(){
			window.location.href = "input-masuk-tamu.php";
		});

		$('#btn-masuk-dosen').on('click',function(){
			window.location.href = "input-masuk-dosen.php";
		});

		$('#btn-logout').on('click',function(){
			window.location.href = "index.php";
		})
	</script>
<?php include "footer.php" ?>