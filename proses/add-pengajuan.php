<?php
include '../koneksi.php';

$cek3 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pengajuanbantu WHERE id_pengajuan = '" . $_POST['id_pengajuan'] . "'"));
if($cek3 == 0) {
	echo json_encode(['message'=>'null data', 'status'=>'2']);
}else {
	$uploadDir = '../assets/images/berkas';

	$tipe_1 = $_FILES['fc_ktp']['name'];
	$tipe_1 = pathinfo($tipe_1, PATHINFO_EXTENSION);
	$gambarnama_1 = round(microtime(true) * 1000)."_ktp.".$tipe_1;
	
	$tmpFile_1 = $_FILES['fc_ktp']['tmp_name'];
	$filename_1 = $uploadDir.'/'.$gambarnama_1;

	$query = mysqli_query($conn, "INSERT INTO tb_pengajuan(id_pengajuan,tanggal_pengajuan,id_pemohon,alamat,pengujian,fc_ktp,status,created,modified) VALUES('" . $_POST['id_pengajuan'] . "',NOW(),'" . ucwords($_POST['id_pemohon']) . "','" . ucwords($_POST['alamat']) . "','" . ucwords($_POST['pengujian']) . "', '$gambarnama_1','Proses', NOW(), NOW())");

	if($query) {
	move_uploaded_file($tmpFile_1,$filename_1);
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
	}else {
		echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
	}
	}
?>