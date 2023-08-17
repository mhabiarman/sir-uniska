<?php
include '../koneksi.php';
$id = $_POST['rowid'];

$queryy = mysqli_query($conn, "SELECT * FROM tb_surat_kependudukan WHERE id_surat_kependudukan = '$id'");
$roww = mysqli_fetch_array($queryy);
?>
<div class="alert alert-danger" align="center"><?php echo $roww['keterangan'];?></div>
<form action="#" method="POST" enctype="multipart/form-data" id="data-form-revisi">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label for="ktp">Upload KTP</label>
				<input type="file" class="form-control" name="ktp" id="ktp" required="" autocomplete="off" placeholder="Masukkan KTP" autofocus="" accept="image/*">
				<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
			</div>
		</div>
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
				url: "proses/update-surat-kependudukan-revisi.php",
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
							window.location = "surat-kependudukan";
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