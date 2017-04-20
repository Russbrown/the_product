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

						Thanks for reading, you can find more stories <a href="/">here.</a>
						
						<div class="single-article__subscribe">
							<div class="subscribe__text">Get more interviews like this in your inbox each week.</div>
							<input type="email" class="subscribe__input" placeholder="Email address"/>
							<input type="submit" class="subscribe__submit" value="Subscribe"/>
						</div>

						<div class="single-article__share">
							<a class="twitter-follow-button" data-show-count="false" data-show-screen-name="false" href="https://twitter.com/the__product">Follow</a>
							<a class="twitter-share-button" href="https://twitter.com/intent/tweet">Tweet</a>
							<div class="fb-like" data-href="https://www.facebook.com/theprdct/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
						</div>

					</div><!-- .entry-content -->



				</div>

			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
