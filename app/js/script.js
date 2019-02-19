$(document).ready(function()
{
	new MobileMenu();
	new Transition();
	new Form();

	$(".hero-1 .owl-carousel").owlCarousel({
		nav: true,
		dots: false,
		items: 1,
		loop: true,
		mouseDrag: false,
		touchDrag: false,
		pullDrag: false
	});
});

$(window).on('load', function(){
	new Parallax();
});