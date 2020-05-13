<?php
/**
 * Canuck Portfolio Four Column template part
 *
 * This template part is called by template-portfolio-side.php or template-portfolio.php
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $post,$canuck_feature_pic_count;
$category                   = esc_html( ( '' === get_post_meta( $post->ID, 'canuck_portfolio_category', true ) ? false : get_post_meta( $post->ID, 'canuck_portfolio_category', true ) ) );
$display_post_content       = ( ( '' === get_post_meta( $post->ID, 'canuck_metabox_include_post_content', true ) ? false : true ) );
$display_post_content_title = ( ( '' === get_post_meta( $post->ID, 'canuck_metabox_include_post_content_title', true ) ? false : true ) );
$display_image_caption      = ( ( '' === get_post_meta( $post->ID, 'canuck_metabox_include_image_caption', true ) ? false : true ) );
$display_image_description  = ( ( '' === get_post_meta( $post->ID, 'canuck_metabox_include_image_description', true ) ? false : true ) );
$canuck_portfolio_type      = sanitize_text_field( ( '' === get_post_meta( $post->ID, 'canuck_portfolio_type', true ) ? 'grid3' : get_post_meta( $post->ID, 'canuck_portfolio_type', true ) ) );
$include_pinterest_pinit    = get_theme_mod( 'canuck_include_pinit' ) ? true : false;
$category_id                = get_cat_ID( $category );
$args                       = array(
	'category'    => $category_id,
	'numberposts' => 20,
);
$custom_posts               = get_posts( $args );
$use_lazyload               = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
if ( 0 !== $category_id && $custom_posts ) {
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
			<div class="portfolio-container">
				<?php
				if ( true === $include_pinterest_pinit ) {
					if ( true === $use_lazyload ) {
						?>
						<img class="lazyload" data-pin-no-hover="true"
							src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
							data-src="<?php echo esc_url( $image_url ); ?>"
							alt="<?php echo esc_attr( $image_caption ); ?>"/>
						<?php
					} else {
						?>
						<img data-pin-no-hover="true" 
							src="<?php echo esc_url( $image_url ); ?>"
							alt="<?php echo esc_attr( $image_caption ); ?>"/>
						<?php
					}
				} else {
					if ( true === $use_lazyload ) {
						?>
						<img class="lazyload" data-pin-no-hover="true"
							src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
							data-src="<?php echo esc_url( $image_url ); ?>"
							alt="<?php echo esc_attr( $image_caption ); ?>"/>
						<?php
					} else {
						?>
						<img data-pin-no-hover="true"
							src="<?php echo esc_url( $image_url ); ?>"
							alt="<?php echo esc_attr( $image_caption ); ?>"/>
						<?php
					}
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
								echo '<a href="' . esc_url( get_the_permalink() ) . '" title="' . the_title_attribute( 'echo=0' ) . '" ><i class="fa fa-link"></i></a>';
							}
							?>
							<a href="<?php echo esc_url( $image_url ); ?>" title="<?php the_title_attribute( 'echo=1' ); ?>" ><i class="fa fa-image"></i></a>
						</span>
						<span class="title"><?php echo wp_kses_post( $image_caption ); ?></span>
						<div class="content"><?php echo wp_kses_post( $image_desc ); ?></div>
					</div>
				</div>
			</div>
			<?php
		}
		if ( 'grid2' === $canuck_portfolio_type ) {
			if ( is_int( ( $canuck_feature_pic_count ) / 2 ) ) {
				echo '<div class="clearfix"></div>';
			}
		} elseif ( 'grid3' === $canuck_portfolio_type ) {
			if ( is_int( ( $canuck_feature_pic_count ) / 3 ) ) {
				echo '<div class="clearfix"></div>';
			}
		} elseif ( 'grid4' === $canuck_portfolio_type ) {
			if ( is_int( ( $canuck_feature_pic_count ) / 4 ) ) {
				echo '<div class="clearfix"></div>';
			}
		} elseif ( 'grid5' === $canuck_portfolio_type ) {
			if ( is_int( ( $canuck_feature_pic_count ) / 5 ) ) {
				echo '<div class="clearfix"></div>';
			}
		}
	}// End foreach().
} else {
	?>
	<div class="portfolio_error">
		<h3><?php esc_html_e( 'Error: no posts or category selected is wrong!', 'canuck' ); ?></h3>
	</div>
	<?php
}// End if().
if ( 0 === $canuck_feature_pic_count ) {
	?>
	<div class="portfolio_error">
		<h3><?php esc_html_e( 'Error: There were no feature images found?', 'canuck' ); ?></h3>
	</div>
	<?php
}
wp_reset_postdata();

