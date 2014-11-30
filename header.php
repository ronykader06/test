<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package eventx
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,400,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
    </script>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
	<div class="container">
        <div class="row">            
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="logo-area">
                           <a href="<?php echo get_home_url(); ?>">
                                <img src="<?php echo IMAGES; ?>/logo.png" alt="Logow">
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-9 col-md-9 col-sm-9">                  
                        <nav class="main-menu">
                            <ul>
                                <li class="active"><a href="#">HOME</a>
                                </li>
                                <li><a href="#speaker" data-uk-smooth-scroll>Speakers</a>
                                </li>
                                <li><a href="#location" data-uk-smooth-scroll> Location</a>
                                </li>
                                <li><a href="#">Gallery</a>
                                </li>
                                <li><a href="#register" data-uk-smooth-scroll>REGISTRATION</a>
                                </li>
                                <li><a href="blog.html">BLOG</a>
                                </li>
                                <li><a href="event.html">EVENT</a>
                                </li>
                            </ul>
                        </nav>                      
                    </div> 


            
                <!--End of Header Top-->
        </div>
    </div>
		
	</header><!-- #masthead -->

<!-- End of Header  -->

	<div id="content" class="site-content">
