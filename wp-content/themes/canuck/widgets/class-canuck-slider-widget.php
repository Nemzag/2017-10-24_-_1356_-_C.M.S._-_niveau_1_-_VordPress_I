<?php
/**
 * Plugin Name: Canuck Slider Widget
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 *
 * @wordpress-plugin
 * Plugin Name: Canuck Author Widget
 * Plugin URI: http://kevinsspace.ca/canuckdemo/
 * Description: A widget for the Canuck Theme that displays a flex slider.
 * Version: 1.2.6
 * Author: Kevin Archibald
 * Author URI: http://kevinsspace.ca/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Use widgets_init action hook to execute custom function.
add_action( 'widgets_init', 'canuck_slider_register_widget' );

/**
 * Register our widget.
 */
function canuck_slider_register_widget() {
	register_widget( 'Canuck_Slider_Widget' );
}

/**
 * Widget Class
 */
class Canuck_Slider_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc.
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'   => 'canuck_slider_widget_class',
			'description' => esc_html__( 'Display slider of featured images', 'canuck' ),
		);
		parent::__construct( 'canuck_slider_widget', esc_html__( 'Canuck Slider Widget', 'canuck' ), $widget_ops );
	}
	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options.
	 */
	public function form( $instance ) {
		$canuck_slider_defaults = array(
			'canuck_slider_title'        => esc_html__( 'Canuck Flex Slider', 'canuck' ),
			'canuck_slider_type'         => 'button nav', // phpcs:ignore
			'canuck_slider_category'     => esc_html__( 'feature 1', 'canuck' ),
			'canuck_slider_animation'    => 'fade',
			'canuck_slider_pause'        => '6000',
			'canuck_slider_transition'   => '500',
			'canuck_slider_auto'         => true,
			'canuck_include_post_titles' => false,
		);
		$instance               = wp_parse_args( (array) $instance, $canuck_slider_defaults );
		$title                  = $instance['canuck_slider_title'];
		$slider_type            = $instance['canuck_slider_type'];
		$slider_category        = $instance['canuck_slider_category'];
		$slider_animation       = $instance['canuck_slider_animation'];
		$slider_pause           = $instance['canuck_slider_pause'];
		$slider_transition      = $instance['canuck_slider_transition'];
		$slider_auto            = $instance['canuck_slider_auto'] ? true : false;
		$include_post_titles    = $instance['canuck_include_post_titles'] ? true : false;
		?>
		<p>
			<?php
			esc_html_e( 'Title : ', 'canuck' );
			?>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'canuck_slider_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'canuck_slider_title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		</p>
			<?php esc_html_e( 'Note: Animation, Slide Pause, and Slide Transition options are not used for Type: carousel slider.', 'canuck' ); ?>
		</p>
		<p>
			<?php
			esc_html_e( 'Type : ', 'canuck' );
			?>
			<select name="<?php echo esc_attr( $this->get_field_name( 'canuck_slider_type' ) ); ?>">
				<option value="no_nav" <?php selected( $slider_type, 'no_nav' ); ?>><?php esc_html_e( 'no nav', 'canuck' ); ?></option>
				<option value="button_nav" <?php selected( $slider_type, 'button_nav' ); ?>><?php esc_html_e( 'button nav', 'canuck' ); ?></option>
				<option value="carousel_top" <?php selected( $slider_type, 'carousel_top' ); ?>><?php esc_html_e( 'carousel nav top', 'canuck' ); ?></option>
				<option value="carousel_bot" <?php selected( $slider_type, 'carousel_bot' ); ?>><?php esc_html_e( 'carousel nav bottom', 'canuck' ); ?></option>
				<option value="carousel" <?php selected( $slider_type, 'carousel' ); ?>><?php esc_html_e( 'carousel slider', 'canuck' ); ?></option>
			</select> 
		</p>
		<p>
			<?php
			esc_html_e( 'Category : ', 'canuck' );
			?>
			<select name="<?php echo esc_attr( $this->get_field_name( 'canuck_slider_category' ) ); ?>">
				<?php
				$category_list = get_categories();
				foreach ( $category_list as $category ) {
					echo '<option value="' . esc_attr( $category->name ) . '" ' . selected( $slider_category, esc_attr( $category->name ) ) . '>' . esc_html( $category->name ) . ' </option>';
				}
				?>
			</select>
		</p>
		<p>
			<?php
			esc_html_e( 'Animation : ', 'canuck' );
			?>
			<select name="<?php echo esc_attr( $this->get_field_name( 'canuck_slider_animation' ) ); ?>">
				<option value="fade" <?php selected( $slider_animation, 'fade' ); ?>><?php esc_html_e( 'fade', 'canuck' ); ?></option>
				<option value="slide" <?php selected( $slider_animation, 'slide' ); ?>><?php esc_html_e( 'slide', 'canuck' ); ?></option>
			</select> 
		</p>
		<p>
			<?php
			esc_html_e( 'Slide Pause - milliseconds : ', 'canuck' );
			?>
			<select name="<?php echo esc_attr( $this->get_field_name( 'canuck_slider_pause' ) ); ?>">
				<option value="4000" <?php selected( $slider_pause, '4000' ); ?>>4000</option>
				<option value="5000" <?php selected( $slider_pause, '5000' ); ?>>5000</option>
				<option value="6000" <?php selected( $slider_pause, '6000' ); ?>>6000</option>
				<option value="7000" <?php selected( $slider_pause, '7000' ); ?>>7000</option>
				<option value="8000" <?php selected( $slider_pause, '8000' ); ?>>8000</option>
				<option value="9000" <?php selected( $slider_pause, '9000' ); ?>>9000</option>
				<option value="10000" <?php selected( $slider_pause, '10000' ); ?>>10000</option>
				<option value="11000" <?php selected( $slider_pause, '11000' ); ?>>11000</option>
				<option value="12000" <?php selected( $slider_pause, '12000' ); ?>>12000</option>
			</select> 
		</p>
		<p>
			<?php
			esc_html_e( 'Slide Transition - milliseconds : ', 'canuck' );
			?>
			<select name="<?php echo esc_attr( $this->get_field_name( 'canuck_slider_transition' ) ); ?>">
				<option value="500" <?php selected( $slider_transition, '500' ); ?>>500</option>
				<option value="750" <?php selected( $slider_transition, '750' ); ?>>750</option>
				<option value="1000" <?php selected( $slider_transition, '1000' ); ?>>1000</option>
				<option value="1250" <?php selected( $slider_transition, '1250' ); ?>>1250</option>
				<option value="1500" <?php selected( $slider_transition, '1500' ); ?>>1500</option>
				<option value="1750" <?php selected( $slider_transition, '1750' ); ?>>1750</option>
				<option value="2000" <?php selected( $slider_transition, '2000' ); ?>>2000</option>
			</select> 
		</p>
		<p>
			<?php
			esc_html_e( 'Display Post Titles', 'canuck' );
			?>
			<input name="<?php echo esc_attr( $this->get_field_name( 'canuck_include_post_titles' ) ); ?>" type="checkbox" value="true" <?php echo ( true === $include_post_titles ? 'checked="checked"' : '' ); ?> />
		</p>
		<p>
			<?php
			esc_html_e( 'Auto Start Slider', 'canuck' );
			?>
			<input name="<?php echo esc_attr( $this->get_field_name( 'canuck_slider_auto' ) ); ?>" type="checkbox" value="true" <?php echo ( true === $slider_auto ? 'checked="checked"' : '' ); ?> />
		</p>
		<?php
	}
	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options.
	 * @param array $old_instance The previous options.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance                               = $old_instance;
		$instance['canuck_slider_title']        = sanitize_text_field( $new_instance['canuck_slider_title'] );
		$instance['canuck_slider_type']         = sanitize_text_field( $new_instance['canuck_slider_type'] );
		$instance['canuck_slider_category']     = sanitize_text_field( $new_instance['canuck_slider_category'] );
		$instance['canuck_slider_animation']    = sanitize_text_field( $new_instance['canuck_slider_animation'] );
		$instance['canuck_slider_pause']        = sanitize_text_field( $new_instance['canuck_slider_pause'] );
		$instance['canuck_slider_transition']   = sanitize_text_field( $new_instance['canuck_slider_transition'] );
		$instance['canuck_include_post_titles'] = isset( $new_instance['canuck_include_post_titles'] ) ? true : false;
		$instance['canuck_slider_auto']         = isset( $new_instance['canuck_slider_auto'] ) ? true : false;
		return $instance;
	}
	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args Arguments for widget.
	 * @param array $instance Instance.
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', empty( $instance['canuck_slider_title'] ) ? '' : $instance['canuck_slider_title'], $instance, $this->id_base );
		isset( $instance['canuck_slider_type'] ) ? $slider_type = $instance['canuck_slider_type'] : $slider_type = 'button_nav';
		isset( $instance['canuck_slider_category'] ) ? $slider_category = $instance['canuck_slider_category'] : $slider_category = esc_html__( 'feature 1', 'canuck' );
		isset( $instance['canuck_slider_animation'] ) ? $slider_animation = $instance['canuck_slider_animation'] : $slider_animation = 'fade';
		isset( $instance['canuck_slider_pause'] ) ? $slider_pause = $instance['canuck_slider_pause'] : $slider_pause = '6000';
		isset( $instance['canuck_slider_transition'] ) ? $slider_transition = $instance['canuck_slider_transition'] : $slider_transition = '500';
		$include_post_titles = isset( $instance['canuck_include_post_titles'] ) ? true : false;
		$slider_auto         = isset( $instance['canuck_slider_auto'] ) ? $instance['canuck_slider_auto'] : true;
		echo $args['before_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
		if ( 'button_nav' === $slider_type ) {
			canuck_widget_slider_button_nav( $slider_category, $slider_animation, $slider_pause, $slider_transition, $include_post_titles, $slider_auto );
		} elseif ( 'carousel_top' === $slider_type ) {
			canuck_widget_slider_carousel_top_nav( $slider_category, $slider_animation, $slider_pause, $slider_transition, $include_post_titles, $slider_auto );
		} elseif ( 'carousel_bot' === $slider_type ) {
			canuck_widget_slider_carousel_bot_nav( $slider_category, $slider_animation, $slider_pause, $slider_transition, $include_post_titles, $slider_auto );
		} elseif ( 'carousel' === $slider_type ) {
			canuck_widget_slider_carousel( $slider_category, $slider_animation, $slider_pause, $slider_transition, $include_post_titles, $slider_auto );
		} else {
			// Default to no nav.
			canuck_widget_slider_no_nav( $slider_category, $slider_animation, $slider_pause, $slider_transition, $include_post_titles, $slider_auto );
		}
		echo $args['after_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

}

/**
 * Flex Slider Directional Nav Only
 *
 * @param string  $slider_category is the category to get feature images from.
 * @param string  $slider_animation is the slider animation slide or fade.
 * @param string  $slider_pause time in miliseconds before slide change starts.
 * @param string  $slider_transition is the time in miliseconds for the slide to change.
 * @param boolean $include_post_titles will include post title as a caption if checked.
 * @param boolean $slider_auto will auto start the slider if checked.
 */
function canuck_widget_slider_no_nav( $slider_category, $slider_animation, $slider_pause, $slider_transition, $include_post_titles, $slider_auto ) {
	global $canuck_feature_category, $post;
	$include_pinterest_pinit  = get_theme_mod( 'canuck_include_pinit' ) ? true : false;
	$add_nopin                = ( true === $include_pinterest_pinit ) ? 'data-pin-no-hover="true" ' : '';
	$category_id              = get_cat_ID( $slider_category );
	$args                     = array(
		'category'    => $category_id,
		'numberposts' => 20,
	);
	$custom_posts             = get_posts( $args );
	$canuck_feature_pic_count = 0;
	if ( 0 !== $category_id && $custom_posts ) {
		?>
		<div class="flexslider-wrapper">
			<div id="widget-flex-slider-no-nav" class="flexslider widget feature bottom" data-flex_trans="<?php echo esc_attr( $slider_transition ); ?>" data-flex_pause="<?php echo esc_attr( $slider_pause ); ?>" data-flex_effect="<?php echo esc_attr( $slider_animation ); ?>" data-flex_auto="<?php echo esc_attr( $slider_auto ); ?>">
				<ul class="slides">
					<?php
					foreach ( $custom_posts as $post ) { // phpcs:ignore
						setup_postdata( $post );
						$link_to_post        = ( '' === get_post_meta( $post->ID, 'canuck_metabox_link_to_post', true ) ? false : true );
						$custom_feature_link = ( '' === get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) ? false : get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) );
						if ( has_post_thumbnail() ) {
							$canuck_feature_pic_count ++;
							?>
							<li>
								<?php
								$thumb     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'canuck_med15' );
								$image_url = $thumb[0];
								$title     = the_title_attribute( 'echo=0' );
								if ( '' === $title ) {
									$imagetitle = '';
									$imagealt   = esc_html__( 'flexslider image', 'canuck' );
								} else {
									$imagetitle = $title;
									$imagealt   = $title;
								}
								if ( true === $link_to_post ) {
									echo '<a href="' . esc_url( get_permalink() ) . '" title="' . the_title_attribute( 'echo=0' ) . '"><img ' . $add_nopin . 'src="' . esc_url( $image_url ) . '" title="' . esc_attr( $imagetitle ) . '" alt="' . esc_attr( $imagealt ) . '" /></a>';// phpcs:ignore
								} elseif ( false !== $custom_feature_link ) {
									echo '<a href="' . esc_url( $custom_feature_link ) . '" title="' . the_title_attribute( 'echo=0' ) . '"><img ' . $add_nopin . 'src="' . esc_url( $image_url ) . '" title="' . esc_attr( $imagetitle ) . '" alt="' . esc_attr( $imagealt ) . '" /></a>';// phpcs:ignore
								} else {
									echo '<img ' . $add_nopin . 'src="' . esc_url( $image_url ) . '" title="' . esc_attr( $imagetitle ) . '" alt="' . esc_attr( $title ) . '" />';// phpcs:ignore
								}
								if ( true === $include_post_titles ) {
									if ( '' !== $title ) {
										echo '<p class="flex-caption">' . wp_kses_post( $title ) . '</p>';
									}
								}
								if ( true === $include_pinterest_pinit ) {
									echo '<a href="https://www.pinterest.com/pin/create/button/" data-pin-round="true" data-pin-hover="false"  data-pin-media="' . esc_url( $image_url ) . '"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" alt="' . esc_attr__( 'Pinterest share image', 'canuck' ) . '" /></a>'; // phpcs:ignore
								}
								?>
							</li>
							<?php
						}// End if().
					}// End foreach().
					?>
				</ul>
			</div>
		</div>
		<?php
	} else {
		?>
		<div class="error" style="text-align: left;">
			<?php
			esc_html_e( 'You have not set up your Feature posts so I can not find any images.', 'canuck' );
			?>
			<ol>
				<li style="list-style: decimal;"><?php esc_html_e( 'Create a specific category such as "feature 1" to use for your feature posts.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Add a new post using the created category and insert the featured image.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Tip: Images can be linked to the post, image file, or a custom link.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Repeat for new images.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Select the category from the drop down when you set up the widget', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Tip: Make sure the images are exactly the same width and height.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Tip: Ideal image width is 840px.', 'canuck' ); ?></li>
			</ol>
		</div>
		<?php
	}// End if().
	if ( 0 === $canuck_feature_pic_count ) {
		?>
		<div class="error">
			<?php
			esc_html_e( 'There were no feature images found, did you select the correct category?', 'canuck' );
			?>
		</div>
		<?php
	}
	wp_reset_postdata();
}
/**
 * Flex Slider with button Navigation.
 *
 * @param string  $slider_category is the category to get feature images from.
 * @param string  $slider_animation is the slider animation slide or fade.
 * @param string  $slider_pause time in miliseconds before slide change starts.
 * @param string  $slider_transition is the time in miliseconds for the slide to change.
 * @param boolean $include_post_titles will include post title as a caption if checked.
 * @param boolean $slider_auto will auto start the slider if checked.
 */
