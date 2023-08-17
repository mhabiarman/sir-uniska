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

	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/dist-2/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<h1 class="mb-3 bread">Kontak</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo $baseurl;?>">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Kontak <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row mb-5">
							<div class="col-md-4">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="text">
										<p>Jl. Panglima Batur No.2, Loktabat Utara, Kec. Banjarbaru Utara, Kota Banjar Baru, Kalimantan Selatan 70711</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-phone"></span>
									</div>
									<div class="text">
										<p>(0511) 4774861</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-paper-plane"></span>
									</div>
									<div class="text">
										<p>bspji.banjarbaru@gmail.com</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-md-12">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15930.54147152712!2d114.8296661!3d-3.438569!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de681746741ecb1%3A0xdff9438a55959d9!2sBalai%20Standardisasi%20dan%20Pelayanan%20Jasa%20Industri%20(BSPJI)%20Banjarbaru!5e0!3m2!1sid!2sid!4v1691787385345!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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