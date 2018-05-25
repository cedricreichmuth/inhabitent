<?php
/**
 * The template for displaying all single products.
 *
 * @package Inhabitent Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="product-image-container"><?php the_post_thumbnail( 'large' ); ?></div>
				<div class="product-content-container">
					<h1><?php echo the_title();?></h1>
					<span><?php echo CFS()->get( 'price' ); ?></span>
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
