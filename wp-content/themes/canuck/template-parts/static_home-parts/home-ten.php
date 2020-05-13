<?php
/**
 * Canuck Home Page template part - layout option 4
 *
 * This template part is called by template-home.php
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

// Get the options.
$section10_usage        = stripslashes( get_theme_mod( 'canuck_section10_media_area_usage', 'image' ) );
$section10_image        = get_theme_mod( 'canuck_section10_image', '' );
$section10_title        = stripslashes( get_theme_mod( 'canuck_section10_title', '' ) );
$section10_shortcode    = stripslashes( get_theme_mod( 'canuck_section10_shortcode', '' ) );
$section10_text         = stripslashes( get_theme_mod( 'canuck_section10_text', '' ) );
$section10_include_link = get_theme_mod( 'canuck_section10_include_link', false );
$section10_button_link  = get_theme_mod( 'canuck_section10_button_link', '#' );
$section10_button_label = get_theme_mod( 'canuck_section10_button_title', "<i class='fa fa-link'></i> " . __( 'more', 'canuck' ) );
$sec10_bg_image         = get_theme_mod( 'canuck_section10_background_image', '' );
$sec10_use_parallax     = get_theme_mod( 'canuck_section10_use_parallax', false );
$use_lazyload           = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
if ( '' !== $sec10_bg_image ) {
	if ( true === $sec10_use_parallax ) {
		$string10 = ' class="home-10-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec10_bg_image ) . '" data-speed="0.3" data-bleed="20" style="background: transparent;"';
		// Workaround for overlays on parralax sections :(
		$home_final_setup = canuck_home_area_setup();
		foreach ( $home_final_setup as $area => $section ) {
			if ( '10' === $section ) {
				if ( 1 === $area ) {
					$string10a = ' style="margin: 0 0 -20px 0;"';
				} else {
					$previous_section      = $home_final_setup[ $area - 1 ];
					$prev_sec_use_parallax = get_theme_mod( 'canuck_section' . $previous_section . '_use_parallax', false );
					if ( true === $prev_sec_use_parallax ) {
						$string10a = ' style="margin: 20px 0 -20px 0;"';
					} else {
						$string10a = ' style="margin: 0 0 -20px 0;"';
					}
				}
			}
		}
	} elseif ( true === $use_lazyload ) {
		$string10  = ' class="home-10-wide lazyload" data-src="' . esc_url( $sec10_bg_image ) . '"';
		$string10a = '';
	} else {
		$string10  = ' class="home-10-wide" style="background-image: url( ' . esc_url( $sec10_bg_image ) . ' );"';
		$string10a = '';
	}
} else {
	$string10  = ' class="home-10-wide"';
	$string10a = '';
}
?>
<div <?php echo $string10;// phpcs:ignore ?>>
	<div class="home-10-wide-overlay"<?php echo $string10a;// phpcs:ignore ?>>
		<div class="home-10-wrap">
			<div class="home-10-media">
				<?php
				if ( 'shortcode' === $section10_usage ) {
					?>
					<div class="home-10-shortcode">
						<?php
							echo do_shortcode( wp_kses_post( $section10_shortcode ) );
						?>
					</div>
					<?php
				} elseif ( 'widgetized' === $section10_usage ) {
					?>
					<div class="home-10-widget">
						<?php
						if ( ! dynamic_sidebar( 'canuck_home_section10_sidebar' ) ) {
							echo esc_html__( 'Section 10 media area is set up as a widget area.', 'canuck' ) .
								'<br/><span class="alert">' .
								esc_html__( 'Go to Appearance->Widgets or the Customizer Widgets panel and add a widget to Home Page Section 10.', 'canuck' ) .
								'</span>';
						}
						?>
					</div>
					<?php
				} else {
					?>
					<div class="home-10-image">
						<?php
						if ( true === $use_lazyload ) {
							?>
							<img class="lazyload"
								src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
								data-src="<?php echo esc_url( $section10_image ); ?>"
								alt="<?php echo esc_attr( $section10_title ); ?>" />
							<?php
						} else {
							?>
							<img src="<?php echo esc_url( $section10_image ); ?>" alt="<?php esc_attr( $section10_title ); ?>" />
							<?php
						}
						?>
					</div>
					<?php
				}
				?>
			</div>		
			<div class="home-10-content">
				<div class="home-10-title">
					<h2><?php echo esc_html( $section10_title ); ?></h2>
				</div>
				<div class="home-10-text">
					<p><?php echo wp_kses_post( $section10_text ); ?></p>
				</div>
				<?php
				if ( true === $section10_include_link ) {
					if ( '' === $section10_button_label ) {
						$section10_button_label = "<i class='fa fa-link'></i> " . __( 'more', 'canuck' );
					}
					?>
					<div class="home-10-button">
						<a class="button1" href="<?php echo esc_url( $section10_button_link ); ?>" title="<?php echo esc_attr_e( 'more', 'canuck' ); ?>">
							<?php echo wp_kses_post( $section10_button_label ); ?>
						</a>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
