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
					<?php echo $this->session->flashdata('pesan') ?>
					<div class="card mb-4">
						<div class="card-header">
							<a href="<?= base_url('admin/produk/add') ?>" class="btn btn-success">Tambah Produk</a>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Kapasitas</th>
											<th>Harga</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1;
										foreach ($produk as $data) { ?>
											<tr>
												<td><?= $i ?></td>
												<td><?= $data['nama'] ?></td>
												<td><?= $data['kapasitas'] ?></td>
												<td><?= $data['harga'] ?></td>
												<td><?= $data['status'] == 1 ? 'Tampil' : 'Tidak Ditampilkan' ?></td>
												<td>
													<a href="<?= base_url('admin/Produk/edit/' . $data['idProduk']) ?>"><i class="fas fa-cog" style="color:#444"></i></a>
													<a href="<?= base_url('admin/Produk/tambahFoto/' . $data['idProduk']) ?>"><i class="fas fa-images" style="color:#444"></i></a>
													<a href="<?= base_url('admin/Produk/hapus/' . $data['idProduk']) ?>"><i class="fas fa-trash" style="color:#444"></i></a>
												</td>
											</tr>
										<?php $i++;
										} ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</main>
			<?php $this->load->view("admin/_partials/footer.php") ?>
		</div>
	</div>

	<?php $this->load->view("admin/_partials/js.php") ?>
</body>

</html>