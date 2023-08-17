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
						<h1>Laporan Jumlah Penggunaan Alat</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="beranda">Beranda</a></div>
							<div class="breadcrumb-item">Laporan Jumlah Penggunaan Alat</div>
						</div>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<a href="cetak-alat" target="_blank" class="btn btn-primary" style="border-radius: 4px;"><i class="fas fa-print"></i></a>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-striped" id="table-1">
												<thead>
													<tr>
														<th>No</th>
														<th>Nama</th>
														<th>Merk Alat</th>
														<th>Nomor Seri</th>
														<th>Kapasitas</th>
														<th>Identitas</th>
														<th>Jumlah Pengujian</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$no = 1;
													$kueri = mysqli_query($conn, "SELECT * FROM tb_alat ORDER BY nama_alat ASC");
													while($tampil = mysqli_fetch_array($kueri)) {
														$query_alat = mysqli_query($conn, "SELECT *, COUNT(*) AS jumlah FROM tb_pengujian WHERE id_alat='$tampil[id_alat]'");
														$row_alat = mysqli_fetch_array($query_alat);

														?>
														<tr>
															<td><?php echo $no++;?></td>
															<td><?php echo $tampil['nama_alat'];?></td>
															<td><?php echo $tampil['merk_alat'];?></td>
															<td><?php echo $tampil['nomor_seri'];?></td>
															<td><?php echo $tampil['kapasitas'];?></td>
															<td><?php echo $tampil['identitas'];?></td>
															<td><?php echo $row_alat['jumlah'];?></td>
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