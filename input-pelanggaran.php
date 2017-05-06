<?php include "header.php" ?>
<div class="full bgcolor"></div>
<div class="full">
	<div class="container pd-t60">
		<div class="row center">
			<div class="col-xs-12 title">Sistem Parkir ITB</div>
			<div class="col-xs-12 subtitle mg-t10 mg-b60">Laporkan pelanggaran</div>
		</div>
		<form id="form-input" method="get" action="proses-pelanggaran.php">
			<div class="row">
				<div class="col-xs-offset-3 col-xs-2">
					<div class="input-label">No. Plat</div>
				</div>
				<div class="col-xs-2">
					<input class="form-control" type="text" name="noplat" id="noplat"></div>
			</div>
			<div class="row">
				<div class="col-xs-offset-3 col-xs-2">
					<div class="input-label">Barcode</div>
				</div>
				<div class="col-xs-4">
					<input class="form-control" type="text" name="barcode" id="barcode" readonly></div>
			</div>
			<div class="row">
				<div class="col-xs-offset-3 col-xs-2">
					<div class="input-label">Jenis</div>
				</div>
				<div class="col-xs-2">
					<input class="form-control" type="text" name="jenis" id="jenis" readonly></div>
			</div>
			<div class="row">
				<div class="col-xs-offset-3 col-xs-2">
					<div class="input-label">No. HP</div>
				</div>
				<div class="col-xs-2">
					<input class="form-control" type="text" name="nohp" id="nohp" readonly></div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-2">
					<div class="input-label">Lokasi Parkir</div>
				</div>
				<div class="col-md-3">
					<select class="form-control" name="pelanggaran" id="pelanggaran">
						<?php
							$query = "SELECT * FROM pelanggaran";
							$result = $mysqli->query($query);
							while($ch = $result->fetch_array(MYSQLI_ASSOC)){
								echo '<option value='.$ch['id'].'>'.$ch['jenis'].'</option>';
							}
						?>
					</select>
				</div>
			</div>
			<div class="row mg-t60">
				<div class="btn big-button blue-button center col-xs-offset-2 col-xs-8 col-xs-offset-2" id="btn-bisa">Bisa dihubungi</div>
			</div>
			<div class="row mg-t10">
				<div class="btn big-button red-button center col-xs-offset-2 col-xs-8 col-xs-offset-2" id="btn-tidak-bisa">Tidak Bisa dihubungi</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script>
		$('#btn-bisa').on('click',function(){
			window.location.href = "dashboard-satpam.php?status=1";
		});

		$('#noplat').on('keyup',function (){
			var setInput = function(a,b,c){
				$('#barcode').val(a);
				$('#jenis').val(b);
				$('#nohp').val(c);
			}
			$.ajax({url:"find-pelanggaran.php?id="+$(this).val(), success: function(result){
					console.log(result);
					
					if(result.length > 0){
						var json = JSON.parse(result);
						console.log(json);
						barcode = json.barcode;
						jenis = json.jenis;
						nohp = json.no_hp;
						setInput(barcode, jenis, nohp);
					}
					else{
						setInput("","","");
					}
				}
			});
		});

		$('#btn-tidak-bisa').on('click',function(){
			$('#form-input').submit();
		})
	</script>
<?php include "footer.php" ?>