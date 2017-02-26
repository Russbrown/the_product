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

					<div class="next-posts cf">

						<h2 class="next-posts__title">Suggested Interviews</h2>

						<?php 
						// get next post
						$next_post = get_next_post();
						if ($next_post->ID != '') {
							$next_url = get_permalink($next_post->ID);
							$next_company = get_field('company', $next_post->ID);
							$next_image = get_field('title_image', $next_post->ID);
							?>
							<a href="<?= $next_url ?>" class="next-post cf">
								<div class="next-post__image-wrap">
									<img class="next-post__image" src="<?= $next_image['url'] ?>"/>
								</div> 
								<div class="next-post__title"><?= $next_post->post_title ?></div>
								<br>
								<div class="next-post__company"><?= $next_company ?></div>
							</a>
							<?php
						} else {
							// do nowt
						}
						?>

						<?php
						// get prev post
						$prev_post = get_previous_post();
						if ($prev_post->ID != '') {
							$prev_url = get_permalink($prev_post->ID);
							$prev_company = get_field('company', $prev_post->ID);
							$prev_image = get_field('title_image', $prev_post->ID);
							?>
							<a href="<?= $prev_url ?>" class="next-post cf">
								<div class="next-post__image-wrap">
									<img class="next-post__image" src="<?= $prev_image['url'] ?>"/>
								</div>
								<div class="next-post__title"><?= $prev_post->post_title ?></div>
								<br>
								<div class="next-post__company"><?= $prev_company ?></div>
							</a>
							<?php
						} else {
							// do nowt
						}
						?>

					</div>

				</div>

				<!--<a class="twitter-share-button js-twitter-share"
					href="https://twitter.com/intent/tweet?text=Smashing%20interview%20with%20<?php the_title()?>%20of%20<?= the_field("company") ?>%20here:%20<?php the_permalink()?>" 
					data-size="large">
					<i class="fa fa-twitter"></i>Tweet this article
				</a>-->

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
