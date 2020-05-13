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

if ( ! dynamic_sidebar( 'canuck_404_sidebar_b' ) ) {
	?>
	<h2><?php esc_html_e( 'Error Sidebar B', 'canuck' ); ?></h2>
	<p><?php esc_html_e( 'Go to Appearance => Widgets and drag a widget over to this sidebar.', 'canuck' ); ?></p>
	<?php
}

