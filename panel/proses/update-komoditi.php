<?php
include '../../koneksi.php';

$id = $_POST['id'];
$nama_komoditi = ucwords($_POST['nama_komoditi']);

$query = mysqli_query($conn, "UPDATE tb_komoditi SET nama_komoditi = '$nama_komoditi', modified = NOW() WHERE id_komoditi = '$id'");
if($query) {	
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>