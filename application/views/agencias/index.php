<div class="container-xxl flex-grow-1 container-p-y">
	<div class="content-wrapper">
		<div class="container-xxl flex-grow-1 container-p-y">
			<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Componentes/</span>Agencias</h4>
			<div class="row">
				<div class="col-sm">
					<div class="card mb-4">
						<div class="card-header d-flex justify-content-between align-items-center">
							<h5 class="mb-0">Registro de Agencias</h5>
							<small class="text-muted float-end">Agencias/Sucursales</small>
						</div>
						<div class="card-body">
							<form action="<?php echo site_url('agencias/guardar'); ?>" method="POST" enctype="multipart/form-data" id="formAgencias">
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Nombre de la agencia</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-buildings"></i></span>
												<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Agencia Example" aria-la />
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Direccion</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bxs-map"></i></span>
												<input type="text" id="direccion" name="direccion" class="form-control" placeholder="Av. Example" />
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Email</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text"><i class="bx bx-envelope"></i></span>
												<input type="text" id="email" name="email" class="form-control" placeholder="alguien.genial" />
												<span id="" class="input-group-text">@example.com</span>
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Telefono</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-phone"></i></span>
												<input type="text" id="telefono" name="telefono" class="form-control" placeholder="000 000 0000" />
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Ciudad</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bxs-city"></i></span>
												<input type="text" id="ciudad" name="ciudad" class="form-control" placeholder="Ciudad Example" />
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Provincia</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bxs-map-alt"></i></span>
												<input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia Example" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label" for="">Fecha de Inaguracion</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bxs-calendar"></i></span>
												<input type="date" class="form-control" id="fechaInaguracion" name="fechaInaguracion" />
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Horario</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-time-five"></i></span>
												<input type="text" id="horario" name="horario" class="form-control" placeholder="Lunes - Viernes 00:00 AM - 00:00 PM" />
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Horario Diferido</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text"><i class="bx bx-time-five"></i></span>
												<input type="text" id="horarioDiferido" name="horarioDiferido" class="form-control" placeholder="Sabados - Domingos 00:00 AM - 00:00 PM" />
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Fotografia</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-image-add"></i></span>
												<input type="file" id="fotografia" name="fotografia" accept="img/*" class="form-control" />
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="">Latitud</label>
											<div class="input-group input-group-merge">
												<span id="" class="input-group-text"><i class="bx bx-globe"></i></span>
												<input type="text" id="latitud" name="latitud" class="form-control" placeholder="000000000000000" readonly />
											</div>
										</div>
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
	<script>
		function initMap() {
    var coordenadaCentral = new google.maps.LatLng(-0.9171755208692692, -78.6328634793978);
    var miMapa = new google.maps.Map(document.getElementById('mapa'), {
        center: coordenadaCentral,
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    
    var iconoCasa = {
        url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000"><path d="M12 0l-9 7h6v7h6v-7h6l-9-7z"/></svg>'),
        scaledSize: new google.maps.Size(32, 32) // Ajusta el tamaño según lo necesites
    };

    var marcador = new google.maps.Marker({
        position: coordenadaCentral,
        map: miMapa,
        title: 'Seleccione la ubicación de la Agencia',
        draggable: true,
        icon: iconoCasa // Usar el icono personalizado
    });
    
    google.maps.event.addListener(marcador, 'dragend', function(event) {
        var latitud = this.getPosition().lat();
        var longitud = this.getPosition().lng();
        document.getElementById('latitud').value = latitud;
        document.getElementById('longitud').value = longitud;
    });
}

	</script>
