<?php
include '../koneksi.php';

$cek3 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pengajuanbantu WHERE nama = '" . strtoupper($_POST['nama']) . "' AND id_pengajuan = '" . strtoupper($_POST['id_pengajuan']) . "'"));
if($cek3 > 0) {
	echo json_encode(['message'=>'already in use', 'status'=>'2']);
}else {
	$query = mysqli_query($conn, "INSERT INTO tb_pengajuanbantu(nama,jumlah_pengajuan,satuan_pengajuan,id_komoditi,id_pengajuan) VALUES('" . ucwords($_POST['nama']) . "','" . ucwords($_POST['jumlah_pengajuan']) . "','" . ucwords($_POST['satuan_pengajuan']) . "','" . ucwords($_POST['id_komoditi']) . "','" . strtoupper($_POST['id_pengajuan']) . "')");

	if($query) {
		echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
	}else {
		echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
	}
	}
?>