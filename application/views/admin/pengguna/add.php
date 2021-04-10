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
					<h1 class="mt-4">Data Pengguna</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/Dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Data Pengguna</li>
					</ol>
					<form action="" method="post">
						<div class="card mb-4">
							<div class="card-header">Tambah Admin</div>
							<div class="card-body">
								<div class="row">
									<div class="form-group col-lg-6 col-sm-12">
										<label>Nama Lengkap</label>
										<?= form_error('nama', '<small class="text-danger pl-2">', '</small>'); ?>
										<input class="form-control" id="nama" name="nama" type="text"
											placeholder="Nama Lengkap" />
									</div>
									<div class="form-group col-lg-6 col-sm-12">
										<label>Email </label>
										<?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
										<input class="form-control" id="email" name="email" type="text"
											placeholder="Email" />
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-12 col-sm-12">
										<label>Bagian</label>
										<?= form_error('status', '<small class="text-danger pl-2">', '</small>'); ?>
										<select class="form-control" name="status">
											<option value="">--PILIH BAGIAN--</option>
											<option value="Admin">Admin</option>
											<option value="Karyawan">Karyawan</option>

										</select>
									</div>
								</div>
								<div class="row">
								<div class="form-group col-lg-6 col-sm-12">
										<label>Password </label>
										<?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
										<input class="form-control" id="password" name="password" type="password"
											placeholder="Password Admin" />
									</div>
									<div class="form-group col-lg-6 col-sm-12">
										<label>Konfirmasi Password </label>
										<?= form_error('konfirmasiPassword', '<small class="text-danger pl-2">', '</small>'); ?>
										<input class="form-control" id="konfirmasiPassword" name="konfirmasiPassword" type="password"
											placeholder="Konfirmasi Password" />
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

</html>