<?php
/**
 * Template Name: Home Page
 *
 * The template for displaying the theme's static home page.
 *
 * @package   Canuck WordPress Theme
 * @copyright Copyright (C) 2017-2019  Kevin Archibald
 * @license   http://www.gnu.org/licenses/gpl-2.0.html
 * @author    Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $canuck_exclude_page_title,$canuck_include_breadcrumbs, $canuck_feature_category;
$canuck_home_feature     = get_theme_mod( 'canuck_home_feature', 'no_feature' );
$canuck_feature_category = sanitize_text_field( get_theme_mod( 'canuck_home_feature_category', '' ) );
get_header( 'home' );
if ( 'button_nav' === $canuck_home_feature ) {
	?>
	<div id="feature-slider-wide">
		<div id="feature-slider-wrap">
			<?php
			if ( '' === $canuck_feature_category ) {
				?>
				<span class="error"><?php esc_html_e( 'You need to select a category in the \"Canuck Home Page => Home Template 1 Options\" panel!', 'canuck' ); ?></span>
				<?php
			} else {
				get_template_part( '/template-parts/feature-slider-parts/slider', 'button-nav-3to1' );
			}
			?>
		</div>
	</div>
	<?php
} elseif ( 'fullsize' === $canuck_home_feature ) {
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
} elseif ( 'widgetized' === $canuck_home_feature ) {
	?>
	<div id="feature-slider-wide">
		<div id="feature-slider-wrap">
			<?php
			if ( ! dynamic_sidebar( 'canuck_home_feature' ) ) {
				echo '<span class="feature-no-video">' .
					esc_html__( 'Your Home page Feature area is set up for widgets.', 'canuck' ) .
					'<br/>' .
					esc_html__( 'Go to Appearance->Widgets or the Customizer Widgets panel and add a widget to Home Page Feature.', 'canuck' ) .
					'</span>';
			}
			?>
		</div>
	</div>
	<?php
}
?>
<div id="main-section-home">
	<div id="content-wrap-home">
		<div id="fullwidth-home">
			<?php canuck_home_page_sections(); ?>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<?php
get_footer();

