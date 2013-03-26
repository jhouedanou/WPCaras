// remap jQuery to $
(function($){})(window.jQuery);

$('#ilgridg, #right').syncHeight({ updateOnResize: true });
 $('#accordion-slider').kwicks({
                  size:169,
                  maxSize:500,
                  spacing:1,
                  behavior:'menu',
                  duration: 120,
                    easing: 'easeOutBounce'
              });
  $('.nano').slimScroll({
        height: '311px'
    });
 $('.nano2').slimScroll({
        height: '311px'
    });
 $('#overlay-deco')
           .hover(function(){
             jQuery(this).animate({backgroundPosition: '0px 82px'});
              },function(){
            jQuery(this).animate({backgroundPosition: '0px 0px'});
            });
  $(".te").hover(
      function() {
         $(this).children('.details-caras-slide').fadeIn('slow');
      },function(){
         $(this).children('.details-caras-slide').fadeOut('fast');
      }
  );
$.backstretch("http://localhost/caras/wp-content/themes/murtaugh-HTML5-Reset-Wordpress-Theme-8aa6329/images/indexc.jpg");/* trigger when page is ready */
var ww = document.body.clientWidth;
$(document).ready(function() {
	$(".nav li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})

	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".nav").toggle();
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 768) {
		$(".toggleMenu").css("display", "inline-block");
		if (!$(".toggleMenu").hasClass("active")) {
			$(".nav").hide();
		} else {
			$(".nav").show();
		}
		$(".nav li").unbind('mouseenter mouseleave');
		$(".nav li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	}
	else if (ww >= 768) {
		$(".toggleMenu").css("display", "none");
		$(".nav").show();
		$(".nav li").removeClass("hover");
		$(".nav li a").unbind('click');
		$(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}
 WebFontConfig = {
    google: { families: [ 'Open+Sans::latin', 'Francois+One::latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
/* optional triggers

$(window).load(function() {

});

$(window).resize(function() {

});

*/
