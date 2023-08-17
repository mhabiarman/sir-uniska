<?php include 'koneksi.php'; ?>
<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tb_berita WHERE id_berita = '$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'menu/head.php'; ?>
	<link rel="stylesheet" type="text/css" href="assets/dist-2/css/comment.css">
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
					<h1 class="mb-3 bread">Berita</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo $baseurl;?>">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Berita <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-12 d-flex">
					<div class="row justify-content-start py-5">
						<div class="col-md-12 heading-section ftco-animate">
							<div align="center">
								<img src="assets/images/berita/<?php echo $row['gambar'];?>" alt="">
							</div>
							<br>
							<span class="subheading"><?php echo tglIndonesia(date('d F Y H:i:s', strtotime($row['created'])));?></span>
							<h2 class="mb-4"><?php echo $row['judul'];?></h2>
							<?php echo $row['keterangan'];?>
							<?php echo $row['deskripsi'];?>
						</div>
					</div>
				</div>
				<!-- <?php if(isset($_SESSION['userid'])) { ?>
					<div class="col-md-12 d-flex">
						<div class="contact-wrap w-100 p-md-5 p-4 mb-5">
							<form action="" method="POST" id="data-form" class="contactForm" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="label" for="komentar">Komentar</label>
											<input type="hidden" name="fk_pemohon" id="fk_pemohon" value="<?php echo $userid;?>">
											<input type="hidden" name="fk_berita" id="fk_berita" value="<?php echo $id;?>">
											<textarea name="isi" class="form-control" id="isi" cols="30" rows="4" placeholder="Tulis Komentar"></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="submit" value="Kirim Komentar" class="btn btn-primary">
											<div class="submitting"></div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				<?php } ?>
				<div class="col-md-12 d-flex">
					<div class="row justify-content-start py-5">
						<div class="col-md-12 heading-section ftco-animate">
							<?php
							$query2 = mysqli_query($conn, "SELECT km.*, pm.* FROM tb_komentar km INNER JOIN tb_pemohon pm ON km.fk_pemohon = pm.id_pemohon WHERE km.fk_berita = '$id'");
							while($row2 = mysqli_fetch_array($query2)) {
								?>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="assets/images/avatar-1.png" alt="" style="width: 60px;">
										</div>
										<div class="media-body">
											<h4><?php echo $row2['nama_lengkap'];?></h4>
											<h5><?php echo tglIndonesia(date('d F Y', strtotime($row2[4])));?>, <?php echo date('H:i:s', strtotime($row2[4]));?> WITA</h5>
										</div>
									</div>
									<p><?php echo $row2['isi'];?></p>
								</div>
							<?php } ?>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>

	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<?php include 'menu/footer.php'; ?>
	</footer>
	<?php include 'menu/loader.php'; ?>
	<?php include 'menu/script.php'; ?>
	<script type="text/javascript">
		$('img').addClass('img-fluid')
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#data-form").submit(function(e) {
				e.preventDefault();
				var data = $(this).serialize();
				$.ajax({
					type: "POST",
					url: "proses/add-komentar.php",
					data: data,
					success: function(response) {
						var dataresponse = JSON.parse(response);
						console.log(dataresponse);
						if(dataresponse.status == "0") {
							Swal.fire('Peringatan', 'Maaf, gagal mengirim komentar', 'error');
						}else if(dataresponse.status == "1") {
							Swal.fire({
								title: "Pemberitahuan",
								text: "Berhasil mengirim komentar",
								icon: "success"
							}).then(function() {
								location.reload();
							});
						}else {
							Swal.fire('Peringatan', 'Maaf, gagal mengirim komentar', 'error');
						}
					}
				});
				return false;
			});
		});
	</script>
</body>
</html>