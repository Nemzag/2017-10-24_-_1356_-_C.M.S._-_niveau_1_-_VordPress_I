<?php
/**
 * Template Part, gallery feature for gallery post format
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $content_width;
$post_style   = esc_html( get_theme_mod( 'canuck_blog_style', 'top_feature' ) );
$images       = array();
$images       = canuck_get_gallery_images();
$auto         = intval( get_theme_mod( 'canuck_flex_gallery_auto', 0 ) );
$effect       = esc_html( get_theme_mod( 'canuck_flex_gallery_effect', 'fade' ) );
$pause        = intval( get_theme_mod( 'canuck_flex_gallery_pause', 5000 ) );
$trans_time   = intval( get_theme_mod( 'canuck_flex_gallery_trans', 600 ) );
$use_lazyload = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
if ( false !== $images ) {
	?>
	<div class="gallery-post-feature">
		<div id="flexgallery-carousel" class="flexslider carousel top">
			<ul class="slides">
				<?php
				// Set up the carousel.
				foreach ( $images as $image ) {
					?>
					<li>
						<?php
						if ( 'top_feature' === $post_style ) {
							$thumb = wp_get_attachment_image_src( $image, 'canuck_gallery_thumb' );
						} else {
							$thumb = wp_get_attachment_image_src( $image, 'canuck_gallery_thumb' );
						}
						$image_url = $thumb[0];
						// Set up the link.
						if ( true === $use_lazyload ) {
							?>
							<img class="lazyload"
								src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
								data-src="<?php echo esc_url( $image_url ); ?>"
								title="" alt="<?php esc_attr_e( 'flex thumb', 'canuck' ); ?>" />
							<?php
						} else {
							?>
							<img src="<?php echo esc_url( $image_url ); ?>" title="" alt="<?php esc_attr_e( 'flex thumb', 'canuck' ); ?>" />
							<?php
						}
						?>
					</li>
					<?php
				}
				?>
			</ul>
		</div>
		<div id="flexgallery-feature" class="flexslider"
			data-gallery_trans="<?php echo esc_attr( $trans_time ); ?>"
			data-gallery_pause="<?php echo esc_attr( $pause ); ?>"
			data-gallery_effect="<?php echo esc_attr( $effect ); ?>"
			data-gallery_auto="<?php echo esc_attr( $auto ); ?>">
			<ul class="slides">
				<?php
				// Get image data and set images to the same height.
				$imagedata  = array();
				$imagecount = 1;
				$minheight  = 1000;
				foreach ( $images as $image ) {
					$thumb                              = wp_get_attachment_image_src( $image, 'canuck_gallery' );
					$imagedata[ $imagecount ]['url']    = $thumb[0];
					$imagedata[ $imagecount ]['width']  = $thumb[1];
					$imagedata[ $imagecount ]['height'] = $thumb[2];
					if ( $thumb[2] < $minheight ) {
						$minheight = $thumb[2];
					}
					$imagecount++;
				}
				$count = count( $imagedata );
				for ( $i = 1; $i < $count + 1; $i++ ) {
					if ( $imagedata[ $i ]['height'] > $minheight ) {
						$imagedata[ $i ]['adjheight'] = intval( $minheight );
						$imagedata[ $i ]['adjwidth']  = $imagedata[ $i ]['width'] * $minheight / $imagedata[ $i ]['height'];
					} else {
						$imagedata[ $i ]['adjheight'] = intval( $imagedata[ $i ]['height'] );
						$imagedata[ $i ]['adjwidth']  = intval( $imagedata[ $i ]['width'] );
					}
				}
				for ( $i = 1; $i < $count + 1; $i++ ) {
					?>
					<li>
						<?php
						if ( true === $use_lazyload ) {
							?>
							<img class="lazyload" 
								data-src="<?php echo esc_url( $imagedata[ $i ]['url'] ); ?>"
								title="" alt="<?php esc_attr_e( 'flex feature', 'canuck' ); ?>"
								height="<?php echo intval( $imagedata[ $i ]['adjheight'] ); ?>"
								width="<?php echo intval( $imagedata[ $i ]['adjwidth'] ); ?>" />
							<?php
						} else {
							?>
							<img src="<?php echo esc_url( $imagedata[ $i ]['url'] ); ?>"
								title="" alt="<?php esc_attr_e( 'flex feature', 'canuck' ); ?>"
								height="<?php echo intval( $imagedata[ $i ]['adjheight'] ); ?>"
								width="<?php echo intval( $imagedata[ $i ]['adjwidth'] ); ?>" />
							<?php
						}
						?>
					</li>
					<?php
				}
				?>
			</ul>
		</div>	
	</div>
	<?php
} else {
	?>
	<div class="error">
		<h3><?php esc_html_e( 'Error: Unable to find a gallery?', 'canuck' ); ?></h3>
	</div>
	<?php
}// End if().
