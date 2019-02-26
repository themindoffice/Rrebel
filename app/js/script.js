$(document).ready(function()
{
	new MobileMenu();
	new Accordion();

	OwlParallax();
	ProductFilters();
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

function ProductFilters() {
	var $filters 	= $(".product-filters a");
	var $products 	= $(".products-row .card");

	$filters.on("click touchstart", function(e) {
		e.preventDefault();

		var filterCatId = parseInt($(this).data("cat-id"));

		if (filterCatId != 0) {
			$filters.removeClass("active");
			$(this).addClass("active");

			$products.each(function() {
				var productCatId = $(this).data("cat-id");

				if (productCatId == filterCatId) {
					$(this).removeClass("hide");
				} else {
					$(this).addClass("hide");
				}
			});
		}
		else {
			$filters.removeClass("active");
			$('.product-filters [data-cat-id="0"]').addClass("active");
			$products.removeClass("hide");
		}
	});
}