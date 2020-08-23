<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Diagnosa Penyakit Anak</title>
		<meta name="description" content="Tanya Dokter" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="theme-color" content="#448aff" />
		
		<link rel="stylesheet" href="assets/css/materialize.min.css" />
		<link rel="apple-touch-icon" href="assets/img/icons/medical-192x192.png">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
		<!-- Navigasi -->
		<nav class="blue accent-2" role="navigation">
			<div class="nav-wrapper container">
				<a href="#" data-target="slide-out" class="sidenav-trigger">&#9776;</a>
				<a href="#!" class="brand-logo">
					<img style="position: relative; top: 5px;" src="assets/img/icons/medical-192x192.png" alt="Logo" width="50px;">
					<span class="hide-on-small-only">Tanya Dokter<span>
				</a>
				<ul class="right hide-on-med-and-down">
					<li><a class="waves-effect waves-light tooltipped" href="#" data-position="bottom" data-tooltip="Masuk Sebagai Pengelola"><i class="material-icons left">exit_to_app</i>Masuk</a></li>
				</ul>
				<ul id="slide-out" class="sidenav">
					<li>
						<a href="#intro">
							<img style="position: relative; top: 5px;" src="assets/img/icons/medical-192x192.png" alt="Logo" width="50px;"> 
							<span>Tanya Dokter</span>
						</a>
					</li>
					<li><div class="divider"></div></li>
					<li><a class="waves-effect" href="#intro">Perkenalan</a></li>
					<li><a class="waves-effect" href="#panduan">Panduan Penggunaan</a></li>
					<li><a class="waves-effect" href="#berita">Berita Kesehatan</a></li>
					<li><a class="waves-effect" href="#tentang">Tentang</a></li>
				</ul>
			</div>
		</nav>
		<!-- Akhir Navigasi -->
		
		<!-- Content -->
		<main class="row">
			<div class="col s10 m8 offset-s1 offset-m1">
				<div id="intro" class="section scrollspy">
					<p>intro<br>intro<br>intro<br>intro<br>intro<br>intro<br>intro<br>intro<br>intro<br>intro<br>intro<br>intro</p>
				</div>
				<div id="panduan" class="section scrollspy">
					<p>panduan<br>panduan<br>panduan<br>panduan<br>panduan<br>panduan<br>panduan<br>panduan<br>panduan<br></p>
				</div>
				<div id="berita" class="section scrollspy">
					<p>berita<br>berita<br>berita<br>berita<br>berita<br>berita<br>berita<br>berita<br>berita<br>berita<br>berita<br>berita<br></p>
				</div>
				<div id="tentang" class="section scrollspy">
					<p>tentang </p>
				</div>
			</div>
			<div class="col hide-on-small-only m2">
				<ul class="section table-of-contents">
					<li><a href="#intro">Perkenalan</a></li>
					<li><a href="#panduan">Panduan Penggunaan</a></li>
					<li><a href="#berita">Berita Kesehatan</a></li>
					<li><a href="#tentang">Tentang</a></li>
				</ul>
			</div>
		</main>
	
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/materialize.min.js"></script>
		
		<script>
			$(document).ready(function(){
				$('.sidenav')
					.sidenav()
					.on('click tap', 'li a', () => {
						$('.sidenav').sidenav('close');
					});
				$('.scrollspy').scrollSpy();
				$('.tooltipped').tooltip();
			});
		</script>
	</body>
</html>
