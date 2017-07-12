<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package browny
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main blog-index" role="main">

		<section class="hero cf">
			<div class="hero__img-wrapper">
				<div class="hero__img"></div>
			</div>
			<div class="hero__text-wrapper">
				<div class="hero__lead">Hi,<br>I'm Russ ✌</div>
				<div class="hero__subheader">I interview entrepreneurs and designers about business and products. </div>
				<div class="hero__subscribe js-subscribe js-hero-sub-event">Get new interviews in your inbox</div>
			</div>
		</section>

		<section class="home-article__wrapper cf">

			<?php if ( have_posts() ) : ?>

				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', get_post_format() );?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
