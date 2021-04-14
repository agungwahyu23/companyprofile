<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('user/_partials/head.php') ?>
</head>

<body>
	<?php $this->load->view('user/_partials/navbar.php') ?>

	<section id="hero-half-detail" class="d-flex align-items-center text-center" style="background-image: url(<?= base_url('img/Produk/produk10.jpeg'); ?>)">
		<div class="container" data-aos="zoom-out" data-aos-delay="100">
			<h1>FORM PEMESANAN</h1>
		</div>
	</section>

	<main id="main">

		<section id="checkout" class="checkout">

			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="card shadow-lg border-0 rounded-lg mt-15">
							<div class="card-header justify-content-center">
								<h3> Data Pemesanan </h3>
							</div>
							<div class="card-body">
								<div class="col">

									<form action="" method="post" enctype="multipart/form-data">

										<div class="row">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"><label class="small mb-1" for="nama_lengkap">Nama Lengkap</label>
												<input type="text" class="form-control mb-3" id="nama_lengkap" name="nama" placeholder="Nama Lengkap" required>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"><label class="small mb-1" for="email">Email</label>
												<input type="email" class="form-control mb-3" id="email" name="email" placeholder="Email" required>
											</div>
										</div>
										<div class="row">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"><label class="small mb-1" for="nomor_telepon">Nomor Telepon</label>
												<input type="text" class="form-control mb-3" id="nomor_telepon" name="nohp" onkeypress="return event.charCode >= 48 && event.charCode <=57" placeholder="Nomor Telepon" required>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"><label class="small mb-1" for="nomor_telepon">Alamat lengkap</label>
												<input type="text" class="form-control mb-3" id="nomor_telepon" name="alamat" placeholder="Alamat lengkap" required>
												<input type="hidden" class="form-control mb-3" id="nomor_telepon" name="produk" placeholder="Alamat lengkap" value="<?= $produk['kapasitas'] ?> Kg" required>
											</div>

										</div>


										<div class="d-flex justify-content-end">
											<button type="submit" class="btn btn-success" type="button" id="start">
												Checkout
											</button>

										</div>

									</form>

								</div>
							</div>
						</div>
					</div>

				</div>

		</section>

	</main>
	<?php $this->load->view('user/_partials/footer.php') ?>



	<?php $this->load->view('user/_partials/js.php') ?>

</body>

</html>