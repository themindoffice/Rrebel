/**
 * MobileMenu
 * @author Donny de Vries
 */
var MobileMenu = function(options) {
	this.Init(options);
};

MobileMenu.prototype =
{
	/**
	 * Constructor
	 * @param	object options
	 * @return	void
	 */
	Init: function(options)
	{
		this.options = {
			$header: 			"header",
			$mobileMenu: 		"#mobile-menu",
			$mobileMenuClose: 	"#mobile-menu .close",
			$mobileMenuContent: "#mobile-menu #mobile-menu-content",
			$mobileMenuTrigger: "#mobile-menu-trigger",
			$mainMenu: 			"#main-menu"
		};
		
		$.extend(this.options, options);

		this.$body						= $("body");
		this.$header					= $(this.options.$header);
		this.$mobileMenu 				= $(this.options.$mobileMenu);
		this.$mobileMenuClose 			= $(this.options.$mobileMenuClose);
		this.$mobileMenuContent 		= $(this.options.$mobileMenuContent);
		this.$mobileMenuTrigger 		= $(this.options.$mobileMenuTrigger);
		this.$mainMenu					= $(this.options.$mainMenu);
		this.$mobileMenuList			= $();
		this.$mobileMenuListItems		= $();
		this.$mobileMenuAnchors			= $();
		this.$mobileMenuAnchorsSubs		= $();
		
		this.Start();
	},
	
	/**
	 * Start
	 * @return void
	 */
	Start: function()
	{
		this.SetHTML();
	},

	/**
	 * SetHTML
	 * @return void
	 */
	SetHTML: function()
	{
		this.$mobileMenuContent.html(this.$mainMenu.html());

		this.$mobileMenuList			= this.$mobileMenuContent.find("> ul");
		this.$mobileMenuListItems		= this.$mobileMenuList.find("> li");
		this.$mobileMenuAnchors			= this.$mobileMenuList.find("> li > a");
		this.$mobileMenuAnchorsSubs		= this.$mobileMenuList.find("> li.subs > a");

		this.$mobileMenuList.removeAttr("class");

		this.SetEvents();
	},

	/**
	 * SetEvents
	 * @return void
	 */
	SetEvents: function()
	{
		var _this = this;

		this.$mobileMenuTrigger.on("click touchstart", function(e) {
			e.preventDefault();

			_this.$body.addClass("mobile-menu-open");
		});

		this.$mobileMenuClose.on("click touchstart", function(e) {
			e.preventDefault();

			_this.$body.removeClass("mobile-menu-open");
		});

		this.$mobileMenuAnchorsSubs.on("click touchstart", function(e) {
			var $parent 		= $(this).parent();
			var $openListItems	= _this.$mobileMenuList.find("li.open");

			if (!$parent.hasClass("open")) {
				e.preventDefault();

				$openListItems.find("> ul").slideUp(400);
				$openListItems.removeClass("open");
				$parent.find("> ul").slideDown(400);
				$parent.addClass("open");
			}
		});
	}
};