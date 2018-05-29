<?php
/**
 * Template part for displaying products.
 *
 * @package Inhabitent Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="adventures-header">
		<a href="<?php echo get_permalink();?>">
			<div class="adventure-preview-image" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');">
				<div class="title-container">
					<a href="<?php the_permalink();?>">
						<h2><?php echo the_title();?></h2>
						<div class="white-button">Read More</div>
					</a>
				</div>
			</div>
		</a>
	</header><!-- .entry-header -->
</article><!-- #post-## -->
