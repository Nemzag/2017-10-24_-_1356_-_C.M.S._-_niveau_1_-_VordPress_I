<?php
/**
 * Master/Default template file.
 *
 * This file is the master/default template file, used when no other file matches in
 * the {@link http://codex.wordpress.org/Template_Hierarchy Template Hierarchy}.
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $canuck_include_breadcrumbs,$canuck_exclude_page_title,$canuck_page_title;
$canuck_layout_option       = get_theme_mod( 'canuck_index_layout', 'right_sidebar' );
$canuck_include_breadcrumbs = get_theme_mod( 'canuck_breadcrumbs' ) ? true : false;
$canuck_exclude_page_title  = get_theme_mod( 'canuck_index_title' ) ? true : false;

get_header( 'no-feature' );

get_template_part( '/template-parts/partials', 'page-title-no-post' );
?>
<div id="main-section">
	<div id="content-wrap">
		<?php
		if ( 'left_sidebar' === $canuck_layout_option ) {
			?>
			<aside id="two-column-sidebar-left" class="toggle-sb-a">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'default-a' ); ?>
			</aside>
			<div id="two-column-content">
				<?php
				get_template_part( '/template-parts/blog-parts/blog', 'top-feature' );
				get_template_part( '/template-parts/partials', 'page-navi' );
				?>
			</div>
			<?php
		} elseif ( 'both_sidebars' === $canuck_layout_option ) {
			?>
			<aside id="three-column-sidebar-left" class="toggle-sb-a">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'default-a' ); ?>
			</aside>
			<div id="three-column-content">
				<?php
				get_template_part( '/template-parts/blog-parts/blog', 'top-feature' );
				get_template_part( '/template-parts/partials', 'page-navi' );
				?>
			</div>
			<aside id="three-column-sidebar-right" class="toggle-sb-b">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'default-b' ); ?>
			</aside>
			<?php
		} elseif ( 'fullwidth' === $canuck_layout_option ) {
			?>
			<div id="fullwidth">
				<?php
				get_template_part( '/template-parts/blog-parts/blog', 'top-feature' );
				get_template_part( '/template-parts/partials', 'page-navi' );
				?>
			</div>
			<?php
		} else {
			?>
			<div id="two-column-content">
				<?php
				get_template_part( '/template-parts/blog-parts/blog', 'top-feature' );
				get_template_part( '/template-parts/partials', 'page-navi' );
				?>
			</div>
			<aside id="two-column-sidebar-right" class="toggle-sb-b">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'default-a' ); ?>
			</aside>
			<?php
		}// End if().
		?>
	</div>
</div>
<div class="clearfix"></div>
<?php
get_footer();

