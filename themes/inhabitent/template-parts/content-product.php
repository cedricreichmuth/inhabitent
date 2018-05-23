<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

<!-- custom field suite-->
  <?php echo CFS()->get( 'price' ); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
    <!-- social media stuff-->
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
