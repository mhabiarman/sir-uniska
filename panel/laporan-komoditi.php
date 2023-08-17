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
						<h1>Laporan Pilihan Komoditi</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="beranda">Beranda</a></div>
							<div class="breadcrumb-item">Laporan Pilihan Komoditi</div>
						</div>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<a href="cetak-komoditi" target="_blank" class="btn btn-primary" style="border-radius: 4px;"><i class="fas fa-print"></i></a>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-striped" id="table-1">
												<thead>
													<tr>
														<th>No</th>
														<th>Nama Komoditi</th>
														<th>Jumlah Di Pilih</th>
														<th>Jumlah Di Setujui</th>
														<th>Jumlah Di Tolak</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$no = 1;
													$kueri = mysqli_query($conn, "SELECT * FROM tb_komoditi ORDER BY nama_komoditi ASC");
													while($tampil = mysqli_fetch_array($kueri)) {
														$query_komoditi = mysqli_query($conn, "SELECT *, COUNT(*) AS jumlah FROM tb_pengajuanbantu, tb_pengajuan WHERE tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND id_komoditi='$tampil[id_komoditi]'");
														$row_komoditi = mysqli_fetch_array($query_komoditi);

														$query_setuju = mysqli_query($conn, "SELECT *, COUNT(*) AS jumlah FROM tb_pengajuanbantu, tb_pengajuan WHERE tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND id_komoditi='$tampil[id_komoditi]' AND status <> 'Tolak'");
														$row_setuju = mysqli_fetch_array($query_setuju);

														$query_tolak = mysqli_query($conn, "SELECT *, COUNT(*) AS jumlah FROM tb_pengajuanbantu, tb_pengajuan WHERE tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND id_komoditi='$tampil[id_komoditi]' AND status = 'Tolak'");
														$row_tolak = mysqli_fetch_array($query_tolak);
														?>
														<tr>
															<td><?php echo $no++;?></td>
															<td><?php echo $tampil['nama_komoditi'];?></td>
															<td><?php echo $row_komoditi['jumlah'];?></td>
															<td><?php echo $row_setuju['jumlah'];?></td>
															<td><?php echo $row_tolak['jumlah'];?></td>
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