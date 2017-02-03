<?php
/**
 * Template part for displaying posts.
 *
 * @package browny
 */

?>

<a href="<?= get_permalink() ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-header">
			<h2 class="entry-title"><?php the_title(); ?></h2>
		</div><!-- .entry-header -->

		<?php $image = get_field("title_image"); ?>

		<img src="<?= $image['url'] ?>" class="entry-image"/>

		<div class="entry-company"> <?= the_field("company") ?> </div>

	</article><!-- #post-## -->
</a>
