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
				<ul class="nav__items">
					<li class="nav__item"><a href="<?php echo site_url(); ?>">Interviews</a></li>
					<!--<li class="nav__item"><a href="<?php echo site_url(); ?>/blog">Blog</a></li>-->
				</ul>
				<div class="nav__item nav__subscribe js-subscribe js-nav-sub-event">Subscribe</div>
			</nav>
		</div>
	</header><!-- #masthead -->

	<div class="nav__subscribe-popup">
		<i class="fa fa-times subscribe__close js-subscribe"></i>
		<div class="subscribe__text">Get new interviews in your inbox. No spam. Ever.</div>
		<form action="//theprdct.us15.list-manage.com/subscribe/post?u=e7510dfc6336ee69f4cbdd4be&amp;id=106483b035" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<input type="email" value="" name="EMAIL" class="required email subscribe__input" placeholder="Email address" id="mce-EMAIL">
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>
			<div style="position: absolute; left: -5000px;" aria-hidden="true">
				<input type="text" name="b_e7510dfc6336ee69f4cbdd4be_106483b035" tabindex="-1" value="">
			</div>
			<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="subscribe__submit js-sub-event-popup-submit">
		</form>
	</div>

	<div id="content" class="site-content">
