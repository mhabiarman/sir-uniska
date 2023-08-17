<?php
include '../koneksi.php';

$id = $_POST['id'];
$status = "Proses";

$query = mysqli_query($conn, "SELECT * FROM tb_pengajuan WHERE id_pengajuan = '$id'");
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


$query2 = mysqli_query($conn, "UPDATE tb_pengajuan SET status = '$status', c1 = 0, k1 = '', fc_ktp = '$gambarnama_1', modified = NOW() WHERE id_pengajuan = '$id'");

if($query2) {	
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>