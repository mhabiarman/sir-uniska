<?php include '../koneksi.php'; ?>
<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tb_alat WHERE id_alat = '$id'");
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
						<h1>Detail Alat</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="beranda">Beranda</a></div>
							<div class="breadcrumb-item"><a href="alat">Alat</a></div>
							<div class="breadcrumb-item">Detail Alat</div>
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
												<div class="col-md-6">
													<div class="form-group">
														<label for="nama_alat">Nama Alat</label>
														<input type="text" class="form-control" name="nama_alat" id="nama_alat" required="" autocomplete="off" placeholder="Masukkan Nama Alat" maxlength="100" autofocus="" value="<?php echo $row['nama_alat'];?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="merk_alat">Merk Alat</label>
														<input type="text" class="form-control" name="merk_alat" id="merk_alat" required=""  value="<?php echo $row['merk_alat'];?>" autocomplete="off" placeholder="Masukkan Merk Alat" maxlength="100">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="nomor_seri">Nomor Seri</label>
														<input type="text" class="form-control" name="nomor_seri" id="nomor_seri" required=""  value="<?php echo $row['nomor_seri'];?>" autocomplete="off" placeholder="Masukkan Nomor Seri" maxlength="100">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="kapasitas">Kapasitas</label>
														<input type="text" class="form-control" name="kapasitas" id="kapasitas" required=""  value="<?php echo $row['kapasitas'];?>" autocomplete="off" placeholder="Masukkan Kapasitas" maxlength="100">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="identitas">Identitas</label>
														<input type="text" class="form-control" name="identitas" id="identitas" required=""  value="<?php echo $row['identitas'];?>" autocomplete="off" placeholder="Masukkan Identitas" maxlength="100">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<a href="alat" class="btn btn-danger">Kembali</a>
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
					url: "proses/update-alat.php",
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
								window.location = "alat";
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