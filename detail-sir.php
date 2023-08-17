<?php include 'koneksi.php'; ?>
<?php
if(!isset($_SESSION['userid'])) {
	header("Location: masuk");
}
?>
<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tb_pengajuan, tb_pemohon WHERE tb_pemohon.id_pemohon=tb_pengajuan.id_pemohon AND id_pengajuan = '$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'menu/head.php'; ?>
	<link rel="stylesheet" type="text/css" href="assets/dist-2/css/comment.css">
</head>
<body>
	<div class="container pt-5 pb-4">
		<?php include 'menu/header.php'; ?>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<?php include 'menu/nav.php'; ?>
	</nav>

	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/dist-2/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<h1 class="mb-3 bread">Detail Pembuatan Surat Penilaian Barang</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo $baseurl;?>">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Detail Pembuatan Surat Penilaian Barang <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-12">
					<div class="row justify-content-start py-5">
						<div class="col-md-12 heading-section ftco-animate">
							<h6>Data Pemohon</h6>
							<div class="table-responsive">
								<table style="width: 100%;">
									<tbody>
										<tr>
											<th style="width: 25%;">Nama Lengkap</th>
											<th style="width: 5%;">:</th>
											<th style="width: 70%;"><?php echo $row['nama_lengkap'];?></th>
										</tr>
										<tr>
											<th>NIK</th>
											<th>:</th>
											<th><?php echo $row['nik'];?></th>
										</tr>
										<tr>
											<th>Nama Perusahaan</th>
											<th>:</th>
											<th><?php echo $row['nama_perusahaan'];?></th>
										</tr>
										<tr>
											<th>Jabatan Di Perusahaan</th>
											<th>:</th>
											<th><?php echo $row['jabatan'];?></th>
										</tr>
										<tr>
											<th>Pengujian</th>
											<th>:</th>
											<th><?php echo $row['pengujian'];?></th>
										</tr>
										<tr>
											<th style="width: 25%;">Alamat</th>
											<th style="width: 5%;">:</th>
											<th style="width: 70%;"><?php echo $row['alamat'];?></th>
										</tr>
										<tr>
											<th>Tanggal Usulan</th>
											<th>:</th>
											<th><?php echo tglIndonesia(date('d F Y H:i:s', strtotime($row['created'])));?></th>
										</tr>
										<tr>
											<th>Tanggal Diterima</th>
											<th>:</th>
											<th><?php echo tglIndonesia(date('d F Y H:i:s', strtotime($row['created2'])));?></th>
										</tr>
										<tr>
											<th>Tanggal Di Uji</th>
											<th>:</th>
											<th><?php echo tglIndonesia(date('d F Y H:i:s', strtotime($row['created3'])));?></th>
										</tr>
										<tr>
											<th>Tanggal Terbit</th>
											<th>:</th>
											<th><?php echo tglIndonesia(date('d F Y H:i:s', strtotime($row['created4'])));?></th>
										</tr>
										<tr>
											<th>Tanggal Sertifikat Di Terima</th>
											<th>:</th>
											<th><?php echo tglIndonesia(date('d F Y H:i:s', strtotime($row['created5'])));?></th>
										</tr>
									</tbody>
								</table>
							</div>
							<hr>
							<h6>Data Komoditi</h6>
							<table id="dtHorizontalExample" class="table table-bordered table-bordered table-sm" cellspacing="0" width="100%" border="3px">
											<thead>
												<tr>
												<th>Nomor</th>
													<th>Jenis Komoditi</th>
													<th>Nama Komoditi</th>
													<!-- <th>Jenis</th> -->
													<th>Jumlah</th>
													<th>Satuan</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$no = 1;
												$kueri = mysqli_query($conn, "SELECT * FROM tb_pengajuanbantu,tb_komoditi WHERE tb_pengajuanbantu.id_komoditi=tb_komoditi.id_komoditi AND id_pengajuan='$id'");
												while($tampil = mysqli_fetch_array($kueri)) {
													?>
													<tr>
														<td><?php echo $no++;?></td>
														<td><?php echo $tampil['nama_komoditi'];?></td>
														<td><?php echo $tampil['nama'];?></td>
														<td><?php echo $tampil['jumlah_pengajuan'];?></td>
														<td><?php echo $tampil['satuan_pengajuan'];?></td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
							<hr>
							<h6><u>Informasi Status Pengajuan</u></h6>
							<div class="table-responsive">
								<table style="width: 100%;">
									<tbody>
										<tr>
											<th style="width: 25%;">Status</th>
											<th style="width: 5%;">:</th>
											<th style="width: 70%;"><?php echo $row['status'];?></th>
										</tr>
										<?php if($row['status'] == "Tolak") { ?>
											<tr>
												<th>Alasan</th>
												<th>:</th>
												<th><?php echo $row['alasan'];?></th>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
							<div align="center mt-5">
								<div class="row">
									<div class="col-md-12" align="center">
										<br>
										<br>
										<h6>Data Pengajuan - Fotocopy KTP</h6>
										<img src="assets/images/berkas/<?php echo $row['fc_ktp'];?>" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<?php include 'menu/footer.php'; ?>
	</footer>
	<?php include 'menu/loader.php'; ?>
	<?php include 'menu/script.php'; ?>
	<script type="text/javascript">
		$('img').addClass('img-fluid')
	</script>
</body>
</html>