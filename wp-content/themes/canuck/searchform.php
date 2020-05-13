<?php
/**
 * Search Form WordPress file.
 *
 * This file is the search form used in the theme.
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

?>
<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'canuck' ); ?></span>
		<input type="search" class="search-field"
				placeholder="<?php esc_attr_e( 'Search', 'canuck' ); ?>"
				value="<?php echo get_search_query(); ?>" name="s"
				title="<?php esc_attr_e( 'Search for:', 'canuck' ); ?>" />
	</label>
	<button type="submit" class="fa fa-search" title="<?php esc_attr_e( 'search', 'canuck' ); ?>"></button>
</form>
