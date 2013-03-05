 <?php get_header(); ?>
 <link type="text/css" href="style.css"/>
<div id="bodywrapper" class="ym-wrapper">
	<div id="bodybox" class="ym-wbox">
    	<div id="slider-caras" class="ym-grid linearize-level-1">
    		<div id="acc">
    			<ul id="accordion-slider">
					<li><p>Slide 1</p><img src="image1.png" width="750" height="300" alt="Image Title"/></li>
					<li><img src="image2.png" width="750" height="300" alt="Image Title"/></li>
					<li><img src="image3.png" width="750" height="300" alt="Image Title"/></li>
					<li><img src="image4.png" width="750" height="300" alt="Image Title"/></li>
					<li><img src="image4.png" width="750" height="300" alt="Image Title"/></li>
						<li><img src="image4.png" width="750" height="300" alt="Image Title"/></li>
				</ul>
    		</div>
    	</div>
    	<div id="the_body" class="ym-grid linearize-level-1">
        	<div id="left" class="ym-g66 ym-gl">
        		<div id="insiderleft" class="ym-gbox">
        			<div id="ilgridl" class="ym-g70 ym-gl">
        				<!--integrer nanon scrool-->
                        <div id="blog" class="nano">

                        </div><!--blog-->

                        <div id="projects">
                        	<div class="projet"></div>
                        </div>
        			</div>
        			<div id="ilgridg" class="ym-g30 ym-gr">
        				qui sommes nous ?
        			</div>
        		</div>
            </div><!--left-ym-g66-->
            <!--sidebar-->
            <div id="right" class="ym-g33 ym-gl">

            	<div id="insideright" class="ym-gbox">
					<!--tabs-->

					<!--partenaires eris-->
					<!--archives-->
            		<?php get_sidebar(); ?>

            	</div><!--ym-wbox-->
   			</div><!--/right-->
            <div class="clear"></div>
	    </div><!--the_body-->
	</div><!--bodybox-->
</div><!--bodywrapper-->





<?php get_footer(); ?>
