<?php
include '../../koneksi.php';

$judul = ucwords($_POST['judul']);
$keterangan = ucwords($_POST['keterangan']);
$deskripsi = ucwords($_POST['deskripsi']);

$uploadDir = '../../assets/images/berita';

$tipe = $_FILES['gambar']['name'];
$tipe = pathinfo($tipe, PATHINFO_EXTENSION);
$gambarnama = round(microtime(true) * 1000).".".$tipe;

$tmpFile = $_FILES['gambar']['tmp_name'];
$filename = $uploadDir.'/'.$gambarnama;

$query = mysqli_query($conn, "INSERT INTO tb_berita(judul, keterangan, deskripsi, gambar, created, modified) VALUES('$judul', '$keterangan', '$deskripsi', '$gambarnama', NOW(), NOW())");
if($query) {
	move_uploaded_file($tmpFile,$filename);
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>