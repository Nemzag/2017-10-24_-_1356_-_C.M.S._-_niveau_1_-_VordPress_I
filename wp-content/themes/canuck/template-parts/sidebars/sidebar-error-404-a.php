<?php
/**
 * Template part file that contains the 404 sidebar b default content.
 *
 * This file is called by 404.php.
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

if ( ! dynamic_sidebar( 'canuck_404_sidebar_a' ) ) {
	the_widget( 'WP_Widget_Search' );
	the_widget( 'canuck_recent_posts_widget' );
}

