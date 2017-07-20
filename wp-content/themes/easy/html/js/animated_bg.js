(function($, window, document, undefined) {

	$.fn.animatedBG = function(options){
		var defaults = {
				colorSet: ['#15141a', '#88abb2', '#dbc26c', '#db936c', '#6dbcd9'],
				speed: 2000
			},
			settings = $.extend({}, defaults, options);

		return this.each(function(){
			var $this = $(this);

			$this.each(function(){
				var $el = $(this),
					colors = settings.colorSet;
				
				function shiftColor() {
					var color = colors.shift();
					colors.push(color);
					return color;
				}

				// initial color
				var initColor = shiftColor();
				$el.css('backgroundColor', initColor);
				setInterval(function(){
					var color = shiftColor();
					$el.animate({backgroundColor: color}, 3000);
				}, settings.speed);
			});
		});
	};

	// Initialize
	$(function(){
		$('.animated-bg').animatedBG();
	});

}(jQuery, window, document));