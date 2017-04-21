<?php
/**
 * Template part for displaying posts.
 *
 * @package browny
 */

?>

<a href="<?= get_permalink() ?>" class="home-article">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php $image = get_field("title_image"); ?>
		<img src="<?= $image['url'] ?>" class="home-article__image"/>

		<h2 class="home-article__title"><?php the_title(); ?></h2>

		<div class="home-article__company"> <?= the_field("company") ?> </div>

		<div class="home-article__quote"> <?= the_field("article_quote") ?> </div>

	</article><!-- #post-## -->
</a>
