<?php
include '../../koneksi.php';

$nama_jabatan = ucwords($_POST['nama_jabatan']);

$query = mysqli_query($conn, "INSERT INTO tb_jabatan(nama_jabatan, created, modified) VALUES('$nama_jabatan', NOW(), NOW())");
if($query) {
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>