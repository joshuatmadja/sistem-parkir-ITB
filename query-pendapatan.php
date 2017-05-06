<?php include "header.php" ?>
<div class="full bgcolor"></div>
<div class="full">
	<div class="container pd-t60">
		<div class="row center">
			<div class="col-md-12 title">Sistem Parkir ITB</div>
			<div class="col-md-12 subtitle mg-t10 mg-b60">Lihat pendapatan</div>
		</div>
		<form id="form-input" method="get" action="lihat-pendapatan.php">
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
			<div class="row mg-t60 mg-b60">
				<div class="btn blue-button center col-md-offset-5 col-md-2 col-md-offset-5" id="btn-lihat">Lihat</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script>
		$('#btn-lihat').on('click',function(){
			$('#form-input').submit();
		});
	</script>
<?php include "footer.php" ?>