;(function($){
	/***** EqualizeHeight *****/
	$.fn.equalizeHeight = function () {
		var maxHeight = 0;
		this.each(function () {
				if ($(this).height() > maxHeight) {
						maxHeight = $(this).height();
				}
		});
		var css = {"min-height":maxHeight,"height":"auto"};
		if ($.browser.msie && $.browser.version <= 6 ) {
			css = {"height" : maxHeight}
		}
		return this.css(css);
	};
})(jQuery);