function canuck_widget_slider_button_nav( $slider_category, $slider_animation, $slider_pause, $slider_transition, $include_post_titles, $slider_auto ) {
	global $canuck_feature_category, $post;
	$include_pinterest_pinit  = get_theme_mod( 'canuck_include_pinit' ) ? true : false;
	$add_nopin                = ( true === $include_pinterest_pinit ) ? 'data-pin-no-hover="true" ' : '';
	$category_id              = get_cat_ID( $slider_category );
	$args                     = array(
		'category'    => $category_id,
		'numberposts' => 20,
	);
	$custom_posts             = get_posts( $args );
	$canuck_feature_pic_count = 0;
	if ( 0 !== $category_id && $custom_posts ) {
		?>
		<div class="flexslider-wrapper">
			<div id="widget-flex-slider-button" class="flexslider widget feature button" data-flex_trans="<?php echo esc_attr( $slider_transition ); ?>" data-flex_pause="<?php echo esc_attr( $slider_pause ); ?>" data-flex_effect="<?php echo esc_attr( $slider_animation ); ?>" data-flex_auto="<?php echo esc_attr( $slider_auto ); ?>">
				<ul class="slides">
					<?php
					foreach ( $custom_posts as $post ) { // phpcs:ignore
						setup_postdata( $post );
						$link_to_post        = ( '' === get_post_meta( $post->ID, 'canuck_metabox_link_to_post', true ) ? false : true );
						$custom_feature_link = ( '' === get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) ? false : get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) );
						if ( has_post_thumbnail() ) {
							$canuck_feature_pic_count ++;
							?>
							<li>
								<?php
								$thumb     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'canuck_med15' );
								$image_url = $thumb[0];
								$title     = the_title_attribute( 'echo=0' );
								if ( '' === $title ) {
									$imagetitle = '';
									$imagealt   = 'flexslider image';
								} else {
									$imagetitle = $title;
									$imagealt   = $title;
								}
								if ( true === $link_to_post ) {
									echo '<a href="' . esc_url( get_permalink() ) . '" title="' . the_title_attribute( 'echo=0' ) . '"><img ' . $add_nopin . 'src="' . esc_url( $image_url ) . '" title="' . esc_attr( $imagetitle ) . '" alt="' . esc_attr( $imagealt ) . '" /></a>';// phpcs:ignore
								} elseif ( false !== $custom_feature_link ) {
									echo '<a href="' . esc_url( $custom_feature_link ) . '" title="' . the_title_attribute( 'echo=0' ) . '"><img ' . $add_nopin . 'src="' . esc_url( $image_url ) . '" title="' . esc_attr( $imagetitle ) . '" alt="' . esc_attr( $imagealt ) . '" /></a>';// phpcs:ignore
								} else {
									echo '<img ' . $add_nopin . 'src="' . esc_url( $image_url ) . '" title="' . esc_attr( $imagetitle ) . '" alt="' . esc_attr( $title ) . '" />';// phpcs:ignore
								}
								if ( true === $include_post_titles ) {
									if ( '' !== $title ) {
										echo '<p class="flex-caption">' . wp_kses_post( $title ) . '</p>';
									}
								}
								if ( true === $include_pinterest_pinit ) {
									echo '<a href="https://www.pinterest.com/pin/create/button/" data-pin-round="true" data-pin-hover="false"  data-pin-media="' . esc_url( $image_url ) . '"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" alt="' . esc_attr__( 'Pinterest share image', 'canuck' ) . '" /></a>'; // phpcs:ignore
								}
								?>
							</li>
							<?php
						}
					}// End foreach().
					?>
				</ul>
			</div>
		</div>
		<?php
	} else {
		?>
		<div class="error" style="text-align: left;">
			<?php
			esc_html_e( 'You have not set up your Feature posts so I can not find any images.', 'canuck' );
			?>
			<ol>
				<li style="list-style: decimal;"><?php esc_html_e( 'Create a specific category such as "feature 1" to use for your feature posts.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Add a new post using the created category and insert the featured image.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Tip: Images can be linked to the post, image file, or a custom link.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Repeat for new images.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Select the category from the drop down when you set up the widget', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Tip: Make sure the images are exactly the same width and height.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Tip: Ideal image width is 840px.', 'canuck' ); ?></li>
			</ol>
		</div>
		<?php
	}// End if().
	if ( 0 === $canuck_feature_pic_count ) {
		?>
		<div class="error">
			<?php
			esc_html_e( 'There were no feature images found, did you select the correct category?', 'canuck' );
			?>
		</div>
		<?php
	}
	wp_reset_postdata();
}

