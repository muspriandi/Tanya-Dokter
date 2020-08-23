$(document).ready(function(){
	$('.sidenav')
		.sidenav()
		.on('click tap', 'li a', () => {
			$('.sidenav').sidenav('close');
		});
	$('.scrollspy').scrollSpy();
	$('.tooltipped').tooltip();
    $('.parallax').parallax();
});