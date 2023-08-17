<?php include '../koneksi.php'; ?>
<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT p.*, j.* FROM tb_pegawai p INNER JOIN tb_jabatan j ON p.fk_jabatan = j.id_jabatan WHERE p.id_pegawai = '$id'");
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
						<h1>Detail Pegawai</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="beranda">Beranda</a></div>
							<div class="breadcrumb-item"><a href="pegawai">Pegawai</a></div>
							<div class="breadcrumb-item">Detail Pegawai</div>
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
														<label for="nama_pegawai">Nama Pegawai</label>
														<input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control" required="" autocomplete="off" placeholder="Nama Lengkap" autofocus="" minlength="1" maxlength="100" value="<?php echo $row['nama_pegawai'];?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="telepon">Telepon</label>
														<input type="number" name="telepon" id="telepon" class="form-control" required="" autocomplete="off" placeholder="Telepon" value="<?php echo $row['telepon'];?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="fk_jabatan">Jabatan</label>
														<select class="form-control select2" name="fk_jabatan" id="fk_jabatan" required="" style="width: 100%;">
															<option value="<?php echo $row['fk_jabatan'];?>"><?php echo $row['nama_jabatan'];?></option>
															<?php
															$jabatanid = $row['fk_jabatan'];
															$query2 = mysqli_query($conn, "SELECT * FROM tb_jabatan WHERE id_jabatan != '$jabatanid' ORDER BY nama_jabatan ASC");
															while($row2 = mysqli_fetch_array($query2)) {
																?>
																<option value="<?php echo $row2['id_jabatan'];?>"><?php echo $row2['nama_jabatan'];?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="tanggal_lahir">Tanggal Lahir</label>
														<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required="" value="<?php echo $row['tanggal_lahir'];?>">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="jenis_kelamin">Jenis Kelamin</label>
														<select class="form-control select2" name="jenis_kelamin" id="jenis_kelamin" required="" style="width: 100%;">
															<option value="Laki - Laki" <?php if($row['jenis_kelamin'] == "Laki - Laki") {echo "selected=''";} ?>>Laki - Laki</option>
															<option value="Perempuan" <?php if($row['jenis_kelamin'] == "Perempuan") {echo "selected=''";} ?>>Perempuan</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<a href="pegawai" class="btn btn-danger">Kembali</a>
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
					url: "proses/update-pegawai.php",
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
								window.location = "pegawai";
							});
						}else {
							if(dataresponse.type == "telepon") {
								swal('Peringatan', 'Maaf, Telepon sudah digunakan', 'error');
							}else {
								swal('Peringatan', 'Maaf, gagal mengubah data', 'error');
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