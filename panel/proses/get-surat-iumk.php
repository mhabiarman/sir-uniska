<?php
include '../../koneksi.php';

$id = $_POST['rowid'];
$sql =  mysqli_query($conn, "SELECT * FROM tb_surat_iumk WHERE id_surat_iumk = '$id'");
$data = mysqli_fetch_array($sql);
?>
<div class="row">
	<div class="col-md-12">
		<div class="owl-carousel owl-theme slider" id="slider2">
			<div>
				<img alt="image" src="../assets/images/berkas/<?php echo $data['fc_ktp'];?>">
				<div class="slider-caption">
					<div class="slider-title">Fotocopy KTP</div>
				</div>
			</div>
			<div>
				<img alt="image" src="../assets/images/berkas/<?php echo $data['fc_kk'];?>">
				<div class="slider-caption">
					<div class="slider-title">Fotocopy Kartu Keluarga</div>
				</div>
			</div>
			<div>
				<img alt="image" src="../assets/images/berkas/<?php echo $data['fc_foto'];?>">
				<div class="slider-caption">
					<div class="slider-title">Foto (4x6)</div>
				</div>
			</div>
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