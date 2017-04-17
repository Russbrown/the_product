<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package browny
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/cfae0c92-589d-4e1b-be77-2648fb5b204a.css"/>
	<link rel="shortcut icon" href="/myIcon.ico" type="image/x-icon" />

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@the__product">
	<meta name="twitter:creator" content="@therusstler">
	<meta name="twitter:title" content="The Product">
	<meta name="twitter:description" content="Discover in-depth discussions with Founders, Designers & Engineers">
	<?php if ( is_front_page() && is_home() ) : ?>
	<meta name="twitter:image" content="http://theprdct.com/wp-content/uploads/2017/02/tumblr_n3awiyI8DN1rcsjseo1_1280-1.jpg">
	<?php else : ?>
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'browny' ); ?></a>

	<header id="masthead" class="header" role="banner">		
		<div class="header__wrapper">
			<?php if ( is_front_page() && is_home() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><div class="header__logo"></div></a>
				<h1 class="header__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><div class="header__logo"></div></a>
				<h1 class="header__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php endif; ?>
			<nav class="nav__wrapper">
				<div class="nav__btn fa fa-bars"></div>
				<?php wp_nav_menu(array( 'menu_class' => 'nav__items', 'container' => '' ));?>
			</nav>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
