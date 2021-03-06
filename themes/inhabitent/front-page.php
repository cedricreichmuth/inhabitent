<?php
/**
 *Template Name: Front Page
 *
 * The template for displaying all pages.
 *
 * @package Inhabitent Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="entry-header">
				<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="inhabitent logo">
			</header><!-- .entry-header -->

			<div class="products-preview"><!-- prodcuts preview-->
				<h2>SHOP STUFF</h2>
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
					<a href="<?php echo get_permalink();?>/product_type/<?php echo $term->slug;?>/">
						<div class="green-button"><?php echo strtoupper($term->slug);?> STUFF</div>
					</a>
				</div>
				<?php endforeach;?>
			</div>

			<div class="journal-preview"><!-- journal preview-->
				<h2 class="journal-title">INHABITENT JOURNAL</h2>
				<?php
   			$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
				$journal_preview_posts = get_posts( $args );
				if( ! empty($journal_preview_posts)) :
			 	foreach ( $journal_preview_posts as $post ) : setup_postdata( $post );?>

					<div class="journal-preview-post">
						<div class="journal-preview-image"><?php the_post_thumbnail( 'large' ); ?></div>
						<div class="content-wrapper">
							<p class="journal-preview-meta"><?php the_date(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
							<a href="<?php the_permalink();?>">
								<h2 class="journal-preview-title"><?php the_title();?></h2>
							</a>
							<a href="<?php the_permalink();?>">
								<div class="black-button">Read Entry</div>
							</a>
						</div>
					</div>
				<?php endforeach; wp_reset_postdata(); ?>
			<?php endif; ?>
			</div>

			<div class="adventures-preview-continer"><!-- adventures preview-->
				<h2>LATEST ADVENTURES</h2>
				<div class="adventures-preview">
				<?php
   			$args = array( 'post_type' => 'adventures', 'posts_per_page' => 4 );
				$adventure_preview_posts = get_posts( $args );
				if( ! empty($adventure_preview_posts)) :
			 	foreach ( $adventure_preview_posts as $post ) : setup_postdata( $post );?>
					<div class="<?php the_title();?>">
						<div class="adventure-preview-image" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');">
						<a href="<?php the_permalink();?>">
							<h3 class="adventure-preview-title"><?php the_title();?></h3>
						</a>
						<a href="<?php the_permalink();?>">
							<div class="white-button">Read More</div>
						</a>
						</div>
					</div>
					<?php endforeach; wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/adventures/">
					<div class="green-button">More Adventures</div>
				</a>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
