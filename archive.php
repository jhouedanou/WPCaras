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
       <div class="padding-title">
          <h1 class="entry-title"><?php single_cat_title(); ?></h1>
        </div>
    <?php if (have_posts()) : ?>

      <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

<div id="caraseer">
      <?php while (have_posts()) : the_post(); ?>

                          <div class="cat-content">
          <h5><a href="<?php the_permalink() ?>"><?php the_title();?></a></h5>
                            <?php the_excerpt(); ?>
                                        <span class="date">
                                          <div class="date">
                                    <?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?><br/>
                                    </div>
                                    </span>
                            </div><!--details-->

      <?php endwhile; ?>

      <?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

  <?php else : ?>

    <h2>Nothing found</h2>

  <?php endif; ?>

</div>
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
