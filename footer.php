<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Intentional_Entrepreneur_Coaching
 */

?>

	</div><!-- #content -->

	<footer id="site-footer">
		<div class="inner">
			<div id="social-links">
				<a class="social-icon" href="#"><?php get_template_part('images/svg/inline', 'facebook.svg'); ?></a>
				<a class="social-icon" href="#"><?php get_template_part('images/svg/inline', 'linkedin.svg'); ?></a>
			</div><!--#social-links-->

			<nav id="footer-navigation">
				<?php wp_nav_menu(array(
					'theme_location' => 'menu-1',
					'menu_id' => 'footer-navigation-menu',
					'container' => false
				)); ?>
			</nav><!--#footer-navigation-->

			<span id="footer-copyright">&#169;2019 Tonya Moore - Designed & Developed by Carlo Piantini</span><!--#footer-copyright-->
		</div><!--.inner-->
	</footer><!--#site-footer-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
