<?php
	if(isset($_POST['kode'])) {
		
		include('../koneksi.php');
		$kode = $_POST['kode'];
		
		if($kode == 0) {
			
			$username		= $_POST['username'];
			
			$sql = "DELETE FROM pengelola WHERE username='". $username ."'";
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