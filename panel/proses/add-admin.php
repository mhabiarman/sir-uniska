<?php
include '../../koneksi.php';

$nama_lengkap = $_POST['nama_lengkap'];
$username = mysqli_escape_string($conn, $_POST['username']);
$telepon = $_POST['telepon'];
$password = mysqli_escape_string($conn, $_POST['password']);
$alamat = mysqli_escape_string($conn, ucwords($_POST['alamat']));

$cek2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '$username'"));
$cek3 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_admin WHERE telepon = '$telepon'"));

if($cek3 > 0) {
	echo json_encode(['message'=>'telepon already in use', 'status'=>'2']);
}else if($cek2 > 0) {
	echo json_encode(['message'=>'nama pengguna already in use', 'status'=>'3']);
}else {
	$query = mysqli_query($conn, "INSERT INTO tb_admin(nama_lengkap, username, password, telepon, alamat, created, modified) VALUES('$nama_lengkap', '$username', '$password', '$telepon', '$alamat', NOW(), NOW())");
	if($query) {
		echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
	}else {
		echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
	}
}
?>