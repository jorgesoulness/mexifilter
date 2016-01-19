<?php
/**
 * The template for displaying the header
 *
 * @package WordPress
 * @subpackage mexifilter
 * @since Mexifilter Theme 1.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title> 
        <meta name="keywords" content="<?php echo get_field('descripcion', $post->ID); ?>">
        <meta name="description" content="<?php echo get_field('keywords', $post->ID); ?>">
		<meta name="author" content="punto-visual.com">
		<meta name="robots" content="index, follow">
	    <link rel="alternate" hreflang="es-mx" href="<?php echo get_site_url(); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

		<meta property="og:locale" content="es_MX">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo get_permalink( $post->ID ); ?>">
		<meta property="og:site_name" content="<?php bloginfo('name'); ?><?php wp_title(); ?>">
        <?php if(is_home() || is_front_page()): ?>
        <meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title(); ?>">
	    <meta property="og:image" content="<?php if ( has_post_thumbnail() ) { $imgHome = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),  'homepage-facebook' ); echo $urlll = $imgHome['0']; } ?>">
	    <meta property="og:description" content="<?php echo get_field('descripcion', $post->ID) ?>">
	    <?php elseif(is_single()): ?>
	    <meta property="og:title" content="<?php bloginfo('name'); ?><?php the_title(); ?>">
	    <meta property="og:image" content="<?php bloginfo('name'); ?><?php if ( has_post_thumbnail() ) { $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),  'homepage-facebook' ); echo $url = $image['0']; } ?>">
	    <meta property="og:description" content="<?php the_field('descripcion', $post->ID); ?>">
	    <?php elseif(is_page()): ?>
	    <meta property="og:title" content="<?php bloginfo('name'); ?><?php the_title(); ?>">
	    <meta property="og:image" content="<?php if ( has_post_thumbnail() ) { $imagee = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),  'homepage-facebook' ); echo $urll = $imagee['0']; } ?>">
	    <meta property="og:description" content="<?php the_field('descripcion', $post->ID); ?>">
	    <?php else: ?>
	    <meta property="og:title" content="Mexifilter México">
	    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/tile.png">
	    <meta property="og:description" content="<?php bloginfo('descripcion'); ?>">
	    <?php endif; ?>
	    <meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@Mexifilter">
		<meta name="twitter:title" content="Mexifilter México">
		<meta name="twitter:description" content="<?php echo get_field('descripcion', $post->ID) ?>">
		<meta name="twitter:image" content="<?php if ( has_post_thumbnail() ) { $imgTW = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),  'homepage-twitter' ); echo $liga = $imgTW['0']; } ?>">

		<link rel="profile" href="http://gmpg.org/xfn/11">
	    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <!-- StylesRamen -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom-mexifilter.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hover-min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/plugins/stylesheets/superslides.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/collage/transitions.css">
        
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    
    <body>
	    <header id="headMenu" class="viewHead">
	  		<div class="container-fluid">
		  		<div class="row">
			  		<div data-wow-delay="0.2s" class="col-xs-3 col-sm-3 col-md-2 logo wow bounceIn">
				  		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Mexifilter"><img src="<?php echo get_template_directory_uri(); ?>/img/Logop.png" alt="Mexifilter"></a></h1>
			  		</div><!-- end.Logo -->
			  		<div data-wow-delay="0.4s"  class="col-xs-8 col-sm-8 col-md-9 hidden-xs wow fadeInDown">
			  			<div class="searchCont">
					  		<form method="get" id="searchform" class="search-form" action="<?php bloginfo('home'); ?>/">
			                    <input type="search" name="s" id="search-form" placeholder="Buscar...">
			                    <button type="submit" name="buscar" id="buscar"><i class="fa fa-search"></i></button>
			                </form>
				  		</div><!-- end.Search -->
			  		</div><!-- end.Menu -->
			  		<div class="col-xs-9 col-sm-1 col-md-1" >
				  		<a id="openMenuMobile" class="open--menu"><i class="fa fa-bars"></i></a><!-- end.openMenu -->
			  		</div>
		  		</div>
	  		</div>
  		</header><!-- end.LogoMenuSearch -->
	    
	    <section id="MenuMobileContent" class="menu--content">
		    <div class="container-fluid">
			    <div class="row">
				    <div class="col-md-12">
			            <nav>
			               <div class="close-cont">
			                   <a class="CloseMenu"><i class="fa fa-close"></i></a>
			               </div>
			               <h3>Menú</h3>
			               <?php wp_nav_menu( array('container' => false, 'items_wrap' => '<ul id="menu-principal">%3$s</ul>', 'theme_location' => 'primary') ); ?>
			            </nav>
				    </div>
				    <div class="col-md-12">
			            <h3 class="visible-xs">Buscar</h3>
			            <div class="searchCont visible-xs">
			            	<form method="get" id="searchform" class="search-form" action="<?php bloginfo('home'); ?>/">
			                    <input type="search" name="s" id="search-form" placeholder="Buscar...">
			                    <button type="submit" name="buscar" id="buscar"><i class="fa fa-search"></i></button>
			                </form>
						</div><!-- end.Search -->
			    	</div>
			    	<div class="clear"></div>
			    	<div class="col-md-12">
		            	<h3 class="visible-xs">Síguenos</h3>
			            <div class="socialesMobile visible-xs">
			                <a class="fb" href="" target="_blank"><i class="fa fa-facebook"></i></a>
			                <a class="tw" href="" target="_blank"><i class="fa fa-twitter"></i></a>
			                <a class="yt" href="" target="_blank"><i class="fa fa-youtube"></i></a>
			            </div>
			    	</div>
			    </div>
		    </div>
        </section><!-- end.NavegacionSitioMobile -->
        
        <div id="cont3D" class="no_efectoTresde">
  