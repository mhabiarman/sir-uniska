<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'menu/head.php'; ?>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<body>
	<div class="container pt-5 pb-4">
		<?php include 'menu/header.php'; ?>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<?php include 'menu/nav.php'; ?>
	</nav>

	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/dist-2/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<h1 class="mb-3 bread">Tentang</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo $baseurl;?>">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Tentang <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-12 d-flex">
					<div class="row justify-content-start py-5">
						<div class="col-md-12 heading-section ftco-animate">
							<p align="justify" style="color:black;"><h4>Balai Standardisasi dan Pelayanan Jasa Industri (BSPJI) Banjarbaru merupakan Unit Layanan Teknis, di bawah naungan Eselon 1 Badan Standardisasi dan Kebijakan Jasa Industri (BSKJI) Kementerian Perindustrian. Yang memiliki tugas pokok dan fungsi melaksanakan standardisasi industri, optimalisasi pemanfaatan teknologi industri, industri hijau, dan pelayanan jasa industri berlandaskan potensi daerah.</h4></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<?php include 'menu/footer.php'; ?>
	</footer>
	<?php include 'menu/loader.php'; ?>
	<?php include 'menu/script.php'; ?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

</body>
</html>