<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('user/_partials/head.php') ?>
</head>
<body>
    <?php $this->load->view('user/_partials/navbar.php') ?>

    <section id="hero-half-detail" class="d-flex align-items-center text-center" style="background-image: url(<?= base_url('img/produk/produk10.jpeg'); ?>)">
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
    							Data Pemesanan
    						</div>
    						<div class="card-body">
    							<div class="col">

    								<form action="<?= base_url('Checkout/Post') ?>" method="post"
    									enctype="multipart/form-data">

    									<h3 class="sub-title">Data Penerima</h3>
    									<div class="row">
    										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"><label class="small mb-1"
    												for="nama_lengkap">Nama Lengkap</label>
    											<input type="text" class="form-control mb-3" id="nama_lengkap" name="nama_lengkap"
    												placeholder="Nama Lengkap" required>
    										</div>
    										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"><label class="small mb-1"
    												for="email">Email</label>
    											<input type="email" class="form-control mb-3" id="email" name="email" placeholder="Email" required>
    										</div>
    									</div>
    									<div class="row">
    										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12"><label
    												class="small mb-1" for="nomor_telepon">Nomor Telepon</label>
    											<input type="text" class="form-control mb-3" id="nomor_telepon"
    												name="nomor_telepon" placeholder="Nomor Telepon" required>
    										</div>
    										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12"><label
    												class="small mb-1" for="alamat">Alamat</label>
    											<input type="text" class="form-control mb-3" id="alamat" name="alamat"
    												placeholder="Alamat" required>
    										</div>
    										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12"><label
    												class="small mb-1" for="alamat">Alamat</label>
    											<input type="text" class="form-control mb-3" id="alamat" name="alamat"
    												placeholder="Alamat" required>
    										</div>
    									</div>
    									

    									<div class="d-flex justify-content-end">
    										<button type="submit" class="btn btn-primary" type="button" id="start">
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