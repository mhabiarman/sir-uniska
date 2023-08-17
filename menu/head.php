<base href="<?php echo $baseurl;?>">
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<meta name="author" content="BSPJI Banjabaru">
<meta name="description" content="APLIKASI PENGAJUAN PERMOHONAN STANDARISASI MAKANAN PADA
BALAI STANDARISASI DAN PELAYANAN JASA INDUSTRI BANJARBARU">
<meta name="keywords" content="BSPJI Banjabaru, jafar, rizkikarianata">
<title>BSPJI Banjabaru</title>
<link rel="shortcut icon" href="assets/images/favicon-2.png">
<link href="assets/dist-2/fonts.googleapis.com/css4760.css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">
<link href="assets/dist-2/fonts.googleapis.com/css6f1c.css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="assets/dist-2/stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/dist-2/css/animate.css">
<link rel="stylesheet" href="assets/dist-2/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/dist-2/css/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/dist-2/css/magnific-popup.css">
<link rel="stylesheet" href="assets/dist-2/css/ionicons.min.css">
<link rel="stylesheet" href="assets/dist-2/css/flaticon.css">
<link rel="stylesheet" href="assets/dist-2/css/icomoon.css">
<link rel="stylesheet" href="assets/plugins/alert/dist/sweetalert2.min.css">
<link rel="stylesheet" href="assets/dist-2/css/style.css">
<?php
if(isset($_SESSION['userid'])) {
	$userid = $_SESSION['userid'];
	$syntax = mysqli_query($conn, "SELECT * FROM tb_pemohon WHERE id_pemohon = '$userid'");
	$online = mysqli_fetch_array($syntax);
}
?>