<?php
/**
 * Canuck Home Page template part - full slider - carousel navigation
 *
 * This template part is called by canuck_home_feature_options()
 * located in canuck-custom-functions.php
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $post, $canuck_feature_category;
$canuck_flex_effect = sanitize_text_field( get_theme_mod( 'canuck_flex_slider_effect', 'fade' ) );
$canuck_flex_pause  = sanitize_text_field( get_theme_mod( 'canuck_flex_slider_pause', '5000' ) );
$canuck_flex_trans  = sanitize_text_field( get_theme_mod( 'canuck_flex_slider_trans', '600' ) );
$canuck_flex_auto   = intval( get_theme_mod( 'canuck_flex_slider_auto', 1 ) );
$category_id        = get_cat_ID( $canuck_feature_category );
$args               = array(
	'category'    => $category_id,
	'numberposts' => 20,
);
$custom_posts       = get_posts( $args );
$use_lazyload       = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
if ( 0 !== $category_id && $custom_posts ) {
	?>
	<div class="flexslider-wrapper">
		<img class="carousel-nav-place-holder" style="width:100%;height:auto;" alt="<?php esc_attr_e( 'placeholder', 'canuck' ); ?>" src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>" />
		<div id="flexslider-carousel" class="flexslider top">
			<ul class="slides">
				<?php
				$canuck_feature_pic_count = 0;
				foreach ( $custom_posts as $post ) { // phpcs:ignore
					setup_postdata( $post );
					if ( has_post_thumbnail() ) {
						$canuck_feature_pic_count ++;
						?>
						<li>
							<?php
							$thumb     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'canuck_gallery_thumb' );
							$image_url = $thumb[0];
							?>
							<img src="<?php echo esc_url( $image_url ); ?>" title="<?php esc_attr_e( 'flex thumb', 'canuck' ); ?>" alt="<?php esc_attr_e( 'flex thumb', 'canuck' ); ?>" />
						</li>
						<?php
					}
				}
				?>
			</ul>
		</div>
		<div id="flexslider-feature" class="flexslider bottom"
				data-flex_trans="<?php echo esc_attr( $canuck_flex_trans ); ?>"
				data-flex_pause="<?php echo esc_attr( $canuck_flex_pause ); ?>"
				data-flex_effect="<?php echo esc_attr( $canuck_flex_effect ); ?>"
				data-flex_auto="<?php echo esc_attr( $canuck_flex_auto ); ?>">
			<ul class="slides">
				<?php
				$canuck_feature_pic_count = 0;
				foreach ( $custom_posts as $post ) { // phpcs:ignore
					setup_postdata( $post );
					$link_to_post          = ( '' === get_post_meta( $post->ID, 'canuck_metabox_link_to_post', true ) ? false : true );
					$link_to_image         = ( '' === get_post_meta( $post->ID, 'canuck_metabox_link_to_image', true ) ? false : true );
					$custom_feature_link   = ( '' === get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) ? false : get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) );
					$include_feature_title = ( '' === get_post_meta( $post->ID, 'canuck_metabox_include_feature_title', true ) ? false : true );
					if ( has_post_thumbnail() ) {
						$canuck_feature_pic_count ++;
						?>
						<li>
							<?php
							$thumb                = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'canuck_med15' );
							$image_url            = $thumb[0];
							$canuck_feature_title = false === $include_feature_title ? get_post( get_post_thumbnail_id() )->post_excerpt : the_title_attribute( 'echo=0' );
							if ( '' === $canuck_feature_title ) {
								$imagetitle = '';
								$imagealt   = esc_html__( 'flexslider image', 'canuck' );
							} else {
								$imagetitle = $canuck_feature_title;
								$imagealt   = $canuck_feature_title;
							}
							// Set up the link and image.
							if ( 1 === $canuck_feature_pic_count ) {
								if ( true === $link_to_post ) {
									?>
									<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute( 'echo=0' ); ?>">
										<img src="<?php echo esc_url( $image_url ); ?>"
											title="<?php echo esc_attr( $imagetitle ); ?>" alt="<?php echo esc_attr( $imagealt ); ?>" />
									</a>
									<?php
								} elseif ( false !== $custom_feature_link ) {
									?>
									<a href="<?php echo esc_url( $custom_feature_link ); ?>" title="<?php echo the_title_attribute( 'echo=0' ); ?>">
										<img src="<?php echo esc_url( $image_url ); ?>"
											title="<?php echo esc_attr( $imagetitle ); ?>" alt="<?php echo esc_attr( $imagealt ); ?>" />
									</a>
									<?php
								} else {
									?>
									<img src="<?php echo esc_url( $image_url ); ?>"
										title="<?php echo esc_attr( $imagetitle ); ?>" alt="<?php echo esc_attr( $canuck_feature_title ); ?>" />
									<?php
								}
							} else {
								if ( true === $link_to_post ) {
									?>
									<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute( 'echo=0' ); ?>">
										<img class="canuck-flex-lazy"
											src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
											data-src="<?php echo esc_url( $image_url ); ?>"
											title="<?php echo esc_attr( $imagetitle ); ?>" alt="<?php echo esc_attr( $imagealt ); ?>" />
									</a>
									<?php
								} elseif ( false !== $custom_feature_link ) {
									?>
									<a href="<?php echo esc_url( $custom_feature_link ); ?>" title="<?php echo the_title_attribute( 'echo=0' ); ?>">
										<img class="canuck-flex-lazy"
											src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
											data-src="<?php echo esc_url( $image_url ); ?>"
											title="<?php echo esc_attr( $imagetitle ); ?>" alt="<?php echo esc_attr( $imagealt ); ?>" />
									</a>
									<?php
								} else {
									?>
									<img class="canuck-flex-lazy"
										src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $image_url ); ?>"
										title="<?php echo esc_attr( $imagetitle ); ?>" alt="<?php echo esc_attr( $canuck_feature_title ); ?>" />
									<?php
								}
							}
							if ( true === $include_feature_title ) {
								if ( '' !== $canuck_feature_title ) {
									echo '<p class="flex-caption">' . wp_kses_post( $canuck_feature_title ) . '</p>';
								}
							}
							?>
						</li>
						<?php
					}
				}// End foreach.
				?>
			</ul>
		</div>
	</div>
	<?php
} else {
	?>
	<div class="error"><?php esc_html_e( 'You have not set up your Feature posts so I can not find any images - see user documentation.', 'canuck' ); ?></div>
	<?php
}// End if.
if ( 0 === $canuck_feature_pic_count ) {
	?>
		<div class="error">
			<h3><?php esc_html_e( 'Error: There were no feature images found for your slider. Did you select the correct category?', 'canuck' ); ?></h3>
		</div>
	<?php
}
wp_reset_postdata();

