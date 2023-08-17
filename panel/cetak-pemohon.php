<?php
include("../koneksi.php");
// session_start();
if(isset($_SESSION['userid'])) {
	$userid = $_SESSION['userid'];
	$syntax = mysqli_query($conn, "SELECT * FROM tb_admin WHERE id_admin = '$userid'");
	$online = mysqli_fetch_array($syntax);
}else {
	echo "<script>window.location.href='index'</script>";
}
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('../assets/plugins/tcpdf/tcpdf.php');

// create new PDF document
//$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf= new TCPDF('P','mm',array(240,350));

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('habi');
$pdf->SetTitle('Laporan Pemohon');
$pdf->SetSubject('Pemohon');
$pdf->SetKeywords('Laporan, PDF');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

// set header and footer fonts
// $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

/*####################################################### 
#					 		PAGE 1						#
#########################################################*/
   $cetak = 'Tanggal Di Cetak : '.tglIndonesia(date('d F Y'));

		$query = mysqli_query($conn, "SELECT * FROM tb_pemohon ORDER BY nama_lengkap ASC");
//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
  if(mysqli_num_rows($query) == 0){ //ini artinya jika data hasil query di atas kosong
   
   //jika data kosong, maka akan menampilkan row kosong
   echo '<script language="javascript">
              alert ("Data Tidak Ada");
              window.close();
              </script>';
              exit();
   
   }else{ //else ini artinya jika data hasil query ada (data diu database tidak kosong)
   

//------------------------------------------------------------
$pdf->AddPage();

$tbl2 = '<table border="0">
			<tr>
				<td colspan="2" style="text-align:center; border-bottom: 1px solid black;"><font size="7em">
				<div style="text-align: center;"><img src="../assets/images/kop-2.png" style="width: 750px; height: 130px;"/></div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</font></td>
			</tr>
			
		</table><br /><br />
		<table border="0" style="text-align:center;">
			<tr>
				<td style="text-align:right;width: 100%"><font size="10em">'.$cetak.'</font></td>
			</tr>
			<tr>
				<td style="text-align:left;width: 80px;"><font size="10em">Di Cetak</font></td>
				<td style="text-align:left;width: 20px;"><font size="10em">: </font></td>
				<td style="text-align:left;width: 100px;"><font size="10em">ADMIN</font></td>
			</tr>
		</table>
		<br><br><br>
		<table border="0" style="text-align:center;">
			<tr>
				<td colspan="2" style="text-align:center;"><font size="12em"><b>LAPORAN PEMOHON MELAKUKAN PENGAJUAN</b></font></td>
			</tr>
		</table>
		<br><br>
		';
		
				$tbl2 = $tbl2.'<table border="1px" cellpadding="2" cellspacing="0">
					<tr style="text-align:center;vertical-align:middle;">
									<th style="width:50px;border: 1px solid #000;"><b>No</b></th>
									<th style="width:150px;border: 1px solid #000;"><b>Nama</b></th>
									<th style="width:150px;border: 1px solid #000;"><b>Nama Perusahaan</b></th>
									<th style="width:150px;border: 1px solid #000;"><b>Jumlah Di Pilih</b></th>
									<th style="width:150px;border: 1px solid #000;"><b>Jumlah Di Setujui</b></th>
									<th style="width:150px;border: 1px solid #000;"><b>Jumlah Di Tolak</b></th>
					</tr>';
					$no = 1;
					while ($tampil = mysqli_fetch_array($query)){
							$query_pemohon = mysqli_query($conn, "SELECT *, COUNT(*) AS jumlah FROM tb_pengajuanbantu, tb_pengajuan WHERE tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND id_pemohon='$tampil[id_pemohon]' GROUP BY tb_pengajuanbantu.id_pengajuan");
							$row_pemohon = mysqli_fetch_array($query_pemohon);

							$query_setuju = mysqli_query($conn, "SELECT *, COUNT(*) AS jumlah FROM tb_pengajuanbantu, tb_pengajuan WHERE tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND id_pemohon='$tampil[id_pemohon]' AND status <> 'Tolak' GROUP BY tb_pengajuanbantu.id_pengajuan");
							$row_setuju = mysqli_fetch_array($query_setuju);

							$query_tolak = mysqli_query($conn, "SELECT *, COUNT(*) AS jumlah FROM tb_pengajuanbantu, tb_pengajuan WHERE tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND id_pemohon='$tampil[id_pemohon]' AND status = 'Tolak' GROUP BY tb_pengajuanbantu.id_pengajuan");
							$row_tolak = mysqli_fetch_array($query_tolak);
							if ($tampil['nama_perusahaan']<>''){
							$cek1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pengajuanbantu, tb_pengajuan WHERE tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND id_pemohon='$tampil[id_pemohon]'"));
							if($cek1 == 0 ){
								$cek1 = 0;
							}else{
								$cek1 = $cek1;
							}
							$cek2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pengajuanbantu, tb_pengajuan WHERE tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND id_pemohon='$tampil[id_pemohon]' AND status <> 'Tolak'"));
							if($cek2 == 0 ){
								$cek2 = 0;
							}else{
								$cek2 = $cek2;
							}
							$cek3 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pengajuanbantu, tb_pengajuan WHERE tb_pengajuan.id_pengajuan=tb_pengajuanbantu.id_pengajuan AND id_pemohon='$tampil[id_pemohon]' AND status = 'Tolak'"));
							if($cek3 == 0 ){
								$cek3 = 0;
							}else{
								$cek3 = $cek3;
							}
							$tot1 += $cek1;
							$tot2 += $cek2;
							$tot3 += $cek3;
						$tbl2 = $tbl2.'<tr style="text-align:center;">
									<td>'.$no++.'</td>
									<td>'.$tampil['nama_lengkap'].'</td>
									<td>'.$tampil['nama_perusahaan'].'</td>
									<td align="right">'.$cek1.'</td>
									<td align="right">'.$cek2.'</td>
									<td align="right">'.$cek3.'</td>
						</tr>';
					}}
					$tbl2 = $tbl2.'
					<tr style="text-align:center;">
					<td colspan="3">TOTAL</td>
					<td align="right">'.$tot1.'</td>
					<td align="right">'.$tot2.'</td>
					<td align="right">'.$tot3.'</td>
					</tr>
					</table>';

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
					
$pdf->writeHTML($tbl2, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

//Close and output PDF document
ob_end_clean();
$pdf->Output('LAPORAN PEMOHON MELAKUKAN PENGAJUAN.pdf', 'I');
}

//============================================================+
// END OF FILE
//============================================================+
