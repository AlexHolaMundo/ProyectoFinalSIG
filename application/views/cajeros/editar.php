<div class="container-xxl flex-grow-1 container-p-y">
	<div class="content-wrapper">
		<div class="container-xxl flex-grow-1 container-p-y">
			<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Secciones/</span>Cajeros</h4>
			<div class="row">
				<div class="col-sm">
					<div class="card mb-4">
						<div class="card-header d-flex justify-content-between align-items-center">
							<h5 class="mb-0">Editar Cajero</h5>
							<small class="text-muted float-end">Cajeros</small>
						</div>
						<div class="card-body">
							<form action="<?php echo site_url('cajeros/actualizarCajero'); ?>" method="POST" enctype="multipart/form-data" id="formCajeros">
								<input type="hidden" name="idAgencia" id="idCajero" value="<?php echo $cajeroEditar->idCajero ?>">
								<div class="mb-3">
									<label class="form-label" for="id_agencia">Nombre Agencia</label>
									<div class="input-group input-group-merge">
										<span class="input-group-text"><i class="bx bxs-map-alt"></i></span>
										<select id="id_agencia" name="id_agencia" class="form-select">
											<option value="">Seleccione una agencia</option>
											<?php foreach ($listadoAgencias as $agencia) : ?>
												<option value="<?php echo $agencia->idAgencia; ?>" <?php if (isset($cajeroEditar->id_agencia) && $agencia->idAgencia == $cajeroEditar->id_agencia) echo 'selected'; ?>><?php echo $agencia->nombre; ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Estado</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-cog"></i></span>
												<select type="text" class="form-select" id="estado" name="estado" placeholder="Activo" value="<?php echo $cajeroEditar->estado ?>">
													<option value="activo">Activo</option>
													<option value="inactivo">Inactivo</option>
													<option value="mantenimiento">En mantenimiento</option>
													<option value="fueraServicio">Fuera de Servicio</option>
												</select>
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Tipo</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-caret-right"></i></span>
												<select type="text" id="tipo" name="tipo" class="form-select" placeholder="Cash" value="<?php echo $cajeroEditar->tipo ?>">
													<option value="cash">Cash</option>
													<option value="cheque">Full</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Provincia</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text"><i class="bx bxs-map-alt"></i></span>
												<input type="text" id="provincia" name="provincia" class="form-control" placeholder="El Oro" value="<?php echo $cajeroEditar->provincia ?>" />
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Ciudad</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-buildings"></i></span>
												<input type="text" id="ciudad" name="ciudad" class="form-control" placeholder="Machala" value="<?php echo $cajeroEditar->ciudad ?>" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Fotografia Actual</label>
											<br>
											<?php if ($cajeroEditar->fotografia) : ?>
												<img src="<?php echo base_url('uploads/cajeros/') . $cajeroEditar->fotografia; ?>" alt="Fotografía Actual" style="max-width: 200px;" />
											<?php else : ?>
												<p>No hay fotografía disponible</p>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-md-6">
										<label class="form-label" for="">Actualizar Fotografia (Opcional)</label>
										<span id="" class="input-group-text"><i class="bx bx-image-add"></i></span>
										<input type="file" class="form-control" id="nueva_foto_caj" name="nueva_foto_caj">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Latitud</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-globe"></i></span>
												<input type="text" id="latitudCajero" name="latitudCajero" class="form-control" placeholder="000000000000000" readonly value="<?php echo $cajeroEditar->latitudCajero ?>" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Longitud</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-globe"></i></span>
												<input type="text" id="longitudCajero" name="longitudCajero" class="form-control" placeholder="000000000000000" readonly value="<?php echo $cajeroEditar->longitudCajero ?>" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 m-2">
										<legend class="text-center">Arrastra el marcador hacia la ubicacion</legend>
										<div id="mapaCajeros" style="width: 100%; height:310px; border-radius:5px;"></div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Actualizar</button>
								<a type="" href="<?php echo site_url('cajeros/index'); ?>" class="btn btn-warning">Cancelar </a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function initMap() {
			var coordenadaCentral = new google.maps.LatLng(<?php echo $cajeroEditar->latitudCajero; ?>, <?php echo $cajeroEditar->longitudCajero; ?>);
			var miMapa = new google.maps.Map(document.getElementById('mapaCajeros'), {
				center: coordenadaCentral,
				zoom: 13,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});

			var iconoURL = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAAXNSR0IArs4c6QAAAh5JREFUOE+F1D1rlEEUBeDnBrUQQfEDFKuIYhNUUMFKrERU2MoyEkGwsYm2Vv4AWbFTISCWCtuInYWYQglaCGoTiJhOG20jjNnZ2X0/duNusQzz3jlz7jl3Tqj9Aqn6Y2xdr26uc2nZ6q/7h3dJcaa+HVKjaHBZuWdr7L94F6X2FPFp+qmQL6vTqrFL/MaeAVOO4ikO4jhWsT5OaCLoHPbhPX7h6pBpUcFCYolYJHWHmo5J0WTXQwezWMtqtjpZEJYki0F3IHxmty1xr7Dvd5T3i1w9SSeYTdNAN7XpFkKHcA0P8QMXhW99YUsHmWkGDWtDM+vSjZgW0CNYLlrX627hceFatd8ArTRYkDUdtf+MmCf1WfYP78ZLYUVyrtzS25ycTkhV+63hL0aNQIcH7iSe4+eEaaraz5pG3ahcPmJa2r+E19XFueYz7hMvKk2jQyruD0HH2o/FkLplyK/gBvYX8LPYjpP4WmQZjNS4ptnNUfuZaTgh2RssJzYK6E08wV08GIDWmQ6Grel+Maq0/4i4TXq1+VJWsCO4njhMXCb1pWlp2gCdwJQDxBvSXCOxBqbNb+l+JWcxqryo2vDPBKcTH4gvpAv9KRi1F3pSy6iWs033q7ibSZzHn+BjK6X+136Gb76oEtJVoLSjOKfDeKBMNipWSevTkr9ckaOvCpTWnBbt3hI7pwd2g8734FgKGzlQWkaN53IVchO/Tdr8BwAf6BrnWLZ+AAAAAElFTkSuQmCC';

			var marcador = new google.maps.Marker({
				position: coordenadaCentral,
				map: miMapa,
				title: 'Seleccione la ubicación del Cajero',
				draggable: true,
				icon: {
					url: iconoURL,
					scaledSize: new google.maps.Size(25, 25)
				}
			});

			google.maps.event.addListener(marcador, 'dragend', function(event) {
				var latitud = this.getPosition().lat();
				var longitud = this.getPosition().lng();
				document.getElementById('latitudCajero').value = latitud;
				document.getElementById('longitudCajero').value = longitud;
			});
		}
	</script>
