;(function($){
	/***** EqualizeHeight *****/
	$.fn.equalizeHeight = function () {
		var maxHeight = 0;
		return this.each(function () {
				if ($(this).height() > maxHeight) {
						maxHeight = $(this).height();
				}
		}).css({"min-height":maxHeight,"height":"auto"});
	};
})(jQuery);