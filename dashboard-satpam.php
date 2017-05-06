<?php include "header.php" ?>
<div class="full bgcolor"></div>
<div class="full">
	<div class="container pd-t60">
		<div class="row center">
			<div class="col-md-12 title">Sistem Parkir ITB</div>
			<div class="col-md-12 subtitle mg-t10 mg-b60">Selamat datang, satpam</div>
		</div>
		<div class="row">
			<div class="btn big-button blue-button center col-md-offset-2 col-md-8 col-md-offset-2" id="btn-input-lot">Input lot parkir</div>
		</div>
		<div class="row">
			<div class="btn big-button magenta-button mg-t40 center col-md-offset-2 col-md-8 col-md-offset-2" id="btn-lapor-pelanggaran">Laporan pelanggaran</div>
		</div>
		<div class="row mg-t60 mg-b60">
			<div class="btn red-button center col-md-offset-5 col-md-2 col-md-offset-5" id="btn-logout">Log out</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script>

		$('#btn-input-lot').on('click',function(){
			window.location.href = "input-lot-parkir.php";
		});
		
		$('#btn-lapor-pelanggaran').on('click',function(){
			window.location.href = "input-pelanggaran.php";
		});

		$('#btn-logout').on('click',function(){
			window.location.href = "index.php";
		})
	</script>
<?php include "footer.php" ?>