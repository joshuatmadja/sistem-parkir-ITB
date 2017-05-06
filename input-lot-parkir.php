<?php include "header.php" ?>
<div class="full bgcolor"></div>
<div class="full">
	<div class="container pd-t60">
		<div class="row center">
			<div class="col-xs-12 title">Sistem Parkir ITB</div>
			<div class="col-xs-12 subtitle mg-t10 mg-b60">Kontrol Lot Parkir</div>
		</div>
		<form id="form-input" method="get" action="proses-pelanggaran.php">
			<div class="row">
				<div class="col-xs-offset-3 col-xs-2">
					<div class="input-label">Nama Petugas</div>
				</div>
				<div class="col-xs-4">
					<input class="form-control" type="text" name="noplat" id="noplat"></div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-2">
					<div class="input-label">Daerah Tugas</div>
				</div>
				<div class="col-md-2">
					<select class="form-control" name="area" id="area">
						<option></option>
						<?php
							$query = "SELECT * FROM area";
							$result = $mysqli->
						query($query);
							while($ch = $result->fetch_array(MYSQLI_ASSOC)){
								echo '<option value='.$ch['id'].'>'.$ch['nama'].'</option>
						';
							}
						?>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-offset-3 col-xs-2">
					<div class="input-label">Kapasitas</div>
				</div>
				<div class="col-xs-2">
					<input class="form-control" type="text" name="kapasitas" id="kapasitas" readonly></div>
			</div>
			<div class="row">
				<div class="col-xs-offset-3 col-xs-2">
					<div class="input-label">Sisa</div>
				</div>
				<div class="col-xs-2">
					<input class="form-control" type="text" name="sisa" id="sisa" readonly></div>
			</div>
			
			<div class="row mg-t60 center">
				<div class="btn big-button blue-button center col-md-offset-4 col-xs-2 " id="btn-masuk">MASUK</div>
				<div class="btn big-button orange-button center col-xs-2" id="btn-keluar">KELUAR</div>
			</div>

			<div class="row mg-t60 center">
				<div class="btn red-button center col-xs-offset-5 col-xs-2" id="btn-kembali">kembali</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script>
		$('#btn-kembali').on('click',function(){
			window.location.href = "dashboard-satpam.php";
		});

		$('#area').on('change',function(){
			var setKapasitas = function(a,b){
				$('#kapasitas').val(a);
				$('#sisa').val(b);
			}
			$.ajax({url:"cek-lot.php?zona="+$(this).val(), success: function(result){
				if(result.length>0){
					var json = JSON.parse(result);
					kapasitas = json.kapasitas;
					sisa = json.sisa;
					setKapasitas(kapasitas,sisa);
				}
				else{
					setKapasitas(0,0);
				}
			}

			});
		});

		$('#btn-keluar').on('click',function(){
			$.ajax({url:"find-pelanggaran.php?id="+$('#area').val(), success: function(result){
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