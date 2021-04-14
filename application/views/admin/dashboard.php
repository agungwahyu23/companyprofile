<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="sb-nav-fixed">
	<?php $this->load->view("admin/_partials/topbar.php") ?>

	<div id="layoutSidenav">
		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid">
					<h1 class="mt-4">Selamat datang, <?= $this->session->userdata('nama');?> </h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item active"><h3>Anda login sebagai <?= $this->session->userdata('status');?></h3></li>
					</ol>
					<div class="row">
						<div class="col-lg-12 align-item-center text-center">
							<img src="<?= base_url('img/logo.png') ?>" style="width:25%" alt="">
						</div>
						<!-- <div class="col-xl-3 col-md-6">
							<div class="card bg-primary text-white mb-4">
								<div class="card-body">Produk Tersedia</div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="#">Lihat</a>
									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-md-6">
							<div class="card bg-warning text-white mb-4">
								<div class="card-body">Kritik Dan Saran</div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="#">Lihat</a>
									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
								</div>
							</div>
						</div>
						<!-- <div class="col-xl-3 col-md-6">
							<div class="card bg-success text-white mb-4">
								<div class="card-body">Success Card</div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="#">View Details</a>
									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="card bg-danger text-white mb-4">
								<div class="card-body">Danger Card</div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="#">View Details</a>
									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</main>
			
            <?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
	</div>

    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>