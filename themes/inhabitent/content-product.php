<?php
/**
 * Template part for displaying products.
 *
 * @package Inhabitent Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a href="<?php echo get_permalink();?>">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'medium' ); ?>
			<?php endif; ?>
		</a>
	</header><!-- .entry-header -->

	<div class="product-info">
		<p><?php echo the_title();?></p>
		<span><?php echo CFS()->get( 'price' ); ?></span>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
