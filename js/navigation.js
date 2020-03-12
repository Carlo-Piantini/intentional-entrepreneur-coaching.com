jQuery(document).ready(function() {
	// Scrolling animation for the menu items
	jQuery('.menu-item').click(function(e) {
		e.preventDefault();
		var scrollTarget = jQuery(this).children('a').attr('href');
		jQuery('html, body').animate({
			scrollTop: jQuery(scrollTarget).offset().top
		}, 2000);
	});
	// UI for the mobile menu
	// Handles the animation for the mobile toggle item
	jQuery('#mobile-toggle').click(function(e) {
		e.preventDefault();
		if (jQuery(this).hasClass('active')) {
			jQuery(this).removeClass('active');
			jQuery('#site-navigation').hide();
		}
		else {
			jQuery(this).addClass('active');
			jQuery('#site-navigation').show();
		}
	});
	// Handles menu animation on screen resizes
	var resizeId;
	jQuery(window).resize(function() {
		clearTimeout(resizeId);
		resizeId = setTimeout(configMenu, 500);

		function configMenu() {
			var window_width = jQuery(window).width();
			if (window_width >= 768) {
				jQuery('#mobile-toggle').removeClass('active');
				jQuery('#site-navigation').show();
			}
			else {
				jQuery('#site-navigation').hide();
			}
		}
	});
});