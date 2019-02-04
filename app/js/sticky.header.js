/**
 * StickyHeader
 * @author Donny de Vries
 */
var StickyHeader = function(options) {
	this.Init(options);
};

StickyHeader.prototype =
{
	/**
	 * Constructor
	 * @param	object options
	 * @return	void
	 */
	Init: function(options)
	{
		this.options = {
			$page: 	'#page',
			$header: 'header.sticky'
		};
		
		$.extend(this.options, options);

		this.$page = $(this.options.$page);
		this.$header = $(this.options.$header);
		
		this.Start();
	},
	
	/**
	 * Start
	 * @return void
	 */
	Start: function()
	{
		var _this = this;
		
		
		$(window).scroll(function() {
			_this.SetHeader();
		});

		$(window).resize(function() {
			_this.SetHeader();
		});

		this.SetHeader();
		this.Done();
	},

	/**
	 * SetHeader
	 * @return void
	 */
	SetHeader: function() 
	{
		var scrollTop = $(window).scrollTop();

		if (scrollTop > 0) {
			this.$header.addClass("scroll");
		}
		else {
			this.$header.removeClass("scroll");
		}

		if (!this.$header.hasClass("cleartop")) {
			this.$page.css("padding-top", this.$header.outerHeight() - 1);
		}
	},

	/**
	 * Done
	 * @return void
	 */
	Done: function() 
	{
		var _this 		= this;
		var scrollTop 	= $("html, body").scrollTop();

		if (scrollTop > 0) {
			setTimeout(function(){ 
				_this.$header.addClass("done"); 
			}, 300);
		}
		else {
			this.$header.addClass("done")
		}
	}
};