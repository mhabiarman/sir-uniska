<?php
include '../../koneksi.php';

$nama_komoditi = ucwords($_POST['nama_komoditi']);

$query = mysqli_query($conn, "INSERT INTO tb_komoditi(nama_komoditi, created, modified) VALUES('$nama_komoditi', NOW(), NOW())");
if($query) {
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>