/**
 * Parallax
 * @author Donny de Vries
 */
var Parallax = function(options) {this.Init(options);};

Parallax.prototype =
{
	/**
	 * Constructor
	 * @param	object options
	 * @return	void
	 */
	Init: function(options)
	{
		this.options = {
			selector		: '[data-parallax]',
			image_selector	: null,
			delay			: .5
		};
		
		$.extend(this.options, options);
		
		this.parallax_node	= $();
		this.image_nodes	= $();
		this.img_node		= $();
		
		this.scroll_height	= 0;
		this.parallax_top	= 0;
		this.image_top		= 0;
		
		this.Start();
	},
	
	/**
	 * Start
	 * @return void
	 */
	Start: function()
	{
		var _this		= this;
		var selectors	= this.options.selector.split(',');

		this.scroll_height	= $(window).height();
		
		if (selectors.length > 1) {
			for (var x in selectors) {
				var options = $.extend({}, this.options);
				
				options.selector = $.trim(selectors[x]);
				
				new Parallax(options);
			}
		} else {
			var parallax_nodes = $(this.options.selector);
			
			parallax_nodes.each(function(index) {
				if (index) {
					var options = $.extend({}, _this.options);
					
					options.selector	+= ':eq('+index+')';
					options.init	 	 = false;
					
					new Parallax(options);
				} else {
					var image_selector	= '> .parallax:first';
					var path			= null;
					
					if (_this.options.image_selector) {
						image_selector += ', '+_this.options.image_selector;
					}
					
					_this.parallax_node	= $(this);
					_this.image_nodes	= _this.parallax_node.find(image_selector);
					_this.parallax_top	= _this.parallax_node.position().top;
					
					if (!_this.image_nodes.length) {
						var background_image = _this.parallax_node.css('background-image');
						
						if (background_image !== 'none') {
							path = background_image.match(/^url\(['"]?(.*?)['"]?\)$/i);
							
							if (path) {
								path = path[1];
							}
						}
					}
					
					_this.SetImage(path);
					_this.SetEvents();
				}
			});
		}
	},
	
	/**
	 * SetImage
	 * @param	string path
	 * @return	void
	 */
	SetImage: function(path)
	{
		var parallax_top = this.parallax_top;
		
		if (parallax_top > this.scroll_height) {
			parallax_top = this.scroll_height;
		}
		
		this.image_top = parallax_top * this.options.delay;
		
		if (path) {
			this.image_nodes	= $('<div>', {class: 'parallax'});
			this.img_node		= $('<img>', {src: path});
			
			this.image_nodes.append(this.img_node);
			this.parallax_node.prepend(this.image_nodes).css('background-image', 'none');
		} else if (this.image_nodes.hasClass('parallax')) {
			this.img_node = this.image_nodes.children('img:first');
		}
		
		this.image_nodes.css('top', -this.image_top);
		
		if (this.image_nodes.hasClass('parallax')) {
			this.ScaleImage();
		}
	},
	
	/**
	 * ScaleImage
	 * @return void
	 */
	ScaleImage: function()
	{
		this.img_node.css({height: '', width: ''});
		
		var _this		= this;
		var img_height	= this.img_node.height();
		
		if (img_height) {
			var image_height = this.image_nodes.height();
			
			if (img_height < image_height) {
				this.img_node.css({height: '101%', width: 'auto'});
			}
		} else {
			this.img_node.on('load', function() {
				_this.ScaleImage();
			});
		}
	},
	
	/**
	 * SetEvents
	 * @return void
	 */
	SetEvents: function()
	{
		var _this = this;
		
		$(window).resize(function() {
			_this.scroll_height	= $(window).height();
			_this.parallax_top	= _this.parallax_node.position().top;
			
			_this.SetImage();
			$(window).trigger('scroll');
		});
		
		$(window).scroll(function() {
			var offset = $(window).scrollTop();
			
			if (_this.parallax_top > _this.scroll_height) {
				offset -= _this.parallax_top - _this.scroll_height;
			}
			
			var image_top = offset * _this.options.delay;
			
			if (image_top < 0) {
				image_top = 0;
			} else if (_this.parallax_node.css('position') === 'fixed' && image_top > _this.image_top) {
				image_top = _this.image_top;
			}
			
			_this.image_nodes.css('transform', 'translate3d(0, '+image_top+'px, 0)');
		});
	},
};