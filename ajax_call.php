<?php
	if(isset($_POST['kode'])) {
		$kode = $_POST['kode'];
		
		if($kode == 0) {
			
			$pesan = false;
			
			$pesan = 	json_encode(
							array("BATUK", "PILEK")
						);
			
			die($pesan);
		}
		
		if($kode == 1) {
			
			$pesan = false;
			
			$pesan = 	json_encode(
							array("87,9", "Demam Berdarah Dengue (DBD)")
						);
			
			die($pesan);
		}
	}
?>