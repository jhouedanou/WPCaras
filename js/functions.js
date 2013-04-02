// remap jQuery to $
(function($){})(window.jQuery);
 $('#accordion-slider').kwicks({
                  size:169,
                  maxSize:500,
                  spacing:1,
                  behavior:'menu',
                  duration: 120,
                    easing: 'easeOutBounce'
              });

$("a[href$='.jpg'],a[href$='.png'],a[href$='.gif']").colorbox({transition:"none", maxWidth:"80%", maxHeight:"80%"});

$.jGrowl.defaults.position = 'bottom-left';

$('div#nbwrapper.ym-g70 div#serch.ym-g30 div#search-2.widget form#searchform div input#searchsubmit').val(' ');
   (function(){
  var d = document, e = d.documentElement, s = d.createElement('style');
  if (e.style.MozTransform === ''){ // gecko 1.9.1 inference
   // s.textContent = 'body{visibility:hidden}';
    s.textContent = 'body{text-indent:-9999px}';
    e.firstChild.appendChild(s);
    function f()
    {
    var ffrendertime = setTimeout ( function(){s.parentNode && s.parentNode.removeChild(s)} , 200 );
    }
    addEventListener('load',f,false);
    setTimeout(f,2000);
  }
})();
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
//$('#ilgridg, #right').syncHeight({ updateOnResize: true });

  $('.nano').slimScroll({
        height: '311px'
    });
 $('.nano2').slimScroll({
        height: '311px'
    });
  $('.entry-content').slimScroll({
        height: '503px'
    });
 $('#overlay-deco')
           .hover(function(){
             jQuery(this).animate({backgroundPosition: '0px 82px'});
              //$.jGrowl("Veuillez utiliser la molette de votre souris pour faire d&eacute;filer le texte ( &darr;  &uarr;) ", { life: 5000 }, { header: 'Important' });
              },function(){
            jQuery(this).animate({backgroundPosition: '0px 0px'});
            });
 $('#overlay-deco2')
           .hover(function(){
             jQuery(this).animate({backgroundPosition: '0px 82px'});
               //$.jGrowl("Veuillez utiliser la molette de votre souris pour faire d&eacute;filer le texte ( &darr;  &uarr;) ", { life: 5000 }, { header: 'Important' });

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


/* optional triggers

$(window).load(function() {

});

$(window).resize(function() {

});

*/