/**
 * Flex Slider with caousel navigation on top.
 *
 * @param string  $slider_category is the category to get feature images from.
 * @param string  $slider_animation is the slider animation slide or fade.
 * @param string  $slider_pause time in miliseconds before slide change starts.
 * @param string  $slider_transition is the time in miliseconds for the slide to change.
 * @param boolean $include_post_titles will include post title as a caption if checked.
 * @param boolean $slider_auto will auto start the slider if checked.
 */
function canuck_widget_slider_carousel_top_nav( $slider_category, $slider_animation, $slider_pause, $slider_transition, $include_post_titles, $slider_auto ) {
	global $canuck_feature_category, $post;
	$include_pinterest_pinit  = get_theme_mod( 'canuck_include_pinit' ) ? true : false;
	$add_nopin                = ( true === $include_pinterest_pinit ) ? 'data-pin-no-hover="true" ' : '';
	$category_id              = get_cat_ID( $slider_category );
	$args                     = array(
		'category'    => $category_id,
		'numberposts' => 20,
	);
	$custom_posts             = get_posts( $args );
	$canuck_feature_pic_count = 0;
	if ( 0 !== $category_id && $custom_posts ) {
		?>
		<div class="flexslider-wrapper">
			<div id="widget-flex-slider-carousel-top" class="flexslider widget carousel top">
				<ul class="slides">
					<?php
					foreach ( $custom_posts as $post ) { // phpcs:ignore
						setup_postdata( $post );
						if ( has_post_thumbnail() ) {
							$canuck_feature_pic_count ++;
							?>
							<li>
								<?php
									$thumb     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'canuck_gallery_thumb' );
									$image_url = $thumb[0];
									echo '<img src="' . esc_url( $image_url ) . '" title="" alt="flex thumb" />';
								?>
							</li>
							<?php
						}
					}
					?>
				</ul>
			</div>
			<div id="widget-flex-slider-feature-bot" class="flexslider widget feature bottom" data-flex_trans="<?php echo esc_attr( $slider_transition ); ?>" data-flex_pause="<?php echo esc_attr( $slider_pause ); ?>" data-flex_effect="<?php echo esc_attr( $slider_animation ); ?>" data-flex_auto="<?php echo esc_attr( $slider_auto ); ?>">
				<ul class="slides">
					<?php
					$canuck_feature_pic_count = 0;
					foreach ( $custom_posts as $post ) { // phpcs:ignore
						setup_postdata( $post );
						$link_to_post        = ( '' === get_post_meta( $post->ID, 'canuck_metabox_link_to_post', true ) ? false : true );
						$custom_feature_link = ( '' === get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) ? false : get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) );
						if ( has_post_thumbnail() ) {
							$canuck_feature_pic_count ++;
							?>
							<li>
								<?php
								$thumb     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'canuck_med15' );
								$image_url = $thumb[0];
								$title     = the_title_attribute( 'echo=0' );
								if ( '' === $title ) {
									$imagetitle = '';
									$imagealt   = 'flexslider image';
								} else {
									$imagetitle = $title;
									$imagealt   = $title;
								}
								if ( true === $link_to_post ) {
									echo '<a href="' . esc_url( get_permalink() ) . '" title="' . the_title_attribute( 'echo=0' ) . '"><img ' . $add_nopin . 'src="' . esc_url( $image_url ) . '" title="' . esc_attr( $imagetitle ) . '" alt="' . esc_attr( $imagealt ) . '" /></a>';// phpcs:ignore
								} elseif ( false !== $custom_feature_link ) {
									echo '<a href="' . esc_url( $custom_feature_link ) . '" title="' . the_title_attribute( 'echo=0' ) . '"><img ' . $add_nopin . 'src="' . esc_url( $image_url ) . '" title="' . esc_attr( $imagetitle ) . '" alt="' . esc_attr( $imagealt ) . '" /></a>';// phpcs:ignore
								} else {
									echo '<img ' . $add_nopin . 'src="' . esc_url( $image_url ) . '" title="' . esc_attr( $imagetitle ) . '" alt="' . esc_attr( $title ) . '" />';// phpcs:ignore
								}
								if ( true === $include_post_titles ) {
									if ( '' !== $title ) {
										echo '<p class="flex-caption">' . wp_kses_post( $title ) . '</p>';
									}
								}
								if ( true === $include_pinterest_pinit ) {
									echo '<a href="https://www.pinterest.com/pin/create/button/" data-pin-round="true" data-pin-hover="false"  data-pin-media="' . esc_url( $image_url ) . '"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" alt="' . esc_attr__( 'Pinterest share image', 'canuck' ) . '" /></a>'; // phpcs:ignore
								}
								?>
							</li>
							<?php
						}// End if().
					}// End foreach().
					?>
				</ul>
			</div>
		</div>
		<?php
	} else {
		?>
		<div class="error" style="text-align: left;">
			<?php
			esc_html_e( 'You have not set up your Feature posts so I can not find any images.', 'canuck' );
			?>
			<ol>
				<li style="list-style: decimal;"><?php esc_html_e( 'Create a specific category such as "feature 1" to use for your feature posts.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Add a new post using the created category and insert the featured image.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Tip: Images can be linked to the post, image file, or a custom link.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Repeat for new images.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Select the category from the drop down when you set up the widget', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Tip: Make sure the images are exactly the same width and height.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Tip: Ideal image width is 840px.', 'canuck' ); ?></li>
			</ol>
		</div>
		<?php
	}// End if().
	if ( 0 === $canuck_feature_pic_count ) {
		?>
		<div class="error">
			<?php
			esc_html_e( 'There were no feature images found, did you select the correct category?', 'canuck' );
			?>
		</div>
		<?php
	}
	wp_reset_postdata();
}

