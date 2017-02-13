<?php
/**
 * The template for displaying all single posts.
 *
 * @package browny
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main blog-single" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php $image = get_field("title_image"); ?>

				<img src="<?= $image['url'] ?>" class="entry-image"/>

				<div class="article-wrapper">

					<header class="entry-header cf">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<div class="entry-company"> <?= the_field("company") ?> </div>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</div>

				<!-- Begin MailChimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
				<div id="mc_embed_signup">
				<form action="//theprdct.us15.list-manage.com/subscribe/post?u=e7510dfc6336ee69f4cbdd4be&amp;id=106483b035" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
					<label for="mce-EMAIL">Like this? Be the first to know about new interviews</label>
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e7510dfc6336ee69f4cbdd4be_106483b035" tabindex="-1" value=""></div>
					<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</div>
				</form>
				</div>

				<!--End mc_embed_signup-->

			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
