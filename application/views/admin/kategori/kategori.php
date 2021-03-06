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
					<h1 class="mt-4">Data Kategori</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/Dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Data Kategori</li>
					</ol>
					<?php echo $this->session->flashdata('pesan') ?>
					<div class="card mb-4">
						<div class="card-header">
							<a href="<?= base_url('admin/kategori/add') ?>" class="btn btn-success">Tambah Kategori</a>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Kategori</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1;
										foreach ($kategori as $data) { ?>
											<tr>
												<td><?= $i ?></td>
												<td><?= $data['nama_kategori'] ?></td>
												<td>
													<a href="<?= base_url('admin/Kategori/edit/' . $data['idKategori']) ?>"><i class="fas fa-cog" style="color:#444"></i></a>

													<!-- <a onclick="confirm_hapus('<?php echo base_url('admin/Kategori/hapus/' . $data['idKategori']) ?>')"><i class="fas fa-trash" style="color:#444"></i></a> -->
												</td>
											</tr>
										<?php $i++;
										} ?>
									</tbody>
								</table>
								<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="deleteModalLabel">Hapus Produk</h5>
												<button class="close" type="button" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">??</span>
												</button>
											</div>
											<div class="modal-body">Apakah Anda yakin untuk menghapus produk ini?</div>
											<div class="modal-footer">
												<button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
												<a class="btn btn-danger" id="delete_link" type="button" href="">Hapus</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
			<?php $this->load->view("admin/_partials/footer.php") ?>
		</div>
	</div>

	<?php $this->load->view("admin/_partials/js.php") ?>
	<script>
		function confirm_hapus(add) {
			$('#modalDelete').modal('show', {
				backdrop: 'static'
			});
			document.getElementById('delete_link').setAttribute('href', add);
		}
	</script>
</body>

</html>