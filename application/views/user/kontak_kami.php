<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('user/_partials/head.php') ?>
</head>

<body>
    <?php $this->load->view('user/_partials/navbar.php') ?>

    <section id="hero-half" class="d-flex align-items-center text-center" style="background-image: url(<?= base_url('img/produk/produk10.jpeg'); ?>)">
    	<div class="container" data-aos="zoom-out" data-aos-delay="100">
    		<h1>KONTAK KAMI
    		</h1>
    	</div>
    </section>

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Mari Terhubung Lebih Dekat Dengan Kami</h3>
          <p>Silahkan hubungi kontak dibawah ini</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p><?= $profil['alamat']?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p><?= $profil['email']?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telepon / WA</h3>
              <p><?= $profil['wa']?></p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7574.528322471447!2d113.58971829023174!3d-8.26568877156438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6919f57d686f5%3A0x9ef289e422c364c9!2sRCR%20JAYA%20ABADI!5e0!3m2!1sen!2sid!4v1618781069776!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Masukkan Pesan"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

    
	<?php $this->load->view('user/_partials/footer.php') ?>



<?php $this->load->view('user/_partials/js.php') ?>
</body>
</html>