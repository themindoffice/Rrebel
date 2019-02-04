/**
 * Transition
 * @author Donny de Vries
 */
var Transition = function(options) {
	this.Init(options);
};

Transition.prototype =
{
	/**
	 * Constructor
	 * @param	object options
	 * @return	void
	 */
	Init: function(options)
	{
		this.options = {
			selector: '[data-transition]:not(.transition-init)'
		};
		
		$.extend(this.options, options);
		
		this.window				= $(window);
		this.viewport_node		= $('html, body');
		this.scroll_node		= $();
		this.transition_nodes	= $();
		this.scroll_top			= 0;
		this.scroll_height		= 0;
		
		this.Start();
	},
	
	/**
	 * Start
	 * @return void
	 */
	Start: function()
	{
		this.transition_nodes = $(this.options.selector);
		
		if (this.viewport_node.css('overflow') == 'visible') {
			this.scroll_node = this.window;
		} else {
			this.scroll_node	=  this.viewport_node;
			this.scroll_top		=  this.viewport_node.offset().top;
		}
		
		this.scroll_height = this.scroll_node.outerHeight();

		this.SetEvents();
		this.SetTransitions();
		this.transition_nodes.trigger('start');
	},
	
	/**
	 * SetEvents
	 * @return void
	 */
	SetEvents: function()
	{
		var _this = this;
		
		this.scroll_node.scroll(function() {
			_this.SetTransitions();
			_this.transition_nodes.trigger('start');
		});
		
		this.window.resize(function() {
			_this.scroll_height = _this.scroll_node.outerHeight();
			
			_this.SetTransitions();
			_this.transition_nodes.trigger('start');
		});
	},
	
	/**
	 * SetTransitions
	 * @return void
	 */
	SetTransitions: function()
	{
		var _this = this;
		
		this.transition_nodes.filter(':not(.transition-init)').each(function() {
			var transition_node	= $(this);
			var transition_top	= transition_node.offset().top - _this.scroll_top;
			var transition_init	= (transition_top <= (_this.scroll_height / 2));
			
			if (_this.scroll_node === _this.window) {
				transition_top -= _this.scroll_node.scrollTop();
			}
			
			if (!transition_init) {
				var transition_height	= transition_node.outerHeight();
				var transition_bottom	= transition_top + (transition_height / 2);
				
				transition_init = (transition_bottom <= _this.scroll_height);
			}
			
			if (transition_init) {
				transition_node.addClass('transition-init').on('start', function() {
					setTimeout(function() {
						transition_node.addClass('transition-start').off('start');

						var delay = transition_node.data("delay");

						if (typeof(delay) !== "undefined") {
							transition_node.css("transition-delay", delay + "ms");
						}
					},
					1);
				});
			}
		});
	}
};