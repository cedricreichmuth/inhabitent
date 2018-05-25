<?php
/**
 *The template for displaying the product page.
 *
 * @package Inhabitent Theme
 */

get_header(); ?>

	<div id="primary" class="about-content-area">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
				<h1><?php the_archive_title();?></h1>
				<?php $terms = get_terms(array(
					'taxonomy' => 'product_type',
					'hide-empty' => false
				));?>
				<?php foreach($terms as $term) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/product_type/<?php echo $term->slug;?>/">
						<h2><?php echo $term->name;?></h2>
					</a>
				<?php endforeach;?>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'product' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
