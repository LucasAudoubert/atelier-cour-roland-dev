<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package acr-theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-inner">
			<div class="footer-column footer-branding">
				<h2 class="footer-title"><?php bloginfo('name'); ?></h2>
				<p class="footer-description"><?php bloginfo('description'); ?></p>
			</div>

			<div class="footer-column footer-links">
				<h3 class="footer-heading"><?php esc_html_e('Quick Links', 'acr-theme'); ?></h3>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'footer-menu',
						'container'      => false,
						'depth'          => 1,
					)
				);
				?>
			</div>

			<div class="footer-column footer-contact">
				<h3 class="footer-heading"><?php esc_html_e('Contact', 'acr-theme'); ?></h3>
				<p>123 Rue de la Roland<br>75000 Paris, France</p>
				<p><a href="mailto:contact@atelier-cour-roland.com">contact@atelier-cour-roland.com</a></p>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