/**
 * Flex Slider with caousel navigation on bottom.
 *
 * @param string  $slider_category is the category to get feature images from.
 * @param string  $slider_animation is the slider animation slide or fade.
 * @param string  $slider_pause time in miliseconds before slide change starts.
 * @param string  $slider_transition is the time in miliseconds for the slide to change.
 * @param boolean $include_post_titles will include post title as a caption if checked.
 * @param boolean $slider_auto will auto start the slider if checked.
 */
function canuck_widget_slider_carousel_bot_nav( $slider_category, $slider_animation, $slider_pause, $slider_transition, $include_post_titles, $slider_auto ) {
	global $canuck_feature_category, $post;
	$include_pinterest_pinit  = get_theme_mod( 'canuck_include_pinit' ) ? true : false;
	$add_nopin                = ( true === $include_pinterest_pinit ) ? 'data-pin-no-hover="true" ' : '';
	$category_id              = get_cat_ID( $slider_category );
	$args                     = array(
		'category'    => $category_id,
		'numberposts' => 20,
	);
	$custom_posts             = get_posts( $args );
	$canuck_feature_pic_count = 0;
	if ( 0 !== $category_id && $custom_posts ) {
		?>
		<div class="flexslider-wrapper">
			<div id="widget-flex-slider-feature-top" class="flexslider widget feature top" data-flex_trans="<?php echo esc_attr( $slider_transition ); ?>" data-flex_pause="<?php echo esc_attr( $slider_pause ); ?>" data-flex_effect="<?php echo esc_attr( $slider_animation ); ?>" data-flex_auto="<?php echo esc_attr( $slider_auto ); ?>">
				<ul class="slides">
					<?php
					$canuck_feature_pic_count = 0;
					foreach ( $custom_posts as $post ) { // phpcs:ignore
						setup_postdata( $post );
						$link_to_post        = ( '' === get_post_meta( $post->ID, 'canuck_metabox_link_to_post', true ) ? false : true );
						$custom_feature_link = ( '' === get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) ? false : get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) );
						if ( has_post_thumbnail() ) {
							$canuck_feature_pic_count ++;
							?>
							<li>
								<?php
								$thumb     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'canuck_med15' );
								$image_url = $thumb[0];
								$title     = the_title_attribute( 'echo=0' );
								if ( '' === $title ) {
									$imagetitle = '';
									$imagealt   = 'flexslider image';
								} else {
									$imagetitle = $title;
									$imagealt   = $title;
								}
								if ( true === $link_to_post ) {
									echo '<a href="' . esc_url( get_permalink() ) . '" title="' . the_title_attribute( 'echo=0' ) . '"><img ' . $add_nopin . 'src="' . esc_url( $image_url ) . '" title="' . esc_attr( $imagetitle ) . '" alt="' . esc_attr( $imagealt ) . '" /></a>';// phpcs:ignore
								} elseif ( false !== $custom_feature_link ) {
									echo '<a href="' . esc_url( $custom_feature_link ) . '" title="' . the_title_attribute( 'echo=0' ) . '"><img ' . $add_nopin . 'src="' . esc_url( $image_url ) . '" title="' . esc_attr( $imagetitle ) . '" alt="' . esc_attr( $imagealt ) . '" /></a>';// phpcs:ignore
								} else {
									echo '<img ' . $add_nopin . 'src="' . esc_url( $image_url ) . '" title="' . esc_attr( $imagetitle ) . '" alt="' . esc_attr( $title ) . '" />';// phpcs:ignore
								}
								if ( true === $include_post_titles ) {
									if ( '' !== $title ) {
										echo '<p class="flex-caption">' . wp_kses_post( $title ) . '</p>';
									}
								}
								if ( true === $include_pinterest_pinit ) {
									echo '<a href="https://www.pinterest.com/pin/create/button/" data-pin-round="true" data-pin-hover="false"  data-pin-media="' . esc_url( $image_url ) . '"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" alt="' . esc_attr__( 'Pinterest share image', 'canuck' ) . '" /></a>'; // phpcs:ignore
								}
								?>
							</li>
							<?php
						}// End if().
					}// End foreach().
					?>
				</ul>
			</div>
			<div id="widget-flex-slider-carousel-bot" class="flexslider widget carousel bottom">
				<ul class="slides">
					<?php
					foreach ( $custom_posts as $post ) { // phpcs:ignore
						setup_postdata( $post );
						if ( has_post_thumbnail() ) {
							$canuck_feature_pic_count ++;
							?>
							<li>
								<?php
									$thumb     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'canuck_gallery_thumb' );
									$image_url = $thumb[0];
									echo '<img src="' . esc_url( $image_url ) . '" title="" alt="flex thumb" />';
								?>
							</li>
							<?php
						}
					}
					?>
				</ul>
			</div>
		</div>
		<?php
	} else {
		?>
		<div class="error" style="text-align: left;">
			<?php
			esc_html_e( 'You have not set up your Feature posts so I can not find any images.', 'canuck' );
			?>
			<ol>
				<li style="list-style: decimal;"><?php esc_html_e( 'Create a specific category such as "feature 1" to use for your feature posts.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Add a new post using the created category and insert the featured image.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Tip: Images can be linked to the post, image file, or a custom link.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Repeat for new images.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Select the category from the drop down when you set up the widget', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Tip: Make sure the images are exactly the same width and height.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Tip: Ideal image width is 840px.', 'canuck' ); ?></li>
			</ol>
		</div>
		<?php
	}// End if().
	if ( 0 === $canuck_feature_pic_count ) {
		?>
		<div class="error">
			<?php
			esc_html_e( 'There were no feature images found, did you select the correct category?', 'canuck' );
			?>
		</div>
		<?php
	}
	wp_reset_postdata();
}

