<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<?php if (is_search()) { ?>
	<meta name="robots" content="index, follow" />
	<?php } ?>
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="fb:app_id" content="392704960811912"/>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lte IE 7]>
		<script src="<?php bloginfo('template_directory'); ?>/js/respond.min.js" type="text/javascript"></script>
		<link href="<?php bloginfo('template_directory'); ?>/css/iehacks.min.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="http://html5shim.gooym-glecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/tabs.css" type="text/css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/base.min.css" type="text/css"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
    <!--src:http://presshive.com/tips/how-to-specify-a-facebook-thumbnail-when-sharing-a-post/-->
<?php
  $szPostContent = get_the_content();
  $szSearchPattern = '~<img [^>]* />~';
  preg_match_all( $szSearchPattern, $szPostContent, $aPics );
  $iNumberOfPics = count($aPics[0]);
    if ( $iNumberOfPics > 0 ) : ?>
      <?php $t1 = strpos($aPics[0][0], 'src="'); ?>
      <?php $t2 = strpos($aPics[0][0], '"', $t1 + 6); ?>
      <?php $pixt = substr($aPics[0][0], $t1 + 5, $t2 - $t1 - 5); ?>
      <link rel="image_src" href="<?php echo $pixt; ?>" />
    <?php else : ?>
      <link rel="image_src" href="DEFAULT IMAGE SOURCE" />
    <?php endif; ?>


</head>
<body>

	<div id="pourleref" style="display:none">
		<h1>Centre Africain de Recherche sur les Arts du Spectacle, le dialogue interethnique et la cohésion sociale</h1>
	</div>
	<!--haut de page-->
	<!--section logo-->
	<div id="logowrapper" class="ym-wrapper">
		<div id="logobox" class="ym-wbox">
        	<!--logo caras,navbar et zone de recherche-->
        	<div id="bottom" class="ym-grid linearize-level-1">
                <div id="logo" class="ym-g30 ym-gl">
                	<a href="<?php bloginfo( 'url' ); ?>">
                		<img class="flexible" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Centre Africain de Recherche sur les Arts du Spectacle, le dialogue interethnique et la communication">
                	</a>
                </div>
                <!--logo-->
                <div id="nbwrapper" class="ym-g70 ym-gr">
                		<div id="nbw" class="ym-g70 ym-gl">
<!--menuhaut-->
                		<?php
            wp_nav_menu( array( 'menu' => 'menuhaut','walker' => new MV_Cleaner_Walker_Nav_Menu(),'menu_class' => 'nav'));
          ?>

                    </div>
                		<!--barre de recherche-->
                    <div id="serch" class="ym-g30 ym-gr">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("zone-de-recherche") ) : ?>
<?php endif; ?>
                		</div>
                </div><!--nbwrapper-->
		   	</div><!--navabar-inner -->
	  	</div><!--logobox-->
    </div><!--logowrapper-->

