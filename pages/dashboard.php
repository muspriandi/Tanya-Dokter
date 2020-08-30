<nav class="teal lighten-2 pl-4 z-depth-2">
	<div class="nav-wrapper">
	<div class="col s12">
		<a href="" class="breadcrumb">Pengelola</a>
		<a href="" class="breadcrumb">Dashboard</a>
	</div>
	</div>
</nav>
<div class="row mt-2">
	<div class="col s12 m12 px-0">
		<div class="card light z-depth-2">
			<div class="card-content center">
				<h4 class="teal-text text-lighten-2 mb-0 mt-0">Status Web</h4>
				<p class="light-text mt-0" style="line-height: unset;">Status terkini website</p>
				<br>
				<div class="row">
					<div class="col s12 m4">
						<div class="card light z-depth-3">
							<a href="index.php?hal=pengelola">
								<div class="card-content center">
									<i class="material-icons medium" style="position: relative; top: 3px;">people_outline</i>
									<h4 class="mt-0 mb-3">- 
									<?php
										$sql = "SELECT COUNT(username) FROM pengelola";
										$statement = $db->prepare($sql);
										$statement->execute();
										echo $statement->fetchColumn();
									?>
									-</h4>
									<p>Pengelola</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col s12 m4">
						<div class="card light z-depth-3">
							<a href="index.php?hal=gejala">
								<div class="card-content center">
									<i class="material-icons medium" style="position: relative; top: 3px;">list</i>
									<h4 class="mt-0 mb-3">- 
									<?php
										$sql = "SELECT COUNT(kode_gejala) FROM gejala";
										$statement = $db->prepare($sql);
										$statement->execute();
										echo $statement->fetchColumn();
									?>
									-</h4>
									<p>Gejala</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col s12 m4">
						<div class="card light z-depth-3">
							<a href="index.php?hal=penyakit">
								<div class="card-content center">
									<i class="material-icons medium" style="position: relative; top: 3px;">ac_unit</i>
									<h4 class="mt-0 mb-3">- 
									<?php
										$sql = "SELECT COUNT(kode_penyakit) FROM penyakit";
										$statement = $db->prepare($sql);
										$statement->execute();
										echo $statement->fetchColumn();
									?>
									-</h4>
									<p>Penyakit</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>