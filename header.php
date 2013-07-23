<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?> itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->

<head >
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!--meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"-->
<!--meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" / -->


<!-- For third-generation iPad with high-resolution Retina display: -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-144x144-precomposed.png">
<!-- For iPhone with high-resolution Retina display running iOS ≥ 7: -->
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-120x120-precomposed.png">
<!-- For iPhone with high-resolution Retina display running iOS ≤ 6: -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-114x114-precomposed.png">
<!-- For first- and second-generation iPad: -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-72x72-precomposed.png">
<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-precomposed.png">

<!-- if page is content page -->  
<?php if (is_single()) { ?>  
  
<!-- if page is others -->  
<?php } else { ?>  
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-144x144-precomposed.png" /> <?php } ?>  


  <meta name="viewport" id="vp" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width" />
  <!-- width=device-width causes the iPhone 5 to letterbox the app, so
  we want to exclude it for iPhone 5 to allow full screen apps -->
  <meta name="viewport" id="vp" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)" /> 

    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.6.2.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site clean">
    <div class="row" id="hellobar">
      <div class="twelve columns container">
          <?php if(ICL_LANGUAGE_CODE=='fr' ) { 
            iinclude_page('/fr-headtext'); 
          } else {
            iinclude_page('/headtext'); 
          } ?>
      </div>
    </div>

	<header id="masthead" class="site-header " gumby-fixed="top" role="banner">
     <div class="row">
      <div class="four columns" id="sec_nav">
        <hgroup>
          <ul> 
            <li class="ToogleSidr" ><a id="simple-menu" href="#simple-menu">Toogle</a></li>
            <li class="logo"><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
      </li>
            <li class="mobileemail">
              <?php wp_nav_menu( array( 'theme_location' => 'contact', 'contact_class' => 'contact-icon' ) ); ?>
            </li>
        </ul>
    </hgroup>
      </div>
    <nav id="site-navigation" class="main-navigation eight columns" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
      <div class="desktopemail"><?php wp_nav_menu( array( 'theme_location' => 'contact', 'contact_class' => 'contact-icon' ) ); ?></div>
      
    </nav><!-- #site-navigation -->
     </div>



	</header><!-- #masthead -->

	<div id="main" class="container">