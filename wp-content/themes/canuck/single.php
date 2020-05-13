<?php
/**
 * Single Page WordPress file
 *
 * This file is the Single Page template file, which is
 * used to display single posts and the comment system.
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $canuck_include_breadcrumbs,$canuck_exclude_page_title,$canuck_single_layout_option;
$canuck_single_layout_option = esc_html( get_theme_mod( 'canuck_single_post_layout', 'right_sidebar' ) );
$canuck_include_breadcrumbs  = get_theme_mod( 'canuck_breadcrumbs' ) ? true : false;
$canuck_exclude_page_title   = get_theme_mod( 'canuck_single_title' ) ? true : false;
$canuck_sidebar_a            = esc_html( get_theme_mod( 'canuck_single_sidebar_a', 'blog-a' ) );
$canuck_sidebar_b            = esc_html( get_theme_mod( 'canuck_single_sidebar_b', 'blog-b' ) );

get_header( 'no-feature' );

get_template_part( '/template-parts/partials', 'page-title' );
?>
<div id="main-section">
	<div id="content-wrap">
		<?php
		if ( 'left_sidebar' === $canuck_single_layout_option ) {
			?>
			<aside id="two-column-sidebar-left" class="toggle-sb-a">
				<?php get_template_part( '/template-parts/sidebars/sidebar', $canuck_sidebar_a ); ?>
			</aside>
			<div id="two-column-content">
				<?php
				get_template_part( '/template-parts/single-parts/single', 'post' );
				get_template_part( '/template-parts/single-parts/single', 'navi' );
				?>
			</div>
			<?php
		} elseif ( 'both_sidebars' === $canuck_single_layout_option ) {
			?>
			<aside id="three-column-sidebar-left" class="toggle-sb-a">
				<?php get_template_part( '/template-parts/sidebars/sidebar', $canuck_sidebar_a ); ?>
			</aside>
			<div id="three-column-content">
				<?php
				get_template_part( '/template-parts/single-parts/single', 'post' );
				get_template_part( '/template-parts/single-parts/single', 'navi' );
				?>
			</div>
			<aside id="three-column-sidebar-right" class="toggle-sb-b">
				<?php get_template_part( '/template-parts/sidebars/sidebar', $canuck_sidebar_b ); ?>
			</aside>
			<?php
		} elseif ( 'fullwidth' === $canuck_single_layout_option ) {
			?>
			<div id="fullwidth">
				<?php
				get_template_part( '/template-parts/single-parts/single', 'post' );
				get_template_part( '/template-parts/single-parts/single', 'navi' );
				?>
			</div>
			<?php
		} else {
			?>
			<div id="two-column-content">
				<?php
				get_template_part( '/template-parts/single-parts/single', 'post' );
				get_template_part( '/template-parts/single-parts/single', 'navi' );
				?>
			</div>
			<aside id="two-column-sidebar-right" class="toggle-sb-b">
				<?php get_template_part( '/template-parts/sidebars/sidebar', $canuck_sidebar_a ); ?>
			</aside>
			<?php
		}// End if().
		?>
	</div>
</div>
<div class="clearfix"></div>
<?php
get_footer();

