<?php
include '../koneksi.php';

$id = $_POST['rowid'];
$sql =  mysqli_query($conn, "SELECT * FROM tb_pengajuan WHERE id_pengajuan = '$id'");
$data = mysqli_fetch_array($sql);
?>
<div class="row">
	<div class="col-md-12">
		<div class="owl-carousel owl-theme slider" id="slider2">
			<div>
				<img alt="image" src="assets/images/berkas/<?php echo $data['fc_ktp'];?>">
				<div class="slider-caption">
					<div class="slider-title">Fotocopy KTP</div>
				</div>
			</div>
			<!-- <div>
				<img alt="image" src="../assets/images/berkas/<?php echo $data['fc_pbb'];?>">
				<div class="slider-caption">
					<div class="slider-title">Fotocopy PBB</div>
				</div>
			</div>
			<div>
				<img alt="image" src="../assets/images/berkas/<?php echo $data['fc_sppt'];?>">
				<div class="slider-caption">
					<div class="slider-title">Fotocopy SPPT</div>
				</div>
			</div>
			<div>
				<img alt="image" src="../assets/images/berkas/<?php echo $data['fc_tanah'];?>">
				<div class="slider-caption">
					<div class="slider-title">Fotocopy Sertifiat Tanah</div>
				</div>
			</div> -->
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#slider2").owlCarousel({
		items: 1,
		nav: true,
		navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>']
	});
</script>