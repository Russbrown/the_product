<?php
/**
 * Template part for displaying posts.
 *
 * @package browny
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</div><!-- .entry-header -->

	<?php $image = get_field("title_image"); ?>

	<img src="<?= $image['url'] ?>" class="entry-image"/>

	<div class="entry-company"> <?= the_field("company") ?> </div>

</article><!-- #post-## -->
