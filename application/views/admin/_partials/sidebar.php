
	<div id="layoutSidenav_nav">
		<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
			<div class="sb-sidenav-menu">
				<div class="nav">
					<div class="sb-sidenav-menu-heading">Dashboard</div>
					<a class="nav-link" href="<?= base_url('admin/Dashboard') ?>">
						<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
						Dashboard
					</a>
					<div class="sb-sidenav-menu-heading">Data</div>
					<a class="nav-link" href="<?= base_url('admin/Pengguna') ?>">
						<div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
						Data Admin
					</a>
					<a class="nav-link" href="<?= base_url('admin/Produk') ?>">
						<div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
						Data Produk
					</a>
					<a class="nav-link" href="<?= base_url('admin/Kategori') ?>">
						<div class="sb-nav-link-icon"><i class="fas fa-align-justify"></i></div>
						Data Kategori
					</a>
					<!-- <a class="nav-link" href="<?= base_url('admin/Rekening') ?>">
						<div class="sb-nav-link-icon"><i class="fas fa-credit-card"></i></div>
						Data Rekening
					</a> -->
					<div class="sb-sidenav-menu-heading">Data Masuk</div>
					<a class="nav-link" href="<?= base_url('admin/Pemesan') ?>">
						<div class="sb-nav-link-icon"><i class="fa fa-store"></i></div>
						Pemesanan
					</a>
					<a class="nav-link" href="<?= base_url('admin/Kritik') ?>">
						<div class="sb-nav-link-icon"><i class="far fa-envelope"></i></div>
						Kritik Pengunjung
					</a>

					<div class="sb-sidenav-menu-heading">Setting Akun</div>
					<a class="nav-link" href="<?= base_url('admin/Profil') ?>">
						<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
						Profil Perusahaan
					</a>
				</div>
			</div>
			<div class="sb-sidenav-footer">
				<div class="">Masuk Sebagai : <?= $this->session->userdata('nama');?></div>
				Start Bootstrap
			</div>
		</nav>
	</div>