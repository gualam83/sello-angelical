<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sello_angelical
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sello_angelical' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-inner">

			<?php get_search_form(); ?>

			<div class="site-branding">

				<svg class="post-shape" viewBox="0 0 100 10" preserveAspectRatio="none">
					<path d="M0 10 L0 0 L100 0 Z" fill="#533182"/>
				</svg>

				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$sello_angelical_description = get_bloginfo( 'description', 'display' );
				if ( $sello_angelical_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $sello_angelical_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>

				<svg class="post-shape-bottom" viewBox="0 0 100 10" preserveAspectRatio="none">
					<path d="M0 10 L0 0 L100 0 Z" fill="#533182"/>
				</svg>

			</div><!-- .site-branding -->
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="hamburger"><span></span></span></button>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
