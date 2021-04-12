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
						<h3>Mesin Roasting Kapasitas 1,5Kg</h3>
						<h6>Harga:</h6>
                        <h3>Rp. 19.000.000</h3>
                        <a href="#" class="btn btn-pesan">Pesan Sekarang</a>
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
    					<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a>
    					</li>
    					<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
    					<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
    				</ul>
    			</div><!-- /.card-header -->
    			<div class="card-body">
    				<div class="tab-content">
    					<div class="active tab-pane" id="activity">
    						<!-- Post -->
    						<di v class="post">
    							<div class="user-block">
    								<img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg"
    									alt="user image">
    								<span class="username">
    									<a href="#">Jonathan Burke Jr.</a>
    									<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
    								</span>
    								<span class="description">Shared publicly - 7:30 PM today</span>
    							</div>
    							<!-- /.user-block -->
    							<p>
    								Lorem ipsum represents a long-held tradition for designers,
    								typographers and the like. Some people hate it and argue for
    								its demise, but others ignore the hate as they create awesome
    								tools to help create filler text for everyone from bacon lovers
    								to Charlie Sheen fans.
    							</p>

    							<p>
    								<a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i>
    									Share</a>
    								<a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i>
    									Like</a>
    								<span class="float-right">
    									<a href="#" class="link-black text-sm">
    										<i class="far fa-comments mr-1"></i> Comments (5)
    									</a>
    								</span>
    							</p>

    							<input class="form-control form-control-sm" type="text" placeholder="Type a comment">
    					</div>
    					<!-- /.post -->


    					<!-- /.tab-pane -->
    					<div class="tab-pane" id="timeline">
    						<!-- The timeline -->
    						<div class="timeline timeline-inverse">
    							<!-- timeline time label -->
    							<div class="time-label">
    								<span class="bg-danger">
    									10 Feb. 2014
    								</span>
    							</div>
    							<!-- /.timeline-label -->
    							<!-- timeline item -->
    							<div>
    								<i class="fas fa-envelope bg-primary"></i>

    								<div class="timeline-item">
    									<span class="time"><i class="far fa-clock"></i> 12:05</span>

    									<h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

    									<div class="timeline-body">
    										Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
    										weebly ning heekya handango imeem plugg dopplr jibjab, movity
    										jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
    										quora plaxo ideeli hulu weebly balihoo...
    									</div>
    									<div class="timeline-footer">
    										<a href="#" class="btn btn-primary btn-sm">Read more</a>
    										<a href="#" class="btn btn-danger btn-sm">Delete</a>
    									</div>
    								</div>
    							</div>
    							<!-- END timeline item -->
    							<!-- timeline item -->
    							<div>
    								<i class="fas fa-user bg-info"></i>

    								<div class="timeline-item">
    									<span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

    									<h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your
    										friend request
    									</h3>
    								</div>
    							</div>
    							<!-- END timeline item -->
    							<!-- timeline item -->
    							<div>
    								<i class="fas fa-comments bg-warning"></i>

    								<div class="timeline-item">
    									<span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

    									<h3 class="timeline-header"><a href="#">Jay White</a> commented on your post
    									</h3>

    									<div class="timeline-body">
    										Take me to your leader!
    										Switzerland is small and neutral!
    										We are more like Germany, ambitious and misunderstood!
    									</div>
    									<div class="timeline-footer">
    										<a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
    									</div>
    								</div>
    							</div>
    							<!-- END timeline item -->

    						</div>
    						<!-- /.tab-pane -->


    					</div>
    					<!-- /.tab-content -->
    				</div><!-- /.card-body -->
    			</div>
    			<!-- /.nav-tabs-custom -->
    		</div>
    	</div>
		</section>
    
	<?php $this->load->view('user/_partials/footer.php') ?>



<?php $this->load->view('user/_partials/js.php') ?>
</body>
</html>