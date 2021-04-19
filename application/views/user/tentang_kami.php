<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('user/_partials/head.php') ?>
</head>

<body>
  <?php $this->load->view('user/_partials/navbar.php') ?>

  <section id="hero-half" class="d-flex align-items-center text-center" style="background-image: url(<?= base_url('img/produk/produk10.jpeg'); ?>)">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Tentang <?= $profil['nama'] ?>
      </h1>
    </div>
  </section>

  <section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h3>Produsen Mesin Roasting Kopi</h3>
        <p>Kami adalah produsen mesin roasting kopi berkualitas</p>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
          <img src="<?= base_url('img/Produk/produk8.jpeg') ?>" class="img-fluid-about" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <h3><?= $profil['nama'] ?></h3>
          <!-- <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                  <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                  <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                </div>
              </li>
            </ul> -->
          <p>
          <?= $profil['deskripsi'] ?>
          </p>
        </div>
      </div>

    </div>
  </section>

  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
          <img src="<?= base_url('img/ilustrasi/coffee_break.svg') ?>" class="ilustrasi" width="500px" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <ul>
            <li>
              <i class='bx bx-cog'></i>
              <div>
                <h5>Mengutamakan Kualitas</h5>
                <p>Kami selalu mengedepankan menjaga kualitas produk yang kami hadirkan untuk Anda</p>
              </div>
            </li>
            <li>
            <i class='bx bxs-group'></i>
              <div>
                <h5>SDM berkualitas</h5>
                <p>Terdiri dari Sumber Daya Manusia yang handal dibidangnya untuk menciptakan produk terbaik</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h3 class="text-center">Mengapa Memilih <?= $profil['nama']?>?</h3>
    </div>
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

  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Alamat</h3>
            <p>Dusun Gumuk limo RT 22 RW 04, Desa Nogosari, <br> Kecamatan Rambipuji, Kabupaten Jember</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p>contact@gmail.com</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Telepon / WA</h3>
            <p>082318326878</p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7574.528322471447!2d113.58971829023174!3d-8.26568877156438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6919f57d686f5%3A0x9ef289e422c364c9!2sRCR%20JAYA%20ABADI!5e0!3m2!1sen!2sid!4v1618781069776!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <form action="<?= base_url('Beranda/kritik') ?>" method="post" role="form">
            <div class="form-row">
              <div class="col form-group">
                <input type="text" name="nama" class="form-control" id="name" placeholder="Masukkan Nama Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                <div class="validate"></div>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Please enter a valid email" required />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Masukkan Pesan" required></textarea>
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