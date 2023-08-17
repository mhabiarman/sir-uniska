<?php
include '../koneksi.php';

$fk_pemohon = $_POST['fk_pemohon'];
$nama = ucwords($_POST['nama']);
$nik = ucwords($_POST['nik']);
$pekerjaan = ucwords($_POST['pekerjaan']);
$alamat_asal = ucwords($_POST['alamat_asal']);
$alamat_imb = ucwords($_POST['alamat_imb']);
$luas = ucwords($_POST['luas']);
$fungsi = ucwords($_POST['fungsi']);
$status_tanah = ucwords($_POST['status_tanah']);
$desa = ucwords($_POST['desa']);
$status = "Proses";
$nomor_surat = $_POST['kode'];
$sebelah_utara = ucwords($_POST['sebelah_utara']);
$sebelah_timur = ucwords($_POST['sebelah_timur']);
$sebelah_selatan = ucwords($_POST['sebelah_selatan']);
$sebelah_barat = ucwords($_POST['sebelah_barat']);


$uploadDir = '../assets/images/berkas';

$tipe_1 = $_FILES['fc_ktp']['name'];
$tipe_1 = pathinfo($tipe_1, PATHINFO_EXTENSION);
$gambarnama_1 = round(microtime(true) * 1000)."_ktp.".$tipe_1;

$tmpFile_1 = $_FILES['fc_ktp']['tmp_name'];
$filename_1 = $uploadDir.'/'.$gambarnama_1;

$tipe_2 = $_FILES['fc_pbb']['name'];
$tipe_2 = pathinfo($tipe_2, PATHINFO_EXTENSION);
$gambarnama_2 = round(microtime(true) * 1000)."_kartu_keluarga.".$tipe_2;

$tmpFile_2 = $_FILES['fc_pbb']['tmp_name'];
$filename_2 = $uploadDir.'/'.$gambarnama_2;

$tipe_3 = $_FILES['fc_sppt']['name'];
$tipe_3 = pathinfo($tipe_3, PATHINFO_EXTENSION);
$gambarnama_3 = round(microtime(true) * 1000)."_surat_rt.".$tipe_3;

$tmpFile_3 = $_FILES['fc_sppt']['tmp_name'];
$filename_3 = $uploadDir.'/'.$gambarnama_3;

$tipe_4 = $_FILES['fc_tanah']['name'];
$tipe_4 = pathinfo($tipe_4, PATHINFO_EXTENSION);
$gambarnama_4 = round(microtime(true) * 1000)."_surat_rt.".$tipe_4;

$tmpFile_4 = $_FILES['fc_tanah']['tmp_name'];
$filename_4 = $uploadDir.'/'.$gambarnama_4;

$query = mysqli_query($conn, "INSERT INTO tb_surat_imb(fk_pemohon, nomor_surat, nama, nik, pekerjaan, alamat_asal, alamat_imb, luas, fungsi, status_tanah, desa, sebelah_utara, sebelah_timur, sebelah_selatan, sebelah_barat, fc_ktp, fc_pbb, fc_sppt, fc_tanah, status, created, modified) VALUES('$fk_pemohon', '$nomor_surat', '$nama', '$nik', '$pekerjaan', '$alamat_asal', '$alamat_imb', '$luas', '$fungsi', '$status_tanah', '$desa', '$sebelah_utara', '$sebelah_timur', '$sebelah_selatan', '$sebelah_barat', '$gambarnama_1', '$gambarnama_2', '$gambarnama_3', '$gambarnama_4', '$status', NOW(), NOW())");
if($query) {
	move_uploaded_file($tmpFile_1,$filename_1);
	move_uploaded_file($tmpFile_2,$filename_2);
	move_uploaded_file($tmpFile_3,$filename_3);
	move_uploaded_file($tmpFile_4,$filename_4);
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>