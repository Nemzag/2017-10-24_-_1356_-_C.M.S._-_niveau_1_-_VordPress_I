<?php
/**
 * Canuck Theme Page.
 * This file sets up the Canuck Theme Page.
 * The page is used for theme introduction, links, and documentation'
 *
 * @package   Canuck WordPress Theme
 * @copyright Copyright (C) 2017-2019, kevinhaig
 * @license   GPLv2 or later http://www.gnu.org/licenses/quick-guide-gplv2.html
 * @author    kevinhaig <kevinsspace.ca/contact/>
 * Canuck is distributed under the terms of the GNU GPL.
 */

add_action( 'admin_menu', 'canuck_theme_page_init' );
/**
 * Canuck add theme page
 */
function canuck_theme_page_init() {
	$themepage = add_theme_page( __( 'Canuck Theme', 'canuck' ), __( 'Canuck', 'canuck' ), 'edit_theme_options', 'canuck_theme_page', 'canuck_theme_page_callback' );
}

/**
 * Tabs for theme page.
 *
 * @param string $current is current page.
 */
function canuck_theme_page_tabs( $current = 'canuck_intro_page' ) {
	$tabs               = array(
		'canuck_intro_page'        => esc_html__( 'Introduction', 'canuck' ),
		'canuck_quick_setup_page'  => esc_html__( 'Quick Setup', 'canuck' ),
		'canuck_detail_setup_page' => esc_html__( 'Detail Setup', 'canuck' ),
		'canuck_home_setup_page'   => esc_html__( 'Home Page Setup', 'canuck' ),
	);
	$canuck_admin_nonce = wp_create_nonce( 'canuck-admin-nonce' );
	echo '<h2 class="nav-tab-wrapper">';
	foreach ( $tabs as $tab => $name ) {
		$class = ( $tab === $current ) ? ' nav-tab-active' : '';
		echo "<a class='nav-tab$class' href='?page=canuck_theme_page&tab=$tab&_wp_nonce=$canuck_admin_nonce'>$name</a>"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
	echo '</h2>';
}

/**
 * Canuck Theme Page Callback
 *
 * Used for displaying the theme page data.
 */
function canuck_theme_page_callback() {
	global $pagenow;
	?>
	<div class="canuck-wrap">
		<h1><?php esc_html_e( 'Canuck WordPress Theme', 'canuck' ); ?></h1>
		<?php
		if ( isset( $_GET['tab'] ) && isset( $_GET['_wp_nonce'] ) && false !== wp_verify_nonce( $_GET['_wp_nonce'], 'canuck-admin-nonce' ) ) {// phpcs:ignore 
			canuck_theme_page_tabs( esc_html( wp_unslash( $_GET['tab'] ) ) ); // phpcs:ignore
		} else {
			canuck_theme_page_tabs( 'canuck_intro_page' );
		}
		?>
		<div id="canuck-page">
			<?php
			if ( isset( $_GET['page'] ) ) {
				$page_string = sanitize_text_field( wp_unslash( $_GET['page'] ) ); // phpcs:ignore non sanitized
			}
			if ( 'themes.php' === $pagenow && 'canuck_theme_page' === $page_string ) { // phpcs:ignore input var ok.
				if ( isset( $_GET['tab'] ) && isset( $_GET['_wp_nonce'] ) && false !== wp_verify_nonce( $_GET['_wp_nonce'], 'canuck-admin-nonce' ) ) {
					$tab = esc_html( wp_unslash( $_GET['tab'] ) ); // phpcs:ignore input var ok, sanitization ok.
				} else {
					$tab = 'canuck_intro_page';
				}
				switch ( $tab ) {
					case 'canuck_intro_page':
						canuck_intro_setup_callback();
						break;
					case 'canuck_quick_setup_page':
						canuck_quick_setup_callback();
						break;
					case 'canuck_detail_setup_page':
						canuck_detailed_setup_callback();
						break;
					case 'canuck_home_setup_page':
						canuck_homepage_setup_callback();
						break;
				}
			}
			?>
		</div>
	</div>
	<?php
}

/**
 * Intro html.
 */
function canuck_intro_setup_callback() {
	echo '<h2>' . esc_html__( 'Introduction', 'canuck' ) . '</h2>';
	echo '<p>' . esc_html__( 'Welcome, I hope you enjoy using the theme.', 'canuck' ) . '</p>';
	echo '<p>' . esc_html__( 'There is no upsell for this theme. ', 'canuck' ) .
				esc_html__( 'What you are getting is a full featured theme.', 'canuck' ) . '<br/>' .
				esc_html__( 'Try the theme out, if you decide to use it, do the right thing and provide a donation to the Author.', 'canuck' ) . '<br/>' .
				esc_html__( 'Give the Author incentive to support, and upgrade the theme.', 'canuck' ) . '</p>';
	?>
	<div class="katb_paypal"><?php esc_html_e( 'Show your appreciation!', 'canuck' ); ?>
		<br/><br/>
		<a href="https://canuckdemo.kevinsspace.ca/donate/" target="_blank"> <?php // phpcs:ignore ?>
			<img alt="<?php esc_attr_e( 'Donate Button with Credit Cards', 'canuck' ); ?>" src="https://www.paypalobjects.com/webstatic/en_US/btn/btn_donate_cc_147x47.png" /> <?php // phpcs:ignore ?>
		</a>
	</div>
	<p>
		<?php
		echo esc_html__( 'Author Site : ', 'canuck' ) . '<a href="//kevinsspace.ca" target="_blank" >kevinsspace.ca</a>&nbsp;&nbsp;&nbsp;'; // phpcs:ignore
		echo esc_html__( 'Demo Site : ', 'canuck' ) . '<a href="//cauckdemo.kevinsspace.ca/" target="_blank" >Canuck Demo</a>'; // phpcs:ignore
		?>
	</p>
	<?php
	echo '<h2>' . esc_html__( 'Special Considerations', 'canuck' ) . '</h2>';
	echo '<h3>' . esc_html__( 'Images', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'Canuck makes extensive use of custom sized images to make the theme look great, and reduce load times. ', 'canuck' ) .
				esc_html__( 'When using a new theme it is always a good idea to re-generate your thumbnails. ', 'canuck' ) .
				esc_html__( 'I use a plugin called "Force Regerate Thumbnails" available in the WordPress.org plugin repository. ', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Download "Force Regenerate Thumbnails" or an equivalent plugin and activate it.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'The Canuck theme must be active before you regenerate your thumbnails.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'If you decide to go to a different theme or return to the previous theme, then regenerate your thumbnails with that theme loaded.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Note that if your site has a lot of images, it will take a while to regerate your thumbnails.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Backup your Content from the Options to a Page', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'Canuck has an extensive set of options and a great landing page (home page) builder. ', 'canuck' ) .
				esc_html__( 'Many of these options create content, that would normally be lost on theme switch. ', 'canuck' ) .
				esc_html__( 'By backing up your content from these options to a page, content is maintained, available to you even if you are setting up a different theme. ', 'canuck' ) .
				esc_html__( 'To backup your options: ', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Go to "Appearence->Customize"', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Canuck General->Backup Options".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Check the "Backup Canuck Option Content" box, then "Save & Publish".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'There will be a page created under "Pages" called "Canuck Content Created Backup".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'This page is password protected, with the Password : Canuck.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Do not publish the page, leave it in draft mode.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'You can delete the page any time, just like a regular page.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'If you leave the box checked the content of the page will be updated every time you "Save & Publish" your options.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Uncheck the box and "Save & Publish" if you just want to update manually.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Import your Parent theme options to a child theme.', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'When you set up a child theme, all custom theme mods (options) are reset. ', 'canuck' ) .
				esc_html__( 'This can be a real pain re-entering options if you are setting up child theme to solve a theme problem after the theme is setup. ', 'canuck' ) .
				esc_html__( 'Canuck will let you import all custom options  to the child theme at the click of a button. ', 'canuck' ) .
				esc_html__( 'To import your Parent Theme options: ', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Go to "Appearence->Customize"', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Canuck General->Backup Options".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Check the "Import Parent Theme Options" box, then "Save & Publish".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'All custom options for Canuck will be imported to your child theme.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Do this only once, at the start of setting up your childtheme.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Any options you set up in the child theme may be overwritten by parent theme options if you do it later.', 'canuck' ) . '</li>';
	echo '<li style="color:red;">' . esc_html__( 'After the initial import, uncheck the box and "Save & Publish" to ensure the options are not imported again.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Theme Static Home Page Performance.', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'If you are using many sections and images on your home page, performance will suffer. ', 'canuck' ) .
				esc_html__( 'If you are concerned about page load speed you can set an option to lazyload images. ', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Go to "Appearence->Customize"', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Canuck General->jQuery Options".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Check the "Use jquery.lazy.js plugin" box, then "Save & Publish".', 'canuck' ) . '</li>';
	echo '</ol>';
}
/**
 * Canuck Theme Page Callback
 *
 * Used for displaying the theme page data.
 */
function canuck_quick_setup_callback() {
	echo '<h2>' . esc_html__( 'Canuck Quick Setup', 'canuck' ) . '</h2>';
	echo '<h3>' . esc_html__( 'Options and the Customize Panel', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'Options are set in the Customizer accessed through the "Appearance->Customize" tab. ', 'canuck' ) .
				esc_html__( 'Normally the changes you set will show up in the preview screen after the automatic refresh. ', 'canuck' ) .
				esc_html__( 'If not try and clicking the "Save & Publish" button then reload the page. ', 'canuck' ) .
				esc_html__( 'If that does not work try resetting your browser cache, as the previous setting may be in a cached page.', 'canuck' ) . '</p>';

	echo '<h2>' . esc_html__( 'Minimal Set Up', 'canuck' ) . '</h2>';
	echo '<p>' . esc_html__( 'Canuck has extensive options, however it should look great and work great with minimal set up. ', 'canuck' ) .
				esc_html__( 'Start by loading up the Customize panel. Go to "Appearance->Customize".', 'canuck' ) . '</p>';

	echo '<h3>' . esc_html__( 'Blog Page', 'canuck' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Header Image - ', 'canuck' ) . '</strong>' . esc_html__( 'If you previously installed a header image, you may see that image stretched accross your screen on initial load. ', 'canuck' ) .
						esc_html__( 'If a new install or if you did not have a header image installed, a default header image is shown. ', 'canuck' ) .
						esc_html__( 'To remove the image: ', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select "Canuck Blog->General Blog Options"', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Blog Feature Options"->"No Feature" from the dropdown list.', 'canuck' ) . '</li>';
	echo '</ol>';
	echo '<p>' . esc_html__( 'To change the image: ', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Header Media" tab in Customize', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Add new image" and pick or upload your image.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Image should be around 1100pixels wide and 367 pixels high, with the aspect ratio of 3:1.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Logo', 'canuck' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Main Logo - ', 'canuck' ) . '</strong>' . esc_html__( 'The main logo should designed for a white background: ', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Site Identity" tab in Customize', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Select Logo" or "Change Logo" and pick or upload your logo image.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Image should be a maximum 230px wide x maximum 100px high.', 'canuck' ) . '</li>';
	echo '</ol>';
	echo '<p><strong>' . esc_html__( 'Second Logo - ', 'canuck' ) . '</strong>' . esc_html__( 'If you are using a header image as a background, a logo designed for a dark backround is recommended.', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Canuck Headers->Image background options" tab in Customize', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Add the logo under the "Logo to overlay image backgrounds" section.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Image should be a maximum 230px wide x maximum 100px high.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Widgets', 'canuck' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Default Widgets - ', 'canuck' ) . '</strong>' . esc_html__( 'Set up the widgets you would like on the core pages.: ', 'canuck' ) .
						esc_html__( 'Core pages are the Search, Categories, Tags, and Date Archive pages.', 'canuck' ) .
						esc_html__( 'Other pages will initially use the default widget area initially, until you change theme.', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Widgets" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Drag the widgets you want to set up to the "Default A" widget setup area.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Note that "Defalult B" setup area would be needed if your layout had both a left and right sidebar.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<p><strong>' . esc_html__( 'Blog Widgets - ', 'canuck' ) . '</strong>' . esc_html__( 'Canuck allows you to use different widgets for your Blog Page:', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Widgets" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Drag the widgets you want to set up to the "Blog A" widget setup area.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Note that "Blog B" setup area would be needed if your layout had both a left and right sidebar.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<p><strong>' . esc_html__( 'Error 404 Widgets - ', 'canuck' ) . '</strong>' . esc_html__( 'Canuck allows you to use different widgets for your Error Page Page.', 'canuck' ) .
					esc_html__( 'This allows you to provide the user options such as a search widget, or recent posts widget.', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Widgets" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Drag the widgets you want to set up to the "Error 404 A" widget setup area.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Note that "Error 404 B" setup area would be needed if your layout had both a left and right sidebar.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Menus', 'canuck' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Main Menu - ', 'canuck' ) . '</strong>' . esc_html__( 'Cunuck has one menu for navigation on your site. ', 'canuck' ) .
						esc_html__( 'You can go up to 4 levels with the menu, which should be more than you need.', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Menus" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select a menu you previously created or create a new one.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Under "Display location" at the bottom of the menu panel, check "Primary Menu" and then "Save Menu".', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<p><strong>' . esc_html__( 'Social Menu - ', 'canuck' ) . '</strong>' . esc_html__( 'Social links display in a menu strip in the upper right of your page. ', 'canuck' ) .
						esc_html__( 'The links are set up using a custom menu.', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Menus" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Create a new menu and name it something like "social 1".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Set up "Custom Links" for your social links.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'For example URL->"//www.facebook.com/yourlink" Link Text->"Facebook".', 'canuck' ) . '</li>'; // phpcs:ignore
	echo '<li>' . esc_html__( 'Under "Display location" at the bottom of the menu panel, check "Social Menu" and then "Save Menu".', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Pinterest', 'canuck' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Pinterest PinIt Button - ', 'canuck' ) . '</strong>' . esc_html__( 'This program has a special option to enable theme specific Pinterest Pinit buttons. ', 'canuck' ) .
						esc_html__( 'The reason for this is that many of the features of this theme use image overlays which will not display the PinIt button from other plugins. ', 'canuck' ) .
						esc_html__( 'You will still be able to use the Pinterest plugins if you want, like JetPack Share plugin.', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Customize" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the  "Canuck General->Miscelaneous Options" panel.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Check the "Include Pinterest PinIt" checkbox', 'canuck' ) . '</li>';
	echo '</ol>';
}

/**
 * Canuck Theme Page Callback
 *
 * Used for displaying the theme page data.
 */
function canuck_detailed_setup_callback() {
	echo '<h2>' . esc_html__( 'Detailed Setup', 'canuck' ) . '</h2>';
	echo '<p>' . esc_html__( 'Most options have adequate descriptions so I will focus on items that need special attention. ', 'canuck' ) . '</p>';

	echo '<h3>' . esc_html__( 'Slider Setup: Home Page, Blog Page, or Feature Pages', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'Setting up sliders are relatively simple once you get the hang of it. ', 'canuck' ) .
				esc_html__( 'Sliders get their images from Featured Posts of a specified Category.  ', 'canuck' ) .
				esc_html__( 'To set up a feature post:', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Posts->Categories" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Create a new category to be used only by the slider posts and name it something like "Feature 1".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Posts->Add New" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Enter the title and content.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'In the Categories metabox select the category you created in Step 2.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'In the Featured Image metabox select "Set featured image.".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Upload the image, or select one from your Media library.".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Change the image title if you want".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Put in the Caption for the image (treat it like a title) with 2 or three words.".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Put in the Description for the image with 1-2 lines.".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Add the image alt, usually the same as the title.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Set Featured Image".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'In the Canuck Post Options metabox, you can select to show the title in a caption on the image.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'In the Canuck Post Options metabox, you can set up a link for the image.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Publish/Update the post.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Repeat steps 3-15 for additional images.', 'canuck' ) . '</li>';
	echo '</ol>';
	echo '<p>' . esc_html__( 'Feature areas on the Static Home page (Canuck Home Page) and Blog page (Canuck Blog) can be a background image, a slider, a video (video widget), or nothing. ', 'canuck' ) .
				esc_html__( 'Sliders can either be the full size images you upload or images with a 3:1 aspect ratio.  ', 'canuck' ) .
				esc_html__( 'The Feature Page slider uses images with a 1.5:1 aspect ratio. ', 'canuck' ) .
				esc_html__( 'I would recommend you keep all your images for these sliders at 1100px wide with the appropriate aspect height.  ', 'canuck' ) .
				esc_html__( 'To set up a Home Page slider:".', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Customize" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Canuck Home Page->Home Feature Options".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Set slider from the "Home Page Feature" dropdown.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the category you previously set up in the "Home Slider Feature Category" dropdown.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Save & Publish".', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<p>' . esc_html__( 'To set up a Blog Page slider:".', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Customize" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Canuck Blog->General Blog Options".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Set slider from the "Blog Feature Options" dropdown.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the category you previously set up in the "Feature Slider Category" dropdown.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Save & Publish".', 'canuck' ) . '</li>';
	echo '</ol>';
	echo '<p>' . esc_html__( 'To set up a Feature Page slider:".', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Page->Add New" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Fill in your title and content.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Feature" from the Template dropdown.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Save a Draft of the page and the Feature options will be added to the "Canuck Page Options Metabox".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Set up Canuck Page Options: Page Layout Options, Exclude Page Title, Sidebar A, and Sidebar B (if using both sidebars).', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the category you previously set up in the "Feature Slider Category" dropdown.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Feature Type" from the dropdown.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Publish" or "Update".', 'canuck' ) . '</li>';
	echo '</ol>';
	echo '<p>' . esc_html__( 'Some users will not want these posts to show up in the blog or any blog lists:".', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Customize" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Canuck General->Exclude Categories".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Check the box for the category you want to exclude.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Save & Publish".', 'canuck' ) . '</li>';
	echo '</ol>';
	echo '<p><strong>' . esc_html__( 'Slider Settings - ', 'canuck' ) . '</strong>' . esc_html__( 'Slider setup can be found in "Canuck General->Flex Slider Options"', 'canuck' ) . '</p>';

	echo '<p>' . esc_html__( 'As of Canuck Version 1.1.8 you can now also use a video for the Home Page or Blog Page Feature areas. ', 'canuck' ) .
				esc_html__( 'To set up a Home Page video:".', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Appearance->Customize" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Canuck Home Page->Home Feature Options".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select Widget(allows video) from the "Home Page Feature" dropdown.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Save & Publish" and then exit Customizer.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Go to the "Appearance->Widgets" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Drag the Video widget over to the "Home Page Feature" widget area.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Follow the instructions provided by the widget to set up your video.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'The procedure is essentially the same for the Blog Feature area so I will not repeat it.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Canuck General', 'canuck' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Miscellaneous Options - ', 'canuck' ) . '</strong>' . esc_html__( 'This is where you can include Pinterest sharing discussed in the Quick Start tab.', 'canuck' ) . '</p>';
	echo '<p><strong>' . esc_html__( 'Backup Options - ', 'canuck' ) . '</strong>' . esc_html__( 'Discussed in the Introduction tab.', 'canuck' ) . '</p>';
	echo '<p><strong>' . esc_html__( 'Exclude Categories - ', 'canuck' ) . '</strong>' . esc_html__( 'This is where you can exclude categories that would be used in the featured posts for sliders, portfolios, etc.', 'canuck' ) . '</p>';
	echo '<p><strong>' . esc_html__( 'Flex Slider Options - ', 'canuck' ) . '</strong>' . esc_html__( 'Set slider options such as type, pause and transition times.', 'canuck' ) . '</p>';
	echo '<p><strong>' . esc_html__( 'jQuery Options - ', 'canuck' ) . '</strong>' . esc_html__( 'Disable jQuery scripts for debugging or to use a different script.', 'canuck' ) . '</p>';

	echo '<h3>' . esc_html__( 'Canuck Layouts', 'canuck' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Breadcrumbs - ', 'canuck' ) . '</strong>' . esc_html__( 'Select "General Layout Options" and you can set up Breadcrumbs there. ', 'canuck' ) .
						esc_html__( 'You must have the plugin "Breadcrumb Trail" by Justin Tadlock installed to use breadcrumbs.', 'canuck' ) . '</p>';
	echo '<p><strong>' . esc_html__( 'Use Featured Images - ', 'canuck' ) . '</strong>' . esc_html__( 'Normally featured images are not shown on WordPress Core templates. ', 'canuck' ) .
						esc_html__( 'If you check this box they will be included on archive, category, search, and tag pages. ', 'canuck' ) .
						esc_html__( 'The side presentation will be shown on fullwidth, left and right sidebar layouts, while the top feature presentation will be used for the three column layout.', 'canuck' ) . '</p>';
	echo '<p><strong>' . esc_html__( 'Layouts - ', 'canuck' ) . '</strong>' . esc_html__( 'You can select layouts for all the WordPress Core pages. ', 'canuck' ) .
						esc_html__( 'Also note that the Author Page has an option to include an Author Bio. ', 'canuck' ) .
						esc_html__( 'The Single page has page title and sidebar options.', 'canuck' ) . '</p>';

	echo '<h3>' . esc_html__( 'Canuck Headers', 'canuck' ) . '</h3>';
	echo '<p><strong>' . esc_html__( 'Image Background Options - ', 'canuck' ) . '</strong>' . esc_html__( 'You can set up a header menu overlay used when a background image is used in the header. ', 'canuck' ) .
						esc_html__( 'This helps the menu show better when you are useing lighter images.', 'canuck' ) .
						esc_html__( 'You can also add a second logo for image overlays, discussed in the "Quick Install".', 'canuck' ) . '</p>';
	echo '<p><strong>' . esc_html__( 'Contact Information - ', 'canuck' ) . '</strong>' . esc_html__( 'Enter contact information here that will be shown in the header strip. ', 'canuck' ) . '</p>';

	echo '<h3>' . esc_html__( 'Canuck Footer', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'The option descriptions in "Canuck Footer" are enough detail so I will not elaborate further.', 'canuck' ) . '</p>';

	echo '<h3>' . esc_html__( 'Canuck Styles', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'You can select a skin (more to come in future releases) and fonts for headers, body text, and Page Titles.', 'canuck' ) . '</p>';

	echo '<h3>' . esc_html__( 'Canuck Blog', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'I will not go into additional detail as some options have been previously discussed and the rest have adequate descriptions. ', 'canuck' ) .
				esc_html__( 'I will note that you can choose excerpts and excerpt size, and exclude meta items such as post date, author, categories and tags. ', 'canuck' ) .
				esc_html__( 'You can also choose to exclude the No Comments link in the blog and single page post meta.', 'canuck' ) .
				esc_html__( 'There is a option in the General Blog Option panel to include captions on Galleries.', 'canuck' ) . '</p>';

	echo '<h3>' . esc_html__( 'Canuck WooCommerce Options', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'This option appears only if the WooCommerce plugin is installed and activated. ', 'canuck' ) .
				esc_html__( 'Special WooCommerce sidebars are set up, and you can select the layout you want for the Shop and Product pages.', 'canuck' ) . '</p>';

	echo '<h3>' . esc_html__( 'Post Formats', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'Canuck supports Audio, Quote, Gallery, Image, and Video Post Formats ', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li><strong>' . esc_html__( 'Audio Post Format: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Add your audio using the Add Media button in your post editor panel. ', 'canuck' ) .
						esc_html__( 'Then select the Audio Format for your post. ', 'canuck' ) .
						esc_html__( 'If you want to change the background for the audio, simply insert a featured image.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Quote Post Format: ', 'canuck' ) . '</strong>' .
						esc_html__( 'If you like to start your posts off with a quote, the Quote Post Format is for you. ', 'canuck' ) .
						esc_html__( 'The quote post format requires a bit of a special set up, but really it is not very difficult. ', 'canuck' ) .
						esc_html__( 'Add the quote data between &lt;q&gt;quote|author|link&lt;/q&gt; tags then select the Quote Format for your post.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Gallery Post Format: ', 'canuck' ) . '</strong>' .
						esc_html__( 'The Gallery Post Format allows you to present a group of photos in a carousel navigated feature area. ', 'canuck' ) .
						esc_html__( 'Simply select Add Media when setting up your post. ', 'canuck' ) .
						esc_html__( 'Insert the gallery and then add your content. ', 'canuck' ) .
						esc_html__( 'Finally select Gallery in the radio button in the Format panel.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Image Post Format: ', 'canuck' ) . '</strong>' .
						esc_html__( 'The Image Post Format allows you to blog about a special image. ', 'canuck' ) .
						esc_html__( 'Set up a feature image post and click the Image radio in the Format panel. ', 'canuck' ) .
						esc_html__( 'Add your image caption and description when you upload and set the feature image as they will be shown in the hover mode, along with photograph meta details.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Video Post Format: ', 'canuck' ) . '</strong>' .
						esc_html__( 'This post format allows you to set up a video in the feature area of your post. ', 'canuck' ) .
						esc_html__( 'Simply select Add Media and add your YouTube url. ', 'canuck' ) .
						esc_html__( 'Add your content and select Video in the radio button in the Format panel.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Portfolio Page', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'You can set up as many Portfolio Pages as you want. ', 'canuck' ) .
				esc_html__( 'A portfolio page is essentially a collection of images with a title, description and links.', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Make sure you have set up you featured posts with title and content, and image caption and descriptions under a specific category.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Page->Add New" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Fill in your title and content.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Portfolio" from the Template dropdown.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Save a Draft of the page and the Portfolio options will be added to the "Canuck Page Options Metabox".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Set up Canuck Page Options: Page Layout Options, Exclude Page Title, Sidebar A, and Sidebar B (if using both sidebars).', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the category you previously set up in the "Portfolio Category" dropdown.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the "Portfolio Type" from the dropdown.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select to include Post Title, Post Content, Image Caption, and Image description as you need for the Portfolio type." from the dropdown.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Publish" or "Update".', 'canuck' ) . '</li>';
	echo '</ol>';
	echo '<p>' . esc_html__( 'Recommendations for Portfolio types are shown below: ', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li><strong>' . esc_html__( 'fullwidth: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Fullwidth image and either post title and content or image caption and description, layouts recommended: left sidebar, right sidebar or both sidebars.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Classic 1 column: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Image on the left, post title and content on the right, image caption and description optionally on the bottom, layouts recommended: all.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Classic 2 columns: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Two columns with image and either post title and content or image caption and description, layouts recommended: all.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Classic 3 columns: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Three columns with image and either post title and content or image caption and description, layouts recommended: all.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Classic 4 columns: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Four columns with image and either post title and content or image caption and description, layouts recommended: all.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Grid 2 columns: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Two columns with image and overlay of caption and description, layouts recommended: all.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Grid 3 columns: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Three columns with image and overlay of caption and description, layouts recommended: left sidebar, right sidebar, fullwidth.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Grid 4 columns: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Four columns with image and either post title and content or image caption and description, layouts recommended: fullwidth.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Grid 5 columns: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Five columns with image and either post title and content or image caption and description, layouts recommended: fullwidth.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Masonry Gallery Page', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'You can set up as many Masonry Gallery Pages as you want. ', 'canuck' ) .
				esc_html__( 'A Masonry Gallery Page is essentially a collection of images with a Image Number and a PinIt link(if set up).', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Page->Add New" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Fill in your title.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Use the "Add Media" button to set up your gallery using the same method as you would for setting up a gallery in a post.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Fill in your content.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Masonry Gallery" from the Template dropdown.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Publish" or "Update".', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Colors', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'A little customization of theme colors is allowed here. ', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Go to Appearance->Customize->Colors tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Header Text Color: Set the color of the text that overlays your image used for the Static Home page or the Blog Page.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Background Color - Set the background color for the header, title area, and main content areas of all pages except the static home page.', 'canuck' ) .
				esc_html__( 'Please remember that you can not change text or hover colors, so use a light background..', 'canuck' ) . '</li>';
	echo '</ol>';
}

/**
 * Canuck Theme Page Callback
 *
 * Used for displaying the theme page data.
 */
function canuck_homepage_setup_callback() {
	echo '<h2>Home Page Setup</h2>';
	echo '<p>' . esc_html__( 'Canuck offers an extensive Home Page Builder so you can build a great looking Landing Page for your website. ', 'canuck' ) .
				esc_html__( 'There are a total of 13 sections that you can choose from to build your Home Page. ', 'canuck' ) .
				esc_html__( 'I will cover each section in detail, it really is not that hard, just work through it for a great Landing Page. ', 'canuck' ) . '</p>';

	echo '<h3>' . esc_html__( 'Initial Setup', 'canuck' ) . '</h3>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select the "Page->Add New" tab.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Fill in your title, note that the title is only used for a permalink.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Home Page" from the Template dropdown.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Click "Publish" or "Update".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Go to "appearance->Customize".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Seelect "Static Front Page".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select "Front Page Displays->A static page".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Select the page you just created from the "Front Page" dropdown.', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'The Posts Page can be any page as the "post page" dropdown selection is by passed.".', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Home Feature Options', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'This section is essentially the same as the Blog Feature section so I will not provide details. ', 'canuck' ) .
				esc_html__( 'You can select a slider, image, widget(allows videos) or no feature. ', 'canuck' ) .
				esc_html__( 'The slider is populates as discussed at the start of the Detailed Setup tab. ', 'canuck' ) . '</p>';

	echo '<h3>' . esc_html__( 'Section Layout Options', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'There are 13 sections you can use and 13 areas stacked on top of each other. ', 'canuck' ) .
				esc_html__( 'You can select any Section to appear in any stacked area on your page. ', 'canuck' ) .
				esc_html__( 'You could even display the same section 13 times all stacked on top of each other, though I would not do that. ', 'canuck' ) . '</p>';

	echo '<h3>' . esc_html__( 'Common Options for all Sections ', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'There are common options for all sections. ', 'canuck' ) .
				esc_html__( 'You can select a color background and opacity for all sections or you can use an image background.', 'canuck' ) .
				esc_html__( 'Because you can change the background you can also change text color to better show on the background you want to use.', 'canuck' ) .
				esc_html__( 'Look for the following options in each section: ', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li><strong>' . esc_html__( 'Section X-Background Image: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Upload and insert an image if you want to use an image as a background', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section X-Overlay Opacity: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Drag this slidebar to select a overlay opacity to darken the image.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section X-Use Parallax: ', 'canuck' ) . '</strong>' .
						esc_html__( 'If you use an image you can use a parallax effect which causes the image to scroll slower then the section, very cool.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section X-Background Color: ', 'canuck' ) . '</strong>' .
						esc_html__( 'If you do not use an image, select a color for the background.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section X-Background Color Opacity: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Select the opacity of the background, a great option if you have set a background image under the main "Background Image" tab.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Link Buttons ', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'There are links in the form of buttons in many of the sections. ', 'canuck' ) .
				esc_html__( 'Styling these buttions are set up as options because of the custom backgrounds.', 'canuck' ) .
				esc_html__( 'You can select colors for the background color and text color and for the background hover color and text hover color.', 'canuck' ) . '</p>';

	echo '<h3>' . esc_html__( 'Section 1, 3, 5, and 7', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'All of these sections are the same, so I will cover them all as Section 1. ', 'canuck' ) .
				esc_html__( 'These sections are essentially a blank HTML canvas, allowing input in a one column presentation. ', 'canuck' ) . '</p>';

	echo '<h4>' . esc_html__( 'Useage: Normal', 'canuck' ) . '</h4>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select "Section 1-Useage Options->normal".', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 1-Content: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Insert your content note, that HTML is allowed.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 1-Link: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Check this box to use a link', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 1-Button Label: ', 'canuck' ) . '</strong>' .
						esc_html__( 'You can add HTML to the button label, allowingv the use of Fontawesome icons, see the Format suggested.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 1-Button URI: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Enter the link you want to use.', 'canuck' ) . '</li>';
	echo '</ol>';
	echo '<h4>' . esc_html__( 'Useage: Shortcode', 'canuck' ) . '</h4>';
	echo '<p>' . esc_html__( 'If you have a plugin that uses shortcodes you can use that shortcode instead of normal content. ', 'canuck' ) .
				esc_html__( 'This may come in handy for things like testimonials.', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select "Section 1-Useage Options->shortcode".', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 1-Shortcode: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Insert your shortcode in this text box.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Note that the button and link options do not apply for this useage option.', 'canuck' ) . '</strong></li>';
	echo '</ol>';
	echo '<h4>' . esc_html__( 'Useage: Widget', 'canuck' ) . '</h4>';
	echo '<p>' . esc_html__( 'You can also use a widget in this area. ', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li>' . esc_html__( 'Select "Section 1-Useage Options->widgetized".', 'canuck' ) . '</li>';
	echo '<li>' . esc_html__( 'Go to "Appearance->Widgets" and drag the widget over to the appropriate Section widget container, "Home Page Section 1" in this case.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Section 2', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'This section contains 3 service boxes.', 'canuck' ) .
				esc_html__( 'Each service box can contain an image, title, html or text content and a link. ', 'canuck' ) .
				esc_html__( 'You can either attach the link to the image or a button. ', 'canuck' ) .
				esc_html__( 'Note that it is best to set up all three service boxes the same. ', 'canuck' ) .
				esc_html__( 'I will cover the setup for Section-2-Box 1 or service box 1. ', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li><strong>' . esc_html__( 'Section 2-Box-1-Font Icon: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Check to use a font Awesome icon instead of an image.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 2-Box-1-Font Icon Code: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Select the font icon you want from the dropdown list.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 2-Box-1-Image: ', 'canuck' ) . '</strong>' .
						esc_html__( 'If you want to use an image upload it here. ', 'canuck' ) .
						esc_html__( 'Image size recommended is ~300px wide. ', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 2-Box-1-Content: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Enter the box content, HTML is allowed if you want to use it.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 2-Box-1-Link: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Check this box if you want to add a link.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 2-Box-1-Link URL: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Enter the link URL here.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 2-Box-1-Link Label: ', 'canuck' ) . '</strong>' .
						esc_html__( 'You can add HTML to the button label, allowingv the use of Fontawesome icons, see the Format suggested.', 'canuck' ) .
						esc_html__( 'Leave this blank if you want to link to the image or Font Awesome Icon.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Section 4 and 6', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'Sections 4 and 6 contains 2 service boxes.', 'canuck' ) .
				esc_html__( 'Each of these Service boxes follow the same setup procedures as the service boxes in Section 2. ', 'canuck' ) .
				esc_html__( 'I will therefore not cover them in detail. ', 'canuck' ) . '</p>';

	echo '<h3>' . esc_html__( 'Section 8', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'Section 8 contains 4 service boxes.', 'canuck' ) .
				esc_html__( 'Each of these Service boxes follow the same setup procedures as the service boxes in Section 2. ', 'canuck' ) .
				esc_html__( 'I will therefore not cover them in detail. ', 'canuck' ) . '</p>';

	echo '<h3>' . esc_html__( 'Section 9', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'Section 9 contains a title, description and portfolio.', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li><strong>' . esc_html__( 'Section 9-Title: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Enter the title, html is allowed but you do not have to use it.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 9-Content: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Enter the text of html content here.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 9-Portfolio Category: ', 'canuck' ) . '</strong>' .
						esc_html__( 'This section uses featured posts for populating the portfolio just like we used featured posts to populate the slider, see the detailed Setup section. ', 'canuck' ) .
						esc_html__( 'Make sure your featured posts are set up under a specific category. ', 'canuck' ) .
						esc_html__( 'When you set up the featured images in the Featured posts make sure the image caption and description are filled out. They are used on the image hover. ', 'canuck' ) .
						esc_html__( 'Also when setting up the post, set either a link to the post or a custom link. ', 'canuck' ) .
						esc_html__( 'With all this done select the category you used from the dropdown list.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 9-Portfolio Columns: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Select 3 or 4 columns from the dropdown.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Section 10 and 11', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'Section 10 and 11 contain a media section on one side and a content area on the other side.', 'canuck' ) . '</p>';
	echo '<ol>';
	echo '<li><strong>' . esc_html__( 'Section 10 Media Area Useage: ', 'canuck' ) . '</strong>' .
						esc_html__( 'You can select an image, or a shortcode, or a widget, just like the useage options discussed in Section 1.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 10-Image: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Upload an image or select from the Media Library.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 10-Shortcode: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Enter the shortcode here if using the shortcode useage option. ', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 10-Title: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Enter the title, html is allowed but you do not have to use it.', 'canuck' ) . '</li>';
	echo '<li><strong>' . esc_html__( 'Section 10-Content: ', 'canuck' ) . '</strong>' .
						esc_html__( 'Enter the text of html content here.', 'canuck' ) . '</li>';
	echo '</ol>';

	echo '<h3>' . esc_html__( 'Section 12 and 13', 'canuck' ) . '</h3>';
	echo '<p>' . esc_html__( 'Section 12 and 13 are portfolio carousels, one is medium sized, the other is small sized. ', 'canuck' ) .
				esc_html__( 'The medium one is designed as an optional portfolio display, and the small one designed as more of a customer hero carousel. ', 'canuck' ) .
				esc_html__( 'Both of these sections follow the same setup as Section 9, however, only a link is used in the overlay on Section 13.', 'canuck' ) . '</p>';
}

