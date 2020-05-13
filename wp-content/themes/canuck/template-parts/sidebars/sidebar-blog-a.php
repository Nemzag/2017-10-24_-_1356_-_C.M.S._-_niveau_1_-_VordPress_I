<?php
/**
 * Template part file that contains the blog sidebar a default content
 *
 * This file is called by home.php.
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

if ( ! dynamic_sidebar( 'canuck_blog_sidebar_a' ) ) {
	?>
	<h2><?php esc_html_e( 'Blog Sidebar A', 'canuck' ); ?></h2>
	<p><?php esc_html_e( 'Go to Appearance => Widgets and drag a widget over to this sidebar.', 'canuck' ); ?></p>
	<?php
}

