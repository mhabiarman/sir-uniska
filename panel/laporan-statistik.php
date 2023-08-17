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
						<h1>Laporan Statistik Pengajuan</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="beranda">Beranda</a></div>
							<div class="breadcrumb-item">Laporan Statistik Pengajuan</div>
						</div>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<a href="cetak-statistik" target="_blank" class="btn btn-primary" style="border-radius: 4px;"><i class="fas fa-print"></i></a>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-striped" id="table-1">
												<thead>
													<tr>
														<th>No</th>
														<th>Nama Perusahaan</th>
														<th>Komditi</th>
														<th>Tanggal Usulan</th>
														<th>Waktu Diterima</th>
														<th>Waktu Di Uji</th>
														<th>Waktu Terbit</th>
														<th>Waktu Sertifikat Diterima</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$no = 1;
													$kueri = mysqli_query($conn, "SELECT * FROM tb_pengajuan,tb_pemohon,tb_pengajuanbantu,tb_komoditi WHERE tb_pengajuan.id_pemohon=tb_pemohon.id_pemohon AND tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND tb_komoditi.id_komoditi=tb_pengajuanbantu.id_komoditi");
													while($tampil = mysqli_fetch_array($kueri)) {
														?>
														<tr>
															<td><?php echo $no++;?></td>
															<td><?php echo $tampil['nama_perusahaan'];?></td>
															<td><?php echo $tampil['nama_komoditi'];?></td>
															<td><?php echo tglIndonesia(date('d F Y H:i:s', strtotime($tampil['created'])));?></td>
															<td><?php echo tglIndonesia(date('d F Y H:i:s', strtotime($tampil['created2'])));?></td>
															<td><?php echo tglIndonesia(date('d F Y H:i:s', strtotime($tampil['created3'])));?></td>
															<td><?php echo tglIndonesia(date('d F Y H:i:s', strtotime($tampil['created4'])));?></td>
															<td><?php echo tglIndonesia(date('d F Y H:i:s', strtotime($tampil['created5'])));?></td>
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
</body>
</html>`