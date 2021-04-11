<!-- Vendor JS Files -->
<script src="<?= base_url('assets/user/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/user/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?= base_url('assets/user/jquery.easing/jquery.easing.min.js') ?>"></script>
  <script src="<?= base_url('assets/user/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url('assets/user/waypoints/jquery.waypoints.min.js') ?>"></script>
  <script src="<?= base_url('assets/user/counterup/counterup.min.js') ?>"></script>
  <script src="<?= base_url('assets/user/owl.carousel/owl.carousel.min.js') ?>"></script>
  <script src="<?= base_url('assets/user/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('assets/user/venobox/venobox.min.js') ?>"></script>
  <script src="<?= base_url('assets/user/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets/user/glightbox/js/glightbox.min.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('js/user/main.js') ?>"></script>

  <script>
    let allImages = document.querySelectorAll("img");
      allImages.forEach((value)=>{
        value.oncontextmenu = (e)=>{
          e.preventDefault();
      }
    })
    $('body').on('dragstart', function(event) {
        event.preventDefault();
    });
    $('body').on('contextmenu', function(e) {
        return false;
    });
</script>