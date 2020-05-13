<?php
/**
 * Canuck Home Page template part - area 1
 *
 * This template part is called by template-home.php
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/quick-guide-gplv2.html  GNU Public License
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

// Get options.
$section1_usage        = esc_html( stripslashes( get_theme_mod( 'canuck_section1_usage', 'normal' ) ) );
$section1_text         = stripslashes( get_theme_mod( 'canuck_section1_text', '' ) );
$section1_shortcode    = stripslashes( get_theme_mod( 'canuck_section1_shortcode', '' ) );
$section1_include_link = get_theme_mod( 'canuck_include_section1_button', false );
$section1_link         = get_theme_mod( 'canuck_section1_button_link', '#' );
$section1_button_label = stripslashes( get_theme_mod( 'canuck_section1_button_name', "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ) ) );
$sec1_bg_image         = get_theme_mod( 'canuck_section1_background_image', '' );
$sec1_use_parallax     = get_theme_mod( 'canuck_section1_use_parallax', false );
$use_lazyload          = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
if ( '' !== $sec1_bg_image ) {
	if ( true === $sec1_use_parallax ) {
		$string1 = ' class="home-1-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec1_bg_image ) . '" data-speed="0.3" data-bleed="20" style="background: transparent;"';
		// Workaround for overlays on parralax sections :(
		$home_final_setup = canuck_home_area_setup();
		foreach ( $home_final_setup as $area => $section ) {
			if ( '1' === $section ) {
				if ( 1 === $area ) {
					$string1a = ' style="margin: 0 0 -20px 0;"';
				} else {
					$previous_section      = $home_final_setup[ $area - 1 ];
					$prev_sec_use_parallax = get_theme_mod( 'canuck_section' . $previous_section . '_use_parallax', false );
					if ( true === $prev_sec_use_parallax ) {
						$string1a = ' style="margin: 20px 0 -20px 0;"';
					} else {
						$string1a = ' style="margin: 0 0 -20px 0;"';
					}
				}
			}
		}
	} elseif ( true === $use_lazyload ) {
		$string1  = ' class="home-1-wide lazyload" data-src="' . esc_url( $sec1_bg_image ) . '"';
		$string1a = '';
	} else {
		$string1  = ' class="home-1-wide" style="background-image: url( ' . esc_url( $sec1_bg_image ) . ' );"';
		$string1a = '';
	}
} else {
	$string1  = ' class="home-1-wide"';
	$string1a = '';
}
?>
<div <?php echo $string1;// phpcs:ignore ?>>
	<div class="home-1-wide-overlay"<?php echo $string1a;// phpcs:ignore ?>>
		<div class="home-1-wrap">
			<?php
			if ( '' !== $section1_text ) {
				?>
				<div class="home-1-text">
					<?php echo wp_kses_post( $section1_text ); ?>
				</div>
				<?php
			}
			if ( true === $section1_include_link ) {
				if ( '' === $section1_button_label ) {
					$section1_button_label = "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' );
				}
				?>
				<div class="home-1-button">
					<a class="button1" href="<?php echo esc_url( $section1_link ); ?>" title="<?php esc_attr_e( 'more', 'canuck' ); ?>">
						<?php echo wp_kses_post( $section1_button_label ); ?>
					</a>
				</div>
				<?php
			}
			?>
			<div class="clearfix"></div>
			<?php
			if ( 'shortcode' === $section1_usage ) {
				?>
				<div class="home-1-shortcode">
					<?php echo do_shortcode( wp_kses_post( $section1_shortcode ) ); ?>
				</div>
				<?php
			} elseif ( 'widgetized' === $section1_usage ) {
				?>
				<div class="home-1-widget">
					<?php
					if ( ! dynamic_sidebar( 'canuck_home_section1_sidebar' ) ) {
						?>
						<span>
							<?php esc_html_e( 'Section 1 is set up as a widget area.', 'canuck' ); ?>
						</span>
						<br/>
						<span class="alert">
							<?php esc_html_e( 'Go to Appearance->Widgets or the Customizer Widgets panel and add a widget to Home Page Section 1.', 'canuck' ); ?>
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
