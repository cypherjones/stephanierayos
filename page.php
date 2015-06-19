<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>

<?php get_header(); ?>

  <div id="page">

        <div class="container">

        <?php if(is_page( 'home' )) : ?>
        
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

        <?php elseif(is_page( 'about' )) : ?>
        
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="row <?php echo $page_slug ?>"> 
            <div class="col-xs-12 col-md-offset-1 col-md-3 featured_img">
              <?php the_post_thumbnail( ); ?>
            </div>
            <div class="col-xs-12 col-md-7 content">
              <?php the_content( ); ?>
            </div>
          </div>
        
           <?php  endwhile; endif; ?> 

          <?php wp_reset_query(); rewind_posts(); ?>

        <?php elseif(is_page('portfolio' )) : ?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="row <?php echo $page_slug ?>"> 
            <!-- <div class="col-md-12">
              <div id="filters">
                  <a class="btn" data-filter="*">Everything</a>
                  <?php 
                    $terms = get_terms("category"); 
                    $count = count($terms); 
                    if ( $count > 0 ) {  
                      foreach ( $terms as $term ) { 
                          echo "<a class='btn' data-filter='.".$term->slug."'>" . $term->name . "</a>";
                      }
                    } 
                  ?>
                </div>
            </div> -->
          </div>
          <div id="posts" class="row">
            <div class="col-xs-12 col-md-12 img_column">
                    <div class="row">
                      <?php if(have_rows('portfolio')) : while(have_rows('portfolio')) : the_row();

                        $img = get_sub_field('portfolio_image'); 
                        list($width, $height, $attr) = getimagesize($img);

                        ?>

                          <div class="item col-xs-6 col-sm-6 col-md-2">
                            <a href="<?php echo $img; ?>" class="fancybox" rel="gallery1">
                              <div class="port-box">
                                <?php if($width == 620) : ?>
                                  <div class="port-case no-top">
                                    <?php else : ?>
                                  <div class="port-case">
                                    <?php endif; ?>
                                    <img src="<?php echo $img; ?>" alt="Portfolio Image">
                                  </div>
                              </div>
                            </a>
                          </div>

                      <?php endwhile; endif; ?>
                    </div> 

            </div>
          </div>
          <?php  endwhile; endif; ?> 

          <?php wp_reset_query(); rewind_posts(); ?>

        <?php elseif( is_page('contact' )) : ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="row">
            <div class="col-md-12">
              <?php the_content( ); ?>
            </div>
          </div>
          <div class="row <?php echo $page_slug ?>"> 
            <div class="col-md-12 form">

              <?php 

                $form = get_field('gravity_form');

                echo do_shortcode($form );

               ?>
              
            </div>
          </div>
        
          <?php  endwhile; endif; ?>

          <?php wp_reset_query(); rewind_posts(); ?>

        <?php endif; ?>

  </div>
</div>
  
  <?php if (is_page('contact' )) : ?>

    <?php get_footer( ); ?>

  <?php elseif (is_page('portfolio')) : ?>

    <?php get_footer('footer', 'portfolio' ); ?>
          
  <?php endif; ?>
			
