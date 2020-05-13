<?php
/**
 * Blog Page template file.
 *
 * This file is used for all blog pages.
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $canuck_include_breadcrumbs, $canuck_exclude_page_title, $canuck_feature_category;
$canuck_layout_option       = esc_html( get_theme_mod( 'canuck_blog_layout', 'right_sidebar' ) );
$canuck_include_breadcrumbs = get_theme_mod( 'canuck_breadcrumbs' ) ? true : false;
$canuck_exclude_page_title  = get_theme_mod( 'canuck_blog_title_option' ) ? true : false;
$post_style                 = esc_html( get_theme_mod( 'canuck_blog_style', 'top_feature' ) );
$blog_feature               = get_theme_mod( 'canuck_blog_feature', 'background_image' );
$canuck_feature_category    = get_theme_mod( 'canuck_blog_feature_category', '' );
get_header( 'blog' );
if ( 'button_nav' === $blog_feature ) {
	?>
	<div id="feature-slider-wide">
		<div id="feature-slider-wrap">
			<?php
			if ( '' === $canuck_feature_category ) {
				?>
				<span class="error"><?php esc_html_e( 'Go to Canuck Options=>Blog and enter the Feature Category you used for your posts.', 'canuck' ); ?></span>
				<?php
			} else {
				get_template_part( '/template-parts/feature-slider-parts/slider', 'button-nav-3to1' );
			}
			?>
		</div>
	</div>
	<?php
} elseif ( 'fullsize' === $blog_feature ) {
	?>
	<div id="feature-slider-wide">
		<div id="feature-slider-wrap">
			<?php
			if ( '' === $canuck_feature_category ) {
				?>
				<span class="error"><?php esc_html_e( 'Go to Canuck Options=>Blog and enter the Feature Category you used for your posts.', 'canuck' ); ?></span>
				<?php
			} else {
				get_template_part( '/template-parts/feature-slider-parts/slider', 'button-nav-fullsize' );
			}
			?>
		</div>
	</div>
	<?php
} elseif ( 'widgetized' === $blog_feature ) {
	?>
	<div id="feature-slider-wide">
		<div id="feature-slider-wrap">
			<?php
			if ( ! dynamic_sidebar( 'canuck_blog_feature' ) ) {
				echo '<span class="feature-no-video">' .
					esc_html__( 'Your Blog page Feature area is set up for widgets.', 'canuck' ) .
					'<br/>' .
					esc_html__( 'Go to Appearance->Widgets or the Customizer Widgets panel and add a widget to Blog Page Feature.', 'canuck' ) .
					'</span>';
			}
			?>
		</div>
	</div>
	<?php
}
get_template_part( '/template-parts/partials', 'page-title' );
?>
<div id="main-section">
	<div id="content-wrap">
		<?php
		if ( 'left_sidebar' === $canuck_layout_option ) {
			?>
			<aside id="two-column-sidebar-left" class="toggle-sb-a">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'blog-a' ); ?>
			</aside>
			<div id="two-column-content">
				<?php
				if ( 'side_feature' === $post_style ) {
					get_template_part( '/template-parts/blog-parts/blog', 'side-feature' );
				} elseif ( 'two_column_grid' === $post_style ) {
					get_template_part( '/template-parts/blog-parts/blog', 'two-col-posts' );
				} elseif ( 'two_stamp' === $post_style ) {
					get_template_part( '/template-parts/blog-parts/blog', 'two-stamp' );
				} else {
					get_template_part( '/template-parts/blog-parts/blog', 'top-feature' );
				}
				?>
			</div>
			<?php
		} elseif ( 'both_sidebars' === $canuck_layout_option ) {
			?>
			<aside id="three-column-sidebar-left" class="toggle-sb-a">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'blog-a' ); ?>
			</aside>
			<div id="three-column-content">
				<?php get_template_part( '/template-parts/blog-parts/blog', 'top-feature' ); ?>
			</div>
			<aside id="three-column-sidebar-right" class="toggle-sb-b">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'blog-b' ); ?>
			</aside>
			<?php
		} elseif ( 'fullwidth' === $canuck_layout_option ) {
			?>
			<div id="fullwidth">
				<?php
				if ( 'two_column_grid' === $post_style ) {
					get_template_part( '/template-parts/blog-parts/blog', 'two-col-posts' );
				} elseif ( 'three_column_grid' === $post_style ) {
					get_template_part( '/template-parts/blog-parts/blog', 'three-col-posts' );
				} elseif ( 'two_stamp' === $post_style ) {
					get_template_part( '/template-parts/blog-parts/blog', 'two-stamp' );
				} elseif ( 'three_stamp' === $post_style ) {
					get_template_part( '/template-parts/blog-parts/blog', 'three-stamp' );
				} else {
					get_template_part( '/template-parts/blog-parts/blog', 'side-feature' );
				}
				?>
			</div>
			<?php
		} else {
			?>
			<div id="two-column-content">
				<?php
				if ( 'side_feature' === $post_style ) {
					get_template_part( '/template-parts/blog-parts/blog', 'side-feature' );
				} elseif ( 'two_column_grid' === $post_style ) {
					get_template_part( '/template-parts/blog-parts/blog', 'two-col-posts' );
				} elseif ( 'two_stamp' === $post_style ) {
					get_template_part( '/template-parts/blog-parts/blog', 'two-stamp' );
				} else {
					get_template_part( '/template-parts/blog-parts/blog', 'top-feature' );
				}
				?>
			</div>
			<aside id="two-column-sidebar-right" class="toggle-sb-b">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'blog-a' ); ?>
			</aside>
			<?php
		}// End if().
		?>
	</div>
</div>
<div class="clearfix"></div>
<?php
get_footer();

