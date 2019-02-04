/**
 * Form
 * @author Donny de Vries
 */
var Form = function(options) {
	this.Init(options);
};

Form.prototype =
{
	/**
	 * Constructor
	 * @param	object options
	 * @return	void
	 */
	Init: function(options)
	{
		this.options = {
			$forms: '.form form',
		};
		
		$.extend(this.options, options);

		this.$forms = $(this.options.$forms);
		
		this.Start();
	},
	
	/**
	 * Start
	 * @return void
	 */
	Start: function()
	{
		var _this = this;

		this.$forms.each(function(index, el)
		{
			var $form 	= $(el);
			var $submit = $form.find(".submit a");

			_this.Submit($form, $submit);
		});
	},

	/**
	 * Submit
	 * @return void
	 */
	Submit: function($form, $submit) 
	{
		$submit.on("click touchstart", function(e) {
			e.preventDefault();
			$form.submit();
		});
	}
};