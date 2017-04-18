<?php
/**
 * The template for displaying all single posts.
 *
 * @package browny
 */

get_header(); ?>

	<div id="primary">
		<main id="main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class("single-article"); ?>>

				<?php $image = get_field("title_image"); ?>

				<img src="<?= $image['url'] ?>" class="single-article__image"/>

				<h1 class="single-article__title"><?php the_title(); ?></h1>

				<div class="single-article__company"> <?= the_field("company") ?> </div>

				<div class="single-article__quote"> <?= the_field("article_quote") ?> </div>

				<div class="single-article__wrapper">

					<div class="single-article__content">
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

			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
