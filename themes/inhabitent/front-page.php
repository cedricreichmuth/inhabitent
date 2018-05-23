<?php
/**
 *Template Name: Front Page
 *
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="entry-header">
				<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="inhabitent logo">
			</header><!-- .entry-header -->

			<div class="products-preview"><!-- prodcuts preview-->
				<?php
					$terms = get_terms( array(
				    'taxonomy' => 'product_type',
						'hide-empty' => false
					));
				  foreach ( $terms as $term) : ?>
				<div class="products-preview-<?php echo $term->name;?>">
					<div class="icon-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/<?php echo $term->slug;?>.svg">
					</div>
					<p><?php echo $term->description;?></p>
					<button><?php echo strtoupper($term->slug);?> STUFF</button>
				</div>
				<?php endforeach;?>
			</div>

			<div class="journal-preview"><!-- journal preview-->
				<?php
   			$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
				$journal_preview_posts = get_posts( $args );
				if( ! empty($journal_preview_posts)) :
			 	foreach ( $journal_preview_posts as $post ) : setup_postdata( $post );?>

					<div class="journal-preview-post">
						<div class="journal-preview-image"><?php the_post_thumbnail( 'thumbnail' ); ?></div>
						<p class="journal-preview-meta"><?php the_date(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
						<a href="<?php the_permalink();?>">
							<h2 class="journal-preview-title"><?php the_title();?></h2>
						</a>
						<a href="<?php the_permalink();?>">
							<div class="read-entry">Read Entry</div>
						</a>
					</div>
				<?php endforeach; wp_reset_postdata(); ?>
			<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
