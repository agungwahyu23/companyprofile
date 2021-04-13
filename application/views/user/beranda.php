<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('user/_partials/head.php') ?>
</head>

<body>
  <?php $this->load->view('user/_partials/navbar.php') ?>

  <section id="hero" class="d-flex align-items-center" style="background-image: url(<?= base_url('img/Union.png'); ?>)">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1><?= $profil['nama'] ?> <br>JEMBER
      </h1>
      <h2>Temukan berbagai produk terbaik kami dengan <br> kualitas dan harga jual terbaik</h2>
      <div class="d-flex">
        <a href="<?= base_url('Produk') ?>" class="btn-get-started scrollto">Produk Kami</a>

      </div>
      <div class="row mt-3">
        <div class="col-lg4 col-md-6 text-center">
          <?php echo $this->session->flashdata('pesan') ?>

        </div>

      </div>
    </div>
  </section>

  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">
      <h1 class="text-center">Mengapa Memilih Aziz Roaster Jember?</h1>
      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bxs-check-square"></i></div>
            <h4 class="title"><a href="#">Hasil Kopi Berkualitas</a></h4>
            <p class="description">Kopi yang dihasilkan akan sangat berkualitas</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class='bx bxs-wrench'></i></div>
            <h4 class="title"><a href="#">Kualitas Teruji</a></h4>
            <p class="description">Setiap mesin telah melalui Quality Control Sehingga Kualitas Teruji</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class='bx bxs-user-check'></i></div>
            <h4 class="title"><a href="#">Berpengalaman</a></h4>
            <p class="description">Kami telah memiliki pengalaman dalam bidang mesin roasting</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class='bx bxs-box'></i></div>
            <h4 class="title"><a href="#">Bahan Baku Berkualitas</a></h4>
            <p class="description">Semua Bahan Baku yang Kita Gunakan Berkualitas</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <!-- <h2>About</h2> -->
        <h3><?= $profil['nama'] ?></h3>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
          <img src="<?= base_url('img/produk/produk4.jpeg') ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <h3><?= $profil['nama'] ?></h3>
          <p>
            <?= $profil['deskripsi'] ?>
          </p>
          <div class="d-flex">
            <a href="<?= base_url('TentangKami') ?>" class="btn-read-more">Tentang Kami</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Produk</h2>
        <h3>Temukan yang Anda Inginkan</h3>
        <p>Berbagai mesin roasting kopi dengan kualitas terbaik kami hadirkan untuk Anda.</p>
      </div>

      <div class="row gy-4" data-aos="fade-left">
        <?php foreach ($produk as $data) { ?>
          <div class="col-lg-3 col-md-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="box-header">
                <img src="<?= base_url('img/Produk/produk1.jpeg') ?>" class="img-fluid" alt="">
              </div>

              <div class="nama-product"><span><?= $data['nama'] ?> <?= $data['kapasitas'] ?></span></div>
              <ul>
                <li>Rp. <?= number_format($data['harga']) ?></li>
              </ul>
              <a href="<?= base_url('Produk/detail/' . $data['idProduk']) ?>" class="btn-detail">Selengkapnya</a>
              <!-- <a href="<?= base_url('Produk/DetailProduk/') ?>" class="btn-choose">Beli
                  Sekarang</a> -->
            </div>
          </div>
        <?php } ?>
      </div>

    </div>
  </section>

  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="zoom-in">

      <!-- <div class="owl-carousel testimonials-carousel"> -->
      <h1>Dapatkan Mesin Roasting Berkualitas</h1>
      <p>Anda Berpeluang Menjadi Pebisnis Kopi Sukses dan Bisa Ekspor Kopi ke Berbagai Provinsi bahkan Berbagai Negara dengan Mesin Roasting Berkualitas</p>
      <a href="<?= base_url('Produk') ?>" class="btn btn-beli text-align-center"><i class="bi bi-whatsapp"></i> Beli Sekarang</a>

      <!-- <div class="testimonial-item">
            <img src="<?= base_url('') ?>img/testimonials/testi.png" class="testimonial-img" alt="">
            <h3>Kopi Janji Jiwa</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Beli mesin roasting di RCR Jember puas sekali, mesin berkualitas harga juga pas.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?= base_url('') ?>img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Jember Coffe Shop</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Pelayanan sangat baik, dipandu dalam menngunakan mesin roasting hingga bisa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?= base_url('') ?>img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Budianto</h3>
            
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fast respon, memberikan banyak masukan tentang mesin roasting yang cocok dan sesuai dengan usaha yang saya jalankan.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div> -->



      <!-- </div> -->

    </div>
  </section>

  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Kontak</h2>
        <h3><span>Kontak Kami</span></h3>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Alamat</h3>
            <p><?= $profil['alamat'] ?></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p><?= $profil['email'] ?></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Telepon / WA</h3>
            <p><?= $profil['wa'] ?></p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <form action="<?= base_url('Beranda/kritik') ?>" method="post" role="form">
            <div class="form-row">
              <div class="col form-group">
                <input type="text" name="nama" class="form-control" id="name" placeholder="Masukkan Nama Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
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
              <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Masukkan Pesan"></textarea>
              <div class="validate"></div>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-success">Kirim</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>


  <?php $this->load->view('user/_partials/footer.php') ?>



  <?php $this->load->view('user/_partials/js.php') ?>
</body>

</html>