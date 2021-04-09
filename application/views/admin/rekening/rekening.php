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
					<h1 class="mt-4">Data Rekening</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/Dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Data Rekening</li>
					</ol>
					<div class="card mb-4">
						<div class="card-header">
							<a href="<?= base_url('admin/rekeing/add') ?>" class="btn btn-success">Tambah Rekening</a>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Pemilik</th>
											<th>Nama Bank</th>
											<th>Nomor Rekening</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
                                            <td>Aziz</td>
                                            <td>BCA</td>
                                            <td>120992109</td>
                                            <a href="<?= base_url('admin/Rekening/edit') ?>"><i class="fas fa-cog" style="color:#444"></i></a>
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