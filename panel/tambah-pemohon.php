<?php include '../koneksi.php'; ?>
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
						<h1>Tambah Pemohon</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="beranda">Beranda</a></div>
							<div class="breadcrumb-item"><a href="pemohon">Pemohon</a></div>
							<div class="breadcrumb-item">Tambah Pemohon</div>
						</div>

					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<form role="form" action="#" method="POST" enctype="multipart/form-data" id="data-form">
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
														<input type="text" name="telepon" id="telepon" class="form-control" required="" autocomplete="off" placeholder="Telepon" onkeypress="return hanyaAngka(event)" minlength="10" maxlength="12">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="nik">NIK</label>
														<input type="text" name="nik" id="nik" class="form-control" required="" autocomplete="off" placeholder="NIK" onkeypress="return hanyaAngka(event)" minlength="16" maxlength="16">
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
														<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required="" onchange="getAge();">
													<input type="hidden" name="umur" id="umur" class="form-control" placeholder="Tempat Lahir" required="" autocomplete="off" maxlength="25" minlength="3">
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
											<div class="row">
												<div class="col-md-12">
													<a href="pemohon" class="btn btn-danger">Kembali</a>
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
function getAge() {
	var date = document.getElementById('tanggal_lahir').value;
 
	// if(date === ""){
	// 	// alert("Please complete the required field!");
	// 	// document.getElementById('umur').value = 'a';
    // }else{
		var today = new Date();
		var tanggal_lahir = new Date(date);
		var year = 0;
		if (today.getMonth() < tanggal_lahir.getMonth()) {
			year = 1;
		} else if ((today.getMonth() == tanggal_lahir.getMonth()) && today.getDate() < tanggal_lahir.getDate()) {
			year = 1;
		}
		var age = today.getFullYear() - tanggal_lahir.getFullYear() - year;
 
		if(age < 0){
			age = 0;
		}
		document.getElementById('umur').value = age;
	// }
	// if (age>13){
	// 	alert("Tanggal Lahir Tidak Boleh Lebih Dari 13 Tahun");
	// 	document.getElementById('tanggal_lahir').value = '';
	// }
}
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#data-form").submit(function(e) {
				e.preventDefault();
				var data = new FormData(this);
				$.ajax({
					type: "POST",
					url: "proses/add-pemohon.php",
					data: data,
					processData: false,
					contentType: false,
					success: function(response) {
						var dataresponse = JSON.parse(response);
						console.log(dataresponse);
						if(dataresponse.status == "0") {
							swal('Peringatan', 'Maaf, gagal menambah data', 'error');
						}else if(dataresponse.status == "1") {
							swal({
								title: "Pemberitahuan",
								text: "Berhasil menambah data ",
								icon: "success"
							}).then(function() {
								window.location = "pemohon";
							});
						}else if(dataresponse.status == "2") {
							swal('Peringatan', 'Maaf, Telepon sudah digunakan', 'error');
						}else if(dataresponse.status == "3") {
							swal('Peringatan', 'Maaf, Nomor Induk Kependudukan sudah digunakan', 'error');
						}else if(dataresponse.status == "4") {
							swal('Peringatan', 'Maaf, Nama Pengguna sudah digunakan', 'error');
						}else if(dataresponse.status == "5") {
							swal('Peringatan', 'Tanggal Lahir Minimal 17 Tahun', 'error');
						}else if(dataresponse.status == "6") {
							swal('Peringatan', 'Nomor Telpon Di Awali 0', 'error');
						}else {
							swal('Peringatan', 'Maaf, gagal menambah data', 'error');
						}
					}
				});
				return false;
			});
		});
	</script>
</body>
</html>