<?php
include '../../koneksi.php';
$id = $_POST['id'];
$sql = mysqli_query($conn, "SELECT * FROM tb_berita WHERE id_berita = '$id'");
$data = mysqli_fetch_array($sql);
$gambar = $data['gambar'];
unlink('../../assets/images/berita/'.$gambar);

$query = mysqli_query($conn, "DELETE FROM tb_berita WHERE id_berita = '$id'");
if($query) {
	echo json_encode(['message'=>'successfully deleted data', 'status'=>'1']);
}else {
	echo json_encode(['message'=>'failed to delete data', 'status'=>'0']);
}
?>