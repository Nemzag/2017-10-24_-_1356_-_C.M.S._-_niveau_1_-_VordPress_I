<?php
/**
 * Template Part, masonry.sets up the masonry content for the masonrt custom template.
 *
 * @package   Canuck WordPress Theme
 * @copyright Copyright (C) 2017-2019  Kevin Archibald
 * @license   http://www.gnu.org/licenses/gpl-2.0.html
 * @author    Kevin Archibald <www.kevinsspace.ca/contact/>
 */

$include_pinterest_pinit = get_theme_mod( 'canuck_include_pinit' ) ? true : false;
$images                  = array();
$use_lazyload            = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
if ( ! post_password_required() ) {
	if ( have_posts() ) : while ( have_posts() ) : the_post();// phpcs:ignore
		$images = canuck_get_gallery_images();
		if ( '' !== trim( the_content() ) ) {
			?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="portfolio-post entry-content">
					<?php the_content( 'Read more' ); ?>
				</div>
			</div>
			<?php
		}
	endwhile;
	endif;
	?>
	<div class="masonry-gallery">
		<div class="masonry-grid-sizer"></div>
		<?php
		$count = 1;
		foreach ( $images as $image ) {
			$thumb     = wp_get_attachment_image_src( $image, 'large' );
			$image_url = $thumb[0];
			?>
			<div class="masonry-grid-item">
				<?php
				if ( true === $include_pinterest_pinit ) {
					?>
					<img data-pin-no-hover="true"
						src="<?php echo esc_url( $image_url ); ?>"
						alt="<?php echo esc_attr__( 'gallery image ', 'canuck' ) . $count;// phpcs:ignore ?>"
						title="<?php echo esc_attr__( 'Image #', 'canuck' ) . $count;// phpcs:ignore ?>" />
					<?php
				} else {
					?>
					<img src="<?php echo esc_url( $image_url ); ?>"
						alt="<?php echo esc_attr__( 'gallery image ', 'canuck' ) . $count;// phpcs:ignore ?>"
						title="<?php esc_attr__( 'Image #', 'canuck' ) . $count; ?>" />
					<?php
				}
				?>
				<span class="masonry-image-overlay">
					<span class="masonry-overlay-wrap">
						<span class="masonry-text">
							<?php
							if ( true === $include_pinterest_pinit ) {
								echo '<a href="https://www.pinterest.com/pin/create/button/" data-pin-round="true" data-pin-hover="false"  data-pin-media="' . esc_url( $image_url ) . '"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" alt="' . esc_attr__( 'Pinterest share image', 'canuck' ) . '" /></a>'; // phpcs:ignore
							}
							echo '&nbsp;&nbsp;#' . $count;// phpcs:ignore
							?>
						</span>
					</span>
				</span>
			</div>
			<?php
			$count++;
		}
		?>
	</div>
	<?php
}// End if().

