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

					<a class="twitter-share-button js-twitter-share"
						href="https://twitter.com/intent/tweet?text=Check%20out%20this%20interview%20with%20<?php the_title()?>%20of%20<?= the_field("company") ?>%20here:%20<?php the_permalink()?>%20via@the__product" 
						data-size="large" target="_blank">
						<i class="fa fa-twitter"></i>Tweet this article
					</a>

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

				<form action="//theprdct.us15.list-manage.com/subscribe/post?u=e7510dfc6336ee69f4cbdd4be&amp;id=106483b035" method="post" name="mc-embedded-subscribe-form" class="validate signup-form" target="_blank" novalidate="" _lpchecked="1">
					<label class="signup-label" for="mce-EMAIL">Like this? Never miss an interview, subscribe.</label>
					<input class="signup-input" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required="">
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e7510dfc6336ee69f4cbdd4be_106483b035" tabindex="-1" value=""></div>
					<input type="submit" value="Subscribe" name="subscribe" class="signup-button js-subscribe--footer" id="signup-button"/>
				</form>

			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
