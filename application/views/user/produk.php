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
            <button class="btn btn-cari" type="submit">Cari</button>
          </form>
        </div>
      </div>

      <div class="row gy-4" data-aos="fade-left">
        <?php foreach ($produk as $data) { ?>
          <div class="col-lg-3 col-md-3 col-produk" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="box-header">
                <img src="<?= base_url('img/Produk/' . $data['foto']) ?>" class="img-fluid" alt="">
              </div>

              <div class="nama-product"><span><?= $data['nama'] ?></span></div>
              <ul>
                <li>Kapasitas <?= $data['kapasitas'] / 1000?> Kg</li>
                <li>Rp. <?= number_format($data['harga'], 0, ",", ".")?></li>
              </ul>
              <a href="<?= base_url('Produk/detail/' . $data['idProduk']) ?>" class="btn-detail">Detail</a>
            </div>
          </div>
        <?php } ?>
        <?php if (!$produk) { ?>
          <div class="alert alert-dark text-center" role="alert">
            Produk Tidak Ditemukan
          </div>
        <?php } ?>
      </div>

      <div class="container">
        <div class="pagination flex-m flex-w p-t-26 justify-content-center">
          <?php
          // Tampilkan link-link paginationnya
          echo $pagination;
          ?>
        </div>
      </div>

    </div>
  </section>


  <?php $this->load->view('user/_partials/footer.php') ?>



  <?php $this->load->view('user/_partials/js.php') ?>
</body>

</html>