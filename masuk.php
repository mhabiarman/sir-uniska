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
					<h1 class="mb-3 bread">Masuk</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo $baseurl;?>">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Masuk <i class="ion-ios-arrow-forward"></i></span></p>
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
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Selamat Datang!</h3>
									<form action="" method="POST" id="data-form" class="contactForm" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="username">Nama Pengguna</label>
													<input type="text" class="form-control" name="username" id="username" required="" autofocus="" autocomplete="off" placeholder="Nama Pengguna" minlength="5" maxlength="20">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="password">Kata Sandi</label>
													<input type="password" class="form-control" name="password" id="password" required="" autocomplete="off" placeholder="Kata Sandi" minlength="5" maxlength="20">
												</div>
											</div>
											<div class="col-md-12">
												<div align="right">
													<a href="daftar">Buat Akun</a>
												</div>
												<div class="form-group">
													<input type="submit" value="Masuk" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(assets/dist-2/images/about.jpg);">
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
			$("#data-form").submit(function(e) {
				e.preventDefault();
				var data = $(this).serialize();
				$.ajax({
					type: "POST",
					url: "proses/login.php",
					data: data,
					success: function(response) {
						var dataresponse = JSON.parse(response);
						console.log(dataresponse);
						if(dataresponse.status == "0") {
							Swal.fire('Peringatan', 'Maaf, Kami tidak dapat menemukan akun Anda', 'error');
						}else if(dataresponse.status == "1") {
							Swal.fire({
								title: "Pemberitahuan",
								text: "Selamat datang "+dataresponse.nama,
								icon: "success"
							}).then(function() {
								window.location = "index";
							});
						}else {
							Swal.fire('Peringatan', 'Maaf, Kami tidak dapat menemukan akun Anda', 'error');
						}
					}
				});
				return false;
			});
		});
	</script>
</body>
</html>