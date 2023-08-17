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
$status = "Proses";
$nomor_surat = $_POST['kode'];
$pendidikan = $_POST['pendidikan'];
$alamat_asal = $_POST['alamat_asal'];
$alamat_tujuan = $_POST['alamat_tujuan'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$alasan_pindah = $_POST['alasan_pindah'];
$pengikut = $_POST['pengikut'];

$uploadDir = '../assets/images/berkas';

$tipe_1 = $_FILES['fc_ktp']['name'];
$tipe_1 = pathinfo($tipe_1, PATHINFO_EXTENSION);
$gambarnama_1 = round(microtime(true) * 1000)."_ktp.".$tipe_1;

$tmpFile_1 = $_FILES['fc_ktp']['tmp_name'];
$filename_1 = $uploadDir.'/'.$gambarnama_1;

$tipe_2 = $_FILES['fc_kartu_keluarga']['name'];
$tipe_2 = pathinfo($tipe_2, PATHINFO_EXTENSION);
$gambarnama_2 = round(microtime(true) * 1000)."_kartu_keluarga.".$tipe_2;

$tmpFile_2 = $_FILES['fc_kartu_keluarga']['tmp_name'];
$filename_2 = $uploadDir.'/'.$gambarnama_2;

$tipe_3 = $_FILES['fc_surat_rt']['name'];
$tipe_3 = pathinfo($tipe_3, PATHINFO_EXTENSION);
$gambarnama_3 = round(microtime(true) * 1000)."_surat_rt.".$tipe_3;

$tmpFile_3 = $_FILES['fc_surat_rt']['tmp_name'];
$filename_3 = $uploadDir.'/'.$gambarnama_3;

$query = mysqli_query($conn, "INSERT INTO tb_surat_kepindahan(fk_pemohon, nomor_surat, nama, nik, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, pekerjaan, status_perkawinan, kewarganegaraan, pendidikan, alamat_asal, alamat_tujuan, desa, kecamatan, kota, provinsi, alasan_pindah, pengikut, status, fc_ktp, fc_kartu_keluarga, fc_surat_rt, created, modified) VALUES('$fk_pemohon', '$nomor_surat', '$nama', '$nik', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$pekerjaan', '$status_perkawinan', '$kewarganegaraan', '$pendidikan', '$alamat_asal', '$alamat_tujuan', '$desa', '$kecamatan', '$kota', '$provinsi', '$alasan_pindah', '$pengikut', '$status', '$gambarnama_1', '$gambarnama_2', '$gambarnama_3', NOW(), NOW())");
if($query) {
	move_uploaded_file($tmpFile_1,$filename_1);
	move_uploaded_file($tmpFile_2,$filename_2);
	move_uploaded_file($tmpFile_3,$filename_3);
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>