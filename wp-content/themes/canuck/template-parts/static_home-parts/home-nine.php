<?php
/**
 * Canuck Home Page template part - layout option 9 - portfolio section
 *
 * This template part is called by template-home.php
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

// Get the options.
$section9_title              = stripslashes( get_theme_mod( 'canuck_section9_title', '' ) );
$section9_text               = stripslashes( get_theme_mod( 'canuck_section9_text', '' ) );
$section9_portfolio_category = get_theme_mod( 'canuck_section9_portfolio_category', '' );
$section9_portfolio_columns  = get_theme_mod( 'canuck_section9_portfolio_columns', '3' );
$sec9_bg_image               = get_theme_mod( 'canuck_section9_background_image', '' );
$sec9_use_parallax           = get_theme_mod( 'canuck_section9_use_parallax', false );
$include_pinterest_pinit     = get_theme_mod( 'canuck_include_pinit' ) ? true : false;
$use_lazyload                = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
if ( '' !== $sec9_bg_image ) {
	if ( true === $sec9_use_parallax ) {
		$string9 = ' class="home-9-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec9_bg_image ) . '" data-speed="0.3" data-bleed="20" style="background: transparent;"';
		// Workaround for overlays on parralax sections :(
		$home_final_setup = canuck_home_area_setup();
		foreach ( $home_final_setup as $area => $section ) {
			if ( '9' === $section ) {
				if ( 1 === $area ) {
					$string9a = ' style="margin: 0 0 -20px 0;"';
				} else {
					$previous_section      = $home_final_setup[ $area - 1 ];
					$prev_sec_use_parallax = get_theme_mod( 'canuck_section' . $previous_section . '_use_parallax', false );
					if ( true === $prev_sec_use_parallax ) {
						$string9a = ' style="margin: 20px 0 -20px 0;"';
					} else {
						$string9a = ' style="margin: 0 0 -20px 0;"';
					}
				}
			}
		}
	} elseif ( true === $use_lazyload ) {
		$string9  = ' class="home-9-wide lazyload" data-src="' . esc_url( $sec9_bg_image ) . '"';
		$string9a = '';
	} else {
		$string9  = ' class="home-9-wide" style="background-image: url( ' . esc_url( $sec9_bg_image ) . ' );"';
		$string9a = '';
	}
} else {
	$string9  = ' class="home-9-wide"';
	$string9a = '';
}
?>
<div <?php echo $string9;// phpcs:ignore ?>>
	<div class="home-9-wide-overlay"<?php echo $string9a;// phpcs:ignore ?>>
		<div class="home-9-wrap">
			<?php
			if ( '' !== $section9_title ) {
				echo '<div class="home-9-title">';
					echo '<h2>' . wp_kses_post( $section9_title ) . '</h2>';
				echo '</div>';
			}
			if ( '' !== $section9_text ) {
				echo '<div class="home-9-text">';
					echo '<p>' . wp_kses_post( $section9_text ) . '</p>';
				echo '</div>';
			}
			?>
			<div class="home-9-columns-<?php echo esc_attr( $section9_portfolio_columns ); ?>">
				<?php
				$category_id = get_cat_ID( esc_html( $section9_portfolio_category ) );
				global $post,$canuck_feature_pic_count;
				$args         = array(
					'category'    => $category_id,
					'numberposts' => 20,
				);
				$custom_posts = get_posts( $args );
				if ( false != $category_id && $custom_posts ) {// phpcs:ignore
					$canuck_feature_pic_count = 0;
					foreach ( $custom_posts as $post ) { // phpcs:ignore
						setup_postdata( $post );
						$link_to_post        = ( '' === get_post_meta( $post->ID, 'canuck_metabox_link_to_post', true ) ? false : true );
						$custom_feature_link = ( '' === get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) ? false : get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) );
						$image_url           = get_the_post_thumbnail_url( $post->ID, 'canuck_med15' );
						$image_caption       = get_post( get_post_thumbnail_id() )->post_excerpt;
						$image_desc          = get_post( get_post_thumbnail_id() )->post_content;
						if ( has_post_thumbnail() ) {
							$canuck_feature_pic_count ++;
							?>
							<div class="section9-portfolio-container">
								<?php
								// data-pin-no-hover is there for Pinerest, if used either in plugin or by theme.
								if ( true === $use_lazyload ) {
									?>
									<img data-pin-no-hover="true" class="lazyload"
										src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $image_url ); ?>"
										alt="<?php echo esc_attr( $image_caption ); ?>" />
									<?php
								} else {
									?>
									<img data-pin-no-hover="true" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_caption ); ?>"/>
									<?php
								}
								?>
								<div class="image-overlay">
									<div class="overlay-wrap">
										<span class="links">
											<?php
											if ( true === $include_pinterest_pinit ) {
												echo '<a href="https://www.pinterest.com/pin/create/button/" data-pin-round="true" data-pin-hover="false"  data-pin-media="' . esc_url( $image_url ) . '"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" alt="' . esc_attr__( 'Pinterest share image', 'canuck' ) . '" /></a>'; // phpcs:ignore
											}
											if ( false !== $custom_feature_link ) {
												echo '<a href="' . esc_url( $custom_feature_link ) . '" title="' . the_title_attribute( 'echo=0' ) . '" ><i class="fa fa-link"></i></a>';
											} elseif ( true === $link_to_post ) {
												echo '<a href="' . esc_url( get_the_permalink( $post->ID ) ) . '" title="' . the_title_attribute( 'echo=0' ) . '" ><i class="fa fa-link"></i></a>';
											}
											echo '<a href="' . esc_url( $image_url ) . '" ><i class="fa fa-image"></i></a>';
											?>
										</span>
										<span class="title">
											<?php
											echo wp_kses_post( $image_caption );
											?>
										</span>
										<div class="content">
											<?php
											echo wp_kses_post( $image_desc );
											?>
										</div>
									</div>
								</div>
							</div>
							<?php
						}// End if().
						if ( 3 === $section9_portfolio_columns ) {
							if ( is_int( ( $canuck_feature_pic_count ) / 3 ) ) {
								echo '<div class="clearfix"></div>';
							}
						} elseif ( 4 === $section9_portfolio_columns ) {
							if ( is_int( ( $canuck_feature_pic_count ) / 4 ) ) {
								echo '<div class="clearfix"></div>';
							}
						}
					}// End foreach().
				} else {
					?>
					<div class="error">
						<h3><?php esc_html_e( 'Error: There are no posts or category selected is wrong!', 'canuck' ); ?></h3>
					</div>
					<?php
				}// End if().
				if ( 0 === $canuck_feature_pic_count ) {
					?>
					<div class="error">
						<h3><?php esc_html_e( 'Error: There were no feature images found?', 'canuck' ); ?></h3>
					</div>
					<?php
				}
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</div>
