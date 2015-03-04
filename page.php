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

        <?php elseif(is_page( 'about' )) : ?>
        
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="row <?php echo $page_slug ?>"> 
            <div class="col-xs-12 col-md-4 featured_img">
              <?php the_post_thumbnail( ); ?>
            </div>
            <div class="col-xs-12 col-md-8 content">
              <?php the_content( ); ?>
            </div>
          </div>
        
          <?php  endwhile; endif; ?>

          <?php wp_reset_query(); rewind_posts(); ?>

        <?php elseif(is_page('portfolio' )) : ?>

          <?php

            $gallery = new WP_Query( 
                        array(
                              'post_type' => 'gallery',
                              'order'     => 'ASC',
                              'orderby'   => 'date',
                              'posts_per_page'  => 20
                            )
                          ); 
                    
          ?>

          <div class="row <?php echo $page_slug ?>"> 
            <div class="col-md-12">
              <div id="filters">
                  <a class="btn" data-filter="*">Everything</a>
                  <?php 
                    $terms = get_terms("category"); 
                    $count = count($terms); 
                    if ( $count > 0 ){  
                      foreach ( $terms as $term ) { 
                        echo "<a class='btn' data-filter='.".$term->slug."'>" . $term->name . "</a>";
                      }
                    } 
                  ?>
                </div>
            </div>
          </div>
          <div id="posts" class="row">
            <div class="col-xs-12 col-md-12 img_column">
              <?php while ( $gallery->have_posts()) : $gallery->the_post();
                $termsArray = get_the_terms( $post->ID, "category" );  
                $termsString = ""; 
                  foreach ( $termsArray as $term ) {  
                    $termsString .= $term->slug.' '; 
                  }
              ?> 
                    <div class="<?php echo $termsString; ?> item col-xs-3 col-sm-6 col-md-4">
                      <?php 

                            $image = get_field('gallery_image');

                            if(! empty($image)) : ?>

                            <a rel="prettyPhoto[<?php echo $termsString; ?>]" href="<?php echo $image ?>"><img src="<?php echo $image ?>" alt=""></a>

                            <?php endif; ?>
                    </div>

              <?php endwhile;  ?>
            </div>
          </div>

        <?php elseif( is_page('contact' )) : ?>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
  
  
			
<?php get_footer(); ?>