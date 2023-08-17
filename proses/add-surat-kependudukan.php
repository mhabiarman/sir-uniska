<?php
include '../koneksi.php';

$fk_pemohon = $_POST['fk_pemohon'];
$nama = ucwords($_POST['nama']);
$nik = ucwords($_POST['nik']);
$tempat_lahir = ucwords($_POST['tempat_lahir']);
$tanggal_lahir = ucwords($_POST['tanggal_lahir']);
$jenis_kelamin = ucwords($_POST['jenis_kelamin']);
$agama = ucwords($_POST['agama']);
$pekerjaan = ucwords($_POST['pekerjaan']);
$status_perkawinan = ucwords($_POST['status_perkawinan']);
$kewarganegaraan = ucwords($_POST['kewarganegaraan']);
$alamat = $_POST['alamat'];
$status = "Proses";
$nomor_surat = $_POST['kode'];

$uploadDir = '../assets/images/berkas';

$tipe = $_FILES['ktp']['name'];
$tipe = pathinfo($tipe, PATHINFO_EXTENSION);
$gambarnama = round(microtime(true) * 1000).".".$tipe;

$tmpFile = $_FILES['ktp']['tmp_name'];
$filename = $uploadDir.'/'.$gambarnama;

$query = mysqli_query($conn, "INSERT INTO tb_surat_kependudukan(fk_pemohon, nomor_surat, nama, nik, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, pekerjaan, status_perkawinan, kewarganegaraan, alamat, status, ktp, created, modified) VALUES('$fk_pemohon', '$nomor_surat', '$nama', '$nik', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$pekerjaan', '$status_perkawinan', '$kewarganegaraan', '$alamat', '$status', '$gambarnama', NOW(), NOW())");
if($query) {
	move_uploaded_file($tmpFile,$filename);
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>