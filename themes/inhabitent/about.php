<?php
/**
 * Template Name: About
 *
 *The template for displaying all pages.
 *
 * @package Inhabitent Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<h2><?php $props = CFS()->get_field_info( 'about' );
				echo $props['label'];?></h2>
				<?php echo CFS()->get( 'about' ); ?>
				<h2><?php $props = CFS()->get_field_info( 'about_team' );
				echo $props['label'];?></h2>
				<?php echo CFS()->get( 'about_team' ); ?>

			</div><!-- .entry-content -->
		</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
