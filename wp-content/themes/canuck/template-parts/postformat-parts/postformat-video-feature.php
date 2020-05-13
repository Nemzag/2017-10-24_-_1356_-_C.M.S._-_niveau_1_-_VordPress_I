<?php
/**
 * Template Part, blog add the embeded video as a feature
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

$embed        = canuck_media_grabber();
$post_style   = esc_html( get_theme_mod( 'canuck_blog_style', 'top_feature' ) );
$use_lazyload = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
if ( '' !== $embed ) {
	?>
	<div class="video-post-feature">
		<?php
		if ( 'top_feature' !== $post_style && 'side_feature' !== $post_style ) {
			$background_image_url = get_template_directory_uri() . '/images/video.jpg';
			?>
			<img src="<?php echo esc_url( $background_image_url ); ?>" alt="<?php esc_attr_e( 'video background', 'canuck' ); ?>">
			<div class="video-post-feature-overlay">
				<div class="video-post-feature">
					<?php
					// escaping will break the echo
					echo $embed;// phpcs:ignore
					?>
				</div>
			</div>
			<?php
		} else {
			?>
			<div class="video-post-feature">
				<?php
				// escaping will break the echo
				echo $embed;// phpcs:ignore
				?>
			</div>
			<?php
		}
		?>
	</div>
	<?php
} else {
	?>
	<div class="video-post-feature">
		<?php
		$feature_image_url = get_template_directory_uri() . '/images/novideo.jpg';
		if ( true === $use_lazyload ) {
			?>
			<img class="lazyload"
				src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
				data-src="</php echo esc_url( $feature_image_url ); ?>"
				alt="<?php esc_attr_e( 'video background', 'canuck' ); ?>">
			<?php
		} else {
			?>
			<img src="</php echo esc_url( $feature_image_url ); ?>" alt="<?php esc_attr_e( 'video background', 'canuck' ); ?>">
			<?php
		}
		?>
	</div>
	<?php
}// End if().
