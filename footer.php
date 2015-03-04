		<?php if(is_front_page()) : ?>

      <?php get_template_part('footer', 'frontpage' ); ?>

    <?php else : ?>  

      <?php get_template_part('footer', 'main' ); ?>

    <?php endif; ?>
	<script type="text/javascript" charset="utf-8">
	  $(document).ready(function(){
  $("a[rel^='prettyPhoto']").prettyPhoto();
});
	</script>
	</body>
</html>