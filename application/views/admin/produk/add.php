<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="sb-nav-fixed">
	<?php $this->load->view("admin/_partials/topbar.php") ?>

	<div id="layoutSidenav">
		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid">
					<h1 class="mt-4">Data Produk</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/Dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Data Produk</li>
					</ol>
					<form action="" method="post">
						<div class="card mb-4">
							<div class="card-header">Tambah Produk</div>
							<div class="card-body">
								<div class="row">
									<div class="form-group col-lg-4 col-sm-12">
										<label>Nama Produk</label>
										<?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
										<input class="form-control" id="name" name="name" type="text"
											placeholder="Nama Produk" />
									</div>
									<div class="form-group col-lg-4 col-sm-12">
										<label>Harga</label>
										<?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
										<input class="form-control" id="name" name="name" type="text"
											placeholder="Harga Produk" />
									</div>
									<div class="form-group col-lg-4 col-sm-12">
										<label>Status</label>
										<?= form_error('pekerjaan', '<small class="text-danger pl-2">', '</small>'); ?>
										<select class="form-control" name="status">
											<option value="">--PILIH STATUS--</option>
											<option value="1">Publish</option>
											<option value="2">Draft</option>

										</select>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-6 col-sm-6">
										<label>Gambar Produk</label>
										<input name="gambarProduk" id="banner" type="file" accept="image/*"
											class="form-control border-dark small mb-3" placeholder="" aria-describedby="basic-addon2" required>
									</div>
									<div class="col-sm-12 col-lg-6">
										<div class="input-group">
											<label>Image Preview</label>
											<br />
										</div>
										<img id="preview" src="" alt="" style="width:140px" /> <br>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-12 col-sm-12">
										<label>Deskripsi Produk</label>
										<?= form_error('deskripsiProduk', '<small class="text-danger pl-2">', '</small>'); ?>
										<textarea class="form-control" name="deskripsiProduk" id="deskripsi"></textarea>
									</div>
								</div>
							</div>
						</div>
						<button name="save" id="save" type="submit" class="btn btn-primary mr-2" href="#">
							Simpan
						</button>
						<a class="btn btn-danger" href="javascript:history.go(-1)">
							Batal
						</a>
					</form>
				</div>
			</main>
			<?php $this->load->view("admin/_partials/footer.php") ?>
		</div>
	</div>

	<?php $this->load->view("admin/_partials/js.php") ?>
</body>

<script>
  CKEDITOR.replace('deskripsi');
</script>
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#preview').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }

  $("#banner").change(function() {
    readURL(this);
  });
</script>

</html>