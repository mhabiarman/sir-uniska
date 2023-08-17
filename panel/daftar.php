<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<meta name="author" content="Jembatan Merah">
	<meta name="description" content="Aplikasi Pelayanan Publik Pada Kantor Desa Jembatan Merah Kabupaten Hulu Sungai Selatan Berbasis Website">
	<meta name="keywords" content="jembatan merah, jafar, rizkikarianata">
	<title>Jembatan Merah</title>
	<link rel="shortcut icon" href="assets/images/favicon-2.png">
	<link rel="stylesheet" href="assets/plugins/myplugins/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/myplugins/fontawesome/css/all.css">
	<link rel="stylesheet" href="assets/plugins/selectric/public/selectric.css">
	<link rel="stylesheet" href="assets/dist/css/style.css">
	<link rel="stylesheet" href="assets/dist/css/components.css">
</head>
<body>
	<div id="app">
		<section class="section">
			<div class="container mt-5">
				<div class="row">
					<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
						<div class="card card-primary">
							<div class="card-header"><h4>Pendaftaran Akun</h4></div>
							<div class="card-body">
								<form method="POST" action="#" id="register">
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
												<label for="username">Nama Pengguna</label>
												<input type="text" name="username" id="username" class="form-control" required="" autocomplete="off" placeholder="Nama Pengguna" minlength="5" maxlength="20">
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
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<a href="index" class="btn btn-danger btn-lg btn-block">
													Kembali
												</a>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<button type="submit" class="btn btn-primary btn-lg btn-block">
													Daftar
												</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="simple-footer">
							Hakcipta &copy; Desa Jembatan Merah 2021
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<script src="assets/plugins/myplugins/jquery-3.3.1.min.js"></script>
	<script src="assets/plugins/myplugins/popper.min.js"></script>
	<script src="assets/plugins/myplugins/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="assets/dist/js/stisla.js"></script>
	<script src="assets/plugins/jquery-pwstrength/jquery.pwstrength.min.js"></script>
	<script src="assets/plugins/selectric/public/jquery.selectric.min.js"></script>
	<script src="assets/plugins/sweetalert/docs/assets/sweetalert/sweetalert.min.js"></script>
	<script src="assets/dist/js/scripts.js"></script>
	<script src="assets/dist/js/custom.js"></script>
	<script src="assets/dist/js/page/auth-register.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#register").submit(function(e) {
				e.preventDefault();
				var data = $(this).serialize();
				$.ajax({
					type: "POST",
					url: "proses/register.php",
					data: data,
					success: function(response) {
						var dataresponse = JSON.parse(response);
						console.log(dataresponse);
						if(dataresponse.status == "0") {
							swal('Peringatan', 'Maaf, gagal melakukan pendaftaran', 'error');
						}else if(dataresponse.status == "1") {
							swal({
								title: "Pemberitahuan",
								text: "Berhasil melakukan pendaftaran",
								icon: "success"
							}).then(function() {
								window.location.href='index';
							});
						}else if(dataresponse.status == "2") {
							swal('Peringatan', 'Maaf, Telepon sudah digunakan', 'error');
						}else if(dataresponse.status == "3") {
							swal('Peringatan', 'Maaf, Nama Pengguna sudah digunakan', 'error');
						}else {
							swal('Peringatan', 'Maaf, gagal melakukan pendaftaran', 'error');
						}
					}
				});
				return false;
			});
		});
	</script>
</body>
</html>