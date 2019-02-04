/**
 * Language Menu
 * @author Donny de Vries
 */
var LanguageMenu = function(options) {
	this.Init(options);
};

LanguageMenu.prototype =
{
	/**
	 * Constructor
	 * @param	object options
	 * @return	void
	 */
	Init: function(options)
	{
		this.options = {
			$root: ".language"
		};
		
		$.extend(this.options, options);

		this.$root 		= $(this.options.$root);
		this.$trigger 	= $(this.options.$root).find("> a");
		this.$anchors 	= $(this.options.$root).find("> ul a");

		this.Start();
	},
	
	/**
	 * Start
	 * @return void
	 */
	Start: function()
	{
		var _this = this;

		this.$trigger.on("click touchstart", function(e) {
			e.stopPropagation();
			e.preventDefault();

			_this.$root.toggleClass("open");
		});

		this.$anchors.on("click touchstart", function(e) {
			e.stopPropagation();
		});

		$("body").on("click touchstart", function(e) {
			_this.$root.removeClass("open");
		});
	}
};