// Gumby is ready to go
/*
Gumby.ready(function() {
	console.log('Gumby is ready to go...', Gumby.debug());

	// placeholder polyfil
	if(Gumby.isOldie || Gumby.jQuerydom.find('html').hasClass('ie9')) {
		jQuery('input, textarea').placeholder();
	}
});

// Oldie document loaded
Gumby.oldie(function() {
	console.log("This is an oldie browser...");
});

Gumby.touch(function() {
	console.log("This is a touch enabled device...");
});



*/

// Document ready
jQuery(function() {
 jQuery('#bxslider').bxSlider({
      auto: true,
      pager: true,
      mode: 'fade',
      controls: false, randomStart: true, speed: 400, autoHover: true
     });
});

jQuery(function() {
   jQuery('#simple-menu').sidr({
      name: 'sidr',
      side: 'left' // By default
    });
});

if(jQuery('#theswitch').length ){ 
  jQuery(function() {
    var container = document.querySelector('#thumb_view');
    var msnry = new Masonry( container, {
      columnWidth: 233
    });
  });
} 
