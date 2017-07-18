<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gorilla
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<section class='top-bar'>
			<div class='content'>
				<nav>
					<ul class='social_media_menu'>
						<li>
						    <a href='#'><img src='<?php echo get_template_directory_uri() ?>/img/facebook.png' /></a>
						</li>
						<li>
						    <a href='#'><img src='<?php echo get_template_directory_uri() ?>/img/linkedin.png' /></a>
						</li>
						<li>
						    <a href='#'><img src='<?php echo get_template_directory_uri() ?>/img/twitter.png' /></a>
						</li>
					</ul>
				</nav>
				
				<nav class="site-navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				</nav>
			    
			</div><!-- .content -->
		</section><!-- .top-bar -->

		<section class='main-header site-branding' role='banner'>
			<div class='content'>
			    <div class='cta'>
				Call Today! 68.436.8087
			    </div>
			    <div class='column  banner-columnm solutions'>
				<h3>SOLUTIONS <br /> <img src='<?php echo get_template_directory_uri() ?>/img/arrow-down-white.png' class='arrow' /></h3>
			    </div>
			    
			    <div class='column  banner-columnm logo_header'>
				<img src='<?php echo get_template_directory_uri() ?>/img/logo_header.svg' />
			    </div>
			    
			    <div class='column  banner-columnm industries'>
				<h3>INDUSTRIES <br /> <img src='<?php echo get_template_directory_uri() ?>/img/arrow-down-white.png' class='arrow' /></h3>
				<i class="material-icons">menu</i>
				<nav class='mobile_nav_menu'>
				    <?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'mobile-menu' ) ); ?>
				</nav>
			    </div>
			</div><!-- .content -->
		</section>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
