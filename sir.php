<?php include 'koneksi.php'; ?>
<?php
if(!isset($_SESSION['userid'])) {
	echo "<script>alert('Silahkan masuk terlebih dahulu');window.location.href='masuk';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'menu/head.php'; ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
	<style type="text/css">
		.select2-selection__rendered {
			line-height: 45px !important;
			margin-left: 12px;
		}
		.select2-container .select2-selection--single {
			height: 49px !important;
			border: 1px solid #ebebeb;
			border-top-style: none;
			border-right-style: none;
			border-left-style: none;
		}
		.select2-selection__arrow {
			height: 48px !important;
		}
		.select2-container *:focus {
			outline: none;
		}
	</style>
</head>
<body>
	<div class="container pt-5 pb-4">
		<?php include 'menu/header.php'; ?>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<?php include 'menu/nav.php'; ?>
	</nav>
	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/dist-2/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<h1 class="mb-3 bread">Pembuatan Surat Penilaian Barang</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Pembuatan Surat Penilaian Barang <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-12">
								<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
									<li class="nav-item" style="width: 50%;">
										<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style="text-align: center;">Pengisian Data</a>
									</li>
									<li class="nav-item" style="width: 50%;">
										<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" style="text-align: center;">Riwayat Pengajuan</a>
									</li>
								</ul>
								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
										<div class="contact-wrap w-100 p-md-5 p-4">
										<form action="" method="POST" id="data-form" class="contactForm" enctype="multipart/form-data">
												<h5 class="mb-4">Daftarkan Data Anda</h5>
												<hr>
												<div class="row">
					<div class="col-md-12">
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
									<h4>Isi Data Komoditi</h4>
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
													<!-- <a href="event" class="btn btn-danger" style="width:40%">Kembali</a> -->
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<br>
					<h5 class="mb-4">List Data Anggota Di Daftarkan</h5>
					<div class="row">
					<div class="col-md-12">
										<table id="dtHorizontalExample" class="table table-bordered table-bordered table-sm" cellspacing="0" width="100%" border="3px">
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
															<a href="" class="btn btn-danger" id="delete-data1" data-id="<?php echo $tampil['id_bantu'];?>"><i class="fa fa-trash"></i></a>
														</td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
					</div>
					<br>
					<br>
					</div>



					
					<div class="col-md-12">
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
									<h4>Isi Data Anda</h4>
										<form role="form" action="#" method="POST" enctype="multipart/form-data" id="data-form2">
											<div class="row">
											<input class="form-control" type="text" name="id_pengajuan" value="<?php echo $kode;?>" readonly>
											<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="tanggal_pengajuan">Tanggal Pengajuan</label>
										<input type="text" readonly class="form-control"value="<?php echo tglIndonesia(date('d F Y'));?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="label" for="nama_lengkap">Nama Lengkap</label>
										<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required="" autocomplete="off" placeholder="Nama Lengkap" autofocus="" minlength="1" maxlength="100" readonly value="<?php echo $online['nama_lengkap'];?>">
										<input type="hidden" name="id_pemohon" id="id_pemohon" value="<?php echo $online['id_pemohon'];?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="nama_perusahaan">Nama Perusahaan</label>
										<input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan" readonly required="" autocomplete="off" autofocus="" minlength="1" maxlength="100"  value="<?php echo $online['nama_perusahaan'];?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="jabatan">Jabatan Di Perusahaan</label>
										<input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan Di Perusahaan" readonly required="" autocomplete="off" autofocus="" minlength="1" maxlength="100"  value="<?php echo $online['jabatan'];?>">
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
												</div>
											</form>
										</div>
									<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
										<div class="table-responsive">
											<table class="table table-striped table-bordered datatable" style="width:100%">
												<thead>
													<tr>
														<th>No</th>
														<th>Tanggal</th>
														<th>Nama</th>
														<th>Nama Perusahaan</th>
														<!-- <th>Dokumen</th> -->
														<!-- <th>Status</th> -->
														<th>Keterangan</th>
														<th>Masa Berlaku</th>
														<th>Pengambilan Surat</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$no = 1;
													$kueri = mysqli_query($conn, "SELECT * FROM tb_pengajuan, tb_pemohon WHERE tb_pemohon.id_pemohon=tb_pengajuan.id_pemohon AND tb_pengajuan.id_pemohon = '$userid' ORDER BY id_pengajuan DESC");
													while($tampil = mysqli_fetch_array($kueri)) {
														$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pengujian WHERE id_pengajuan='$tampil[id_pengajuan]'"));
														if ($tampil['status']=='Proses'){
															$keterangan ='Tunggu Proses Dari Admin';
															$waktu = '';
														}elseif ($tampil['status']=='Revisi'){
															$keterangan ='Tolong Upload Ulang KTP Anda';
															$waktu = '';
														}elseif ($tampil['status']=='Diterima'){
															$keterangan ='Lakukan Pengantaran Bahan Uji';
															$waktu = '';
														}elseif ($tampil['status']=='Setuju' && $cek==0){
															$keterangan ='Bahan Uji Anda Sedang Dalam Pengujian';
															$waktu = '';
														}elseif ($tampil['status']=='Setuju' && $cek==1){
															$keterangan ='Selamat, SK Siap dan dapat dilakukan pengambilan';
															$day    =date('d', strtotime('+1 year', strtotime( $tampil['created'] )));
															$month    =date('m', strtotime('+1 year', strtotime( $tampil['created'] )));
															$year    =date('Y', strtotime('+1 year', strtotime( $tampil['created'] )));
															
															$days    =(int)((mktime (0,0,0,$month,$day,$year) - time())/86400);
															$waktu = "<b>$days</b> hari";
															// $waktu = "Masih ada <b>$days</b> hari lagi, sampai tanggal $day/$month/$year";
														}elseif ($tampil['status']=='Ambil'){
															$keterangan ='SK Sudah Diambil';
															$day    =date('d', strtotime('+1 year', strtotime( $tampil['created'] )));
															$month    =date('m', strtotime('+1 year', strtotime( $tampil['created'] )));
															$year    =date('Y', strtotime('+1 year', strtotime( $tampil['created'] )));
															
															$days    =(int)((mktime (0,0,0,$month,$day,$year) - time())/86400);
															$waktu = "<b>$days</b> hari";
														}elseif ($tampil['status']=='Tolak'){
															$waktu = '';
															$keterangan ='Maaf, Pengajuan Anda Di Tolak';
														}
														?>
														<tr>
															<td><?php echo $no++;?></td>
															<td><?php echo tglIndonesia(date('d F Y H:i:s', strtotime($tampil['created'])));?></td>
															<td><?php echo $tampil['nama_lengkap'];?></td>
															<td><?php echo $tampil['nama_perusahaan'];?></td>
															<!-- <td align="center">
																<div class="badge badge-success" data-toggle="modal" data-target="#exampleModal1" data-id="<?php echo $tampil['id_pengajuan'];?>" style="cursor: pointer;">Lihat Gambar</div>
															</td> -->
															<!-- <td><?php echo $tampil['status'];?></td> -->
															<td><?php echo $keterangan;?></td>
															<td><?php echo $waktu;?></td>
															<td>
										<?php if (($tampil['pengambilan'] =='' || $tampil['pengambilan'] === NULL) && $tampil['status']=='Setuju'){ ?>
										<form role="form" action="proses/update-pengajuan1.php" method="POST" enctype="multipart/form-data">
											<input type="hidden" name="id" id="id" value="<?php echo $tampil['id_pengajuan'];?>">
											<div class="row">
												<div class="col-md-12>
													<div class="form-group">
														<select class="form-control" name="pengambilan"
															id="pengambilan" required="" style="width: 250px;">
															<option value="" <?php if($tampil['pengambilan'] == "") {echo "selected=''";} ?>></option>
															<option value="Di Ambil Ke kantor" <?php if($tampil['pengambilan'] == "Di Ambil Ke kantor") {echo "selected=''";} ?>>Di Ambil Ke kantor</option>
															<option value="Di Kirim Melalui POS" <?php if($tampil['pengambilan'] == "Di Kirim Melalui POS") {echo "selected=''";} ?>>Di Kirim Melalui POS</option>
														</select>
													</div>
												</div>
												<hr>
												<div class="col-md-6">
													<button type="submit" class="btn btn-primary">kirim</button>
												</div>
											</div>
										</form>
										<?php }else{ ?>
											<?php echo $tampil['pengambilan'];?>
										<?php } ?>
															</td>
															<td style="white-space: nowrap;">
																<?php 
																if($cek==1) { 
																	$kueri_pengujian = mysqli_query($conn, "SELECT * FROM tb_pengujian WHERE id_pengajuan='$tampil[id_pengajuan]'");
																	$tampil_pengujian = mysqli_fetch_array($kueri_pengujian);
																?>
																	<!-- <a href="cetak-pengujian?id=<?php echo $tampil_pengujian['id_pengujian'];?>" target="_blank" class="btn btn-warning"><i class="fa fa-print"></i></a> -->
																<?php } ?>
																<?php if($tampil['status'] == "Revisi") { ?>
																	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $tampil['id_pengajuan'];?>"><i class="fa fa-edit"></i></button>
																<?php }else { ?>
																	<a href="detail-sir?id=<?php echo $tampil['id_pengajuan'];?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
																<?php } ?>
																<?php if($tampil['status'] == "Proses") { ?>
																	<a href="" class="btn btn-danger" id="delete-data" data-id="<?php echo $tampil['id_pengajuan'];?>"><i class="fa fa-trash"></i></a>
																<?php }else { ?>
																	<button type="button" class="btn btn-danger" disabled=""><i class="fa fa-trash"></i></button>
																<?php } ?>
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
		</div>
	</section>
	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<?php include 'menu/footer.php'; ?>
	</footer>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Revisi</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="fetched-data"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Data Pengajuan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="fetched-data1"></div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'menu/loader.php'; ?>
	<?php include 'menu/script.php'; ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.datatable').DataTable();
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".select2").select2();
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#exampleModal').on('show.bs.modal', function (e) {
				var rowid = $(e.relatedTarget).data('id');
				$.ajax({
					type : 'post',
					url : 'proses/get-pengajuanrevisi.php',
					data :  'rowid='+ rowid,
					success : function(data){
						$('.fetched-data').html(data);
					}
				});
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#exampleModal1').on('show.bs.modal', function (e) {
				var rowid = $(e.relatedTarget).data('id');
				$.ajax({
					type : 'post',
					url : 'proses/get-pengajuan.php',
					data :  'rowid='+ rowid,
					success : function(data){
						$('.fetched-data1').html(data);
					}
				});
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#data-form5").submit(function(e) {
				e.preventDefault();
				var data = new FormData(this);
				$.ajax({
					type: "POST",
					url: "proses/update-pengajuan1.php",
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
								window.location = "sir";
							});
						}else if(dataresponse.status == "2") {
							swal('Peringatan', 'Maaf, data sudah digunakan', 'error');
						}else {
							swal('Peringatan', 'Maaf, gagal mengubah data', 'error');
						}
					}
				});
				return false;
			});
		});
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
							Swal.fire('Peringatan', 'Maaf, gagal menambah data', 'error');
						}else if(dataresponse.status == "1") {
							Swal.fire({
								title: "Pemberitahuan",
								text: "Berhasil menambah data ",
								icon: "success"
							}).then(function() {
								window.location = "sir";
							});
						}else {
							Swal.fire('Peringatan', 'Maaf, gagal menambah data', 'error');
						}
					}
				});
				return false;
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
							Swal.fire('Peringatan', 'Maaf, gagal menambah data', 'error');
						}else if(dataresponse.status == "1") {
							Swal.fire({
								title: "Pemberitahuan",
								text: "Berhasil menambah data ",
								icon: "success"
							}).then(function() {
								window.location = "sir";
							});
						}else if(dataresponse.status == "2") {
							Swal.fire('Peringatan', 'Anda belum memasukan data komoditi', 'error');
						}else {
							Swal.fire('Peringatan', 'Maaf, gagal menambah data', 'error');
						}
					}
				});
				return false;
			});
		});
	</script>
	<script type="text/javascript">
		$(document).on('click','#delete-data1', function(e) {
			e.preventDefault();
			var id = $(this).data('id');
			Swal.fire({
				title: 'Apakah Anda yakin?',
				text: 'Setelah dihapus, akan hilang',
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya, hapus saja!',
				cancelButtonText: 'Jangan'
			}).then((result) => {
				console.log(result);
				if (result.value) {
					$.ajax({
						type: "POST",
						url: "proses/delete-pengajuanbantu.php",
						data: {'id':id},
						success: function(response) {
							var dataresponse = JSON.parse(response);
							console.log(dataresponse);
							if(dataresponse.status == "1") {
								Swal.fire({
									icon: 'success',
									title: 'Pemberitahuan',
									text: 'Data berhasil dihapus'
								}).then(function() {
									window.location.href='sir'
								});
							}else {
								swal('Peringatan', 'Data gagal dihapus', 'error');
							}
						}
					});
				}
			});
		});
	</script>
	<script type="text/javascript">
		$(document).on('click','#delete-data', function(e) {
			e.preventDefault();
			var id = $(this).data('id');
			Swal.fire({
				title: 'Apakah Anda yakin?',
				text: 'Setelah dihapus, Surat Permohonan Kepindahan akan hilang dari riwayat pengajuan',
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya, hapus saja!',
				cancelButtonText: 'Jangan'
			}).then((result) => {
				console.log(result);
				if (result.value) {
					$.ajax({
						type: "POST",
						url: "proses/delete-pengajuan.php",
						data: {'id':id},
						success: function(response) {
							var dataresponse = JSON.parse(response);
							console.log(dataresponse);
							if(dataresponse.status == "1") {
								Swal.fire({
									icon: 'success',
									title: 'Pemberitahuan',
									text: 'Pengajuan berhasil dihapus'
								}).then(function() {
									window.location.href='sir'
								});
							}else {
								swal('Peringatan', 'Pengajuan gagal dihapus', 'error');
							}
						}
					});
				}
			});
		});
	</script>
</body>
</html>