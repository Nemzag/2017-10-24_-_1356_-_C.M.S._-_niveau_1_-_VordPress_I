<?php
/**
 * Error 404 Page template file
 *
 * This file is the Error 404 Page template file, which is output whenever
 * the server encounters a "404 - file not found" error.
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $canuck_include_breadcrumbs,$canuck_exclude_page_title,$canuck_page_title;
$canuck_layout_option       = get_theme_mod( 'canuck_404_layout', 'right_sidebar' );
$canuck_include_breadcrumbs = get_theme_mod( 'canuck_breadcrumbs' ) ? true : false;
$canuck_exclude_page_title  = get_theme_mod( 'canuck_404_title' ) ? true : false;
$canuck_page_title          = esc_html__( '404 Error - Page Not Found', 'canuck' );
get_header( 'no-feature' );
get_template_part( '/template-parts/partials', 'page-title-no-post' );
?>
<div id="main-section">
	<div id="content-wrap">
		<?php
		if ( 'left_sidebar' === $canuck_layout_option ) {
			echo '<aside id="two-column-sidebar-left" class="toggle-sb-a">';
				get_template_part( '/template-parts/sidebars/sidebar', 'error-404-a' );
			echo '</aside>';
			echo '<div id="two-column-content">';
				get_template_part( '/template-parts/partials', '404-content' );
			echo '</div>';
		} elseif ( 'both_sidebars' === $canuck_layout_option ) {
			echo '<aside id="three-column-sidebar-left" class="toggle-sb-a">';
				get_template_part( '/template-parts/sidebars/sidebar', 'error-404-a' );
			echo '</aside>';
			echo '<div id="three-column-content">';
				get_template_part( '/template-parts/partials', '404-content' );
			echo '</div>';
			echo '<aside id="three-column-sidebar-right" class="toggle-sb-b">';
				get_template_part( '/template-parts/sidebars/sidebar', 'error-404-b' );
			echo '</aside>';
		} elseif ( 'fullwidth' === $canuck_layout_option ) {
			echo '<div id="fullwidth">';
				get_template_part( '/template-parts/partials', '404-content' );
				get_search_form();
				get_template_part( '/template-parts/partials', 'recent-posts' );
			echo '</div>';
		} else {
			echo '<div id="two-column-content">';
				get_template_part( '/template-parts/partials', '404-content' );
			echo '</div>';
			echo '<aside id="two-column-sidebar-right" class="toggle-sb-b">';
				get_template_part( '/template-parts/sidebars/sidebar', 'error-404-a' );
			echo '</aside>';
		}
		?>
	</div>
</div>
<div class="clearfix"></div>
<?php
get_footer();

