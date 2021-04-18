<footer id="footer">
	
	<div class="footer-top">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 col-md-6 footer-contact">
					<h3><?= $profil['nama']?></h3>
					<p>
					<?= $profil['alamat']?> <br><br>
					</p>
				</div>

				<div class="col-lg-3 col-md-6 footer-links">
					<h4>Kontak Kami</h4>
					<ul>
						<li><i class='bx bxl-whatsapp'></i> <a href="https://api.whatsapp.com/send?phone=<?= $profil['wa']?>"><?= $profil['wa']?></a></li>
						<li><i class='bx bxs-envelope'></i> <a href="mailto:<?= $profil['email'] ?>?Subject=AzisRoaster&Body="><?= $profil['email']?></a></li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-6 footer-links">
					<h4>Navigasi</h4>
					<ul>
						<li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('Beranda')?>">Beranda</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('Produk')?>">Produk</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('TentangKami')?>">Tentang Kami</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('KontakKami')?>">Kontak Kami</a></li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-6 footer-links">
					<h4>Ikuti kami di sosial media</h4>
					<!-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> -->
					<div class="social-links mt-3">
						<!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
						<a href="https://facebook.com/<?= $profil['fb']?>" class="facebook"><i class="bx bxl-facebook"></i></a>
						<a href="https://instagram.com/<?= $profil['ig']?>" class="instagram"><i class="bx bxl-instagram"></i></a>
						<!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
						<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="container py-4">
		<div class="copyright">
			&copy; Copyright <strong><span>RCR Jember</span></strong>. All Rights Reserved
		</div>
		<div class="credits">
			<!-- All the links in the footer should remain intact. -->
			<!-- You can delete the links only if you purchased the pro version. -->
			<!-- Licensing information: https://bootstrapmade.com/license/ -->
			<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
			Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
		</div>
	</div>
</footer><!-- End Footer -->