<?php
include '../koneksi.php';
$id = $_POST['id'];

$sql = mysqli_query($conn, "SELECT * FROM tb_surat_kependudukan WHERE id_surat_kependudukan = '$id'");
$data = mysqli_fetch_array($sql);
$gambar = $data['ktp'];
unlink('../assets/images/berkas/'.$gambar);

$query = mysqli_query($conn, "DELETE FROM tb_surat_kependudukan WHERE id_surat_kependudukan = '$id'");
if($query) {
	echo json_encode(['message'=>'successfully deleted data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to delete data', 'status'=>'0']);
}
?>