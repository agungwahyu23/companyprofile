<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('user/_partials/head.php') ?>
</head>

<body>
  <?php $this->load->view('user/_partials/navbar.php') ?>

  <section id="hero-half" class="d-flex align-items-center text-center" style="background-image: url(<?= base_url('img/produk/produk10.jpeg'); ?>)">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>PRODUK
      </h1>
      <h2>Berbagai mesin roasting kopi dengan kualitas terbaik kami hadirkan untuk Anda</h2>
    </div>
  </section>

  <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="row mb-4 justify-content-end">
        <div class="col-lg-4">
          <form class="d-flex" method="POST">
            <input class="form-control mr-2" name="cari" type="search" placeholder="Cari Produk" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Cari</button>
          </form>
        </div>
      </div>

      <div class="row gy-4" data-aos="fade-left">
        <?php foreach ($produk as $data) { ?>
          <div class="col-lg-3 col-md-3 col-produk" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="box-header">
                <img src="<?= base_url('img/Produk/produk1.jpeg') ?>" class="img-fluid" alt="">
              </div>

              <div class="nama-product"><span><?= $data['nama']?></span></div>
              <ul>
                <li>Rp. <?= number_format($data['harga'], 2)?></li>
              </ul>
              <a href="<?= base_url('Produk/detail/' . $data['idProduk']) ?>" class="btn-detail">Detail</a>
            </div>
          </div>
        <?php } ?>
      </div>

    </div>
  </section>


  <?php $this->load->view('user/_partials/footer.php') ?>



  <?php $this->load->view('user/_partials/js.php') ?>
</body>

</html>