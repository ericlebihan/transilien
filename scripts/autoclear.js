(function($){
	$.fn.autoClear = function() {
		this.each(function(){
			var jThis = $(this);
			var val = jThis.val();
			if (val) {
				jThis.addClass('autoclear-default');
				jThis.unbind('focus.autoclear').bind('focus.autoclear', function(){
					jThis.removeClass('autoclear-default');
					if (jThis.val() == val) {
						jThis.val('');
					}
				});
				jThis.unbind('blur.autoclear').bind('blur.autoclear', function(){
					if (jThis.val() == '') {
						jThis.val(val);
						jThis.addClass('autoclear-default');
					}
				});
			}
		})
		return this;
	}
})(jQuery)