jQuery(document).ready(function($){

	var bannerExists = $('.view-top-banner').length;
	if (bannerExists) {
		var background = $('.view-top-banner img').attr('src');
		$('.view-top-banner').css('background-image', 'url(' + background + ')');
		$('.breadcrumb').prependTo('.view-top-banner .views-row');
	}

	$('#toggle-nav').click(function() {
		$('body').toggleClass('show-nav');
		$(this).toggleClass('active');
		return false;
	});

	$(".view-homepage-slides .view-content").addClass('owl-carousel').owlCarousel({
	    items : 1,
	    itemsCustom : false,
	    itemsDesktop : [1199,1],
	    itemsDesktopSmall : [980,1],
	    itemsTablet: [768,1],
	    itemsTabletSmall: false,
	    itemsMobile : [479,1],
	    autoPlay : true,
	    stopOnHover : false,
	    pagination : true,
	    paginationNumbers: false,
	    responsive: true,
	});

	 // // Resize Window
  //   $(window).resize(function () {
  //       if (this.resizeTO) clearTimeout(this.resizeTO);
  //       this.resizeTO = setTimeout(function () {
  //           $(this).trigger('resizeEnd');
  //       }, 100);
  //   });

  //   //Hide parallax containers for mobile
  //   $(window).bind('resizeEnd', function () {
  //       var width = $(window).width();
  //       // var isMobile = ((/Android|iPad|iPhone|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera) || width <= 599);
  //       var isMobile = (width <= 767);
  //       var carouselExists = $('.owl-carousel').length;
  //       if (isMobile && carouselExists) {
  //       	$(window).load(function() {
  //       		var itemHeight = $('.view-homepage-slides .owl-wrapper').height();
  //           	$('.view-homepage-slides .owl-item').css('height', itemHeight);
  //       	});
  //       }
  //       else {
  //       	$('.view-homepage-slides .owl-item').css('height', 'auto');
  //       }
  //   }).trigger('resizeEnd');

});