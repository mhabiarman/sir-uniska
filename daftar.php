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
	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/dist-2/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<h1 class="mb-3 bread">Daftar</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo $baseurl;?>">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Daftar <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-12">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Pendaftaran</h3>
									<form action="" method="POST" id="data-form" class="contactForm" enctype="multipart/form-data">
									<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="nama_lengkap">Nama Lengkap</label>
														<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required="" autocomplete="off" placeholder="Nama Lengkap" autofocus="" minlength="1" maxlength="100">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="telepon">Telepon</label>
														<input type="number" name="telepon" id="telepon" class="form-control" required="" autocomplete="off" placeholder="Telepon">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="nik">NIK</label>
														<input type="number" name="nik" id="nik" class="form-control" required="" autocomplete="off" placeholder="NIK">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="tempat_lahir">Tempat Lahir</label>
														<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" autocomplete="off" autofocus="" minlength="1" maxlength="50" required="">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="tanggal_lahir">Tanggal Lahir</label>
														<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" autocomplete="off" autofocus="" required="">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="nama_perusahaan">Nama Perusahaan</label>
														<input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan" required="" autocomplete="off" autofocus="" minlength="1" maxlength="100">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="jabatan">Jabatan Di Perusahaan</label>
														<input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan Di Perusahaan" required="" autocomplete="off" autofocus="" minlength="1" maxlength="100">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="username">Nama Pengguna</label>
														<input type="text" name="username" id="username" class="form-control" required="" autocomplete="off" placeholder="Nama Pengguna" minlength="5" maxlength="20">
														<input type="hidden" name="level" id="level" value="Pemohon">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="password">Kata Sandi</label>
														<input type="password" name="password" id="password" class="form-control" required="" autocomplete="off" placeholder="Kata Sandi" minlength="5" maxlength="20">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label for="alamat">Alamat</label>
														<textarea class="form-control" name="alamat" id="alamat" required="" placeholder="Tulis Alamat"></textarea>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Daftar" class="btn btn-primary">
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
	</section>
	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<?php include 'menu/footer.php'; ?>
	</footer>
	<?php include 'menu/loader.php'; ?>
	<?php include 'menu/script.php'; ?>
	<script type="text/javascript">
		function setInputFilter(textbox, inputFilter) {
			["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
				textbox.addEventListener(event, function() {
					if (inputFilter(this.value)) {
						this.oldValue = this.value;
						this.oldSelectionStart = this.selectionStart;
						this.oldSelectionEnd = this.selectionEnd;
					} else if (this.hasOwnProperty("oldValue")) {
						this.value = this.oldValue;
						this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
					} else {
						this.value = "";
					}
				});
			});
		}
		setInputFilter(document.getElementById("nik"), function(value) {
			return /^\d*\.?\d*$/.test(value);
		});
		function changeValue() {
			var nik = $('#nik').val();
			if(nik.length == 16) {
				var res = nik.substring(6, 12);
				var tanggal = res.substring(0, 2);
				var bulan = res.substring(2, 4);
				var tahun = res.substring(4, 6);
				if(tahun <= 99) {
					var tahunT = "19"+tahun;
				}
				if(tahunT <= 1950) {
					var tahunT = "20"+tahun;
				}
				function isValidDate(s) {
					var bits = s.split('/');
					var d = new Date(bits[2], bits[1] - 1, bits[0]);
					return d && (d.getMonth() + 1) == bits[1];
				}
				var myDate = tanggal+"/"+bulan+"/"+tahunT;
				console.log(myDate + isValidDate(myDate));
				if(isValidDate(myDate)) {
					$('#tanggal_lahir').val(tahunT+"-"+bulan+"-"+tanggal);
				}else {
					Swal.fire('Peringatan', 'Maaf, Format NIK yang Anda masukkan salah', 'error');
				}
			}
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#data-form").submit(function(e) {
				e.preventDefault();
				var nik = $('#nik').val();
				if(nik.length == 16) {
					var res = nik.substring(6, 12);
					var tanggal = res.substring(0, 2);
					var bulan = res.substring(2, 4);
					var tahun = res.substring(4, 6);
					if(tahun <= 99) {
						var tahunT = "19"+tahun;
					}
					if(tahunT <= 1950) {
						var tahunT = "20"+tahun;
					}
					function isValidDate(s) {
						var bits = s.split('/');
						var d = new Date(bits[2], bits[1] - 1, bits[0]);
						return d && (d.getMonth() + 1) == bits[1];
					}
					var myDate = tanggal+"/"+bulan+"/"+tahunT;
					console.log(myDate + isValidDate(myDate));
					if(isValidDate(myDate)) {
						var data = $(this).serialize();
						$.ajax({
							type: "POST",
							url: "proses/register.php",
							data: data,
							success: function(response) {
								var dataresponse = JSON.parse(response);
								console.log(dataresponse);
								if(dataresponse.status == "0") {
									Swal.fire('Peringatan', 'Maaf, gagal melakukan pendaftaran', 'error');
								}else if(dataresponse.status == "1") {
									Swal.fire({
										title: "Pemberitahuan",
										text: "Berhasil melakukan pendaftaran",
										icon: "success"
									}).then(function() {
										window.location.href='masuk';
									});
								}else if(dataresponse.status == "2") {
									Swal.fire('Peringatan', 'Maaf, Telepon sudah digunakan', 'error');
								}else if(dataresponse.status == "3") {
									Swal.fire('Peringatan', 'Maaf, Nomor Induk Kependudukan sudah digunakan', 'error');
								}else if(dataresponse.status == "4") {
									Swal.fire('Peringatan', 'Maaf, Nama Pengguna sudah digunakan', 'error');
								}else {
									Swal.fire('Peringatan', 'Maaf, gagal melakukan pendaftaran', 'error');
								}
							}
						});
						return false;
					}else {
						Swal.fire('Peringatan', 'Maaf, Format NIK yang Anda masukkan salah', 'error');
					}
				}else {
					Swal.fire('Peringatan', 'Maaf, NIK harus 16 angka', 'error');
				}
			});
		});
	</script>
</body>
</html>