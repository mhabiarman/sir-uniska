<?php
include '../koneksi.php';

$fk_pemohon = $_POST['fk_pemohon'];
$nama = ucwords($_POST['nama']);
$nik = ucwords($_POST['nik']);
$tempat_lahir = ucwords($_POST['tempat_lahir']);
$tanggal_lahir = ucwords($_POST['tanggal_lahir']);
$jenis_kelamin = ucwords($_POST['jenis_kelamin']);
$kewarganegaraan = ucwords($_POST['kewarganegaraan']);
$agama = ucwords($_POST['agama']);
$pekerjaan = ucwords($_POST['pekerjaan']);
$status = "Proses";
$nomor_surat = $_POST['kode'];
$alamat = ucwords($_POST['alamat']);
$tanggal_kerumunan = ucwords($_POST['tanggal_kerumunan']);
$jam_mulai = ucwords($_POST['jam_mulai']);
$jam_selesai = ucwords($_POST['jam_selesai']);
$tempat_kerumunan = ucwords($_POST['tempat_kerumunan']);
$dalam_rangka = ucwords($_POST['dalam_rangka']);

$uploadDir = '../assets/images/berkas';

$tipe_1 = $_FILES['fc_ktp']['name'];
$tipe_1 = pathinfo($tipe_1, PATHINFO_EXTENSION);
$gambarnama_1 = round(microtime(true) * 1000)."_ktp.".$tipe_1;

$tmpFile_1 = $_FILES['fc_ktp']['tmp_name'];
$filename_1 = $uploadDir.'/'.$gambarnama_1;

$tipe_2 = $_FILES['fc_surat_rt']['name'];
$tipe_2 = pathinfo($tipe_2, PATHINFO_EXTENSION);
$gambarnama_2 = round(microtime(true) * 1000)."_surat_rt.".$tipe_2;

$tmpFile_2 = $_FILES['fc_surat_rt']['tmp_name'];
$filename_2 = $uploadDir.'/'.$gambarnama_2;

$query = mysqli_query($conn, "INSERT INTO tb_surat_kerumunan(fk_pemohon, nomor_surat, nama, nik, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, pekerjaan, kewarganegaraan, alamat, tanggal_kerumunan, jam_mulai, jam_selesai, tempat_kerumunan, dalam_rangka, status, fc_ktp, fc_surat_rt, created, modified) VALUES('$fk_pemohon', '$nomor_surat', '$nama', '$nik', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$pekerjaan', '$kewarganegaraan', '$alamat', '$tanggal_kerumunan', '$jam_mulai', '$jam_selesai', '$tempat_kerumunan', '$dalam_rangka', '$status', '$gambarnama_1', '$gambarnama_2', NOW(), NOW())");
if($query) {
	move_uploaded_file($tmpFile_1,$filename_1);
	move_uploaded_file($tmpFile_2,$filename_2);
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>