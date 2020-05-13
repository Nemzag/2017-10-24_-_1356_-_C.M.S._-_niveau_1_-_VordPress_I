<?php
/**
 * Template Name: Portfolio
 *
 * Page for displaying special feature posts in a portfolio format
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $canuck_include_breadcrumbs,$canuck_exclude_page_title;
$canuck_layout_option       = esc_html( ( '' === get_post_meta( $post->ID, 'canuck_metabox_page_layout', true ) ? 'right_sidebar' : get_post_meta( $post->ID, 'canuck_metabox_page_layout', true ) ) );
$canuck_include_breadcrumbs = get_theme_mod( 'canuck_breadcrumbs' ) ? true : false;
$canuck_exclude_page_title  = get_post_meta( $post->ID, 'canuck_metabox_title', true ) ? true : false;
$canuck_sidebar_a           = esc_html( ( '' === get_post_meta( $post->ID, 'canuck_metabox_sidebar_a', true ) ? 'default-a' : get_post_meta( $post->ID, 'canuck_metabox_sidebar_a', true ) ) );
$canuck_sidebar_b           = esc_html( ( '' === get_post_meta( $post->ID, 'canuck_metabox_sidebar_b', true ) ? 'default-b' : get_post_meta( $post->ID, 'canuck_metabox_sidebar_b', true ) ) );
$canuck_portfolio_type      = esc_html( ( '' === get_post_meta( $post->ID, 'canuck_portfolio_type', true ) ? 'classic1' : get_post_meta( $post->ID, 'canuck_portfolio_type', true ) ) );
get_header( 'no-feature' );
get_template_part( '/template-parts/partials', 'page-title' );
?>
<div id="main-section">
	<div id="content-wrap">
		<?php
		if ( 'left_sidebar' === $canuck_layout_option ) {
			echo '<aside id="two-column-sidebar-left" class="toggle-sb-a">';
				get_template_part( '/template-parts/sidebars/sidebar', $canuck_sidebar_a );
			echo '</aside>';
			echo '<div id="two-column-content">';
				get_template_part( '/template-parts/portfolio-parts/portfolio', 'content' );
				get_template_part( '/template-parts/portfolio-parts/portfolio', $canuck_portfolio_type );
			echo '</div>';
		} elseif ( 'both_sidebars' === $canuck_layout_option ) {
			echo '<aside id="three-column-sidebar-left" class="toggle-sb-a">';
				get_template_part( '/template-parts/sidebars/sidebar', $canuck_sidebar_a );
			echo '</aside>';
			echo '<div id="three-column-content">';
				get_template_part( '/template-parts/portfolio-parts/portfolio', 'content' );
				get_template_part( '/template-parts/portfolio-parts/portfolio', $canuck_portfolio_type );
			echo '</div>';
			echo '<aside id="three-column-sidebar-right" class="toggle-sb-b">';
				get_template_part( '/template-parts/sidebars/sidebar', $canuck_sidebar_b );
			echo '</aside>';
		} elseif ( 'fullwidth' === $canuck_layout_option ) {
			echo '<div id="fullwidth">';
				get_template_part( '/template-parts/portfolio-parts/portfolio', 'content' );
				get_template_part( '/template-parts/portfolio-parts/portfolio', $canuck_portfolio_type );
			echo '</div>';
		} else {
			echo '<div id="two-column-content">';
				get_template_part( '/template-parts/portfolio-parts/portfolio', 'content' );
				get_template_part( '/template-parts/portfolio-parts/portfolio', $canuck_portfolio_type );
			echo '</div>';
			echo '<aside id="two-column-sidebar-right" class="toggle-sb-b">';
				get_template_part( '/template-parts/sidebars/sidebar', $canuck_sidebar_a );
			echo '</aside>';
		}
		?>
	</div>
</div>
<div class="clearfix"></div>
<?php
get_footer();
