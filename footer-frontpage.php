<?php 

  global $post;

  $page_slug  = $post->post_name;

 ?>

<div class="<?php echo $page_slug ?> footer">
	<footer>
		
	</footer>
</div>

<script>
	$('.carousel').carousel({
		pause: "false",
    interval: 2000
	});
</script>
