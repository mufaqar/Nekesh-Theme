<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
		<title>
			<?php
				/*
				 * Print the <title> tag based on what is being viewed.
				 */
				global $page, $paged, $post;
			
				wp_title( '|', true, 'right' );
			
				// Add the blog name.
				bloginfo( 'name' );
			
				// Add the blog description for the home/front page.
				$site_description = get_bloginfo( 'description', 'display' );
				if ( $site_description && ( is_home() || is_front_page() ) )
					echo " | $site_description";
			
				// Add a page number if necessary:
				if ( $paged >= 2 || $page >= 2 )
					echo ' | ' . sprintf( __( 'Page %s', 'wpv' ), max( $paged, $page ) );
            ?>
	</title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/prettyphoto.css" type="text/css" media="all" />
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.prettyphoto.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.slicknav.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/site_scripts.js"></script>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="header">
    <div class="blue-container">
        <div class="wrapper">
            <div class="top-bar">
                <div class="top-bar-call-area">
                    Call <a href="tel:123-456-0789">1234560789</a> - Schedule Today!
                </div><!--top bar call area-->
                <div class="top-bar-socials">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-linkedinn-icon.png" alt="Linked Inn" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-youtube-icon.png" alt="Linked Inn" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-yelp-icon.png" alt="Linked Inn" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-facebook-icon.png" alt="Linked Inn" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-twitter-icon.png" alt="Linked Inn" /></a>
                </div><!--top bar socials-->
                <div class="clear"></div>
            </div><!--top bar-->
        </div><!--wrapper-->
    </div><!--blue-container-->
    <div class="wrapper">
        <div id="header-inner">
            <div class="logo">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo" /></a>
            </div><!--logo-->
            <div class="header-right-area">
                <div class="green-btn site-btn">
                    <a href="#">schedule an appointment</a>
                </div><!--green btn-->
                <div class="header-informetion">
                    <span class="black-heading">Get Back To Being You!</span>
                    <span>Top Pain Doctors in Nova Spine</span>
                    <a href="tel:1234560789" class="header-call">Call 123-456-0789 </a>
                </div><!--header informetion-->
                <div class="clear"></div>
            </div><!--header right area-->
            <div class="clear"></div>
        </div><!--header inner-->
    </div><!--wrapper-->
 	<div class="menu-container">
		<div class="wrapper">
            <div class="menu-right-area">
            	<div class="header-time">
                	Mon - Fri: 9:00 - 17:00
                </div><!--header time-->
                <div class="quick-access">
                    <div class="search-form"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/search-icon.png" alt="Search Icon" /></a>
                        <form role="search" method="get" action="">
                        <div class="search-box">
                            <input type="search" title="Search for:" value="" name="s" placeholder="Enter your keywords" class="top-search">
                            <input type="image" alt="Submit" src="<?php echo get_template_directory_uri(); ?>/assets/images/search-small.png" class="sub-search">
                        </div>
                        </form>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--menu right area-->
            <div id="main-menu">
            	<ul>
                	<li><a href="#">Home</a></li>        
                    <li><a href="#">About</a></li>
                    <li><a href="#">Pain Center</a>
                    <ul>
                        <li><a href="#">Home</a></li>        
                        <li><a href="#">About</a></li>
                        <li><a href="#">Pain Center</a></li>
                        <li><a href="#">For Patients</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Video</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    </li>
                    <li><a href="#">For Patients</a></li>
                    <li><a href="#">Research</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="clear"></div>
            </div><!--main menu-->
            <div class="clear"></div>
        </div><!--wrapper-->
        <div id="mobile-menu"></div>
    </div><!--blue container-->
</div><!--header-->
