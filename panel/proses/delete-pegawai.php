<?php
include '../../koneksi.php';
$id = $_POST['id'];
$query = mysqli_query($conn, "DELETE FROM tb_pegawai WHERE id_pegawai = '$id'");
if($query) {
	echo json_encode(['message'=>'successfully deleted data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to delete data', 'status'=>'0']);
}
?>