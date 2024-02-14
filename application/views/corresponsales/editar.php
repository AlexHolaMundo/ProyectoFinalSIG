<div class="container-xxl flex-grow-1 container-p-y">
	<div class="content-wrapper">
		<div class="container-xxl flex-grow-1 container-p-y">
			<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Secciones/</span>Corresponsales</h4>
			<div class="row">
				<div class="col-sm">
					<div class="card mb-4">
						<div class="card-header d-flex justify-content-between align-items-center">
							<h5 class="mb-0">Editar Corresponsal</h5>
							<small class="text-muted float-end">Corresponsales <strong>&nbsp;/&nbsp;</strong> <a href="<?php echo site_url('reportes/index') ?>">Ver Reportes</a></small>
						</div>
						<div class="card-body">
							<form action="<?php echo site_url('corresponsales/ActualizarCorresponsal'); ?>" method="POST" enctype="multipart/form-data" id="formCorresponsales">
								<input type="hidden" name="idCorresponsal" id="idCorresponsal" value="<?php echo $corresponsalEditar->idCorresponsal ?>">
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Nombre del Corresponsal</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-buildings"></i></span>
												<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Corresponsal Example" value="<?php echo $corresponsalEditar->nombre ?>" />
											</div>
											<label id="nombre-error" class="error error-message" for="nombre"></label>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Direccion</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bxs-map"></i></span>
												<input type="text" id="direccion" name="direccion" class="form-control" placeholder="Av. Example" value="<?php echo $corresponsalEditar->direccion ?>" />
											</div>
											<label id="direccion-error" class="error error-message" for="direccion"></label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Telefono</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-phone"></i></span>
												<input type="text" id="telefono" name="telefono" class="form-control" placeholder="000 000 0000" value="<?php echo $corresponsalEditar->telefono ?>" />
											</div>
											<label id="telefono-error" class="error error-message" for="telefono"></label>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Horario</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-time-five"></i></span>
												<input type="text" id="horario" name="horario" class="form-control" placeholder="Lunes - Viernes 00:00 AM - 00:00 PM" value="<?php echo $corresponsalEditar->horario ?>" />
											</div>
											<label id="horario-error" class="error error-message" for="horario"></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Fotografia Actual</label>
											<br>
											<?php if ($corresponsalEditar->fotografia) : ?>
												<img src="<?php echo base_url('uploads/corresponsales/') . $corresponsalEditar->fotografia; ?>" alt="Fotografía Actual" style="max-width: 200px;" />
											<?php else : ?>
												<p>No hay fotografía disponible</p>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-md-6">
										<label class="form-label" for="">Actualizar Fotografia (Opcional)</label>
										<span id="" class="input-group-text"><i class="bx bx-image-add"></i></span>
										<input type="file" class="form-control" id="nueva_foto_cor" name="nueva_foto_cor">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="mb-3">
											<label class="form-label" for="descripcion">Descripción</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text"><i class="bx bx-text"></i></span>
												<textarea id="descripcion" name="descripcion" class="form-control" placeholder="Alguna descripcion"><?php echo $corresponsalEditar->descripcion ?></textarea>
											</div>
											<label id="descripcion-error" class="error error-message" for="descripcion"></label>
										</div>
									</div>

									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Latitud</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-globe"></i></span>
												<input type="text" id="latitudCorresponsal" name="latitudCorresponsal" class="form-control" placeholder="000000000000000" readonly value="<?php echo $corresponsalEditar->latitudCorresponsal ?>" />
											</div>
											<label id="latitudCorresponsal-error" class="error error-message" for="latitudCorresponsal"></label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Longitud</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-globe"></i></span>
												<input type="text" id="longitudCorresponsal" name="longitudCorresponsal" class="form-control" placeholder="000000000000000" readonly value="<?php echo $corresponsalEditar->longitudCorresponsal ?>" />
											</div>
											<label id="longitudCorresponsal-error" class="error error-message" for="longitudCorresponsal"></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 m-2">
										<legend class="text-center">Arrastra el marcador hacia la ubicacion</legend>
										<div id="mapa" style="width: 100%; height:550px; border-radius:5px;"></div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Actualizar</button>
								<a type="" href="<?php echo site_url('corresponsales/index'); ?>" class="btn btn-warning">Cancelar </a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function initMap() {
			var coordenadaCentral = new google.maps.LatLng(<?php echo $corresponsalEditar->latitudCorresponsal; ?>, <?php echo $corresponsalEditar->longitudCorresponsal; ?>);
			var miMapa = new google.maps.Map(document.getElementById('mapa'), {
				center: coordenadaCentral,
				zoom: 7,
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
