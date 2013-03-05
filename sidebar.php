
<!--tabs-->
					    <div class="jquery_tabs">
					    	<!--plus recents-->
					    	<h4>Les plus r&eacute;cents</h4>
					    	<div class="tabbody">
								<?php
									$args = array( 'numberposts' => '5' );
									$recent_posts = wp_get_recent_posts( $args );
									foreach( $recent_posts as $recent ){
										echo '<li>'.'<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
									}
								?>
					    	</div>
					    	<!--podcasts-->
					    	<h4>Podcasts</h4>
					    	<div class="tabbody">
					    		<?php query_posts('cat=7&showposts=5');
									while (have_posts()) : the_post();
									?>
										<li>
		                               	<?php the_post_thumbnail('medium',array('class' => 'flexible','alt' =>'Cohesion sociale en Côte d Ivoire' ));?>
		                               	<a href="<?php the_permalink() ?>">
		                                 	<?php the_title();?>
		                                </a>
		        					</li>
						    	<?php endwhile;?>
						    </div>
					    	
					    	
					    	<h4>Facebook</h4>
					    	<div class="tabbody">
					    		<div class="fb-like-box" data-href="http://www.facebook.com/rcciradios" data-width="350" data-show-faces="true" data-stream="false" data-header="true"></div>
					    	</div>
					    	<h4>Twitter</h4>
					    	<div class="tabbody">
					    		
					    	</div>
					    </div>
					    
<div id="sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

    	<?php get_search_form(); ?>
    
    	<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
    
    	<h2>Archives</h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>
        
        <h2>Categories</h2>
        <ul>
    	   <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
        
    	<?php wp_list_bookmarks(); ?>
    
    	<h2>Meta</h2>
    	<ul>
    		<?php wp_register(); ?>
    		<li><?php wp_loginout(); ?></li>
    		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
    		<?php wp_meta(); ?>
    	</ul>
    	
    	<h2>Subscribe</h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
    	</ul>
	
	<?php endif; ?>

</div>
