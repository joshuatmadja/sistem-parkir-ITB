<?php include "header.php" ?>
<?php
	$id_area = $_GET['id'];
	$kalender = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

	$query = "SELECT * FROM area";

	$res = $mysqli->query($query);
?>
<div class="full bgcolor"></div>
<div class="full">
	<div class="container pd-t60">
		<div class="row center">
			<div class="col-md-12 title">Sistem Parkir ITB</div>
			<div class="col-md-12 subtitle mg-t10 mg-b60">Lihat alokasi lot parkir</div>
		</div>
		<?php
			if($res->num_rows>0){
			while($ch = $res->fetch_array(MYSQLI_ASSOC)){
		?>
			<div class="row mg-t10">
				<div class="col-md-offset-4 col-md-2">
					<div class="input-label"><?= $ch['nama'] ?></div>
				</div>
				<div class="col-md-2">
				<?php
					$area = $ch['id'];
					$query3 = "SELECT * FROM area WHERE `id`='$area'";
					$result = $mysqli->query($query3);
					while($ch = $result->fetch_array(MYSQLI_ASSOC)){
						$kap = intval($ch['kapasitas']);
						$nama = $ch['nama'];
						$arr["kapasitas"]=intval($ch['kapasitas']);
					}

					$query2 = "SELECT SUM(`status`) as occupied FROM logparkir WHERE `id_area`='$area'";
					$result = $mysqli->query($query2);
					while($x = $result->fetch_array(MYSQLI_ASSOC)){
						$sisa = intval($x['occupied']); break;
					}

					$tersedia = $kap - $sisa;

				?>
				<input class="form-control" type="text" value=<?php echo $tersedia; ?> disabled></div></div>
				<?php } ?>
			</div>
			

		<?php } else{ ?>
			<div class="row mg-t30 center subtitle">Data tidak tersedia</div>
		<?php } ?> 
		<div class="row mg-t60 mg-b60">
				<div class="btn red-button center col-md-offset-4 col-md-4 col-md-offset-4" id="btn-kembali">Kembali</div>
			</div>
	</div>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script>
	

		$('#btn-kembali').on('click',function(){
			window.location.href = "<?php echo "alokasi-parkir.php?area=".$id_area; ?>";
		});

		$('#btn-lihat').on('click',function(){
			$('#form-input').submit();
		});
	</script>
<?php include "footer.php" ?>