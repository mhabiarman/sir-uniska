<?php
include '../koneksi.php';

$id = $_POST['id'];
$status = "Proses";

$query = mysqli_query($conn, "SELECT * FROM tb_surat_kepindahan WHERE id_surat_kepindahan = '$id'");
$row = mysqli_fetch_array($query);

$uploadDir = '../assets/images/berkas';

if(!empty($_FILES['fc_ktp']['name'])) {
	unlink($uploadDir."/".$row['fc_ktp']);

	$tipe_1 = $_FILES['fc_ktp']['name'];
	$tipe_1 = pathinfo($tipe_1, PATHINFO_EXTENSION);
	$gambarnama_1 = round(microtime(true) * 1000)."_ktp.".$tipe_1;

	$tmpFile_1 = $_FILES['fc_ktp']['tmp_name'];
	$filename_1 = $uploadDir.'/'.$gambarnama_1;

	move_uploaded_file($tmpFile_1,$filename_1);
}else {
	$gambarnama_1 = $row['fc_ktp'];	
}


if(!empty($_FILES['fc_kartu_keluarga']['name'])) {
	unlink($uploadDir."/".$row['fc_kartu_keluarga']);

	$tipe_2 = $_FILES['fc_kartu_keluarga']['name'];
	$tipe_2 = pathinfo($tipe_2, PATHINFO_EXTENSION);
	$gambarnama_2 = round(microtime(true) * 1000)."_kartu_keluarga.".$tipe_2;

	$tmpFile_2 = $_FILES['fc_kartu_keluarga']['tmp_name'];
	$filename_2 = $uploadDir.'/'.$gambarnama_2;

	move_uploaded_file($tmpFile_2,$filename_2);
}else {
	$gambarnama_2 = $row['fc_kartu_keluarga'];
}

if(!empty($_FILES['fc_surat_rt']['name'])) {
	unlink($uploadDir."/".$row['fc_surat_rt']);

	$tipe_3 = $_FILES['fc_surat_rt']['name'];
	$tipe_3 = pathinfo($tipe_3, PATHINFO_EXTENSION);
	$gambarnama_3 = round(microtime(true) * 1000)."_surat_rt.".$tipe_3;

	$tmpFile_3 = $_FILES['fc_surat_rt']['tmp_name'];
	$filename_3 = $uploadDir.'/'.$gambarnama_3;

	move_uploaded_file($tmpFile_3,$filename_3);
}else {
	$gambarnama_3 = $row['fc_surat_rt'];
}

$query2 = mysqli_query($conn, "UPDATE tb_surat_kepindahan SET status = '$status', c1 = 0, c2 = 0, c3 = 0, k1 = '', k2 = '', k3 = '', fc_ktp = '$gambarnama_1', fc_kartu_keluarga = '$gambarnama_2', fc_surat_rt = '$gambarnama_3', modified = NOW() WHERE id_surat_kepindahan = '$id'");
if($query2) {	
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>