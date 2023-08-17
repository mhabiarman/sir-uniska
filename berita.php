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

	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/dist-2/images/bg_4.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<h1 class="mb-3 bread">Berita</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Berita <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row d-flex">
				<?php
				$query = mysqli_query($conn, "SELECT * FROM tb_berita ORDER BY id_berita ASC");
				while($row = mysqli_fetch_array($query)) {
					?>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="blog-entry justify-content-end">
							<a href="berita-terkait?id=<?php echo $row['id_berita'];?>" class="block-20" style="background-image: url('assets/images/berita/<?php echo $row['gambar'];?>');">
							</a>
							<div class="text p-4 float-right d-block">
								<div class="topper d-flex align-items-center">
									<div class="one py-2 pl-3 pr-1 align-self-stretch">
										<span class="day"><?php echo date('d', strtotime($row['created']));?></span>
									</div>
									<div class="two pl-0 pr-3 py-2 align-self-stretch">
										<span class="yr"><?php echo date('Y', strtotime($row['created']));?></span>
										<span class="mos"><?php echo tglIndonesia(date('F', strtotime($row['created'])));?></span>
									</div>
								</div>
								<h3 class="heading mb-0"><a href="berita-terkait?id=<?php echo $row['id_berita'];?>"><?php echo $row['judul'];?></a></h3>
								<p><?php echo $row['keterangan'];?></p>
								<p><a href="berita-terkait?id=<?php echo $row['id_berita'];?>" class="btn btn-primary">Selengkapnya</a></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
<!-- 	<section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8 py-4">
					<div class="row">
						<div class="col-md-6 ftco-animate d-flex align-items-center">
							<h2 class="mb-0" style="color:white; font-size: 24px;">Sekilas Jembatan Merah</h2>
						</div>
						<div class="col-md-6 d-flex align-items-center">
							<form action="#" class="subscribe-form">
								<div class="form-group d-flex">
									<input type="text" class="form-control" placeholder="Alamat Email">
									<input type="submit" value="Kirim" class="submit px-3">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<?php include 'menu/footer.php'; ?>
	</footer>
	<?php include 'menu/loader.php'; ?>
	<?php include 'menu/script.php'; ?>
</body>
</html>