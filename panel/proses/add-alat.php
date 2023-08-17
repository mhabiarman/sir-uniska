<?php
include '../../koneksi.php';

$cek3 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_alat WHERE nama_alat = '" . strtoupper($_POST['nama_alat']) . "' AND nomor_seri = '" . strtoupper($_POST['nomor_seri']) . "'"));
if($cek3 > 0) {
	echo json_encode(['message'=>'already in use', 'status'=>'2']);
}else {
	$query = mysqli_query($conn, "INSERT INTO tb_alat(nama_alat,merk_alat,nomor_seri,kapasitas,identitas) VALUES('" . ucwords($_POST['nama_alat']) . "','" . ucwords($_POST['merk_alat']) . "','" . ucwords($_POST['nomor_seri']) . "','" . ucwords($_POST['kapasitas']) . "','" . ucwords($_POST['identitas']) . "')");

	if($query) {
		echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
	}else {
		echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
	}
	}
?>