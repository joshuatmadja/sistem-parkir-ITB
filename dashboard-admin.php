<?php include "header.php" ?>
<div class="full bgcolor"></div>
<div class="full">
	<div class="container pd-t60">
		<div class="row center">
			<div class="col-md-12 title">Sistem Parkir ITB</div>
			<div class="col-md-12 subtitle mg-t10 mg-b60">Selamat datang, administrator</div>
		</div>
		<div class="row">
			<div class="btn big-button blue-button center col-md-offset-2 col-md-8 col-md-offset-2" id="btn-masuk-mahasiswa">Kendaraan Masuk Mahasiswa</div>
		</div>
		<div class="row">
			<div class="btn big-button blue-button mg-t10 center col-md-offset-2 col-md-8 col-md-offset-2" id="btn-keluar-mahasiswa">Kendaraan Keluar Mahasiswa</div>
		</div>
		<div class="row">
			<div class="btn big-button magenta-button mg-t10 center col-md-offset-2 col-md-8 col-md-offset-2" id="btn-masuk-umum">Kendaraan Masuk Umum</div>
		</div>
		<div class="row">
			<div class="btn big-button magenta-button mg-t10 center col-md-offset-2 col-md-8 col-md-offset-2" id="btn-keluar-umum">Kendaraan Keluar Umum</div>
		</div>
		<div class="row mg-t60 mg-b60">
			<div class="btn red-button center col-md-offset-5 col-md-2 col-md-offset-5" id="btn-logout">Log out</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script>
		$('#btn-masuk-umum').on('click',function(){
			window.location.href = "input-masuk-umum.php";
		});

		$('#btn-masuk-mahasiswa').on('click',function(){
			window.location.href = "input-masuk-mahasiswa.php";
		});

		$('#btn-keluar-mahasiswa').on('click',function(){
			window.location.href = "input-keluar-mahasiswa.php";
		});

		$('#btn-keluar-umum').on('click',function(){
			window.location.href = "input-keluar-umum.php";
		});

		$('#btn-logout').on('click',function(){
			window.location.href = "index.php";
		})
	</script>
<?php include "footer.php" ?>