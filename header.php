<!-- <!doctype html> -->
<html lang="en">
<head>
  

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?><?php wp_title(); ?>" />
    <meta name="author" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="" />
    <meta name="copyright" content="2014 (c) Company Name" />
    
    <meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title(); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:image" content="" />
    
    <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    

    <!-- Mobile Jazz -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSS: implied media="all" -->

    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/style.css" type="text/css" media="screen" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Place somewhere in the <head> of your document -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/css/flexslider.css" type="text/css">
    <script src="http://flexslider.woothemes.com/js/jquery.flexslider.js"></script>

    
    <!-- flexslider -->

    <script type="text/javascript" charset="utf-8">
      console.clear();
      jQuery(window).load(function($) {
        jQuery('.flexslider').flexslider({
          animation: "fade",
          controlNav: false,
          directionNav: false,
          pauseOnHover: false,
          smoothHeight: true
        });
      });
    </script>



    <!-- type kit -->

    <script src="//use.typekit.net/avx8drr.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <!-- bootstrap css -->

    <link href="<?php bloginfo('template_directory' ); ?>/css/bootstrap.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory' ); ?>/js/bootstrap.js" type='text/javascript'></script>

    <!-- isotope 
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/isotope.js" type="text/javascript"></script> -->

    <!-- fancybox     -->

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/css/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/css/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    

<body <?php body_class(); ?>>
  
  <?php if(is_front_page()) : ?>

    <?php get_template_part('header', 'frontpage' ); ?>

  <?php else : ?> 
  
    <?php get_template_part('header', 'main' ); ?>

  <?php endif; ?>

  