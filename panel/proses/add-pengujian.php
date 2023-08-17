<?php
include '../../koneksi.php';

$cek3 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pengujian WHERE id_pengajuan = '" . strtoupper($_POST['id_pengajuan']) . "'"));
if($cek3 > 0) {
	echo json_encode(['message'=>'already in use', 'status'=>'2']);
}else {

	if($_POST['status'] == "Setuju") {
		$alasan = '-';
	}else{
		$alasan = $_POST['alasan'];
	}

	if(empty($_POST['sdm'])) {
		$sdm = 0;
	}else{
		$sdm = 1;
	}

	if(empty($_POST['bahan_kimia'])) {
		$bahan_kimia = 0;
	}else{
		$bahan_kimia = 1;
	}

	if(empty($_POST['peralatan'])) {
		$peralatan = 0;
	}else{
		$peralatan = 1;
	}


	$hasil = mysqli_query($conn, "SELECT max(id_pengujian) as maxKode FROM tb_pengujian");
	$data = mysqli_fetch_array($hasil);
	$kode = $data['maxKode'];
	$noUrut = (int) substr($kode, 0, 4);
	$noUrut++;
	// $char = "PNG-";
	$bulan = date('m');
	
	if($bulan == 1) {
		$bulanRomawi = "I";
	}else if($bulan == 2) {
		$bulanRomawi = "II";
	}else if($bulan == 3) {
		$bulanRomawi = "III";
	}else if($bulan == 4) {
		$bulanRomawi = "IV";
	}else if($bulan == 5) {
		$bulanRomawi = "V";
	}else if($bulan == 6) {
		$bulanRomawi = "VI";
	}else if($bulan == 7) {
		$bulanRomawi = "VII";
	}else if($bulan == 8) {
		$bulanRomawi = "VIII";
	}else if($bulan == 9) {
		$bulanRomawi = "IX";
	}else if($bulan == 10) {
		$bulanRomawi = "X";
	}else if($bulan == 11) {
		$bulanRomawi = "XI";
	}else if($bulan == 12) {
		$bulanRomawi = "XII";
	}else {
		$bulanRomawi = "I";
	}
	$kode = sprintf("%04s", $noUrut).'/K/BSPJI/'.$bulanRomawi.'/'.date('Y');

	$query = mysqli_query($conn, "INSERT INTO tb_pengujian(id_pengujian,tanggal_pengujian,tanggal_selesai,sdm,peralatan,bahan_kimia,informasi,created,modified,status,alasan,id_pengajuan,id_pegawai,id_alat) VALUES('" . $kode . "','" . ucwords($_POST['tanggal_pengujian']) . "','" . ucwords($_POST['tanggal_selesai']) . "','" . $sdm . "','" . $peralatan . "','" . $bahan_kimia . "','" . ucwords($_POST['informasi']) . "',NOW(),NOW(),'" . $_POST['status'] . "','" . $alasan . "','" . $_POST['id_pengajuan'] . "','" . $_POST['id_pegawai'] . "','" . $_POST['id_alat'] . "')");

	$query = mysqli_query($conn, "UPDATE tb_pengajuan SET created4 = NOW() WHERE id_pengajuan = '" . $_POST['id_pengajuan'] . "'");


	if($query) {
		echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
	}else {
		echo json_encode(['message'=>'failed to save data', 'status'=>'0']);
	}
	}
?>