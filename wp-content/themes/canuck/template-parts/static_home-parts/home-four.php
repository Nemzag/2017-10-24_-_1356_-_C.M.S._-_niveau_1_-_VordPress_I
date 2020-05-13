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

$sec4_bg_image     = get_theme_mod( 'canuck_section4_background_image', '' );
$sec4_use_parallax = get_theme_mod( 'canuck_section4_use_parallax', false );
$use_lazyload      = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
if ( '' !== $sec4_bg_image ) {
	if ( true === $sec4_use_parallax ) {
		$string4 = ' class="home-4-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec4_bg_image ) . '" data-speed="0.3" data-bleed="20" style="background: transparent;"';
		// Workaround for overlays on parralax sections :(
		$home_final_setup = canuck_home_area_setup();
		foreach ( $home_final_setup as $area => $section ) {
			if ( '4' === $section ) {
				if ( 1 === $area ) {
					$string4a = ' style="margin: 0 0 -20px 0;"';
				} else {
					$previous_section      = $home_final_setup[ $area - 1 ];
					$prev_sec_use_parallax = get_theme_mod( 'canuck_section' . $previous_section . '_use_parallax', false );
					if ( true === $prev_sec_use_parallax ) {
						$string4a = ' style="margin: 20px 0 -20px 0;"';
					} else {
						$string4a = ' style="margin: 0 0 -20px 0;"';
					}
				}
			}
		}
	} elseif ( true === $use_lazyload ) {
		$string4  = ' class="home-4-wide lazyload" data-src="' . esc_url( $sec4_bg_image ) . '"';
		$string4a = '';
	} else {
		$string4  = ' class="home-4-wide" style="background-image: url( ' . esc_url( $sec4_bg_image ) . ' );"';
		$string4a = '';
	}
} else {
	$string4  = ' class="home-4-wide"';
	$string4a = '';
}
?>
<div <?php echo $string4;// phpcs:ignore ?>>
	<div class="home-4-wide-overlay"<?php echo $string4a;// phpcs:ignore ?>>
		<div class="home-4-wrap">
			<div class="servicebox one">
				<?php
				// Get the options.
				$section4_box1_use_image_font = get_theme_mod( 'canuck_section4_box1_use_font_icon', false );
				$section4_box1_image_font     = get_theme_mod( 'canuck_section4_box1_image_font', '' );
				$section4_box1_image          = get_theme_mod( 'canuck_section4_box1_image', '' );
				$section4_box1_title          = stripslashes( get_theme_mod( 'canuck_section4_box1_title', '' ) );
				$section4_box1_text           = stripslashes( get_theme_mod( 'canuck_section4_box1_text', '' ) );
				$section4_box1_include_link   = get_theme_mod( 'canuck_section4_box1_include_link', false );
				$section4_box1_button_link    = get_theme_mod( 'canuck_section4_box1_button_link', '#' );
				$section4_box1_button_title   = get_theme_mod( 'canuck_section4_box1_button_title', "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ) );
				if ( true === $section4_box1_include_link && '' === $section4_box1_button_title ) {
					// No link button so use image for link.
					if ( true === $section4_box1_use_image_font && '' !== $section4_box1_image_font ) {
						?>
						<div class="section4-graphic">
							<a class="section4-linked-fi" href="<?php echo esc_url( $section4_box1_button_link ); ?>" 
								title="<?php echo esc_attr( $section4_box1_title ); ?>">
								<i class="fa <?php echo esc_attr( $section4_box1_image_font ); ?>"></i>
							</a>
						</div>
						<?php
					} elseif ( '' !== $section4_box1_image ) {
						?>
						<div class="section4-graphic">
							<a class="section4-linked-image" href="<?php echo esc_url( $section4_box1_button_link ); ?>"	title="<?php echo esc_attr( $section4_box1_title ); ?>">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img class="lazyload"
										src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section4_box1_image ); ?>"
										alt="<?php echo esc_attr( $section4_box1_title ); ?>" />
									<?php
								} else {
									?>
									<img src="<?php echo esc_url( $section4_box1_image ); ?>" alt="<?php echo esc_attr( $section4_box1_title ); ?>" />
									<?php
								}
								?>
								<div class="section4-image-overlay">
									<i class="fa fa-link"></i>
								</div>
							</a>
						</div>
						<?php
					}
				} else {
					// Put in the image with no link.
					if ( true === $section4_box1_use_image_font ) {
						?>
						<div class="section4-graphic">
							<i class="no-link fa <?php echo esc_attr( $section4_box1_image_font ); ?>"></i>
						</div>
						<?php
					} else {
						if ( '' !== $section4_box1_image ) {
							?>
							<div class="section4-graphic">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img class="lazyload no-link"
										src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section4_box1_image ); ?>"
										alt="<?php echo esc_attr( $section4_box1_title ); ?>" />
									<?php
								} else {
									?>
									<img class ="no-link" src="<?php echo esc_url( $section4_box1_image ); ?>" alt="<?php echo esc_attr( $section4_box1_title ); ?>" />
									<?php
								}
								?>
							</div>
							<?php
						}
					}
				}// End if().
				if ( '' !== $section4_box1_title ) {
					echo '<h4>' . esc_html( $section4_box1_title ) . '</h4>';
				}
				if ( '' !== $section4_box1_text ) {
					echo '<div class="servicebox-content">' . wp_kses_post( $section4_box1_text ) . '</div>';
				}
				if ( true === $section4_box1_include_link && '' !== $section4_box1_button_title ) {
					?>
					<div class="home-4-button">
						<a class="button1" href="<?php echo esc_url( $section4_box1_button_link ); ?>"	title="<?php esc_attr_e( 'more', 'canuck' ); ?>">
							<?php echo wp_kses_post( $section4_box1_button_title ); ?>
						</a>
					</div>
					<?php
				}
				?>
			</div>
			<div class="servicebox two">
				<?php
				// Get the options.
				$section4_box2_use_image_font = get_theme_mod( 'canuck_section4_box2_use_font_icon', false );
				$section4_box2_image_font     = get_theme_mod( 'canuck_section4_box2_image_font', '' );
				$section4_box2_image          = get_theme_mod( 'canuck_section4_box2_image', '' );
				$section4_box2_title          = stripslashes( get_theme_mod( 'canuck_section4_box2_title', '' ) );
				$section4_box2_text           = stripslashes( get_theme_mod( 'canuck_section4_box2_text', '' ) );
				$section4_box2_include_link   = get_theme_mod( 'canuck_section4_box2_include_link', false );
				$section4_box2_button_link    = get_theme_mod( 'canuck_section4_box2_button_link', '#' );
				$section4_box2_button_title   = get_theme_mod( 'canuck_section4_box2_button_title', "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ) );
				if ( true === $section4_box2_include_link && '' === $section4_box2_button_title ) {
					// No link button so use image for link.
					if ( true === $section4_box2_use_image_font && '' !== $section4_box2_image_font ) {
						?>
						<div class="section4-graphic">
							<a class="section4-linked-fi" href="<?php echo esc_url( $section4_box2_button_link ); ?>" 
								title="<?php echo esc_attr( $section4_box2_title ); ?>">
								<i class="fa <?php echo esc_attr( $section4_box2_image_font ); ?>"></i>
							</a>
						</div>
						<?php
					} elseif ( '' !== $section4_box2_image ) {
						?>
						<div class="section4-graphic">
							<a class="section4-linked-image" href="<?php echo esc_url( $section4_box2_button_link ); ?>"
								title="<?php echo esc_attr( $section4_box2_title ); ?>">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img class="lazyload"
										src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section4_box2_image ); ?>"
										alt="<?php echo esc_attr( $section4_box2_title ); ?>" />
									<?php
								} else {
									?>
									<img src="<?php echo esc_url( $section4_box2_image ); ?>" alt="<?php echo esc_attr( $section4_box2_title ); ?>" />
									<?php
								}
								?>
								<div class="section4-image-overlay">
									<i class="fa fa-link"></i>
								</div>
							</a>
						</div>
						<?php
					}
				} else {
					// Put in the image with no link.
					if ( true === $section4_box2_use_image_font ) {
						?>
						<div class="section4-graphic">
							<i class="no-link fa <?php echo esc_attr( $section4_box2_image_font ); ?>"></i>
						</div>
						<?php
					} else {
						if ( '' !== $section4_box2_image ) {
							?>
							<div class="section4-graphic">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img class="lazyload no-link"
										src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section4_box2_image ); ?>"
										alt="<?php echo esc_attr( $section4_box2_title ); ?>" />
									<?php
								} else {
									?>
									<img class ="no-link" src="<?php echo esc_url( $section4_box2_image ); ?>" alt="<?php echo esc_attr( $section4_box2_title ); ?>" />
									<?php
								}
								?>
							</div>
							<?php
						}
					}
				}// End if().
				if ( '' !== $section4_box2_title ) {
					echo '<h4>' . esc_html( $section4_box2_title ) . '</h4>';
				}
				if ( '' !== $section4_box2_text ) {
					echo '<div class="servicebox-content">' . wp_kses_post( $section4_box2_text ) . '</div>';
				}
				if ( true === $section4_box2_include_link && '' !== $section4_box2_button_title ) {
					?>
					<div class="home-4-button">
						<a class="button1" href="<?php echo esc_url( $section4_box2_button_link ); ?>" title="<?php esc_attr_e( 'more', 'canuck' ); ?>">
							<?php echo wp_kses_post( $section4_box2_button_title ); ?></a>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
