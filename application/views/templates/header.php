<!DOCTYPE html>
<html lang="es" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	<title>Banco de Machala</title>

	<meta name="description" content="" />
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<!-- FileInput CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.8/css/fileinput.min.css" />
	<!-- Bootstrap Fileinput JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.8/js/fileinput.min.js"></script>
	<!-- español fileinput -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.8/js/locales/es.min.js"></script>
	<script src="<?= base_url('js/fileInput.js') ?>"></script>
	<!-- SweetAlert2 CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.min.css">
	<!-- SweetAlert2 JS -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.all.min.js"></script>
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="https://www.bancomachala.com/favicon.png" />
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

	<!-- Icons. Uncomment required icon fonts -->
	<link rel="stylesheet" href="<?= base_url('assets/vendor/fonts/boxicons.css') ?>" />

	<!-- Core CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/vendor/css/core.css" class="template-customizer-core-css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/vendor/css/theme-default.css" class="template-customizer-theme-css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/demo.css') ?>" />

	<!-- Vendors CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>" />

	<link rel="stylesheet" href="<?= base_url('assets/vendor/libs/apex-charts/apex-charts.css') ?>" />

	<!-- Page CSS -->

	<!-- Helpers -->
	<script src="<?= base_url('assets/vendor/js/helpers.js') ?>"></script>

	<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
	<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
	<script src="<?= base_url('assets/js/config.js') ?>"></script>
	<!-- Google Maps API -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqMDMrp8yZDRwwhG7ESbyCPFu_o_InLgk&libraries=places&callback=initMap"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar">
		<div class="layout-container">
			<!-- Menu -->

			<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
				<div class="app-brand demo">
					<a href="<?php echo site_url(); ?>" class="app-brand-link">
						<span class="app-brand-logo demo">
							<img src="https://www.bancomachala.com/media/44315/bm_logobm_institucional2021_principal2.png" width="190px" alt="">
						</span>
					</a>

					<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
						<i class="bx bx-chevron-left bx-sm align-middle"></i>
					</a>
				</div>

				<div class="menu-inner-shadow"></div>

				<ul class="menu-inner py-1">
					<!-- Dashboard -->
					<li class="menu-item active">
						<a href="<?php echo site_url(); ?>" class="menu-link">
							<i class="menu-icon tf-icons bx bx-home-circle"></i>
							<div data-i18n="Analytics">Inicio</div>
						</a>
					</li>
					<!-- Components -->
					<li class="menu-header small text-uppercase"><span class="menu-header-text">SECCIONES</span></li>
					<!-- Cards -->
					<li class="menu-item">
						<a href="<?php echo site_url('agencias/index'); ?>" class="menu-link">
							<i class="menu-icon bx bxs-bank"></i>
							<div data-i18n="Basic">Agencias</div>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?php echo site_url('cajeros/index'); ?>" class="menu-link">
							<i class="menu-icon bx bx-money"></i>
							<div data-i18n="Basic">Cajeros</div>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?php echo site_url('corresponsales/index'); ?>" class="menu-link">
							<i class="menu-icon tf-icons bx bx-building-house"></i>
							<div data-i18n="Basic">Corresponsales</div>
						</a>
					</li>
				</ul>
			</aside>
			<!-- / Menu -->

			<!-- Layout container -->
			<div class="layout-page">
				<!-- Navbar -->

				<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
					<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
						<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
							<i class="bx bx-menu bx-sm"></i>
						</a>
					</div>

					<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
						<!-- Search -->
						<div class="navbar-nav align-items-center">
							<div class="nav-item d-flex align-items-center">
								<i class="bx bx-search fs-4 lh-0"></i>
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
							</div>
						</div>
						<!-- /Search -->

						<ul class="navbar-nav flex-row align-items-center ms-auto">
							<!-- Place this tag where you want the button to render. -->
							<li class="nav-item lh-1 me-3">
								<a class="github-button" href="https://github.com/themeselection/sneat-html-admin-template-free" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">AlexHolaMundo</a>
							</li>

							<!-- User -->
							<li class="nav-item navbar-dropdown dropdown-user dropdown">
								<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
									<div class="avatar avatar-online">
										<img src="https://avatars.githubusercontent.com/u/109613626?v=4" alt class="w-px-40 h-auto rounded-circle" />
									</div>
								</a>
							</li>
							<!--/ User -->
						</ul>
					</div>
				</nav>
				<script type="text/javascript">
			$(document).ready(function() {
				$('.delete-btn').on('click', function(e) {
					e.preventDefault();
					var url = $(this).attr('href');
					var confirmationMessage = $(this).data('confirm-message') || "¿Estás seguro de que deseas eliminar este registro?";
					Swal.fire({
						title: "CONFIRMACIÓN",
						text: confirmationMessage,
						icon: "question",
						showCancelButton: true,
						confirmButtonColor: "#3085d6",
						cancelButtonColor: "#d33",
						confirmButtonText: "Sí",
						cancelButtonText: "No"
					}).then((result) => {
						if (result.isConfirmed) {
							window.location.href = url;
						}
					});
				});
			});
		</script>
		<?php if ($this->session->flashdata('alerta')) : ?>
			<script>
				$(document).ready(function() {
					Swal.fire({
						title: "Éxito!",
						text: "<?php echo $this->session->flashdata('alerta') ?>",
						icon: "success",
					});
				});
			</script>
			<?php $this->session->set_flashdata('alerta', '') ?>
		<?php endif ?>
				<div class="content-wrapper">
