<?php
/**
 * Template Part, author bio
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $canuck_page_title,$canuck_curauth,$canuck_exclude_page_title;
$include_bio = get_theme_mod( 'canuck_include_author_bio', false );
if ( true === $include_bio ) {
	if ( '' !== $canuck_curauth->description ) {
		?>
		<div class="author-bio-header">
			<?php echo get_avatar( $canuck_curauth->user_email, 150 ); ?>
			<div class="author-bio-content-wrap">
				<p><?php echo wp_kses_post( $canuck_curauth->description ); ?></p>
				<?php
				if ( '' !== $canuck_curauth->user_url ) {
					echo esc_html__( 'Website: ', 'canuck' ) . '<a href="' . esc_url( $canuck_curauth->user_url ) . '">' . esc_url( $canuck_curauth->user_url ) . '</a>';
				}
				?>
			</div>
		</div>
		<?php
	}
}
echo '<div class="clearfix"></div>';

