<?php include '../koneksi.php'; ?>
<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tb_pengajuan, tb_pemohon WHERE tb_pemohon.id_pemohon=tb_pengajuan.id_pemohon AND id_pengajuan = '$id'");
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
						<h1>Tambah Data Pengujian</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="beranda">Beranda</a></div>
							<div class="breadcrumb-item"><a href="pengajuan">Data Pengujian</a></div>
							<div class="breadcrumb-item">Tambah Data Pengujian</div>
						</div>
					</div>

					<div class="row">
					<div class="col-md-6">
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
									<h4>Pilih Komoditi</h4>
										<form role="form" action="#" method="POST" enctype="multipart/form-data" id="data-form">
											<input class="form-control" type="hidden" name="id_pengajuan" value="<?php echo $id;?>" readonly>
											<div class="row">
											<div class="col-md-6">
									<div class="form-group">
										<label for="tanggal_pengujian">Tanggal Pengajuan</label>
										<input type="date" name="tanggal_pengujian" id="tanggal_pengujian" class="form-control" readonly required="" autocomplete="off" placeholder="Tanggal Pengajuan" autofocus="" value="<?php echo date('Y-m-d'); ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="nama_lengkap">Nama Pemohon</label>
										<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" readonly required="" autocomplete="off" placeholder="Nama Pemohon" minlength="1" maxlength="100" value="<?php echo $row['nama_lengkap'];?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="jabatan">Jabatan</label>
										<input type="text" name="jabatan" id="jabatan" class="form-control" readonly required="" autocomplete="off" placeholder="Jabatan" minlength="1" maxlength="100" value="<?php echo $row['jabatan'];?>">
									</div>
								</div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pengujian">Pengujian</label>
                                        <input type="text" class="form-control inputtags" name="pengujian" id="pengujian" readonly required="" autocomplete="off" placeholder="Pengujian" value="<?php echo $row['pengujian'];?>">
                                    </div>
                                </div>
											</div>
										</form>
										<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped" id="table-1">
											<thead>
												<tr>
													<th>Nomor</th>
													<th>Nama Komoditi</th>
													<th>Jumlah</th>
													<th>Satuan</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no = 1;
												$kueri = mysqli_query($conn, "SELECT * FROM tb_pengajuanbantu,tb_komoditi WHERE tb_pengajuanbantu.id_komoditi=tb_komoditi.id_komoditi AND id_pengajuan='$id'");
												while($tampil = mysqli_fetch_array($kueri)) {
													?>
													<tr>
														<td><?php echo $no++;?></td>
														<td><?php echo $tampil['nama_komoditi'];?></td>
														<td><?php echo $tampil['jumlah_pengajuan'];?></td>
														<td><?php echo $tampil['satuan_pengajuan'];?></td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>

					<div class="col-md-6">
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
									<h4>Isi Data Pengujian</h4>
										<form role="form" action="#" method="POST" enctype="multipart/form-data" id="data-form2">
										<input class="form-control" type="hidden" name="id_pengajuan" value="<?php echo $id;?>" readonly>
											<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="tanggal_pengujian">Tanggal Pengujian</label>
										<input type="date" name="tanggal_pengujian" id="tanggal_pengujian" class="form-control" required="" autocomplete="off" placeholder="Tanggal Pengujian" autofocus="" value="<?php echo date('Y-m-d'); ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="tanggal_selesai">Tanggal Selesai</label>
										<input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control" required="" autocomplete="off" placeholder="Tanggal Selesai" autofocus="" value="<?php echo date('Y-m-d', strtotime('+1 days')); ?>">
									</div>
								</div>
												<div class="col-md-6">
													<div class="form-group">
													<div class="form-check form-check-inline">
									                        <input class="form-check-input" type="checkbox" name="sdm" id="sdm" value="1">
									                        <label class="form-check-label" for="inlineCheckbox1">SDM</label>
									                </div>
													</div>
													<div class="form-group">
													<div class="form-check form-check-inline">
									                        <input class="form-check-input" type="checkbox" name="peralatan" id="peralatan" value="1">
									                        <label class="form-check-label" for="inlineCheckbox2">Peralatan</label>
									                </div>
													</div>
													<div class="form-group">
													<div class="form-check form-check-inline">
									                        <input class="form-check-input" type="checkbox" name="bahan_kimia" id="bahan_kimia" value="1">
									                        <label class="form-check-label" for="inlineCheckbox3">Bahan Kimia</label>
									                </div>
													</div>
													</div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="informasi">Informasi</label>
                                        <input type="text" class="form-control" name="informasi" id="informasi" required="" autocomplete="off" placeholder="Informasi">
                                    </div>
                                </div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="id_alat">Pilih Alat</label>
										<?php
										$sql =  "SELECT * FROM tb_alat ORDER BY nama_alat ASC";
										?>
										<select class="form-control select2" name="id_alat" id="id_alat" required="" style="width: 100%;">
											<option value="">Pilih Alat</option>
											<?php
											$result = mysqli_query($conn, $sql);
											while ($data1 = mysqli_fetch_array($result)){
												echo '<option value="' . $data1['id_alat'] . '">' . $data1['nama_alat'] . '</option>';   
											}  
											?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="id_komoditi">Pilih Petugas Penerima</label>
										<?php
										$sql =  "SELECT * FROM tb_pegawai ORDER BY nama_pegawai ASC";
										?>
										<select class="form-control select2" name="id_pegawai" id="id_pegawai" required="" style="width: 100%;">
											<option value="">Pilih Petugas Penerima</option>
											<?php
											$result = mysqli_query($conn, $sql);
											while ($data1 = mysqli_fetch_array($result)){
												echo '<option value="' . $data1['id_pegawai'] . '">' . $data1['nama_pegawai'] . '</option>';   
											}  
											?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
										<div class="form-group">
											<label for="status">Status Pengujian</label>
											<select class="form-control select2" name="status" id="status" required="" style="width: 100%;">
													<option value="">Pilih Status Pengujian</option>
													<option value="Setuju">Setuju</option>
													<option value="Tolak">Tolak</option>
											</select>
										</div>
								</div>

								</div>

								<div class="row" id="ala" style="display: none;">
										<div class="col-md-12">
											<div class="form-group">
												<label for="alasan">Alasan</label>
												<textarea class="form-control" name="alasan" id="alasan" placeholder="Tulis Alasan" autocomplete="off" rows="4" style="height: 125px;"></textarea>
											</div>
										</div>
								</div>
								<div class="row" align="center">
												<div class="col-md-12">
													<button type="submit" class="btn btn-primary" style="width:40%">Simpan</button>
													<a href="pengajuan" class="btn btn-warning" style="width:40%">Kembali</a>
												</div>
											</div>
										</form>
									</div>
								</div>
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
	<script src="assets/dist/js/bs-custom-file-input.min.js"></script>
	<script type="text/javascript">
		$(".inputtags").tagsinput('items');
	</script>
	<script type="text/javascript">
		$('#status').on('change', function() {
			var valstatus = $(this).val();
			if(valstatus == "Tolak") {
				document.getElementById('ala').style.display = 'block';
				document.getElementById('alasan').setAttribute("required", "");
			}else if(valstatus == "Setuju") {
				document.getElementById('ala').style.display = 'none';
				document.getElementById('alasan').removeAttribute("required");
			}
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#data-form2").submit(function(e) {
				e.preventDefault();
				var data = new FormData(this);
				$.ajax({
					type: "POST",
					url: "proses/add-pengujian.php",
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
								window.location = "pengujian";
							});
						}else if(dataresponse.status == "2") {
							swal('Peringatan', 'Data ini sudah diproses', 'error');
						}
					}
				});
				return false;
			});
		});
	</script>
	</body>
	</html>