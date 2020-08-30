<?php
    include('header.php');

    // CEK ADA ATAU TIDAKNYA URL
    if(isset($_GET['hal'])) {
        
        // MEMBERIKAN NILAI UNTUK index.php?hal=<<NILAI>>
        switch($_GET['hal']) {
			
            case 'dashboard'	: include 'dashboard.php'; 	break;
            case 'pengelola'	: include 'pengelola.php'; 	break;
            case 'gejala'	  	: include 'gejala.php'; 	break;
            case 'penyakit'		: include 'penyakit.php'; 	break;
            case 'diagnosa'		: include 'diagnosa.php'; 	break;

            // SELAIN YANG DI ATAS MAKA AKAN MENAMPILKAN HALAM 404
            default : include '404.php';
        }
    }
    else {
        // HALAMAN YANG DITAMPILKAN SETELAH LOGIN (PERTAMA KALI)
        include 'dashboard.php';
    }

	include('footer.php');
?>