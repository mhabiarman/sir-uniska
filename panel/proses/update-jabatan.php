<?php
include '../../koneksi.php';

$id = $_POST['id'];
$nama_jabatan = ucwords($_POST['nama_jabatan']);

$query = mysqli_query($conn, "UPDATE tb_jabatan SET nama_jabatan = '$nama_jabatan', modified = NOW() WHERE id_jabatan = '$id'");
if($query) {	
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>