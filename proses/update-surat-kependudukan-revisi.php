<?php
include '../koneksi.php';

$id = $_POST['id'];
$status = "Proses";
$uploadDir = '../assets/images/berkas';

$tipe = $_FILES['ktp']['name'];
$tipe = pathinfo($tipe, PATHINFO_EXTENSION);
$gambarnama = round(microtime(true) * 1000).".".$tipe;

$tmpFile = $_FILES['ktp']['tmp_name'];
$filename = $uploadDir.'/'.$gambarnama;

$query = mysqli_query($conn, "SELECT * FROM tb_surat_kependudukan WHERE id_surat_kependudukan = '$id'");
$row = mysqli_fetch_array($query);
$gambar = $row['ktp'];
unlink('../assets/images/berkas/'.$gambar);

$query2 = mysqli_query($conn, "UPDATE tb_surat_kependudukan SET status = '$status', ktp = '$gambarnama', modified = NOW() WHERE id_surat_kependudukan = '$id'");
if($query2) {	
	move_uploaded_file($tmpFile,$filename);
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>