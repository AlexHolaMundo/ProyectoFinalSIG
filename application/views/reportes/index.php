<div class="container-xxl flex-grow-1 container-p-y">
	<div class="content-wrapper">
		<div class="container-xxl flex-grow-1 container-p-y">
			<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Secciones/</span>Reportes</h4>
			<div class="row">
				<div class="col-sm">
					<div class="card mb-4">
						<div class="card-header d-flex justify-content-between align-items-center">
							<h5 class="mb-0">Reportes</h5>
							<small class="text-muted float-end">Agencias/Cajeros/Corresponsales/General</small>
						</div>
						<div class="card-body">
							<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="agencias-tab" data-bs-toggle="tab" data-bs-target="#agencias" type="button" role="tab" aria-controls="agencias" aria-selected="true">Agencias Registradas <i class="bi bi-bank"></i></button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="cajeros-tab" data-bs-toggle="tab" data-bs-target="#cajeros" type="button" role="tab" aria-controls="cajeros" aria-selected="false">Cajeros Registrados <i class="bi bi-cash-coin"></i></button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="corresponsales-tab" data-bs-toggle="tab" data-bs-target="#corresponsales" type="button" role="tab" aria-controls="corresponsales" aria-selected="false">Corresponsales Registrados <i class="bi bi-building"></i></button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="false">Reporte General <i class="bi bi-buildings"></i></button>
								</li>
							</ul>

							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="agencias" role="tabpanel" aria-labelledby="agencias-tab">
									<a href="<?php echo site_url('agencias/index'); ?>" class="btn btn-primary m-1"><i class="bi bi-plus-square-fill"></i> Agregar Nuevo</a>
									<div id="reporteMapaAgencias" style="width: 100%; height:550px;"></div>
								</div>
								<div class="tab-pane fade" id="cajeros" role="tabpanel" aria-labelledby="cajeros-tab">
									<a href="<?php echo site_url('cajeros/index'); ?>" class="btn btn-primary m-1"><i class="bi bi-plus-square-fill"></i> Agregar Nuevo</a>
									<div id="reporteMapaCajeros" style="width: 100%; height:550px;"></div>
								</div>
								<div class="tab-pane fade" id="corresponsales" role="tabpanel" aria-labelledby="corresponsales-tab">
									<a href="<?php echo site_url('corresponsales/index'); ?>" class="btn btn-primary m-1"><i class="bi bi-plus-square-fill"></i> Agregar Nuevo</a>
									<div id="reporteMapaCorresponsales" style="width: 100%; height:550px;"></div>
								</div>
								<div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
									<a href="<?php echo site_url(); ?>" class="btn btn-primary m-1"><i class="bi bi-plus-square-fill"></i> Agregar Nuevo</a>
									<div id="reporteMapaGeneral" style="width: 100%; height:550px;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	var agenciasData = <?php echo json_encode($listadoAgencias); ?>;
	var cajerosData = <?php echo json_encode($listadoCajeros); ?>;
	var corresponsalesData = <?php echo json_encode($listadoCorresponsales); ?>;

	function initMapAgencias() {
		var coordenadaCentral = new google.maps.LatLng(-1.4548176024563322, -78.46150203908074);
		var mapa = new google.maps.Map(document.getElementById('reporteMapaAgencias'), {
			center: coordenadaCentral,
			zoom: 7,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		var iconoURL = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAAXNSR0IArs4c6QAAAi5JREFUOE+VlTFrFFEUhb+TKttoUOzUShujEFOI3YLVYrOVfyAQRLBw0d5sIYhV0EaxEDsFlXTbBkFS2pk0gqKFTYrFZiPIdebNfTPv7cwG3GZn3rw595xzz7sjAUb5E8L8OiyUS2C+I/+LD9ONfl29lt10FXDsM5imwv5UexYVLskd97zhewfxCOMQ2EB8zCXNiWrJbxbKneuYXoKtp8URbzHdE/YrKgsmRotyjNrCFcFjg03QUsvrqsLvwvGHiKcYf1M/Evl1VzaAJ4JTCYsZ4g2mc8JuVJzqxu6DNsE+pTbH60vAK8S12q9Gxi3gnQfiuYnbc6ko678GHgCHkelF0AHYUpKlur3CVg2+OOhdg2e1gXmofoDOy8msAZ+bbOZxEfbe4D7oLNgLYLUz1zAFyn6EHK9hDpq1uTPEObf8bgpaaTP1KqHjaTQ6At1xAqdYw7SM2QCYeNZGgm2DXaAPHCGWMa4De+77uADdMtgBDf2w94BZlB9ABRNnNyq82SaAqg/WAcq4eNlBGXoge5hmUX5p7EDYxM91xVTsYvQFRwbLkDJlXDDeIjB1UOiBnGnl4wDsv+QX8hxUQ+9BD4vyW6AagXXKF+y5RZV8sVMkp5IfmFLLvwD6AHbFZ+hXsJ9V1HQSzHwynQCuejO/A98QlzFOezgmwM14oprwp5FaNBcXZTmEX3n400HfwmtFvvOLkIV/rvaxqU9nQn5AkjrzsyEdjensbRVOT1RK4x+yS/ce9hlclgAAAABJRU5ErkJggg==';

		agenciasData.forEach(function(agencia) {
			var coordenadaTemporal = new google.maps.LatLng(agencia.latitudAgencia, agencia.longitudAgencia);
			var marcador = new google.maps.Marker({
				position: coordenadaTemporal,
				map: mapa,
				title: agencia.nombre,
				icon: {
					url: iconoURL,
					scaledSize: new google.maps.Size(30, 30)
				}
			});
		});
	}

	function initMapCajeros() {
		var coordenadaCentral = new google.maps.LatLng(-1.4548176024563322, -78.46150203908074);
		var mapa = new google.maps.Map(document.getElementById('reporteMapaCajeros'), {
			center: coordenadaCentral,
			zoom: 7,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		var iconoURL = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAAXNSR0IArs4c6QAAAh5JREFUOE+F1D1rlEEUBeDnBrUQQfEDFKuIYhNUUMFKrERU2MoyEkGwsYm2Vv4AWbFTISCWCtuInYWYQglaCGoTiJhOG20jjNnZ2X0/duNusQzz3jlz7jl3Tqj9Aqn6Y2xdr26uc2nZ6q/7h3dJcaa+HVKjaHBZuWdr7L94F6X2FPFp+qmQL6vTqrFL/MaeAVOO4ikO4jhWsT5OaCLoHPbhPX7h6pBpUcFCYolYJHWHmo5J0WTXQwezWMtqtjpZEJYki0F3IHxmty1xr7Dvd5T3i1w9SSeYTdNAN7XpFkKHcA0P8QMXhW99YUsHmWkGDWtDM+vSjZgW0CNYLlrX627hceFatd8ArTRYkDUdtf+MmCf1WfYP78ZLYUVyrtzS25ycTkhV+63hL0aNQIcH7iSe4+eEaaraz5pG3ahcPmJa2r+E19XFueYz7hMvKk2jQyruD0HH2o/FkLplyK/gBvYX8LPYjpP4WmQZjNS4ptnNUfuZaTgh2RssJzYK6E08wV08GIDWmQ6Grel+Maq0/4i4TXq1+VJWsCO4njhMXCb1pWlp2gCdwJQDxBvSXCOxBqbNb+l+JWcxqryo2vDPBKcTH4gvpAv9KRi1F3pSy6iWs033q7ibSZzHn+BjK6X+136Gb76oEtJVoLSjOKfDeKBMNipWSevTkr9ckaOvCpTWnBbt3hI7pwd2g8734FgKGzlQWkaN53IVchO/Tdr8BwAf6BrnWLZ+AAAAAElFTkSuQmCC';

		cajerosData.forEach(function(cajero) {
			var coordenadaTemporal = new google.maps.LatLng(cajero.latitudCajero, cajero.longitudCajero);
			var marcador = new google.maps.Marker({
				position: coordenadaTemporal,
				map: mapa,
				title: cajero.nombre,
				icon: {
					url: iconoURL,
					scaledSize: new google.maps.Size(30, 30)
				}
			});
		});
	}

	function initMapCorresponsales() {
		var coordenadaCentral = new google.maps.LatLng(-1.4548176024563322, -78.46150203908074);
		var mapa = new google.maps.Map(document.getElementById('reporteMapaCorresponsales'), {
			center: coordenadaCentral,
			zoom: 7,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		var iconoURL = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAAXNSR0IArs4c6QAAAiNJREFUOE991T9rFFEUBfDf1UKDaGlhZSVErGIg22idQqwEGwsrSfALpPALpFcUFGxjbcCPYPyDYCchiKD4AVSMVa47M2933u5OstXbN++dOefec+6E6hfI9n9Z9RuzW/Xjdl0f7I5OLwzgncdKe2L23ty1+EEeTPjFwNnJhdvJK5ztxTTYWdTUGltezzM8aB5WTBc0vcR9fAj+zpSl4PXKY4VcEs5IRzPy52q6g7tYxpehMvc1iD1yDUvEv0Wmvaoa9EB4JP0IXiSruBXsJh+JvZBr2YL6N1PTuUYW0FgmvwmHMt6RI2zgKTbxDHsoTBWmdY16TTvCXRnLIfeTm/iFT7hEXCH38fME0AUfFNBS0+O81+13NQ1LciK/wzuNJ8I96dyA7xuGDwurYfkT0Mpto+BtZ53hnBGvQzb+bUGDzRyqaWWj9bGEN2MJ2zK2JoHtwpRnk0NKo0pH2yB068pSM92PCtRWcDW5iPc4UkBDjrJtlCsojZqzVFX/9bEtaqbTRgXfJkxb0LAhByw1UNMOlO2xgbdwR7gmPcafzqfeYSSsyrhF7o5D0Jq/T9Rs99eDN+NUTEBr9zZD5ZACutjH48wf6+OoTUHn5kABnSaqin1rxw60lR8lph3CyUyL/KBp1LztZuVXr+y6z3fia2+p9sQp4Yb0u41pPSQ6Qs0gbwb6wkC5jM+4MKVR+3Fhhi4UtnnZ9X5I17k+7lNwXMgWSsF/ksgFJ6jNjTsAAAAASUVORK5CYII=';

		corresponsalesData.forEach(function(corresponsal) {
			var coordenadaTemporal = new google.maps.LatLng(corresponsal.latitudCorresponsal, corresponsal.longitudCorresponsal);
			var marcador = new google.maps.Marker({
				position: coordenadaTemporal,
				map: mapa,
				title: corresponsal.nombre,
				icon: {
					url: iconoURL,
					scaledSize: new google.maps.Size(30, 30)
				}
			});
		});
	}

	function initMapGeneral() {
		var coordenadaCentral = new google.maps.LatLng(-1.4548176024563322, -78.46150203908074);
		var mapa = new google.maps.Map(document.getElementById('reporteMapaGeneral'), {
			center: coordenadaCentral,
			zoom: 7,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});

		agenciasData.forEach(function(agencia) {
			var iconoURL = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAAXNSR0IArs4c6QAAAi5JREFUOE+VlTFrFFEUhb+TKttoUOzUShujEFOI3YLVYrOVfyAQRLBw0d5sIYhV0EaxEDsFlXTbBkFS2pk0gqKFTYrFZiPIdebNfTPv7cwG3GZn3rw595xzz7sjAUb5E8L8OiyUS2C+I/+LD9ONfl29lt10FXDsM5imwv5UexYVLskd97zhewfxCOMQ2EB8zCXNiWrJbxbKneuYXoKtp8URbzHdE/YrKgsmRotyjNrCFcFjg03QUsvrqsLvwvGHiKcYf1M/Evl1VzaAJ4JTCYsZ4g2mc8JuVJzqxu6DNsE+pTbH60vAK8S12q9Gxi3gnQfiuYnbc6ko678GHgCHkelF0AHYUpKlur3CVg2+OOhdg2e1gXmofoDOy8msAZ+bbOZxEfbe4D7oLNgLYLUz1zAFyn6EHK9hDpq1uTPEObf8bgpaaTP1KqHjaTQ6At1xAqdYw7SM2QCYeNZGgm2DXaAPHCGWMa4De+77uADdMtgBDf2w94BZlB9ABRNnNyq82SaAqg/WAcq4eNlBGXoge5hmUX5p7EDYxM91xVTsYvQFRwbLkDJlXDDeIjB1UOiBnGnl4wDsv+QX8hxUQ+9BD4vyW6AagXXKF+y5RZV8sVMkp5IfmFLLvwD6AHbFZ+hXsJ9V1HQSzHwynQCuejO/A98QlzFOezgmwM14oprwp5FaNBcXZTmEX3n400HfwmtFvvOLkIV/rvaxqU9nQn5AkjrzsyEdjensbRVOT1RK4x+yS/ce9hlclgAAAABJRU5ErkJggg==';
			var coordenadaTemporal = new google.maps.LatLng(agencia.latitudAgencia, agencia.longitudAgencia);
			var marcador = new google.maps.Marker({
				position: coordenadaTemporal,
				map: mapa,
				title: agencia.nombre,
				icon: {
					url: iconoURL,
					scaledSize: new google.maps.Size(25, 25)
				}
			});
		});

		cajerosData.forEach(function(cajero) {
			var iconoURL = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAAXNSR0IArs4c6QAAAh5JREFUOE+F1D1rlEEUBeDnBrUQQfEDFKuIYhNUUMFKrERU2MoyEkGwsYm2Vv4AWbFTISCWCtuInYWYQglaCGoTiJhOG20jjNnZ2X0/duNusQzz3jlz7jl3Tqj9Aqn6Y2xdr26uc2nZ6q/7h3dJcaa+HVKjaHBZuWdr7L94F6X2FPFp+qmQL6vTqrFL/MaeAVOO4ikO4jhWsT5OaCLoHPbhPX7h6pBpUcFCYolYJHWHmo5J0WTXQwezWMtqtjpZEJYki0F3IHxmty1xr7Dvd5T3i1w9SSeYTdNAN7XpFkKHcA0P8QMXhW99YUsHmWkGDWtDM+vSjZgW0CNYLlrX627hceFatd8ArTRYkDUdtf+MmCf1WfYP78ZLYUVyrtzS25ycTkhV+63hL0aNQIcH7iSe4+eEaaraz5pG3ahcPmJa2r+E19XFueYz7hMvKk2jQyruD0HH2o/FkLplyK/gBvYX8LPYjpP4WmQZjNS4ptnNUfuZaTgh2RssJzYK6E08wV08GIDWmQ6Grel+Maq0/4i4TXq1+VJWsCO4njhMXCb1pWlp2gCdwJQDxBvSXCOxBqbNb+l+JWcxqryo2vDPBKcTH4gvpAv9KRi1F3pSy6iWs033q7ibSZzHn+BjK6X+136Gb76oEtJVoLSjOKfDeKBMNipWSevTkr9ckaOvCpTWnBbt3hI7pwd2g8734FgKGzlQWkaN53IVchO/Tdr8BwAf6BrnWLZ+AAAAAElFTkSuQmCC';
			var coordenadaTemporal = new google.maps.LatLng(cajero.latitudCajero, cajero.longitudCajero);
			var marcador = new google.maps.Marker({
				position: coordenadaTemporal,
				map: mapa,
				title: cajero.nombre,
				icon: {
					url: iconoURL,
					scaledSize: new google.maps.Size(25, 25)
				}
			});
		});

		corresponsalesData.forEach(function(corresponsal) {
			var iconoURL = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAAAXNSR0IArs4c6QAAAiNJREFUOE991T9rFFEUBfDf1UKDaGlhZSVErGIg22idQqwEGwsrSfALpPALpFcUFGxjbcCPYPyDYCchiKD4AVSMVa47M2933u5OstXbN++dOefec+6E6hfI9n9Z9RuzW/Xjdl0f7I5OLwzgncdKe2L23ty1+EEeTPjFwNnJhdvJK5ztxTTYWdTUGltezzM8aB5WTBc0vcR9fAj+zpSl4PXKY4VcEs5IRzPy52q6g7tYxpehMvc1iD1yDUvEv0Wmvaoa9EB4JP0IXiSruBXsJh+JvZBr2YL6N1PTuUYW0FgmvwmHMt6RI2zgKTbxDHsoTBWmdY16TTvCXRnLIfeTm/iFT7hEXCH38fME0AUfFNBS0+O81+13NQ1LciK/wzuNJ8I96dyA7xuGDwurYfkT0Mpto+BtZ53hnBGvQzb+bUGDzRyqaWWj9bGEN2MJ2zK2JoHtwpRnk0NKo0pH2yB068pSM92PCtRWcDW5iPc4UkBDjrJtlCsojZqzVFX/9bEtaqbTRgXfJkxb0LAhByw1UNMOlO2xgbdwR7gmPcafzqfeYSSsyrhF7o5D0Jq/T9Rs99eDN+NUTEBr9zZD5ZACutjH48wf6+OoTUHn5kABnSaqin1rxw60lR8lph3CyUyL/KBp1LztZuVXr+y6z3fia2+p9sQp4Yb0u41pPSQ6Qs0gbwb6wkC5jM+4MKVR+3Fhhi4UtnnZ9X5I17k+7lNwXMgWSsF/ksgFJ6jNjTsAAAAASUVORK5CYII=';
			var coordenadaTemporal = new google.maps.LatLng(corresponsal.latitudCorresponsal, corresponsal.longitudCorresponsal);
			var marcador = new google.maps.Marker({
				position: coordenadaTemporal,
				map: mapa,
				title: corresponsal.nombre,
				icon: {
					url: iconoURL,
					scaledSize: new google.maps.Size(25, 25)
				}
			});
		});
	}

	// Llama a las funciones de inicialización después de que la página haya terminado de cargar
	window.onload = function() {
		initMapAgencias();
		initMapCajeros();
		initMapCorresponsales();
		initMapGeneral();
	};
</script>
