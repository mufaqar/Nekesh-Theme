jQuery(document).ready(function($) {
	$(document).ready(function(){
		$('#main-menu').slicknav();
	});
});

jQuery(document).ready(function($) {      
	  var owl = $("#owl-demo");
      owl.owlCarousel({
      items : 1, //10 items above 1000px browser width
      itemsDesktop : [1000,1], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0;
      itemsMobile : [500,1], // itemsMobile disabled - inherit from itemsTablet option
	  autoPlay : true,
	  stopOnHover : true,
	  navigation: true,
	  pagination:false,
	  //Basic Speeds
	  slideSpeed : 800,
	  paginationSpeed : 800,
	  rewindSpeed : 1000,
      });
    });


jQuery(document).ready(function(){
	$("a[rel^='prettyPhoto']").prettyPhoto({
	overlay_gallery: false, social_tools: '', 'theme': 'facebook' /* light_square / dark_rounded / light_square / dark_square / facebook */
});
});

