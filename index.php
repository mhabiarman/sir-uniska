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
	<div class="hero-wrap js-fullheight" style="background-image: url('assets/dist-2/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
				<div class="col-md-6 ftco-animate">
					<!-- <h2 class="subheading"  style="color: #234d97;">Selamat Datang!</h2> -->
					<h1>BALAI STANDARISASI DAN PELAYANAN JASA INDUSTRI BANJARBARU (BSPJI)</h1>
					<p class="mb-4"  style="color: white;">Provinsi Kalimantan Selatan</p>
				</div>
			</div>
		</div>
	</div>
	<section class="ftco-section ftco-no-pt">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 py-5 order-md-last">
					<div class="heading-section ftco-animate">
						<span class="subheading">BALAI STANDARISASI DAN PELAYANAN JASA INDUSTRI BANJARBARU (BSPJI)</span>
						<h2 class="mb-4"></h2>
						<p>Website ini dibuat untuk  dapat mempermudah pihak BSPJI dalam memberikan informasi pengujian dan penilaian barang SIR serta dapat meningkatkan kualitas pelayanan pengujian pada BSPJI.</p>
						<p><a href="tentang" class="btn btn-primary py-3 px-4">Tentang</a></p>
					</div>
				</div>
				<div class="col-lg-9 services-wrap px-4 pt-5">
					<div class="row pt-md-3">
						<div class="col-md-6 d-flex align-items-stretch">
							<div class="services text-center">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="fa fa-info-circle"></span>
								</div>
								<div class="text">
									<h3>Informasi</h3>
									<p>Mempermudah pihak pemohon dalam melakukan pengujian dan penilaian sampel yang dikirimkan.</p>
								</div>
								<a href="tentang" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-stretch">
							<div class="services text-center">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="fa fa-wrench"></span>
								</div>
								<div class="text">
									<h3>Layanan</h3>
									<p>Pemohon dapat melakukan pembuatan surat penilaian barang SIR, agar tidak perlu lagi mendtangi kantor BSPJI dalam pengajuan permohonan.</p>
								</div>
								<a href="sir" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-intro bg-primary py-5">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-md-6">
					<h2>Hubungi Kami</h2>
					<p>Tanyakan kepada Kami jika Anda mengalami kesulitan melakukan permohonan hubungi kami.</p>
				</div>
				<div class="col-md-5 text-md-right">
					<span class="contact-number">+62 838-2478-1926</span>
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