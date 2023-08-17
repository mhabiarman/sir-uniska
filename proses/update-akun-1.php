<?php
include '../koneksi.php';

$id = $_POST['id'];

$nama_lengkap = mysqli_escape_string($conn, ucwords($_POST['nama_lengkap']));
$nama_perusahaan = mysqli_escape_string($conn, strtoupper($_POST['nama_perusahaan']));
$jabatan = mysqli_escape_string($conn, ucwords($_POST['jabatan']));
$tempat_lahir = mysqli_escape_string($conn, ucwords($_POST['tempat_lahir']));
$alamat = mysqli_escape_string($conn, ucwords($_POST['alamat']));
$tanggal_lahir = $_POST['tanggal_lahir'];
$telepon = $_POST['telepon'];
$nik = $_POST['nik'];

$query = mysqli_query($conn, "UPDATE tb_pemohon SET nama_lengkap = '$nama_lengkap', telepon = '$telepon', nik = '$nik', nama_perusahaan = '$nama_perusahaan', jabatan = '$jabatan', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', alamat = '$alamat', modified = NOW() WHERE id_pemohon = '$id'");
if($query) {	
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	$string = mysqli_error($conn);
	$pieces = explode(' ', $string);
	$last_word = array_pop($pieces);
	$remove = str_replace("'", "", $last_word);
	echo json_encode(['message'=>mysqli_error($conn), 'status'=>'0', 'type'=>$remove]);
}
?>