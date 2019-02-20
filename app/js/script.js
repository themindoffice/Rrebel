$(document).ready(function()
{
	new MobileMenu();
	new Accordion();

	OwlParallax();
});

$(window).on('load', function(){
	new Parallax();
});

function OwlParallax() {
	var $main 				= $(".owl-main");
	var $carousel 			= $main.find(".owl-carousel");
	var $parallaxElements 	= $main.find(".owl-parallax");

	$carousel.on('changed.owl.carousel', function (e) {
		var current = e.item.index;
		var total 	= e.item.count;

		if (current !== null && total > 0) {
			var mainWidth = $main.outerWidth();

			$parallaxElements.each(function() {
				var imageWidth 		= $(this).outerWidth();
				var step 			= (imageWidth - mainWidth) / (total - 1);
				var backgroundPos 	= "-" + (current * step).toString() + "px";

				$(this).css("transform", "translate3d("+backgroundPos+", 0, 0)");
			});
		}
	});

	$carousel.owlCarousel({
		nav: true,
		dots: false,
		items: 1,
		autoplay: 4000,
		loop: false,
		mouseDrag: false,
		touchDrag: false,
		pullDrag: false,
		autoplaySpeed: 1000,
		navSpeed: 1000
	});
}