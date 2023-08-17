<?php
include '../../koneksi.php';

$id = $_POST['id'];
$nama_pegawai = ucwords($_POST['nama_pegawai']);
$telepon = $_POST['telepon'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$fk_jabatan = $_POST['fk_jabatan'];

$query = mysqli_query($conn, "UPDATE tb_pegawai SET fk_jabatan = '$fk_jabatan', nama_pegawai = '$nama_pegawai', telepon = '$telepon', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', modified = NOW() WHERE id_pegawai = '$id'");
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