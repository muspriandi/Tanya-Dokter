<?php
	$server 	= "localhost";
	$username 	= "root";
	$password 	= "";
	$dbname 	= "db_diagnosa_mus";
	
	try {
		$db = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e) {
		echo "Koneksi GAGAL".$e->getMessage();
	}
?>