<?php
include '../../koneksi.php';

$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$username = mysqli_escape_string($conn, $_POST['username']);
$telepon = $_POST['telepon'];
$password = mysqli_escape_string($conn, $_POST['password']);
$alamat = mysqli_escape_string($conn, ucwords($_POST['alamat']));

$query = mysqli_query($conn, "UPDATE tb_admin SET nama_lengkap = '$nama_lengkap', username = '$username', telepon = '$telepon', password = '$password', alamat = '$alamat', modified = NOW() WHERE id_admin = '$id'");
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