<?php
include '../../koneksi.php';

$nama_pegawai = ucwords($_POST['nama_pegawai']);
$telepon = $_POST['telepon'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$fk_jabatan = $_POST['fk_jabatan'];

$cek3 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE telepon = '$telepon'"));

if($cek3 > 0) {
	echo json_encode(['message'=>'telepon already in use', 'status'=>'2']);
}else {
	$query = mysqli_query($conn, "INSERT INTO tb_pegawai(fk_jabatan, nama_pegawai, telepon, tanggal_lahir, jenis_kelamin, created, modified) VALUES('$fk_jabatan', '$nama_pegawai', '$telepon', '$tanggal_lahir', '$jenis_kelamin', NOW(), NOW())");
	if($query) {
		echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
	}else {
		echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
	}
}
?>