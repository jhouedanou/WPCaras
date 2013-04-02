 <?php get_header(); ?>

<div id="bodywrapper" class="ym-wrapper">
	<div id="bodybox" class="ym-wbox">
    	<div id="slider-caras" class="ym-grid linearize-level-1">
    		<div id="acc">
    			<ul id="accordion-slider">
            <!--loop affichant les activités du caras : cat5-->
            <?php $accordion = new WP_Query('cat=5&showposts=6');
                $i = 0;
                 while ($accordion->have_posts()) : $accordion->the_post();
                  $i++; ?>
                        <li id="<?php echo 'slider'.$i;?>" class="te">
                            <h3 class="zetitleslide"><a href="<?php the_permalink() ?>"><?php the_title();?></a></h3>
                          <div class="details-caras-slide">

                                <?php the_excerpt(); ?>
                                    </div><!--details-->
                      </li><!--izz-->
                      <?php $s++;?>
                <?php endwhile; ?>
				</ul>
    		</div>
    	</div>
    	<div id="the_body" class="ym-grid linearize-level-1">
        	<div id="left" class="ym-g70 ym-gl linearize-level-1">
        		<div id="insiderleft">
        			<div id="ilgridl" class="ym-g70 ym-gl">
        				<!--overlay deco-->
                <div id="overlay-deco">
                </div>
                <!--integrer nanon scrool-->
                        <div id="blog" class="nano">
                <?php $my_query = new WP_Query('cat=1&showposts=10');
                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <div class="iblogz">
                            <h3 class="zetitle"><a href="<?php the_permalink() ?>"><?php the_title();?></a></h3>
                          <div class="image-caras-ft">
                            <a href="#">
                              <?php the_post_thumbnail('medium',array('class' => 'flexible','alt' =>'Centre de Recherche et des Arts du Spectacle' ));?>
                            </a>
                          </div><!--image-->
                          <div class="details-caras">

                                <?php the_excerpt(); ?>
                                        <span class="date"><div class="date">
                                    <?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?><br/>
                                    </div>
                                    </span>
                                    </div><!--details-->
                      </div><!--iblogz-->
                <?php endwhile; ?>
                        </div><!--blog-->
                        <div id="projects">
                        	<div class="projet">
dz
                          </div>
                        </div>
        			</div><!--fin blogs -->
        			<div id="ilgridg" class="ym-g30 ym-gr">
						<div class="fiend">
              <h3>Ce que nous faisons</h3>
              <div id="decofinder"></div>
            </div>
	       				<div class="nano2"><!--prez-->
		       				<!--loop affichant les activités du caras : cat5-->
                  <?php
                    $axesintervention = new WP_Query('cat=6&showposts=6');
                    while ($axesintervention->have_posts()) : $axesintervention->the_post();?>
                      <div class="cqs">
                            <h3><a href="<?php the_permalink() ?>"><?php the_title();?></a></h3>
                            <p>
                                <?php the_excerpt(); ?>
                            </p><!--details-->
                      </div><!--cqs-->
                      <?php ;?>
                    <?php endwhile; ?>
        				</div><!--nano-->

        				<div class="cqs" id="last-item">
		       				<h3>Retrouvez nous sur</h3>

	        			</div>
        			</div>
        		</div>
            </div><!--left-ym-g66-->
            <!--sidebar-->
            <div id="right" class="ym-g30 ym-gl">
            	<div id="insideright" class="ym-gbox">
            		<?php get_sidebar(); ?>
   		   	 </div><!--/right-->
	    </div><!--the_body-->
	</div><!--bodybox-->
</div><!--bodywrapper-->





<?php get_footer(); ?>
