<?php
include '../../koneksi.php';

$nama_lengkap = $_POST['nama_lengkap'];
$username = mysqli_escape_string($conn, $_POST['username']);
$telepon = $_POST['telepon'];
$password = mysqli_escape_string($conn, $_POST['password']);
$alamat = mysqli_escape_string($conn, $_POST['alamat']);
$level = "Pemohon";

$cek2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE telepon = '$telepon'"));
$cek3 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE username = '$username'"));

if($cek2 > 0) {
	echo json_encode(['message'=>'telepon already in use', 'status'=>'2']);
}else if($cek3 > 0) {
	echo json_encode(['message'=>'nama pengguna already in use', 'status'=>'3']);
}else {
	$query = mysqli_query($conn, "INSERT INTO tb_pengguna(nama_lengkap, username, password, level, telepon, alamat, created, modified) VALUES('$nama_lengkap', '$username', '$password', '$level', '$telepon', '$alamat', NOW(), NOW())");
	if($query) {
		echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
	}else {
		echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
	}
}
?>