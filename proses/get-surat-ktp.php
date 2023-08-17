<?php
include '../koneksi.php';
$id = $_POST['rowid'];

$queryy = mysqli_query($conn, "SELECT * FROM tb_surat_ktp WHERE id_surat_ktp = '$id'");
$roww = mysqli_fetch_array($queryy);
?>
<form action="#" method="POST" enctype="multipart/form-data" id="data-form-revisi">
	<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
	<div class="row">
		<?php if($roww['c1'] == 1) { ?>
			<div class="col-md-12">
				<div class="form-group">
					<label for="fc_ijazah_pendidikan">Ijazah Pendidikan Terakhir</label>
					<input type="file" class="form-control" name="fc_ijazah_pendidikan" id="fc_ijazah_pendidikan" required="" autocomplete="off" placeholder="Upload Ijazah Pendidikan Terakhir" autofocus="" accept="image/*, application/pdf">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea class="form-control" name="keterangan" required="" placeholder="Tulis Keterangan" rows="4" readonly=""><?php echo $roww['k1'];?></textarea>
				</div>
			</div>
		<?php } ?>
		<?php if($roww['c2'] == 1) { ?>
			<div class="col-md-12">
				<div class="form-group">
					<label for="fc_akta_kelahiran">Akta Kelahiran</label>
					<input type="file" class="form-control" name="fc_akta_kelahiran" id="fc_akta_kelahiran" required="" autocomplete="off" placeholder="Upload Akta Kelahiran" autofocus="" accept="image/*">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea class="form-control" name="keterangan" required="" placeholder="Tulis Keterangan" rows="4" readonly=""><?php echo $roww['k2'];?></textarea>
				</div>
			</div>
		<?php } ?>
		<?php if($roww['c3'] == 1) { ?>
			<div class="col-md-12">
				<div class="form-group">
					<label for="fc_kartu_keluarga">Kartu Keluarga</label>
					<input type="file" class="form-control" name="fc_kartu_keluarga" id="fc_kartu_keluarga" required="" autocomplete="off" placeholder="Upload Kartu Keluarga" autofocus="" accept="image/*">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea class="form-control" name="keterangan" required="" placeholder="Tulis Keterangan" rows="4" readonly=""><?php echo $roww['k3'];?></textarea>
				</div>
			</div>
		<?php } ?>
		<?php if($roww['c4'] == 1) { ?>
			<div class="col-md-12">
				<div class="form-group">
					<label for="fc_surat_rt">Surat Pengantar Dari RT</label>
					<input type="file" class="form-control" name="fc_surat_rt" id="fc_surat_rt" required="" autocomplete="off" placeholder="Upload Surat RT" autofocus="" accept="image/*">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea class="form-control" name="keterangan" required="" placeholder="Tulis Keterangan" rows="4" readonly=""><?php echo $roww['k4'];?></textarea>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="row">
		<div class="col-md-12">
			<input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-primary float-right">
		</div>
	</div>
</form>
<script type="text/javascript">
	$(document).ready(function() {
		$("#data-form-revisi").submit(function(e) {
			e.preventDefault();
			var data = new FormData(this);
			$.ajax({
				type: "POST",
				url: "proses/update-surat-ktp-revisi.php",
				data: data,
				processData: false,
				contentType: false,
				success: function(response) {
					var dataresponse = JSON.parse(response);
					console.log(dataresponse);
					if(dataresponse.status == "1") {
						Swal.fire({
							title: "Pemberitahuan",
							text: "Berhasil mengubah data",
							icon: "success"
						}).then(function() {
							window.location = "surat-ktp";
						});
					}else {
						Swal.fire('Peringatan', 'Kesalahan dalam sebuah query', 'error');
					}
				}
			});
			return false;
		});
	});
</script>