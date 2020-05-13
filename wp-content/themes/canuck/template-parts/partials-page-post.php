<?php
/**
 * Template Part, page post
 *
 * Used by page.php and template-feature.php
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		if ( '' !== $post->post_content ) {
			?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="page-entry entry-content">
					<?php
					if ( has_post_thumbnail() && ! post_password_required() ) {
						the_post_thumbnail();
					}
					the_content( esc_html__( 'Read more', 'canuck' ) );
					?>
				</div>
				<div class="clearfix"></div>
				<?php
				if ( comments_open() ) {
					comments_template( '', true );
				}
				?>
			</div>
			<?php
		}
	}
}
?>
<div class="clearfix"></div>

