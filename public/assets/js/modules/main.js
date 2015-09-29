define(
	[
		'jquery', 
	], 
	function ($) {
		var $sticky = $('.sticky-header');
		
		$(document).on('scroll', function(event) {
			var scrollTop = $(window).scrollTop();
			console.log('scroll', scrollTop);
			if (scrollTop > 90) {
				$sticky.css('position', 'fixed');
				$sticky.css('margin-top', '-90px');
			} else if (scrollTop <= 90) {
				$sticky.css('position', 'static');
				$sticky.css('margin-top', '0');
			}
		});
	}
);