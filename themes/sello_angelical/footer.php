<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sello_angelical
 */

?>
<div class="sello-angelical-footer">
	<svg class="post-shape" viewBox="0 0 100 10" preserveAspectRatio="none">
		<path d="M0 10 L0 0 L100 0 Z" fill="#533182"/>
	</svg>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>
				© <?php echo date('Y'); ?> Sello Angelical. Todos los derechos reservados.
			</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
