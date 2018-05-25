<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<?php
					/**
					 * The sidebar containing the main widget area.s
					 *
					 * @package RED_Starter_Theme
					 */

					if ( ! is_active_sidebar( 'sidebar-1' ) ) {
						return;
					}
					?>

					<div class="footer-top">
						<div id="secondary" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'footer' ); ?>
						</div>
						<div class="footer-logo-container">
							<a href="<?php get_home_url();?>">
								<img src="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-text.svg" alt="inhabitent logo">
							</a>
						</div>
					</div>
					<p class="footer-bottom">COPYRIGHT © 2017 INHABITENT</p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
