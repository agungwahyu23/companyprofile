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
					<h1 class="mt-4">Data Pemesanan Pengunjung</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/Dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">Pemesanan Pengunjung</li>
					</ol>
					<?php echo $this->session->flashdata('pesan') ?>
					<div class="card mb-4">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Email</th>
											<th>Nomor Telefon</th>
											<th>Alamat</th>
											<th>Produk</th>
											<th>kapasitas</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1;
										foreach ($pemesan as $data) { ?>
											<tr>
												<td><?= $i?></td>
												<td><?= $data['nama']?></td>
												<td><?= $data['email']?></td>
												<td><a href="https://api.whatsapp.com/send?phone=+62<?= substr($data['nohp'], 1)?>"><?= $data['nohp']?></a></td>
												<td><?= $data['alamat']?></td>
												<td><?= $data['produk'] ?></td>
												<td><?= $data['kapasitas'] ?> Kg</td>
												<td>
													<a href="<?= base_url('admin/pemesan/hapus/' . $data['idTransaksi'])?>"><i class="fas fa-trash" style="color:#444"></i></a>
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