<?php
/**
 *The template for displaying the product page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="about-content-area">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
				<?php $terms = get_terms(array(
					'taxonomy' => 'product_type',
					'hide-empty' => false
				));?>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'product' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
