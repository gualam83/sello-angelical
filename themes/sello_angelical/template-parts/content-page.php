<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sello_angelical
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<svg class="post-shape" viewBox="0 0 100 10" preserveAspectRatio="none">
		<path d="M0 10 L0 0 L100 0 Z" fill="#533182"/>
	</svg>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php sello_angelical_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sello_angelical' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'sello_angelical' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
	<svg class="post-shape-bottom" viewBox="0 0 100 10" preserveAspectRatio="none">
		<path d="M0 10 L0 0 L100 0 Z" fill="#533182"/>
	</svg>
</article><!-- #post-<?php the_ID(); ?> -->
