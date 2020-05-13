<?php
/**
 * Footer Template Part File.
 *
 * Template part file that contains the site footer and closing HTML body elements.
 * This file is called by all primary template pages
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

$canuck_showfooter              = get_theme_mod( 'canuck_show_footer', true );
$canuck_showcopyright           = get_theme_mod( 'canuck_show_copyright_strip', true );
$canuck_footercols              = intval( get_theme_mod( 'canuck_footer_cols', 3 ) );
$canuck_show_footer_top_strip   = get_theme_mod( 'canuck_show_footer_top_strip', false );
$canuck_footer_background_image = get_theme_mod( 'canuck_footer_background_image', '' );
$canuck_use_lazyload            = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
if ( '' !== $canuck_footer_background_image ) {
	if ( true === $canuck_use_lazyload ) {
		$footerstring = ' id="canuck-footer" class="lazyload" data-src="' . esc_url( $canuck_footer_background_image ) . '"';
	} else {
		$footerstring = ' id="canuck-footer" style="background-image: url( ' . esc_url( $canuck_footer_background_image ) . ' );"';
	}
} else {
	$footerstring = ' id="canuck-footer"';
}
if ( true === $canuck_showfooter || true === $canuck_showcopyright || true === $canuck_show_footer_top_strip ) {
	?>
	<footer <?php echo $footerstring; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
		<div class="footer-overlay">
			<div id="footer-wrap">
				<?php
				if ( true === $canuck_show_footer_top_strip ) {
					get_template_part( '/template-parts/footer-parts/footer', 'top-strip' );
				}
				if ( true === $canuck_showfooter ) {
					?>
					<div class="footer-col-wrap">	
						<div class="footercol-<?php echo esc_attr( $canuck_footercols ); ?>-1">
							<?php
							if ( ! dynamic_sidebar( 'canuck_footer_a_sidebar' ) ) {
								esc_html_e( 'This column is a widget area.', 'canuck' );
								?>
								<br/><span class="alert">
									<?php esc_html_e( 'Add widgets to this Footer, something, anything!', 'canuck' ); ?>
								</span>
								<?php
							}
							?>
						</div>
						<div class="footercol-<?php echo esc_attr( $canuck_footercols ); ?>-2">
							<?php
							if ( ! dynamic_sidebar( 'canuck_footer_b_sidebar' ) ) {
								esc_html_e( 'This column is a widget area.', 'canuck' );
								?>
								<br/><span class="alert">
									<?php esc_html_e( 'Add widgets to this Footer, something, anything!', 'canuck' ); ?>
								</span>
								<?php
							}
							?>
						</div>
						<div class="footercol-<?php echo esc_attr( $canuck_footercols ); ?>-3">
							<?php
							if ( ! dynamic_sidebar( 'canuck_footer_c_sidebar' ) ) {
								esc_html_e( 'This column is a widget area.', 'canuck' );
								?>
								<br/><span class="alert">
									<?php esc_html_e( 'Add widgets to this Footer, something, anything!', 'canuck' ); ?>
								</span>
								<?php
							}
							?>
						</div>
						<?php
						if ( 4 === $canuck_footercols ) {
							?>
							<div class="footercol-4-4">
								<?php
								if ( ! dynamic_sidebar( 'canuck_footer_d_sidebar' ) ) {
									esc_html_e( 'This column is a widget area.', 'canuck' );
									?>
									<br/><span class="alert">
										<?php esc_html_e( 'Add widgets to this Footer, something, anything!', 'canuck' ); ?>
									</span>
									<?php
								}
								?>
							</div>
							<?php
						}
						?>
					</div>
					<?php
				}// End if().
				if ( true === $canuck_showcopyright ) {
					?>
					<div class="clearfix"></div>
					<div id="copyright">
						<div id="copyright-wrap">
							<span class="copyright_c1"><?php echo wp_kses_post( get_theme_mod( 'canuck_left_copyright_text', '' ) ); ?></span>
							<span class="copyright_c2"><?php echo wp_kses_post( get_theme_mod( 'canuck_middle_copyright_text', '' ) ); ?></span>
							<span class="copyright_c3"><?php echo wp_kses_post( get_theme_mod( 'canuck_right_copyright_text', '' ) ); ?></span>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</footer>
	<?php
}// End if().
wp_footer();
?>
</body>
</html>

