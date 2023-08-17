<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
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
						<h1>Beranda</h1>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-icon bg-danger">
									<i class="far fa-user"></i>
								</div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Pegawai</h4>
									</div>
									<div class="card-body">
										<?php
										$kueri = mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM tb_pegawai");
										$tampil = mysqli_fetch_array($kueri);
										echo $tampil['jumlah'];
										?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-icon bg-warning">
									<i class="far fa-user"></i>
								</div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Pemohon</h4>
									</div>
									<div class="card-body">
										<?php
										$kueri = mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM tb_pemohon");
										$tampil = mysqli_fetch_array($kueri);
										echo $tampil['jumlah'];
										?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-icon bg-primary">
									<i class="far fa-newspaper"></i>
								</div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Pengajuan</h4>
									</div>
									<div class="card-body">
										<?php
										$kueri = mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM tb_pengajuan");
										$tampil = mysqli_fetch_array($kueri);
										echo $tampil['jumlah'];
										?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-icon bg-success">
									<i class="fas fa-circle"></i>
								</div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Pengujian</h4>
									</div>
									<div class="card-body">
										<?php
										$kueri = mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM tb_pengujian");
										$tampil = mysqli_fetch_array($kueri);
										echo $tampil['jumlah'];
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<form action="" method="GET">
											<div class="row">
											<?php if (isset($_GET['submit'])) { ?>
																<div class="col-12 col-md-12 col-lg-12">
																<div class="card">
																	<div class="card-header">
																		<h4>Grafik Layanan Tahun <?php echo $_GET['tahun'] ?></h4>
																	</div>
																	<div class="card-body">
																		<canvas id="myChart1"></canvas>
																	</div>
																</div>
																</div>
																</div>
																<div class="col-md-12">
																	<div class="form-group">
																		<a href="beranda" class="btn btn-danger">Reset</a>
																	</div>
																</div>
																<?php }else{ ?>
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="tahun">Tahun</label>
																		<select class="form-control select2" name="tahun" id="tahun" required="">
																			<option value="">Pilih Tahun</option>
																			<?php
																			$mulai= date('Y') - 50;
																			for($i = $mulai;$i<$mulai + 100;$i++){
																				$sel = $i == date('Y') ? ' selected="selected"' : '';
																				echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
																			}
																			?>
																		</select>
																	</div>
																</div>
																</div>
											<div class="row">
												<div class="col-md-12">
													<button type="submit" name="submit" class="btn btn-primary float-left">Tampilkan Grafik</button>
												</div>
											</div>
																<?php } ?>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
			</div>
			<footer class="main-footer">
				<?php include 'menu/footer.php'; ?>
			</footer>
		</div>
	</div>
	<?php include 'menu/script.php'; ?>
</body>
</html>
<?php if (isset($_GET['submit'])) { ?>
<script type="text/javascript">
		"use strict";
		<?php
		$column1 = array();
		$column2 = array();
		$column3 = array();
		$column4 = array();
		$query1 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tb_pengajuan WHERE status='Proses' AND created LIKE '$_GET[tahun]%'");
		while($row1 = mysqli_fetch_array($query1)) {

			// $column1[] = "'".$row1['nama_dinas']."'";
			$column1[] = $row1['total'];
			// $column3[] = $total_komen['komen'];
		}
		$query2 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tb_pengajuan WHERE (status='Diterima' OR status='Setuju') AND created LIKE '$_GET[tahun]%'");
		while($row2 = mysqli_fetch_array($query2)) {

			// $column1[] = "'".$row2['nama_dinas']."'";
			$column2[] = $row2['total'];
			// $column3[] = $total_komen['komen'];
		}
		$query3 = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tb_pengajuan WHERE status='Ambil' AND created LIKE '$_GET[tahun]%'");
		while($row3 = mysqli_fetch_array($query3)) {

			// $column1[] = "'".$row3['nama_dinas']."'";
			$column3[] = $row3['total'];
			// $column3[] = $total_komen['komen'];
		}
		$datas1 = implode (", ", $column1);
		$datas2 = implode (", ", $column2);
		$datas3 = implode (", ", $column3);
		// $datas3 = implode (", ", $column3);
		?>
		var ctx = document.getElementById("myChart1").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ['Jumlah Data'],
				datasets: [
				{
					label: 'Pengajuan Belum Di Proses',
					data: [<?php echo $datas1;?>],
					backgroundColor: '#6777ef',
					borderColor: '#6777ef',
					borderWidth: 2.5,
					pointBackgroundColor: '#ffffff',
					pointRadius: 4
				},
				{
					label: 'Pengajuan Dalam Proses',
					data: [<?php echo $datas2;?>],
					backgroundColor: '#a7d813',
					borderColor: '#a7d813',
					borderWidth: 2.5,
					pointBackgroundColor: '#ffffff',
					pointRadius: 4
				},
				{
					label: 'Pengajuan Sudah Selesai',
					data: [<?php echo $datas3;?>],
					backgroundColor: '#dc5ad1',
					borderColor: '#dc5ad1',
					borderWidth: 2.5,
					pointBackgroundColor: '#ffffff',
					pointRadius: 4
				}
				],
			},
			options: {
tooltips: {
					callbacks: {
						label: function(tooltipItem, data) {
							var value = data.datasets[0].data[tooltipItem.index];
							value = value.toString();
							value = value.split(/(?=(?:...)*$)/);
							value = value.join(',');
							return value;
						}
					}
				},
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							min:0,
							max:50,
							userCallback: function(value, index, values) {
							value = value.toString();
							value = value.split(/(?=(?:...)*$)/);
							value = value.join(',');
							return value;
						}
					}
				}],
				xAxes: [{
					ticks: {
					}
				}]
			}
			}
		});
	</script>
<?php } ?>