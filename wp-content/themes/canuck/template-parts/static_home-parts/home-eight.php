<?php
/**
 * Canuck Home Page template part - layout option 8
 *
 * This template part is called by template-home.php
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

$sec8_bg_image     = get_theme_mod( 'canuck_section8_background_image', '' );
$sec8_use_parallax = get_theme_mod( 'canuck_section8_use_parallax', false );
$use_lazyload      = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
if ( '' !== $sec8_bg_image ) {
	if ( true === $sec8_use_parallax ) {
		$string8 = ' class="home-8-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec8_bg_image ) . '" data-speed="0.3" data-bleed="20" style="background: transparent;"';
		// Workaround for overlays on parralax sections :(
		$home_final_setup = canuck_home_area_setup();
		foreach ( $home_final_setup as $area => $section ) {
			if ( '8' === $section ) {
				if ( 1 === $area ) {
					$string8a = ' style="margin: 0 0 -20px 0;"';
				} else {
					$previous_section      = $home_final_setup[ $area - 1 ];
					$prev_sec_use_parallax = get_theme_mod( 'canuck_section' . $previous_section . '_use_parallax', false );
					if ( true === $prev_sec_use_parallax ) {
						$string8a = ' style="margin: 20px 0 -20px 0;"';
					} else {
						$string8a = ' style="margin: 0 0 -20px 0;"';
					}
				}
			}
		}
	} elseif ( true === $use_lazyload ) {
		$string8  = ' class="home-8-wide lazyload" data-src="' . $sec8_bg_image . '"';
		$string8a = '';
	} else {
		$string8  = ' class="home-8-wide" style="background-image: url( ' . $sec8_bg_image . ' );"';
		$string8a = '';
	}
} else {
	$string8  = ' class="home-8-wide"';
	$string8a = '';
}
?>
<div <?php echo $string8;// phpcs:ignore ?>>
	<div class="home-8-wide-overlay"<?php echo $string8a;// phpcs:ignore ?>>
		<div class="home-8-wrap">
			<div class="servicebox one">
				<?php
				// Get the options.
				$section8_box1_use_image_font = get_theme_mod( 'canuck_section8_box1_use_font_icon', false );
				$section8_box1_image_font     = get_theme_mod( 'canuck_section8_box1_image_font', '' );
				$section8_box1_image          = get_theme_mod( 'canuck_section8_box1_image', '' );
				$section8_box1_title          = stripslashes( get_theme_mod( 'canuck_section8_box1_title', '' ) );
				$section8_box1_text           = stripslashes( get_theme_mod( 'canuck_section8_box1_text', '' ) );
				$section8_box1_include_link   = get_theme_mod( 'canuck_section8_box1_include_link', false );
				$section8_box1_button_link    = get_theme_mod( 'canuck_section8_box1_button_link', '#' );
				$section8_box1_button_title   = get_theme_mod( 'canuck_section8_box1_button_title', "<i class='fa fa-link'></i> " . __( 'more', 'canuck' ) );
				if ( true === $section8_box1_include_link && '' === $section8_box1_button_title ) {
					// No link button so use image for link.
					if ( true === $section8_box1_use_image_font && '' !== $section8_box1_image_font ) {
						?>
						<div class="section8-graphic">
							<a class="section8-linked-fi" href="<?php echo esc_url( $section8_box1_button_link ); ?>" 
								title="<?php echo esc_attr( $section8_box1_title ); ?>">
								<i class="fa <?php echo esc_attr( $section8_box1_image_font ); ?>"></i>
							</a>
						</div>
						<?php
					} elseif ( '' !== $section8_box1_image ) {
						?>
						<div class="section8-graphic">
							<a class="section8-linked-image" href="<?php echo esc_url( $section8_box1_button_link ); ?>"	title="<?php echo esc_attr( $section8_box1_title ); ?>">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img class="lazyload"
										src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section8_box1_image ); ?>"
										alt="<?php echo esc_attr( $section8_box1_title ); ?>" />
									<?php
								} else {
									?>
									<img src="<?php echo esc_url( $section8_box1_image ); ?>" alt="<?php echo esc_attr( $section8_box1_title ); ?>" />
									<?php
								}
								?>
								<div class="section8-image-overlay">
									<i class="fa fa-link"></i>
								</div>
							</a>
						</div>
						<?php
					}
				} else {
					// Put in the image with no link.
					if ( true === $section8_box1_use_image_font ) {
						?>
						<div class="section8-graphic">
							<i class="no-link fa <?php echo esc_attr( $section8_box1_image_font ); ?>"></i>
						</div>
						<?php
					} else {
						if ( '' !== $section8_box1_image ) {
							?>
							<div class="section8-graphic">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img class="lazyload no-link"
										src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section8_box1_image ); ?>"
										alt="<?php echo esc_attr( $section8_box1_title ); ?>" />
									<?php
								} else {
									?>
									<img class ="no-link" src="<?php echo esc_url( $section8_box1_image ); ?>" alt="<?php echo esc_attr( $section8_box1_title ); ?>" />
									<?php
								}
								?>
							</div>
							<?php
						}
					}
				}// End if().
				if ( '' !== $section8_box1_title ) {
					echo '<h4>' . esc_html( $section8_box1_title ) . '</h4>';
				}
				if ( '' !== $section8_box1_text ) {
					echo '<div class="servicebox-content">' . wp_kses_post( $section8_box1_text ) . '</div>';
				}
				if ( true === $section8_box1_include_link && '' !== $section8_box1_button_title ) {
					?>
					<div class="home-8-button">
						<a class="button1" href="<?php echo esc_url( $section8_box1_button_link ); ?>"	title="<?php esc_attr_e( 'more', 'canuck' ); ?>">
							<?php echo wp_kses_post( $section8_box1_button_title ); ?>
						</a>
					</div>
					<?php
				}
				?>
			</div>
			<div class="servicebox two">
				<?php
				// Get the options.
				$section8_box2_use_image_font = get_theme_mod( 'canuck_section8_box2_use_font_icon', false );
				$section8_box2_image_font     = get_theme_mod( 'canuck_section8_box2_image_font', '' );
				$section8_box2_image          = get_theme_mod( 'canuck_section8_box2_image', '' );
				$section8_box2_title          = stripslashes( get_theme_mod( 'canuck_section8_box2_title', '' ) );
				$section8_box2_text           = stripslashes( get_theme_mod( 'canuck_section8_box2_text', '' ) );
				$section8_box2_include_link   = get_theme_mod( 'canuck_section8_box2_include_link', false );
				$section8_box2_button_link    = get_theme_mod( 'canuck_section8_box2_button_link', '#' );
				$section8_box2_button_title   = get_theme_mod( 'canuck_section8_box2_button_title', "<i class='fa fa-link'></i> " . __( 'more', 'canuck' ) );
				if ( true === $section8_box2_include_link && '' === $section8_box2_button_title ) {
					// No link button so use image for link.
					if ( true === $section8_box2_use_image_font && '' !== $section8_box2_image_font ) {
						?>
						<div class="section8-graphic">
							<a class="section8-linked-fi" href="<?php echo esc_url( $section8_box2_button_link ); ?>" 
								title="<?php echo esc_attr( $section8_box2_title ); ?>">
								<i class="fa <?php echo esc_attr( $section8_box2_image_font ); ?>"></i>
							</a>
						</div>
						<?php
					} elseif ( '' !== $section8_box2_image ) {
						?>
						<div class="section8-graphic">
							<a class="section8-linked-image" href="<?php echo esc_url( $section8_box2_button_link ); ?>"
								title="<?php echo esc_attr( $section8_box2_title ); ?>">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img class="lazyload"
										src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section8_box2_image ); ?>"
										alt="<?php echo esc_attr( $section8_box2_title ); ?>" />
									<?php
								} else {
									?>
									<img src="<?php echo esc_url( $section8_box2_image ); ?>" alt="<?php echo esc_attr( $section8_box2_title ); ?>" />
									<?php
								}
								?>
								<div class="section8-image-overlay">
									<i class="fa fa-link"></i>
								</div>
							</a>
						</div>
						<?php
					}
				} else {
					// Put in the image with no link.
					if ( true === $section8_box2_use_image_font ) {
						?>
						<div class="section8-graphic">
							<i class="no-link fa <?php echo esc_attr( $section8_box2_image_font ); ?>"></i>
						</div>
						<?php
					} else {
						if ( '' !== $section8_box2_image ) {
							?>
							<div class="section8-graphic">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img class="lazyload no-link"
										src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section8_box2_image ); ?>"
										alt="<?php echo esc_attr( $section8_box2_title ); ?>" />
									<?php
								} else {
									?>
									<img class ="no-link" src="<?php echo esc_url( $section8_box2_image ); ?>" alt="<?php echo esc_attr( $section8_box2_title ); ?>" />
									<?php
								}
								?>
							</div>
							<?php
						}
					}
				}// End if().
				if ( '' !== $section8_box2_title ) {
					echo '<h4>' . esc_html( $section8_box2_title ) . '</h4>';
				}
				if ( '' !== $section8_box2_text ) {
					echo '<div class="servicebox-content">' . wp_kses_post( $section8_box2_text ) . '</div>';
				}
				if ( true === $section8_box2_include_link && '' !== $section8_box2_button_title ) {
					?>
					<div class="home-8-button">
						<a class="button1" href="<?php echo esc_url( $section8_box2_button_link ); ?>" title="<?php esc_attr_e( 'more', 'canuck' ); ?>">
							<?php echo wp_kses_post( $section8_box2_button_title ); ?></a>
					</div>
					<?php
				}
				?>
			</div>
			<div class="servicebox three">
				<?php
				// Get the options.
				$section8_box3_use_image_font = get_theme_mod( 'canuck_section8_box3_use_font_icon', false );
				$section8_box3_image_font     = get_theme_mod( 'canuck_section8_box3_image_font', '' );
				$section8_box3_image          = get_theme_mod( 'canuck_section8_box3_image', '' );
				$section8_box3_title          = stripslashes( get_theme_mod( 'canuck_section8_box3_title', '' ) );
				$section8_box3_text           = stripslashes( get_theme_mod( 'canuck_section8_box3_text', '' ) );
				$section8_box3_include_link   = get_theme_mod( 'canuck_section8_box3_include_link', 0 );
				$section8_box3_button_link    = get_theme_mod( 'canuck_section8_box3_button_link', '#' );
				$section8_box3_button_title   = get_theme_mod( 'canuck_section8_box3_button_title', "<i class='fa fa-link'></i> " . __( 'more', 'canuck' ) );
				if ( true === $section8_box3_include_link && '' === $section8_box3_button_title ) {
					// No link button so use image for link.
					if ( true === $section8_box3_use_image_font && '' !== $section8_box3_image_font ) {
						?>
						<div class="section8-graphic">
							<a class="section8-linked-fi" href="<?php echo esc_url( $section8_box3_button_link ); ?>" 
								title="<?php echo esc_attr( $section8_box3_title ); ?>">
								<i class="fa <?php echo esc_attr( $section8_box3_image_font ); ?>"></i>
							</a>
						</div>
						<?php
					} elseif ( '' !== $section8_box3_image ) {
						?>
						<div class="section8-graphic">
							<a class="section8-linked-image" href="<?php echo esc_url( $section8_box3_button_link ); ?>"
								title="<?php echo esc_attr( $section8_box3_title ); ?>">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img class="lazyload"
										src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section8_box3_image ); ?>"
										alt="<?php echo esc_attr( $section8_box3_title ); ?>" />
									<?php
								} else {
									?>
									<img src="<?php echo esc_url( $section8_box3_image ); ?>" alt="<?php echo esc_attr( $section8_box3_title ); ?>" />
									<?php
								}
								?>
								<div class="section8-image-overlay">
									<i class="fa fa-link"></i>
								</div>
							</a>
						</div>
						<?php
					}
				} else {
					// Put in the image with no link.
					if ( true === $section8_box3_use_image_font ) {
						?>
						<div class="section8-graphic">
							<i class="no-link fa <?php echo esc_attr( $section8_box3_image_font ); ?>"></i>
						</div>
						<?php
					} else {
						if ( '' !== $section8_box3_image ) {
							?>
							<div class="section8-graphic">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img class="lazyload no-link"
										src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section8_box3_image ); ?>"
										alt="<?php echo esc_attr( $section8_box3_title ); ?>" />
									<?php
								} else {
									?>
									<img class ="no-link" src="<?php echo esc_url( $section8_box3_image ); ?>" alt="<?php echo esc_attr( $section8_box3_title ); ?>" />
									<?php
								}
								?>
							</div>
							<?php
						}
					}
				}// End if().
				if ( '' !== $section8_box3_title ) {
					echo '<h4>' . esc_html( $section8_box3_title ) . '</h4>';
				}
				if ( '' !== $section8_box3_text ) {
					echo '<div class="servicebox-content">' . wp_kses_post( $section8_box3_text ) . '</div>';
				}
				if ( true === $section8_box3_include_link && '' !== $section8_box3_button_title ) {
					?>
					<div class="home-8-button">
						<a class="button1" href="<?php echo esc_url( $section8_box3_button_link ); ?>" title="<?php esc_attr_e( 'more', 'canuck' ); ?>">
							<?php echo wp_kses_post( $section8_box3_button_title ); ?></a>
					</div>
					<?php
				}
				?>
			</div>
			<div class="servicebox four">
				<?php
				// Get the options.
				$section8_box4_use_image_font = get_theme_mod( 'canuck_section8_box4_use_font_icon', false );
				$section8_box4_image_font     = get_theme_mod( 'canuck_section8_box4_image_font', '' );
				$section8_box4_image          = get_theme_mod( 'canuck_section8_box4_image', '' );
				$section8_box4_title          = stripslashes( get_theme_mod( 'canuck_section8_box4_title', '' ) );
				$section8_box4_text           = stripslashes( get_theme_mod( 'canuck_section8_box4_text', '' ) );
				$section8_box4_include_link   = get_theme_mod( 'canuck_section8_box4_include_link', false );
				$section8_box4_button_link    = get_theme_mod( 'canuck_section8_box4_button_link', '#' );
				$section8_box4_button_title   = get_theme_mod( 'canuck_section8_box4_button_title', "<i class='fa fa-link'></i> " . __( 'more', 'canuck' ) );
				if ( true === $section8_box4_include_link && '' === $section8_box4_button_title ) {
					// No link button so use image for link.
					if ( true === $section8_box4_use_image_font && '' !== $section8_box4_image_font ) {
						?>
						<div class="section8-graphic">
							<a class="section8-linked-fi" href="<?php echo esc_url( $section8_box4_button_link ); ?>" 
								title="<?php echo esc_attr( $section8_box4_title ); ?>">
								<i class="fa <?php echo esc_attr( $section8_box4_image_font ); ?>"></i>
							</a>
						</div>
						<?php
					} elseif ( '' !== $section8_box4_image ) {
						?>
						<div class="section8-graphic">
							<a class="section8-linked-image" href="<?php echo esc_url( $section8_box4_button_link ); ?>"
								title="<?php echo esc_attr( $section8_box4_title ); ?>">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img class="lazyload"
										src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section8_box4_image ); ?>"
										alt="<?php echo esc_attr( $section8_box4_title ); ?>" />
									<?php
								} else {
									?>
									<img src="<?php echo esc_url( $section8_box4_image ); ?>" alt="<?php echo esc_attr( $section8_box4_title ); ?>" />
									<?php
								}
								?>
								<div class="section8-image-overlay">
									<i class="fa fa-link"></i>
								</div>
							</a>
						</div>
						<?php
					}
				} else {
					// Put in the image with no link.
					if ( true === $section8_box4_use_image_font ) {
						?>
						<div class="section8-graphic">
							<i class="no-link fa <?php echo esc_attr( $section8_box4_image_font ); ?>"></i>
						</div>
						<?php
					} else {
						if ( '' !== $section8_box4_image ) {
							?>
							<div class="section8-graphic">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img class="lazyload no-link"
										src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section8_box4_image ); ?>"
										alt="<?php echo esc_attr( $section8_box4_title ); ?>" />
									<?php
								} else {
									?>
									<img class ="no-link" src="<?php echo esc_url( $section8_box4_image ); ?>" alt="<?php echo esc_attr( $section8_box4_title ); ?>" />
									<?php
								}
								?>
							</div>
							<?php
						}
					}
				}// End if().
				if ( '' !== $section8_box4_title ) {
					echo '<h4>' . esc_html( $section8_box4_title ) . '</h4>';
				}
				if ( '' !== $section8_box4_text ) {
					echo '<div class="servicebox-content">' . wp_kses_post( $section8_box4_text ) . '</div>';
				}
				if ( true === $section8_box4_include_link && '' !== $section8_box4_button_title ) {
					?>
					<div class="home-8-button">
						<a class="button1" href="<?php echo esc_url( $section8_box4_button_link ); ?>" title="<?php esc_attr_e( 'more', 'canuck' ); ?>">
							<?php echo wp_kses_post( $section8_box4_button_title ); ?></a>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
