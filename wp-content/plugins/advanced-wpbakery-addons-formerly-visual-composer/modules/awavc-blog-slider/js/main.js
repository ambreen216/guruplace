    $=jQuery;
$(document).ready(function() {



/*  $("#advc-tesimonial").owlCarousel({
	  navigation : true, // Show next and prev buttons
	  navigationText: [
		   "<i class='fa fa-chevron-left'></i>",
		   "<i class='fa fa-chevron-right'></i>"
		],

	  autoPlay:true,
	  pagination: true,
	  slideSpeed : 1000,
	  paginationSpeed : 1000,
	  singleItem:true,
      transitionStyle : "backSlide",

  });*/
  
  $("#advc-tesimonial2").owlCarousel({
	  autoPlay:true,
	  pagination: true,
	  slideSpeed : 1000,
	  paginationSpeed : 1000,
	  singleItem:true,
      transitionStyle : "backSlide",
	  
  });
  
  $("#advc-tesimonial3").owlCarousel({
	  autoPlay:true,
	  pagination: true,
	  slideSpeed : 1600,
	  paginationSpeed : 1600,
	  singleItem:true,
	  lazyLoad : false,
	  lazyFollow : true,
	  lazyEffect : "fade"
	  
  });
  
  $("#advc-tesimonial4").owlCarousel({
	  navigation : true, // Show next and prev buttons
	  navigationText: [
		   "<i class='fa fa-chevron-left'></i>",
		   "<i class='fa fa-chevron-right'></i>"
		],

      itemsDesktop:[1000,2],
      itemsDesktopSmall:[979,2],
      itemsTablet:[767,1],
	  autoPlay:true,
	  pagination: true,
	  slideSpeed : 1600,
	  paginationSpeed : 1600,
	  singleItem:false,
	  lazyLoad : false,
	  lazyFollow : true,
	  lazyEffect : "fade"
	  
  });
  

  
  $("#advc-tesimonial6").owlCarousel({
	  navigation : true, // Show next and prev buttons
	  navigationText: [
		   '<i class="fa fa-chevron-left"></i>',
		   '<i class="fa fa-chevron-right"></i>'
		],
	  items:2,
      itemsDesktop:[1000,2],
      itemsDesktopSmall:[979,2],
      itemsTablet:[767,1],
	  autoPlay:true,
	  pagination: true,
	  slideSpeed : 1600,
	  paginationSpeed : 1600,
	  singleItem:false,
	  lazyLoad : false,
	  lazyFollow : true,
	  lazyEffect : "fade"

  });

    $("#ad-ts-slider7").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[767,1],
        pagination: true,
        autoPlay:true
    });

    $("#ad-ts-slider8").owlCarousel({
        items:1,
        itemsDesktop:[1199,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[767,1],
        pagination: true,
        autoPlay:true
    });

    $("#ad-ts-slider9").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination: true,
        transitionStyle : "goDown",
        autoPlay:true
    });

    $("#ad-ts-slider10").owlCarousel({
        items:3,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:true,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });

    $('#menu').slicknav();
 
});