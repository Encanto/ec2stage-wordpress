<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<?php global $smof_data; ?>
<html <?php language_attributes(); ?> <?php if($smof_data['rnr_enable_rtl_layout'] == true) { echo 'dir="RTL"'; } ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<!-- PAGE TITLE -->
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->



<!-- Mobile Specific Metas & Favicons
========================================================= -->

<?php if($smof_data['rnr_favicon_url'] != "") { ?><link rel="shortcut icon" href="<?php echo $smof_data['rnr_favicon_url']; ?>"><?php } ?>


<!-- WordPress Stuff
========================================================= -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<!-- Google Web Fonts -->

 <?php get_template_part( 'includes/googlefonts'); ?>

<?php wp_head(); ?>

</head>

<body <?php body_class('onepage'); ?> data-spy="scroll" data-target=".navigation" data-offset="82">
<script type="text/javascript" src="http://www.44-trk-srv.com/js/84582.js" ></script>
<noscript><img src="http://www.44-trk-srv.com/84582.png" style="display:none;" /></noscript>
<div id="load"></div>

<?php if (is_front_page()):?>
<div class="main" style="background-image: url('<?php echo get_site_url( ); ?>/wp-content/uploads/2016/09/cover-img.jpg');"><video id="video_background" preload="auto" autoplay="autoplay" loop="loop" muted="" volume="0"><source src="<?php echo get_site_url( ); ?>/wp-content/uploads/2016/09/traffic.webm" type="video/webm"><source src="<?php echo get_site_url( ); ?>/wp-content/uploads/2016/09/traffic.mp4" type="video/mp4">Video not supported</video>
<div class="vertical-center">
<h1>Model Your Analytics For Better Intelligence</h1>

<div style="clear: both; margin-bottom: 40px;">

	<p>Real-Time</p>
	<p>100% Cloud</p>
	<p>Complete Assurance</p>

</div>
<a class="request btn" href="#" name="SOBookingLink" data-page="crissolomonencanto2com">Request A Demo</a>

</div>
</div>
<?php endif;?>
 
 
     <!-- START PAGE WRAP -->    
    <div class="page-wrap <?php if($smof_data['rnr_enable_dark_skin'] == true) { echo 'dark-skin'; } ?>">
    
  <!-- HEADER SECTION -->	
 

