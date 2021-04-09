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
					<form action="" method="post" enctype="multipart/form-data">
						<div class="card mb-4">
							<div class="card-header">Profile Company</div>
							
							<div class="card-body">
								<div class="col">
									<?php echo $this->session->flashdata('pesan') ?>
								</div>
								<div class="row">
									<div class="form-group col-lg-6 col-sm-12">
										<label>Nama Kantor</label>
										<input class="form-control" id="nama" name="nama" type="text"
											placeholder="Nama Kantor"  />
									</div>
									<div class="form-group col-lg-6 col-sm-12">
										<label>Alamat</label>
										<input class="form-control" id="alamat" name="alamat" type="text"
											placeholder="Alamat"  />
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-3 col-sm-12">
										<label>Nomor whatsapp 1</label>
										<input class="form-control" id="no_telp" name="wa1" type="text"
											placeholder="Nomor Telepon" />
									</div>
									<div class="form-group col-lg-3 col-sm-12">
										<label>Nomor whatsapp 2</label>
										<input class="form-control" id="no_telp" name="wa2" type="text"
											placeholder="Nomor Telepon"  />
									</div>
									<div class="form-group col-lg-3 col-sm-12">
										<label>Nomor whatsapp 3</label>
										<input class="form-control" id="no_telp" name="wa3" type="text"
											placeholder="Nomor Telepon"  />
									</div>
									<div class="form-group col-lg-3 col-sm-12">
										<label>Nomor whatsapp 4</label>
										<input class="form-control" id="no_telp" name="wa4" type="text"
											placeholder="Nomor Telepon"  />
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-6 col-sm-12">
										<label>Instagram 1</label>
										<input class="form-control" id="ig" name="ig1" type="text"
											placeholder="Instagram"  />
									</div>
									<div class="form-group col-lg-6 col-sm-12">
										<label>Instagram 2</label>
										<input class="form-control" id="ig" name="ig2" type="text"
											placeholder="Instagram"  />
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-6 col-sm-12">
										<label>Facebook</label>
										<input class="form-control" id="ig" name="fb" type="text"
											placeholder="Instagram"  />
									</div>
									<div class="form-group col-lg-6 col-sm-12">
										<label>Email</label>
										<input class="form-control" id="email" name="email" type="text"
											placeholder="Email"  />
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-12 col-sm-12">
										<label>Deskripsi</label>
										<textarea class="form-control" id="deskripsi" name="deskripsi" type="text"
											placeholder="Deskripsi">
                        
                      </textarea>
									</div>
								</div>
							</div>
							
						</div>

						<button name="save" id="save" type="submit" class="btn btn-primary mr-2" href="#"
							data-toggle="modal" data-target="#modalSave">
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

			reader.onload = function (e) {
				$('#preview').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]); // convert to base64 string
		}
	}

	$("#banner").change(function () {
		readURL(this);
	});
</script>

</html>