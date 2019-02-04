/**
 * Accordion
 * @author Donny de Vries
 */
var Accordion = function(options) {
	this.Init(options);
};

Accordion.prototype =
{
	/**
	 * Constructor
	 * @param	object options
	 * @return	void
	 */
	Init: function(options)
	{
		this.options = {
			$accordions: ".accordion",
			startIndex: 0
		};
		
		$.extend(this.options, options);

		this.$accordions = $(this.options.$accordions);

		this.Start();
	},
	
	/**
	 * Start
	 * @return void
	 */
	Start: function()
	{
		var _this = this;

		this.$accordions.each(function(index, el) {
			var $accordion 		= $(el);
			var $accordionItems = $accordion.find(".accordion-item");
			var $handlers 		= $(el).find(".accordion-handler");
			
			_this.SetActiveStartItem($accordion);
			_this.SetEvents($accordion, $handlers);
		});
	},

	/**
	 * SetActiveStartItem
	 * @return void
	 */
	SetActiveStartItem: function($accordion)
	{
		var dataActive = $accordion.data("active");

		if ($.isNumeric(dataActive)) {
			$activeItem = $accordion.find(".accordion-item:nth-child(" + dataActive.toString() + ")");

			if ($activeItem.length) {
				$activeItemContent = $activeItem.find(".accordion-content");

				$activeItem.addClass("open");
				$activeItemContent.css("display", "block");
			}
		}
	},

	/**
	 * SetEvents
	 * @return void
	 */
	SetEvents: function($accordion, $handlers)
	{
		var dataCollapse = true;

		if (typeof($accordion.data("collapse")) !== "undefined" && typeof($accordion.data("collapse")) === "boolean") {
			var dataCollapse = $accordion.data("collapse");
		}

		$handlers.on("click touchstart", function(e) {
			e.preventDefault();

			$handler 	= $(this);
			$item 		= $handler.parent();

			if (!$item.hasClass("open")) {
				if (dataCollapse) {
					$accordion.find(".accordion-item").removeClass("open");
					
					$accordion.find(".accordion-item:not(.open) .accordion-content").stop().slideUp({
						duration: 600,
						step: function() {
							//$(window).resize();
						}
					});
				}

				$item.addClass("open");

				$item.find(".accordion-content").stop().slideDown({
					duration: 600,
					step: function() {
						//$(window).resize();
					}
				});
			}
			else
			{
				$item.removeClass("open");
				$item.find(".accordion-content").stop().slideUp({
					duration: 600,
					step: function() {
						//$(window).resize();
					}
				});
			}
		});
	}
};