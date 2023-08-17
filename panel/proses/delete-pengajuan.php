<?php
include '../../koneksi.php';
$id = $_POST['id'];

$sql = mysqli_query($conn, "SELECT * FROM tb_pengajuan WHERE id_pengajuan = '$id'");
$data = mysqli_fetch_array($sql);

unlink('../../assets/images/berkas/'.$data['fc_ktp']);

$query = mysqli_query($conn, "DELETE FROM tb_pengajuan WHERE id_pengajuan = '$id'");
$query = mysqli_query($conn, "DELETE FROM tb_pengajuanbantu WHERE id_pengajuan = '$id'");
if($query) {
	echo json_encode(['message'=>'successfully deleted data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to delete data', 'status'=>'0']);
}
?>