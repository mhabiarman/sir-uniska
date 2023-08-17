<?php
include("koneksi.php");
// function tglIndonesia($str) {
//   $tr = trim($str);
//   $str = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
//   return $str;
// }
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
$id = $_GET['id'];

require_once('assets/plugins/tcpdf/tcpdf.php');

// create new PDF document
//$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf= new TCPDF('L','mm',array(280,200));

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Jafar');
$pdf->SetTitle('Cetak Pengujian');
$pdf->SetSubject('Pengujian');
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
$query = mysqli_query($conn, "SELECT * FROM tb_pengujian,tb_pengajuan, tb_pemohon, tb_pegawai, tb_alat WHERE tb_pengujian.id_pengajuan=tb_pengajuan.id_pengajuan AND tb_pemohon.id_pemohon=tb_pengajuan.id_pemohon AND tb_pegawai.id_pegawai=tb_pengujian.id_pegawai AND tb_pengujian.id_alat=tb_alat.id_alat AND id_pengujian = '$id'");


  if(mysqli_num_rows($query) == 0){ //ini artinya jika data hasil query di atas kosong
   
   //jika data kosong, maka akan menampilkan row kosong
   echo '<script language="javascript">
              alert ("Data Tidak Ada");
              window.location="javascript:history.go(-1)";
              </script>';
              exit();
   
  }else{ //else ini artinya jika data hasil query ada (data diu database tidak kosong)

//------------------------------------------------------------
$pdf->AddPage();


					$list=mysqli_fetch_array($query);	
$tbl2 = '
		<table border="0" style="text-align:left;">
			<tr>
				<td style="text-align:left;width:100%;"><font size="12em"><b>BALAI PENGUJIAN DAN SERTIFIKAT MUTU BARANG</b></font></td>
			</tr>
			<tr>
				<td style="text-align:left;width:100%;"><font size="12em"><b>PROVINSI KALIMANTAN SELATAN</b></font></td>
			</tr>
			<br>
			<tr>
				<td style="text-align:center;width:100%;"><font size="12em"><b>TANDA TERIMA DAN KAJI ULANG PERMINTAAN PENGUJIAN</b></font></td>
			</tr>
			<tr>
				<td style="text-align:center;width:100%;"><font size="12em"><b>PADA '.$list['nama_perusahaan'].'</b></font></td>
			</tr>
		</table>
		<br><br>
		';
		
				$tbl2 = $tbl2.'<table border="0" cellpadding="2" cellspacing="0" >';
						$tbl2 = $tbl2.'
						<tr nobr="true">
						<td style="width:10%;line-height: 2;"></td>
						<td style="width:25%;line-height: 2;">1. Jumlah Alat </td>
						</tr>';
						$tbl2 = $tbl2.'
						<tr style="text-align:center;">
							<td style="width:10%;background-color: #fff;"></td>
							<th style="width:30px;border: 1px solid #000;">No</th>
							<th style="width:200px;border: 1px solid #000;">Jenis Komoditi</th>
							<th style="width:200px;border: 1px solid #000;">Nama Komoditi</th>
							<th style="width:100px;border: 1px solid #000;">Jumlah</th>
							<th style="width:100px;border: 1px solid #000;">Satuan</th>
						</tr>';
							$no = 1;
							$query2=mysqli_query($conn, "SELECT * FROM tb_pengajuanbantu,tb_komoditi WHERE tb_pengajuanbantu.id_komoditi=tb_komoditi.id_komoditi AND id_pengajuan='" . $list['id_pengajuan'] . "'");
								$totalQuery=0;
							while($data=mysqli_fetch_array($query2)){
							$tbl2 = $tbl2.'<tr style="text-align:center;">
							<td style="width:10%;"></td>
							<td style="border: 1px solid #000;">'.$no++.'</td>
							<td style="border: 1px solid #000;">'.$data['nama_komoditi'].'</td>
							<td style="border: 1px solid #000;">'.$data['nama'].'</td>
							<td style="border: 1px solid #000;">'.$data['jumlah_pengajuan'].'</td>
							<td style="border: 1px solid #000;">'.$data['satuan_pengajuan'].'</td>
							</tr>';
							}
						$tbl2 = $tbl2.'
						<tr nobr="true">
						<td style="width:10%;line-height: 2;"></td>
						<td style="width:25%;line-height: 2;">2. Ketersediaan Laboratorium </td>
						</tr>';
						$tbl2 = $tbl2.'
						<tr style="text-align:center;">
							<td style="width:10%;background-color: #fff;"></td>
							<th style="width:200px;border: 1px solid #000;">SDM</th>
							<th style="width:200px;border: 1px solid #000;">Peralatan</th>
							<th style="width:200px;border: 1px solid #000;">Bahan Kimia</th>
						</tr>';
						$no = 1;
						$query2=mysqli_query($conn, "SELECT * FROM tb_pengujian WHERE id_pengujian='" . $list['id_pengujian'] . "'");
							$totalQuery=0;
						while($data=mysqli_fetch_array($query2)){
							if($data['sdm']=='1'){ $sdm = 'v'; }else{ $sdm = '-'; }
							if($data['peralatan']=='1'){ $peralatan = 'v'; }else{ $peralatan = '-'; }
							if($data['bahan_kimia']=='1'){ $bahan_kimia = 'v'; }else{ $bahan_kimia = '-'; }
							$tbl2 = $tbl2.'<tr style="text-align:center;">
							<td style="width:10%;"></td>
							<td style="border: 1px solid #000;">'.$sdm.'</td>
							<td style="border: 1px solid #000;">'.$peralatan.'</td>
							<td style="border: 1px solid #000;">'.$bahan_kimia.'</td>
							</tr>';
						}
						$keterangan ='SK Sudah Diambil';
						$day    =date('d', strtotime('+1 year', strtotime( $list['tanggal_selesai'] )));
						$month    =date('m', strtotime('+1 year', strtotime( $list['tanggal_selesai'] )));
						$year    =date('Y', strtotime('+1 year', strtotime( $list['tanggal_selesai'] )));
						
						$days    =(int)((mktime (0,0,0,$month,$day,$year) - time())/86400);
						$waktu = "<b>$days</b> hari";
						$tbl2 = $tbl2.'
						<tr nobr="true">
						<td style="width:10%;line-height: 2;"></td>
						<td style="width:25%;line-height: 2;">3. Tanggal Terima </td>
						<td style="width:3%;line-height: 2;">: </td>
						<td style="width:65%;line-height: 2;" align="justify">'.tglIndonesia(date('d F Y', strtotime($list['tanggal_pengajuan']))).'</td>
						</tr>

						<tr nobr="true">
						<td style="width:10%;line-height: 2;"></td>
						<td style="width:25%;line-height: 2;">4. Tanggal Selesai </td>
						<td style="width:3%;line-height: 2;">: </td>
						<td style="width:65%;line-height: 2;" align="justify">'.tglIndonesia(date('d F Y', strtotime($list['tanggal_selesai']))).'</td>
						</tr>

						<tr nobr="true">
						<td style="width:10%;line-height: 2;"></td>
						<td style="width:25%;line-height: 2;">5. Informasi Lain-Lain </td>
						<td style="width:3%;line-height: 2;">: </td>
						<td style="width:65%;line-height: 2;" align="justify">'.$list['informasi'].'</td>
						</tr>

						<tr nobr="true">
						<td style="width:10%;line-height: 2;"></td>
						<td style="width:25%;line-height: 2;">6. Permintaan Pengujian </td>
						<td style="width:3%;line-height: 2;">: </td>
						<td style="width:65%;line-height: 2;" align="justify">'.$list['status'].'</td>
						</tr>

						<tr nobr="true">
						<td style="width:10%;line-height: 2;"></td>
						<td style="width:25%;line-height: 2;">7. Alasan Jika Di Tolak </td>
						<td style="width:3%;line-height: 2;">: </td>
						<td style="width:65%;line-height: 2;" align="justify">'.$list['alasan'].'</td>
						</tr>

						<tr nobr="true">
						<td style="width:10%;line-height: 2;"></td>
						<td style="width:25%;line-height: 2;">7. Masa Berlaku </td>
						<td style="width:3%;line-height: 2;">: </td>
						<td style="width:40%;line-height: 2;" align="justify">Berlaku '.$waktu.' dari tanggal dibuat, 
						silahkan ajukan kembali ketika masa berlaku telah habis</td>
						</tr>
		</table>
		';
		$query = mysqli_query($conn, "SELECT * FROM tb_pengaturan WHERE status = 'manajer'");
		$row = mysqli_fetch_array($query);
				$tbl2 = $tbl2.'<br><br><table border="0" cellpadding="2" cellspacing="0">
				<tr style="text-align:center;">
				<th>Customer</th>
				<th>Manajer Teknik</th>
				<th>Petugas Penerima</th>
				</tr>
				<br>
				<br>
				<br>
				<br>
				<tr style="text-align:center;">
				<th> '.$list['nama_lengkap'].'</th>
				<th> '.$row['nama_pengaturan'].'</th>
				<th> '.$list['nama_pegawai'].'</th>
				</tr>
					</table>';
					
// $tbl2 = $tbl2.'</table>';
$pdf->writeHTML($tbl2, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

$pdf->AddPage('P', 'A4');
// $pdf= new TCPDF('L','mm',array(350,260));

$tbl2 = '
		<table border="0" style="text-align:left;">
		<div style="text-align: center;"><img src="assets/images/kop-2.png" style="width: 600px; height: 110px;"/></div>
		<tr>
			<td style="text-align:center;width:100%;border-top: 5px solid black;" ></td>
		</tr>
		<tr>
			<td style="text-align:center;width:100%;"><font size="14em"><b><u>SETRIFIKAT KALIBRASI</u></b></font></td>
			<td style="text-align:center;width:100%;"><font size="14em"><b><u></u></b></font></td>
		</tr>
		<tr>
			<td style="text-align:center;width:100%;"><font size="12em"><b>CALIBRATION CERTIFICATE</b></font></td>
			<td style="text-align:center;width:100%;"><font size="12em"><b><u></u></b></font></td>
		</tr>
		<tr>
			<td style="text-align:center;width:100%;"><font size="10em">Nomor: '.$list['id_pengujian'].'</font></td>
		</tr>
	</table>
	<br><br>
	<table border="1" style="text-align:left;">
			<tr>
				<td style="text-align:left;width:30%;"></td>
				<td style="text-align:left;width:30%;"><font size="11em"></font></td>
				<td style="text-align:left;width:20%;">No. Order</td>
				<td style="text-align:left;width:10%;">: A.012</td>
			</tr>
			<tr>
				<td style="text-align:left;width:30%;"></td>
				<td style="text-align:left;width:30%;"><font size="11em"></font></td>
				<td style="text-align:left;width:20%;">Halaman</td>
				<td style="text-align:left;width:10%;">: 1 dari 2</td>
			</tr>
			<tr>
				<td style="text-align:left;width:30%;"></td>
				<td style="text-align:left;width:30%;"><font size="11em"></font></td>
				<td style="text-align:left;width:20%;">Page</td>
				<td style="text-align:left;width:10%;">: 1 Of 2</td>
			</tr>

			<tr nobr="true">
			<td style="width:90%;"><u>IDENTITAS ALAT</u></td>
			</tr>
			<tr nobr="true">
			<td style="width:90%;">Instrument Identification</td>
			</tr>		
			<br>';

        $tbl2 = $tbl2.'
		</table><br><br><br>
		';

        $tbl2 = $tbl2.'
		<table border="0" style="text-align:left;">
		<tr nobr="true">
		<td style="width:10%;"></td>
		<td style="width:25%;"><u>NAMA</u></td>
		<td style="width:3%;">: </td>
		<td style="width:65%;" align="justify">'.$list['nama_alat'].'</td>
		</tr>
						
		<tr nobr="true">
		<td style="width:10%;"></td>
		<td style="width:25%;">Name </td>
		<td style="width:3%;"></td>
		<td style="width:65%;" align="justify"></td>
		</tr>
		<br>
		<tr nobr="true">
		<td style="width:10%;"></td>
		<td style="width:25%;"><u>MERK PABRIK</u></td>
		<td style="width:3%;">: </td>
		<td style="width:65%;" align="justify">'.$list['merk_alat'].'</td>
		</tr>

		<tr nobr="true">
		<td style="width:10%;"></td>
		<td style="width:25%;">Manufacture </td>
		<td style="width:3%;"></td>
		<td style="width:65%;" align="justify"></td>
		</tr>
		<br>
		<tr nobr="true">
		<td style="width:10%;"></td>
		<td style="width:25%;"><u>TYPE/NOMOR SERI</u></td>
		<td style="width:3%;">: </td>
		<td style="width:65%;" align="justify">'.$list['nomor_seri'].'</td>
		</tr>

		<tr nobr="true">
		<td style="width:10%;"></td>
		<td style="width:25%;">Type/Serial Number </td>
		<td style="width:3%;"></td>
		<td style="width:65%;" align="justify"></td>
		</tr>
		<br>
		<tr nobr="true">
		<td style="width:10%;"></td>
		<td style="width:25%;"><u>KAPASITAS</u></td>
		<td style="width:3%;">: </td>
		<td style="width:65%;" align="justify">'.$list['kapasitas'].'</td>
		</tr>

		<tr nobr="true">
		<td style="width:10%;"></td>
		<td style="width:25%;">Capacity </td>
		<td style="width:3%;"></td>
		<td style="width:65%;" align="justify"></td>
		</tr>
		<br>
		<tr nobr="true">
		<td style="width:10%;"></td>
		<td style="width:25%;"><u>IDENTITAS</u></td>
		<td style="width:3%;">: </td>
		<td style="width:65%;" align="justify">'.$list['identitas'].'</td>
		</tr>

		<tr nobr="true">
		<td style="width:10%;"></td>
		<td style="width:25%;">Identity </td>
		<td style="width:3%;"></td>
		<td style="width:65%;" align="justify"></td>
		</tr>
		<br>
		</table>
		';

        $tbl2 = $tbl2.'
		<table border="0" style="text-align:left;">
		<br>
		<br>
		<tr nobr="true">
		<td style="width:100%;"><u>IDENTITAS PEMILIK</u></td>
		</tr>
		<tr nobr="true">
		<td style="width:100%;">Owner Identification</td>
		</tr>	
		<br>
		<tr nobr="true">
		<td style="width:10%;"></td>
		<td style="width:25%;"><u>NAMA</u></td>
		<td style="width:3%;">: </td>
		<td style="width:65%;" align="justify">'.$list['nama_lengkap'].'</td>
		</tr>

		<tr nobr="true">
		<td style="width:10%;"></td>
		<td style="width:25%;">Designation </td>
		<td style="width:3%;"></td>
		<td style="width:65%;" align="justify"></td>
		</tr>
		<br>
		<tr nobr="true">
		<td style="width:10%;"></td>
		<td style="width:25%;"><u>ALAMAT</u></td>
		<td style="width:3%;">: </td>
		<td style="width:65%;" align="justify">'.$list['alamat'].'</td>
		</tr>

		<tr nobr="true">
		<td style="width:10%;"></td>
		<td style="width:25%;">Address </td>
		<td style="width:3%;"></td>
		<td style="width:65%;" align="justify"></td>
		</tr>
		<br>
		</table>
		';

		$tbl2 = $tbl2.'<br><br><table border="0" cellpadding="2" cellspacing="0">
		<tr nobr="true">
			<td style="width:40%;"></td>
			<td style="width:15%;" align="left">dikeluarkan di</td>
			<td style="width:3%;" align="left">: </td>
			<td style="width:42%;" align="left">Balai Pengujian dan Setrifikasi Mutu Barang</td>
		</tr>

		<tr nobr="true">
			<td style="width:40%;"></td>
			<td style="width:15%;" align="left">pada tanggal</td>
			<td style="width:3%;" align="left">: </td>
			<td style="width:42%;" align="left">'.tglIndonesia(date('d F Y', strtotime($list['tanggal_pengajuan']))).'</td>
		</tr>
		<tr nobr="true">
			<td style="width:40%;"></td>
			<td style="width:15%;" align="left">Date Of Issue</td>
			<td style="width:3%;" align="left"> </td>
			<td style="width:42%;" align="left"></td>
		</tr>';
		$tbl2 = $tbl2.'</table>';

		$query = mysqli_query($conn, "SELECT * FROM tb_pengaturan WHERE status = 'manajer'");
		$row = mysqli_fetch_array($query);

		$query1 = mysqli_query($conn, "SELECT * FROM tb_pengaturan WHERE status = 'kepala'");
		$row1 = mysqli_fetch_array($query1);
				$tbl2 = $tbl2.'<br><br><table border="0" cellpadding="2" cellspacing="0">
				<tr style="text-align:center;">
				<th>Mengetahui<br>Kepala Balai Pengujian dan Setrifikasi Mutu Barang<br>Provinsi Kalimantan Selatan,</th>
				<th>Manajer Teknik</th>
				</tr>
				<br>
				<br>
				<br>
				<br>
				<tr style="text-align:center;">
				<th> <u>'.$row1['nama_pengaturan'].'</u><br>'.$row1['nip_pengaturan'].'</th>
				<th> <u>'.$row['nama_pengaturan'].'</u><br>'.$row['nip_pengaturan'].'</th>
				</tr>
		</table>';
	
					
$pdf->writeHTML($tbl2, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();


//Close and output PDF document
ob_end_clean();
$pdf->Output('CETAK PENGUJIAN '.$_GET['id'].'.pdf', 'I');
}

//============================================================+
// END OF FILE
//============================================================+

?>
