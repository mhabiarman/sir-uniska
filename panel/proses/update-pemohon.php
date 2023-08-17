<?php
include '../../koneksi.php';

$id = $_POST['id'];
$nama_lengkap = mysqli_escape_string($conn, ucwords($_POST['nama_lengkap']));
$tempat_lahir = mysqli_escape_string($conn, ucwords($_POST['tempat_lahir']));
$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);
$alamat = mysqli_escape_string($conn, ucwords($_POST['alamat']));
$tanggal_lahir = $_POST['tanggal_lahir'];
$telepon = $_POST['telepon'];
$nik = $_POST['nik'];

if($_POST['umur'] < 17) {
	echo json_encode(['message'=>'already in use', 'status'=>'5']);
}elseif(substr($_POST['telepon'],0,1) > 0) {
	echo json_encode(['message'=>'already in use', 'status'=>'6']);
}else {
$query = mysqli_query($conn, "UPDATE tb_pemohon SET nama_lengkap = '$nama_lengkap', tempat_lahir = '$tempat_lahir', username = '$username', password = '$password', alamat = '$alamat', tanggal_lahir = '$tanggal_lahir', telepon = '$telepon', nik = '$nik', modified = NOW() WHERE id_pemohon = '$id'");
if($query) {	
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	$string = mysqli_error($conn);
	$pieces = explode(' ', $string);
	$last_word = array_pop($pieces);
	$remove = str_replace("'", "", $last_word);
	echo json_encode(['message'=>mysqli_error($conn), 'status'=>'0', 'type'=>$remove]);
}
}
?>