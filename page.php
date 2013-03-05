<?php get_header(); ?>
<div id="bodywrapper" class="ym-wrapper">
	<div id="bodybox" class="ym-wbox">    
    	<div id="the_body" class="ym-grid linearize-level-1">
        	<div id="left" class="ym-g66 ym-gl">
				<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

<div class="description">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</div>
							<div class="ze">
								<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
							</div>
			<div class="entry">

				<?php the_content(); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</article>
		
		<?php comments_template(); ?>


				<?php endwhile; endif; ?>
				</div><!--content-->
			</div><!--left-ym-g66-->

			<div id="right" class="ym-g33 ym-gl">

            	<div id="insideright" class="ym-gbox">
					<!--tabs-->
					    
					<!--partenaires eris-->
					<!--archives-->
            		<?php get_sidebar(); ?>
            		            		
            		            		
            	</div><!--ym-wbox-->
   			</div><!--/right-->
	    </div><!--the_body-->
	</div><!--bodybox-->
</div><!--bodywrapper-->  
<?php get_footer(); ?>
