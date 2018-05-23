<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="footer-top">
						<div class="contact">
							<h3>Contact Info</h3>
							<p class="mail">
								<i class="fa fa-envelope"></i>
								<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
							</p>
							<p>
								<i class="fa fa-phone"></i>
								<a href="tel:5553434567891">778-456-7891</a>
							</p>
							<p>
								<span><i class="fab fa-facebook-square"></i></span>
								<span><i class="fab fa-twitter-square"></i></span>
								<span><i class="fab fa-google-plus-square"></i></span>
							</p>
						</div>
						<div class="hours">
							<h3>Business Hours</h3>
							<p><span class="day-of-week"><b>Monday-Friday:</b></span> 9am to 5pm</p>
							<p><span class="day-of-week"><b>Saturday:</b></span> 10am to 2pm</p>
							<p><span class="day-of-week"><b>Sunday:</b></span> Closed</p>
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
