<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'small' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php inhabitent_posted_on(); ?> / <?php inhabitent_comment_count(); ?> / <?php inhabitent_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="archive-links">
			<?php inhabitent_entry_footer(); ?>
		</div>
		<div class="social-buttons">
			<div class="black-button"><i class="fab fa-facebook-f"></i>LIKE</div>
			<div class="black-button"><i class="fab fa-twitter"></i>TWEET</div>
			<div class="black-button"><i class="fab fa-pinterest"></i>PIN</div>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
