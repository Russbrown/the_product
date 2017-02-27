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

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<form action="//theprdct.us15.list-manage.com/subscribe/post?u=e7510dfc6336ee69f4cbdd4be&amp;id=106483b035" method="post" name="mc-embedded-subscribe-form" class="validate signup-form" target="_blank" novalidate="" _lpchecked="1">
			<label class="signup-label" for="mce-EMAIL">Like this? Be the first to know about new interviews</label>
			<input class="signup-input" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required="">
			<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e7510dfc6336ee69f4cbdd4be_106483b035" tabindex="-1" value=""></div>
			<input type="submit" value="Subscribe" name="subscribe" class="signup-button" id="signup-button"/>
		</form>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
