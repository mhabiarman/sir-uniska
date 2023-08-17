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
						<h1>Laporan Pemohon Melakukan Pengajuan</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="beranda">Beranda</a></div>
							<div class="breadcrumb-item">Laporan Pemohon Melakukan Pengajuan</div>
						</div>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<a href="cetak-pemohon" target="_blank" class="btn btn-primary" style="border-radius: 4px;"><i class="fas fa-print"></i></a>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-striped" id="table-1">
												<thead>
													<tr>
														<th>No</th>
														<th>Nama Pemohon</th>
														<th>Nama Perusahaan</th>
														<th>Jumlah Di Pilih</th>
														<th>Jumlah Di Setujui</th>
														<th>Jumlah Di Tolak</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$no = 1;
													$kueri = mysqli_query($conn, "SELECT * FROM tb_pemohon ORDER BY nama_lengkap ASC");
													while($tampil = mysqli_fetch_array($kueri)) {
														$query_pemohon = mysqli_query($conn, "SELECT *, COUNT(*) AS jumlah FROM tb_pengajuanbantu, tb_pengajuan WHERE tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND id_pemohon='$tampil[id_pemohon]' GROUP BY tb_pengajuanbantu.id_pengajuan");
														$row_pemohon = mysqli_fetch_array($query_pemohon);

														$query_setuju = mysqli_query($conn, "SELECT *, COUNT(*) AS jumlah FROM tb_pengajuanbantu, tb_pengajuan WHERE tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND id_pemohon='$tampil[id_pemohon]' AND status <> 'Tolak' GROUP BY tb_pengajuanbantu.id_pengajuan");
														$row_setuju = mysqli_fetch_array($query_setuju);

														$query_tolak = mysqli_query($conn, "SELECT *, COUNT(*) AS jumlah FROM tb_pengajuanbantu, tb_pengajuan WHERE tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND id_pemohon='$tampil[id_pemohon]' AND status = 'Tolak' GROUP BY tb_pengajuanbantu.id_pengajuan");
														$row_tolak = mysqli_fetch_array($query_tolak);
														if ($tampil['nama_perusahaan']<>''){
															$cek1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pengajuanbantu, tb_pengajuan WHERE tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND id_pemohon='$tampil[id_pemohon]'"));
															if($cek1 == 0 ){
																$cek1 = 0;
															}else{
																$cek1 = $cek1;
															}
															$cek2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pengajuanbantu, tb_pengajuan WHERE tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND id_pemohon='$tampil[id_pemohon]' AND status <> 'Tolak'"));
															if($cek2 == 0 ){
																$cek2 = 0;
															}else{
																$cek2 = $cek2;
															}
															$cek3 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pengajuanbantu, tb_pengajuan WHERE tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND id_pemohon='$tampil[id_pemohon]' AND status = 'Tolak'"));
															if($cek3 == 0 ){
																$cek3 = 0;
															}else{
																$cek3 = $cek3;
															}
														?>
														<tr>
															<td><?php echo $no++;?></td>
															<td><?php echo $tampil['nama_lengkap'];?></td>
															<td><?php echo $tampil['nama_perusahaan'];?></td>
															<td><?php echo $cek1;?></td>
															<td><?php echo $cek2;?></td>
															<td><?php echo $cek3;?></td>
														</tr>
													<?php }} ?>
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
</body>
</html>`