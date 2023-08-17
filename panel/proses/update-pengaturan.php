<?php
include '../../koneksi.php';

$id = $_POST['id'];
$nip_pengaturan = ucwords($_POST['nip_pengaturan']);
$nama_pengaturan = ucwords($_POST['nama_pengaturan']);

$query = mysqli_query($conn, "UPDATE tb_pengaturan SET nip_pengaturan = '$nip_pengaturan', nama_pengaturan = '$nama_pengaturan' WHERE id_pengaturan = '$id'");
if($query) {	
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>mysqli_error($conn), 'status'=>'0']);
}
?>