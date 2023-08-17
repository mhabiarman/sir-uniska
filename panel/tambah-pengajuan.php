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
						<h1>Tambah Data Pengajuan</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="beranda">Beranda</a></div>
							<div class="breadcrumb-item"><a href="pengajuan">Data Pengajuan</a></div>
							<div class="breadcrumb-item">Tambah Data Pengajuan</div>
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
											<?php
											$hasil = mysqli_query($conn, "SELECT max(id_pengajuan) as maxKode FROM tb_pengajuan");
											$data = mysqli_fetch_array($hasil);
											$kode = $data['maxKode'];
											$noUrut = (int) substr($kode, 0, 4);
											$noUrut++;
											// $char = "PNG-";
                                            $bulan = date('m');
                                            
                                            if($bulan == 1) {
                                                $bulanRomawi = "I";
                                            }else if($bulan == 2) {
                                                $bulanRomawi = "II";
                                            }else if($bulan == 3) {
                                                $bulanRomawi = "III";
                                            }else if($bulan == 4) {
                                                $bulanRomawi = "IV";
                                            }else if($bulan == 5) {
                                                $bulanRomawi = "V";
                                            }else if($bulan == 6) {
                                                $bulanRomawi = "VI";
                                            }else if($bulan == 7) {
                                                $bulanRomawi = "VII";
                                            }else if($bulan == 8) {
                                                $bulanRomawi = "VIII";
                                            }else if($bulan == 9) {
                                                $bulanRomawi = "IX";
                                            }else if($bulan == 10) {
                                                $bulanRomawi = "X";
                                            }else if($bulan == 11) {
                                                $bulanRomawi = "XI";
                                            }else if($bulan == 12) {
                                                $bulanRomawi = "XII";
                                            }else {
                                                $bulanRomawi = "I";
                                            }
											$kode = sprintf("%04s", $noUrut).'/IB/'.$bulanRomawi.'/'.date('Y');
											?>
											<input class="form-control" type="hidden" name="id_pengajuan" value="<?php echo $kode;?>" readonly>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="id_komoditi">Pilih Komoditi</label>
														<?php
														$sql =  "SELECT * FROM tb_komoditi ORDER BY nama_komoditi ASC";
														?>
														<select class="form-control select2" name="id_komoditi" id="id_komoditi" required="" style="width: 100%;">
															<option value="">Pilih Komoditi</option>
															<?php
															$result = mysqli_query($conn, $sql);
															while ($data1 = mysqli_fetch_array($result)){
																echo '<option value="' . $data1['id_komoditi'] . '">' . $data1['nama_komoditi'] . '</option>';   
															}  
															?>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="nama">Nama Komoditi</label>
														<input type="text" name="nama" id="nama" class="form-control" required="" autocomplete="off" placeholder="Nama Komoditi" minlength="1" maxlength="100">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="jumlah_pengajuan">Jumlah Pengajuan</label>
														<input type="number" name="jumlah_pengajuan" id="jumlah_pengajuan" class="form-control" required="" autocomplete="off" placeholder="Jumlah Pengajuan">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="satuan_pengajuan">Satuan</label>
														<input type="text" name="satuan_pengajuan" id="satuan_pengajuan" class="form-control" required="" autocomplete="off" placeholder="Satuan" minlength="1" maxlength="100">
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
										<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped" id="table-1">
											<thead>
												<tr>
													<th>Nomor</th>
													<th>Jenis Komoditi</th>
													<th>Nama Komoditi</th>
													<!-- <th>Jenis</th> -->
													<th>Jumlah</th>
													<th>Satuan</th>
													<th>Hapus</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no = 1;
												$kueri = mysqli_query($conn, "SELECT * FROM tb_pengajuanbantu,tb_komoditi WHERE tb_pengajuanbantu.id_komoditi=tb_komoditi.id_komoditi AND id_pengajuan='$kode'");
												while($tampil = mysqli_fetch_array($kueri)) {
													?>
													<tr>
														<td><?php echo $no++;?></td>
														<td><?php echo $tampil['nama_komoditi'];?></td>
														<td><?php echo $tampil['nama'];?></td>
														<td><?php echo $tampil['jumlah_pengajuan'];?></td>
														<td><?php echo $tampil['satuan_pengajuan'];?></td>
														<td style="white-space: nowrap;">
															<a href="" class="btn btn-danger" id="delete-data" data-id="<?php echo $tampil['id_bantu'];?>"><i class="fas fa-trash-alt"></i></a>
														</td>
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
									<h4>Isi Data Pengajuan</h4>
										<form role="form" action="#" method="POST" enctype="multipart/form-data" id="data-form2">
											<input class="form-control" type="hidden" name="id_pengajuan" value="<?php echo $kode;?>" readonly>
											<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="tanggal_pengajuan">Tanggal Pengajuan</label>
										<input type="date" name="tanggal_pengajuan" id="tanggal_pengajuan" class="form-control" required="" autocomplete="off" placeholder="Tanggal Pengajuan" autofocus="" value="<?php echo date('Y-m-d'); ?>">
									</div>
								</div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="id_pemohon">Pilih Pemohon</label>
                                        <?php
                                        $sql =  "SELECT * FROM tb_pemohon ORDER BY nama_lengkap ASC";
                                        ?>
                                        <select class="form-control select2" name="id_pemohon" id="id_pemohon" required="" style="width: 100%;">
                                            <option value="">Pilih Pemohon</option>
                                            <?php
                                            $result = mysqli_query($conn, $sql);
                                            while ($data1 = mysqli_fetch_array($result)){
                                                echo '<option value="' . $data1['id_pemohon'] . '">' . $data1['nama_lengkap'] . '</option>';   
                                            }  
                                            ?>
                                        </select>
                                    </div>
                                </div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="nama_perusahaan">Nama Perusahaan</label>
														<input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan" required="" autocomplete="off" autofocus="" readonly minlength="1" maxlength="100">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="jabatan">Jabatan Di Perusahaan</label>
														<input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan Di Perusahaan" required="" autocomplete="off" autofocus="" readonly minlength="1" maxlength="100">
													</div>
												</div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pengujian">Pengujian</label>
                                        <input type="text" class="form-control inputtags" name="pengujian" id="pengujian" required="" autocomplete="off" placeholder="Pengujian">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fc_ktp">Upload KTP</label>
                                        <input type="file" class="form-control" name="fc_ktp" id="fc_ktp" required="" autocomplete="off" placeholder="Upload KTP" autofocus="" accept="image/*">
                                    </div>
                                </div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="alamat">Alamat</label>
										<input type="text" name="alamat" id="alamat" class="form-control" required="" autocomplete="off" placeholder="Alamat" minlength="1" maxlength="100">
									</div>
								</div>
											</div>

											<div class="row" align="center">
												<div class="col-md-12">
													<button type="submit" class="btn btn-primary" style="width:80%">Selesai</button>
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
		$(document).ready(function() {
			$("#data-form").submit(function(e) {
				e.preventDefault();
				var data = new FormData(this);
				$.ajax({
					type: "POST",
					url: "proses/add-pengajuanbantu.php",
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
								window.location = "tambah-pengajuan";
							});
						}else if(dataresponse.status == "2") {
							swal('Peringatan', 'Maaf, Data sudah digunakan', 'error');
						}else {
							swal('Peringatan', 'Maaf, gagal menambah data', 'error');
						}
					}
				});
				return false;
			});
		});
	</script>

	<script type="text/javascript">
		$(document).on('click','#delete-data', function(e) {
			e.preventDefault();
			var id = $(this).data('id');
			swal({
				title: 'Apakah Anda yakin?',
				text: 'Setelah dihapus, Anda tidak dapat memulihkan data ini !',
				icon: 'warning',
				buttons: {
					cancel: {
						text: "Jangan",
						value: false,
						visible: true,
						className: "",
						closeModal: true,
					},
					confirm: {
						text: "Ya, hapus saja!",
						value: true,
						visible: true,
						className: "",
						closeModal: true
					},
				},
				dangerMode: true,
			}).then((willDelete) => {
				if (willDelete) {
					$.ajax({
						type: "POST",
						url: "proses/delete-pengajuanbantu.php",
						data: {'id':id},
						success: function(response) {
							var dataresponse = JSON.parse(response);
							console.log(dataresponse);
							if(dataresponse.status == "1") {
								swal({
									title: "Pemberitahuan",
									text: "Berhasil menghapus data",
									icon: "success"
								}).then(function() {
									window.location = "tambah-pengajuan";
								});
							}else {
								swal('Peringatan', 'Kesalahan dalam sebuah query', 'error');
							}
						}
					});
				}
			});
		});
	</script>


		<script type="text/javascript">
			$(document).ready(function() {
				$("#data-form2").submit(function(e) {
					e.preventDefault();
					var data = new FormData(this);
					$.ajax({
						type: "POST",
						url: "proses/add-pengajuan.php",
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
									window.location = "pengajuan";
								});
							}else if(dataresponse.status == "2") {
								swal('Peringatan', 'Maaf, Data sudah digunakan', 'error');
							}else {
								swal('Peringatan', 'Maaf, gagal menambah data', 'error');
							}
						}
					});
					return false;
				});
			});
		</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#id_pemohon").change(function(){
        var id_pemohon = $("#id_pemohon").val();
            $.ajax({
                type: 'GET',
                url: "proses/get-pemohon.php",
                data: {id_pemohon: id_pemohon},
                cache: false,
                success: function(msg){
                   var json = msg,
                    obj = JSON.parse(json);
                    $('#jabatan').val(obj.jabatan);
                    $('#nama_perusahaan').val(obj.nama_perusahaan);
                }
            });
        });

     });
    </script>
	</body>
	</html>