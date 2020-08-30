<?php
	if(isset($_POST['kode'])) {
		
		include('../koneksi.php');
		$kode = $_POST['kode'];
		
		if($kode == 0) {
			
			try {
				$username		= $_POST['username'];
				$kata_sandi		= $_POST['kata_sandi'];
				
				$sql = "INSERT INTO pengelola(username, kata_sandi) VALUES ('" .$username ."', '" .$kata_sandi ."')";
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
				
				$sql = "INSERT INTO gejala(kode_gejala, nama_gejala) VALUES ('" .$kode_gejala ."', '" .$nama_gejala ."')";
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
				$kode_penyakit	= $_POST['kode_penyakit'];
				$nama_penyakit	= $_POST['nama_penyakit'];
				
				$sql = "INSERT INTO penyakit(kode_penyakit, nama_penyakit) VALUES ('" .$kode_penyakit ."', '" .$nama_penyakit ."')";
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
		
		if($kode == 3) {
			
			try {
				$kode_penyakit	= $_POST['penyakit'];
				$kode_gejala	= $_POST['gejala'];
				$cf				= $_POST['cf'];
				
				$sql = "INSERT INTO diagnosa(kode_penyakit, kode_gejala, cf) VALUES ('" .$kode_penyakit ."', '" .$kode_gejala ."','" .$cf ."')";
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