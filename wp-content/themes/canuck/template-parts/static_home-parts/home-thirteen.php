<?php
/**
 * Canuck Home Page template part - carousel slider
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $post;
$section13_title              = stripslashes( get_theme_mod( 'canuck_section13_title', '' ) );
$section13_text               = stripslashes( get_theme_mod( 'canuck_section13_text', '' ) );
$section13_portfolio_category = get_theme_mod( 'canuck_section13_portfolio_category', '' );
$section13_portfolio_columns  = get_theme_mod( 'canuck_section13_portfolio_columns', '3' );
$sec13_bg_image               = get_theme_mod( 'canuck_section13_background_image', '' );
$sec13_use_parallax           = get_theme_mod( 'canuck_section13_use_parallax', false );
$category_id                  = get_cat_ID( $section13_portfolio_category );
$args                         = array(
	'category'    => $category_id,
	'numberposts' => 20,
);
$custom_posts                 = get_posts( $args );
$use_lazyload                 = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
if ( '' !== $sec13_bg_image ) {
	if ( true === $sec13_use_parallax ) {
		$string13 = ' class="home-13-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec13_bg_image ) . '" data-speed="0.3" data-bleed="20" style="background: transparent;"';
		// Workaround for overlays on parralax sections :(
		$home_final_setup = canuck_home_area_setup();
		foreach ( $home_final_setup as $area => $section ) {
			if ( '13' === $section ) {
				if ( 1 === $area ) {
					$string13a = ' style="margin: 0 0 -20px 0;"';
				} else {
					$previous_section      = $home_final_setup[ $area - 1 ];
					$prev_sec_use_parallax = get_theme_mod( 'canuck_section' . $previous_section . '_use_parallax', false );
					if ( true === $prev_sec_use_parallax ) {
						$string13a = ' style="margin: 20px 0 -20px 0;"';
					} else {
						$string13a = ' style="margin: 0 0 -20px 0;"';
					}
				}
			}
		}
	} elseif ( true === $use_lazyload ) {
		$string13  = ' class="home-13-wide lazyload" data-src="' . esc_url( $sec13_bg_image ) . '"';
		$string13a = '';
	} else {
		$string13  = ' class="home-13-wide" style="background-image: url( ' . esc_url( $sec13_bg_image ) . ' );"';
		$string13a = '';
	}
} else {
	$string13  = ' class="home-13-wide"';
	$string13a = '';
}
?>
<div <?php echo $string13;// phpcs:ignore ?>>
	<div class="home-13-wide-overlay"<?php echo $string13a;// phpcs:ignore ?>>
		<div class="home-13-wrap">
			<?php
			// Title.
			if ( '' !== $section13_title ) {
				?>
				<div class="home-13-title">
					<h2><?php echo wp_kses_post( $section13_title ); ?></h2>
				</div>
				<?php
			}
			// Description.
			if ( '' !== $section13_text ) {
				?>
				<div class="home-13-text">
					<p><?php echo wp_kses_post( $section13_text ); ?></p>
				</div>
				<?php
			}
			// Carousel.
			if ( '' !== $section13_portfolio_category && false !== $custom_posts ) {
				?>
				<div id="home-13-carousel" class="owl-carousel home-13">
					<?php
					$canuck_feature_pic_count = 0;
					foreach ( $custom_posts as $post ) { // phpcs:ignore
						setup_postdata( $post );
						$link_to_post        = ( '' === get_post_meta( $post->ID, 'canuck_metabox_link_to_post', true ) ? false : true );
						$custom_feature_link = ( '' === get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) ? false : get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) );
						if ( has_post_thumbnail() ) {
							$canuck_feature_pic_count ++;
							$image_url = get_the_post_thumbnail_url( $post->ID, 'canuck_small15' );
							?>
							<div class="owl-item-wrap">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img class="owl-lazy"
									data-src="<?php echo esc_url( $image_url ); ?>"
									alt="<?php esc_attr_e( 'small carousel image', 'canuck' ); ?>" />
									<?php
								} else {
									?>
									<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php esc_attr_e( 'small carousel image', 'canuck' ); ?>" />
									<?php
								}
								if ( $link_to_post || false !== $custom_feature_link ) {
									?>
									<span class="image-overlay">
										<span class="overlay-wrap">
											<span class="links">
												<?php
												if ( false !== $custom_feature_link ) {
													echo '<a href="' . esc_url( $custom_feature_link ) . '" title="' . the_title_attribute( 'echo=0' ) . '" ><i class="fa fa-link"></i></a>';
												} elseif ( true === $link_to_post ) {
													echo '<a href="' . esc_url( get_the_permalink() ) . '" title="' . the_title_attribute( 'echo=0' ) . '" ><i class="fa fa-link"></i></a>';
												}
												?>
											</span>
										</span>
									</span>
									<?php
								}
								?>
							</div>
							<?php
						}
					}
					?>
				</div>
				<?php
			} else {
				?>
				<div class="error">
					<?php
					esc_html_e( 'You have not set up your Feature posts so I can not find any images - see user documentation.', 'canuck' );
					?>
				</div>
				<?php
			}// End if().
			if ( ! isset( $canuck_feature_pic_count ) || 0 === $canuck_feature_pic_count ) {
				?>
				<div class="error">
					<h3><?php esc_html_e( 'Error: There were no feature images found?', 'canuck' ); ?></h3>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>
<?php
wp_reset_postdata();

