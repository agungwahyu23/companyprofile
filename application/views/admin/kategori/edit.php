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
					<h1 class="mt-4">Edit Kategori</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/Dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Edit Kategori</li>
					</ol>
					<form action="" method="post">
						<div class="card mb-4">
							<div class="card-header">Edit Kategori</div>
							<div class="card-body">
								<div class="row">
									<div class="form-group col-lg-4 col-sm-12">
										<label>Nama Kategori</label>
										<?= form_error('nama', '<small class="text-danger pl-2">', '</small>'); ?>
										<input class="form-control" id="nama" name="nama" type="text" placeholder="Nama Kategori" value="<?= $kategori['nama_kategori']?>"/>
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