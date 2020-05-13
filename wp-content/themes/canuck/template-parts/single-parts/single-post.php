<?php
/**
 * Template Part, single post template part.
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $canuck_single_layout_option;

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
			<?php
			if ( 'fullwidth' === $canuck_single_layout_option ) {
				get_template_part( '/template-parts/postformat-parts/postformat', 'side-feature' );
			} else {
				get_template_part( '/template-parts/postformat-parts/postformat', 'top-feature' );
			}
			?>
		</article>
		<div class="clearfix"></div>
		<div class="comments-wrap">
			<?php comments_template( '/comments.php', true ); ?>
		</div>
		<?php
	}
} else {
	get_template_part( '/template-parts/partials', 'post-or-page-not-found' );
}

