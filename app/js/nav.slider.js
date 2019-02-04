/**
 * NavSlider
 * @author Donny de Vries
 */
var NavSlider = function(options) {
	this.Init(options);
};

NavSlider.prototype =
{
	/**
	 * Constructor
	 * @param	object options
	 * @return	void
	 */
	Init: function(options)
	{
		this.options = {
			$navSliders: '.nav-slider',
		};
		
		$.extend(this.options, options);

		this.$navSliders = $(this.options.$navSliders);
		
		this.Start();
	},
	
	/**
	 * Start
	 * @return void
	 */
	Start: function()
	{
		var _this = this;

		this.$navSliders.each(function(index, el)
		{
			var $navSlider 			= $(el);
			var $navSliderItems 	= $navSlider.find("> li:not(.active)");
			var $activeItem 		= $navSlider.find("> li.active");
			var $navSliderBar 		= $('<div class="nav-slider-bar"><span></span></div>');
			var $navSliderHandle 	= $navSliderBar.find("span");
			$navSlider.append($navSliderBar);

			if ($activeItem.length) {
				var activeItemLeft 		= $activeItem.position().left;
				var activeItemWidth 	= $activeItem.outerWidth();

				$navSliderHandle.css("left", activeItemLeft);
				$navSliderHandle.css("width", activeItemWidth);
				$navSliderHandle.addClass("onactive");

				$navSliderItems.on({
					mouseenter: function (index, el) {
						var $navSliderItem = $(this);
						
						var navSliderItemLeft 	= $navSliderItem.position().left;
						var navSliderItemWidth 	= $navSliderItem.outerWidth();

						$navSliderHandle.css("left", navSliderItemLeft);
						$navSliderHandle.css("width", navSliderItemWidth);
						$navSliderHandle.removeClass("onactive");
					},
					mouseleave: function () {
						$navSliderHandle.css("left", activeItemLeft);
						$navSliderHandle.css("width", activeItemWidth);
						$navSliderHandle.addClass("onactive");
					}
				});

				$(window).resize(function()
				{
					activeItemLeft 		= $activeItem.position().left;
					activeItemWidth 	= $activeItem.outerWidth();

					$navSliderHandle.css("left", activeItemLeft);
					$navSliderHandle.css("width", activeItemWidth);
				});
			}
		});
	}
};