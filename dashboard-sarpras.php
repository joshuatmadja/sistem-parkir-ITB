<?php include "header.php" ?>
<div class="full bgcolor"></div>
<div class="full">
	<div class="container pd-t60">
		<div class="row center">
			<div class="col-md-12 title">Sistem Parkir ITB</div>
			<div class="col-md-12 subtitle mg-t10 mg-b60">Selamat datang, manajer Sarana Prasarana ITB</div>
		</div>
		<div class="row">
			<div class="btn big-button blue-button center col-md-offset-2 col-md-8 col-md-offset-2" id="btn-pendapatan">Lihat pendapatan per bulan</div>
		</div>
		<div class="row">
			<div class="btn big-button magenta-button mg-t40 center col-md-offset-2 col-md-8 col-md-offset-2" id="btn-distribusi">Lihat distribusi parkir</div>
		</div>
		<div class="row mg-t60 mg-b60">
			<div class="btn red-button center col-md-offset-5 col-md-2 col-md-offset-5" id="btn-logout">Log out</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script>
		$('#btn-logout').on('click',function(){
			window.location.href = "index.php";
		});

		$('#btn-pendapatan').on('click', function(){
			window.location.href = "query-pendapatan.php";
		});

		<?php
			$d = intval(date('m'));
			$t = intval(date('Y'));

		?>
		$('#btn-distribusi').on('click', function(){
			window.location.href = "<?php echo 'lihat-distribusi.php?bulan='.$d.'&tahun='.$t ?>";
		});

	</script>
<?php include "footer.php" ?>