<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'menu/head.php'; ?>
</head>
<body>
	<div class="container pt-5 pb-4">
		<?php include 'menu/header.php'; ?>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<?php include 'menu/nav.php'; ?>
	</nav>

	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/dist-2/images/bg_6.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<h1 class="mb-3 bread">Akun</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo $baseurl;?>">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Akun <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-2 d-flex">
					<div class="row justify-content-start py-5">
						<div class="col-md-12 heading-section ftco-animate">
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Data Diri</a>
								<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Kata Sandi</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-10 d-flex">
					<div class="row justify-content-start py-5">
						<div class="col-md-12 heading-section ftco-animate">
							<div class="tab-content" id="v-pills-tabContent">
								<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<form action="" method="POST" id="data-form-pertama" class="contactForm" enctype="multipart/form-data">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="nama_lengkap">Nama Lengkap</label>
														<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required="" autocomplete="off" placeholder="Nama Lengkap" autofocus="" minlength="1" maxlength="100" value="<?php echo $online['nama_lengkap'];?>">
														<input type="hidden" name="id" id="id" value="<?php echo $online['id_pemohon'];?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="telepon">Telepon</label>
														<input type="number" name="telepon" id="telepon" class="form-control" required="" autocomplete="off" placeholder="Telepon" value="<?php echo $online['telepon'];?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="nik">Nomor Induk Kependudukan</label>
														<input type="number" name="nik" id="nik" class="form-control" required="" autocomplete="off" placeholder="Nomor Induk Kependudukan" value="<?php echo $online['nik'];?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="nama_perusahaan">Nama Perusahaan</label>
														<input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan" required="" autocomplete="off" autofocus="" minlength="1" maxlength="100"  value="<?php echo $online['nama_perusahaan'];?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="jabatan">Jabatan Di Perusahaan</label>
														<input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan Di Perusahaan" required="" autocomplete="off" autofocus="" minlength="1" maxlength="100"  value="<?php echo $online['jabatan'];?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="tempat_lahir">Tempat Lahir</label>
														<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" autocomplete="off" autofocus="" minlength="1" maxlength="50" required="" value="<?php echo $online['tempat_lahir'];?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="tanggal_lahir">Tanggal Lahir</label>
														<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" autocomplete="off" autofocus="" required="" value="<?php echo $online['tanggal_lahir'];?>">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="alamat">Alamat</label>
														<textarea name="alamat" class="form-control" id="alamat" cols="30" rows="4" required="" placeholder="Tulis Alamat"><?php echo $online['alamat'];?></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Simpan Perubahan" class="btn btn-primary">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<form action="" method="POST" id="data-form-kedua" class="contactForm" enctype="multipart/form-data">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="username">Nama Pengguna</label>
														<input type="text" name="username" id="username" class="form-control" required="" autocomplete="off" placeholder="Nama Pengguna" minlength="5" maxlength="20" value="<?php echo $online['username'];?>">
														<input type="hidden" name="id" id="id" value="<?php echo $userid;?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="oldPassword">Kata Sandi Lama</label>
														<input type="password" name="oldPassword" id="oldPassword" class="form-control" required="" autocomplete="off" placeholder="Kata Sandi Lama" minlength="5" maxlength="20">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="newPassword">Kata Sandi Baru</label>
														<input type="password" name="newPassword" id="newPassword" class="form-control" required="" autocomplete="off" placeholder="Kata Sandi Baru" minlength="5" maxlength="20">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="confirmPassword">Konfirmasi Kata Sandi</label>
														<input type="password" name="confirmPassword" id="confirmPassword" class="form-control" required="" autocomplete="off" placeholder="Konfirmasi Kata Sandi" minlength="5" maxlength="20">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Simpan Perubahan" class="btn btn-primary">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
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
		$(document).ready(function() {
			$("#data-form-pertama").submit(function(e) {
				e.preventDefault();
				var data = new FormData(this);
				$.ajax({
					type: "POST",
					url: "proses/update-akun-1.php",
					data: data,
					processData: false,
					contentType: false,
					success: function(response) {
						var dataresponse = JSON.parse(response);
						console.log(dataresponse);
						if(dataresponse.status == "1") {
							Swal.fire({
								title: "Pemberitahuan",
								text: "Berhasil mengubah data",
								icon: "success"
							}).then(function() {
								window.location = "akun";
							});
						}else {
							if(dataresponse.type == "telepon") {
								Swal.fire('Peringatan', 'Maaf, Telepon sudah digunakan', 'error');
							}else if(dataresponse.type == "nik") { 
								Swal.fire('Peringatan', 'Maaf, Nomor Induk Kependudukan sudah digunakan', 'error');
							}else {
								Swal.fire('Peringatan', 'Maaf, gagal mengubah data', 'error');
							}
						}
					}
				});
				return false;
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#data-form-kedua").submit(function(e) {
				e.preventDefault();
				var data = new FormData(this);
				$.ajax({
					type: "POST",
					url: "proses/update-akun-2.php",
					data: data,
					processData: false,
					contentType: false,
					success: function(response) {
						var dataresponse = JSON.parse(response);
						console.log(dataresponse);
						if(dataresponse.status == "1") {
							Swal.fire({
								title: "Pemberitahuan",
								text: "Berhasil mengubah data",
								icon: "success"
							}).then(function() {
								window.location = "akun";
							});
						}else if(dataresponse.status == "2") {
							Swal.fire('Peringatan', 'Kata Sandi Lama yang Anda masukkan salah', 'error');
						}else if(dataresponse.status == "3") {
							Swal.fire('Peringatan', 'Kata Sandi tidak cocok', 'error');
						}else {
							if(dataresponse.type == "username") {
								Swal.fire('Peringatan', 'Maaf, Nama pengguna sudah digunakan', 'error');
							}else {
								Swal.fire('Peringatan', 'Maaf, gagal mengubah data', 'error');
							}
						}
					}
				});
				return false;
			});
		});
	</script>
</body>
</html>