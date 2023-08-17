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
						<h1>Pengujian</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="beranda">Beranda</a></div>
							<div class="breadcrumb-item">Pengujian</div>
						</div>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-striped" id="table-1">
												<thead>
													<tr align="center">
														<th>No</th>
														<th>Nomor Surat</th>
														<th>Tanggal Pengujian</th>
														<th>Tanggal Selesai</th>
														<th>Nama</th>
														<th>SDM</th>
														<th>Peralatan</th>
														<th>Bahan Kimia</th>
														<th>Informasi</th>
														<th>Status</th>
														<th>Pengambilan Surat</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$no = 1;
													$kueri = mysqli_query($conn, "SELECT * FROM tb_pengujian,tb_pengajuan, tb_pemohon WHERE tb_pengujian.id_pengajuan=tb_pengajuan.id_pengajuan AND tb_pemohon.id_pemohon=tb_pengajuan.id_pemohon ORDER BY id_pengujian DESC");
													while($tampil = mysqli_fetch_array($kueri)) {
														?>
														<tr align="center">
															<td><?php echo $no++;?></td>
															<td><?php echo $tampil['id_pengujian'];?></td>
															<td><?php echo tglIndonesia(date('d F Y', strtotime($tampil['tanggal_pengajuan'])));?></td>
															<td><?php echo tglIndonesia(date('d F Y', strtotime($tampil['tanggal_selesai'])));?></td>
															<td><?php echo $tampil['nama_lengkap'];?></td>
															<td><?php if($tampil['sdm']=='1'){ echo 'v'; }else{ echo '-'; }?></td>
															<td><?php if($tampil['peralatan']=='1'){ echo 'v'; }else{ echo '-'; }?></td>
															<td><?php if($tampil['bahan_kimia']=='1'){ echo 'v'; }else{ echo '-'; }?></td>
															<td><?php echo $tampil['informasi'];?></td>
															<td><?php echo $tampil['status'];?></td>
															<td><?php echo $tampil['pengambilan'];?></td>
															<td style="white-space: nowrap;">
																<?php if($tampil['status'] == "Setuju") { ?>
																	<a href="../cetak-pengujian?id=<?php echo $tampil['id_pengujian'];?>" target="_blank" class="btn btn-warning"><i class="fas fa-print"></i></a>
																<?php } ?>
																<!-- <a href="detail-pengujian?id=<?php echo $tampil['id_pengujian'];?>" class="btn btn-success"><i class="fas fa-edit"></i></a> -->
																	<a href="" class="btn btn-danger" id="delete-data" data-id="<?php echo $tampil['id_pengujian'];?>"><i class="fas fa-trash-alt"></i></a>
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
					<h5 class="modal-title" id="exampleModalLabel">Dokumen Pengujian</h5>
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
					url : 'proses/get-pengujian.php',
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
						url: "proses/delete-pengujian.php",
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
									window.location = "pengujian";
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