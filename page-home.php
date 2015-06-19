<?php 

  global $post;

  $page_slug  = $post->post_name;

   get_header( ); 

   if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="row <?php echo $page_slug ?>"> 
              <div id="front_page">
                <div class="container front_pg_img">
                  <img src="<?php the_field('front_page_image') ?>" alt="">
                </div>
              </div> 
          </div>
        
          <?php  endwhile; endif; ?>

          <?php wp_reset_query(); rewind_posts(); ?>
<?php get_footer( ); ?>