		<?php if(is_front_page()) : ?>

      <?php get_template_part('footer', 'frontpage' ); ?>

    <?php elseif (is_page('portfolio' )) : ?>

      <?php get_template_part('footer', 'portfolio' ); ?>

    <?php else : ?>  

      <?php get_template_part('footer', 'main' ); ?>

    <?php endif; ?>
	   <script>
    $(document).ready(function() {
        $('.fancybox').fancybox({
          beforeShow: function () {
          //if you already have titles
          //on your fancybox you can append
          if(this.title) {
            //set description to current title
            //this will set what posts
            var description = this.title;
            //add pinterest button for title
            this.title = '<a href="http://pinterest.com/pin/create/button/?url=' +
              encodeURIComponent(document.location.href) +
              '&media=' +
            //put the path to the image you want to share here
            encodeURIComponent(this.href) +
              '&description=' + description + '" class="pin-it-button" count-layout="horizontal">' +
              '<img border="0" src="http://assets.pinterest.com/images/PinExt.png" title="Pin It" align="absmiddle"/></a>'
            //add title information
            + '<span>' + this.title + '</span>';
            //if you don't already have titles
            //you can just make the title the pinterest button
          }
          else {
            //add pinterest button for title
            this.title = '<a href="http://pinterest.com/pin/create/button/?url=' +
              encodeURIComponent(document.location.href) +
              '&media=' +
            //put the path to the image you want to share here
            encodeURIComponent(this.href) +
              '&description=' + description + '" class="pin-it-button" count-layout="horizontal">' +
              '<img border="0" src="http://assets.pinterest.com/images/PinExt.png" title="Pin It" align="absmiddle"/></a>';
          }
        }
        });
    });
    </script>
	</body>
</html>