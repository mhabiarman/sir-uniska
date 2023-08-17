<?php
include '../koneksi.php';

$fk_pemohon = $_POST['fk_pemohon'];
$nama_bayi = $_POST['nama_bayi'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$hari = $_POST['hari'];
$tanggal = $_POST['tanggal'];
$pukul = $_POST['pukul'];
$tempat_kelahiran = $_POST['tempat_kelahiran'];
$nama_ibu = $_POST['nama_ibu'];
$nik_ibu = $_POST['nik_ibu'];
$umur_ibu = $_POST['umur_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$alamat_ibu = $_POST['alamat_ibu'];
$nama_ayah = $_POST['nama_ayah'];
$nik_ayah = $_POST['nik_ayah'];
$umur_ayah = $_POST['umur_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$alamat_ayah = $_POST['alamat_ayah'];
$nama_pelapor = $_POST['nama_pelapor'];
$nik_pelapor = $_POST['nik_pelapor'];
$umur_pelapor = $_POST['umur_pelapor'];
$pekerjaan_pelapor = $_POST['pekerjaan_pelapor'];
$alamat_pelapor = $_POST['alamat_pelapor'];
$hubungan_pelapor = $_POST['hubungan_pelapor'];
$status = "Proses";
$nomor_surat = $_POST['kode'];

$uploadDir = '../assets/images/berkas';

$tipe_1 = $_FILES['fc_ktp_ayah']['name'];
$tipe_1 = pathinfo($tipe_1, PATHINFO_EXTENSION);
$gambarnama_1 = round(microtime(true) * 1000)."_ktp_ayah.".$tipe_1;

$tmpFile_1 = $_FILES['fc_ktp_ayah']['tmp_name'];
$filename_1 = $uploadDir.'/'.$gambarnama_1;

$tipe_2 = $_FILES['fc_ktp_ibu']['name'];
$tipe_2 = pathinfo($tipe_2, PATHINFO_EXTENSION);
$gambarnama_2 = round(microtime(true) * 1000)."_ktp_ibu.".$tipe_2;

$tmpFile_2 = $_FILES['fc_ktp_ibu']['tmp_name'];
$filename_2 = $uploadDir.'/'.$gambarnama_2;

$tipe_3 = $_FILES['fc_kartu_keluarga']['name'];
$tipe_3 = pathinfo($tipe_3, PATHINFO_EXTENSION);
$gambarnama_3 = round(microtime(true) * 1000)."_kartu_keluarga.".$tipe_3;

$tmpFile_3 = $_FILES['fc_kartu_keluarga']['tmp_name'];
$filename_3 = $uploadDir.'/'.$gambarnama_3;

$tipe_4 = $_FILES['fc_surat_nikah']['name'];
$tipe_4 = pathinfo($tipe_4, PATHINFO_EXTENSION);
$gambarnama_4 = round(microtime(true) * 1000)."_surat_nikah.".$tipe_4;

$tmpFile_4 = $_FILES['fc_surat_nikah']['tmp_name'];
$filename_4 = $uploadDir.'/'.$gambarnama_4;

$tipe_5 = $_FILES['fc_surat_rt']['name'];
$tipe_5 = pathinfo($tipe_5, PATHINFO_EXTENSION);
$gambarnama_5 = round(microtime(true) * 1000)."_surat_rt.".$tipe_5;

$tmpFile_5 = $_FILES['fc_surat_rt']['tmp_name'];
$filename_5 = $uploadDir.'/'.$gambarnama_5;

$query = mysqli_query($conn, "INSERT INTO tb_surat_kelahiran(fk_pemohon, nomor_surat, nama_bayi, jenis_kelamin, hari, tanggal, pukul, tempat_kelahiran, nama_ibu, nik_ibu, umur_ibu, pekerjaan_ibu, alamat_ibu, nama_ayah, nik_ayah, umur_ayah, pekerjaan_ayah, alamat_ayah, nama_pelapor, nik_pelapor, umur_pelapor, pekerjaan_pelapor, alamat_pelapor, hubungan_pelapor, status, fc_ktp_ayah, fc_ktp_ibu, fc_kartu_keluarga, fc_surat_nikah, fc_surat_rt, created, modified) VALUES('$fk_pemohon', '$nomor_surat', '$nama_bayi', '$jenis_kelamin', '$hari', '$tanggal', '$pukul', '$tempat_kelahiran', '$nama_ibu', '$nik_ibu', '$umur_ibu', '$pekerjaan_ibu', '$alamat_ibu', '$nama_ayah', '$nik_ayah', '$umur_ayah', '$pekerjaan_ayah', '$alamat_ayah', '$nama_pelapor', '$nik_pelapor', '$umur_pelapor', '$pekerjaan_pelapor', '$alamat_pelapor', '$hubungan_pelapor', '$status', '$gambarnama_1', '$gambarnama_2', '$gambarnama_3', '$gambarnama_4', '$gambarnama_5', NOW(), NOW())");
if($query) {
	move_uploaded_file($tmpFile_1,$filename_1);
	move_uploaded_file($tmpFile_2,$filename_2);
	move_uploaded_file($tmpFile_3,$filename_3);
	move_uploaded_file($tmpFile_4,$filename_4);
	move_uploaded_file($tmpFile_5,$filename_5);
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>