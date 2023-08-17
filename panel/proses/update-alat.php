<?php
include '../../koneksi.php';

$id = $_POST['id'];
$nama_alat = ucwords($_POST['nama_alat']);
$merk_alat = ucwords($_POST['merk_alat']);
$nomor_seri = ucwords($_POST['nomor_seri']);
$kapasitas = ucwords($_POST['kapasitas']);
$identitas = ucwords($_POST['identitas']);

$query = mysqli_query($conn, "UPDATE tb_alat SET nama_alat = '$nama_alat',merk_alat = '$merk_alat',nomor_seri = '$nomor_seri',kapasitas = '$kapasitas',identitas = '$identitas' WHERE id_alat = '$id'");
if($query) {	
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>