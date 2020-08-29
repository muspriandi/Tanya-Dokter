<?php
	include('header.php');
?>

	<nav class="teal lighten-2 pl-4 z-depth-2">
		<div class="nav-wrapper">
		<div class="col s12">
			<a href="" class="breadcrumb">Pengelola</a>
			<a href="" class="breadcrumb">Daftar Pengelola</a>
		</div>
		</div>
	</nav>
	<div class="row mt-2">
		<div class="col s12 m12 px-0">
			<div class="card light z-depth-2">
				<div class="card-content center">
					<h4 class="teal-text text-lighten-2 mb-0 mt-0">Daftar Pengelola</h4>
					<p class="light-text mt-0" style="line-height: unset;">List daftar pengelola website</p>
					<br>
					<table class="striped centered responsive-table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Username</th>
								<th>Kata Sandi</th>
								<th>Pilihan</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$sql = "SELECT * FROM pengelola";
							$statement = $db->prepare($sql);
							$statement->execute();
							$results = $statement->fetchAll();
							
							foreach($results as $index => $result) {
								echo "
									<tr>
										<td>".++$index."</td>
										<td id=username". $index .">".$result['username']."</td>
										<td id=kata_sandi". $index .">".$result['kata_sandi']."</td>
										<td>
											<button value=". $index ." class='modal_edit_pengelola btn waves-effect waves-light orange mb-3 mt-1 mr-2'><i class='material-icons left'>edit</i>Ubah</button>
											<button value=". $index ." class='modal_hapus_pengelola btn waves-effect waves-light red mb-3 mt-1 mr-2'><i class='material-icons left'>delete</i>Hapus</button>
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
	
	<!-- modal_edit_pengelola -->
	<div id="modal_edit_pengelola" class="modal">
		<form method="POST" action="proses_ubah.php">
			<input type="hidden" name="kode" value="0" required readonly/>
			<div class="modal-content center pb-0">
				<h4 class="teal-text text-lighten-2 mb-0 main-judul">Ubah Data</h4>
				<p class="light-text mt-0" style="line-height: unset;">Ubah data pengelola sistem</p>
				<div class="row my-2 mb-0">
					<div class="input-field col m8 s12 offset-m2 my-2">
						<i class="material-icons prefix">account_box</i>
						<input id="username_pengelola" type="text" name="username" maxlength="20" required readonly/>
						<label for="username_pengelola"><em>Username</em></label>
					</div>
					</br>
					<div class="input-field col m8 s12 offset-m2 my-2">
						<i class="material-icons prefix">lock</i>
						<input id="kata_sandi_pengelola" type="text" name="kata_sandi" />
						<label for="kata_sandi_pengelola"><em>Kata Sandi</em></label>
					</div>
				</div>
			</div>
			<div class="modal-footer" style="height: auto;">
				<a href="#" class="modal-close btn waves-effect waves-light blue mb-3 mt-1 mr-2">Batal</a>
				<button type="submit" class="modal-close btn waves-effect waves-light teal mb-3 mt-1 mr-3" id="masuk_admin">Ubah</button>
			</div>
		</form>
	</div>
	
	<!-- modal_hapus_pengelola -->
	<div id="modal_hapus_pengelola" class="modal">
		<form method="POST" action="proses_hapus.php">
			<input type="hidden" name="kode" value="0" required readonly/>
			<input id="username_pengelola1" type="hidden" name="username" maxlength="20" required readonly/>
			<div class="modal-content center pb-0">
				<h4 class="teal-text text-lighten-2 mb-0 main-judul">Hapus Data</h4>
				<p class="light-text mt-0" style="line-height: unset;">Hapus data pengelola sistem</p>
				<br>
				<p class="light-text mt-0" style="line-height: unset;">Apakah Anda yakin ingin menghapus pengelola dengan username : <span id="username_pengelola2">username</span></p>
			</div>
			<div class="modal-footer" style="height: auto;">
				<a href="#" class="modal-close btn waves-effect waves-light blue mb-3 mt-1 mr-2">Batal</a>
				<button type="submit" class="modal-close btn waves-effect waves-light teal mb-3 mt-1 mr-3" id="masuk_admin">Hapus</button>
			</div>
		</form>
	</div>
	
<?php
	include('footer.php');
?>