<?php
include '../../koneksi.php';

$id = $_POST['id'];
$judul = ucwords($_POST['judul']);
$keterangan = ucwords($_POST['keterangan']);
$deskripsi = ucwords($_POST['deskripsi']);

$query = mysqli_query($conn, "UPDATE tb_berita SET judul = '$judul', keterangan = '$keterangan', deskripsi = '$deskripsi', modified = NOW() WHERE id_berita = '$id'");
if($query) {	
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>