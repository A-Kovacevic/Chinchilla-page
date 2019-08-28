<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Mali|Source+Serif+Pro|Srisakdi&amp;subset=latin-ext" rel="stylesheet"><!--fontovi-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/js/flexslider/demo/css/flexslider.css" type="text/css" media="screen" >
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/js/mobile-menu/css/component.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/js/jquery-fancybox/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

    <?php
	//global $hala_options;
	//if ( ! ( function_exists( 'has_site_icon' ) && has_site_icon() ) ) { ?>
			<!--<link rel="shortcut icon" href="<?php// $favicon=$hala_options["favicon"]; echo esc_url($favicon['url']); ?>" type="image/x-icon">-->
	<?php  
	wp_head(); ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<!-- FlexSlider -->
<script defer src="<?php bloginfo('template_url'); ?>/assets/js/flexslider/demo/js/jquery.flexslider.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/mobile-menu/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/mobile-menu/js/jquery.dlmenu.js"></script>
<!--fancybox-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/assets/js/jquery-fancybox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="<?php bloginfo('template_url');?>/assets/js/jquery-fancybox/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script src="<?php bloginfo('template_url');?>/assets/js/jquery-fancybox/fancybox/jquery.easing-1.3.pack.js"></script>

</head>
<body>
<section id="navbar">
	<div class="navbar">
		
		<div class="logo"><a href="<?php echo get_page_link('6');?>"> Chinchillas</a></div>
		<div class="div-btn"><!--za veličinu od 550px-->
			<button><h3>menu</h3></button>
			<div class="ulli">
				<ul>
					<?php wp_nav_menu( array( 'menu' => 'Glavni izbornik' ) ); ?>
				</ul>
			</div>
		</div>
		<div class="nav">
				<?php wp_nav_menu( array( 'menu' => 'Glavni izbornik' ) ); ?>
		</div>
	</div>
</section>