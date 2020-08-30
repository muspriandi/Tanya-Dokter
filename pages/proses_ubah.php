<?php
	if(isset($_POST['kode'])) {
		
		include('../koneksi.php');
		$kode = $_POST['kode'];
		
		if($kode == 0) {
			
			try {
				$username		= $_POST['username'];
				$kata_sandi		= $_POST['kata_sandi'];
				
				$sql = "UPDATE pengelola SET kata_sandi='". $kata_sandi ."' WHERE username='". $username ."'";
				$statement = $db->prepare($sql);
				$statement->execute();
				
				echo '
					<script>
						window.history.back();
					</script>
				';
			}
			catch(exception $x) {
				echo '
					<script>
						window.history.back();
					</script>
				';
			}
		}
		
		if($kode == 1) {
			
			try {
				$kode_gejala		= $_POST['kode_gejala'];
				$nama_gejala		= $_POST['nama_gejala'];
				
				$sql = "UPDATE gejala SET nama_gejala='". $nama_gejala ."' WHERE kode_gejala='". $kode_gejala ."'";
				$statement = $db->prepare($sql);
				$statement->execute();
				
				echo '
					<script>
						window.history.back();
					</script>
				';
			}
			catch(exception $x) {
				echo '
					<script>
						window.history.back();
					</script>
				';
			}
		}
		
		if($kode == 2) {
			
			try {
				$kode_penyakit		= $_POST['kode_penyakit'];
				$nama_penyakit		= $_POST['nama_penyakit'];
				
				$sql = "UPDATE penyakit SET nama_penyakit='". $nama_penyakit ."' WHERE kode_penyakit='". $kode_penyakit ."'";
				$statement = $db->prepare($sql);
				$statement->execute();
				
				echo '
					<script>
						window.history.back();
					</script>
				';
			}
			catch(exception $x) {
				echo '
					<script>
						window.history.back();
					</script>
				';
			}
		}
	}
?>