<?php
/**
 * Header Template Part File.
 *
 * Template part file that contains the HTML document head and
 * opening HTML body elements, as well as the site header.
 * This file is called by certain primary template pages.
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

$canuck_blog_feature          = get_theme_mod( 'canuck_blog_feature', 'background_image' );
$canuck_blog_feature_category = get_theme_mod( 'canuck_blog_feature_category', '' );
$canuck_blog_title            = get_theme_mod( 'canuck_home_title', '' );
$canuck_blog_desc             = get_theme_mod( 'canuck_home_description', '' );
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
		do_action( 'wp_body_open' ); // phpcs:ignore prefix on hook
	}
	?>
	<a class="skip-link screen-reader-text" href="#content-wrap"><?php esc_html_e( 'Skip to content', 'canuck' ); ?></a>
	<?php
	if ( 'background_image' === $canuck_blog_feature ) {
		?>
		<header id="main-header" class="header-wide-image blog">
		<?php
	} elseif ( 'button_nav' === $canuck_blog_feature || 'widgetized' === $canuck_blog_feature ) {
		?>
		<header id="main-header" class="header-wide-slider blog">
		<?php
	} else {
		?>
		<header id="main-header" class="header-wide-no-feature blog">
		<?php
	}
			get_template_part( '/template-parts/header-parts/header', 'top-strip' );
			?>
			<div class="header-logo-menu-wide">
				<div class="header-logo-menu-strip">
					<div class="header-image-left" >
						<?php
						if ( 'background_image' === $canuck_blog_feature ) {
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
							<?php
						} else {
							canuck_show_logo();
						}
						?>
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
						<h2 class="screen-reader-text"><?php esc_html_e( 'Main Menu', 'canuck' ); ?></h2>
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
		<?php
		if ( 'background_image' === $canuck_blog_feature ) {
			$image_url = get_header_image();// phpcs:ignore global prefix
			if ( false == $image_url ) {// phpcs:ignore loose comparison ok.
				$image_url = get_parent_theme_file_uri( '/images/headerdefault.jpg' );// phpcs:ignore global prefix
			}
			?>
			<div class="header-image-wrap">
				<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php esc_attr_e( 'header-image', 'canuck' ); ?>">
				<div class="header-image-overlay">
					<?php
					if ( '' !== $canuck_blog_title ) {
						?>
						<h1><?php echo wp_kses_post( $canuck_blog_title ); ?></h1>
						<?php
					} else {
						?>
						<h1><?php echo get_bloginfo( 'name' );// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h1>
						<?php
					}
					if ( '' !== $canuck_blog_desc ) {
						?>
						<span><?php echo wp_kses_post( $canuck_blog_desc ); ?></span>
						<?php
					} else {
						?>
						<span><?php echo get_bloginfo( 'description' );// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
						<?php
					}
					?>
				</div>
			</div>
			<?php
		} else {
			echo '<div class="sticky-spacer">&nbsp;</div>';
		}
		?>
