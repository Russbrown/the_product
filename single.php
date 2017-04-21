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

						<div class="single-article__read-more">Still thirsty for more? 🍺 Check out some <a href="<?php echo site_url(); ?>">more interviews</a></div>
						
						<div class="single-article__subscribe">
							<form action="//theprdct.us15.list-manage.com/subscribe/post?u=e7510dfc6336ee69f4cbdd4be&amp;id=106483b035" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<div class="subscribe__text">Get more interviews like this in your inbox each week.</div>
								<input type="email" value="" name="EMAIL" class="required email subscribe__input" placeholder="Email address" id="mce-EMAIL">
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;" aria-hidden="true">
									<input type="text" name="b_e7510dfc6336ee69f4cbdd4be_106483b035" tabindex="-1" value="">
								</div>
								<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="subscribe__submit js-article-sub-event">
							</form>
						</div>

						<div class="single-article__share">
							<a class="twitter-follow-button" data-show-count="false" data-show-screen-name="false" href="https://twitter.com/the__product">Follow</a>
							<a class="twitter-share-button" href="https://twitter.com/intent/tweet">Tweet</a>
							<div class="fb-like" data-href="https://www.facebook.com/theprdct/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
						</div>

						<div class="single-article__recent">
							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
						</div>

					</div><!-- .entry-content -->



				</div>

			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
