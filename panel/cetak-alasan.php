<?php
include("../koneksi.php");
require_once('../assets/plugins/tcpdf/tcpdf.php');

$pdf= new TCPDF('P','mm',array(200,320));

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Jafar');
$pdf->SetTitle('Laporan Jumlah Pengeluaran Dana');
$pdf->SetSubject('Jumlah Pengeluaran Dana');
$pdf->SetKeywords('Laporan, PDF');
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

$pdf->SetFont('dejavusans', '', 10);

$cetak = 'Tanggal Di Cetak : '.tglIndonesia(date('d F Y'));
if(isset($_GET['tipe'])) {
	
	if($_GET['tipe'] == "perbulan") {
		$bulan = $_GET['bulan'];
		$tahun = $_GET['tahun'];
		
		$query = mysqli_query($conn, "SELECT * FROM tb_pengajuan, tb_pemohon WHERE tb_pemohon.id_pemohon=tb_pengajuan.id_pemohon AND status='Tolak' AND tanggal_pengajuan LIKE '$tahun-$bulan%' ORDER BY tanggal_pengajuan ASC");
		if($_GET['bulan'] == "01") {
			$bulan1='Januari';
			}elseif($_GET['bulan'] == "02") {
			$bulan1='Febuari';
			}elseif($_GET['bulan'] == "03") {
			$bulan1='Maret';
			}elseif($_GET['bulan'] == "04") {
			$bulan1='April';
			}elseif($_GET['bulan'] == "05") {
			$bulan1='Mei';
			}elseif($_GET['bulan'] == "06") {
			$bulan1='Juni';
			}elseif($_GET['bulan'] == "07") {
			$bulan1='Juli';
			}elseif($_GET['bulan'] == "08") {
			$bulan1='Agustus';
			}elseif($_GET['bulan'] == "09") {
			$bulan1='September';
			}elseif($_GET['bulan'] == "10") {
			$bulan1='Oktober';
			}elseif($_GET['bulan'] == "11") {
			$bulan1='November';
			}elseif($_GET['bulan'] == "12") {
			$bulan1='Desember';
			}
			$subjudul = 'BULAN '.strtoupper($bulan1).' '.$tahun;
	}else if($_GET['tipe'] == "pertahun") {
		$tahun = $_GET['tahun'];

		$query = mysqli_query($conn, "SELECT * FROM tb_pengajuan, tb_pemohon WHERE tb_pemohon.id_pemohon=tb_pengajuan.id_pemohon AND status='Tolak' AND tanggal_pengajuan LIKE '$tahun%' ORDER BY tanggal_pengajuan ASC");

		$subjudul = 'TAHUN '.$tahun;

	}else {
		$query = mysqli_query($conn, "SELECT * FROM tb_pengajuan, tb_pemohon WHERE tb_pemohon.id_pemohon=tb_pengajuan.id_pemohon AND status='Tolak' ORDER BY tanggal_pengajuan ASC");
	$subjudul = 'SEMUA DATA';
	}
	
}else {
	$query = mysqli_query($conn, "SELECT * FROM tb_pengajuan, tb_pemohon WHERE tb_pemohon.id_pemohon=tb_pengajuan.id_pemohon AND status='Tolak' ORDER BY tanggal_pengajuan ASC");
	$subjudul = 'SEMUA DATA';

}

if(mysqli_num_rows($query) == 0) {
	echo '<script language="javascript">
	alert ("Data Tidak Ada");
	window.close();
	</script>';
	exit();
}else{

	$judul = 'LAPORAN ALASAN PENOLAKAN PENGAJUAN';
	// $subjudul = 'LAPORAN JUMLAH DANA MASUK';

	$pdf->AddPage();

	$tbl2 = '<table border="0">
	<tr>
	<td colspan="2" style="text-align:center; border-bottom: 1px solid black;"><font size="7em">
	<div style="text-align: center;"><img src="../assets/images/kop-2.png" style="width: 750px; height: 120px;"/></div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</font></td>
	</tr>
	
	</table><br /><br />
	<table border="0" style="text-align:center;">
	<tr>
	<td style="text-align:right;"><font size="10em">'.$cetak.'</font></td>
	</tr>
	<tr>
	<td style="text-align:left;width:100px;"><font size="10em">Di Cetak</font></td>
	<td style="text-align:left;"><font size="10em"> : ADMIN</font></td>
	</tr>
	</table>
	<br><br><br>
	<table border="0" style="text-align:center;">
	<tr>
	<td colspan="2" style="text-align:center;"><font size="12em"><b>'.$judul.'</b></font></td>
	</tr>
	<tr>
	<td colspan="2" style="text-align:center;"><font size="12em"><b>'.$subjudul.'</b></font></td>
	</tr>
	</table>
	<br><br>
	';
	
	$tbl2 = $tbl2.'<table border="1px" cellpadding="2" cellspacing="0">
	<tr style="text-align:center;vertical-align:middle;">
	<th style="width:50px;border: 1px solid #000;">No</th>
	<th style="width:150px;border: 1px solid #000;">Tanggal</th>
	<th style="width:200px;border: 1px solid #000;">Nama Perusahaan</th>
	<th style="width:230px;border: 1px solid #000;">Alasan Penolakan</th>
	</tr>';
	$no = 1;
	$tot = 0;
	while ($row = mysqli_fetch_array($query)){
		$tbl2 = $tbl2.'<tr style="text-align:center;">
		<td>'.$no++.'</td>
		<td>'.tglIndonesia(date('d F Y', strtotime($row['created']))).'</td>
		<td align="left">'.$row['nama_perusahaan'].'</td>
		<td align="left">'.$row['alasan'].'</td>
		</tr>';
	}
		
	$query1 = mysqli_query($conn, "SELECT * FROM tb_pengaturan WHERE status = 'kepala'");
	$row1 = mysqli_fetch_array($query1);
$tbl2 = $tbl2.'<br><br><table border="0" cellpadding="2" cellspacing="0">
	<tr style="text-align:center;">
		<td style="width:60%;"></td>
		<td style="width:40%;">Banjarbaru, '.tglIndonesia(date('d F Y')).'<br>Kepala Dinas</td>
	</tr><br><br><br><br>
	<tr style="text-align:center;">
		<td style="width:60%;"></td>
		<td style="width:40%;"><u><b>'.$row1['nama_pengaturan'].'</b></u><br>NIP. '.$row1['nip_pengaturan'].'</td>
	</tr>
	</table>';
	
	$tbl2 = $tbl2.'</table>';
	$pdf->writeHTML($tbl2, true, false, true, false, '');

	$pdf->lastPage();

	ob_end_clean();
	$pdf->Output('LAPORAN ALASAN PENOLAKAN PENGAJUAN.pdf', 'I');
}