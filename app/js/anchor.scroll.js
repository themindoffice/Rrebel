/**
 * AnchorScroll
 * @author Donny de Vries
 */
var AnchorScroll = function(options) {
	this.Init(options);
};

AnchorScroll.prototype =
{
	/**
	 * Constructor
	 * @param	object options
	 * @return	void
	 */
	Init: function(options)
	{
		this.options = {
			$anchors: "[data-scrollto]"
		};
		
		$.extend(this.options, options);

		this.$anchors = $(this.options.$anchors);

		this.Start();
	},
	
	/**
	 * Start
	 * @return void
	 */
	Start: function()
	{
		this.GetCookie();
	},

	/**
	 * GetCookie
	 * @return void
	 */
	GetCookie: function()
	{
		var cookieValue = Cookies.get("scrollto");

		if (cookieValue !== undefined) {
			var $target = $("[data-target="+cookieValue+"]");

			this.ScrollToTarget($target);
			Cookies.remove('scrollto');
		}

		this.SetEvents();
	},

	/**
	 * ScrollToTarget
	 * @return void
	 */
	SetEvents: function()
	{
		var _this = this;

		this.$anchors.on("click touchstart", function(e) {
			e.preventDefault();

			var $anchor = $(this);
			var href 	= $(this).attr("href");
			var isHash 	= href.startsWith("#");

			if (isHash) {
				if (typeof($anchor.data("scrollto")) !== "undefined") {
					var $target = $("[data-target="+$anchor.data("scrollto")+"]");

					_this.ScrollToTarget($target);
				}
			}
			else {
				if (typeof($anchor.data("scrollto")) !== "undefined") {
					Cookies.set("scrollto", $anchor.data("scrollto"));
				}

				window.location.href = href;
			}
		});
	},

	/**
	 * ScrollToTarget
	 * @return void
	 */
	ScrollToTarget: function($target)
	{
		if ($target.length) {
			var headerCorrection 	= 0;
			var header 				= $("header");
			var scrollTop 			= $(window).scrollTop();

			if (header.length && header.css("position") == "fixed")
			{
				headerCorrection = header.outerHeight();
			}

			var scrollPosition	= $target.offset().top - headerCorrection;
			var duration 		= Math.round(Math.abs(scrollTop - scrollPosition) / 3);

			if (duration < 400) duration = 400;
			if (duration > 1250) duration = 1250;

			$('html, body').animate({
				scrollTop: scrollPosition
			}, duration);
		}
	}
};