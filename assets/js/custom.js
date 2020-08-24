$(document).ready(function(){
	$('.sidenav')
		.sidenav()
		.on('click tap', 'li a', () => {
			$('.sidenav').sidenav('close');
		});
	$('.scrollspy').scrollSpy();
	$('.tooltipped').tooltip();
    $('.parallax').parallax();
	
	$("#tampil").on("click", function(e){
		e.preventDefault();
		$(".article:hidden").slice(0, 3).slideDown();
		if($(".article:hidden").length == 0) {
			$("#tampil").hide();
		}
	});
});