<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('user/_partials/head.php') ?>
</head>

<body>
	<?php $this->load->view('user/_partials/navbar.php') ?>

	<section id="hero-half-detail" class="d-flex align-items-center text-center" style="background-image: url(<?= base_url('img/produk/produk10.jpeg'); ?>)">
		<div class="container" data-aos="zoom-out" data-aos-delay="100">
			<h1>DETAIL PRODUK
			</h1>
		</div>
	</section>

	<section id="portfolio-details" class="portfolio-details">
		<div class="container">

			<div class="row gy-4">

				<div class="col-lg-7">
					<div class="portfolio-details-slider swiper-container">
						<div class="swiper-wrapper align-items-center" data-aos="zoom-out" data-aos-delay="200">

							<div class="swiper-slide">
								<img src="<?= base_url('img/Produk/' . $produk['foto']) ?>" alt="">
							</div>

						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>

				<div class="col-lg-5">
					<div class="portfolio-info">
						<h3><?= $produk['nama'] ?> <?= $produk['kapasitas'] ?> Gram</h3>
						<h6>Harga:</h6>
						<h3>Rp. <?= number_format($produk['harga'], 2) ?></h3>
						<!-- <a href="<?= base_url('Pesan') ?>" class="btn btn-pesan">Pesan Sekarang</a> -->
						<a href="https://api.whatsapp.com/send?phone=<?= $profil['wa'] ?>&text=Selamat Pagi%21%20Saya%20berminat%20membeli%20<?= $produk['nama'] ?>%20kapasitas%20<?= $produk['kapasitas']?>%20Gram" class="btn btn-pesan">Pesan lewat WA</a>

						<a href="mailto:<?= $profil['email'] ?>?Subject=Mesin%20Roasting&Body=Selamat%20Pagi%21%20Saya%20ingin%20membeli%20<?= $produk['nama']?>%20kapasitas%20<?= $produk['kapasitas']?>%20Gram" class="btn btn-pesan-email">Pesan lewat email</a>
					</div>

				</div>

			</div>

		</div>
	</section>

	<!-- <section id="portfolio" class="portfolio">
		<div class="container" data-aos="fade-up">
			<span>Foto <?= $produk['nama'] ?></span>

			<div class="row gy-4 portfolio-container mt-2" data-aos="fade-up" data-aos-delay="200">
				<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 portfolio-item">
					<div class="portfolio-wrap">
						<img src="http://riverprawn.flow-byte.com/uploads/Rumah/WhatsApp_Image_2021-04-04_at_21_58_371.jpeg" class="img-galeri" alt="">
						<div class="portfolio-info">
							<div class="portfolio-links">
								<a href="http://riverprawn.flow-byte.com/uploads/Rumah/WhatsApp_Image_2021-04-04_at_21_58_371.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-zoom-in"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 portfolio-item">
					<div class="portfolio-wrap">
						<img src="http://riverprawn.flow-byte.com/uploads/Rumah/WhatsApp_Image_2021-02-14_at_19_45_30.jpeg"
							class="img-galeri" alt="">
						<div class="portfolio-info">
							<div class="portfolio-links">
								<a href="http://riverprawn.flow-byte.com/uploads/Rumah/WhatsApp_Image_2021-02-14_at_19_45_30.jpeg"
									data-gallery="portfolioGallery" class="portfokio-lightbox"><i
										class="bi bi-zoom-in"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 portfolio-item">
					<div class="portfolio-wrap">
						<img src="http://riverprawn.flow-byte.com/uploads/Rumah/WhatsApp_Image_2021-02-14_at_19_45_351.jpeg"
							class="img-galeri" alt="">
						<div class="portfolio-info">
							<div class="portfolio-links">
								<a href="http://riverprawn.flow-byte.com/uploads/Rumah/WhatsApp_Image_2021-02-14_at_19_45_351.jpeg"
									data-gallery="portfolioGallery" class="portfokio-lightbox"><i
										class="bi bi-zoom-in"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<section id="deskripsi">

		<div class="container">
			<div class="col-lg-12 mb-5">

				<div class="card">
					<div class="card-header p-2">
						<ul class="nav nav-pills">
							<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Informasi Produk</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Foto Produk</a></li>
						</ul>
					</div><!-- /.card-header -->
					<div class="card-body">
						<div class="tab-content">
							<div class="active tab-pane" id="activity">
								<!-- Post -->
								<di v class="post">
									<!-- /.user-block -->
									<p>
									<h6>Deskripsi:</h6>
									<?= $produk['deskripsi'] ?>
									</p>
									<p>
									<h6>Spesifikasi:</h6>
									<?= $produk['spesifikasi'] ?>
									</p>

							</div>
							<!-- /.post -->



							<div class="tab-pane" id="timeline">

								<div class="timeline timeline-inverse">

									<div>
										<div class="timeline-item">
											<div class="timeline-body">
												<div class="filter-container p-0 row">
													<div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
														<a href="<?= base_url('img/Produk/' . $produk['foto']) ?>" data-toggle="lightbox" data-title="sample 1 - white">
															<img src="<?= base_url('img/Produk/' . $produk['foto']) ?>" class="img-fluid mb-2" alt="white sample" />
														</a>
														<?php foreach ($galeri as $data) { ?>
															<a href="<?= base_url('img/Produk/' . $data['foto']) ?>" data-toggle="lightbox" data-title="sample 1 - white">
																<img src="<?= base_url('img/Produk/' . $data['foto']) ?>" class="img-fluid mb-2" alt="white sample" />
															</a>
														<?php } ?>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div> <!-- /.card -->
			</div>
	</section>

	<?php $this->load->view('user/_partials/footer.php') ?>



	<?php $this->load->view('user/_partials/js.php') ?>
</body>

</html>