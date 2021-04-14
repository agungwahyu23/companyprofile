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
					<h1 class="mt-4">Ganti Password</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/Setting/') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Ganti Password</li>
					</ol>
					<?php echo $this->session->flashdata('pesan') ?>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="card mb-4">
							<div class="card-header">Data Akun</div>

							<div class="card-body">
								<div class="col">
								</div>
								<div class="row">
									<div class="form-group col-lg-12 col-sm-12">
										<label>Password Akun Anda</label>
										<?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
										<input class="form-control" id="password" name="password" type="password" placeholder="Password" required />
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-12 col-sm-12">
										<label>Password Baru</label>
										<?= form_error('passwordBaru', '<small class="text-danger pl-2">', '</small>'); ?>
										<input class="form-control" id="passwordBaru" name="passwordBaru" type="password" placeholder="Masukan Password Baru Anda" required />
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-12 col-sm-12">
										<label>Konfirmasi Password</label>
										<?= form_error('konfirmasiPassword', '<small class="text-danger pl-2">', '</small>'); ?>
										<input class="form-control" id="konfirmasiPassword" name="konfirmasiPassword" type="password" placeholder="Ulangi Password Baru Anda" />
									</div>
								</div>
							</div>

						</div>

						<button type="submit" class="btn btn-primary mr-2">
							Simpan
						</button>
						<a class="btn btn-danger" href="<?= base_url('admin/Dashboard/')?>">
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