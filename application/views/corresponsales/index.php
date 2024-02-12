<div class="container-xxl flex-grow-1 container-p-y">
	<div class="content-wrapper">
		<div class="container-xxl flex-grow-1 container-p-y">
			<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Secciones/</span>Corresponsales</h4>
			<div class="row">
				<div class="col-sm">
					<div class="card mb-4">
						<div class="card-header d-flex justify-content-between align-items-center">
							<h5 class="mb-0">Registro de Corresponsales</h5>
							<small class="text-muted float-end">Corresponsales</small>
						</div>
						<div class="card-body">
							<form action="<?php echo site_url('corresponsales/guardar'); ?>" method="POST" enctype="multipart/form-data" id="formCorresponsales">
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Nombre</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-buildings"></i></span>
												<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Corresponsal Example" aria-la />
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Direccion</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bxs-map"></i></span>
												<input type="text" id="direccion" name="direccion" class="form-control" placeholder="Av. Example" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Telefono</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-phone"></i></span>
												<input type="text" id="telefono" name="telefono" class="form-control" placeholder="000 000 0000" />
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Horario</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-time-five"></i></span>
												<input type="text" id="horario" name="horario" class="form-control" placeholder="Lunes - Viernes 00:00 AM - 00:00 PM" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="mb-3">
											<label class="form-label" for="">Fotografia</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-image-add"></i></span>
												<input type="file" id="fotografia" name="fotografia" accept="img/*" class="form-control" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="mb-3">
											<label class="form-label" for="">Descripcion</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text"><i class="bx bx-envelope"></i></span>
												<textarea type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Alguna descripcion"></textarea>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Latitud</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-globe"></i></span>
												<input type="text" id="latitud" name="latitud" class="form-control" placeholder="000000000000000" readonly />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Longitud</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-globe"></i></span>
												<input type="text" id="longitud" name="longitud" class="form-control" placeholder="000000000000000" readonly />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 m-2">
										<legend class="text-center">Arrastra el marcador hacia la ubicacion</legend>
										<div id="mapa" style="width: 100%; height:310px; border-radius:5px;"></div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Registrar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<?php if ($listadoCorresponsales) : ?>
			<table class="table">
				<thead>
					<tr style="background-color: #097635;">
						<th class="text-center">ID</th>
						<th class="text-center">NOMBRE</th>
						<th class="text-center">DIRECCION</th>
						<th class="text-center">TELEFONO</th>
						<th class="text-center">DESCRIPCION</th>
						<th class="text-center">HORARIO</th>
						<th class="text-center">FOTOGRAFIA</th>
						<th class="text-center">LATITUD</th>
						<th class="text-center">LONGITUD</th>
						<th class="text-center">ACCIONES</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($listadoCorresponsales as $corresponsal) : ?>
						<tr>
							<td class="text-center"><?php echo $corresponsal->idCorresponsal; ?></td>
							<td class="text-center"><?php echo $corresponsal->nombre; ?></td>
							<td class="text-center"><?php echo $corresponsal->direccion; ?></td>
							<td class="text-center"><?php echo $corresponsal->telefono; ?></td>
							<td class="text-center w-25"><?php echo $corresponsal->descripcion; ?></td>
							<td class="text-center"><?php echo $corresponsal->horario; ?></td>
							<td class="text-center">
								<?php if ($corresponsal->fotografia != "") : ?>
									<img src="<?php echo base_url('uploads/corresponsales/') . $corresponsal->fotografia; ?>" height="50px" width="50px" alt="Corresponsal">
								<?php else : ?>
									N/A
								<?php endif; ?>
							</td>
							<td class="text-center"><?php echo $corresponsal->latitudCorresponsal; ?></td>
							<td class="text-center"><?php echo $corresponsal->longitudCorresponsal; ?></td>
							<td class="text-center">
								<a href="<?php echo site_url('corresponsales/borrar/') . $corresponsal->idCorresponsal; ?>" class=" btn btn-outline-danger delete-btn" title="Eliminar">
									<i class="bx bxs-trash"></i>
								</a>
								<a href="<?php echo site_url('corresponsales/editar/') . $corresponsal->idCorresponsal; ?>" class=" btn btn-outline-warning" title="Editar">
									<i class="bx bxs-edit"></i>
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php else : ?>
			<div class="alert alert-danger">
				No se encontro corresponsales registrados
			</div>
		<?php endif; ?>
	</div>


	<script>
		function initMap() {
			var coordenadaCentral = new google.maps.LatLng(-0.9171755208692692, -78.6328634793978);
			var miMapa = new google.maps.Map(document.getElementById('mapa'), {
				center: coordenadaCentral,
				zoom: 13,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});

			var iconoURL = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAAXNSR0IArs4c6QAAAiNJREFUOE991T9rFFEUBfDf1UKDaGlhZSVErGIg22idQqwEGwsrSfALpPALpFcUFGxjbcCPYPyDYCchiKD4AVSMVa47M2933u5OstXbN++dOefec+6E6hfI9n9Z9RuzW/Xjdl0f7I5OLwzgncdKe2L23ty1+EEeTPjFwNnJhdvJK5ztxTTYWdTUGltezzM8aB5WTBc0vcR9fAj+zpSl4PXKY4VcEs5IRzPy52q6g7tYxpehMvc1iD1yDUvEv0Wmvaoa9EB4JP0IXiSruBXsJh+JvZBr2YL6N1PTuUYW0FgmvwmHMt6RI2zgKTbxDHsoTBWmdY16TTvCXRnLIfeTm/iFT7hEXCH38fME0AUfFNBS0+O81+13NQ1LciK/wzuNJ8I96dyA7xuGDwurYfkT0Mpto+BtZ53hnBGvQzb+bUGDzRyqaWWj9bGEN2MJ2zK2JoHtwpRnk0NKo0pH2yB068pSM92PCtRWcDW5iPc4UkBDjrJtlCsojZqzVFX/9bEtaqbTRgXfJkxb0LAhByw1UNMOlO2xgbdwR7gmPcafzqfeYSSsyrhF7o5D0Jq/T9Rs99eDN+NUTEBr9zZD5ZACutjH48wf6+OoTUHn5kABnSaqin1rxw60lR8lph3CyUyL/KBp1LztZuVXr+y6z3fia2+p9sQp4Yb0u41pPSQ6Qs0gbwb6wkC5jM+4MKVR+3Fhhi4UtnnZ9X5I17k+7lNwXMgWSsF/ksgFJ6jNjTsAAAAASUVORK5CYII=';

			var marcador = new google.maps.Marker({
				position: coordenadaCentral,
				map: miMapa,
				title: 'Seleccione la ubicación de la Agencia',
				draggable: true,
				icon: {
					url: iconoURL,
					scaledSize: new google.maps.Size(25, 25)
				}
			});

			google.maps.event.addListener(marcador, 'dragend', function(event) {
				var latitud = this.getPosition().lat();
				var longitud = this.getPosition().lng();
				document.getElementById('latitudCorresponsal').value = latitud;
				document.getElementById('longitudCorresponsal').value = longitud;
			});
		}
	</script>
