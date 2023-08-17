<?php
include '../koneksi.php';

$id = $_POST['id'];

$query = mysqli_query($conn, "SELECT * FROM tb_pemohon WHERE id_pemohon = '$id'");
$row = mysqli_fetch_array($query);

$username = $_POST['username'];
$oldPassword = $_POST['oldPassword'];
$newPassword = $_POST['newPassword'];
$confirmPassword = $_POST['confirmPassword'];
$dbPassword = $row['password'];

if($oldPassword != $dbPassword) {
	echo json_encode(['message'=>'failed to save data', 'status'=>'2']);
}else {
	if($newPassword != $confirmPassword) {
		echo json_encode(['message'=>'failed to save data', 'status'=>'3']);
	}else {
		$query = mysqli_query($conn, "UPDATE tb_pemohon SET username = '$username', password = '$confirmPassword', modified = NOW() WHERE id_pemohon = '$id'");
		if($query) {	
			echo json_encode(['message'=>'successfully saved data', 'status'=>'1']);
		}else {
			$string = mysqli_error($conn);
			$pieces = explode(' ', $string);
			$last_word = array_pop($pieces);
			$remove = str_replace("'", "", $last_word);
			echo json_encode(['message'=>mysqli_error($conn), 'status'=>'0', 'type'=>$remove]);
		}
	}
}
?>