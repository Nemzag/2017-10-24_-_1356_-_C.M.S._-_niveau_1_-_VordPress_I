<?php
/**
 * Header Template Part File
 *
 * Template part file that contains the HTML document head and
 * opening HTML body elements, as well as the site header.
 *
 * This file is called by certain primary template pages
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset=<?php bloginfo( 'charset' ); ?> >
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );// phpcs:ignore prefix on hook
}
?>
<a class="skip-link screen-reader-text" href="#content-wrap"><?php esc_html_e( 'Skip to content', 'canuck' ); ?></a>
<header id="main-header" class="header-wide-no-feature">
	<?php get_template_part( '/template-parts/header-parts/header', 'top-strip' ); ?>
	<div class="header-logo-menu-wide">
		<div class="header-logo-menu-strip">
			<div class="header-image-left" >
				<?php canuck_show_logo(); ?>
			</div>
			<span class="canuck-show-search-trigger"><a href="#"><i class="fa fa-search"></i></a></span>
			<?php
			if ( has_nav_menu( 'canuck_primary' ) ) {
				?>
				<button class="menu-1-toggle" aria-expanded="false" aria-label="<?php esc_attr_e( 'Top Menu Toggle', 'canuck' ); ?>"></button>
				<?php
			}
			?>
			<nav class="nav-container" role="navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'canuck' ); ?>">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Main Navigation', 'canuck' ); ?></h2>
				<?php canuck_header_menu(); ?>
			</nav>
			<div class="canuck-search">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</header>
<button class="sidebar-a-toggle toggle-off" aria-expanded="false" aria-label="<?php esc_attr_e( 'Sidebar A Toggle', 'canuck' ); ?>"><i class="fa fa-navicon fa-rotate-90"></i></button>
<button class="sidebar-b-toggle toggle-off" aria-expanded="false" aria-label="<?php esc_attr_e( 'Sidebar B Toggle', 'canuck' ); ?>"><i class="fa fa-navicon fa-rotate-90"></i></button>
<a href="#main-header" class="scrolltotop"><i class="fa fa-chevron-up"></i></a>
<div class="sticky-spacer">&nbsp;</div>
