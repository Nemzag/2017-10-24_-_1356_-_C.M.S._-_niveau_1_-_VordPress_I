<?php
/**
 * Canuck Home Page template part - layout option 7
 *
 * This template part is called by template-home.php
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

// Get the options.
$section7_usage        = get_theme_mod( 'canuck_section7_usage', 'normal' );
$section7_text         = stripslashes( get_theme_mod( 'canuck_section7_text', '' ) );
$section7_shortcode    = stripslashes( get_theme_mod( 'canuck_section7_shortcode', '' ) );
$section7_include_link = get_theme_mod( 'canuck_include_section7_button', false );
$section7_link         = get_theme_mod( 'canuck_section7_button_link', '#' );
$section7_button_label = get_theme_mod( 'canuck_section7_button_name', "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ) );
$sec7_bg_image         = get_theme_mod( 'canuck_section7_background_image', '' );
$sec7_use_parallax     = get_theme_mod( 'canuck_section7_use_parallax', false );
$use_lazyload          = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
if ( '' !== $sec7_bg_image ) {
	if ( true === $sec7_use_parallax ) {
		$string7 = ' class="home-7-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec7_bg_image ) . '" data-speed="0.3" data-bleed="20" style="background: transparent;"';
		// Workaround for overlays on parralax sections :(
		$home_final_setup = canuck_home_area_setup();
		foreach ( $home_final_setup as $area => $section ) {
			if ( '7' === $section ) {
				if ( 1 === $area ) {
					$string7a = ' style="margin: 0 0 -20px 0;"';
				} else {
					$previous_section      = $home_final_setup[ $area - 1 ];
					$prev_sec_use_parallax = get_theme_mod( 'canuck_section' . $previous_section . '_use_parallax', false );
					if ( true === $prev_sec_use_parallax ) {
						$string7a = ' style="margin: 20px 0 -20px 0;"';
					} else {
						$string7a = ' style="margin: 0 0 -20px 0;"';
					}
				}
			}
		}
	} elseif ( true === $use_lazyload ) {
		$string7  = ' class="home-7-wide lazyload" data-src="' . esc_url( $sec7_bg_image ) . '"';
		$string7a = '';
	} else {
		$string7  = ' class="home-7-wide" style="background-image: url( ' . esc_url( $sec7_bg_image ) . ' );"';
		$string7a = '';
	}
} else {
	$string7  = ' class="home-7-wide"';
	$string7a = '';
}
?>
<div <?php echo $string7;// phpcs:ignore ?>>
	<div class="home-7-wide-overlay"<?php echo $string7a;// phpcs:ignore ?>>
		<div class="home-7-wrap">
			<?php
			if ( '' !== $section7_text ) {
				?>
				<div class="home-7-text">
					<?php echo wp_kses_post( $section7_text ); ?>
				</div>
				<?php
			}
			if ( true === $section7_include_link ) {
				if ( '' === $section7_button_label ) {
					$section7_button_label = "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' );
				}
				?>
				<div class="home-7-button">
					<a class="button1" href="<?php echo esc_url( $section7_link ); ?>" title="<?php esc_attr_e( 'more', 'canuck' ); ?>">
						<?php echo wp_kses_post( $section7_button_label ); ?>
					</a>
				</div>
				<?php
			}
			?>
			<div class="clearfix"></div>
			<?php
			if ( 'shortcode' === $section7_usage ) {
				?>
				<div class="home-7-shortcode">
					<?php echo do_shortcode( wp_kses_post( $section7_shortcode ) ); ?>
				</div>
				<?php
			} elseif ( 'widgetized' === $section7_usage ) {
				?>
				<div class="home-7-widget">
					<?php
					if ( ! dynamic_sidebar( 'canuck_home_section7_sidebar' ) ) {
						?>
						<span>
							<?php esc_html_e( 'Section 7 is set up as a widget area.', 'canuck' ); ?>
						</span>
						<br/>
						<span class="alert">
							<?php esc_html_e( 'Go to Appearance->Widgets or the Customizer Widgets panel and add a widget to Home Page Section 7.', 'canuck' ); ?>
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
