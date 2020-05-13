<?php
/**
 * Canuck Home Page template part - layout option 3
 *
 * This template part is called by template-home.php
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

// Get the options.
$section3_usage        = esc_html( get_theme_mod( 'canuck_section3_usage', 'normal' ) );
$section3_text         = stripslashes( get_theme_mod( 'canuck_section3_text', '' ) );
$section3_shortcode    = stripslashes( get_theme_mod( 'canuck_section3_shortcode', '' ) );
$section3_include_link = get_theme_mod( 'canuck_include_section3_button', false );
$section3_link         = get_theme_mod( 'canuck_section3_button_link', '#' );
$section3_button_label = get_theme_mod( 'canuck_section3_button_name', "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ) );
$sec3_bg_image         = get_theme_mod( 'canuck_section3_background_image', '' );
$sec3_use_parallax     = get_theme_mod( 'canuck_section3_use_parallax', false );
$use_lazyload          = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
if ( '' !== $sec3_bg_image ) {
	if ( true === $sec3_use_parallax ) {
		$string3 = ' class="home-3-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec3_bg_image ) . '" data-speed="0.3" data-bleed="20" style="background: transparent;"';
		// Workaround for overlays on parralax sections :(
		$home_final_setup = canuck_home_area_setup();
		foreach ( $home_final_setup as $area => $section ) {
			if ( '3' === $section ) {
				if ( 1 === $area ) {
					$string3a = ' style="margin: 0 0 -20px 0;"';
				} else {
					$previous_section      = $home_final_setup[ $area - 1 ];
					$prev_sec_use_parallax = get_theme_mod( 'canuck_section' . $previous_section . '_use_parallax', false );
					if ( true === $prev_sec_use_parallax ) {
						$string3a = ' style="margin: 20px 0 -20px 0;"';
					} else {
						$string3a = ' style="margin: 0 0 -20px 0;"';
					}
				}
			}
		}
	} elseif ( true === $use_lazyload ) {
		$string3  = ' class="home-3-wide lazyload" data-src="' . esc_url( $sec3_bg_image ) . '"';
		$string3a = '';
	} else {
		$string3  = ' class="home-3-wide" style="background-image: url( ' . esc_url( $sec3_bg_image ) . ' );"';
		$string3a = '';
	}
} else {
	$string3  = ' class="home-3-wide"';
	$string3a = '';
}
?>
<div <?php echo $string3;// phpcs:ignore ?>>
	<div class="home-3-wide-overlay"<?php echo $string3a;// phpcs:ignore ?>>
		<div class="home-3-wrap">
			<?php
			if ( '' !== $section3_text ) {
				?>
				<div class="home-3-text">
					<?php echo wp_kses_post( $section3_text ); ?>
				</div>
				<?php
			}
			if ( true === $section3_include_link ) {
				if ( '' === $section3_button_label ) {
					$section3_button_label = "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' );
				}
				?>
				<div class="home-3-button">
					<a class="button1" href="<?php echo esc_url( $section3_link ); ?>" title="<?php esc_attr_e( 'more', 'canuck' ); ?>">
						<?php echo wp_kses_post( $section3_button_label ); ?>
					</a>
				</div>
				<?php
			}
			?>
			<div class="clearfix"></div>
			<?php
			if ( 'shortcode' === $section3_usage ) {
				?>
				<div class="home-3-shortcode">
					<?php echo do_shortcode( wp_kses_post( $section3_shortcode ) ); ?>
				</div>
				<?php
			} elseif ( 'widgetized' === $section3_usage ) {
				?>
				<div class="home-3-widget">
					<?php
					if ( ! dynamic_sidebar( 'canuck_home_section3_sidebar' ) ) {
						?>
						<span>
							<?php esc_html_e( 'Section 3 is set up as a widget area.', 'canuck' ); ?>
						</span>
						<br/>
						<span class="alert">
							<?php esc_html_e( 'Go to Appearance->Widgets or the Customizer Widgets panel and add a widget to Home Page Section 3.', 'canuck' ); ?>
						</span>
						<?php
					}
					?>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>
