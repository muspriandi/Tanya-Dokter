<nav class="teal lighten-2 pl-4 z-depth-2">
	<div class="nav-wrapper">
	<div class="col s12">
		<a href="" class="breadcrumb">Pengelola</a>
		<a href="" class="breadcrumb">Daftar Gejala</a>
	</div>
	</div>
</nav>
<div class="row mt-2">
	<div class="col s12 m12 px-0">
		<div class="card light z-depth-2">
			<div class="card-content center">
				<h4 class="teal-text text-lighten-2 mb-0 mt-0">Daftar Gejala</h4>
				<p class="light-text mt-0" style="line-height: unset;">List daftar gejala-gejala pada anak</p>
				<br>
				<a class="btn waves-effect waves-light modal-trigger light-blue my-2 px-5" href="#modal_tambah"><i class="material-icons left mr-0">add_circle_outline</i>&nbsp;Tambah Data</a>
				
				<!-- Modal Tambah -->
				<div id="modal_tambah" class="modal">
					<form method="POST" action="proses_tambah.php">
						<input type="hidden" name="kode" value="1" required readonly/>
						<div class="modal-content center pb-0">
							<h4 class="teal-text text-lighten-2 mb-0 main-judul">Tambah Data</h4>
							<p class="light-text mt-0" style="line-height: unset;">Tambah data gejala</p>
							<div class="row mt-3 mb-2 mb-0">
							<?php 
										$sql = "SELECT MAX(kode_gejala) as kode FROM gejala";
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
									<input id="kode" type="text" name="kode_gejala" value="<?php echo $hasil; ?>" readonly required/>
									<label for="kode"><em>Kode Gejala</em></label>
								</div>
								</br>
								<div class="input-field col m8 s12 offset-m2 my-2">
									<i class="material-icons prefix">looks_one</i>
									<input id="nama" type="text" name="nama_gejala" required />
									<label for="nama"><em>Nama Gejala</em></label>
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
							<th>Kode Gejala</th>
							<th>Nama Gejala</th>
							<th>Pilihan</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$sql = "SELECT * FROM gejala";
						$statement = $db->prepare($sql);
						$statement->execute();
						$results = $statement->fetchAll();
						
						foreach($results as $index => $result) {
							echo "
								<tr>
									<td>".++$index."</td>
									<td id=kode_gejala". $index .">".$result['kode_gejala']."</td>
									<td id=nama_gejala". $index .">".$result['nama_gejala']."</td>
									<td>
										<button value=". $index ." class='modal_edit_gejala btn waves-effect waves-light orange mb-3 mt-1 mr-2'><i class='material-icons left'>edit</i>Ubah</button>
										<button value=". $index ." class='modal_hapus_gejala btn waves-effect waves-light red mb-3 mt-1 mr-2'><i class='material-icons left'>delete</i>Hapus</button>
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

<!-- modal_edit_gejala -->
<div id="modal_edit_gejala" class="modal">
	<form method="POST" action="proses_ubah.php">
		<input type="hidden" name="kode" value="1" required readonly/>
		<div class="modal-content center pb-0">
			<h4 class="teal-text text-lighten-2 mb-0 main-judul">Ubah Data</h4>
			<p class="light-text mt-0" style="line-height: unset;">Ubah data gejala</p>
			<div class="row my-2 mb-0">
				<div class="input-field col m8 s12 offset-m2 my-2">
					<i class="material-icons prefix">vpn_key</i>
					<input id="kode_gejala" type="text" name="kode_gejala" required readonly />
					<label for="kode_gejala"><em>Kode Gejala</em></label>
				</div>
				</br>
				<div class="input-field col m8 s12 offset-m2 my-2">
					<i class="material-icons prefix">looks_one</i>
					<input id="nama_gejala" type="text" name="nama_gejala" required />
					<label for="nama_gejala"><em>Nama Gejala</em></label>
				</div>
			</div>
		</div>
		<div class="modal-footer" style="height: auto;">
			<a class="modal-close btn waves-effect waves-light blue mb-3 mt-1 mr-2">Batal</a>
			<button type="submit" class="btn waves-effect waves-light teal mb-3 mt-1 mr-3">Ubah</button>
		</div>
	</form>
</div>

<!-- modal_hapus_gejala -->
<div id="modal_hapus_gejala" class="modal">
	<form method="POST" action="proses_hapus.php">
		<input type="hidden" name="kode" value="1" required readonly/>
		<input id="kode_gejala_1" type="hidden" name="kode_gejala" required readonly/>
		<div class="modal-content center pb-0">
			<h4 class="teal-text text-lighten-2 mb-0 main-judul">Hapus Data</h4>
			<p class="light-text mt-0" style="line-height: unset;">Hapus data gejala</p>
			<br>
			<p class="light-text mt-0" style="line-height: unset;">Apakah Anda yakin ingin menghapus gejala dengan Kode : <span id="kode_gejala_2">Kode</span></p>
		</div>
		<div class="modal-footer" style="height: auto;">
			<a class="modal-close btn waves-effect waves-light blue mb-3 mt-1 mr-2">Batal</a>
			<button type="submit" class="modal-close btn waves-effect waves-light teal mb-3 mt-1 mr-3">Hapus</button>
		</div>
	</form>
</div>