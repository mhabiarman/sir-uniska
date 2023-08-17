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
						<h1>Laporan Pengajuan Pemohon</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="beranda">Beranda</a></div>
							<div class="breadcrumb-item">Laporan Pengajuan Pemohon</div>
						</div>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-12 col-md-12">
												<ul class="nav nav-tabs" id="myTab" role="tablist">
													<!-- <li class="nav-item">
														<a class="nav-link <?php if( (isset($_GET['submit']) && (isset($_GET['tipe']) && $_GET['tipe'] == 'pertanggal')) || empty($_GET['submit']) ) { echo 'active show'; } ?>" id="pertanggal-tab" data-toggle="tab" href="#pertanggal" role="tab" aria-controls="pertanggal" aria-selected="false">Pertanggal</a>
													</li> -->
													<li class="nav-item">
														<a class="nav-link <?php if(isset($_GET['submit']) && (isset($_GET['tipe']) && $_GET['tipe'] == 'perbulan') || empty($_GET['submit'])) { echo 'active show'; } ?>" id="perbulan-tab" data-toggle="tab" href="#perbulan" role="tab" aria-controls="perbulan" aria-selected="true">Perbulan</a>
													</li>
													<li class="nav-item">
														<a class="nav-link <?php if(isset($_GET['submit']) && (isset($_GET['tipe']) && $_GET['tipe'] == 'pertahun')) { echo 'active show'; } ?>" id="pertahun-tab" data-toggle="tab" href="#pertahun" role="tab" aria-controls="pertahun" aria-selected="true">Pertahun</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="row mt-4">
											<div class="col-lg-12 col-md-12">
												<div class="tab-content" id="myTabContent">
													<div class="tab-pane fade <?php if( (isset($_GET['submit']) && (isset($_GET['tipe']) && $_GET['tipe'] == 'pertanggal'))) { echo 'active show'; } ?>" id="pertanggal" role="tabpanel" aria-labelledby="pertanggal-tab">
														<div class="row">
															<div class="col-md-12">
																<form action="" method="GET" id="form_tambah">
																	<input type="hidden" name="tipe" id="tipe" value="pertanggal">
																	<div class="row">
																		<div class="col-md-6">
																			<div class="form-group">
																				<label for="from">Dari Tanggal</label>
																				<input type="date" name="from" id="from" required="" class="form-control" <?php if( (isset($_GET['tipe']) && $_GET['tipe'] == "pertanggal") && (isset($_GET['from']) && !empty($_GET['from'])) ) {echo "value='".date('Y-m-d', strtotime($_GET['from']))."'";} ?>>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label for="to">Sampai Tanggal</label>
																				<input type="date" name="to" id="to" required="" class="form-control" <?php if( (isset($_GET['tipe']) && $_GET['tipe'] == "pertanggal") && (isset($_GET['to']) && !empty($_GET['to'])) ) {echo "value='".date('Y-m-d', strtotime($_GET['to']))."'";} ?>>
																			</div>
																		</div>
																		<div class="col-md-12">
																			<div class="form-group">
																				<button type="submit" class="btn btn-primary float-right" name="submit" value="show">Tampilkan Data</button>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
														</div>
													</div>
													<div class="tab-pane fade <?php if(isset($_GET['submit']) && (isset($_GET['tipe']) && $_GET['tipe'] == 'perbulan') || empty($_GET['submit']) ) { echo 'active show'; } ?>" id="perbulan" role="tabpanel" aria-labelledby="perbulan-tab">
														<div class="row">
															<div class="col-md-12">
																<form action="" method="GET" id="form_tambah">
																	<input type="hidden" name="tipe" id="tipe" value="perbulan">
																	<div class="row">
																		<div class="col-md-6">
																			<div class="form-group">
																				<label for="bulan">Bulan</label>
																				<select class="form-control select2" name="bulan" id="bulan" required="" style="width: 100%;">
																					<option value="">Pilih Bulan</option>
																					<option value="01" <?php if((isset($_GET['tipe']) && $_GET['tipe'] == "perbulan") && (isset($_GET['bulan']) && !empty($_GET['bulan'])) && $_GET['bulan'] == "01") { echo "selected='selected'"; }?>>Januari</option>
																					<option value="02" <?php if((isset($_GET['tipe']) && $_GET['tipe'] == "perbulan") && (isset($_GET['bulan']) && !empty($_GET['bulan'])) && $_GET['bulan'] == "02") { echo "selected='selected'"; }?>>Februari</option>
																					<option value="03" <?php if((isset($_GET['tipe']) && $_GET['tipe'] == "perbulan") && (isset($_GET['bulan']) && !empty($_GET['bulan'])) && $_GET['bulan'] == "03") { echo "selected='selected'"; }?>>Maret</option>
																					<option value="04" <?php if((isset($_GET['tipe']) && $_GET['tipe'] == "perbulan") && (isset($_GET['bulan']) && !empty($_GET['bulan'])) && $_GET['bulan'] == "04") { echo "selected='selected'"; }?>>April</option>
																					<option value="05" <?php if((isset($_GET['tipe']) && $_GET['tipe'] == "perbulan") && (isset($_GET['bulan']) && !empty($_GET['bulan'])) && $_GET['bulan'] == "05") { echo "selected='selected'"; }?>>Mei</option>
																					<option value="06" <?php if((isset($_GET['tipe']) && $_GET['tipe'] == "perbulan") && (isset($_GET['bulan']) && !empty($_GET['bulan'])) && $_GET['bulan'] == "06") { echo "selected='selected'"; }?>>Juni</option>
																					<option value="07" <?php if((isset($_GET['tipe']) && $_GET['tipe'] == "perbulan") && (isset($_GET['bulan']) && !empty($_GET['bulan'])) && $_GET['bulan'] == "07") { echo "selected='selected'"; }?>>Juli</option>
																					<option value="08" <?php if((isset($_GET['tipe']) && $_GET['tipe'] == "perbulan") && (isset($_GET['bulan']) && !empty($_GET['bulan'])) && $_GET['bulan'] == "08") { echo "selected='selected'"; }?>>Agustus</option>
																					<option value="09" <?php if((isset($_GET['tipe']) && $_GET['tipe'] == "perbulan") && (isset($_GET['bulan']) && !empty($_GET['bulan'])) && $_GET['bulan'] == "09") { echo "selected='selected'"; }?>>September</option>
																					<option value="10" <?php if((isset($_GET['tipe']) && $_GET['tipe'] == "perbulan") && (isset($_GET['bulan']) && !empty($_GET['bulan'])) && $_GET['bulan'] == "10") { echo "selected='selected'"; }?>>Oktober</option>
																					<option value="11" <?php if((isset($_GET['tipe']) && $_GET['tipe'] == "perbulan") && (isset($_GET['bulan']) && !empty($_GET['bulan'])) && $_GET['bulan'] == "11") { echo "selected='selected'"; }?>>November</option>
																					<option value="12" <?php if((isset($_GET['tipe']) && $_GET['tipe'] == "perbulan") && (isset($_GET['bulan']) && !empty($_GET['bulan'])) && $_GET['bulan'] == "12") { echo "selected='selected'"; }?>>Desember</option>
																				</select>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label for="tahun">Tahun</label>
																				<select class="form-control select2" name="tahun" id="tahun" required="" style="width: 100%;">
																					<option value="">Pilih Tahun</option>
																					<?php
																					$mulai = date('Y') - 50;
																					for($i = $mulai; $i < $mulai + 100; $i++){

																						if((isset($_GET['tipe']) && $_GET['tipe'] == "perbulan") && (isset($_GET['tahun']) && !empty($_GET['tahun']))) {
																							$sel = $_GET['tahun'] == $i ? "selected='selected'" : '';
																						}else {
																							$sel = $i == date('Y') ? "selected=''" : '';
																						}
																						?>
																						<option value="<?= $i;?>" <?= $sel;?>><?= $i;?></option>
																					<?php } ?>
																				</select>
																			</div>
																		</div>
																		<div class="col-md-12">
																			<div class="form-group">
																				<button type="submit" class="btn btn-primary float-right" name="submit" value="show">Tampilkan Data</button>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
														</div>
													</div>
													<div class="tab-pane fade <?php if(isset($_GET['submit']) && (isset($_GET['tipe']) && $_GET['tipe'] == 'pertahun')) { echo 'active show'; } ?>" id="pertahun" role="tabpanel" aria-labelledby="pertahun-tab">
														<div class="row">
															<div class="col-md-12">
																<form action="" method="GET" id="form_tambah">
																	<input type="hidden" name="tipe" id="tipe" value="pertahun">
																	<div class="row">
																		<div class="col-md-6">
																			<div class="form-group">
																				<label for="tahun">Tahun</label>
																				<select class="form-control select2" name="tahun" id="tahun" required="" style="width: 100%;">
																					<option value="">Pilih Tahun</option>
																					<?php
																					$mulai = date('Y') - 50;
																					for($i = $mulai; $i < $mulai + 100; $i++){

																						if((isset($_GET['tipe']) && $_GET['tipe'] == "pertahun") && (isset($_GET['tahun']) && !empty($_GET['tahun']))) {
																							$sel = $_GET['tahun'] == $i ? "selected='selected'" : '';
																						}else {
																							$sel = $i == date('Y') ? "selected=''" : '';
																						}
																						?>
																						<option value="<?= $i;?>" <?= $sel;?>><?= $i;?></option>
																					<?php } ?>
																				</select>
																			</div>
																		</div>
																		<div class="col-md-12">
																			<div class="form-group">
																				<button type="submit" class="btn btn-primary float-right" name="submit" value="show">Tampilkan Data</button>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row mt-4">
											<div class="col-lg-12 col-md-12">
												<?php if(isset($_GET['submit'])) { ?>

													<?php if(isset($_GET['tipe'])) { ?>

														<?php if($_GET['tipe'] == "pertanggal") { 
															$from = $_GET['from'];
															$to = $_GET['to']; 
															?>
															<a href="cetak-pengajuan?tipe=pertanggal&from=<?= $from; ?>&to=<?= $to; ?>" target="_blank" class="btn btn-success">
																<i class="fas fa-print"></i>
															</a>
														<?php }else if($_GET['tipe'] == "perbulan") { 
															$bulan = $_GET['bulan'];
															$tahun = $_GET['tahun'];
															?>
															<a href="cetak-pengajuan?tipe=perbulan&bulan=<?= $bulan; ?>&tahun=<?= $tahun; ?>" target="_blank" class="btn btn-success">
																<i class="fas fa-print"></i>
															</a>
														<?php }else if($_GET['tipe'] == "pertahun") { 
															$tahun = $_GET['tahun'];
															?>
															<a href="cetak-pengajuan?tipe=pertahun&tahun=<?= $tahun; ?>" target="_blank" class="btn btn-success">
																<i class="fas fa-print"></i>
															</a>
														<?php }else { ?>
															<a href="cetak-pengajuan" target="_blank" class="btn btn-success">
																<i class="fas fa-print"></i>
															</a>
														<?php } ?>

													<?php }else { ?>
														<a href="cetak-pengajuan" target="_blank" class="btn btn-success">
															<i class="fas fa-print"></i>
														</a>
													<?php } ?>

												<?php }else { ?>
													<a href="cetak-pengajuan" target="_blank" class="btn btn-success">
														<i class="fas fa-print"></i>
													</a>
													<?php } ?>
													<?php if(isset($_GET['submit'])){ ?>
														<a href="laporan-pengajuan" class="btn btn-danger">
															<!-- <i class="fas fa-signout"></i>  -->
															Bersihkan
														</a>
													<?php } ?>
											</div>
										</div>
										<div class="row mt-4">
											<div class="col-lg-12 col-md-12">
												<div class="table-responsive">
													<table class="display table table-striped table-hover datatables" id="table-1">
														<thead>
															<tr>
																<th>No</th>
																<th>Tanggal Pengajuan</th>
																<th>Kode Pengajuan</th>
																<th>Nama Pemohon</th>
																<th>Nama Perusahaan</th>
																<th>Telepon</th>
																<th>Pengajuan</th>
																<th>Komoditi</th>
																<th>Jumlah Komoditi</th>
																<th>Satuan</th>
															</tr>
														</thead>
														<tbody>
															<?php 
															$no = 1;
															if(isset($_GET['submit'])) {
																
																if(isset($_GET['tipe'])) {
																	
																	if($_GET['tipe'] == "pertanggal") {
																		$from = $_GET['from'];
																		$to = $_GET['to']; 
																		
																		$query = mysqli_query($conn, "SELECT * FROM tb_pengajuan,tb_pemohon,tb_pengajuanbantu,tb_komoditi WHERE tb_pengajuan.id_pemohon=tb_pemohon.id_pemohon AND tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND tb_komoditi.id_komoditi=tb_pengajuanbantu.id_komoditi AND DATE(tanggal_pengajuan) BETWEEN '$from' AND '$to' ORDER BY tanggal_pengajuan ASC");
																	}else if($_GET['tipe'] == "perbulan") {
																		$bulan = $_GET['bulan'];
																		$tahun = $_GET['tahun'];
																		
																		$query = mysqli_query($conn, "SELECT * FROM tb_pengajuan,tb_pemohon,tb_pengajuanbantu,tb_komoditi WHERE tb_pengajuan.id_pemohon=tb_pemohon.id_pemohon AND tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND tb_komoditi.id_komoditi=tb_pengajuanbantu.id_komoditi AND DATE(tanggal_pengajuan) LIKE '$tahun-$bulan%' ORDER BY tanggal_pengajuan ASC");
																	}else if($_GET['tipe'] == "pertahun") {
																		$tahun = $_GET['tahun'];

																		$query = mysqli_query($conn, "SELECT * FROM tb_pengajuan,tb_pemohon,tb_pengajuanbantu,tb_komoditi WHERE tb_pengajuan.id_pemohon=tb_pemohon.id_pemohon AND tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND tb_komoditi.id_komoditi=tb_pengajuanbantu.id_komoditi AND tanggal_pengajuan LIKE '$tahun%' ORDER BY tanggal_pengajuan ASC");
																	}else {
																		$query = mysqli_query($conn, "SELECT * FROM tb_pengajuan,tb_pemohon,tb_pengajuanbantu,tb_komoditi WHERE tb_pengajuan.id_pemohon=tb_pemohon.id_pemohon AND tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND tb_komoditi.id_komoditi=tb_pengajuanbantu.id_komoditi ORDER BY tanggal_pengajuan ASC");
																	}
																	
																}else {
																	$query = mysqli_query($conn, "SELECT * FROM tb_pengajuan,tb_pemohon,tb_pengajuanbantu,tb_komoditi WHERE tb_pengajuan.id_pemohon=tb_pemohon.id_pemohon AND tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND tb_komoditi.id_komoditi=tb_pengajuanbantu.id_komoditi ORDER BY tanggal_pengajuan ASC");
																}
																
															}else {
																$query = mysqli_query($conn, "SELECT * FROM tb_pengajuan,tb_pemohon,tb_pengajuanbantu,tb_komoditi WHERE tb_pengajuan.id_pemohon=tb_pemohon.id_pemohon AND tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND tb_komoditi.id_komoditi=tb_pengajuanbantu.id_komoditi ORDER BY tanggal_pengajuan ASC");	
															}
															while($tampil = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
																?>
																<tr>
																	<td><?= $no++;?></td>
																	<td><?php echo tglIndonesia(date('d F Y', strtotime($tampil['tanggal_pengajuan'])));?></td>
																	<td><?php echo $tampil['id_pengajuan'];?></td>
																	<td><?php echo $tampil['nama_lengkap'];?></td>
																	<td><?php echo $tampil['nama_perusahaan'];?></td>
																	<td><?php echo $tampil['telepon'];?></td>
																	<td><?php echo $tampil['pengujian'];?></td>	
																	<td><?php echo $tampil['nama'];?></td>	
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
				</section>
			</div>
			<footer class="main-footer">
				<?php include 'menu/footer.php'; ?>
			</footer>
		</div>
	</div>
	<?php include 'menu/script.php'; ?>

	<script type="text/javascript">
		"use strict";
		$("#table-1").dataTable();
	</script>
</body>
</html>