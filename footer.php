<div id="footerz">
	<div id="fbboxf">
		<p>Copyright 2013 | <span>Réseau Radios Cohésion sociale et Citoyenneté</span></p>
	</div>
</div>
<!-- here comes the javascript -->
	<?php wp_footer(); ?>

	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-ui-1.8.5.custom.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tabs.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.syncheight.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.backstretch.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.kwicks-1.5.1.pack.js"></script>
<script type="text/javascript">
 $().ready(function() {
	 $('#accordion-slider').kwicks({
		 max : 230,
		 spacing : 1
	 });
});
</script>
<!-- jQuery is called via the Wordpress-friendly way via functions.php -->
<!-- this is where we put our custom functions -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>
<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
</body>
</html>
