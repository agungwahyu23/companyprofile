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
											<th>Berat</th>
											<th>Harga</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
                                            <td>Mesin Roasting 500gr</td>
                                            <td>10Kg</td>
                                            <td>19.000.000</td>
                                            <td>Akif</td>
                                            <td><a href="<?= base_url('admin/Pengguna/detail') ?>"><i class="fas fa-eye" style="color:#444"></i></a>
                                            <a href="<?= base_url('admin/Pengguna/edit') ?>"><i class="fas fa-cog" style="color:#444"></i></a>
                                            <a href="#"><i class="fas fa-trash" style="color:#444"></i></a>
                                            </td>
										</tr>
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