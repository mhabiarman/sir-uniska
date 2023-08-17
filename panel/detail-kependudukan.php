<?php include '../koneksi.php'; ?>
<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tb_kependudukan WHERE id_kependudukan = '$id'");
$row = mysqli_fetch_array($query);
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
						<h1>Detail Kependudukan</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="beranda">Beranda</a></div>
							<div class="breadcrumb-item"><a href="kependudukan">Kependudukan</a></div>
							<div class="breadcrumb-item">Detail Kependudukan</div>
						</div>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<form role="form" action="#" method="POST" enctype="multipart/form-data" id="data-form">
											<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="nama">Nama</label>
														<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required="" autofocus="" autocomplete="off" value="<?php echo $row['nama'];?>">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="nik">Nomor Induk Kependudukan</label>
														<input type="number" class="form-control" name="nik" id="nik" placeholder="Masukkan Nomor Induk Kependudukan" required="" autofocus="" autocomplete="off" value="<?php echo $row['nik'];?>">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="nomor_kk">Nomor Kartu Keluarga</label>
														<input type="number" class="form-control" name="nomor_kk" id="nomor_kk" placeholder="Masukkan Nomor Kartu Keluarga" required="" autofocus="" autocomplete="off" value="<?php echo $row['nomor_kk'];?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="nomor_passpor">Nomor Passpor</label>
														<input type="number" class="form-control" name="nomor_passpor" id="nomor_passpor" placeholder="Masukkan Nomor Passpor" required="" autofocus="" autocomplete="off" value="<?php echo $row['nomor_passpor'];?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="nomor_kitap">Nomor Kitap</label>
														<input type="number" class="form-control" name="nomor_kitap" id="nomor_kitap" placeholder="Masukkan Nomor Kitap" required="" autofocus="" autocomplete="off" value="<?php echo $row['nomor_kitap'];?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="nama_ayah">Nama Ayah</label>
														<input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Masukkan Nama Ayah" required="" autofocus="" autocomplete="off" value="<?php echo $row['nama_ayah'];?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="nama_ibu">Nama Ibu</label>
														<input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Masukkan Nama Ibu" required="" autofocus="" autocomplete="off" value="<?php echo $row['nama_ibu'];?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="tempat_lahir">Tempat Lahir</label>
														<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" required="" autofocus="" autocomplete="off" value="<?php echo $row['tempat_lahir'];?>">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="jenis_kelamin">Jenis Kelamin</label>
														<select class="form-control select2" name="jenis_kelamin" id="jenis_kelamin" required="" style="width: 100%;">
															<option value="Laki - Laki" <?php if($row['jenis_kelamin'] == "Laki - Laki") {echo "selected=''";} ?>>Laki - Laki</option>
															<option value="Perempuan" <?php if($row['jenis_kelamin'] == "Perempuan") {echo "selected=''";} ?>>Perempuan</option>
															<option value="Lainnya" <?php if($row['jenis_kelamin'] == "Lainnya") {echo "selected=''";} ?>>Lainnya</option>
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="tanggal_lahir">Tanggal Lahir</label>
														<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" required="" autofocus="" autocomplete="off" value="<?php echo $row['tanggal_lahir'];?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="agama">Agama</label>
														<select class="form-control select2" name="agama" id="agama" required="" style="width: 100%;">
															<option value="Islam" <?php if($row['agama'] == "Islam") {echo "selected=''";} ?>>Islam</option>
															<option value="Hindu" <?php if($row['agama'] == "Hindu") {echo "selected=''";} ?>>Hindu</option>
															<option value="Budha" <?php if($row['agama'] == "Budha") {echo "selected=''";} ?>>Budha</option>
															<option value="Katolik" <?php if($row['agama'] == "Katolik") {echo "selected=''";} ?>>Katolik</option>
															<option value="Kristen" <?php if($row['agama'] == "Kristen") {echo "selected=''";} ?>>Kristen</option>
															<option value="Konghucu" <?php if($row['agama'] == "Konghucu") {echo "selected=''";} ?>>Konghucu</option>
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="pendidikan">Pendidikan</label>
														<select class="form-control select2" name="pendidikan" id="pendidikan" required="" style="width: 100%;">
															<option value="Tidak Sekolah" <?php if($row['pendidikan'] == "Tidak Sekolah") {echo "selected=''";} ?>>Tidak Sekolah</option>
															<option value="SD" <?php if($row['pendidikan'] == "SD") {echo "selected=''";} ?>>SD</option>
															<option value="SMP" <?php if($row['pendidikan'] == "SMP") {echo "selected=''";} ?>>SMP</option>
															<option value="SMA" <?php if($row['pendidikan'] == "SMA") {echo "selected=''";} ?>>SMA</option>
															<option value="Diploma (D1 - D3)" <?php if($row['pendidikan'] == "Diploma (D1 - D3)") {echo "selected=''";} ?>>Diploma (D1 - D3)</option>
															<option value="Sarjana (S1)" <?php if($row['pendidikan'] == "Sarjana (S1)") {echo "selected=''";} ?>>Sarjana (S1)</option>
															<option value="Pasca Sarjana (S2 - S3)" <?php if($row['pendidikan'] == "Pasca Sarjana (S2 - S3)") {echo "selected=''";} ?>>Pasca Sarjana (S2 - S3)</option>
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="status_perkawinan">Status Perkawinan</label>
														<select class="form-control select2" name="status_perkawinan" id="status_perkawinan" required="" style="width: 100%;">
															<option value="Belum Kawin" <?php if($row['status_perkawinan'] == "Belum Kawin") {echo "selected=''";} ?>>Belum Kawin</option>
															<option value="Kawin" <?php if($row['status_perkawinan'] == "Kawin") {echo "selected=''";} ?>>Kawin</option>
															<option value="Cerai Hidup" <?php if($row['status_perkawinan'] == "Cerai Hidup") {echo "selected=''";} ?>>Cerai Hidup</option>
															<option value="Cerai Mati" <?php if($row['status_perkawinan'] == "Cerai Mati") {echo "selected=''";} ?>>Cerai Mati</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="pekerjaan">Pekerjaan</label>
														<input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Masukkan Pekerjaan" required="" autofocus="" autocomplete="off" value="<?php echo $row['pekerjaan'];?>">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="kewarganegaraan">Kewarganegaraan</label>
														<input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" placeholder="Masukkan Kewarganegaraan" required="" autofocus="" autocomplete="off" value="<?php echo $row['kewarganegaraan'];?>">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="hubungan">Hubungan</label>
														<input type="text" class="form-control" name="hubungan" id="hubungan" placeholder="Masukkan Hubungan" required="" autofocus="" autocomplete="off" value="<?php echo $row['hubungan'];?>">
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
					url: "proses/update-kependudukan.php",
					data: data,
					processData: false,
					contentType: false,
					success: function(response) {
						var dataresponse = JSON.parse(response);
						console.log(dataresponse);
						if(dataresponse.status == "1") {
							swal({
								title: "Pemberitahuan",
								text: "Berhasil mengubah data",
								icon: "success"
							}).then(function() {
								window.location = "kependudukan";
							});
						}else {
							swal('Peringatan', 'Kesalahan dalam sebuah query', 'error');
						}
					}
				});
				return false;
			});
		});
	</script>
</body>
</html>