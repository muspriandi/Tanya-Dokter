$(document).ready(function(){
	$('.sidenav').sidenav();
	$(".dropdown-trigger").dropdown();
	$('.modal').modal();
	
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
});