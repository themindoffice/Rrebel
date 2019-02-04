/**
 * Video
 * @author Donny de Vries
 */
var Video = function(options) {this.Init(options);};

Video.prototype =
{
	/**
	 * Constructor
	 * @param	object options
	 * @return	void
	 */
	Init: function(options)
	{
		this.options = {
			$videoContainers: '.fs-video'
		};
		
		$.extend(this.options, options);

		this.$videoContainers = $(this.options.$videoContainers);
		
		this.Start();
	},

	/**
	 * Start
	 * @return void
	 */
	Start: function()
	{
		var _this = this;

		this.$videoContainers.each(function(index, el) {
			var $videoContainer = $(el);
			var $video 			= $videoContainer.find("video");

			if ($video.length) {
				$videoContainer.addClass("loaded");
				_this.SetVideo($videoContainer, $video);
			}
			else if (typeof($videoContainer.data("youtube")) !== "undefined") {
				var VideoID 	= _this.GenerateID();
				var $ytRef 		= $('<div class="yt-ref">');
				var $ytWrapper 	= $('<div class="yt-wrapper">');
				var $ytHolder 	= $('<div class="yt-holder">');
				var $yt 		= $('<div id="'+VideoID+'">');
				var youtubeURL	= $videoContainer.data("youtube");

				if (youtubeURL) {
					_this.SetYoutube($videoContainer, $ytRef, $ytWrapper, $ytHolder, $yt, youtubeURL);
				}
			}
		});
	},

	/**
	 * SetVideo
	 * @return void
	 */
	SetVideo: function($videoContainer, $video)
	{
		var _this = this;

		$(window).resize(function()
		{
			_this.CalculateVideo($videoContainer, $video);
		});

		this.CalculateVideo($videoContainer, $video);
	},

	/**
	 * CalculateVideo
	 * @return void
	 */
	CalculateVideo: function($videoContainer, $video)
	{
		var wrapperRatio 	= $videoContainer.outerWidth() / $videoContainer.outerHeight();
		var videoRatio		= $video.outerWidth() / $video.outerHeight();

		if (wrapperRatio > videoRatio) {
			$video.css("top", "50%");
			$video.css("left", "0");
			$video.css("width", "100%");
			$video.css("height", "auto");
			$video.css("margin-left", "0");
			$video.css("margin-top", -$video.outerHeight() / 2);
		}
		else {
			$video.css("top", "0");
			$video.css("left", "50%");
			$video.css("width", "auto");
			$video.css("height", "100%");
			$video.css("margin-left", -$video.outerWidth() / 2);
			$video.css("margin-top", "0");
		}
	},

	/**
	 * SetYoutube
	 * @return void
	 */
	SetYoutube: function($videoContainer, $ytRef, $ytWrapper, $ytHolder, $yt, youtubeURL)
	{
		var _this = this;

		$videoContainer.append($ytRef);
		$ytHolder.append($yt);
		$ytWrapper.append($ytHolder);
		$videoContainer.append($ytWrapper);

		var player;

		player = new YT.Player($yt.attr("id"), {
			videoId: youtubeURL,
			width: 854,
			height: 480,
			playerVars: {
				autoplay: 1,
				controls: 0,
				playlist: youtubeURL,
				showinfo: 0,
				modestbranding: 1,
				loop: 1,
				fs: 0,
				cc_load_policy: 0,
				iv_load_policy: 3,
				autohide: 0
			},
			events: {
				onReady: function(e) {
					e.target.mute();

					$(window).resize(function()
					{
						_this.CalculateYoutube($videoContainer, $ytRef, $ytWrapper, $ytHolder, $yt);
					});

					_this.CalculateYoutube($videoContainer, $ytRef, $ytWrapper, $ytHolder, $yt);
					$videoContainer.addClass("loaded");
				}
			}
		});
	},

	/**
	 * CalculateYoutube
	 * @return void
	 */
	CalculateYoutube: function($videoContainer, $ytRef, $ytWrapper, $ytHolder, $yt)
	{
		var wrapperRatio 	= $videoContainer.outerWidth() / $videoContainer.outerHeight();
		var videoRatio		= $ytHolder.outerWidth() / $ytHolder.outerHeight();

		if (wrapperRatio > videoRatio) {
			var x = $videoContainer.outerWidth() / $ytRef.outerWidth();
			var y = $ytRef.outerHeight();
			var z = (x * y) - $videoContainer.outerHeight();
			var w = $ytHolder.outerHeight() / 2;

			$ytWrapper.css("bottom", -(z/2));
			$ytWrapper.css("left", "0");
			$ytWrapper.css("right", "0");
			$ytWrapper.css("top", -(z/2));
		}
		else {
			var x = $videoContainer.outerHeight() / $ytRef.outerHeight();
			var y = $ytRef.outerWidth();
			var z = (x * y) - $videoContainer.outerWidth();
			var w = $ytHolder.outerWidth() / 2;

			$ytWrapper.css("bottom", "0");
			$ytWrapper.css("left", -(z/2));
			$ytWrapper.css("right", -(z/2));
			$ytWrapper.css("top", "0");
		}
	},

	/**
	 * GenerateID
	 * @return string
	 */
	GenerateID: function() 
	{
		var text = "";
		var possible = "abcdefghijklmnopqrstuvwxyz";

		for (var i = 0; i < 5; i++)
		text += possible.charAt(Math.floor(Math.random() * possible.length));

		return text;
	}
};

		