<?php
	session_start();
	if(!empty($_SESSION['username_pengelola'])) {
		include('../koneksi.php');
	}
	else {
		echo '
			<script>
				window.location.replace("../");
			</script>
		';
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Diagnosa Penyakit Anak</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="description" content="Tanya Dokter" />
		<meta name="dicoding:email" content="1.muspriandi@gmail.com">
		
		<!-- CSS  -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="../assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="../assets/css/style_pengelola.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
	<body>
		<nav class="light-blue">
			<div class="nav-wrapper mx-3">
				<a href="index.php?hal=dashboard" class="brand-logo hide-on-large-only" style="top: 3px;">
					<img class="mt-1" src="../assets/img/icons/medical-192x192.png" alt="Logo" width="50px;"/>
					<span class="hide-on-small-only judul-text" style="position: relative; top: -12px;">Tanya Dokter</span>
				</a>
				
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Hallo, <?php echo $_SESSION['username_pengelola']; ?>!<i class="material-icons right">arrow_drop_down</i></a></li>
				</ul>
				<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			</div>
		</nav>
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="index.php?hal=pengelola"><i class="material-icons left mr-2">person_outline</i>&nbsp;Pengelola</a></li>
			<li class="divider"></li>
			<li><a href="../"><i class="material-icons left mr-2">exit_to_app</i>&nbsp;Keluar</a></li>
		</ul>
		<ul id="slide-out" class="sidenav sidenav-fixed">
			<li>
			<div class="user-view center">
				<a href="index.php?hal=dashboard" class="brand-logo" style="top: 3px;">
					<img class="mt-1" src="../assets/img/icons/medical-192x192.png" alt="Logo" width="50px;"/>
					<span class="judul-text" style="position: relative; top: -15px;">Tanya Dokter</span>
				</a>
			</div>
				
			</li>
			<li><div class="divider"></div></li>
			<li><a href="index.php?hal=dashboard"><i class="material-icons left">dashboard</i>Dashboard</a></li>
			<li><a href="index.php?hal=pengelola"><i class="material-icons left">people_outline</i>Pengelola</a></li>
			<li><a href="index.php?hal=gejala"><i class="material-icons left">list</i>Gejala</a></li>
			<li><a href="index.php?hal=penyakit"><i class="material-icons left">ac_unit</i>Penyakit</a></li>
			<li><a href="index.php?hal=diagnosa"><i class="material-icons left">trending_up</i>Diagnosa</a></li>
			<li><div class="divider"></div></li>
			<li><a href="../"><i class="material-icons left">exit_to_app</i>Keluar</a></li>
		</ul>
		
		<main class="mx-3">
			<br>