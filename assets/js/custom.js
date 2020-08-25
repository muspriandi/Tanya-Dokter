$(document).ready(function(){
	$('.sidenav')
		.sidenav()
		.on('click tap', 'li a', () => {
			$('.sidenav').sidenav('close');
		});
	$('.scrollspy').scrollSpy();
	$('.tooltipped').tooltip();
    $('.parallax').parallax();
	
	$(window).on('scroll', function() {
		let docHeight = $(document).height(),
			winHeight = $(window).height();
	
		let viewport = docHeight - winHeight,
			positionY = $(window).scrollTop();
	
		let indicator = ( positionY / (viewport)) * 100;
	
		$('.progress-bar').css('width', indicator + '%');
		
		if (indicator > 5) {
			$('nav').addClass('scrolled');
			$('nav').removeClass('p-3');
			$('#masuk').removeClass('pulse');
			$('nav').css('box-shadow', '');
			$('.progress-container').css('display', '');
		}
		else {
			$('nav').removeClass('scrolled');
			$('nav').addClass('p-3');
			$('#masuk').addClass('pulse');
			$('nav').css('box-shadow', 'none');
			$('.progress-container').css('display', 'none');
		}
	});
	
	$("#tampil").on("click", function(e){
		e.preventDefault();
		$(".article:hidden").slice(0, 3).slideDown();
		if($(".article:hidden").length == 0) {
			$("#tampil").hide();
		}
	});
});