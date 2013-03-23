 <?php get_header(); ?>
 <link type="text/css" href="style.css"/>
<div id="bodywrapper" class="ym-wrapper">
	<div id="bodybox" class="ym-wbox">
    	<div id="slider-caras" class="ym-grid linearize-level-1">
    		<div id="acc">
    			<ul id="accordion-slider">
              <li id="slide1">
                <p>Slide 1</p><img src="image1.png" width="750" height="300" alt="Image Title"/>
              </li>
              <li id="slide2">
                <img src="image2.png" width="750" height="300" alt="Image Title"/>
              </li>
              <li id="slide3">
                <img src="image3.png" width="750" height="300" alt="Image Title"/>
              </li>
              <li id="slide4">
                <img src="image4.png" width="750" height="300" alt="Image Title"/>
              </li>
              <li id="slide5">
                <img src="image4.png" width="750" height="300" alt="Image Title"/>
              </li>
              <li id="slide6">
                <img src="image4.png" width="750" height="300" alt="Image Title"/>
              </li>
				</ul>
    		</div>
    	</div>
    	<div id="the_body" class="ym-grid linearize-level-1">
        	<div id="left" class="ym-g70 ym-gl">
        		<div id="insiderleft">
        			<div id="ilgridl" class="ym-g70 ym-gl">
        				<!--integrer nanon scrool-->
                        <div id="blog" class="nano">

<?php $my_query = new WP_Query('cat=1&showposts=10');
                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  <li>
                    <div class="image-eris-ft">
                                        <a href="#">
                                          <?php the_post_thumbnail('medium',array('class' => 'flexible','alt' =>'Cohesion sociale en Côte d Ivoire' ));?>
                                        </a>
                                    </div><!--image-->
                                    <div class="details-eris">
                                        <h5><a href="<?php the_permalink() ?>"><?php the_title();?></a></h5>
                                <?php the_excerpt(); ?>
                                        <span class="date"><div class="date">
                                    <?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?><br/>
                                    </div>
                                    </span>
                                    </div><!--details-->
                      </li>
                <?php endwhile; ?>

                        </div><!--blog-->

                        <div id="projects">
                        	<div class="projet"></div>
                        </div>
        			</div><!--fin blogs -->
        			<div id="ilgridg" class="ym-g30 ym-gr">
						<div class="fiend">
              <h3>Ce que nous faisons</h3>
              <div id="decofinder"></div>
            </div>
	       				<div class="nano2"><!--prez-->
		       				<div class="cqs">
		       					<h3>Arts</h3>
		       					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque vulputate augue id venenatis. Donec non sem ac felis sagittis commodo commodo aliquam purus. Aliquam luctus risus at tortor dictum tristique non nec mauris. Praesent in commodo urna. Aliquam consectetur risus eu arcu ultricies adipiscing. Suspendisse potenti. Duis quis est ut nulla semper semper. Nam consequat lectus nec urna mollis eu vestibulum orci varius.</p>
	        				</div>
	        				<div class="cqs">
								<h3>Arts</h3>
		       					<p> Cras facilisis varius turpis, quis auctor turpis elementum nec. Praesent sed convallis ligula. Mauris iaculis nisi non tellus dictum eu sollicitudin risus placerat. Integer non felis ante, et aliquet lorem. Donec suscipit varius urna sodales hendrerit. Pellentesque convallis lacus in quam blandit hendrerit. Maecenas sit amet diam eget massa hendrerit auctor.</p>
	        				</div>
	        				<div class="cqs">
								<h3>Arts</h3>
		       					<p> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus sodales pretium risus eget ornare. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur accumsan, velit non pellentesque condimentum, lectus mauris a. </p>
	        				</div>
	        				<div class="cqs">
		       					<h3>Arts</h3>
		       					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque vulputate augue id venenatis. Donec non sem ac felis sagittis commodo commodo aliquam purus. Aliquam luctus risus at tortor dictum tristique non nec mauris. Praesent in commodo urna. Aliquam consectetur risus eu arcu ultricies adipiscing. Suspendisse potenti. Duis quis est ut nulla semper semper. Nam consequat lectus nec urna mollis eu vestibulum orci varius.</p>
	        				</div>
	        				<div class="cqs">
								<h3>Arts</h3>
		       					<p> Cras facilisis varius turpis, quis auctor turpis elementum nec. Praesent sed convallis ligula. Mauris iaculis nisi non tellus dictum eu sollicitudin risus placerat. Integer non felis ante, et aliquet lorem. Donec suscipit varius urna sodales hendrerit. Pellentesque convallis lacus in quam blandit hendrerit. Maecenas sit amet diam eget massa hendrerit auctor.</p>
	        				</div>
	        				<div class="cqs">
								<h3>Arts</h3>
		       					<p> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus sodales pretium risus eget ornare. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur accumsan, velit non pellentesque condimentum, lectus mauris a. </p>
	        				</div>
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
