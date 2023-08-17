<?php
include '../koneksi.php';

$fk_pemohon = $_POST['fk_pemohon'];
$nama = ucwords($_POST['nama']);
$nik = ucwords($_POST['nik']);
$alamat = ucwords($_POST['alamat']);
$telepon = ucwords($_POST['telepon']);
$nama_perusahaan = ucwords($_POST['nama_perusahaan']);
$bentuk_perusahan = ucwords($_POST['bentuk_perusahan']);
$npwp = ucwords($_POST['npwp']);
$kegiatan_usaha = ucwords($_POST['kegiatan_usaha']);
$tempat_usaha = ucwords($_POST['tempat_usaha']);
$status = "Proses";
$nomor_surat = ucwords($_POST['kode']);
$alamat_iumk = ucwords($_POST['alamat_iumk']);
$jumlah_modal = ucwords($_POST['jumlah_modal']);

$uploadDir = '../assets/images/berkas';

$tipe_1 = $_FILES['fc_ktp']['name'];
$tipe_1 = pathinfo($tipe_1, PATHINFO_EXTENSION);
$gambarnama_1 = round(microtime(true) * 1000)."_ktp.".$tipe_1;

$tmpFile_1 = $_FILES['fc_ktp']['tmp_name'];
$filename_1 = $uploadDir.'/'.$gambarnama_1;

$tipe_2 = $_FILES['fc_kk']['name'];
$tipe_2 = pathinfo($tipe_2, PATHINFO_EXTENSION);
$gambarnama_2 = round(microtime(true) * 1000)."_kartu_keluarga.".$tipe_2;

$tmpFile_2 = $_FILES['fc_kk']['tmp_name'];
$filename_2 = $uploadDir.'/'.$gambarnama_2;

$tipe_3 = $_FILES['fc_foto']['name'];
$tipe_3 = pathinfo($tipe_3, PATHINFO_EXTENSION);
$gambarnama_3 = round(microtime(true) * 1000)."_surat_rt.".$tipe_3;

$tmpFile_3 = $_FILES['fc_foto']['tmp_name'];
$filename_3 = $uploadDir.'/'.$gambarnama_3;

$query = mysqli_query($conn, "INSERT INTO tb_surat_iumk(fk_pemohon, nomor_surat, nama, nik, alamat, telepon, nama_perusahaan, bentuk_perusahan, npwp, kegiatan_usaha, tempat_usaha, alamat_iumk, jumlah_modal, status, fc_ktp, fc_kk, fc_foto, created, modified) VALUES('$fk_pemohon', '$nomor_surat', '$nama', '$nik', '$alamat', '$telepon', '$nama_perusahaan', '$bentuk_perusahan', '$npwp', '$kegiatan_usaha', '$tempat_usaha', '$alamat_iumk', '$jumlah_modal', '$status', '$gambarnama_1', '$gambarnama_2', '$gambarnama_3', NOW(), NOW())");
if($query) {
	move_uploaded_file($tmpFile_1,$filename_1);
	move_uploaded_file($tmpFile_2,$filename_2);
	move_uploaded_file($tmpFile_3,$filename_3);
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>