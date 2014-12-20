<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package web2feel
 * @since web2feel 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'web2feel' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/logo/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/logo/favicon.ico" type="image/x-icon">   
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site wrapper">
<div class="container_12">
	<header id="masthead" class="site-header cf" role="banner">
	
			<div class="top grid_12 cf ">
		
				<div class="head">
					<div class="logo">
						<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					</div>
					<div class="top-ad">
					<!--	<div id="search">	
							<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
								<input type="text" name="s" id="s" value="Search ..." onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
								<div class="select-type">	
									<select id="post_type" name="post_type">
										<option value="post">Blog</option>
										<option value="products">Products</option>
									</select>
								</div>
								<input type="submit" id="searchsubmit" value="Search" />
							</form>
						</div>-->
					</div>
					<div class="clearfix">
						<a href="http://kanavaia.com"><img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo.jpg"></a>
					</div>
				</div>
				
				<div class="sub-head">
					<hr style="width:90%;margin-bottom:5px;">
					
					
					<div id="botmenu">
						<?php //wp_nav_menu( array( 'container_id' => 'submenu', 'theme_location' => 'primary','menu_id'=>'web2feel' ,'menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' ) ); ?>
						<a href="http://kanavaia.com/">Home</a> &nbsp;|&nbsp; 
						<a href="http://kanavaia.com/?page_id=12">About Us </a>&nbsp;|&nbsp; 
						<a href="http://kanavaia.com/?page_id=18">LookBook </a>&nbsp;|&nbsp; 
						<a href="http://kanavaia.com/?page_id=37">Explorer Review </a>&nbsp;|&nbsp; 
						<a href="http://kanavaia.com/?page_id=25">Products </a>&nbsp;|&nbsp; 
						<a href="http://kanavaia.com/?page_id=16">Schedule </a>&nbsp;|&nbsp; 
						<a href="http://kanavaia.com/?page_id=14">How to Buy</a>
						<hr style="height:3px;color:black;">
					</div>
					<!--
					<div id="botmenu">
						<?php //wp_nav_menu( array( 'container_id' => 'submenu', 'theme_location' => 'primary','menu_id'=>'web2feel' ,'menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' ) ); ?>
						<a href="http://kanavaia.com/">Home</a> &nbsp;|&nbsp; 
						<a href="http://localhost/KANAVAIA/about-us/">About Us </a>&nbsp;|&nbsp; 
						<a href="http://localhost/KANAVAIA/lookbook/">LookBook </a>&nbsp;|&nbsp; 
						<a href="http://localhost/KANAVAIA/36/">Explorer Review </a>&nbsp;|&nbsp; 
						<a href="http://localhost/KANAVAIA/collections/">Products </a>&nbsp;|&nbsp; 
						<a href="http://localhost/KANAVAIA/schedule/">Schedule </a>&nbsp;|&nbsp; 
						<a href="http://localhost/KANAVAIA/contact-us/">How to Buy</a>
						<hr style="height:3px;color:black;">
					</div>
					-->
					<div class="searchbox">
						
						 <?php //the_dropdown_taxonomy('department'); ?> 		
					</div>
				</div>
			</div>

	</header><!-- #masthead .site-header -->

	<div id="main" class="site-main cf" style="height:820px;">