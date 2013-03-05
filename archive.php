<?php get_header(); ?>
<div id="bodywrapper" class="ym-wrapper">
	<div id="bodybox" class="ym-wbox">    
    	<div id="the_body" class="ym-grid linearize-level-1">
        	<div id="left" class="ym-g66 ym-gl">
				<div id="content">
		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>


			<?php while (have_posts()) : the_post(); ?>
			
				<li class="eris-cat">
					<h5><a href="<?php the_permalink() ?>"><?php the_title();?></a></h5>
										<div class="image-eris-ft">
		                                    <a href="#">
		                                    	<?php the_post_thumbnail('medium',array('class' => 'flexible','alt' =>'Cohesion sociale en Côte d Ivoire' ));?>
		                                    </a>
		                                </div><!--image-->
		                                <div class="details-eris">
		                                    
		                                    	<?php the_content(); ?>
		                                    <span class="date"><div class="date">
		                            		<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?><br/>
		                            		</div>
		                            		</span>
		                                </div><!--details-->
		        					</li>

			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>
</div><!--content-->
			</div><!--left-ym-g66-->

			<div id="right" class="ym-g33 ym-gl">

            	<div id="insideright" class="ym-gbox">
					
					<!--partenaires eris-->
					<!--archives-->
            		<?php get_sidebar(); ?>
            		            		
            	</div><!--ym-wbox-->
   			</div><!--/right-->
	    </div><!--the_body-->
	</div><!--bodybox-->
</div><!--bodywrapper-->  
<?php get_footer(); ?>
