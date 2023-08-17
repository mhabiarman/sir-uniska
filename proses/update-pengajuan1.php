<?php
include '../koneksi.php';

$id = $_POST['id'];
$query = mysqli_query($conn, "UPDATE tb_pengajuan SET pengambilan = '" . ucwords($_POST['pengambilan']) . "' WHERE id_pengajuan = '$id'");
if($query) {	
	echo '<script language="javascript">
	alert ("Data Dikirim");
	location.href="javascript:history.go(-1)";
	</script>';
	exit();
}else {
	echo '<script language="javascript">
	alert ("Data Gagal Dikirim");
	location.href="javascript:history.go(-1)";
	</script>';
	exit();
}
?>