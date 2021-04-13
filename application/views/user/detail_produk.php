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
								<img src="<?= base_url() ?>img/Produk/produk1.jpeg" alt="">
							</div>

						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>

				<div class="col-lg-5">
					<div class="portfolio-info">
						<h3><?= $produk['nama']?> <?= $produk['kapasitas']?> Gram</h3>
						<h6>Harga:</h6>
                        <h3>Rp. <?= number_format($produk['harga'], 2)?></h3>
                        <a href="#" class="btn btn-pesan">Pesan Sekarang</a>
					</div>
					
				</div>

			</div>

		</div>
	</section>

	<section id="portfolio" class="portfolio">
		<div class="container" data-aos="fade-up">
			<span>Foto Mesin Roasting Kopi 1000 Gram</span>

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

							<!-- <h4>App 1</h4>

                    <p>App</p> -->

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

							<!-- <h4>App 1</h4>

                    <p>App</p> -->

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



	</section>

	<section id="deskripsi"> 

    <div class="container">
    	<div class="col-lg-12 mb-5">

    		<div class="card">
    			<div class="card-header p-2">
    				<ul class="nav nav-pills">
    					<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Informasi Produk</a>
    					</li>
    					<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Deskripsi</a></li>
    				</ul>
    			</div><!-- /.card-header -->
    			<div class="card-body">
    				<div class="tab-content">
    					<div class="active tab-pane" id="activity">
    						<!-- Post -->
    						<di v class="post">
    							<!-- /.user-block -->
    							<p>
    								Lorem ipsum represents a long-held tradition for designers,
    								typographers and the like. Some people hate it and argue for
    								its demise, but others ignore the hate as they create awesome
    								tools to help create filler text for everyone from bacon lovers
    								to Charlie Sheen fans.
    							</p>
    					</div>
    					<!-- /.post -->


    					
    					<div class="tab-pane" id="timeline">
    						
    						<div class="timeline timeline-inverse">
    							
    							<div>
    								<div class="timeline-item">
    									<div class="timeline-body">
    										Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
    										weebly ning heekya handango imeem plugg dopplr jibjab, movity
    										jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
    										quora plaxo ideeli hulu weebly balihoo...
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