<?php
include '../koneksi.php';

$fk_pemohon = $_POST['fk_pemohon'];
$fk_berita = $_POST['fk_berita'];
$isi = $_POST['isi'];

$query = mysqli_query($conn, "INSERT INTO tb_komentar(fk_pemohon, fk_berita, isi, created, modified) VALUES('$fk_pemohon', '$fk_berita', '$isi', NOW(), NOW())");
if($query) {
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>