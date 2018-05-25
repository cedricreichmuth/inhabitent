<?php
/**
 *The template for displaying the adventures page.
 *
 * @package Inhabitent Theme
 */

get_header(); ?>

	<div id="primary" class="about-content-area">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
				<h1><?php the_archive_title();?></h1>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'adventures' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
