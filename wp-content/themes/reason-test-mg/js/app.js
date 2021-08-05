
(function ($) {

	/**
	 * Hamburger
	*/
	const $nav = $('.site__header--menu-toggle');
	$nav.on('click', function () {
		$(this).toggleClass('is-active');
		$('body').toggleClass('no-scroll nav-is-open');
	});

})(jQuery);