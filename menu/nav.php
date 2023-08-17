<div class="container-fluid">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="fa fa-bars"></span> Menu
	</button>
	<div class="collapse navbar-collapse" id="ftco-nav">
		<ul class="navbar-nav m-auto">
			<li class="nav-item <?php if($first_part == "index" || $first_part == "") { echo "active"; } ?>"><a href="index" class="nav-link">Beranda</a></li>
			<li class="nav-item <?php if($first_part == "tentang") { echo "active"; } ?>"><a href="tentang" class="nav-link">Tentang</a></li>
			<li class="nav-item <?php if($first_part == "sir") { echo "active"; } ?>"><a href="sir" class="nav-link">Pembuatan Surat Penilaian Barang</a></li>
			<li class="nav-item <?php if($first_part == "berita") { echo "active"; } ?>"><a href="berita" class="nav-link">Berita</a></li>
			<li class="nav-item <?php if($first_part == "kontak") { echo "active"; } ?>"><a href="kontak" class="nav-link">Kontak</a></li>
			<?php if(isset($_SESSION['userid'])) { ?>
				<li class="nav-item <?php if($first_part == "akun") { echo "active"; } ?>"><a href="akun" class="nav-link">Akun</a></li>
				<li class="nav-item"><a href="" id="user-logout" class="nav-link">Keluar</a></li>
			<?php }else { ?>
				<li class="nav-item <?php if($first_part == "masuk") { echo "active"; } ?>"><a href="masuk" class="nav-link">Masuk</a></li>
			<?php } ?>
		</ul>
	</div>
</div>