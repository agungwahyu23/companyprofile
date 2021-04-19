<!-- <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
	<div class="container d-flex">
		<div class="contact-info mr-auto">
		<i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
		<i class="icofont-phone"></i> +1 5589 55488 55
		</div>
		<div class="social-links">
		<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
		<a href="#" class="facebook"><i class="icofont-facebook"></i></a>
		<a href="#" class="instagram"><i class="icofont-instagram"></i></a>
		<a href="#" class="skype"><i class="icofont-skype"></i></a>
		<a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
		</div>
	</div>
</div> -->

<header id="header" class="fixed-top">
	<div class="container d-flex align-items-center">

		<h1 class="logo mr-auto"><a href="<?= base_url('Beranda') ?>"><img src="<?= base_url('img/logo.png') ?>" alt=""></a></h1>
		<!-- Uncomment below if you prefer to use an image logo -->
		<!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

		<nav class="nav-menu d-none d-lg-block">
			<ul>
				<li><a class="nav-link active" href="<?= base_url('Beranda') ?>">Beranda</a></li>
				<!-- <li><a class="nav-link active" href="<?= base_url('Produk') ?>">Produk</a></li> -->
				<li class="drop-down"><a href="#">Produk</a>
					<ul>
						<li><a href="<?php echo base_url('Produk') ?>">Semua Produk</a></li>
						<?php foreach ($kategori as $data) { ?>
							<li><a href="<?php echo base_url('Produk/index/' . $data['idKategori']) ?>"><?= $data['nama_kategori'] ?></a></li>
						<?php } ?>
						<!-- <li><a href="#">Deep Drop Down</a></li>
						<li><a href="#">Drop Down 2</a></li>
						<li><a href="#">Drop Down 3</a></li>
						<li><a href="#">Drop Down 4</a></li> -->
					</ul>
				</li>
				<li><a class="nav-link active" href="<?= base_url('TentangKami') ?>">Tentang Kami</a></li>
				<li><a class="nav-link active" href="<?= base_url('KontakKami') ?>">Kontak Kami</a></li>
			</ul>
		</nav><!-- .nav-menu -->

	</div>
</header><!-- End Header -->