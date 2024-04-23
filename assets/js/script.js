(function ($) {
  'user strict';
  $(document).ready(function () {
    // mobile menu
    $('.main_menu').prepend(`
            <div class="mobile_logo_closeButton">
                <div class="logo">
                    <a href="${wt_data.root_url}">
                        <img src="${wt_data.root_directory}/assets/images/logo-pl.svg" alt="WPTofee">
                    </a>
                </div>
                <button id="close_menu" class="close_menu"></button>
            </div>`);

    $('.navbar-toggler').on('click', () => {
      $('.main_menu').addClass('open_menu');
    });

    $('.close_menu').on('click', () => {
      $('.main_menu').removeClass('open_menu');
    });

	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 36) {
		  $('.navbar').addClass('sticky');
		} else {
		  $('.navbar').removeClass('sticky');
		}
	  });

	// Contact us tab
	$('.wt-tab-item').on('click', function(){
		$('.wt-tab-item').removeClass('active');
		$(this).addClass('active');
		var tabClass = $(this).data('target');
		$('.wt-tab-item-content').removeClass('active');
		$('.form-'+tabClass).addClass('active');
	});
 });

})(jQuery);
