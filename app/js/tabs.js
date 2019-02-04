/**
 * Tabs
 * @author Donny de Vries
 */
var Tabs = function(options) {
	this.Init(options);
};

Tabs.prototype =
{
	/**
	 * Constructor
	 * @param	object options
	 * @return	void
	 */
	Init: function(options)
	{
		this.options = {
			$tabs: ".tabs",
		};
		
		$.extend(this.options, options);

		this.$tabs = $(this.options.$tabs);

		this.Start();
	},
	
	/**
	 * Start
	 * @return void
	 */
	Start: function()
	{
		this.$tabs.each(function()
		{
			$handlers = $(this).find(".handlers a");

			$handlers.on("click touchstart", function(e) {
				e.preventDefault();

				if (!$(this).hasClass("active")) {
					$(this).parent().find("a").removeClass("active");
					$(this).addClass("active");
					$(this).parent().parent().find(".contents > div").removeClass("active");
					$(this).parent().parent().find(".contents > div:nth-child(" + ($(this).index() + 1).toString() + ")").addClass("active");
					$(window).resize();
				}
			});
		});
	}
};