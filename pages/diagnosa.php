<nav class="teal lighten-2 pl-4 z-depth-2">
	<div class="nav-wrapper">
	<div class="col s12">
		<a href="" class="breadcrumb">Pengelola</a>
		<a href="" class="breadcrumb">Daftar Diagnosa</a>
	</div>
	</div>
</nav>
<div class="row mt-2">
	<div class="col s12 m12 px-0">
		<div class="card light z-depth-2">
			<div class="card-content center">
				<h4 class="teal-text text-lighten-2 mb-0 mt-0">Daftar Diagnosa</h4>
				<p class="light-text mt-0" style="line-height: unset;">List daftar diagnosa para ahli</p>
				<br>
				<a class="btn waves-effect waves-light modal-trigger light-blue my-2 px-5" href="#modal_tambah"><i class="material-icons left mr-0">add_circle_outline</i>&nbsp;Tambah Data</a>
				
				<!-- Modal Tambah -->
				<div id="modal_tambah" class="modal" style="overflow-y: visible;">
					<form method="POST" action="proses_tambah.php">
						<input type="hidden" name="kode" value="3" required readonly/>
						<div class="modal-content center pb-0">
							<h4 class="teal-text text-lighten-2 mb-0 main-judul">Tambah Data</h4>
							<p class="light-text mt-0" style="line-height: unset;">Tambah data diagnosa</p>
							<div class="row mt-3 mb-2 mb-0">
								<div class="input-field col m8 s12 offset-m2 my-2">
									<select name="gejala">
										<option disabled selected>- Pilih Gejala -</option>
										<?php
											$sql = "SELECT * FROM gejala ORDER BY nama_gejala ASC";
											$statement = $db->prepare($sql);
											$statement->execute();
											$results = $statement->fetchAll();
											
											foreach ($results as $result) {
												echo '<option value="'. $result['kode_gejala'] .'">'. $result['nama_gejala'] .' ('. $result['kode_gejala'] .')</option>';
											}
										?>
									</select>
									<label>Pilih Gejala</label>
								</div>
								</br>
								<div class="input-field col m8 s12 offset-m2 my-2">
									<select name="penyakit">
										<option disabled selected>- Pilih Penyakit -</option>
										<?php
											$sql = "SELECT * FROM penyakit ORDER BY nama_penyakit ASC";
											$statement = $db->prepare($sql);
											$statement->execute();
											$results = $statement->fetchAll();
											
											foreach ($results as $result) {
												echo '<option value="'. $result['kode_penyakit'] .'">'. $result['nama_penyakit'] .' ('. $result['kode_penyakit'] .')</option>';
											}
										?>
									</select>
									<label>Pilih Penyakit</label>
								</div>
								<br>
								<div class="input-field col m8 s12 offset-m2 my-2">
									<i class="material-icons prefix">insert_chart</i>
									<input id="c" type="text" name="cf" maxlength="3" required/>
									<label for="c"><em>Certainty Factor</em>(CF)</label>
								</div>
							</div>
						</div>
						<div class="modal-footer" style="height: auto;">
							<a class="modal-close btn waves-effect waves-light blue mb-3 mt-1 mr-2">Batal</a>
							<button type="submit" class="modal-trigger btn waves-effect waves-light teal mb-3 mt-1 mr-3"><i class="material-icons left" style="height: unset; line-height: unset;">add</i>Tambah</button>
						</div>
					</form>
				</div>
				<table class="striped centered responsive-table">
					<thead>
						<tr>
							<th>No.</th>
							<th>ID Diagnosa</th>
							<th>Gejala</th>
							<th>Penyakit</th>
							<th><em>Certainty Factor</em> (CF)</th>
							<th>Pilihan</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$sql = 	"
									SELECT
										`penyakit`.`nama_penyakit`,
										`gejala`.`nama_gejala`,
										`diagnosa`.`CF`,
										`diagnosa`.`kode_penyakit`,
										`diagnosa`.`kode_gejala`,
										`diagnosa`.`id_diagnosa`
									FROM
										`gejala`
									INNER JOIN `diagnosa` ON `gejala`.`kode_gejala` = `diagnosa`.`kode_gejala`
									INNER JOIN `penyakit` ON `penyakit`.`kode_penyakit` = `diagnosa`.`kode_penyakit`
								";
						$statement = $db->prepare($sql);
						$statement->execute();
						$results = $statement->fetchAll();
						
						foreach($results as $index => $result) {
							echo "
								<tr>
									<td>".++$index."</td>
									<td id=id_diagnosa". $index .">".$result['id_diagnosa']."</td>
									<td><span>".$result['nama_gejala']."</span> (<span>".$result['kode_gejala']."</span>)</td>
									<td><span>".$result['nama_penyakit']."</span> (<span>".$result['kode_penyakit']."</span>)</td>
									<td id=cf". $index .">".$result['CF']."</td>
									<td>
										<button value=". $index ." class='modal_hapus_diagnosa btn waves-effect waves-light red mb-3 mt-1 mr-2'><i class='material-icons left'>delete</i>Hapus</button>
									</td>
								</tr>
							";
						}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- modal_hapus_diagnosa -->
<div id="modal_hapus_diagnosa" class="modal">
	<form method="POST" action="proses_hapus.php">
		<input type="hidden" name="kode" value="3" required readonly/>
		<input id="id_diagnosa_1" type="hidden" name="id_diagnosa" required readonly/>
		<div class="modal-content center pb-0">
			<h4 class="teal-text text-lighten-2 mb-0 main-judul">Hapus Data</h4>
			<p class="light-text mt-0" style="line-height: unset;">Hapus data diagnosa</p>
			<br>
			<p class="light-text mt-0" style="line-height: unset;">Apakah Anda yakin ingin menghapus diagnosa dengan ID : <span id="id_diagnosa_2">ID</span></p>
		</div>
		<div class="modal-footer" style="height: auto;">
			<a class="modal-close btn waves-effect waves-light blue mb-3 mt-1 mr-2">Batal</a>
			<button type="submit" class="modal-close btn waves-effect waves-light teal mb-3 mt-1 mr-3">Hapus</button>
		</div>
	</form>
</div>