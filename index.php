<?php
	include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Diagnosa Penyakit Anak</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="description" content="Tanya Dokter" />
		
		<!-- CSS  -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="./assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="./assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
	<body>
		<!-- Navigasi -->
		<nav style="box-shadow: none;" class="p-3" role="navigation">
			<div class="nav-wrapper container">
				<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				<a id="logo-container" href="#" class="brand-logo">
					<img class="mt-1" src="./assets/img/icons/medical-192x192.png" alt="Logo" width="50px;"/>
					<span class="hide-on-small-only judul-text" style="position: relative; top: -12px;">Tanya Dokter</span>
				</a>
				<ul class="right hide-on-med-and-down">
					<li><a class="tooltipped btn waves-effect waves-light pulse" href="#" data-position="bottom" data-tooltip="Masuk Sebagai Pengelola" id="masuk"><i class="material-icons left">exit_to_app</i>Masuk</a></li>
				</ul>
			</div>
			<div class="progress-container" style="display: none;">
				<div class="progress-bar teal lighten-2"></div>
			</div>
		</nav>
		<ul id="slide-out" class="sidenav">
			<li>
				<a href="#perkenalan">
					<img class="mt-1" src="./assets/img/icons/medical-192x192.png" alt="Logo" width="50px;"/> 
					<span class="teal-text lighten-2 ml-2" style="position: relative; top: -18px; font-size: 20px; font-weight: normal;">Tanya Dokter</span>
				</a>
			</li>
			<li><div class="divider"></div></li>
			<li><a class="waves-effect" href="#perkenalan">Perkenalan</a></li>
			<li><a class="waves-effect" href="#panduan">Panduan Penggunaan</a></li>
			<li><a class="waves-effect" href="#tanya-dokter">Tanya Dokter</a></li>
			<li><a class="waves-effect" href="#artikel">Artikel</a></li>
			<li><a class="waves-effect" href="#tentang">Tentang</a></li>
		</ul>
		
		<!-- Tab Perkenalan -->
		<div id="perkenalan">
			<div id="index-banner" class="parallax-container" style="min-height: 425px;">
				<div class="section no-pad-bot">
					<div class="container mt-5 right-align">
						<br><br>
						<h1 class="header white-text" style="text-shadow: 3px 3px #00897b;'">Tanya Dokter</h1>
						<h5 class="header col s12 light-text" style="text-shadow: 2px 2px #757575;">Aplikasi Diagnosa Penyakit Anak Melalui Pendekatan Sistem Pakar Menggunakan <em>Certainty Factor</em>.</h5>
						<br><br>
					</div>
				</div>
				<div class="parallax"><img src="./assets/img/background1.jpg" alt="Unsplashed background img 1"></div>
			</div>
		</div>
		
		<!-- Tab Tambahan -->
		<div class="row mb-0 divider-card">
			<div class="col s10 offset-s1 m2 offset-m3">
				<div class="icon-block card-panel p-3 z-depth-3">
					<h4 class="center orange-text text-lighten-2"><i class="material-icons">zoom_in</i></h4>
					<h6 class="center">Diagnosa Dengan Dataset Ahli</h6><br>
				</div>
			</div>	
			<div class="col s10 offset-s1 m2">
				<div class="icon-block card-panel p-3 z-depth-3">
					<h4 class="center orange-text text-lighten-2"><i class="material-icons">flash_on</i></h4>
					<h6 class="center">Sigap Mendiagnosa Anak Anda</h6><br>
				</div>
			</div>
			<div class="col s10 offset-s1 m2">
				<div class="icon-block card-panel p-3 z-depth-3">
					<h4 class="center orange-text text-lighten-2"><i class="material-icons">settings</i></h4>
					<h6 class="center">Cermat dan Mudah digunakan</h6><br>
				</div>
			</div>
		</div>
		
		<!-- Tab Panduan -->
		<div id="panduan" class="container">
			<br>
			<div class="section">
				<h4 class="light-blue-text text-lighten-2 mb-0 main-judul">Panduan Pengguna</h4>
				<p class="light-text mt-0">Panduan untuk menggunaan fitur Tanya Dokter</p>
				<span class="dots hide-on-small-only" style="right: 100px; background-size: auto 75px;"></span>
				
				<!-- Timeline -->
				<div class="timeline">
					<div class="timeline-event">
						<div class="card horizontal timeline-content">
							<div class="card-image m-3 mt-4">
								<p class="center orange-text text-lighten-2 pt-3 px-2"><i class="material-icons medium">edit</i></p>
							</div>
							<div class="card-stacked">
								<div class="card-content pl-0">
									<h5 class="orange-text text-lighten-2 my-2">Pertama <i class="material-icons right pt-1 blue-text text-lighten-2">looks_one</i></h5>
									<hr>
									<p>Perhatikan anak Anda kemudian catat gejala-gejala yang dialaminya.</p>
								</div>
							</div>
						</div>
						<div class="timeline-badge blue white-text"><i class="material-icons">edit</i></div>
						<span class="squiggle hide-on-small-only" style="left: -100px; background-size: auto 35px;"></span>
					</div>
					<div class="timeline-event">
						<div class="card horizontal timeline-content">
							<div class="card-image m-3 mt-4">
								<p class="center orange-text text-lighten-2 mt-4 pt-4 px-2"><i class="material-icons medium">line_weight</i></p>
							</div>
							<div class="card-stacked">
								<div class="card-content pl-0">
									<h5 class="orange-text text-lighten-2 my-2">Kedua <i class="material-icons right pt-1 red-text text-lighten-2">looks_two</i></h5>
									<hr>
									<p>Buatlah urutan dari gejala yang dominan hingga yang resesif muncul pada anak Anda.</p>
								</div>
							</div>
						</div>
						<div class="timeline-badge red white-text"><i class="material-icons">line_weight</i></div>
					</div>
					<div class="timeline-event">
						<div class="card horizontal timeline-content">
							<div class="card-image m-3 mt-4">
								<p class="center orange-text text-lighten-2 pt-3 px-2"><i class="material-icons medium">assignment</i></p>
							</div>
							<div class="card-stacked">
								<div class="card-content pl-0">
									<h5 class="orange-text text-lighten-2 my-2">Terakhir <i class="material-icons right pt-1 green-text text-lighten-2">looks_3</i></h5>
									<hr>
									<p>Isikan gejala yang diderita anak Anda pada menu <a href="#tanya-dokter" class="light-blue-text"><em>Tanya Dokter!</em></a></p>
								</div>
							</div>
						</div>
						<div class="timeline-badge green white-text"><i class="material-icons">assignment</i></div>
					</div>
				</div>
				<span class="dots hide-on-small-only "></span>
			</div>
		</div>
		
		<!-- Tab Tanya Dokter -->
		<div id="tanya-dokter" class="container">
			<br>
			<div class="section">
				<div class="row">
					<div class="col s12 center">
						<h4 class="light-blue-text text-lighten-2 mb-0 main-judul">Tanya Dok!</h4>
						<p class="light-text mt-0">Tanya Gejala Yang Diderita Anak</p>
						
						<!-- MultiStep Form -->
						<form id="msform">
							<!-- progressbar -->
							<ul id="progressbar">
								<li class="active">Identitas Anak</li>
								<li>Gejala-gejala</li>
								<li>Hasil Pemeriksaan</li>
							</ul>
							<!-- fieldsets -->
							<fieldset>
								<div id="header-bar"></div>
								<h4 class="light-blue-text text-lighten-2 mb-0">Identitas Anak</h4>
								<p class="light-text mt-0">Mohon untuk mengisi kolom di bawah ini</p>
								<div class="row my-0 center">
									<div class="input-field col m4 s12 offset-m4">
										<i class="material-icons prefix">person</i>
										<input id="nama_pasien" type="text" name="nama_pasien" />
										<label for="nama_pasien">Nama Lengkap Anak</label>
									</div>
									</br>
									<div class="input-field col m4 s12 offset-m4">
										<i class="material-icons prefix">account_box</i>
										<input id="usia_pasien" type="number" min="1" max="10" name="usia_pasien" />
										<label for="usia_pasien">Usia Anak (Tahun)</label>
									</div>
								</div>
								<button type="button" name="next" class="next btn light-blue text-lighten-2 waves-effect waves-light my-3">Selanjutnya <i class="material-icons right">navigate_next</i></button>
							</fieldset>
							<fieldset>
								<div id="header-bar"></div>
								<h4 class="light-blue-text text-lighten-2 mb-0">Gejala-gejala</h4>
								<p class="light-text mt-0">Gejala apa sajakah yang muncul pada anak?</p>
								<div class="row my-4 center">
									<div class="input-field col m6 s12 offset-m3 mb-2">
										<select multiple id="gejala_dominan">
											<!-- DIISI MELALUI CUSTOM.JS -->
										</select>
										<label>Silakan berikan tanda <i>check</i>(<i class="material-icons tiny" style="position: relative; top: 4px;">check</i>) pada:</label>
									</div>
									<div id="gejala_resesif">
										<!-- DIISI MELALUI CUSTOM.JS -->
									</div>
								</div>
								<button type="button" name="previous" class="previous btn light-teal text-lighten-2 waves-effect waves-light my-3 mx-1">Kembali <i class="material-icons left">navigate_before</i></button>
								<button type="submit" name="submit" class="submit btn light-blue text-lighten-2 waves-effect waves-light my-3 mx-1">Diagnosa! <i class="material-icons right">trending_up</i></button>
							</fieldset>
							<fieldset>
								<div id="header-bar"></div>
								<div class="mx-4">
									<h4 class="light-blue-text text-lighten-2 mb-0">Hasil Pemeriksaan</h4>
									<div class="row center" id="hasil_pemeriksaan">
										<!-- DIISI MELALUI CUSTOM.JS -->
									</div>
								</div>
								<button type="button" name="previous" class="previous btn light-teal text-lighten-2 waves-effect waves-light my-3">Kembali <i class="material-icons left">navigate_before</i></button>
							</fieldset>
						</form>
					</div>
				</div>
				<span class="squiggle hide-on-small-only "></span>
			</div>
		</div>
		
		<!-- Tab Artikel Kesehatan -->
		<div id="artikel" class="container">
			<br>
			<div class="section">
				<div class="right-align">
					<h4 class="light-blue-text text-lighten-2 mb-0 main-judul">Artikel</h4>
					<p class="light-text mt-0">Artikel Kesehatan Menarik</p>
				</div>
				<div class="row center" id="article">
					<!-- DIISI MELALUI API.JS -->
				</div>
				<div class="center m-3">
					<button type="button" class="btn light-blue text-lighten-2 waves-effect waves-light my-3" id="tampil">Tampilkan Lebih Banyak <i class="material-icons right">queue_play_next</i></button>
				</div>
			</div>
		</div>
		
		<!-- Tab Tambahan -->
		<div class="parallax-container valign-wrapper">
			<div class="section no-pad-bot" style="top: unset;">
			<div class="container">
				<div class="row center">
					<div class="col s12 m4 py-2">
						<img src="./assets/img/icon-1.png" alt="Logo Dicoding" width="150px;" />
					</div>
					<div class="col s12 m4 py-2">
						<img src="./assets/img/icon-3.png" alt="Logo Dicoding" width="250px;" />
					</div>
					<div class="col s12 m4 py-2">
						<img src="./assets/img/icon-2.png" alt="Logo Indosat Ooredoo" width="100px;" />
					</div>
				</div>
			</div>
			</div>
			<div class="parallax"><img src="./assets/img/background2.jpg" alt="Unsplashed background img 2"></div>
		</div>
		
		<!-- Tab Tentang -->
		<footer class="page-footer teal">
			<div class="container" id="tentang">
				<div class="row mb-4">
					<div class="col m9 s12">
						<h5 class="white-text mt-0">
							<img src="./assets/img/icons/medical-192x192.png" alt="Logo" width="50px;" />
							<span class="ml-2" style="position: relative; top: -15px; font-size: 20px; font-weight: normal;">Tanya Dokter<span>
						</h5>
						<p class="grey-text text-lighten-4 m-0">
							Aplikasi <strong>Tanya Dokter</strong> merupakan sebuah aplikasi web yang dapat mendiagnosa suatu penyakit dengan input(masukan) berupa 
							gejala-gejala yang dialami anak. Sistem ini dibangun berdasarkan pendekatan metode sistem pakar menggunakan <i>Certainty Factor</i>.
						</p>
					</div>
					<div class="col m3 s12">
						<h6 class="white-text">Komponen Web :</h6>
						<ul>
							<li><a class="white-text" href="http://materializecss.com" target="_blank">- Materialize</a></li>
							<li><a class="white-text" href="https://jquery.com/" target="_blank">- JQuery</a></li>
							<li><a class="white-text" href="https://jquery.com/" target="_blank">- MySQL Database</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container light center">
					<div class="row mb-0">
						<div class="col m6 s12">
							Developed by <a class="white-text" href="https://www.dicoding.com/users/471712" target="_blank">Mus Priandi</a> &copy2020
						</div>
						<div class="col m6 s12">
							Made by <a class="white-text" href="http://materializecss.com" target="_blank">Materialize</a>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!--  Scripts-->
		<script src="./assets/js/jquery.min.js"></script>
		<script src="./assets/js/materialize.min.js"></script>
		<script src="./assets/js/api.js"></script>
		<script src="./assets/js/custom.js"></script>
		<script src="./assets/js/jquery.easing.min.js"></script>
	</body>
</html>
