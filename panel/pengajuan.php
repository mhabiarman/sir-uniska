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
						<h1>Pengajuan</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="beranda">Beranda</a></div>
							<div class="breadcrumb-item">Pengajuan</div>
						</div>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
								<div class="card-header">
										<a href="tambah-pengajuan" class="btn btn-primary" style="border-radius: 4px;"><i class="fas fa-plus"></i></a>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-striped" id="table-1">
												<thead>
													<tr>
														<th>No</th>
														<th>Tanggal</th>
														<th>Nama</th>
														<th>Nama Perusahaan</th>
														<th>Status</th>
														<th>Dokumen</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$no = 1;
													$kueri = mysqli_query($conn, "SELECT * FROM tb_pengajuan, tb_pemohon WHERE tb_pemohon.id_pemohon=tb_pengajuan.id_pemohon ORDER BY id_pengajuan DESC");
													while($tampil = mysqli_fetch_array($kueri)) {
														$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pengujian WHERE id_pengajuan='$tampil[id_pengajuan]'"));
														if ($tampil['status']=='Proses'){
															$keterangan ='Tunggu Proses Dari Admin';
														}elseif ($tampil['status']=='Revisi'){
															$keterangan ='Tolong Upload Ulang KTP Anda';
														}elseif ($tampil['status']=='Diterima'){
															$keterangan ='Lakukan Pengantaran Bahan Uji';
														}elseif ($tampil['status']=='Setuju' && $cek==0){
															$keterangan ='Bahan Uji Anda Sedang Dalam Pengujian';
														}elseif ($tampil['status']=='Setuju' && $cek==1){
															$keterangan ='Selamat, SK Siap dan dapat dilakukan pengambilan';
														}elseif ($tampil['status']=='Ambil'){
															$keterangan ='SK Sudah Diambil';
														}elseif ($tampil['status']=='Tolak'){
															$keterangan ='Maaf, Pengajuan Anda Di Tolak';
														}
														?>
														<tr>
															<td><?php echo $no++;?></td>
															<td><?php echo tglIndonesia(date('d F Y H:i:s', strtotime($tampil['created'])));?></td>
															<td><?php echo $tampil['nama_lengkap'];?></td>
															<td><?php echo $tampil['nama_perusahaan'];?></td>
															<td><?php echo $keterangan;?></td>
															<td>
																<div class="badge badge-success" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $tampil['id_pengajuan'];?>" style="cursor: pointer;">Lihat Gambar</div>
															</td>
															<td style="white-space: nowrap;">
																<!-- <?php if($tampil['status'] == "Setuju") { ?>
																	<a href="../cetak-pengajuan?id=<?php echo $tampil['id_pengajuan'];?>" target="_blank" class="btn btn-warning"><i class="fas fa-print"></i></a>
																<?php } ?> -->
																<?php if($tampil['status'] == "Setuju") { ?>
																<a href="tambah-pengujian?id=<?php echo $tampil['id_pengajuan'];?>" class="btn btn-warning"><i class="fas fa-angle-double-right"></i></a>
																<?php } ?>

																<a href="detail-pengajuan?id=<?php echo $tampil['id_pengajuan'];?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
																	<a href="" class="btn btn-danger" id="delete-data" data-id="<?php echo $tampil['id_pengajuan'];?>"><i class="fas fa-trash-alt"></i></a>
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
				</section>
			</div>
			<footer class="main-footer">
				<?php include 'menu/footer.php'; ?>
			</footer>
		</div>
	</div>
	<?php include 'menu/script.php'; ?>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Dokumen Pengajuan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="fetched-data"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#exampleModal').on('show.bs.modal', function (e) {
				var rowid = $(e.relatedTarget).data('id');
				$.ajax({
					type : 'post',
					url : 'proses/get-pengajuan.php',
					data :  'rowid='+ rowid,
					success : function(data){
						$('.fetched-data').html(data);
					}
				});
			});
		});
	</script>
	<script type="text/javascript">
		"use strict";
		$("#table-1").dataTable();
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
						url: "proses/delete-pengajuan.php",
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
									window.location = "pengajuan";
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
</body>
</html>