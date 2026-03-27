<?php
/**
 * Template part for displaying posts
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

	<?php if ( ! is_singular() ) : ?>
		<?php sello_angelical_post_thumbnail(); ?>
	<?php endif; ?>

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				sello_angelical_posted_on();
//				echo ' / ';
//				sello_angelical_posted_by();

				$categories_list = get_the_category_list( ', ' );

				if ( $categories_list ) {
					echo ' / <span class="cat-links">' . $categories_list . '</span>';
				}
				?>
			</div>
		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php if ( is_singular() ) : ?>
		<?php sello_angelical_post_thumbnail(); ?>
	<?php endif; ?>

	<div class="entry-content">
		<?php if ( is_singular() ) : ?>

			<?php the_content(); ?>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sello_angelical' ),
					'after'  => '</div>',
				)
			);
			?>

		<?php else : ?>

			<p>
			<span class="excerpt-text">
				<?php echo wp_trim_words( get_the_excerpt(), 40 ); ?>
			</span>
			</p>

			<a class="read-more" href="<?php the_permalink(); ?>">
				<?php esc_html_e( 'Continuar leyendo...', 'sello_angelical' ); ?>
			</a>

		<?php endif; ?>
	</div><!-- .entry-content -->

	<svg class="post-shape-bottom" viewBox="0 0 100 10" preserveAspectRatio="none">
		<path d="M0 10 L0 0 L100 0 Z" fill="#533182"/>
	</svg>
</article><!-- #post-<?php the_ID(); ?> -->
