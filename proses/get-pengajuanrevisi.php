<?php
include '../koneksi.php';
$id = $_POST['rowid'];

$queryy = mysqli_query($conn, "SELECT * FROM tb_pengajuan WHERE id_pengajuan = '$id'");
$roww = mysqli_fetch_array($queryy);
?>
<form action="#" method="POST" enctype="multipart/form-data" id="data-form-revisi">
	<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
	<div class="row">
		<?php if($roww['c1'] == 1) { ?>
			<div class="col-md-12">
				<div class="form-group">
					<label for="fc_ktp">Foto KTP</label>
					<input type="file" class="form-control" name="fc_ktp" id="fc_ktp" required="" autocomplete="off" placeholder="Upload KTP Ayah" autofocus="" accept="image/*, application/pdf">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea class="form-control" name="keterangan" required="" placeholder="Tulis Keterangan" rows="4" readonly=""><?php echo $roww['k1'];?></textarea>
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
				url: "proses/update-pengajuanrevisi.php",
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
							window.location = "sir";
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