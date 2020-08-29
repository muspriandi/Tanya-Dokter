<?php
	if(isset($_POST['kode'])) {
		
		include('../koneksi.php');
		$kode = $_POST['kode'];
		
		if($kode == 0) {
			
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
	}
?>