<?php
include '../../koneksi.php';

$nomor_surat = $_POST['nomor_surat'];
$nik = $_POST['nik'];
$nomor_kk = $_POST['nomor_kk'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$status_perkawinan = $_POST['status_perkawinan'];
$hubungan = $_POST['hubungan'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$nomor_passpor = $_POST['nomor_passpor'];
$nomor_kitap = $_POST['nomor_kitap'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$status = "Setuju";
$alasan = "-";
$keterangan = "-";

$query = mysqli_query($conn, "INSERT INTO tb_kependudukan(nomor_surat, nik, nomor_kk, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, pendidikan, pekerjaan, status_perkawinan, hubungan, kewarganegaraan, nomor_passpor, nomor_kitap, nama_ayah, nama_ibu, status, alasan, keterangan, created, modified) VALUES('$nomor_surat', '$nik', '$nomor_kk', '$nama', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$agama', '$pendidikan', '$pekerjaan', '$status_perkawinan', '$hubungan', '$kewarganegaraan', '$nomor_passpor', '$nomor_kitap', '$nama_ayah', '$nama_ibu', '$status', '$alasan', '$keterangan', NOW(), NOW())");
if($query) {
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>