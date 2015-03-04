<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>

<?php get_header( ); ?>
<div id="front_page fill">
  <div id="myCarousel" class="carousel slide carousel-fade ">
    <div class="carousel-inner">

      <div class="active item">
        <div class="fill" style="background-image:url('<?php bloginfo('template_directory' ); ?>/assets/img/front_page_bkg.png');">
          <div class="container center">
              <a href="<?php echo esc_url(get_permalink(get_page_by_title('home' ) )); ?>" id="front_page_button" class=""></a>
          </div>
        </div>
      </div>

    <?php  if( have_rows('images_table') ) :

    while ( have_rows('images_table') ) : the_row(); ?>
      
      <div class="item">
        <div class="fill" style="background-image:url(<?php the_sub_field('images') ?>);">
          <div class="container center">
            <a href="<?php echo esc_url(get_permalink(get_page_by_title('home' ) )); ?>" id="front_page_button" class=""></a>
          </div>
        </div>
      </div>


    <?php endwhile; ?>

    <?php else : ?>

      <?php endif; ?>

    </div>
  </div>
</div> 
<?php get_footer( ); ?>