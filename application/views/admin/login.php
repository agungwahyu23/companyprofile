<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="bg-primary">
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5">
							<div class="card shadow-lg border-0 rounded-lg mt-5">
								<div class="card-header">
									<h3 class="text-center font-weight-light my-4">Login</h3>
								</div>
								<div class="card-body">
									<form method="POST">
										<?php echo $this->session->flashdata('pesan') ?>
										<div class="form-group">
											<label class="small mb-1" for="inputEmailAddress">Email</label>
											<?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
											<input class="form-control py-4" name="email" id="inputEmailAddress" type="email" placeholder="Masukan Email" />
										</div>
										<div class="form-group">
											<label class="small mb-1" for="inputPassword">Password</label>
											<?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
											<input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Masukan Password" />
										</div>
										<div class="form-group d-flex align-items-center justify-content-center mt-4 mb-0">
											<button type="submit" class="btn btn-primary">Masuk</button>
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<div id="layoutAuthentication_footer">
			<footer class="py-4 bg-light mt-auto">
				<div class="container-fluid">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted">Copyright &copy; Your Website 2020</div>
						<div>
							<a href="#">Privacy Policy</a>
							&middot;
							<a href="#">Terms &amp; Conditions</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>