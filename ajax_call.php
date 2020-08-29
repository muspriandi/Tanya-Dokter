<?php
	if(isset($_POST['kode'])) {
		
		include('koneksi.php');
		$kode = $_POST['kode'];
		
		if($kode == 0) {
			
			$sql = "SELECT * FROM gejala ORDER BY nama_gejala ASC";
			$statement = $db->prepare($sql);
			$statement->execute();
			$results = json_encode(
							$statement->fetchAll()
						);
			
			die($results);
		}
		
		if($kode == 1) {
			
			$gejala 	= $_POST['gejala_dominan'];
			$hasil		= array();
			
			for($i=0; $i<count($gejala); $i++) {
				$sql = "
						SELECT 
							`penyakit`.`kode_penyakit`
						FROM
							`penyakit`
						INNER JOIN `diagnosa` ON `diagnosa`.`kode_penyakit` = `penyakit`.`kode_penyakit`
						INNER JOIN `gejala` ON `gejala`.`kode_gejala` = `diagnosa`.`kode_gejala`
						WHERE 
							`gejala`.`kode_gejala` = '".$gejala[$i]."';
					";
				
				$statement = $db->prepare($sql);
				$statement->execute();
				$result = $statement->fetchAll();
				foreach($result as $results) {
					array_push($hasil, $results['kode_penyakit']);
				}
			}
			
			$hipotesa_penyakit = array_search(max(array_count_values($hasil)), array_count_values($hasil));
			
			$hipotesa_gejala	= array();
			
			$sql = "
						SELECT
							`gejala`.`nama_gejala`,
							`gejala`.`kode_gejala`
						FROM
							`diagnosa`
						INNER JOIN `penyakit` ON `penyakit`.`kode_penyakit` = `diagnosa`.`kode_penyakit`
						INNER JOIN `gejala` ON `diagnosa`.`kode_gejala` = `gejala`.`kode_gejala`
						WHERE 
							`penyakit`.`kode_penyakit` = '".$hipotesa_penyakit."';
					";
			
			$statement = $db->prepare($sql);
			$statement->execute();
			$result = $statement->fetchAll();
			foreach($result as $results) {
				array_push($hipotesa_gejala, $results['kode_gejala']);
			}
			
			$hipotesa_gejala_resesif = array_diff($hipotesa_gejala,$gejala);
			$hipotesa_gejala_resesif = array_values($hipotesa_gejala_resesif);
			
			$hasil_hipotesa_gejala_resesif	= array();
			
			for($i=0; $i<count($result); $i++) {
				for($j=0; $j<count($hipotesa_gejala_resesif); $j++) {
					
					if($result[$i]['kode_gejala'] == $hipotesa_gejala_resesif[$j]) {
						
						array_push($hasil_hipotesa_gejala_resesif, $result[$i]);
						$j = 9999;
					}
				}
			}
			
			$results = 	json_encode(
							$hasil_hipotesa_gejala_resesif
						);
			
			die($results);
		}
		
		if($kode == 2) {
			
			$gejala	 			= $_POST['gejala_dominan'];
			$gejala_resesif		= !empty($_POST['gejala_resesif']) ? array_push($gejala, $_POST['gejala_resesif']) : '';
			$gejala_resesif2	= !empty($_POST['gejala_resesif2']) ? array_push($gejala, $_POST['gejala_resesif2']) : '';
			$gejala_resesif3	= !empty($_POST['gejala_resesif3']) ? array_push($gejala, $_POST['gejala_resesif3']) : '';
			
			$cf_sistem	= array();
			
			$sql = "SELECT kode_penyakit FROM penyakit";
			$statement = $db->prepare($sql);
			$statement->execute();
			$result = $statement->fetchAll();
			foreach($result as $results) {
				
				$sql2 = "
						SELECT
							SUM(`diagnosa`.`CF`) AS cf_sistem,
							`penyakit`.`nama_penyakit`
						FROM
							`penyakit`
						INNER JOIN `diagnosa` ON `penyakit`.`kode_penyakit` = `diagnosa`.`kode_penyakit`
						WHERE 
							`penyakit`.`kode_penyakit`='". $results['kode_penyakit'] ."' AND
							`diagnosa`.`kode_gejala` IN (". sprintf("'%s'", implode("','", $gejala )) .");
					";
			
				$statement2 = $db->prepare($sql2);
				$statement2->execute();
				$result2 = $statement2->fetchAll();
				
				foreach($result2 as $result2) {
					array_push($cf_sistem, $result2);
				}
			}
			
			$array_cf_user	= array('0.8','0.6','0.4','0.3','0.3','0.2','0.2','0.1','0.1','0.1');
			$cf_user = 0;
			
			for($i=0; $i<count($gejala); $i++) {
				$cf_user += $array_cf_user[$i];
			}
			
			$hasil_diagnosa = array();
			for($i=0; $i<count($cf_sistem); $i++) {
				
				$hasil_diagnosa[$i]['nama_penyakit'] 	= $cf_sistem[$i]['nama_penyakit'];
				$hasil_diagnosa[$i]['cf_hasil'] 		= $cf_sistem[$i]['cf_sistem'] / $cf_user;
			}
			
			$hasil_paling_mendekati[0] = $hasil_diagnosa[0];
			$hasil_cf_tertinggi = $hasil_diagnosa[0]['cf_hasil'];
			
			for($i=1; $i<count($hasil_diagnosa); $i++) {
				
				if($hasil_cf_tertinggi < $hasil_diagnosa[$i]['cf_hasil']) {
					
					$hasil_cf_tertinggi = $hasil_diagnosa[$i]['cf_hasil'];
					$hasil_paling_mendekati[0] = $hasil_diagnosa[$i];
				}
			}
			
			$results = 	json_encode(
							$hasil_paling_mendekati
						);
			
			die($results);
		}
		
		if($kode == 3) {
			$username 		= $_POST['username'];
			$kata_sandi 	= $_POST['kata_sandi'];
			
			$sql_cek = "SELECT COUNT(username) FROM pengelola WHERE username = '". $username ."'";
			$statement_cek = $db->prepare($sql_cek);
			$statement_cek->execute();
			if($statement_cek->fetchColumn() == 0) {
				$sql = "INSERT INTO pengelola(username, kata_sandi) VALUES ('". $username ."','". $kata_sandi ."')";
				$statement = $db->prepare($sql);
				$statement->execute();
				
				$pesan = 	json_encode(
								"<i class='material-icons left'>check_circle</i>&nbsp;<strong>Berhasil</strong>&nbsp;Menambahkan pengelola"
							);
			}
			else {
				$pesan = 	json_encode(
								"<i class='material-icons left'>info_outline</i>&nbsp;<strong>Username pengelola&nbsp;</strong>telah terdaftar"
							);
			}
			die($pesan);
		}
		
		if($kode == 4) {
			$username 		= $_POST['username'];
			$kata_sandi 	= $_POST['kata_sandi'];
			
			$sql_cek = "SELECT COUNT(username) as jumlah,kata_sandi FROM pengelola WHERE username = '". $username ."'";
			$statement_cek = $db->prepare($sql_cek);
			$statement_cek->execute();
			$result = $statement_cek->fetch();
			
			if($result['jumlah'] == 1) {

				if($result['kata_sandi']  == $kata_sandi) {
					
					$pesan = 	json_encode(
									array("<i class='material-icons left'>check_circle</i>&nbsp;<strong>Berhasil</strong>&nbsp;Masuk!","berhasil")
								);
					
					session_start();
					$_SESSION['username_pengelola'] = $username;
				}
				else {
					$pesan = 	json_encode(
									array("<i class='material-icons left'>info_outline</i>&nbsp;<strong>Username</strong>&nbsp;atau&nbsp;<strong>Kata Sandi&nbsp;</strong>&nbsp;tidak sesuai","gagal")
								);
				}
			}
			else {
				$pesan = 	json_encode(
								array("<i class='material-icons left'>info_outline</i>&nbsp;<strong>Username</strong>&nbsp;atau&nbsp;<strong>Kata Sandi&nbsp;</strong>&nbsp;tidak sesuai","gagal")
							);
			}
			
			die($pesan);
		}
	}
?>