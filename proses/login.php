<?php
include '../koneksi.php';

$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM tb_pemohon WHERE BINARY username = '$username' AND BINARY password = '$password'");
$cek = mysqli_num_rows($query);

if($cek > 0) {
	$row = mysqli_fetch_array($query);	
	$_SESSION['username'] = $row['username'];
	$_SESSION['userid'] = $row['id_pemohon'];
	$_SESSION['nama'] = $row['nama_lengkap'];
	echo json_encode(['message'=>'successfully logged in as pemohon', 'status'=>'1', 'nama'=>$row['nama_lengkap'], 'username'=>$row['username']]);
}else {
	echo json_encode(['message'=>'login failed, account not found', 'status'=>'0']);
}
?>