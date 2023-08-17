<?php
include '../koneksi.php';

$nama_lengkap = mysqli_escape_string($conn, ucwords($_POST['nama_lengkap']));
$nama_perusahaan = mysqli_escape_string($conn, strtoupper($_POST['nama_perusahaan']));
$jabatan = mysqli_escape_string($conn, ucwords($_POST['jabatan']));
$tempat_lahir = mysqli_escape_string($conn, ucwords($_POST['tempat_lahir']));
$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);
$alamat = mysqli_escape_string($conn, ucwords($_POST['alamat']));
$tanggal_lahir = $_POST['tanggal_lahir'];
$telepon = $_POST['telepon'];
$nik = $_POST['nik'];

$cek1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pemohon WHERE telepon = '$telepon'"));
$cek2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pemohon WHERE nik = '$nik'"));
$cek3 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pemohon WHERE username = '$username'"));

if($cek1 > 0) {
	echo json_encode(['message'=>'telepon already in use', 'status'=>'2']);
}else if($cek2 > 0) {
	echo json_encode(['message'=>'nik already in use', 'status'=>'3']);
}else if($cek3 > 0) {
	echo json_encode(['message'=>'nama pengguna already in use', 'status'=>'4']);
}else {
	$query = mysqli_query($conn, "INSERT INTO tb_pemohon(nama_lengkap, tempat_lahir, username, password, alamat, tanggal_lahir, telepon, nik, created, modified, nama_perusahaan, jabatan) VALUES('$nama_lengkap', '$tempat_lahir', '$username', '$password', '$alamat', '$tanggal_lahir', '$telepon', '$nik', NOW(), NOW(), '$nama_perusahaan', '$jabatan')");
	if($query) {
		echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
	}else {
		echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
	}
}
?>