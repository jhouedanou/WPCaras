 <?php get_header(); ?>
 <link type="text/css" href="style.css"/>
<div id="bodywrapper" class="ym-wrapper">
  <div id="bodybox" class="ym-wbox">
     <div id="the_body" class="ym-grid linearize-level-1">
          <div id="left" class="ym-g70 ym-gl linearize-level-1">
            <div id="insiderleft">
              <div id="ilgridlz" class="ym-g70 ym-gl">
                  <div id="overlay-deco2">
                </div>
                  <div id="content">
                      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                          <div class="padding-title">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                          </div>
                          <div class="entry-content">
                            <div class="ze">
                              <?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
                            </div>
              <?php //the_post_thumbnail('medium');?>
                            <?php the_content(); ?>

                            <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

                            <?php the_tags( 'Tags: ', ', ', ''); ?>
                        <?php edit_post_link('Edit this entry','','.'); ?>
                          <?php comments_template(); ?>

                      <?php endwhile; endif; ?>

                          </div>

                        </article>


                  </div><!--content-->
              </div><!--ilgridl -->
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
 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("zone-reseaux-sociaux") ) : ?>
<?php endif; ?>
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
