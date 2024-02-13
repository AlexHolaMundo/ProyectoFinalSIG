<div class="container-xxl flex-grow-1 container-p-y">
	<div class="content-wrapper">
		<div class="container-xxl flex-grow-1 container-p-y">
			<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Secciones/</span>Agencias</h4>
			<div class="row">
				<div class="col-sm">
					<div class="card mb-4">
						<div class="card-header d-flex justify-content-between align-items-center">
							<h5 class="mb-0">Editar Agencia</h5>
							<small class="text-muted float-end">Agencias/Sucursales</small>
						</div>
						<div class="card-body">
							<form action="<?php echo site_url('agencias/actualizarAgencia'); ?>" method="POST" enctype="multipart/form-data" id="formAgencias">
								<input type="hidden" name="idAgencia" id="idAgencia" value="<?php echo $agenciaEditar->idAgencia ?>">
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Nombre de la agencia</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-building-house"></i></span>
												<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Agencia Example" value="<?php echo $agenciaEditar->nombre ?>" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Direccion</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bxs-map"></i></span>
												<input type="text" id="direccion" name="direccion" class="form-control" placeholder="Av. Example" value="<?php echo $agenciaEditar->direccion ?>" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Email</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text"><i class="bx bx-envelope"></i></span>
												<input type="text" id="email" name="email" class="form-control" placeholder="alguien.genial" value="<?php echo $agenciaEditar->email ?>" />
												<span id="" class="input-group-text">@example.com</span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Telefono</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-phone"></i></span>
												<input type="text" id="telefono" name="telefono" class="form-control" placeholder="000 000 0000" value="<?php echo $agenciaEditar->telefono ?>" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Ciudad</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bxs-city"></i></span>
												<input type="text" id="ciudad" name="ciudad" class="form-control" placeholder="Ciudad Example" value="<?php echo $agenciaEditar->ciudad ?>" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Provincia</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bxs-map-alt"></i></span>
												<input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia Example" value="<?php echo $agenciaEditar->provincia ?>" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Fecha de Inaguracion</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bxs-calendar"></i></span>
												<input type="date" class="form-control" id="fechaInaguracion" name="fechaInaguracion" value="<?php echo $agenciaEditar->fechaInaguracion ?>" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Horario</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-time-five"></i></span>
												<input type="text" id="horario" name="horario" class="form-control" placeholder="Lunes - Viernes 00:00 AM - 00:00 PM" value="<?php echo $agenciaEditar->horario ?>" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="mb-3">
											<label class="form-label" for="">Horario Diferido</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text"><i class="bx bx-time-five"></i></span>
												<input type="text" id="horarioDiferido" name="horarioDiferido" class="form-control" placeholder="Sabados - Domingos 00:00 AM - 00:00 PM" value="<?php echo $agenciaEditar->horarioDiferido ?>" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Fotografia Actual</label>
											<br>
											<?php if ($agenciaEditar->fotografia) : ?>
												<img src="<?php echo base_url('uploads/agencias/') . $agenciaEditar->fotografia; ?>" alt="Fotografía Actual" style="max-width: 200px;" />
											<?php else : ?>
												<p>No hay fotografía disponible</p>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-md-6">
										<label class="form-label" for="">Actualizar Fotografia (Opcional)</label>
										<span id="" class="input-group-text"><i class="bx bx-image-add"></i></span>
										<input type="file" class="form-control" id="nueva_foto_age" name="nueva_foto_age">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Latitud</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-globe"></i></span>
												<input type="text" id="latitud" name="latitud" class="form-control" placeholder="000000000000000" readonly value="<?php echo $agenciaEditar->latitudAgencia ?>" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Longitud</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-globe"></i></span>
												<input type="text" id="longitud" name="longitud" class="form-control" placeholder="000000000000000" readonly value="<?php echo $agenciaEditar->longitudAgencia ?>" />
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
								<button type="submit" class="btn btn-primary">Actualizar</button>
								<a type="" href="<?php echo site_url('agencias/index'); ?>" class="btn btn-warning">Cancelar </a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function initMap() {
			var coordenadaCentral = new google.maps.LatLng(<?php echo $agenciaEditar->latitudAgencia; ?>, <?php echo $agenciaEditar->longitudAgencia; ?>);
			var miMapa = new google.maps.Map(document.getElementById('mapa'), {
				center: coordenadaCentral,
				zoom: 13,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});

			var iconoURL = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAAXNSR0IArs4c6QAAAi5JREFUOE+VlTFrFFEUhb+TKttoUOzUShujEFOI3YLVYrOVfyAQRLBw0d5sIYhV0EaxEDsFlXTbBkFS2pk0gqKFTYrFZiPIdebNfTPv7cwG3GZn3rw595xzz7sjAUb5E8L8OiyUS2C+I/+LD9ONfl29lt10FXDsM5imwv5UexYVLskd97zhewfxCOMQ2EB8zCXNiWrJbxbKneuYXoKtp8URbzHdE/YrKgsmRotyjNrCFcFjg03QUsvrqsLvwvGHiKcYf1M/Evl1VzaAJ4JTCYsZ4g2mc8JuVJzqxu6DNsE+pTbH60vAK8S12q9Gxi3gnQfiuYnbc6ko678GHgCHkelF0AHYUpKlur3CVg2+OOhdg2e1gXmofoDOy8msAZ+bbOZxEfbe4D7oLNgLYLUz1zAFyn6EHK9hDpq1uTPEObf8bgpaaTP1KqHjaTQ6At1xAqdYw7SM2QCYeNZGgm2DXaAPHCGWMa4De+77uADdMtgBDf2w94BZlB9ABRNnNyq82SaAqg/WAcq4eNlBGXoge5hmUX5p7EDYxM91xVTsYvQFRwbLkDJlXDDeIjB1UOiBnGnl4wDsv+QX8hxUQ+9BD4vyW6AagXXKF+y5RZV8sVMkp5IfmFLLvwD6AHbFZ+hXsJ9V1HQSzHwynQCuejO/A98QlzFOezgmwM14oprwp5FaNBcXZTmEX3n400HfwmtFvvOLkIV/rvaxqU9nQn5AkjrzsyEdjensbRVOT1RK4x+yS/ce9hlclgAAAABJRU5ErkJggg==';

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
				document.getElementById('latitudAgencia').value = latitud;
				document.getElementById('longitudAgencia').value = longitud;
			});
		}
	</script>
