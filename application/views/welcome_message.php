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
							<?php if (!empty($listadoAgencias)) : ?>
							<h3 class="card-title mb-2 text-center"><?php echo count($listadoAgencias); ?></h3>
							<h5 class="text-warning fw-semibold text-center"> Registradas</h5>
							<?php else : ?>
							<h3 class="card-title mb-2 text-center">0</h3>
							<h5 class="text-warning fw-semibold text-center"> Registradas</h5>
							<?php endif; ?>
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
							<?php if (!empty($listadoCajeros)) : ?>
							<h3 class="card-title mb-2 text-center"><?php echo count($listadoCajeros); ?></h3>
							<h5 class="text-success fw-semibold text-center"> Registrados</h5>
							<?php else : ?>
							<h3 class="card-title mb-2 text-center">0</h3>
							<h5 class="text-success fw-semibold text-center"> Registrados</h5>
							<?php endif; ?>
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
							<?php if (!empty($listadoCorresponsales)) : ?>
								<h3 class="card-title mb-2 text-center"><?php echo count($listadoCorresponsales); ?></h3>
								<h5 class="text-danger fw-semibold text-center">Registrados</h5>
							<?php else : ?>
								<h3 class="card-title mb-2 text-center">0</h3>
								<h5 class="text-danger fw-semibold text-center">Registrados</h5>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-4 col-md-12 col-6 mb-4">
    <a href="<?php echo site_url('reportes/index'); ?>" class="card">
        <div class="card-body">
            <h4 class="fw-semibold d-block mb-1 card-title  text-center">Reportes</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0" style="width: 60px;height:60px; background-color:#F5F5F9; border-radius:100%; display:flex; justify-content:center; align-items:center">
                            <i class='bx bx-map' style="color:#00e3fe"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="card-title mb-2 text-center">
                        <?php
                            $totalGeneral = $totalAgencias + $totalCajeros + $totalCorresponsales;
                            echo $totalGeneral;
                        ?>
                    </h3>
                    <h5 class="text-info fw-semibold text-center">En total</h5>
                </div>
            </div>
        </div>
    </a>
</div>

	</div>
</div>
