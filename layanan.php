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

	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/dist-2/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<h1 class="mb-3 bread">Layanan</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo $baseurl;?>">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Layanan <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-10 text-center heading-section ftco-animate">
					<span class="subheading">Layanan</span>
					<h2 class="mb-4">Telaga Bauntung</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="carousel-seasonal owl-carousel ftco-owl">
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(assets/images/surat-ktp.png);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="surat-ktp">Surat Permohonan E-KTP</a></h3>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(assets/images/surat-kelahiran.png);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="surat-kelahiran">Surat Kelahiran</a></h3>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(assets/images/surat-kematian.png);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="surat-kematian">Surat Kematian</a></h3>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(assets/images/surat-kepindahan.png);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="surat-kepindahan">Surat Kepindahan</a></h3>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(assets/images/imb.png);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="surat-imb">Pembuatan IMB</a></h3>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(assets/images/iumk.png);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="surat-iumk">Pembuatan IUMK</a></h3>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(assets/images/domisili.png);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="surat-skd">Pembuatan SKD</a></h3>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(assets/images/kerumunan.png);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="surat-kerumunan">Pembuatan Kerumunan</a></h3>
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
</body>
</html>