<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<meta name="author" content="BSPJI">
	<meta name="description" content="APLIKASI PENGAJUAN PERMOHONAN STANDARISASI MAKANAN PADA BALAI STANDARISASI DAN PELAYANAN JASA INDUSTRI BANJARBARU">
	<meta name="keywords" content="jafar, rizkikarianata">
	<title>BSPJI</title>
	<link rel="shortcut icon" href="../assets/images/favicon-2.png">
	<link rel="stylesheet" href="../assets/plugins/myplugins/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/plugins/myplugins/fontawesome/css/all.css">
	<link rel="stylesheet" href="../assets/plugins/bootstrap-social/bootstrap-social.css">
	<link rel="stylesheet" href="../assets/dist/css/style.css">
	<link rel="stylesheet" href="../assets/dist/css/components.css">
	<style type="text/css">
		body {
			background: linear-gradient(to bottom right, #3e4095, #8183db);
		}
		img.kanan {
    float:left;display:block;
    bottom: 8px;
    right: 16px;
	padding-left: 20px;
    font-size: 18px;
    height: 150px;
	/* opacity: 0.5; */
}
	</style>
</head>
<body>
<div id="app">
		<section class="section">
			<div class="container mt-5">
				<div class="row">
					<div class="card-header">
						<div class="row">
						<div class="col-md-12">
						<!-- <img class="kanan" src="../assets/images/favicon.png" />
							<h1 style="color: white;">APLIKASI PENDAFTARAN EVENT BUDAYA TAHUNAN BERBASIS WEB DENGAN RESPONSIVE WEB DESIGN DI DINAS KEBUDAYAAN DAN PARIWISATA <br>KABUPATEN BANJAR</h1>
							<h1 style="color: white;">Akhmad Firdaus Rifani - 310116012420</h1> -->
							<!-- <div class="clearfix">
							<div class="img-container">
							<img src="../assets/images/favicon.png" alt="Italy" style="width:160px">
							</div>
							<div class="img-container">
							<h1 style="color: white;">APLIKASI PENDAFTARAN EVENT BUDAYA TAHUNAN BERBASIS WEB DENGAN RESPONSIVE WEB DESIGN DI DINAS KEBUDAYAAN DAN PARIWISATA <br>KABUPATEN BANJAR</h1>
							</div>
							<div class="img-container">
							<img src="../assets/images/favicon.png" alt="Mountains" style="width:160px">
							</div>
							</div> -->
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<table>
								<thead>
									<tr align="center">
										<th><img style="margin: auto;" class="kanan" src="../assets/images/favicon.png" /></th>
										<th><h1 style="color: white;">APLIKASI PENGAJUAN PERMOHONAN STANDARISASI MAKANAN PADA BALAI STANDARISASI DAN PELAYANAN JASA INDUSTRI BANJARBARU</h1></th>
										<th><img class="kanan" src="../assets/images/uniska.png" /></th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
					<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3" >
						<div class="card card-primary" style="border-radius: 20px;">
							<div class="card-body">
								<form method="POST" action="#" id="login">
									<div class="form-group">
										<label for="username">Nama Pengguna</label>
										<input type="text" class="form-control" name="username" id="username" required="" autofocus="" autocomplete="off" placeholder="Nama Pengguna" minlength="5" maxlength="20">
									</div>
									<div class="form-group">
										<label for="username">Kata Sandi</label>
										<input type="password" class="form-control" name="password" id="password" required="" autocomplete="off" placeholder="Kata Sandi" minlength="5" maxlength="20">
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg btn-block">
											Masuk
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<script src="../assets/plugins/myplugins/jquery-3.3.1.min.js"></script>
	<script src="../assets/plugins/myplugins/popper.min.js"></script>
	<script src="../assets/plugins/myplugins/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="../assets/plugins/sweetalert/docs/assets/sweetalert/sweetalert.min.js"></script>
	<script src="../assets/dist/js/stisla.js"></script>
	<script src="../assets/dist/js/scripts.js"></script>
	<script src="../assets/dist/js/custom.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#login").submit(function(e) {
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
							swal('Peringatan', 'Maaf, Kami tidak dapat menemukan akun Anda', 'error');
						}else if(dataresponse.status == "1") {
							swal({
								title: "Pemberitahuan",
								text: "Selamat datang "+dataresponse.nama,
								icon: "success"
							}).then(function() {
								window.location = "beranda";
							});
						}else {
							swal('Peringatan', 'Maaf, Kami tidak dapat menemukan akun Anda', 'error');
						}
					}
				});
				return false;
			});
		});
	</script>
</body>
</html>