<?php include '../koneksi.php'; ?>
<?php
$bulan = date('m');
$tahun = date('Y');

if($bulan == 1) {
	$bulanRomawi = "I";
}else if($bulan == 2) {
	$bulanRomawi = "II";
}else if($bulan == 3) {
	$bulanRomawi = "III";
}else if($bulan == 4) {
	$bulanRomawi = "IV";
}else if($bulan == 5) {
	$bulanRomawi = "V";
}else if($bulan == 6) {
	$bulanRomawi = "VI";
}else if($bulan == 7) {
	$bulanRomawi = "VII";
}else if($bulan == 8) {
	$bulanRomawi = "VIII";
}else if($bulan == 9) {
	$bulanRomawi = "IX";
}else if($bulan == 10) {
	$bulanRomawi = "X";
}else if($bulan == 11) {
	$bulanRomawi = "XI";
}else if($bulan == 12) {
	$bulanRomawi = "XII";
}else {
	$bulanRomawi = "I";
}

$getKode = mysqli_query($conn, "SELECT MAX(nomor_surat) AS maxKode FROM tb_kependudukan");
$showKode = mysqli_fetch_array($getKode);
$myKode = $showKode['maxKode'];
$urutKode = (int) substr($myKode, 0, 3);
$urutKode++;
$charKode = "/KPD/SUKADANA/".$bulanRomawi."/".$tahun;
$tampilKode = sprintf("%03s", $urutKode).$charKode;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'menu/head.php'; ?>
</head>
<body>
	<div id="app">
		<div class="main-wrapper">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<?php include 'menu/navbar.php'; ?>
			</nav>
			<div class="main-sidebar">
				<aside id="sidebar-wrapper">
					<?php include 'menu/aside.php'; ?>
				</aside>
			</div>
			<div class="main-content">
				<section class="section">
					<div class="section-header">
						<h1>Tambah Kependudukan</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="beranda">Beranda</a></div>
							<div class="breadcrumb-item"><a href="kependudukan">Kependudukan</a></div>
							<div class="breadcrumb-item">Tambah Kependudukan</div>
						</div>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<form role="form" action="#" method="POST" enctype="multipart/form-data" id="data-form">
											<input type="hidden" name="nomor_surat" id="nomor_surat" value="<?php echo $tampilKode;?>">
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="nama">Nama</label>
														<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required="" autofocus="" autocomplete="off">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="nik">Nomor Induk Kependudukan</label>
														<input type="number" class="form-control" name="nik" id="nik" placeholder="Masukkan Nomor Induk Kependudukan" required="" autofocus="" autocomplete="off">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="nomor_kk">Nomor Kartu Keluarga</label>
														<input type="number" class="form-control" name="nomor_kk" id="nomor_kk" placeholder="Masukkan Nomor Kartu Keluarga" required="" autofocus="" autocomplete="off">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="nomor_passpor">Nomor Passpor</label>
														<input type="number" class="form-control" name="nomor_passpor" id="nomor_passpor" placeholder="Masukkan Nomor Passpor" required="" autofocus="" autocomplete="off">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="nomor_kitap">Nomor Kitap</label>
														<input type="number" class="form-control" name="nomor_kitap" id="nomor_kitap" placeholder="Masukkan Nomor Kitap" required="" autofocus="" autocomplete="off">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="nama_ayah">Nama Ayah</label>
														<input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Masukkan Nama Ayah" required="" autofocus="" autocomplete="off">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="nama_ibu">Nama Ibu</label>
														<input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Masukkan Nama Ibu" required="" autofocus="" autocomplete="off">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="tempat_lahir">Tempat Lahir</label>
														<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" required="" autofocus="" autocomplete="off">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="jenis_kelamin">Jenis Kelamin</label>
														<select class="form-control select2" name="jenis_kelamin" id="jenis_kelamin" required="" style="width: 100%;">
															<option value="">Pilih Jenis Kelamin</option>
															<option value="Laki - Laki">Laki - Laki</option>
															<option value="Perempuan">Perempuan</option>
															<option value="Lainnya">Lainnya</option>
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="tanggal_lahir">Tanggal Lahir</label>
														<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" required="" autofocus="" autocomplete="off">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="agama">Agama</label>
														<select class="form-control select2" name="agama" id="agama" required="" style="width: 100%;">
															<option value="">Pilih Agama</option>
															<option value="Islam">Islam</option>
															<option value="Hindu">Hindu</option>
															<option value="Budha">Budha</option>
															<option value="Katolik">Katolik</option>
															<option value="Kristen">Kristen</option>
															<option value="Konghucu">Konghucu</option>
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="pendidikan">Pendidikan</label>
														<select class="form-control select2" name="pendidikan" id="pendidikan" required="" style="width: 100%;">
															<option value="">Pilih Pendidikan</option>
															<option value="Tidak Sekolah">Tidak Sekolah</option>
															<option value="SD">SD</option>
															<option value="SMP">SMP</option>
															<option value="SMA">SMA</option>
															<option value="Diploma (D1 - D3)">Diploma (D1 - D3)</option>
															<option value="Sarjana (S1)">Sarjana (S1)</option>
															<option value="Pasca Sarjana (S2 - S3)">Pasca Sarjana (S2 - S3)</option>
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="status_perkawinan">Status Perkawinan</label>
														<select class="form-control select2" name="status_perkawinan" id="status_perkawinan" required="" style="width: 100%;">
															<option value="">Pilih Status Perkawinan</option>
															<option value="Belum Kawin">Belum Kawin</option>
															<option value="Kawin">Kawin</option>
															<option value="Cerai Hidup">Cerai Hidup</option>
															<option value="Cerai Mati">Cerai Mati</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="pekerjaan">Pekerjaan</label>
														<input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Masukkan Pekerjaan" required="" autofocus="" autocomplete="off">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="kewarganegaraan">Kewarganegaraan</label>
														<input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" placeholder="Masukkan Kewarganegaraan" required="" autofocus="" autocomplete="off">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="hubungan">Hubungan</label>
														<input type="text" class="form-control" name="hubungan" id="hubungan" placeholder="Masukkan Hubungan" required="" autofocus="" autocomplete="off">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<a href="kependudukan" class="btn btn-danger">Kembali</a>
													<button type="submit" class="btn btn-primary float-right">Simpan</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<footer class="main-footer">
				<?php include 'menu/footer.php'; ?>
			</footer>
		</div>
	</div>
	<?php include 'menu/script.php'; ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#data-form").submit(function(e) {
				e.preventDefault();
				var data = new FormData(this);
				$.ajax({
					type: "POST",
					url: "proses/add-kependudukan.php",
					data: data,
					processData: false,
					contentType: false,
					success: function(response) {
						var dataresponse = JSON.parse(response);
						console.log(dataresponse);
						if(dataresponse.status == "0") {
							swal('Peringatan', 'Maaf, gagal menambah data', 'error');
						}else if(dataresponse.status == "1") {
							swal({
								title: "Pemberitahuan",
								text: "Berhasil menambah data ",
								icon: "success"
							}).then(function() {
								window.location = "kependudukan";
							});
						}else {
							swal('Peringatan', 'Maaf, gagal menambah data', 'error');
						}
					}
				});
				return false;
			});
		});
	</script>
</body>
</html>