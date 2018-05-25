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
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
		</a>
	</header><!-- .entry-header -->

	<div class="product-info">
		<p><?php echo the_title();?></p>
		<a href="<?php the_permalink();?>">
			<div class="read-entry">Read More</div>
		</a>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
