<div class="container-xxl flex-grow-1 container-p-y">
	<h6>SECCIONES</h6>
	<hr>
	<div class="row">
		<div class="col-lg-4 col-md-12 col-6 mb-4">
			<a href="<?php echo site_url('agencias/index'); ?>" class="card">
				<div class="card-body">
					<h4 class="fw-semibold d-block mb-1 text-center">Agencias</h4>
					<div class="row">
						<div class="col-md-6">
							<div class="card-title d-flex align-items-start justify-content-between">
								<div class="avatar flex-shrink-0" style="width: 60px;height:60px; background-color:#fff5e0; border-radius:100%; display:flex; justify-content:center; align-items:center">
									<i class='bx bxs-bank' style="color:#ffb826; width:50px"></i>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<h3 class="card-title mb-2 text-center">628</h3>
							<h5 class="text-warning fw-semibold text-center"> Registradas</h5>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-4 col-md-12 col-6 mb-4">
			<a href="<?php echo site_url('cajeros/index'); ?>" class="card">
				<div class="card-body">
					<h4 class="fw-semibold d-block mb-1 text-center">Cajeros</h4>
					<div class="row">
						<div class="col-md-6">
							<div class="card-title d-flex align-items-center justify-content-between">
								<div class="avatar flex-shrink-0" style="width: 60px;height:60px; background-color:#eefbe7; border-radius:100%; display:flex; justify-content:center; align-items:center">
									<i class='bx bx-money' style="color:#86e255"></i>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<h3 class="card-title mb-2 text-center">628</h3>
							<h5 class="text-success fw-semibold text-center"> Registrados</h5>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-4 col-md-12 col-6 mb-4">
			<a href="<?php echo site_url('corresponsales/index'); ?>" class="card">
				<div class="card-body">
					<h4 class="fw-semibold d-block mb-1 card-title  text-center">Corresponsales</h4>
					<div class="row">
						<div class="col-md-6">
							<div class="card-title d-flex align-items-start justify-content-between">
								<div class="avatar flex-shrink-0" style="width: 60px;height:60px; background-color:#ffe7e3; border-radius:100%; display:flex; justify-content:center; align-items:center">
									<i class='bx bx-buildings' style="color:#ff4627"></i>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<h3 class="card-title mb-2 text-center">62</h3>
							<h5 class="text-danger fw-semibold text-center"> Registrados</h5>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
	<!-- Pestañas para los reportes -->
	<h6>REPORTES</h6>
	<hr>
	<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
		<li class="nav-item" role="presentation">
			<button class="nav-link active" id="agencias-tab" data-bs-toggle="tab" data-bs-target="#agencias" type="button" role="tab" aria-controls="agencias" aria-selected="true">Agencias Registradas</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="cajeros-tab" data-bs-toggle="tab" data-bs-target="#cajeros" type="button" role="tab" aria-controls="cajeros" aria-selected="false">Cajeros Registrados</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="corresponsales-tab" data-bs-toggle="tab" data-bs-target="#corresponsales" type="button" role="tab" aria-controls="corresponsales" aria-selected="false">Corresponsales Registrados</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="false">Reporte General</button>
		</li>
	</ul>

	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="agencias" role="tabpanel" aria-labelledby="agencias-tab">
			<div id="reporteMapaAgencias" style="width: 100%; height:520px;"></div>
		</div>
		<div class="tab-pane fade" id="cajeros" role="tabpanel" aria-labelledby="cajeros-tab">
			<div id="reporteMapaCajeros" style="width: 100%; height:520px;"></div>
		</div>
		<div class="tab-pane fade" id="corresponsales" role="tabpanel" aria-labelledby="corresponsales-tab">
			<div id="reporteMapaCorresponsales" style="width: 100%; height:520px;"></div>
		</div>
		<div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
			<div id="reporteMapaGeneral" style="width: 100%; height:520px;"></div>
		</div>
	</div>
</div>

<script>
	function initMap() {
		// Agencias
		var coordenadaCentralAgencias = new google.maps.LatLng(-0.9171755208692692, -78.6328634793978);
		var mapaAgencias = new google.maps.Map(document.getElementById('reporteMapaAgencias'), {
			center: coordenadaCentralAgencias,
			zoom: 13,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		<?php foreach ($listadoAgencias as $agencia) : ?>
			var coordenadaTemporalAgencias = new google.maps.LatLng(
				<?php echo $agencia->latitudAgencia; ?>,
				<?php echo $agencia->longitudAgencia; ?>
			);
			var marcadorAgencias = new google.maps.Marker({
				position: coordenadaTemporalAgencias,
				map: mapaAgencias,
				title: "<?php echo $agencia->nombre; ?>"
			});
		<?php endforeach; ?>

		// Cajeros
		var coordenadaCentralCajeros = new google.maps.LatLng(-0.9171755208692692, -78.6328634793978);
		var mapaCajeros = new google.maps.Map(document.getElementById('reporteMapaCajeros'), {
			center: coordenadaCentralCajeros,
			zoom: 13,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		<?php foreach ($listadoCajeros as $cajero) : ?>
			var coordenadaTemporalCajeros = new google.maps.LatLng(
				<?php echo $cajero->latitudCajero; ?>,
				<?php echo $cajero->longitudCajero; ?>
			);
			var marcadorCajeros = new google.maps.Marker({
				position: coordenadaTemporalCajeros,
				map: mapaCajeros,
				title: "<?php echo $cajero->nombre; ?>"
			});
		<?php endforeach; ?>

		// Corresponsales
		var coordenadaCentralCorresponsales = new google.maps.LatLng(-0.9171755208692692, -78.6328634793978);
		var mapaCorresponsales = new google.maps.Map(document.getElementById('reporteMapaCorresponsales'), {
			center: coordenadaCentralCorresponsales,
			zoom: 13,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		<?php foreach ($listadoCorresponsales as $corresponsal) : ?>
			var coordenadaTemporalCorresponsales = new google.maps.LatLng(
				<?php echo $corresponsal->latitudCorresponsal; ?>,
				<?php echo $corresponsal->longitudCorresponsal; ?>
			);
			var marcadorCorresponsales = new google.maps.Marker({
				position: coordenadaTemporalCorresponsales,
				map: mapaCorresponsales,
				title: "<?php echo $corresponsal->nombre; ?>"
			});
		<?php endforeach; ?>
	}
</script>