/**
 * Flex widget carousel slider.
 *
 * @param string  $slider_category is the category to get feature images from.
 * @param boolean $include_post_titles will include post title as a caption if checked.
 */
function canuck_widget_slider_carousel( $slider_category, $include_post_titles ) {
	global $canuck_feature_category, $post;
	$include_pinterest_pinit  = get_theme_mod( 'canuck_include_pinit' ) ? true : false;
	$add_nopin                = ( true === $include_pinterest_pinit ) ? 'data-pin-no-hover="true" ' : '';
	$category_id              = get_cat_ID( $slider_category );
	$args                     = array(
		'category'    => $category_id,
		'numberposts' => 20,
	);
	$custom_posts             = get_posts( $args );
	$canuck_feature_pic_count = 0;
	if ( 0 !== $category_id && $custom_posts ) {
		?>
		<div class="flexslider-wrapper">
			<div id="widget-flex-slider-feature-carousel" class="flexslider carousel widget bottom">
				<ul class="slides">
					<?php
					foreach ( $custom_posts as $post ) { // phpcs:ignore
						setup_postdata( $post );
						$link_to_post        = ( '' === get_post_meta( $post->ID, 'canuck_metabox_link_to_post', true ) ? false : true );
						$custom_feature_link = ( '' === get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) ? false : get_post_meta( $post->ID, 'canuck_custom_feature_link', true ) );
						if ( has_post_thumbnail() ) {
							$canuck_feature_pic_count ++;
							?>
							<li>
								<?php
								$thumb     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'canuck_med15' );
								$image_url = $thumb[0];
								$title     = the_title_attribute( 'echo=0' );
								if ( '' === $title ) {
									$imagetitle = '';
									$imagealt   = 'flexslider image';
								} else {
									$imagetitle = $title;
									$imagealt   = $title;
								}
								if ( true === $link_to_post ) {
									echo '<a href="' . esc_url( get_permalink() ) . '" title="' . the_title_attribute( 'echo=0' ) . '"><img ' . $add_nopin . 'src="' . esc_url( $image_url ) . '" title="' . esc_attr( $imagetitle ) . '" alt="' . esc_attr( $imagealt ) . '" /></a>';// phpcs:ignore
								} elseif ( false !== $custom_feature_link ) {
									echo '<a href="' . esc_url( $custom_feature_link ) . '" title="' . the_title_attribute( 'echo=0' ) . '"><img ' . $add_nopin . 'src="' . esc_url( $image_url ) . '" title="' . esc_attr( $imagetitle ) . '" alt="' . esc_attr( $imagealt ) . '" /></a>';// phpcs:ignore
								} else {
									echo '<img ' . $add_nopin . 'src="' . esc_url( $image_url ) . '" title="' . esc_attr( $imagetitle ) . '" alt="' . esc_attr( $title ) . '" />';// phpcs:ignore
								}
								if ( true === $include_post_titles ) {
									if ( '' !== $title ) {
										echo '<p class="flex-caption">' . wp_kses_post( $title ) . '</p>';
									}
								}
								if ( true === $include_pinterest_pinit ) {
									echo '<a href="https://www.pinterest.com/pin/create/button/" data-pin-round="true" data-pin-hover="false"  data-pin-media="' . esc_url( $image_url ) . '"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" alt="' . esc_attr__( 'Pinterest share image', 'canuck' ) . '" /></a>'; // phpcs:ignore
								}
							?>
							</li>
							<?php
						}
					}// End foreach().
					?>
				</ul>
			</div>
		</div>
		<?php
	} else {
		?>
		<div class="error" style="text-align: left;">
			<?php
			esc_html_e( 'You have not set up your Feature posts so I can not find any images.', 'canuck' );
			?>
			<ol>
				<li style="list-style: decimal;"><?php esc_html_e( 'Create a specific category such as "feature 1" to use for your feature posts.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Add a new post using the created category and insert the featured image.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Tip: Images can be linked to the post, image file, or a custom link.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Repeat for new images.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Select the category from the drop down when you set up the widget', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Tip: Make sure the images are exactly the same width and height.', 'canuck' ); ?></li>
				<li style="list-style: decimal;"><?php esc_html_e( 'Tip: Ideal image width is 840px.', 'canuck' ); ?></li>
			</ol>
		</div>
		<?php
	}// End if().
	if ( 0 === $canuck_feature_pic_count ) {
		?>
		<div class="error">
			<?php
			esc_html_e( 'There were no feature images found, did you select the correct category?', 'canuck' );
			?>
		</div>
		<?php
	}
	wp_reset_postdata();
}

