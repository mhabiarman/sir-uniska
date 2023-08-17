<?php
include '../../koneksi.php';

$id = $_POST['id_pengajuan'];
$status = $_POST['status'];

if($status == "Revisi") {
	$c1 = $_POST['c1'];
	$k1 = $_POST['k1'];
}else{
	$c1 = 0;
	$k1 = '';
}

if($status == "Tolak") {
	$alasan = $_POST['alasan'];
}else {
	$alasan = "-";
}

$query = mysqli_query($conn, "SELECT * FROM tb_pemohon,tb_pengajuan WHERE tb_pemohon.id_pemohon=tb_pengajuan.id_pemohon AND id_pengajuan = '$id'");
$row = mysqli_fetch_array($query);
if($status == "Revisi" || $status == "Tolak") {
	$created2 = '';
	$created3 = '';
	$created5 = '';
}elseif($status == "Diterima") {
	
	$created2 = date('Y-m-d H:i:s');
	$created3 = '';
	$created5 = '';
}elseif($status == "Setuju") {
	$created2 = $row['created2'];
	$created3 = date('Y-m-d H:i:s');
	$created5 = '';
}elseif($status == "Ambil") {
	$created2 = $row['created2'];
	$created3 = $row['created3'];
	$created5 = date('Y-m-d H:i:s');
}


if(empty($_FILES['fc_ktp']["name"]))   //jika gambar kosong atau tidak di ganti
{
if($status == "Revisi") {
	$query = mysqli_query($conn, "UPDATE tb_pengajuan SET tanggal_pengajuan = '" . ucwords($_POST['tanggal_pengajuan']) . "', id_pemohon = '" . ucwords($_POST['id_pemohon']) . "', alamat = '" . ucwords($_POST['alamat']) . "', pengujian = '" . ucwords($_POST['pengujian']) . "', status = '$status', alasan = '$alasan', c1 = '$c1', k1 = '$k1', modified = NOW(), created2 = '$created2', created3 = '$created3', created5 = '$created5' WHERE id_pengajuan = '$id'");
}else {
	$query = mysqli_query($conn, "UPDATE tb_pengajuan SET tanggal_pengajuan = '" . ucwords($_POST['tanggal_pengajuan']) . "', id_pemohon = '" . ucwords($_POST['id_pemohon']) . "', alamat = '" . ucwords($_POST['alamat']) . "', pengujian = '" . ucwords($_POST['pengujian']) . "', status = '$status', alasan = '$alasan', modified = NOW(), created2 = '$created2', created3 = '$created3', created5 = '$created5' WHERE id_pengajuan = '$id'");
}

}else{
    $sql = mysqli_query($conn, "SELECT * FROM tb_pengajuan WHERE id_pengajuan = '$id'");
    $data = mysqli_fetch_array($sql);
    
    unlink('../../assets/images/berkas/'.$data['fc_ktp']);

	$uploadDir = '../../assets/images/berkas';

	$tipe_1 = $_FILES['fc_ktp']['name'];
	$tipe_1 = pathinfo($tipe_1, PATHINFO_EXTENSION);
	$gambarnama_1 = round(microtime(true) * 1000)."_ktp.".$tipe_1;
	
	$tmpFile_1 = $_FILES['fc_ktp']['tmp_name'];
	$filename_1 = $uploadDir.'/'.$gambarnama_1;
	move_uploaded_file($tmpFile_1,$filename_1);

    if($status == "Revisi") {
        $query = mysqli_query($conn, "UPDATE tb_pengajuan SET tanggal_pengajuan = '" . ucwords($_POST['tanggal_pengajuan']) . "', id_pemohon = '" . ucwords($_POST['id_pemohon']) . "', alamat = '" . ucwords($_POST['alamat']) . "', pengujian = '" . ucwords($_POST['pengujian']) . "', status = '$status', alasan = '$alasan', c1 = '$c1', k1 = '$k1', modified = NOW(), '$gambarnama_1', created2 = '$created2', created3 = '$created3', created5 = '$created5' WHERE id_pengajuan = '$id'");
    }else {
        $query = mysqli_query($conn, "UPDATE tb_pengajuan SET tanggal_pengajuan = '" . ucwords($_POST['tanggal_pengajuan']) . "', id_pemohon = '" . ucwords($_POST['id_pemohon']) . "', alamat = '" . ucwords($_POST['alamat']) . "', pengujian = '" . ucwords($_POST['pengujian']) . "', status = '$status', alasan = '$alasan', modified = NOW(), '$gambarnama_1', created2 = '$created2', created3 = '$created3', created5 = '$created5' WHERE id_pengajuan = '$id'");
    }
}
if($query) {	
	echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
}
?>