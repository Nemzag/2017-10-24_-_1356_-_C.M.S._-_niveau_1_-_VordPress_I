<?php
/**
 * Template Part, Page title but no post
 *
 * Used where title is set by the calling template part,
 * rather then taking the title from the post title.
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $canuck_include_breadcrumbs,$canuck_exclude_page_title,$canuck_page_title;
if ( false === $canuck_exclude_page_title && ! post_password_required() ) {
	?>
	<div id="page-title-wide" >
		<div class="page-title-wrap">
			<h1 class="center-title entry-title"><?php echo wp_kses_post( $canuck_page_title ); ?></h1>
			<?php
			if ( true === $canuck_include_breadcrumbs ) {
				?>
				<div class="breadcrumbs-center">
					<?php canuck_custom_breadcrumbs(); ?>
				</div>
				<?php
			}
			?>
		</div>
	</div>
	<div class="clearfix"></div>
	<?php
} else {
	echo '<h1 class="screen-reader-text">' . esc_html( $canuck_page_title ) . '</h1>';
}
