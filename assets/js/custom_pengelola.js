$(document).ready(function(){
	$('.sidenav').sidenav();
	$(".dropdown-trigger").dropdown();
	$('.modal').modal();
	$('select').formSelect();
	
	$(".modal_edit_pengelola").on("click", function(){
		
		let id = $(this).val();
		let username 	= $('#username'+id).html();
		let kata_sandi	= $('#kata_sandi'+id).html();
		
		$('#username_pengelola').val(username);
		$('#kata_sandi_pengelola').val(kata_sandi);
		M.updateTextFields();
		
		$('#modal_edit_pengelola').modal('open');
	});
	
	$(".modal_hapus_pengelola").on("click", function(){
		
		let id = $(this).val();
		let username 	= $('#username'+id).html();
		
		$('#username_pengelola1').val(username);
		$('#username_pengelola2').html(username);
		
		$('#modal_hapus_pengelola').modal('open');
	});
	
	$(".modal_edit_gejala").on("click", function(){
		
		let id = $(this).val();
		let kode_gejala 	= $('#kode_gejala'+id).html();
		let nama_gejala		= $('#nama_gejala'+id).html();
		
		$('#kode_gejala').val(kode_gejala);
		$('#nama_gejala').val(nama_gejala);
		M.updateTextFields();
		
		$('#modal_edit_gejala').modal('open');
	});
	
	$(".modal_hapus_gejala").on("click", function(){
		
		let id = $(this).val();
		let kode_gejala 	= $('#kode_gejala'+id).html();
		
		$('#kode_gejala_1').val(kode_gejala);
		$('#kode_gejala_2').html(kode_gejala);
		
		$('#modal_hapus_gejala').modal('open');
	});
	
	$(".modal_edit_penyakit").on("click", function(){
		
		let id = $(this).val();
		let kode_penyakit	= $('#kode_penyakit'+id).html();
		let nama_penyakit	= $('#nama_penyakit'+id).html();
		
		$('#kode_penyakit').val(kode_penyakit);
		$('#nama_penyakit').val(nama_penyakit);
		M.updateTextFields();
		
		$('#modal_edit_penyakit').modal('open');
	});
	
	$(".modal_hapus_penyakit").on("click", function(){
		
		let id = $(this).val();
		let kode_penyakit	= $('#kode_penyakit'+id).html();
		
		$('#kode_penyakit_1').val(kode_penyakit);
		$('#kode_penyakit_2').html(kode_penyakit);
		
		$('#modal_hapus_penyakit').modal('open');
	});
	
	$(".modal_hapus_diagnosa").on("click", function(){
		
		let id = $(this).val();
		let id_diagnosa	= $('#id_diagnosa'+id).html();
		
		$('#id_diagnosa_1').val(id_diagnosa);
		$('#id_diagnosa_2').html(id_diagnosa);
		
		$('#modal_hapus_diagnosa').modal('open');
	});
});