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
					<h1 class="mt-4">Selamat datang, <?= $this->session->userdata('nama'); ?> </h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item active">
							<h3>Anda login sebagai <?= $this->session->userdata('status'); ?></h3>
						</li>
					</ol>
					<div class="row">
						<div class="col-lg-12 align-item-center text-center">
							<img src="<?= base_url('img/logo1.png') ?>" style="width:25%" alt="">
						</div>
						<!-- <div class="col-xl-3 col-md-6">
							<div class="card bg-primary text-white mb-4">
								<div class="card-body">Produk Tersedia</div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="#">Lihat</a>
									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-md-6">
							<div class="card bg-warning text-white mb-4">
								<div class="card-body">Kritik Dan Saran</div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="#">Lihat</a>
									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
								</div>
							</div>
						</div>
						<!-- <div class="col-xl-3 col-md-6">
							<div class="card bg-success text-white mb-4">
								<div class="card-body">Success Card</div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="#">View Details</a>
									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="card bg-danger text-white mb-4">
								<div class="card-body">Danger Card</div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="#">View Details</a>
									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
								</div>
							</div>
						</div> -->

					</div>
					<div class="row mb-4">
						<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-sm-12">
							<div class="card h-100">
								<div class="card-header">
									Grafik Pengunjung Website
								</div>
								<div class="card-body">
									<div class="panel panel-primary">
										<div class="panel-body" style="position: relative; height:280px; width:100%;">
											<canvas id="website_visitor" width="100%" height="30"></canvas>
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

</body>
<script>
	function number_format(number, decimals, dec_point, thousands_sep) {
		// Strip all characters but numerical ones.
		number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
		var n = !isFinite(+number) ? 0 : +number,
			prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
			sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
			dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
			s = '',
			toFixedFix = function(n, prec) {
				var k = Math.pow(10, prec);
				return '' + Math.round(n * k) / k;
			};
		// Fix for IE parseFloat(0.55).toFixed(0) = 0;
		s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
		if (s[0].length > 3) {
			s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
		}
		if ((s[1] || '').length < prec) {
			s[1] = s[1] || '';
			s[1] += new Array(prec - s[1].length + 1).join('0');
		}
		return s.join(dec);
	}

	(Chart.defaults.global.defaultFontFamily = "Metropolis"),
	'-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
	Chart.defaults.global.defaultFontColor = "#858796";

	var ctx = document.getElementById("website_visitor");
	var cData = JSON.parse(`<?php echo $grafik; ?>`);
	var myLineChart = new Chart(ctx, {
		type: "line",
		data: {
			labels: [
				"Januari",
				"Februari",
				"Maret",
				"April",
				"Mei",
				"Juni",
				"Juli",
				"Agustus",
				"September",
				"Oktober",
				"November",
				"Desember"
			],
			// labels: cData.tanggal,
			datasets: [{
				label: "Pengunjung ",
				lineTension: 0.3,
				backgroundColor: "rgba(0, 97, 242, 0.05)",
				borderColor: "rgba(0, 97, 242, 1)",
				pointRadius: 3,
				pointBackgroundColor: "rgba(0, 97, 242, 1)",
				pointBorderColor: "rgba(0, 97, 242, 1)",
				pointHoverRadius: 3,
				pointHoverBackgroundColor: "rgba(0, 97, 242, 1)",
				pointHoverBorderColor: "rgba(0, 97, 242, 1)",
				pointHitRadius: 10,
				pointBorderWidth: 2,
				// data: [
				// 	0,
				// 	10,
				// 	5,
				// 	15,
				// 	10,
				// 	20,
				// 	15,
				// 	25,
				// 	20,
				// 	30,
				// 	25,
				// 	40
				// ]
				data: cData.jumlah
			}]
		},
		options: {
			maintainAspectRatio: false,
			layout: {
				padding: {
					left: 10,
					right: 25,
					top: 25,
					bottom: 0
				}
			},
			scales: {
				xAxes: [{
					time: {
						unit: "date"
					},
					gridLines: {
						display: false,
						drawBorder: false
					},
					ticks: {
						maxTicksLimit: 7
					}
				}],
				yAxes: [{
					ticks: {
						maxTicksLimit: 5,
						padding: 10,
						callback: function(value, index, values) {
							return number_format(value);
						}
					},
					gridLines: {
						color: "rgb(234, 236, 244)",
						zeroLineColor: "rgb(234, 236, 244)",
						drawBorder: false,
						borderDash: [2],
						zeroLineBorderDash: [2]
					}
				}]
			},
			legend: {
				display: false
			},
			tooltips: {
				backgroundColor: "rgb(255,255,255)",
				bodyFontColor: "#858796",
				titleMarginBottom: 10,
				titleFontColor: "#6e707e",
				titleFontSize: 14,
				borderColor: "#dddfeb",
				borderWidth: 1,
				xPadding: 15,
				yPadding: 15,
				displayColors: false,
				intersect: false,
				mode: "index",
				caretPadding: 10,
				callbacks: {
					label: function(tooltipItem, chart) {
						var datasetLabel =
							chart.datasets[tooltipItem.datasetIndex].label || "";
						return datasetLabel + number_format(tooltipItem.yLabel);
					}
				}
			}
		}
	});
</script>

</html>