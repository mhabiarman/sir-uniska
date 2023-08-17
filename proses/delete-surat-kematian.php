<?php
include '../koneksi.php';
$id = $_POST['id'];

$sql = mysqli_query($conn, "SELECT * FROM tb_surat_kematian WHERE id_surat_kematian = '$id'");
$data = mysqli_fetch_array($sql);

unlink('../assets/images/berkas/'.$data['fc_ktp_pelapor']);
unlink('../assets/images/berkas/'.$data['fc_kartu_keluarga']);
unlink('../assets/images/berkas/'.$data['fc_surat_rt']);

$query = mysqli_query($conn, "DELETE FROM tb_surat_kematian WHERE id_surat_kematian = '$id'");
if($query) {
	echo json_encode(['message'=>'successfully deleted data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to delete data', 'status'=>'0']);
}
?>