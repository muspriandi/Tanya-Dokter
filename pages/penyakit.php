<nav class="teal lighten-2 pl-4 z-depth-2">
	<div class="nav-wrapper">
	<div class="col s12">
		<a href="" class="breadcrumb">Pengelola</a>
		<a href="" class="breadcrumb">Daftar Penyakit</a>
	</div>
	</div>
</nav>
<div class="row mt-2">
	<div class="col s12 m12 px-0">
		<div class="card light z-depth-2">
			<div class="card-content center">
				<h4 class="teal-text text-lighten-2 mb-0 mt-0">Daftar Penyakit</h4>
				<p class="light-text mt-0" style="line-height: unset;">List daftar penyakit pada anak</p>
				<br>
				<a class="btn waves-effect waves-light modal-trigger light-blue my-2 px-5" href="#modal_tambah"><i class="material-icons left mr-0">add_circle_outline</i>&nbsp;Tambah Data</a>
				
				<!-- Modal Tambah -->
				<div id="modal_tambah" class="modal">
					<form method="POST" action="proses_tambah.php">
						<input type="hidden" name="kode" value="2" required readonly/>
						<div class="modal-content center pb-0">
							<h4 class="teal-text text-lighten-2 mb-0 main-judul">Tambah Data</h4>
							<p class="light-text mt-0" style="line-height: unset;">Tambah data penyakit</p>
							<div class="row mt-3 mb-2 mb-0">
							<?php 
										$sql = "SELECT MAX(kode_penyakit) as kode FROM penyakit";
										$statement = $db->prepare($sql);
										$statement->execute();
										$result = $statement->fetch();
										
										$kode =  substr($result['kode'],0,1);
										$plus =  substr($result['kode'],1,4) + 1;	
										
										switch(strlen((string)$plus)) {
											case 0	: $sisipan = "000"; break;
											case 1	: $sisipan = "000"; break;
											case 2	: $sisipan = "00"; 	break;
											case 3	: $sisipan = "0"; 	break;
											case 4	: $sisipan = ""; 	break;
											
											default : $sisipan = "";
										}
										
										$hasil = $kode."".$sisipan."".$plus;
										
									?>
								<div class="input-field col m8 s12 offset-m2 my-2">
									<i class="material-icons prefix">vpn_key</i>
									<input id="kode" type="text" name="kode_penyakit" value="<?php echo $hasil; ?>" readonly required />
									<label for="kode"><em>Kode Penyakit</em></label>
								</div>
								</br>
								<div class="input-field col m8 s12 offset-m2 my-2">
									<i class="material-icons prefix">looks_one</i>
									<input id="nama" type="text" name="nama_penyakit" required />
									<label for="nama"><em>Nama Penyakit</em></label>
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
							<th>Kode Penyakit</th>
							<th>Nama Penyakit</th>
							<th>Pilihan</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$sql = "SELECT * FROM penyakit";
						$statement = $db->prepare($sql);
						$statement->execute();
						$results = $statement->fetchAll();
						
						foreach($results as $index => $result) {
							echo "
								<tr>
									<td>".++$index."</td>
									<td id=kode_penyakit". $index .">".$result['kode_penyakit']."</td>
									<td id=nama_penyakit". $index .">".$result['nama_penyakit']."</td>
									<td>
										<button value=". $index ." class='modal_edit_penyakit btn waves-effect waves-light orange mb-3 mt-1 mr-2'><i class='material-icons left'>edit</i>Ubah</button>
										<button value=". $index ." class='modal_hapus_penyakit btn waves-effect waves-light red mb-3 mt-1 mr-2'><i class='material-icons left'>delete</i>Hapus</button>
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

<!-- modal_edit_penyakit -->
<div id="modal_edit_penyakit" class="modal">
	<form method="POST" action="proses_ubah.php">
		<input type="hidden" name="kode" value="2" required readonly/>
		<div class="modal-content center pb-0">
			<h4 class="teal-text text-lighten-2 mb-0 main-judul">Ubah Data</h4>
			<p class="light-text mt-0" style="line-height: unset;">Ubah data penyakit</p>
			<div class="row my-2 mb-0">
				<div class="input-field col m8 s12 offset-m2 my-2">
					<i class="material-icons prefix">vpn_key</i>
					<input id="kode_penyakit" type="text" name="kode_penyakit" required readonly />
					<label for="kode_penyakit"><em>Kode Penyakit</em></label>
				</div>
				</br>
				<div class="input-field col m8 s12 offset-m2 my-2">
					<i class="material-icons prefix">looks_one</i>
					<input id="nama_penyakit" type="text" name="nama_penyakit" />
					<label for="nama_penyakit"><em>Nama Pejala</em></label>
				</div>
			</div>
		</div>
		<div class="modal-footer" style="height: auto;">
			<a class="modal-close btn waves-effect waves-light blue mb-3 mt-1 mr-2">Batal</a>
			<button type="submit" class="btn waves-effect waves-light teal mb-3 mt-1 mr-3">Ubah</button>
		</div>
	</form>
</div>

<!-- modal_hapus_penyakit -->
<div id="modal_hapus_penyakit" class="modal">
	<form method="POST" action="proses_hapus.php">
		<input type="hidden" name="kode" value="2" required readonly/>
		<input id="kode_penyakit_1" type="hidden" name="kode_penyakit" required readonly />
		<div class="modal-content center pb-0">
			<h4 class="teal-text text-lighten-2 mb-0 main-judul">Hapus Data</h4>
			<p class="light-text mt-0" style="line-height: unset;">Hapus data penyakit</p>
			<br>
			<p class="light-text mt-0" style="line-height: unset;">Apakah Anda yakin ingin menghapus penyakit dengan Kode : <span id="kode_penyakit_2">Kode</span></p>
		</div>
		<div class="modal-footer" style="height: auto;">
			<a class="modal-close btn waves-effect waves-light blue mb-3 mt-1 mr-2">Batal</a>
			<button type="submit" class="btn waves-effect waves-light teal mb-3 mt-1 mr-3">Hapus</button>
		</div>
	</form>
</div>