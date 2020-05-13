<?php
/**
 * Canuck Recent Posts Widget
 *
 * This file is a widget was modified from the WordPress Recent Pots Widget.
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 *
 * @wordpress-plugin
 * Plugin Name: Canuck Category Widget
 * Plugin URI: http://kevinsspace.ca/canuckdemo/
 * Description: A widget for the Canuck Theme that allows the user to remove categories from the list
 * Version: 1.2.6
 * Author: Kevin Archibald
 * Author URI: http://kevinsspace.ca/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Use widgets_init action hook to execute custom function.
 */
add_action( 'widgets_init', 'canuck_register_recent_posts_widget' );

/**
 * Register our widget.
 */
function canuck_register_recent_posts_widget() {
	register_widget( 'canuck_recent_posts_widget' );
}

/**
 * Recent_Posts widget w/ category exclude class.
 * This allows specific Category IDs to be removed from the Sidebar Recent Posts list
 */
class Canuck_Recent_Posts_Widget extends WP_Widget {
	/**
	 * Sets up the widgets name etc.
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'   => 'canuck_recent_posts',
			'description' => esc_html__( 'Display recent posts, allow excluded categories', 'canuck' ),
		);
		parent::__construct( 'canuck_recent_posts_widget', esc_html__( 'Canuck Recent Posts Widget', 'canuck' ), $widget_ops );
	}
	/**
	 * Outputs the options form on admin.
	 *
	 * @param array $instance The widget options.
	 */
	public function form( $instance ) {
		// Defaults.
		$canuck_recent_posts_defaults = array(
			'canuck_title' => esc_html__( 'Recent Posts', 'canuck' ),
			'canuck_count' => 5,
		);
		$instance                     = wp_parse_args( (array) $instance, $canuck_recent_posts_defaults );
		$title                        = $instance['canuck_title'];
		$count                        = $instance['canuck_count'];
		// Validate data.
		$count = is_int( $count ) ? $count : 5;
		?>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'canuck_title' ) ); ?>"><?php esc_html_e( 'Title:', 'canuck' ); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'canuck_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'canuck_title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></p>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'canuck_count' ) ); ?>"><?php esc_html_e( 'Number of posts to show:', 'canuck' ); ?></label>
		<input id="<?php echo esc_attr( $this->get_field_id( 'canuck_count' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'canuck_count' ) ); ?>" type="text" value="<?php echo intval( $count ); ?>" size="3" /></p>
		<?php
	}
	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options.
	 * @param array $old_instance The previous options.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance                 = $old_instance;
		$instance['canuck_title'] = esc_html( $new_instance['canuck_title'] );
		$instance['canuck_count'] = ! empty( $new_instance['canuck_count'] ) ? intval( $new_instance['canuck_count'] ) : 5;
		return $instance;
	}
	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args Arguments for widget.
	 * @param array $instance Instance.
	 */
	public function widget( $args, $instance ) {
		// This filter is documented in wp-includes/default-widgets.php.
		$title         = apply_filters( 'widget_title', empty( $instance['canuck_title'] ) ? esc_html__( 'Recent Posts', 'canuck' ) : $instance['canuck_title'], $instance, $this->id_base );
		$c             = ! empty( $instance['canuck_count'] ) ? intval( $instance['canuck_count'] ) : 5;
		$exclude_ids   = canuck_exclude_category_validation();
		$id_picks      = array();
		$id_picks      = explode( ',', $exclude_ids );
		$filtered_list = '';
		$counter       = 0;
		foreach ( $id_picks as $pick ) {
			if ( 1 < intval( $id_picks[ $counter ] ) ) {
				$filtered_list .= '-' . intval( $id_picks[ $counter ] ) . ',';
			}
			$counter++;
		}
		$exclude_ids = trim( $filtered_list, ',' );
		$x           = $exclude_ids;
		echo wp_kses_post( $args['before_widget'] );
		if ( $title ) {
			echo wp_kses_post( $args['before_title'] ) . wp_kses_post( $title ) . wp_kses_post( $args['after_title'] );
		}
		$post_args    = array(
			'numberposts'      => $c,
			'category'         => $x,
			'post_status'      => 'publish',
			'suppress_filters' => false,
		);
		$recent_posts = wp_get_recent_posts( $post_args );
		?>
		<ul>
			<?php
			foreach ( $recent_posts as $recent ) {
				if ( ! post_password_required( $recent['ID'] ) ) {
					if ( has_post_thumbnail( $recent['ID'] ) ) {
						$thumb     = wp_get_attachment_image_src( get_post_thumbnail_id( $recent['ID'], 'thumbnail' ) );
						$image_url = esc_url( $thumb[0] );
					} else {
						if ( has_post_format( 'audio', $recent['ID'] ) ) {
							$image_url = get_template_directory_uri() . '/images/audio150.jpg';
						} elseif ( has_post_format( 'gallery', $recent['ID'] ) ) {
							$image_url = get_template_directory_uri() . '/images/gallery150.jpg';
						} elseif ( has_post_format( 'quote', $recent['ID'] ) ) {
							$image_url = get_template_directory_uri() . '/images/quote150.jpg';
						} elseif ( has_post_format( 'video', $recent['ID'] ) ) {
							$image_url = get_template_directory_uri() . '/images/video150.jpg';
						} else {
							$integer   = rand( 1, 5 );
							$image_url = get_template_directory_uri() . '/images/standard' . $integer . '_150.jpg';
						}
					}
				} else {
					$image_url = get_template_directory_uri() . '/images/password150.jpg';
				}
				echo '<li>';
					echo '<img src="' . esc_url( $image_url ) . '" alt="' . esc_attr__( 'recent_post_image', 'canuck' ) . '">';
					echo '<div class="recent-post-wrap">';
						echo '<a href="' . esc_url( get_permalink( $recent['ID'] ) ) . '">' . wp_kses_post( $recent['post_title'] ) . '</a>';
						echo '<span class="pmeta-timestamp post-date updated">' . get_the_time( get_option( 'date_format' ), $recent['ID'] ) . '</span>';// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					echo '</div>';
				echo '</li> ';
			}
			?>
		</ul>
		<?php
		echo wp_kses_post( $args['after_widget'] );
		wp_reset_postdata();
	}
}

