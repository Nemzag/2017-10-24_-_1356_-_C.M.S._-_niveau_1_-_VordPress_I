<?php // phpcs:ignore WordPress.Files.FileName.InvalidClassFileName
/**
 * Canuck Theme Customizer.
 * This file sets up the options for the theme.
 *
 * @package   Canuck WordPress Theme
 * @copyright Copyright (C) 2017-2019, kevinhaig
 * @license   GPLv2 or later http://www.gnu.org/licenses/quick-guide-gplv2.html
 * @author    kevinhaig <kevinsspace.ca/contact/>
 * Canuck is distributed under the terms of the GNU GPL.
 */

/**
 * PANEL and SECTION ARRAY
 *
 * This function contains the array that is used to set up the panels and sub panels.
 */
function canuck_get_customizer_groups() {
	$groups = array(
		'canuck_general' => array(
			'name'        => 'canuck_general',
			'title'       => esc_html__( 'Canuck General', 'canuck' ),
			'description' => '',
			'priority'    => 1,
			'sections'    => array(
				'general_misc_options'     => array(
					'name'        => 'general_misc_options',
					'title'       => esc_html__( 'Miscelaneous Options', 'canuck' ),
					'description' => esc_html__( 'Miscelaneous Options for the Canuck Theme.', 'canuck' ),
					'priority'    => 1,
				),
				'general_backup_options'   => array(
					'name'        => 'general_backup_options',
					'title'       => esc_html__( 'Backup Options', 'canuck' ),
					'description' => esc_html__( 'Backup options to a private page accessible with the password:Canuck.', 'canuck' ),
					'priority'    => 2,
				),
				'general_category_exclude' => array(
					'name'        => 'general_category_exclude',
					'title'       => esc_html__( 'Exclude Categories', 'canuck' ),
					'description' => esc_html__( 'Exclude Categories from posts and lists', 'canuck' ),
					'priority'    => 3,
				),
				'general_flex'             => array(
					'name'        => 'general_flex',
					'title'       => esc_html__( 'Flex Slider Options', 'canuck' ),
					'description' => '',
					'priority'    => 4,
				),
				'general_jquery'           => array(
					'name'        => 'general_jquery',
					'title'       => esc_html__( 'jQuery Options', 'canuck' ),
					'description' => '',
					'priority'    => 5,
				),
			),
		),
		'canuck_layouts' => array(
			'name'        => 'canuck_layouts',
			'title'       => esc_html__( 'Canuck Layouts', 'canuck' ),
			'description' => '',
			'priority'    => 2,
			'sections'    => array(
				'layouts_general'  => array(
					'name'        => 'layouts_general',
					'title'       => esc_html__( 'General Layout Options', 'canuck' ),
					'description' => '',
					'priority'    => 1,
				),
				'layouts_index'    => array(
					'name'        => 'layouts_index',
					'title'       => esc_html__( 'Default Page Setup', 'canuck' ),
					'description' => '',
					'priority'    => 2,
				),
				'layouts_author'   => array(
					'name'        => 'layouts_author',
					'title'       => esc_html__( 'Author Page Setup', 'canuck' ),
					'description' => '',
					'priority'    => 3,
				),
				'layouts_category' => array(
					'name'        => 'layouts_category',
					'title'       => esc_html__( 'Category Page Setup', 'canuck' ),
					'description' => '',
					'priority'    => 4,
				),
				'layouts_date'     => array(
					'name'        => 'layouts_date',
					'title'       => esc_html__( 'Date Page Setup', 'canuck' ),
					'description' => '',
					'priority'    => 5,
				),
				'layouts_search'   => array(
					'name'        => 'layouts_search',
					'title'       => esc_html__( 'Search Page Setup', 'canuck' ),
					'description' => '',
					'priority'    => 6,
				),
				'layouts_single'   => array(
					'name'        => 'layouts_single',
					'title'       => esc_html__( 'Single Page Setup', 'canuck' ),
					'description' => '',
					'priority'    => 7,
				),
				'layouts_tag'      => array(
					'name'        => 'layouts_tag',
					'title'       => esc_html__( 'Tag Page Setup', 'canuck' ),
					'description' => '',
					'priority'    => 8,
				),
				'layouts_404'      => array(
					'name'        => 'layouts_404',
					'title'       => esc_html__( 'Error Page Setup', 'canuck' ),
					'description' => '',
					'priority'    => 9,
				),
			),
		),
		'canuck_header'  => array(
			'name'        => 'canuck_header',
			'title'       => esc_html__( 'Canuck Headers', 'canuck' ),
			'description' => '',
			'priority'    => 3,
			'sections'    => array(
				'image_header'  => array(
					'name'        => 'image_header',
					'title'       => esc_html__( 'Image background options', 'canuck' ),
					'description' => esc_html__( 'These options will be used when you are using a header image in your blog or in your home page.', 'canuck' ) .
									esc_html__( 'The options are applied to the menu and logo that overlay the image.', 'canuck' ),
					'priority'    => 1,
				),
				'contact_strip' => array(
					'name'        => 'contact_strip',
					'title'       => esc_html__( 'Contact Information', 'canuck' ),
					'description' => esc_html__( 'This information will appear in the top header strip on the left hand side.', 'canuck' ),
					'priority'    => 2,
				),
			),
		),
		'canuck_footer'  => array(
			'name'        => 'canuck_footer',
			'title'       => esc_html__( 'Canuck Footer', 'canuck' ),
			'description' => '',
			'priority'    => 4,
			'sections'    => array(
				'footer_footer'    => array(
					'name'        => 'footer_footer',
					'title'       => esc_html__( 'Footer Options', 'canuck' ),
					'description' => '',
					'priority'    => 1,
				),
				'footer_copyright' => array(
					'name'        => 'footer_copyright',
					'title'       => esc_html__( 'Copyright Strip Options', 'canuck' ),
					'description' => '',
					'priority'    => 2,
				),
			),
		),
		'canuck_styles'  => array(
			'name'        => 'canuck_styles',
			'title'       => esc_html__( 'Canuck Styles', 'canuck' ),
			'description' => '',
			'priority'    => 5,
			'sections'    => array(
				'styles_general' => array(
					'name'        => 'styles_general',
					'title'       => esc_html__( 'Canuck: General Styles', 'canuck' ),
					'description' => esc_html__( 'General style changes', 'canuck' ),
					'priority'    => 1,
				),
			),
		),
		'canuck_blog'    => array(
			'name'        => 'canuck_blog',
			'title'       => esc_html__( 'Canuck Blog', 'canuck' ),
			'description' => '',
			'priority'    => 6,
			'sections'    => array(
				'blog_general' => array(
					'name'        => 'blog_general',
					'title'       => esc_html__( 'General Blog Options', 'canuck' ),
					'description' => '',
					'priority'    => 1,
				),
				'blog_posts'   => array(
					'name'        => 'blog_posts',
					'title'       => esc_html__( 'Post Options', 'canuck' ),
					'description' => '',
					'priority'    => 2,
				),
			),
		),
		'canuck_home'    => array(
			'name'        => 'canuck_home',
			'title'       => esc_html__( 'Canuck Home Page', 'canuck' ),
			'description' => esc_html__( 'Build a landing page with these options. ', 'canuck' ) .
							esc_html__( 'These options only apply when you create a new page and set Template = Home Page found in the page setup section.', 'canuck' ),
			'priority'    => 7,
			'sections'    => array(
				'home_one'        => array(
					'name'        => 'home_one',
					'title'       => esc_html__( 'Home Feature Options', 'canuck' ),
					'description' => esc_html__( 'You can add a feature slider or image to your home page.', 'canuck' ),
					'priority'    => 1,
				),
				'home_layout'     => array(
					'name'        => 'home_layout',
					'title'       => esc_html__( 'Home Layout Options', 'canuck' ),
					'description' => esc_html__( 'You can use any Section you want and stack them in any order you want.', 'canuck' ),
					'priority'    => 1,
				),
				'home_section_1'  => array(
					'name'        => 'home_section_1',
					'title'       => esc_html__( 'Sec 1 Text/Shortcode/Widget', 'canuck' ),
					'description' => esc_html__( 'Section 1 contains html text and an optional button, plus an optional shortcode or widget.', 'canuck' ),
					'priority'    => 2,
				),
				'home_section_2'  => array(
					'name'        => 'home_section_2',
					'title'       => esc_html__( 'Sec 2 Three Service Boxes', 'canuck' ),
					'description' => esc_html__( 'Section 2 contains 3 service boxes, allowing an image,title,html text,and a button.', 'canuck' ),
					'priority'    => 3,
				),
				'home_section_3'  => array(
					'name'        => 'home_section_3',
					'title'       => esc_html__( 'Sec 3 Text/Shortcode/Widget', 'canuck' ),
					'description' => esc_html__( 'Section 3 contains html text and an optional button, plus an optional shortcode or widget.', 'canuck' ),
					'priority'    => 4,
				),
				'home_section_4'  => array(
					'name'        => 'home_section_4',
					'title'       => esc_html__( 'Sec 4 Two Service Boxes', 'canuck' ),
					'description' => esc_html__( 'Section 4 contains 2 service boxes, allowing an image,title,html text,and a button.', 'canuck' ),
					'priority'    => 5,
				),
				'home_section_5'  => array(
					'name'        => 'home_section_5',
					'title'       => esc_html__( 'Sec 5 Text/Shortcode/Widget', 'canuck' ),
					'description' => esc_html__( 'Section 5 contains html text and an optional button, plus an optional shortcode or widget.', 'canuck' ),
					'priority'    => 6,
				),
				'home_section_6'  => array(
					'name'        => 'home_section_6',
					'title'       => esc_html__( 'Sec 6 Two Service Boxes', 'canuck' ),
					'description' => esc_html__( 'Section 6 contains 2 service boxes, allowing an image,title,html text,and a button.', 'canuck' ),
					'priority'    => 7,
				),
				'home_section_7'  => array(
					'name'        => 'home_section_7',
					'title'       => esc_html__( 'Sec 7 Text/Shortcode/Widget', 'canuck' ),
					'description' => esc_html__( 'Section 7 contains html text and an optional button, plus an optional shortcode or widget.', 'canuck' ),
					'priority'    => 8,
				),
				'home_section_8'  => array(
					'name'        => 'home_section_8',
					'title'       => esc_html__( 'Sec 8 Four Service Boxes', 'canuck' ),
					'description' => esc_html__( 'Section contains 4 service boxes, allowing an image,title,html text,and a button.', 'canuck' ),
					'priority'    => 9,
				),
				'home_section_9'  => array(
					'name'        => 'home_section_9',
					'title'       => esc_html__( 'Sec 9 Portfolio', 'canuck' ),
					'description' => esc_html__( 'This section contains a simplified portfolio.', 'canuck' ) . ' ' .
									esc_html__( 'The portfolio is simply an image with a link to the featured post or a custom page.', 'canuck' ) . ' ' .
									esc_html__( 'Set up featured posts with the category selected.', 'canuck' ) . ' ' .
									esc_html__( 'Make sure to fill out Image Caption and Description as they show on the hover effect.', 'canuck' ),
					'priority'    => 10,
				),
				'home_section_10' => array(
					'name'        => 'home_section_10',
					'title'       => esc_html__( 'Sec 10 Media/Content', 'canuck' ),
					'description' => esc_html__( 'Section contains a media area on the left half, title, text and button on the right half.', 'canuck' ),
					'priority'    => 11,
				),
				'home_section_11' => array(
					'name'        => 'home_section_11',
					'title'       => esc_html__( 'Sec 11 Content/Media', 'canuck' ),
					'description' => esc_html__( 'Section contains title, text, button on left half, media area on right half', 'canuck' ),
					'priority'    => 12,
				),
				'home_section_12' => array(
					'name'        => 'home_section_12',
					'title'       => esc_html__( 'Sec 12 Medium Portfolio Carousel', 'canuck' ),
					'description' => esc_html__( 'Section contains title, text, medium sized carousel.', 'canuck' ),
					'priority'    => 13,
				),
				'home_section_13' => array(
					'name'        => 'home_section_13',
					'title'       => esc_html__( 'Sec 13 Small Portfolio Carousel', 'canuck' ),
					'description' => esc_html__( 'Section contains title, text, small sized carousel.', 'canuck' ),
					'priority'    => 14,
				),
			),
		),
	);
	return apply_filters( 'canuck_get_customizer_groups', $groups );
}

/**
 * OPTIONS ARRAY.
 *
 * This function sets up the array with the option parameters.
 *
 * format:
 *
 * 'option_id' => array(
 *    'name'         => 'canuck_id',// keep the name the same as the option key. ALL OPTION NAMES MUST BE UNIQUE
 *    'title'        => esc_html__( 'Title of Option' ,'text domain' ),// title to show in option
 *    'option_type'  => 'text', // text, textarea, checkbox, radio, select, range, image, color, upload, scat, stag, mcat
 *                              // scat-single category dropdown, stag-single tag drop down, mcat-multiple category checkbox
 *    'setting_type' => 'theme_mod',  //theme_mod->saves to theme options table called theme_mods_canuck[]
 *                                    //  ->will have to be re-entered for child theme
 *    'description'  => esc_html__("Description of option", 'canuck' ), //additional documentation for option
 *    'section'      => 'panel1_section1', //panel you want the option to appear under
 *    'priority'     => 1, // order within the section that the option is displayed
 *    'default'      => '', // sane default, what default do you want to use if the user does not update this option
 *    'transport'    => 'refresh', // refresh-> page must be reloaded to use the option
 *                                 // postMessage-> you have custom Javascript to instantly update the preview window
 *    'sanitize'     => 'is_email' // sanitize callback function you want to use, see recommended below
 *                               // checkbox=>wp_validate_boolean,
 *                               // text(email) => is_email,text(nohtml)=>sanitize_text_field,
 *                               // text(html allowed)=>wp_kses_post,text(link) => esc_url_raw,
 *                               // textarea(no html allowed)=>esc_html,textarea(html allowed)=> wp_kses_post
 *                               // radio=>sanitize_text_field,select=>sanitize_text_field,
 *                               // image=>esc_url_raw,upload=>esc_url_raw,
 *                               // range=>sanitize_text_field,color=>sanitize_hex_color,
 *                               // scat=>sanitize_text_field,stag=>sanitize_text_field
 * ),
 *
 * For select and radio lists and the range slider there is a choices array to also set up, see the defaults below.
 *
 * NOTE: Panel 1 Section 1 contains a comlete set of option examples available for this script
 * Simply cut and paste to add the option of your choice
 */
function canuck_get_customizer_option_partameters() {
	// First get the color scheme to allow defaults button hovers.
	$color_scheme = get_theme_mod( 'canuck_color_scheme', 'gray_pink' );
	if ( 'gray-green' === $color_scheme ) {
		$button_hover_default = '#19c143';
	} elseif ( 'gray-red' === $color_scheme ) {
		$button_hover_default = '#f20202';
	} elseif ( 'gray-blue' === $color_scheme ) {
		$button_hover_default = '#16aee5';
	} else {
		$button_hover_default = '#ed1651';
	}
	$options = array(
		// Panel:canuck_general Section:general_misc_options.
		'canuck_include_pinit'                           => array(
			'name'        => 'canuck_include_pinit',
			'title'       => esc_html__( 'Include Pinterest PinIt', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'If checked a Pinterest Pinit button will show on portfolio based and masonry galleries.', 'canuck' ),
			'section'     => 'general_misc_options',
			'priority'    => 1,
			'default'     => 0, // Leave as 1.
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:themeslug_intro Section:intro_intro.
		'canuck_backup_options_to_post'                  => array(
			'name'        => 'canuck_backup_options_to_post',
			'title'       => esc_html__( 'Backup Canuck Option Content', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Canuck options contains significant content creation.', 'canuck' ) . ' ' .
							esc_html__( 'Content creation is in the options that require some form of text input.', 'canuck' ) . ' ' .
							esc_html__( 'Select the checkbox above to save your content to a Private page, available only to users signed in with admin privledges.', 'canuck' ) . ' ' .
							esc_html__( 'You will then be able to access this content while setting up a different theme. ', 'canuck' ) . '<br/><br/>' .
							'<span style="color:red">' . esc_html__( 'If the box is checked , the page will be updated each time a Customize save is completed. ', 'canuck' ) .
							esc_html__( 'You can optionally check the box and Save, then un-check the box and save to update the page one time. ', 'canuck' ) . '</span>',
			'section'     => 'general_backup_options',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:canuck_general Section:general_category_exclude.
		'canuck_exclude_categories'                      => array(
			'name'        => 'canuck_exclude_categories',
			'title'       => esc_html__( 'Exclude Category IDs', 'canuck' ),
			'option_type' => 'mcat',
			'description' => esc_html__( 'Check category ids to exclude from posts and lists.', 'canuck' ),
			'section'     => 'general_category_exclude',
			'priority'    => 1,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		// Panel:canuck_general Section:general_flex.
		'canuck_flex_slider_auto'                        => array(
			'name'        => 'canuck_flex_slider_auto',
			'title'       => esc_html__( 'Feature Slider Auto Mode', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'If checked the slider will start automatically.', 'canuck' ),
			'section'     => 'general_flex',
			'priority'    => 1,
			'default'     => 1, // Leave as 1.
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_flex_slider_effect'                      => array(
			'name'        => 'canuck_flex_slider_effect',
			'title'       => esc_html__( 'Feature Slider Transition Effect', 'canuck' ),
			'option_type' => 'select',
			'choices'     => array(
				'slide' => esc_html__( 'Slide', 'canuck' ),
				'fade'  => esc_html__( 'Fade', 'canuck' ),
			),
			'description' => esc_html__( 'Use either a slide or fade to switch slides.', 'canuck' ),
			'section'     => 'general_flex',
			'priority'    => 2,
			'default'     => 'fade',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_flex_effect',
		),
		'canuck_flex_slider_pause'                       => array(
			'name'        => 'canuck_flex_slider_pause',
			'title'       => esc_html__( 'Feature Slider Pause Time', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_flex_slider_pause_choices(),
			'description' => esc_html__( 'How long before the slide changes in milliseconds.', 'canuck' ),
			'section'     => 'general_flex',
			'priority'    => 3,
			'default'     => '5000',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_flex_pause',
		),
		'canuck_flex_slider_trans'                       => array(
			'name'        => 'canuck_flex_slider_trans',
			'title'       => esc_html__( 'Feature Slider Transition Time', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_flex_slider_transition_choices(),
			'description' => esc_html__( 'How long for the slide to switch from start of change to end of change in milliseconds.', 'canuck' ),
			'section'     => 'general_flex',
			'priority'    => 4,
			'default'     => '600',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_flex_trans',
		),
		'canuck_flex_gallery_auto'                       => array(
			'name'        => 'canuck_flex_gallery_auto',
			'title'       => esc_html__( 'Gallery Slider Auto Mode', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'If checked the slider will start automatically.', 'canuck' ),
			'section'     => 'general_flex',
			'priority'    => 5,
			'default'     => 0, // Leave as 0.
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_flex_gallery_effect'                     => array(
			'name'        => 'canuck_flex_gallery_effect',
			'title'       => esc_html__( 'Gallery Slider Transition Effect', 'canuck' ),
			'option_type' => 'select',
			'choices'     => array(
				'slide' => esc_html__( 'Slide', 'canuck' ),
				'fade'  => esc_html__( 'Fade', 'canuck' ),
			),
			'description' => esc_html__( 'Use either a slide or fade to switch slides.', 'canuck' ),
			'section'     => 'general_flex',
			'priority'    => 6,
			'default'     => 'fade',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_flex_effect',
		),
		'canuck_flex_gallery_pause'                      => array(
			'name'        => 'canuck_flex_gallery_pause',
			'title'       => esc_html__( 'Gallery Slider Pause Time', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_flex_slider_pause_choices(),
			'description' => esc_html__( 'How long before the slide changes in milliseconds.', 'canuck' ),
			'section'     => 'general_flex',
			'priority'    => 7,
			'default'     => '5000',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_flex_pause',
		),
		'canuck_flex_gallery_trans'                      => array(
			'name'        => 'canuck_flex_gallery_trans',
			'title'       => esc_html__( 'Gallery Slider Transition Time', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_flex_slider_transition_choices(),
			'description' => esc_html__( 'How long for the slide to switch from start of change to end of change in milliseconds.', 'canuck' ),
			'section'     => 'general_flex',
			'priority'    => 8,
			'default'     => '600',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_flex_trans',
		),
		'canuck_disable_widget_slider'                   => array(
			'name'        => 'canuck_disable_widget_slider',
			'title'       => esc_html__( 'Disable the widget flex slider', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'If users do not want to use the widget slider, check this box.', 'canuck' ),
			'section'     => 'general_flex',
			'priority'    => 9,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:canuck_general Section:general_jquery.
		'canuck_disable_colorboxjs'                      => array(
			'name'        => 'canuck_disable_colorboxjs',
			'title'       => esc_html__( 'Disable colorbox.js plugin', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'colorbox.js is a javascript image plugin', 'canuck' ),
			'section'     => 'general_jquery',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_disable_fitvidsjs'                       => array(
			'name'        => 'canuck_disable_fitvidsjs',
			'title'       => esc_html__( 'Disable fitvids.js plugin', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'fitvids.js is the responsive video javascript plugin', 'canuck' ),
			'section'     => 'general_jquery',
			'priority'    => 3,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_disable_smoothscroll'                    => array(
			'name'        => 'canuck_disable_smoothscroll',
			'title'       => esc_html__( 'Disable smooth scroll js script', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Click to disable this feature', 'canuck' ),
			'section'     => 'general_jquery',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_use_lazyload'                            => array(
			'name'        => 'canuck_use_lazyload',
			'title'       => esc_html__( 'Use lazyload.js plugin', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Click to use this feature. ', 'canuck' ) .
							esc_html__( 'Lazy load delays loading of off screen images and improves page speed.', 'canuck' ),
			'section'     => 'general_jquery',
			'priority'    => 5,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_disable_scrollreveal'                    => array(
			'name'        => 'canuck_disable_scrollreveal',
			'title'       => esc_html__( 'Disable scrollreveal.js plugin', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Click to disable this feature. ', 'canuck' ) .
							esc_html__( 'Scroll Reveal is used for home page section animation.', 'canuck' ),
			'section'     => 'general_jquery',
			'priority'    => 6,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:canuck_layouts Section:layouts_general.
		'canuck_breadcrumbs'                             => array(
			'name'        => 'canuck_breadcrumbs',
			'title'       => esc_html__( 'Include Breadcrumbs', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'To use breadcrumbs you must install a plugin called "Breadcrumb Trail" by Justin Tadlock.', 'canuck' ),
			'section'     => 'layouts_general',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_use_feature'                             => array(
			'name'        => 'canuck_use_feature',
			'title'       => esc_html__( 'Include Feature Images', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Include feature images on archive, author, category, search, and tag pages.', 'canuck' ),
			'section'     => 'layouts_general',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		// Panel:canuck_layouts Section:layouts_index.
		'canuck_index_layout'                            => array(
			'name'        => 'canuck_index_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck' ),
			'option_type' => 'radio_image',
			'choices'     => canuck_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck' ),
			'section'     => 'layouts_index',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_layout',
		),
		'canuck_index_title'                             => array(
			'name'        => 'canuck_index_title',
			'title'       => esc_html__( 'Disable Title', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to remove the title', 'canuck' ),
			'section'     => 'layouts_index',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:canuck_layouts Section:layouts_author.
		'canuck_author_layout'                           => array(
			'name'        => 'canuck_author_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck' ),
			'option_type' => 'radio_image',
			'choices'     => canuck_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck' ),
			'section'     => 'layouts_author',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_layout',
		),
		'canuck_include_author_bio'                      => array(
			'name'        => 'canuck_include_author_bio',
			'title'       => esc_html__( 'Include author bio', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check this include author avatar and bio', 'canuck' ),
			'section'     => 'layouts_author',
			'priority'    => 3,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:canuck_layouts Section:layouts_category.
		'canuck_category_layout'                         => array(
			'name'        => 'canuck_category_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck' ),
			'option_type' => 'radio_image',
			'choices'     => canuck_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck' ),
			'section'     => 'layouts_category',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_layout',
		),
		// Panel:canuck_layouts Section:layouts_date.
		'canuck_date_layout'                             => array(
			'name'        => 'canuck_date_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck' ),
			'option_type' => 'radio_image',
			'choices'     => canuck_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck' ),
			'section'     => 'layouts_date',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_layout',
		),
		// Panel:canuck_layouts Section:layouts_search.
		'canuck_search_layout'                           => array(
			'name'        => 'canuck_search_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck' ),
			'option_type' => 'radio_image',
			'choices'     => canuck_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck' ),
			'section'     => 'layouts_search',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_layout',
		),
		// Panel:canuck_layouts Section:layouts_single.
		'canuck_single_post_layout'                      => array(
			'name'        => 'canuck_single_post_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck' ),
			'option_type' => 'radio_image',
			'choices'     => canuck_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck' ),
			'section'     => 'layouts_single',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_layout',
		),
		'canuck_single_title'                            => array(
			'name'        => 'canuck_single_title',
			'title'       => esc_html__( 'Disable Title', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to remove the title', 'canuck' ),
			'section'     => 'layouts_single',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_single_sidebar_a'                        => array(
			'name'        => 'canuck_single_sidebar_a',
			'title'       => esc_html__( 'Sidebar A', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_sidebar_choices(),
			'description' => esc_html__( 'select the widget panel you want to use', 'canuck' ),
			'section'     => 'layouts_single',
			'priority'    => 3,
			'default'     => 'blog-a',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_select',
		),
		'canuck_single_sidebar_b'                        => array(
			'name'        => 'canuck_single_sidebar_b',
			'title'       => esc_html__( 'Sidebar B', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_sidebar_choices(),
			'description' => esc_html__( 'select the widget panel you want to use', 'canuck' ),
			'section'     => 'layouts_single',
			'priority'    => 4,
			'default'     => 'blog-b',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_select',
		),
		// Panel:canuck_layouts Section:layouts_tag.
		'canuck_tag_layout'                              => array(
			'name'        => 'canuck_tag_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck' ),
			'option_type' => 'radio_image',
			'choices'     => canuck_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck' ),
			'section'     => 'layouts_tag',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_layout',
		),
		// Panel:canuck_layouts Section:layouts_error.
		'canuck_404_layout'                              => array(
			'name'        => 'canuck_404_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck' ),
			'option_type' => 'radio_image',
			'choices'     => canuck_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck' ),
			'section'     => 'layouts_404',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_layout',
		),
		// Panel:canuck_header Section: image_header.
		'canuck_image_header_background_color'           => array(
			'name'        => 'canuck_image_header_background_color',
			'title'       => esc_html__( 'Header Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Used for the header overlay when a background image is used in the blog or home page.', 'canuck' ),
			'section'     => 'image_header',
			'priority'    => 1,
			'default'     => '#000000',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_image_header_background_opacity'         => array(
			'name'        => 'canuck_image_header_background_opacity',
			'title'       => esc_html__( 'Header Background Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the menu area background image.', 'canuck' ),
			'section'     => 'image_header',
			'priority'    => 2,
			'default'     => 0.5,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_image_header_logo'                       => array(
			'name'        => 'canuck_image_header_logo',
			'title'       => esc_html__( 'Logo to overlay image backgrounds', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'This logo will be used to overlay image backgrounds, if used on the home page and/or blog page. ', 'canuck' ) .
							esc_html__( 'If blank the logo set up in the "Site Identity" panel will be used. ', 'canuck' ) .
							esc_html__( 'Keep the logo less than 230px wide and 100px high.', 'canuck' ),
			'section'     => 'image_header',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		// Panel:canuck_header Section: image_header.
		'canuck_contact_hours'                           => array(
			'name'        => 'canuck_contact_hours',
			'title'       => esc_html__( 'Hours of Operation', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'No HTML allowed, suggest : M-F, 9-5', 'canuck' ),
			'section'     => 'contact_strip',
			'priority'    => 1,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_contact_phone'                           => array(
			'name'        => 'canuck_contact_phone',
			'title'       => esc_html__( 'Phone Number', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'No HTML allowed, Suggest : 1-800-123-4567', 'canuck' ),
			'section'     => 'contact_strip',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_contact_page'                            => array(
			'name'        => 'canuck_contact_page',
			'title'       => esc_html__( 'Contact Page Link', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Create a contact page and provide the link here.', 'canuck' ),
			'section'     => 'contact_strip',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		// Panel:canuck_footer Section:footer_footer.
		'canuck_show_footer_top_strip'                   => array(
			'name'        => 'canuck_show_footer_top_strip',
			'title'       => esc_html__( 'Show Contact/Social strip in footer', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'This strip will be placed at the top of the footer.', 'canuck' ),
			'section'     => 'footer_footer',
			'priority'    => 0,
			'default'     => true,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_show_footer'                             => array(
			'name'        => 'canuck_show_footer',
			'title'       => esc_html__( 'Show footer area', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'The footer area with 3 or 4 widgetized columns will be shown.', 'canuck' ),
			'section'     => 'footer_footer',
			'priority'    => 1,
			'default'     => true,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_footer_background_image'                 => array(
			'name'        => 'canuck_footer_background_image',
			'title'       => esc_html__( 'Footer Background Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image', 'canuck' ),
			'section'     => 'footer_footer',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_footer_overlay_opacity'                  => array(
			'name'        => 'canuck_footer_overlay_opacity',
			'title'       => esc_html__( 'Footer-Overlay Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck' ),
			'section'     => 'footer_footer',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_footer_cols'                             => array(
			'name'        => 'canuck_footer_cols',
			'title'       => esc_html__( 'Select footer columns', 'canuck' ),
			'option_type' => 'select',
			'choices'     => array(
				'3' => '3',
				'4' => '4',
			),
			'description' => esc_html__( 'you can have 3 or 4 footer columns', 'canuck' ),
			'section'     => 'footer_footer',
			'priority'    => 4,
			'default'     => '3',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_select',
		),
		'canuck_footer_background_color'                 => array(
			'name'        => 'canuck_footer_background_color',
			'title'       => esc_html__( 'Footer Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck' ),
			'section'     => 'footer_footer',
			'priority'    => 5,
			'default'     => '#161616',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_footer_text_color'                       => array(
			'name'        => 'canuck_footer_text_color',
			'title'       => esc_html__( 'Footer Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color.', 'canuck' ),
			'section'     => 'footer_footer',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_footer_link_color'                       => array(
			'name'        => 'canuck_footer_link_color',
			'title'       => esc_html__( 'Footer Link Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a link text color.', 'canuck' ),
			'section'     => 'footer_footer',
			'priority'    => 5,
			'default'     => '#c9c9c9',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_footer_link_hover_color'                 => array(
			'name'        => 'canuck_footer_link_hover_color',
			'title'       => esc_html__( 'Footer Link Hover Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a link hover color.', 'canuck' ),
			'section'     => 'footer_footer',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Panel:canuck_footer Section:footer_copyright.
		'canuck_show_copyright_strip'                    => array(
			'name'        => 'canuck_show_copyright_strip',
			'title'       => esc_html__( 'Show Copyright Strip', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'you can choose to not show a copyright strip', 'canuck' ),
			'section'     => 'footer_copyright',
			'priority'    => 0,
			'default'     => true,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_left_copyright_text'                     => array(
			'name'        => 'canuck_left_copyright_text',
			'title'       => esc_html__( 'Copyright left text', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Some HTML allowed, suggest :', 'canuck' ) . ' &#38;copy; ' . esc_html__( 'copyright YEAR', 'canuck' ) . "&#60;a href='#'&#62;www.yoursite.url&#60;/a&#62;",
			'section'     => 'footer_copyright',
			'priority'    => 1,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_middle_copyright_text'                   => array(
			'name'        => 'canuck_middle_copyright_text',
			'title'       => esc_html__( 'Copyright middle text', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Some HTML allowed, suggest : site by', 'canuck' ) . " &#38;nbsp; &#60;a href='#'&#62;www.developer.url&#60;/a&#62;",
			'section'     => 'footer_copyright',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_right_copyright_text'                    => array(
			'name'        => 'canuck_right_copyright_text',
			'title'       => esc_html__( 'Copyright right text', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Some HTML allowed,', 'canuck' ),
			'section'     => 'footer_copyright',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Panel:canuck_styles Section:styles_general.
		'canuck_color_scheme'                            => array(
			'name'        => 'canuck_color_scheme',
			'title'       => esc_html__( 'Color Scheme', 'canuck' ),
			'option_type' => 'select',
			'choices'     => array(
				'gray-pink'  => esc_html__( 'Gray with Pink accents', 'canuck' ),
				'gray-green' => esc_html__( 'Gray with Green accents', 'canuck' ),
				'gray-red'   => esc_html__( 'Gray with Red accents', 'canuck' ),
				'gray-blue'  => esc_html__( 'Gray with Blue accents', 'canuck' ),
			),
			'description' => esc_html__( 'Select a color scheme for your site', 'canuck' ),
			'section'     => 'styles_general',
			'priority'    => 1,
			'default'     => 'gray-pink',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_select',
		),
		// Panel:canuck_styles Section:styles_header_font.
		'canuck_header_font'                             => array(
			'name'        => 'canuck_header_font',
			'title'       => esc_html__( 'Font for Headers', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_font_choices(),
			'description' => esc_html__( 'Select a font for headers', 'canuck' ),
			'section'     => 'styles_general',
			'priority'    => 2,
			'default'     => 'Open Sans',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_font_select',
		),
		// Panel:canuck_styles Section:styles_body_font.
		'canuck_body_font'                               => array(
			'name'        => 'canuck_body_font',
			'title'       => esc_html__( 'Font for Body Text', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_font_choices(),
			'description' => esc_html__( 'Select a font for main text', 'canuck' ),
			'section'     => 'styles_general',
			'priority'    => 3,
			'default'     => 'Open Sans',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_font_select',
		),
		// Panel:canuck_styles Section:styles_custom_font.
		'canuck_page_title_font'                         => array(
			'name'        => 'canuck_page_title_font',
			'title'       => esc_html__( 'Font for Page Titles', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_font_choices(),
			'description' => esc_html__( 'Select a font for page titles', 'canuck' ),
			'section'     => 'styles_general',
			'priority'    => 4,
			'default'     => 'Open Sans',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_font_select',
		),
		// Panel:canuck_styles Section:styles_custom_font.
		'canuck_display_font_options'                    => array(
			'name'        => 'canuck_display_font_options',
			'title'       => esc_html__( 'Font Display Loading Options', 'canuck' ),
			'option_type' => 'select',
			'choices'     => array(
				'auto'     => esc_html__( 'auto-use browser default loading strategy', 'canuck' ),
				'block'    => esc_html__( 'block-gives the font face a short block period', 'canuck' ),
				'swap'     => esc_html__( 'swap-use a fallback until font is available', 'canuck' ),
				'fallback' => esc_html__( 'fallback-use fallback if font download is slow', 'canuck' ),
				'optional' => esc_html__( 'optional-let the browser decide', 'canuck' ),
			),
			'description' => esc_html__( 'Font loading optimization, may use fallback font.', 'canuck' ),
			'section'     => 'styles_general',
			'priority'    => 5,
			'default'     => 'auto',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_font_display',
		),
		// Panel:canuck_blog Section:blog_general.
		'canuck_blog_title'                              => array(
			'name'        => 'canuck_blog_title',
			'title'       => esc_html__( 'Blog Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'If you choose to display a title this one is used', 'canuck' ),
			'section'     => 'blog_general',
			'priority'    => 1,
			'default'     => 'Blog',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_blog_title_option'                       => array(
			'name'        => 'canuck_blog_title_option',
			'title'       => esc_html__( 'Disable Title', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to remove the title', 'canuck' ),
			'section'     => 'blog_general',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_blog_layout'                             => array(
			'name'        => 'canuck_blog_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck' ),
			'option_type' => 'radio_image',
			'choices'     => canuck_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck' ),
			'section'     => 'blog_general',
			'priority'    => 3,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_layout',
		),
		'canuck_blog_style'                              => array(
			'name'        => 'canuck_blog_style',
			'title'       => esc_html__( 'Blog Style', 'canuck' ),
			'option_type' => 'select',
			'choices'     => array(
				'top_feature'       => esc_html__( 'Top Feature - all layouts except fullwidth', 'canuck' ),
				'side_feature'      => esc_html__( 'Side Feature - all layouts except two sidebars', 'canuck' ),
				'two_column_grid'   => esc_html__( 'Two Column Grid - all layouts except two sidebars', 'canuck' ),
				'three_column_grid' => esc_html__( 'Three Column Grid - only full width layouts', 'canuck' ),
				'two_stamp'         => esc_html__( 'Two Stamp Grid - all layouts except two sidebars', 'canuck' ),
				'three_stamp'       => esc_html__( 'Three Stamp Grid - only full width layouts', 'canuck' ),
			),
			'description' => esc_html__( 'Select a blog style from the dropdown list.', 'canuck' ),
			'section'     => 'blog_general',
			'priority'    => 4,
			'default'     => 'top_feature',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_blog_style',
		),
		'canuck_blog_feature'                            => array(
			'name'        => 'canuck_blog_feature',
			'title'       => esc_html__( 'Blog Feature Options', 'canuck' ),
			'option_type' => 'select',
			'choices'     => array(
				'background_image' => esc_html__( 'Background Image', 'canuck' ),
				'button_nav'       => esc_html__( 'Slider 3:1 aspect ratio', 'canuck' ),
				'fullsize'         => esc_html__( 'Slider fullsize', 'canuck' ),
				'widgetized'       => esc_html__( 'Widget (allows video)', 'canuck' ),
				'no_feature'       => esc_html__( 'No feature', 'canuck' ),
			),
			'description' => esc_html__( 'If you are using the Background Image option, set up the background image in the customizer "Header Image" tab.', 'canuck' ) . ' ' .
							esc_html__( 'If you select full size the original images you uploaded will be used. Make sure they are EXACTLY the same size and optimized for the web.', 'canuck' ),
			'section'     => 'blog_general',
			'priority'    => 5,
			'default'     => 'background_image',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_feature',
		),
		'canuck_blog_feature_category'                   => array(
			'name'        => 'canuck_blog_feature_category',
			'title'       => esc_html__( 'Feature Slider Category', 'canuck' ),
			'option_type' => 'scat',
			'description' => esc_html__( 'If using the Slider option, set up posts with a feature image.', 'canuck' ) . ' ' .
							esc_html__( 'Select the special category you use for those posts in the dropdown.', 'canuck' ),
			'section'     => 'blog_general',
			'priority'    => 6,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_use_post_gallery_captions'               => array(
			'name'        => 'canuck_use_post_gallery_captions',
			'title'       => esc_html__( 'Use Post Galley Captions', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Captions from the image meta will be used if checked.', 'canuck' ),
			'section'     => 'blog_general',
			'priority'    => 7,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:canuck_blog Section:blog_posts.
		'canuck_use_excerpts'                            => array(
			'name'        => 'canuck_use_excerpts',
			'title'       => esc_html__( 'Use excerpts', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'The Top Feature and Side Feature blog layout options offer this feature.', 'canuck' ) . ' ' .
							esc_html__( 'Other layout options use excerpts.', 'canuck' ),
			'section'     => 'blog_posts',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_excerpt_length'                          => array(
			'name'        => 'canuck_excerpt_length',
			'title'       => esc_html__( 'Excerpt Length', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Enter the excerpt length in words.', 'canuck' ),
			'section'     => 'blog_posts',
			'priority'    => 2,
			'default'     => '30',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_exclude_author'                          => array(
			'name'        => 'canuck_exclude_author',
			'title'       => esc_html__( 'Exclude author name in blog posts', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check and the author will not show', 'canuck' ),
			'section'     => 'blog_posts',
			'priority'    => 5,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_exclude_timestamp'                       => array(
			'name'        => 'canuck_exclude_timestamp',
			'title'       => esc_html__( 'Exclude date in blog posts', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check and the timestamp will not show', 'canuck' ),
			'section'     => 'blog_posts',
			'priority'    => 6,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_exclude_category'                        => array(
			'name'        => 'canuck_exclude_category',
			'title'       => esc_html__( 'Exclude categories in blog posts', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check and the category will not show', 'canuck' ),
			'section'     => 'blog_posts',
			'priority'    => 7,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_exclude_tags'                            => array(
			'name'        => 'canuck_exclude_tags',
			'title'       => esc_html__( 'Exclude tags in blog posts', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check and the tags will not show', 'canuck' ),
			'section'     => 'blog_posts',
			'priority'    => 8,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_exclude_no_comments_link'                => array(
			'name'        => 'canuck_exclude_no_comments_link',
			'title'       => esc_html__( 'Exclude No Comments link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Comments link will not be shown if there are no comments.', 'canuck' ),
			'section'     => 'blog_posts',
			'priority'    => 9,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:canuck_home Section:Home Template.
		'canuck_home_feature'                            => array(
			'name'        => 'canuck_home_feature',
			'title'       => esc_html__( 'Home Page Feature', 'canuck' ),
			'option_type' => 'select',
			'choices'     => array(
				'background_image' => esc_html__( 'Background Image', 'canuck' ),
				'button_nav'       => esc_html__( 'Slider 3:1 aspect ratio', 'canuck' ),
				'fullsize'         => esc_html__( 'Slider fullsize', 'canuck' ),
				'widgetized'       => esc_html__( 'Widget(allows video)', 'canuck' ),
				'no_feature'       => esc_html__( 'No feature', 'canuck' ),
			),
			'description' => esc_html__( 'If you are using the Background Image option, set up the background image in the customizer "Header Image" tab.', 'canuck' ) . ' ' .
							esc_html__( 'If you select full size the original images you uploaded will be used. Make sure they are EXACTLY the same size and optimized for the web.', 'canuck' ),
			'section'     => 'home_one',
			'priority'    => 1,
			'default'     => 'background_image',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_feature',
		),
		'canuck_home_feature_category'                   => array(
			'name'        => 'canuck_home_feature_category',
			'title'       => esc_html__( 'Home Slider Feature Category', 'canuck' ),
			'option_type' => 'scat',
			'description' => esc_html__( 'If using the Slider option, set up posts with a feature image.', 'canuck' ) . ' ' .
							esc_html__( 'Select the special category you use for those posts in the dropdown.', 'canuck' ),
			'section'     => 'home_one',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_home_title'                              => array(
			'name'        => 'canuck_home_title',
			'title'       => esc_html__( 'Home Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Used when Home Page Feature is set to background image.', 'canuck' ) . ' ' .
							esc_html__( 'Uses Blog Title if blank.', 'canuck' ),
			'section'     => 'home_one',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_home_description'                        => array(
			'name'        => 'canuck_home_description',
			'title'       => esc_html__( 'Home Description', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Used when Home Page Feature is set to background image.', 'canuck' ) . ' ' .
							esc_html__( 'Uses Blog Description if blank.', 'canuck' ),
			'section'     => 'home_one',
			'priority'    => 4,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		// Panel:canuck_home Section:home_layout.
		'canuck_home_area_1'                             => array(
			'name'        => 'canuck_home_area_1',
			'title'       => esc_html__( 'Home Page Area 1', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 1', 'canuck' ),
			'section'     => 'home_layout',
			'priority'    => 1,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_homearea_select',
		),
		'canuck_home_area_2'                             => array(
			'name'        => 'canuck_home_area_2',
			'title'       => esc_html__( 'Home Page Area 2', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 2', 'canuck' ),
			'section'     => 'home_layout',
			'priority'    => 2,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_homearea_select',
		),
		'canuck_home_area_3'                             => array(
			'name'        => 'canuck_home_area_3',
			'title'       => esc_html__( 'Home Page Area 3', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 3', 'canuck' ),
			'section'     => 'home_layout',
			'priority'    => 4,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_homearea_select',
		),
		'canuck_home_area_4'                             => array(
			'name'        => 'canuck_home_area_4',
			'title'       => esc_html__( 'Home Page Area 4', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 4', 'canuck' ),
			'section'     => 'home_layout',
			'priority'    => 4,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_homearea_select',
		),
		'canuck_home_area_5'                             => array(
			'name'        => 'canuck_home_area_5',
			'title'       => esc_html__( 'Home Page Area 5', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 5', 'canuck' ),
			'section'     => 'home_layout',
			'priority'    => 5,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_homearea_select',
		),
		'canuck_home_area_6'                             => array(
			'name'        => 'canuck_home_area_6',
			'title'       => esc_html__( 'Home Page Area 6', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 6', 'canuck' ),
			'section'     => 'home_layout',
			'priority'    => 6,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_homearea_select',
		),
		'canuck_home_area_7'                             => array(
			'name'        => 'canuck_home_area_7',
			'title'       => esc_html__( 'Home Page Area 7', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 7', 'canuck' ),
			'section'     => 'home_layout',
			'priority'    => 7,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_homearea_select',
		),
		'canuck_home_area_8'                             => array(
			'name'        => 'canuck_home_area_8',
			'title'       => esc_html__( 'Home Page Area 8', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 8', 'canuck' ),
			'section'     => 'home_layout',
			'priority'    => 8,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_homearea_select',
		),
		'canuck_home_area_9'                             => array(
			'name'        => 'canuck_home_area_9',
			'title'       => esc_html__( 'Home Page Area 9', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 8', 'canuck' ),
			'section'     => 'home_layout',
			'priority'    => 9,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_homearea_select',
		),
		'canuck_home_area_10'                            => array(
			'name'        => 'canuck_home_area_10',
			'title'       => esc_html__( 'Home Page Area 10', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 10', 'canuck' ),
			'section'     => 'home_layout',
			'priority'    => 10,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_homearea_select',
		),
		'canuck_home_area_11'                            => array(
			'name'        => 'canuck_home_area_11',
			'title'       => esc_html__( 'Home Page Area 11', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 11', 'canuck' ),
			'section'     => 'home_layout',
			'priority'    => 11,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_homearea_select',
		),
		'canuck_home_area_12'                            => array(
			'name'        => 'canuck_home_area_12',
			'title'       => esc_html__( 'Home Page Area 12', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 12', 'canuck' ),
			'section'     => 'home_layout',
			'priority'    => 12,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_homearea_select',
		),
		'canuck_home_area_13'                            => array(
			'name'        => 'canuck_home_area_13',
			'title'       => esc_html__( 'Home Page Area 13', 'canuck' ),
			'option_type' => 'select',
			'choices'     => canuck_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 13', 'canuck' ),
			'section'     => 'home_layout',
			'priority'    => 13,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_homearea_select',
		),
		// Panel:canuck_home Section:home_section_1 ********************************************.
		'canuck_section1_usage'                          => array(
			'name'        => 'canuck_section1_usage',
			'title'       => esc_html__( 'Section 1-Usage Options', 'canuck' ),
			'option_type' => 'select',
			'choices'     => array(
				'normal'     => 'normal',
				'shortcode'  => 'shortcode',
				'widgetized' => 'widgetized',
			),
			'description' => esc_html__( 'Normal - widget and shortcode input box are not used.', 'canuck' ) . '<br/>' .
							esc_html__( 'Widgetized - Drag your widget over to "Home Page Section 1" under "Appearance->Widgets".', 'canuck' ) . ' ' .
							esc_html__( 'Shortcode - Enter the shortcode you want to use in the shortcode text area box.', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 1,
			'default'     => 'normal',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_useage',
		),
		'canuck_section1_background_option_toggle'       => array(
			'name'        => 'canuck_section1_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section1_background_image'               => array(
			'name'        => 'canuck_section1_background_image',
			'title'       => esc_html__( 'Section 1-Background Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section1_overlay_opacity'                => array(
			'name'        => 'canuck_section1_overlay_opacity',
			'title'       => esc_html__( 'Section 1-Overlay Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 4,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section1_use_parallax'                   => array(
			'name'        => 'canuck_section1_use_parallax',
			'title'       => esc_html__( 'Section 1-Use Parallax', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 5,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section1_background_color'               => array(
			'name'        => 'canuck_section1_background_color',
			'title'       => esc_html__( 'Section 1-Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 6,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section1_background_color_opacity'       => array(
			'name'        => 'canuck_section1_background_color_opacity',
			'title'       => esc_html__( 'Section 1-Background Color Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 7,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section1_text_color'                     => array(
			'name'        => 'canuck_section1_text_color',
			'title'       => esc_html__( 'Section 1-Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 8,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section1_text'                           => array(
			'name'        => 'canuck_section1_text',
			'title'       => esc_html__( 'Section 1-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section1_shortcode'                      => array(
			'name'        => 'canuck_section1_shortcode',
			'title'       => esc_html__( 'Section 1-Shortcode', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'Add your shortcode here if using shortcode as a Useage Option.', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_include_section1_button'                 => array(
			'name'        => 'canuck_include_section1_button',
			'title'       => esc_html__( 'Section 1-Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use a link, then use the options below.', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 11,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section1_button_name'                    => array(
			'name'        => 'canuck_section1_button_name',
			'title'       => esc_html__( 'Section 1-Button Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 12,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section1_button_link'                    => array(
			'name'        => 'canuck_section1_button_link',
			'title'       => esc_html__( 'Section 1-Button URI', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/contact/', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 13,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section1_button_background_color'        => array(
			'name'        => 'canuck_section1_button_background_color',
			'title'       => esc_html__( 'Section 1-Button Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 14,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section1_button_text_color'              => array(
			'name'        => 'canuck_section1_button_text_color',
			'title'       => esc_html__( 'Section 1-Button Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a color for button text.', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 15,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section1_button_hover_background_color'  => array(
			'name'        => 'canuck_section1_button_hover_background_color',
			'title'       => esc_html__( 'Section 1-Button Hover Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 16,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section1_button_hover_text_color'        => array(
			'name'        => 'canuck_section1_button_hover_text_color',
			'title'       => esc_html__( 'Section 1-Button Hover Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_1',
			'priority'    => 17,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Panel:canuck_home Section:home_section_2 ====================================================.
		// General options for Section 2.
		'canuck_section2_background_option_toggle'       => array(
			'name'        => 'canuck_section2_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section2_background_image'               => array(
			'name'        => 'canuck_section2_background_image',
			'title'       => esc_html__( 'Section 2-Background Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section2_overlay_opacity'                => array(
			'name'        => 'canuck_section2_overlay_opacity',
			'title'       => esc_html__( 'Section 2-Overlay Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section2_use_parallax'                   => array(
			'name'        => 'canuck_section2_use_parallax',
			'title'       => esc_html__( 'Section 2-Use Parallax', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section2_background_color'               => array(
			'name'        => 'canuck_section2_background_color',
			'title'       => esc_html__( 'Section 2-Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section2_background_color_opacity'       => array(
			'name'        => 'canuck_section2_background_color_opacity',
			'title'       => esc_html__( 'Section 2-Background Color Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section2_text_color'                     => array(
			'name'        => 'canuck_section2_text_color',
			'title'       => esc_html__( 'Section 2-Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section2_button_colors_toggle'           => array(
			'name'        => 'canuck_section2_button_colors_toggle',
			'title'       => esc_html__( 'Show/Hide Button Colors', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to change link button colors.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 8,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section2_button_background_color'        => array(
			'name'        => 'canuck_section2_button_background_color',
			'title'       => esc_html__( 'Section 2-Button Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 9,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section2_button_text_color'              => array(
			'name'        => 'canuck_section2_button_text_color',
			'title'       => esc_html__( 'Section 2-Button Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color for the button.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 10,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section2_button_hover_background_color'  => array(
			'name'        => 'canuck_section2_button_hover_background_color',
			'title'       => esc_html__( 'Section 2-Button Hover Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 11,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section2_button_hover_text_color'        => array(
			'name'        => 'canuck_section2_button_hover_text_color',
			'title'       => esc_html__( 'Section 2-Button Hover Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 12,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Service box 1.
		'canuck_section2_box1_toggle'                    => array(
			'name'        => 'canuck_section2_box1_toggle',
			'title'       => esc_html__( 'Show/Hide Box 1 Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 1 options.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 13,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section2_box1_use_font_icon'             => array(
			'name'        => 'canuck_section2_box1_use_font_icon',
			'title'       => esc_html__( 'Section 2-Box 1-Font Icon', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 14,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section2_box1_image_font'                => array(
			'name'        => 'canuck_section2_box1_image_font',
			'title'       => esc_html__( 'Section 2-Box 1-Font Icon Code', 'canuck' ),
			'option_type' => 'fa',
			'choices'     => canuck_fontawesome(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 15,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section2_box1_image'                     => array(
			'name'        => 'canuck_section2_box1_image',
			'title'       => esc_html__( 'Section 2-Box 1-Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 16,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section2_box1_title'                     => array(
			'name'        => 'canuck_section2_box1_title',
			'title'       => esc_html__( 'Section 2-Box 1-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 17,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section2_box1_text'                      => array(
			'name'        => 'canuck_section2_box1_text',
			'title'       => esc_html__( 'Section 2-Box 1-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 18,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section2_box1_include_link'              => array(
			'name'        => 'canuck_section2_box1_include_link',
			'title'       => esc_html__( 'Section 2-Box 1-Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use a link', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 19,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section2_box1_button_link'               => array(
			'name'        => 'canuck_section2_box1_button_link',
			'title'       => esc_html__( 'Section 2-Box 1-Link URL', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 20,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section2_box1_button_title'              => array(
			'name'        => 'canuck_section2_box1_button_title',
			'title'       => esc_html__( 'Section 2-Box 1-Link Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link.', 'canuck' ) . ' ' . esc_html__( 'Default : ', 'canuck' ) . "&lt;i class='fa fa-link'&gt;&lt;/i&gt; more ",
			'section'     => 'home_section_2',
			'priority'    => 21,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service box 2.
		'canuck_section2_box2_toggle'                    => array(
			'name'        => 'canuck_section2_box2_toggle',
			'title'       => esc_html__( 'Show/Hide Box 2 Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 2 options.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 22,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section2_box2_use_font_icon'             => array(
			'name'        => 'canuck_section2_box2_use_font_icon',
			'title'       => esc_html__( 'Section 2-Box 2-Font Icon', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 23,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section2_box2_image_font'                => array(
			'name'        => 'canuck_section2_box2_image_font',
			'title'       => esc_html__( 'Section 2-Box 2-Font Icon Code', 'canuck' ),
			'option_type' => 'fa',
			'choices'     => canuck_fontawesome(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 24,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section2_box2_image'                     => array(
			'name'        => 'canuck_section2_box2_image',
			'title'       => esc_html__( 'Section 2-Box 2-Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 25,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section2_box2_title'                     => array(
			'name'        => 'canuck_section2_box2_title',
			'title'       => esc_html__( 'Section 2-Box 2-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 26,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section2_box2_text'                      => array(
			'name'        => 'canuck_section2_box2_text',
			'title'       => esc_html__( 'Section 2-Box 2-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 27,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section2_box2_include_link'              => array(
			'name'        => 'canuck_section2_box2_include_link',
			'title'       => esc_html__( 'Section 2-Box 2-Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 28,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section2_box2_button_link'               => array(
			'name'        => 'canuck_section2_box2_button_link',
			'title'       => esc_html__( 'Section 2-Box 2-Link URL', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 29,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section2_box2_button_title'              => array(
			'name'        => 'canuck_section2_box2_button_title',
			'title'       => esc_html__( 'Section 2-Box 2-Link Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link.', 'canuck' ) . ' ' . esc_html__( 'Default : ', 'canuck' ) . "&lt;i class='fa fa-link'&gt;&lt;/i&gt; more ",
			'section'     => 'home_section_2',
			'priority'    => 30,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service box 3.
		'canuck_section2_box3_toggle'                    => array(
			'name'        => 'canuck_section2_box3_toggle',
			'title'       => esc_html__( 'Show/Hide Box 3 Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 3 options.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 31,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section2_box3_use_font_icon'             => array(
			'name'        => 'canuck_section2_box3_use_font_icon',
			'title'       => esc_html__( 'Section 2-Box 3-Font Icon', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 32,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section2_box3_image_font'                => array(
			'name'        => 'canuck_section2_box3_image_font',
			'title'       => esc_html__( 'Section 2-Box 3-Font Icon Code', 'canuck' ),
			'option_type' => 'fa',
			'choices'     => canuck_fontawesome(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 33,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section2_box3_image'                     => array(
			'name'        => 'canuck_section2_box3_image',
			'title'       => esc_html__( 'Section 2-Box 3-Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 34,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section2_box3_title'                     => array(
			'name'        => 'canuck_section2_box3_title',
			'title'       => esc_html__( 'Section 2-Box 3-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 35,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section2_box3_text'                      => array(
			'name'        => 'canuck_section2_box3_text',
			'title'       => esc_html__( 'Section 2-Box 3-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 36,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section2_box3_include_link'              => array(
			'name'        => 'canuck_section2_box3_include_link',
			'title'       => esc_html__( 'Section 2-Box 3-Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 37,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section2_box3_button_link'               => array(
			'name'        => 'canuck_section2_box3_button_link',
			'title'       => esc_html__( 'Section 2-Box 3-Link URL', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck' ),
			'section'     => 'home_section_2',
			'priority'    => 38,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section2_box3_button_title'              => array(
			'name'        => 'canuck_section2_box3_button_title',
			'title'       => esc_html__( 'Section 2-Box 3-Link Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link.', 'canuck' ) . ' ' . esc_html__( 'Default : ', 'canuck' ) . "&lt;i class='fa fa-link'&gt;&lt;/i&gt; more ",
			'section'     => 'home_section_2',
			'priority'    => 39,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Panel:canuck_home Section:home_section_3 ********************************************.
		'canuck_section3_usage'                          => array(
			'name'        => 'canuck_section3_usage',
			'title'       => esc_html__( 'Section 3-Usage Options', 'canuck' ),
			'option_type' => 'select',
			'choices'     => array(
				'normal'     => 'normal',
				'shortcode'  => 'shortcode',
				'widgetized' => 'widgetized',
			),
			'description' => esc_html__( 'Normal - widget and shortcode input box are not used.', 'canuck' ) . '<br/>' .
							esc_html__( 'Widgetized - Drag your widget over to "Home Page Section 3" under "Appearance->Widgets".', 'canuck' ) . ' ' .
							esc_html__( 'Shortcode - Enter the shortcode you want to use in the shortcode text area box.', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 1,
			'default'     => 'normal',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_useage',
		),
		'canuck_section3_background_option_toggle'       => array(
			'name'        => 'canuck_section3_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section3_background_image'               => array(
			'name'        => 'canuck_section3_background_image',
			'title'       => esc_html__( 'Section 3-Background Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section3_overlay_opacity'                => array(
			'name'        => 'canuck_section3_overlay_opacity',
			'title'       => esc_html__( 'Section 3-Overlay Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 4,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section3_use_parallax'                   => array(
			'name'        => 'canuck_section3_use_parallax',
			'title'       => esc_html__( 'Section 3-Use Parallax', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 5,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section3_background_color'               => array(
			'name'        => 'canuck_section3_background_color',
			'title'       => esc_html__( 'Section 3-Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 6,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section3_background_color_opacity'       => array(
			'name'        => 'canuck_section3_background_color_opacity',
			'title'       => esc_html__( 'Section 3-Background Color Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 7,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section3_text_color'                     => array(
			'name'        => 'canuck_section3_text_color',
			'title'       => esc_html__( 'Section 3-Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 8,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section3_text'                           => array(
			'name'        => 'canuck_section3_text',
			'title'       => esc_html__( 'Section 3-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section3_shortcode'                      => array(
			'name'        => 'canuck_section3_shortcode',
			'title'       => esc_html__( 'Section 3-Shortcode', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'Add your shortcode here if using shortcode as a Useage Option.', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_include_section3_button'                 => array(
			'name'        => 'canuck_include_section3_button',
			'title'       => esc_html__( 'Section 3-Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use a link, then use the options below.', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 11,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section3_button_name'                    => array(
			'name'        => 'canuck_section3_button_name',
			'title'       => esc_html__( 'Section 3-Button Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, note use single quotes for classes.', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 12,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section3_button_link'                    => array(
			'name'        => 'canuck_section3_button_link',
			'title'       => esc_html__( 'Section 3-Button URI', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/contact/', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 13,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section3_button_background_color'        => array(
			'name'        => 'canuck_section3_button_background_color',
			'title'       => esc_html__( 'Section 3-Button Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 14,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section3_button_text_color'              => array(
			'name'        => 'canuck_section3_button_text_color',
			'title'       => esc_html__( 'Section 3-Button Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a color for button text.', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 15,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section3_button_hover_background_color'  => array(
			'name'        => 'canuck_section3_button_hover_background_color',
			'title'       => esc_html__( 'Section 3-Button Hover Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 16,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section3_button_hover_text_color'        => array(
			'name'        => 'canuck_section3_button_hover_text_color',
			'title'       => esc_html__( 'Section 3-Button Hover Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_3',
			'priority'    => 17,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Panel:canuck_home Section:home_section_4 ===============================================.
		'canuck_section4_background_option_toggle'       => array(
			'name'        => 'canuck_section4_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section4_background_image'               => array(
			'name'        => 'canuck_section4_background_image',
			'title'       => esc_html__( 'Section 4-Background Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section4_overlay_opacity'                => array(
			'name'        => 'canuck_section4_overlay_opacity',
			'title'       => esc_html__( 'Section 4-Overlay Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 3,
			'default'     => 3,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section4_use_parallax'                   => array(
			'name'        => 'canuck_section4_use_parallax',
			'title'       => esc_html__( 'Section 4-Use Parallax', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section4_background_color'               => array(
			'name'        => 'canuck_section4_background_color',
			'title'       => esc_html__( 'Section 4-Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section4_background_color_opacity'       => array(
			'name'        => 'canuck_section4_background_color_opacity',
			'title'       => esc_html__( 'Section 4-Background Color Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section4_text_color'                     => array(
			'name'        => 'canuck_section4_text_color',
			'title'       => esc_html__( 'Section 4-Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section4_button_colors_toggle'           => array(
			'name'        => 'canuck_section4_button_colors_toggle',
			'title'       => esc_html__( 'Show/Hide Button Colors', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit link button colors.', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 8,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section4_button_background_color'        => array(
			'name'        => 'canuck_section4_button_background_color',
			'title'       => esc_html__( 'Section 4-Button Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 8,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section4_button_text_color'              => array(
			'name'        => 'canuck_section4_button_text_color',
			'title'       => esc_html__( 'Section 4-Button Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color for the button.', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 10,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section4_button_hover_background_color'  => array(
			'name'        => 'canuck_section4_button_hover_background_color',
			'title'       => esc_html__( 'Section 4-Button Hover Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 11,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section4_button_hover_text_color'        => array(
			'name'        => 'canuck_section4_button_hover_text_color',
			'title'       => esc_html__( 'Section 4-Button Hover Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 12,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Service Box 1.
		'canuck_section4_box1_toggle'                    => array(
			'name'        => 'canuck_section4_box1_toggle',
			'title'       => esc_html__( 'Show/Hide Box 1 Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 1 options.', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 13,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section4_box1_use_font_icon'             => array(
			'name'        => 'canuck_section4_box1_use_font_icon',
			'title'       => esc_html__( 'Section 4-Box 1-Font Icon', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 14,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section4_box1_image_font'                => array(
			'name'        => 'canuck_section4_box1_image_font',
			'title'       => esc_html__( 'Section 4-Box 1-Font Icon Code', 'canuck' ),
			'option_type' => 'fa',
			'choices'     => canuck_fontawesome(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 15,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section4_box1_image'                     => array(
			'name'        => 'canuck_section4_box1_image',
			'title'       => esc_html__( 'Section 4-Box 1-Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 400px wide x 267px high recommended', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 16,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section4_box1_title'                     => array(
			'name'        => 'canuck_section4_box1_title',
			'title'       => esc_html__( 'Section 4-Box 1-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 17,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section4_box1_text'                      => array(
			'name'        => 'canuck_section4_box1_text',
			'title'       => esc_html__( 'Section 4-Box 1-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 18,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section4_box1_include_link'              => array(
			'name'        => 'canuck_section4_box1_include_link',
			'title'       => esc_html__( 'Section 4-Box 1-Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 19,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section4_box1_button_link'               => array(
			'name'        => 'canuck_section4_box1_button_link',
			'title'       => esc_html__( 'Section 4-Box 1-Link URL', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 20,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section4_box1_button_title'              => array(
			'name'        => 'canuck_section4_box1_button_title',
			'title'       => esc_html__( 'Section 4-Box 1-Link Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link.', 'canuck' ) . ' ' . esc_html__( 'Default : ', 'canuck' ) . "&lt;i class='fa fa-link'&gt;&lt;/i&gt; more ",
			'section'     => 'home_section_4',
			'priority'    => 21,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service Box 2.
		'canuck_section4_box2_toggle'                    => array(
			'name'        => 'canuck_section4_box2_toggle',
			'title'       => esc_html__( 'Show/Hide Box 2 Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 2 options.', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 22,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section4_box2_use_font_icon'             => array(
			'name'        => 'canuck_section4_box2_use_font_icon',
			'title'       => esc_html__( 'Section 4-Box 2-Font Icon', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 23,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section4_box2_image_font'                => array(
			'name'        => 'canuck_section4_box2_image_font',
			'title'       => esc_html__( 'Section 4-Box 2-Font Icon Code', 'canuck' ),
			'option_type' => 'fa',
			'choices'     => canuck_fontawesome(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 24,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section4_box2_image'                     => array(
			'name'        => 'canuck_section4_box2_image',
			'title'       => esc_html__( 'Section 4-Box 2-Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 400px wide x 267px high recommended', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 25,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section4_box2_title'                     => array(
			'name'        => 'canuck_section4_box2_title',
			'title'       => esc_html__( 'Section 4-Box 2-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 26,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section4_box2_text'                      => array(
			'name'        => 'canuck_section4_box2_text',
			'title'       => esc_html__( 'Section 4-Box 2-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 27,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section4_box2_include_link'              => array(
			'name'        => 'canuck_section4_box2_include_link',
			'title'       => esc_html__( 'Section 4-Box 2-Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 28,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section4_box2_button_link'               => array(
			'name'        => 'canuck_section4_box2_button_link',
			'title'       => esc_html__( 'Section 4-Box 2-Link URL', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck' ),
			'section'     => 'home_section_4',
			'priority'    => 29,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section4_box2_button_title'              => array(
			'name'        => 'canuck_section4_box2_button_title',
			'title'       => esc_html__( 'Section 4-Box 2-Link Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link.', 'canuck' ) . ' ' . esc_html__( 'Default : ', 'canuck' ) . "&lt;i class='fa fa-link'&gt;&lt;/i&gt; more ",
			'section'     => 'home_section_4',
			'priority'    => 30,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Panel:canuck_home Section:home_section_5.
		'canuck_section5_usage'                          => array(
			'name'        => 'canuck_section5_usage',
			'title'       => esc_html__( 'Section 5-Usage Options', 'canuck' ),
			'option_type' => 'select',
			'choices'     => array(
				'normal'     => 'normal',
				'shortcode'  => 'shortcode',
				'widgetized' => 'widgetized',
			),
			'description' => esc_html__( 'Normal - widget and shortcode input box are not used.', 'canuck' ) . '<br/>' .
							esc_html__( 'Widgetized - Drag your widget over to "Home Page Section 5" under "Appearance->Widgets".', 'canuck' ) . ' ' .
							esc_html__( 'Shortcode - Enter the shortcode you want to use in the shortcode text area box.', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 1,
			'default'     => 'normal',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_useage',
		),
		'canuck_section5_background_option_toggle'       => array(
			'name'        => 'canuck_section5_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section5_background_image'               => array(
			'name'        => 'canuck_section5_background_image',
			'title'       => esc_html__( 'Section 5-Background Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section5_overlay_opacity'                => array(
			'name'        => 'canuck_section5_overlay_opacity',
			'title'       => esc_html__( 'Section 5-Overlay Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 4,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section5_use_parallax'                   => array(
			'name'        => 'canuck_section5_use_parallax',
			'title'       => esc_html__( 'Section 5-Use Parallax', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 5,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section5_background_color'               => array(
			'name'        => 'canuck_section5_background_color',
			'title'       => esc_html__( 'Section 5-Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 6,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section5_background_color_opacity'       => array(
			'name'        => 'canuck_section5_background_color_opacity',
			'title'       => esc_html__( 'Section 5-Background Color Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 7,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section5_text_color'                     => array(
			'name'        => 'canuck_section5_text_color',
			'title'       => esc_html__( 'Section 5-Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 8,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section5_text'                           => array(
			'name'        => 'canuck_section5_text',
			'title'       => esc_html__( 'Section 5-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section5_shortcode'                      => array(
			'name'        => 'canuck_section5_shortcode',
			'title'       => esc_html__( 'Section 5-Shortcode', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'Add your shortcode here if using shortcode as a Useage Option.', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_include_section5_button'                 => array(
			'name'        => 'canuck_include_section5_button',
			'title'       => esc_html__( 'Section 5-Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use a link, then use the options below.', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 11,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section5_button_name'                    => array(
			'name'        => 'canuck_section5_button_name',
			'title'       => esc_html__( 'Section 5-Button Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, note use single quotes for classes.', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 12,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section5_button_link'                    => array(
			'name'        => 'canuck_section5_button_link',
			'title'       => esc_html__( 'Section 5-Button URI', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/contact/', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 13,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section5_button_background_color'        => array(
			'name'        => 'canuck_section5_button_background_color',
			'title'       => esc_html__( 'Section 5-Button Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 14,
			'default'     => '#fffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section5_button_text_color'              => array(
			'name'        => 'canuck_section5_button_text_color',
			'title'       => esc_html__( 'Section 5-Button Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a color for button text.', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 15,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section5_button_hover_background_color'  => array(
			'name'        => 'canuck_section5_button_hover_background_color',
			'title'       => esc_html__( 'Section 5-Button Hover Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 16,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section5_button_hover_text_color'        => array(
			'name'        => 'canuck_section5_button_hover_text_color',
			'title'       => esc_html__( 'Section 5-Button Hover Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_5',
			'priority'    => 17,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Panel:canuck_home Section:home_section_6 =======================================.
		'canuck_section6_background_option_toggle'       => array(
			'name'        => 'canuck_section6_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section6_background_image'               => array(
			'name'        => 'canuck_section6_background_image',
			'title'       => esc_html__( 'Section 6-Background Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section6_overlay_opacity'                => array(
			'name'        => 'canuck_section6_overlay_opacity',
			'title'       => esc_html__( 'Section 6-Overlay Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section6_use_parallax'                   => array(
			'name'        => 'canuck_section6_use_parallax',
			'title'       => esc_html__( 'Section 6-Use Parallax', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section6_background_color'               => array(
			'name'        => 'canuck_section6_background_color',
			'title'       => esc_html__( 'Section 6-Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section6_background_color_opacity'       => array(
			'name'        => 'canuck_section6_background_color_opacity',
			'title'       => esc_html__( 'Section 6-Background Color Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section6_text_color'                     => array(
			'name'        => 'canuck_section6_text_color',
			'title'       => esc_html__( 'Section 6-Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section6_button_colors_toggle'           => array(
			'name'        => 'canuck_section6_button_colors_toggle',
			'title'       => esc_html__( 'Show/Hide Button Colors', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit link button colors.', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 8,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section6_button_background_color'        => array(
			'name'        => 'canuck_section6_button_background_color',
			'title'       => esc_html__( 'Section 6-Button Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 9,
			'default'     => '#fffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section6_button_text_color'              => array(
			'name'        => 'canuck_section6_button_text_color',
			'title'       => esc_html__( 'Section 6-Button Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color for the button.', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 10,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section6_button_hover_background_color'  => array(
			'name'        => 'canuck_section6_button_hover_background_color',
			'title'       => esc_html__( 'Section 6-Button Hover Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 11,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section6_button_hover_text_color'        => array(
			'name'        => 'canuck_section6_button_hover_text_color',
			'title'       => esc_html__( 'Section 6-Button Hover Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 12,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Service Box 1.
		'canuck_section6_box1_toggle'                    => array(
			'name'        => 'canuck_section6_box1_toggle',
			'title'       => esc_html__( 'Show/Hide Box 1 Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 1 options.', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 13,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section6_box1_use_font_icon'             => array(
			'name'        => 'canuck_section6_box1_use_font_icon',
			'title'       => esc_html__( 'Section 6-Box 1-Font Icon', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 14,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section6_box1_image_font'                => array(
			'name'        => 'canuck_section6_box1_image_font',
			'title'       => esc_html__( 'Section 6-Box 1-Font Icon Code', 'canuck' ),
			'option_type' => 'fa',
			'choices'     => canuck_fontawesome(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 15,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section6_box1_image'                     => array(
			'name'        => 'canuck_section6_box1_image',
			'title'       => esc_html__( 'Section 6-Box 1-Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 400px wide x 267px high recommended', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 16,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section6_box1_title'                     => array(
			'name'        => 'canuck_section6_box1_title',
			'title'       => esc_html__( 'Section 6-Box 1-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 17,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section6_box1_text'                      => array(
			'name'        => 'canuck_section6_box1_text',
			'title'       => esc_html__( 'Section 6-Box 1-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 18,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section6_box1_include_link'              => array(
			'name'        => 'canuck_section6_box1_include_link',
			'title'       => esc_html__( 'Section 6-Box 1-Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 19,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section6_box1_button_link'               => array(
			'name'        => 'canuck_section6_box1_button_link',
			'title'       => esc_html__( 'Section 6-Box 1-Link URL', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 20,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section6_box1_button_title'              => array(
			'name'        => 'canuck_section6_box1_button_title',
			'title'       => esc_html__( 'Section 6-Box 1-Link Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link.', 'canuck' ) . ' ' . esc_html__( 'Default : ', 'canuck' ) . "&lt;i class='fa fa-link'&gt;&lt;/i&gt; more ",
			'section'     => 'home_section_6',
			'priority'    => 21,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service Box 2.
		'canuck_section6_box2_toggle'                    => array(
			'name'        => 'canuck_section6_box2_toggle',
			'title'       => esc_html__( 'Show/Hide Box 2 Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 2 options.', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 22,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section6_box2_use_font_icon'             => array(
			'name'        => 'canuck_section6_box2_use_font_icon',
			'title'       => esc_html__( 'Section 6-Box 2-Font Icon', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 23,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section6_box2_image_font'                => array(
			'name'        => 'canuck_section6_box2_image_font',
			'title'       => esc_html__( 'Section 6-Box 2-Font Icon Code', 'canuck' ),
			'option_type' => 'fa',
			'choices'     => canuck_fontawesome(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 24,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section6_box2_image'                     => array(
			'name'        => 'canuck_section6_box2_image',
			'title'       => esc_html__( 'Section 6-Box 2-Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 400px wide x 267px high recommended', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 25,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section6_box2_title'                     => array(
			'name'        => 'canuck_section6_box2_title',
			'title'       => esc_html__( 'Section 6-Box 2-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 26,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section6_box2_text'                      => array(
			'name'        => 'canuck_section6_box2_text',
			'title'       => esc_html__( 'Section 6-Box 2-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 27,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section6_box2_include_link'              => array(
			'name'        => 'canuck_section6_box2_include_link',
			'title'       => esc_html__( 'Section 6-Box 2-Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 28,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section6_box2_button_link'               => array(
			'name'        => 'canuck_section6_box2_button_link',
			'title'       => esc_html__( 'Section 6-Box 2-Link URL', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck' ),
			'section'     => 'home_section_6',
			'priority'    => 29,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section6_box2_button_title'              => array(
			'name'        => 'canuck_section6_box2_button_title',
			'title'       => esc_html__( 'Section 6-Box 2-Link Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link.', 'canuck' ) . ' ' . esc_html__( 'Default : ', 'canuck' ) . "&lt;i class='fa fa-link'&gt;&lt;/i&gt; more ",
			'section'     => 'home_section_6',
			'priority'    => 30,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Panel:canuck_home Section:home_section_7.
		'canuck_section7_usage'                          => array(
			'name'        => 'canuck_section7_usage',
			'title'       => esc_html__( 'Section 7-Usage Options', 'canuck' ),
			'option_type' => 'select',
			'choices'     => array(
				'normal'     => 'normal',
				'shortcode'  => 'shortcode',
				'widgetized' => 'widgetized',
			),
			'description' => esc_html__( 'Normal - widget and shortcode input box are not used.', 'canuck' ) . '<br/>' .
							esc_html__( 'Widgetized - Drag your widget over to "Home Page Section 7" under "Appearance->Widgets".', 'canuck' ) . ' ' .
							esc_html__( 'Shortcode - Enter the shortcode you want to use in the shortcode text area box.', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 1,
			'default'     => 'normal',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_useage',
		),
		'canuck_section7_background_option_toggle'       => array(
			'name'        => 'canuck_section7_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section7_background_image'               => array(
			'name'        => 'canuck_section7_background_image',
			'title'       => esc_html__( 'Section 7-Background Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section7_use_parallax'                   => array(
			'name'        => 'canuck_section7_use_parallax',
			'title'       => esc_html__( 'Section 7-Use Parallax', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section7_overlay_opacity'                => array(
			'name'        => 'canuck_section7_overlay_opacity',
			'title'       => esc_html__( 'Section 7-Overlay Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 5,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section7_background_color'               => array(
			'name'        => 'canuck_section7_background_color',
			'title'       => esc_html__( 'Section 7-Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 6,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section7_background_color_opacity'       => array(
			'name'        => 'canuck_section7_background_color_opacity',
			'title'       => esc_html__( 'Section 7-Background Color Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 7,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section7_text_color'                     => array(
			'name'        => 'canuck_section7_text_color',
			'title'       => esc_html__( 'Section 7-Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 8,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section7_text'                           => array(
			'name'        => 'canuck_section7_text',
			'title'       => esc_html__( 'Section 7-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section7_shortcode'                      => array(
			'name'        => 'canuck_section7_shortcode',
			'title'       => esc_html__( 'Section 7-Shortcode', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'Add your shortcode here if using shortcode as a Useage Option.', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_include_section7_button'                 => array(
			'name'        => 'canuck_include_section7_button',
			'title'       => esc_html__( 'Section 7-Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use a link, then use the options below.', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 11,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section7_button_name'                    => array(
			'name'        => 'canuck_section7_button_name',
			'title'       => esc_html__( 'Section 7-Button Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, note use single quotes for classes.', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 12,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section7_button_link'                    => array(
			'name'        => 'canuck_section7_button_link',
			'title'       => esc_html__( 'Section 7-Button URI', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/contact/', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 13,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section7_button_background_color'        => array(
			'name'        => 'canuck_section7_button_background_color',
			'title'       => esc_html__( 'Section 7-Button Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 14,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section7_button_text_color'              => array(
			'name'        => 'canuck_section7_button_text_color',
			'title'       => esc_html__( 'Section 7-Button Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a color for button text.', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 15,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section7_button_hover_background_color'  => array(
			'name'        => 'canuck_section7_button_hover_background_color',
			'title'       => esc_html__( 'Section 7-Button Hover Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 16,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section7_button_hover_text_color'        => array(
			'name'        => 'canuck_section7_button_hover_text_color',
			'title'       => esc_html__( 'Section 7-Button Hover Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_7',
			'priority'    => 17,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Panel:canuck_home Section:home_section_8 ================================================.
		// General options for Section 8.
		'canuck_section8_background_option_toggle'       => array(
			'name'        => 'canuck_section8_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section8_background_image'               => array(
			'name'        => 'canuck_section8_background_image',
			'title'       => esc_html__( 'Section 8-Background Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section8_overlay_opacity'                => array(
			'name'        => 'canuck_section8_overlay_opacity',
			'title'       => esc_html__( 'Section 8-Overlay Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section8_use_parallax'                   => array(
			'name'        => 'canuck_section8_use_parallax',
			'title'       => esc_html__( 'Section 8-Use Parallax', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section8_background_color'               => array(
			'name'        => 'canuck_section8_background_color',
			'title'       => esc_html__( 'Section 8-Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section8_background_color_opacity'       => array(
			'name'        => 'canuck_section8_background_color_opacity',
			'title'       => esc_html__( 'Section 8-Background Color Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section8_text_color'                     => array(
			'name'        => 'canuck_section8_text_color',
			'title'       => esc_html__( 'Section 8-Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section8_button_colors_toggle'           => array(
			'name'        => 'canuck_section8_button_colors_toggle',
			'title'       => esc_html__( 'Show/Hide Button Colors', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit link button colors.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 8,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section8_button_background_color'        => array(
			'name'        => 'canuck_section8_button_background_color',
			'title'       => esc_html__( 'Section 8-Button Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 9,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section8_button_text_color'              => array(
			'name'        => 'canuck_section8_button_text_color',
			'title'       => esc_html__( 'Section 8-Button Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color for the button.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 10,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section8_button_hover_background_color'  => array(
			'name'        => 'canuck_section8_button_hover_background_color',
			'title'       => esc_html__( 'Section 8-Button Hover Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 11,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section8_button_hover_text_color'        => array(
			'name'        => 'canuck_section8_button_hover_text_color',
			'title'       => esc_html__( 'Section 8-Button Hover Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 12,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Service box 1.
		'canuck_section8_box1_toggle'                    => array(
			'name'        => 'canuck_section8_box1_toggle',
			'title'       => esc_html__( 'Show/Hide Box 1 Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 1 options.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 13,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section8_box1_use_font_icon'             => array(
			'name'        => 'canuck_section8_box1_use_font_icon',
			'title'       => esc_html__( 'Section 8-Box 1-Font Icon', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 14,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section8_box1_image_font'                => array(
			'name'        => 'canuck_section8_box1_image_font',
			'title'       => esc_html__( 'Section 8-Box 1-Font Icon Code', 'canuck' ),
			'option_type' => 'fa',
			'choices'     => canuck_fontawesome(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 15,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section8_box1_image'                     => array(
			'name'        => 'canuck_section8_box1_image',
			'title'       => esc_html__( 'Section 8-Box 1-Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 16,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section8_box1_title'                     => array(
			'name'        => 'canuck_section8_box1_title',
			'title'       => esc_html__( 'Section 8-Box 1-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 17,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section8_box1_text'                      => array(
			'name'        => 'canuck_section8_box1_text',
			'title'       => esc_html__( 'Section 8-Box 1-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 18,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section8_box1_include_link'              => array(
			'name'        => 'canuck_section8_box1_include_link',
			'title'       => esc_html__( 'Section 8-Box 1-Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use a link', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 19,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section8_box1_button_link'               => array(
			'name'        => 'canuck_section8_box1_button_link',
			'title'       => esc_html__( 'Section 8-Box 1-Link URL', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 20,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section8_box1_button_title'              => array(
			'name'        => 'canuck_section8_box1_button_title',
			'title'       => esc_html__( 'Section 8-Box 1-Link Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link.', 'canuck' ) . ' ' . esc_html__( 'Default : ', 'canuck' ) . "&lt;i class='fa fa-link'&gt;&lt;/i&gt; more ",
			'section'     => 'home_section_8',
			'priority'    => 21,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service box 2.
		'canuck_section8_box2_toggle'                    => array(
			'name'        => 'canuck_section8_box2_toggle',
			'title'       => esc_html__( 'Show/Hide Box 2 Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 2 options.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 22,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section8_box2_use_font_icon'             => array(
			'name'        => 'canuck_section8_box2_use_font_icon',
			'title'       => esc_html__( 'Section 8-Box 2-Font Icon', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 23,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section8_box2_image_font'                => array(
			'name'        => 'canuck_section8_box2_image_font',
			'title'       => esc_html__( 'Section 8-Box 2-Font Icon Code', 'canuck' ),
			'option_type' => 'fa',
			'choices'     => canuck_fontawesome(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 24,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section8_box2_image'                     => array(
			'name'        => 'canuck_section8_box2_image',
			'title'       => esc_html__( 'Section 8-Box 2-Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 25,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section8_box2_title'                     => array(
			'name'        => 'canuck_section8_box2_title',
			'title'       => esc_html__( 'Section 8-Box 2-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 26,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section8_box2_text'                      => array(
			'name'        => 'canuck_section8_box2_text',
			'title'       => esc_html__( 'Section 8-Box 2-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 27,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section8_box2_include_link'              => array(
			'name'        => 'canuck_section8_box2_include_link',
			'title'       => esc_html__( 'Section 8-Box 2-Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 28,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section8_box2_button_link'               => array(
			'name'        => 'canuck_section8_box2_button_link',
			'title'       => esc_html__( 'Section 8-Box 2-Link URL', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 29,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section8_box2_button_title'              => array(
			'name'        => 'canuck_section8_box2_button_title',
			'title'       => esc_html__( 'Section 8-Box 2-Link Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link.', 'canuck' ) . ' ' . esc_html__( 'Default : ', 'canuck' ) . "&lt;i class='fa fa-link'&gt;&lt;/i&gt; more ",
			'section'     => 'home_section_8',
			'priority'    => 30,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Sservice box 3.
		'canuck_section8_box3_toggle'                    => array(
			'name'        => 'canuck_section8_box3_toggle',
			'title'       => esc_html__( 'Show/Hide Box 3 Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 3 options.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 31,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section8_box3_use_font_icon'             => array(
			'name'        => 'canuck_section8_box3_use_font_icon',
			'title'       => esc_html__( 'Section 8-Box 3-Font Icon', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 32,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section8_box3_image_font'                => array(
			'name'        => 'canuck_section8_box3_image_font',
			'title'       => esc_html__( 'Section 8-Box 3-Font Icon Code', 'canuck' ),
			'option_type' => 'fa',
			'choices'     => canuck_fontawesome(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 33,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section8_box3_image'                     => array(
			'name'        => 'canuck_section8_box3_image',
			'title'       => esc_html__( 'Section 8-Box 3-Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 34,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section8_box3_title'                     => array(
			'name'        => 'canuck_section8_box3_title',
			'title'       => esc_html__( 'Section 8-Box 3-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 35,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section8_box3_text'                      => array(
			'name'        => 'canuck_section8_box3_text',
			'title'       => esc_html__( 'Section 8-Box 3-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 36,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section8_box3_include_link'              => array(
			'name'        => 'canuck_section8_box3_include_link',
			'title'       => esc_html__( 'Section 8-Box 3-Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 37,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section8_box3_button_link'               => array(
			'name'        => 'canuck_section8_box3_button_link',
			'title'       => esc_html__( 'Section 8-Box 3-Link URL', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 38,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section8_box3_button_title'              => array(
			'name'        => 'canuck_section8_box3_button_title',
			'title'       => esc_html__( 'Section 8-Box 3-Link Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link.', 'canuck' ) . ' ' . esc_html__( 'Default : ', 'canuck' ) . "&lt;i class='fa fa-link'&gt;&lt;/i&gt; more ",
			'section'     => 'home_section_8',
			'priority'    => 39,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service box 4.
		'canuck_section8_box4_toggle'                    => array(
			'name'        => 'canuck_section8_box4_toggle',
			'title'       => esc_html__( 'Show/Hide Box 4 Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 4 options.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 40,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section8_box4_use_font_icon'             => array(
			'name'        => 'canuck_section8_box4_use_font_icon',
			'title'       => esc_html__( 'Section 8-Box 4-Font Icon', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 41,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section8_box4_image_font'                => array(
			'name'        => 'canuck_section8_box4_image_font',
			'title'       => esc_html__( 'Section 8-Box 4-Font Icon Code', 'canuck' ),
			'option_type' => 'fa',
			'choices'     => canuck_fontawesome(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 42,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section8_box4_image'                     => array(
			'name'        => 'canuck_section8_box4_image',
			'title'       => esc_html__( 'Section 8-Box 4-Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 43,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section8_box4_title'                     => array(
			'name'        => 'canuck_section8_box4_title',
			'title'       => esc_html__( 'Section 8-Box 4-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 44,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section8_box4_text'                      => array(
			'name'        => 'canuck_section8_box4_text',
			'title'       => esc_html__( 'Section 8-Box 4-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 45,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section8_box4_include_link'              => array(
			'name'        => 'canuck_section8_box4_include_link',
			'title'       => esc_html__( 'Section 8-Box 4-Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 46,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section8_box4_button_link'               => array(
			'name'        => 'canuck_section8_box4_button_link',
			'title'       => esc_html__( 'Section 8-Box 4-Link URL', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck' ),
			'section'     => 'home_section_8',
			'priority'    => 47,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section8_box4_button_title'              => array(
			'name'        => 'canuck_section8_box4_button_title',
			'title'       => esc_html__( 'Section 8-Box 4-Link Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link.', 'canuck' ) . ' ' . esc_html__( 'Default : ', 'canuck' ) . "&lt;i class='fa fa-link'&gt;&lt;/i&gt; more ",
			'section'     => 'home_section_8',
			'priority'    => 48,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Section 9 : Portfolio.
		'canuck_section9_background_option_toggle'       => array(
			'name'        => 'canuck_section9_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck' ),
			'section'     => 'home_section_9',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section9_background_image'               => array(
			'name'        => 'canuck_section9_background_image',
			'title'       => esc_html__( 'Section 9-Background Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck' ),
			'section'     => 'home_section_9',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section9_overlay_opacity'                => array(
			'name'        => 'canuck_section9_overlay_opacity',
			'title'       => esc_html__( 'Section 9-Overlay Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck' ),
			'section'     => 'home_section_9',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section9_use_parallax'                   => array(
			'name'        => 'canuck_section9_use_parallax',
			'title'       => esc_html__( 'Section 9-Use Parallax', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck' ),
			'section'     => 'home_section_9',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section9_background_color'               => array(
			'name'        => 'canuck_section9_background_color',
			'title'       => esc_html__( 'Section 9-Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck' ),
			'section'     => 'home_section_9',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section9_background_color_opacity'       => array(
			'name'        => 'canuck_section9_background_color_opacity',
			'title'       => esc_html__( 'Section 9-Background Color Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck' ),
			'section'     => 'home_section_9',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section9_text_color'                     => array(
			'name'        => 'canuck_section9_text_color',
			'title'       => esc_html__( 'Section 9-Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck' ),
			'section'     => 'home_section_9',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section9_title'                          => array(
			'name'        => 'canuck_section9_title',
			'title'       => esc_html__( 'Section 9-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_9',
			'priority'    => 8,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section9_text'                           => array(
			'name'        => 'canuck_section9_text',
			'title'       => esc_html__( 'Section 9-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_9',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section9_portfolio_category'             => array(
			'name'        => 'canuck_section9_portfolio_category',
			'title'       => esc_html__( 'Section 9-Portfolio Category', 'canuck' ),
			'option_type' => 'scat',
			'description' => esc_html__( 'Select the category you have used for the feature posts you are using for this portfolio section.', 'canuck' ),
			'section'     => 'home_section_9',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section9_portfolio_columns'              => array(
			'name'        => 'canuck_section9_portfolio_columns',
			'title'       => esc_html__( 'Section 9-Portfolio Columns', 'canuck' ),
			'option_type' => 'select',
			'choices'     => array(
				'3' => '3',
				'4' => '4',
			),
			'description' => esc_html__( 'you can have 3 or 4 portfolio columns', 'canuck' ),
			'section'     => 'home_section_9',
			'priority'    => 11,
			'default'     => '3',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_select',
		),
		// Section 10 : Media Left - Content Right.
		'canuck_section10_background_option_toggle'      => array(
			'name'        => 'canuck_section10_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section10_background_image'              => array(
			'name'        => 'canuck_section10_background_image',
			'title'       => esc_html__( 'Section 10-Background Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section10_overlay_opacity'               => array(
			'name'        => 'canuck_section10_overlay_opacity',
			'title'       => esc_html__( 'Section 10-Overlay Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section10_use_parallax'                  => array(
			'name'        => 'canuck_section10_use_parallax',
			'title'       => esc_html__( 'Section 10-Use Parallax', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section10_background_color'              => array(
			'name'        => 'canuck_section10_background_color',
			'title'       => esc_html__( 'Section 10-Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section10_background_color_opacity'      => array(
			'name'        => 'canuck_section10_background_color_opacity',
			'title'       => esc_html__( 'Section 10-Background Color Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section10_text_color'                    => array(
			'name'        => 'canuck_section10_text_color',
			'title'       => esc_html__( 'Section 10-Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section10_media_area_usage'              => array(
			'name'        => 'canuck_section10_media_area_usage',
			'title'       => esc_html__( 'Section 10-Media Area Usage Options', 'canuck' ),
			'option_type' => 'select',
			'choices'     => array(
				'normal'     => 'image',
				'shortcode'  => 'shortcode',
				'widgetized' => 'widgetized',
			),
			'description' => esc_html__( 'You can use an image for the media area or use a shortcode or widget in the media area.', 'canuck' ) . ' ' .
							esc_html__( 'If using an image, upload the image below.', 'canuck' ) . ' ' .
							esc_html__( 'If using a shortcode, enter the scortcode in the shortcode entry box below.', 'canuck' ) . ' ' .
							esc_html__( 'If using a widget set up your widget in Appearence -> widgets using the Home Page Section 10 tab.', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 7,
			'default'     => 'normal',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_useage',
		),
		'canuck_section10_image'                         => array(
			'name'        => 'canuck_section10_image',
			'title'       => esc_html__( 'Section 10-Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 800px wide x 533px high recommended', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 8,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section10_shortcode'                     => array(
			'name'        => 'canuck_section10_shortcode',
			'title'       => esc_html__( 'Section 10-Shortcode', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'Add your shortcode here if using shortcode as a Media Area Useage Option.', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section10_title'                         => array(
			'name'        => 'canuck_section10_title',
			'title'       => esc_html__( 'Section 10-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section10_text'                          => array(
			'name'        => 'canuck_section10_text',
			'title'       => esc_html__( 'Section 10-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 11,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section10_include_link'                  => array(
			'name'        => 'canuck_section10_include_link',
			'title'       => esc_html__( 'Section 10-Include Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 12,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section10_button_link'                   => array(
			'name'        => 'canuck_section10_button_link',
			'title'       => esc_html__( 'Section 10-Button Link', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 13,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section10_button_title'                  => array(
			'name'        => 'canuck_section10_button_title',
			'title'       => esc_html__( 'Section 10-Button Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link.', 'canuck' ) . ' ' . esc_html__( 'Default : ', 'canuck' ) . "&lt;i class='fa fa-link'&gt;&lt;/i&gt; more ",
			'section'     => 'home_section_10',
			'priority'    => 14,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section10_button_background_color'       => array(
			'name'        => 'canuck_section10_button_background_color',
			'title'       => esc_html__( 'Section 10-Button Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 15,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section10_button_text_color'             => array(
			'name'        => 'canuck_section10_button_text_color',
			'title'       => esc_html__( 'Section 10-Button Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a color for button text.', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 16,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section10_button_hover_background_color' => array(
			'name'        => 'canuck_section10_button_hover_background_color',
			'title'       => esc_html__( 'Section 10-Button Hover Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 17,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section10_button_hover_text_color'       => array(
			'name'        => 'canuck_section10_button_hover_text_color',
			'title'       => esc_html__( 'Section 10-Button Hover Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_10',
			'priority'    => 18,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Section 11: Content Left - Media Right.
		'canuck_section11_background_option_toggle'      => array(
			'name'        => 'canuck_section11_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section11_background_image'              => array(
			'name'        => 'canuck_section11_background_image',
			'title'       => esc_html__( 'Section 11-Background Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section11_overlay_opacity'               => array(
			'name'        => 'canuck_section11_overlay_opacity',
			'title'       => esc_html__( 'Section 11-Overlay Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section11_use_parallax'                  => array(
			'name'        => 'canuck_section11_use_parallax',
			'title'       => esc_html__( 'Section 11-Use Parallax', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section11_background_color'              => array(
			'name'        => 'canuck_section11_background_color',
			'title'       => esc_html__( 'Section 11-Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section11_background_color_opacity'      => array(
			'name'        => 'canuck_section11_background_color_opacity',
			'title'       => esc_html__( 'Section 11-Background Color Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section11_text_color'                    => array(
			'name'        => 'canuck_section11_text_color',
			'title'       => esc_html__( 'Section 11-Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section11_media_area_usage'              => array(
			'name'        => 'canuck_section11_media_area_usage',
			'title'       => esc_html__( 'Section 11-Media Area Usage Options', 'canuck' ),
			'option_type' => 'select',
			'choices'     => array(
				'normal'     => 'image',
				'shortcode'  => 'shortcode',
				'widgetized' => 'widgetized',
			),
			'description' => esc_html__( 'You can use an image for the media area or use a shortcode or widget in the media area.', 'canuck' ) . ' ' .
							esc_html__( 'If using an image, upload the image below.', 'canuck' ) . ' ' .
							esc_html__( 'If using a shortcode, enter the scortcode in the shortcode box below.', 'canuck' ) . ' ' .
							esc_html__( 'If using a widget set up your widget in Appearence -> widgets using the Home Page Section 11 tab.', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 7,
			'default'     => 'normal',
			'transport'   => 'refresh',
			'sanitize'    => 'canuck_sanitize_useage',
		),
		'canuck_section11_image'                         => array(
			'name'        => 'canuck_section11_image',
			'title'       => esc_html__( 'Section 11-Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 800px wide x 533px high recommended', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 8,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section11_shortcode'                     => array(
			'name'        => 'canuck_section11_shortcode',
			'title'       => esc_html__( 'Section 11-Shortcode', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'Add your shortcode here if using shortcode as a Media Area Useage Option.', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section11_title'                         => array(
			'name'        => 'canuck_section11_title',
			'title'       => esc_html__( 'Section 11-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section11_text'                          => array(
			'name'        => 'canuck_section11_text',
			'title'       => esc_html__( 'Section 11-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 11,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section11_include_link'                  => array(
			'name'        => 'canuck_section11_include_link',
			'title'       => esc_html__( 'Section 11-Include Link', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 12,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section11_button_link'                   => array(
			'name'        => 'canuck_section11_button_link',
			'title'       => esc_html__( 'Section 11-Button Link', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 13,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section11_button_title'                  => array(
			'name'        => 'canuck_section11_button_title',
			'title'       => esc_html__( 'Section 11-Button Label', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link.', 'canuck' ) . ' ' . esc_html__( 'Default : ', 'canuck' ) . "&lt;i class='fa fa-link'&gt;&lt;/i&gt; more ",
			'section'     => 'home_section_11',
			'priority'    => 14,
			'default'     => '...more',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section11_button_background_color'       => array(
			'name'        => 'canuck_section11_button_background_color',
			'title'       => esc_html__( 'Section 11-Button Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 15,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section11_button_text_color'             => array(
			'name'        => 'canuck_section11_button_text_color',
			'title'       => esc_html__( 'Section 11-Button Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a color for button text.', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 16,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section11_button_hover_background_color' => array(
			'name'        => 'canuck_section11_button_hover_background_color',
			'title'       => esc_html__( 'Section 11-Button Hover Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 17,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section11_button_hover_text_color'       => array(
			'name'        => 'canuck_section11_button_hover_text_color',
			'title'       => esc_html__( 'Section 11-Button Hover Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck' ),
			'section'     => 'home_section_11',
			'priority'    => 18,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Section 12 : Carousel.
		'canuck_section12_background_option_toggle'      => array(
			'name'        => 'canuck_section12_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck' ),
			'section'     => 'home_section_12',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section12_background_image'              => array(
			'name'        => 'canuck_section12_background_image',
			'title'       => esc_html__( 'Section 12-Background Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image', 'canuck' ),
			'section'     => 'home_section_12',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section12_overlay_opacity'               => array(
			'name'        => 'canuck_section12_overlay_opacity',
			'title'       => esc_html__( 'Section 12-Overlay Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck' ),
			'section'     => 'home_section_12',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section12_use_parallax'                  => array(
			'name'        => 'canuck_section12_use_parallax',
			'title'       => esc_html__( 'Section 12-Use Parallax', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck' ),
			'section'     => 'home_section_12',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section12_background_color'              => array(
			'name'        => 'canuck_section12_background_color',
			'title'       => esc_html__( 'Section 12-Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck' ),
			'section'     => 'home_section_12',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section12_background_color_opacity'      => array(
			'name'        => 'canuck_section12_background_color_opacity',
			'title'       => esc_html__( 'Section 12-Background Color Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck' ),
			'section'     => 'home_section_12',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section12_text_color'                    => array(
			'name'        => 'canuck_section12_text_color',
			'title'       => esc_html__( 'Section 12-Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck' ),
			'section'     => 'home_section_12',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section12_title'                         => array(
			'name'        => 'canuck_section12_title',
			'title'       => esc_html__( 'Section 12-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_12',
			'priority'    => 8,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section12_text'                          => array(
			'name'        => 'canuck_section12_text',
			'title'       => esc_html__( 'Section 12-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_12',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section12_portfolio_category'            => array(
			'name'        => 'canuck_section12_portfolio_category',
			'title'       => esc_html__( 'Section 12-Portfolio Category', 'canuck' ),
			'option_type' => 'scat',
			'description' => esc_html__( 'Select the category you have used for the feature posts you are using for this portfolio section.', 'canuck' ),
			'section'     => 'home_section_12',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		// Section 13 : Carousel.
		'canuck_section13_background_option_toggle'      => array(
			'name'        => 'canuck_section13_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck' ),
			'section'     => 'home_section_13',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section13_background_image'              => array(
			'name'        => 'canuck_section13_background_image',
			'title'       => esc_html__( 'Section 13-Background Image', 'canuck' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image', 'canuck' ),
			'section'     => 'home_section_13',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuck_section13_overlay_opacity'               => array(
			'name'        => 'canuck_section13_overlay_opacity',
			'title'       => esc_html__( 'Section 13-Overlay Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck' ),
			'section'     => 'home_section_13',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section13_use_parallax'                  => array(
			'name'        => 'canuck_section13_use_parallax',
			'title'       => esc_html__( 'Section 13-Use Parallax', 'canuck' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck' ),
			'section'     => 'home_section_13',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuck_section13_background_color'              => array(
			'name'        => 'canuck_section13_background_color',
			'title'       => esc_html__( 'Section 13-Background Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck' ),
			'section'     => 'home_section_13',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section13_background_color_opacity'      => array(
			'name'        => 'canuck_section13_background_color_opacity',
			'title'       => esc_html__( 'Section 13-Background Color Opacity', 'canuck' ),
			'option_type' => 'range',
			'choices'     => canuck_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck' ),
			'section'     => 'home_section_13',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuck_section13_text_color'                    => array(
			'name'        => 'canuck_section13_text_color',
			'title'       => esc_html__( 'Section 13-Text Color', 'canuck' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck' ),
			'section'     => 'home_section_13',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuck_section13_title'                         => array(
			'name'        => 'canuck_section13_title',
			'title'       => esc_html__( 'Section 13-Title', 'canuck' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_13',
			'priority'    => 8,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section13_text'                          => array(
			'name'        => 'canuck_section13_text',
			'title'       => esc_html__( 'Section 13-Content', 'canuck' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck' ),
			'section'     => 'home_section_13',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuck_section13_portfolio_category'            => array(
			'name'        => 'canuck_section13_portfolio_category',
			'title'       => esc_html__( 'Section 13-Portfolio Category', 'canuck' ),
			'option_type' => 'scat',
			'description' => esc_html__( 'Select the category you have used for the feature posts you are using for this portfolio section.', 'canuck' ),
			'section'     => 'home_section_13',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
	);
	return apply_filters( 'canuck_get_customizer_option_parameters', $options );
}

/**
 * Register set up the options.
 *
 * @param array $wp_customize global array.
 */
function canuck_customize_register( $wp_customize ) {
	global $wp_customize;
	// Start by adding custom controls.
	canuck_add_custom_controls();
	// Set up Customizer Panels and Sections.
	canuck_setup_panels_sections();
	// Set up the options.
	$canuck_customize_options = canuck_get_customizer_option_partameters();

	foreach ( $canuck_customize_options as $canuck_option ) {
		// Add option setting.
		canuck_add_setting_theme_mod( $canuck_option );
		// Add option control.
		canuck_add_control_theme_mod( $canuck_option );
	}
	if ( is_child_theme() ) {
		$wp_customize->add_setting(
			'canuck_import_parent_theme_options',
			array(
				'default'           => false,
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'theme_supports'    => '',
				'transport'         => 'refresh',
				'sanitize_callback' => 'wp_validate_boolean',
			)
		);
		$wp_customize->add_control(
			'canuck_import_parent_theme_options',
			array(
				'label'       => esc_html__( 'Import Parent Theme Options', 'canuck' ),
				'section'     => 'general_backup_options',
				'settings'    => 'canuck_import_parent_theme_options',
				'type'        => 'checkbox',
				'description' => esc_html__( 'This option is being displayed because you are using a child theme.', 'canuck' ) . ' ' .
								esc_html__( 'When you initially set up a child theme, all options are reset to defaults.', 'canuck' ) . ' ' .
								esc_html__( 'If you check the box above and then "Save and Publish", all Canuck custom options from the parent theme will be imported to the child theme. ', 'canuck' ) . '<br/><br/>' .
								esc_html__( 'Options that are set to the default value in the child theme will be overwritten by options in the Parent Theme that are not default. ', 'canuck' ) .
								esc_html__( 'Only use for initial set up of the child theme, and do not use again or you may lose default settings you wish to keep.', 'canuck' ) . '<br/><br/>' .
								'<span style="color:red">' . esc_html__( 'Un-check the box and "Save & Publish" after you do the import to prevent it from happening again.', 'canuck' ) . '</span><br/><br/>',
				'priority'    => 2,
			)
		);
	}
}
add_action( 'customize_register', 'canuck_customize_register' );

/**
 * SETUP PANELS AND SECTIONS
 *
 * This helper function sets up panels and sections for Theme Customizer.
 */
function canuck_setup_panels_sections() {
	global $wp_customize;
	$groups = array();
	$group  = array();
	$groups = canuck_get_customizer_groups();
	foreach ( $groups as $group ) {
		// Add panel.
		$wp_customize->add_panel(
			$group['name'],
			array(
				'priority'       => $group['priority'],
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => $group['title'],
				'description'    => $group['description'],
			)
		);
		// Add sections in panel.
		foreach ( $group['sections'] as $section ) {
			$wp_customize->add_section(
				$section['name'],
				array(
					'priority'       => $section['priority'],
					'capability'     => 'edit_theme_options',
					'theme_supports' => '',
					'title'          => $section['title'],
					'description'    => $section['description'],
					'panel'          => $group['name'],
				)
			);
		}
	}
}

/**
 * ADD SETTING THEME MOD TABLE
 *
 * This helper function loads adds a setting in Theme Customizer.
 * This setting function applies to options with 'setting_type'=>'theme_mod'.
 *
 * -------- capability --------------------------------------------------------------.
 * Note that capability is set to 'edit_theme_options' and will apply to all settings.
 * If you want to add different capabilities to each setting then change it to
 * $canuck_option['capability'] and add 'capability' => 'capability you want' to the
 * options array below.
 * -------- theme_supports ----------------------------------------------------------.
 * Note that theme_supports is set to '' and will apply to all settings.
 * If you want to add theme_cupports to each setting then change it to
 * $canuck_option['supports'] and add 'supports' => 'support you want' to the
 * options array below.
 * -------- sanitize_js_callback ----------------------------------------------------------.
 * Note that sanitize_js_callback is commented out. I initially set to '', but themecheck
 * was giving errors, and I was informed to just comment it out.
 * If you want to add sanitize_js_callback to each setting then change it to
 * $canuck_option['sanitize_js_callback'] and add 'sanitize_js_callback' => 'your js callback'
 * to the options array below.
 * ----------------------------------------------------------------------------------.
 * ref: https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_setting.
 *
 * @param array $canuck_option contains the custom option parameters.
 */
function canuck_add_setting_theme_mod( $canuck_option ) {
	global $wp_customize;
	// Add_setting for option.
	$wp_customize->add_setting(
		$canuck_option['name'],
		array(
			'default'           => $canuck_option['default'],
			'capability'        => 'edit_theme_options',
			'theme_supports'    => '',
			'transport'         => $canuck_option['transport'],
			'sanitize_callback' => $canuck_option['sanitize'],
		)
	);
}

/**
 * ADD CONTROL THEME MOD TABLE
 *
 * This helper function adds a control for Theme Customizer.
 * This function applies to options with 'setting_type'=>'theme_mod'.
 *
 * ref:https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control.
 *
 * @param array $canuck_option contains the custom option parameters.
 */
function canuck_add_control_theme_mod( $canuck_option ) {
	global $wp_customize;
	if ( 'text' === $canuck_option['option_type'] ) {
		$wp_customize->add_control(
			$canuck_option['name'],
			array(
				'label'       => $canuck_option['title'],
				'section'     => $canuck_option['section'],
				'settings'    => $canuck_option['name'],
				'type'        => $canuck_option['option_type'],
				'description' => $canuck_option['description'],
				'priority'    => $canuck_option['priority'],
			)
		);
	} elseif ( 'textarea' === $canuck_option['option_type'] ) {
		$wp_customize->add_control(
			$canuck_option['name'],
			array(
				'label'       => $canuck_option['title'],
				'section'     => $canuck_option['section'],
				'settings'    => $canuck_option['name'],
				'type'        => $canuck_option['option_type'],
				'description' => $canuck_option['description'],
				'priority'    => $canuck_option['priority'],
			)
		);
	} elseif ( 'checkbox' === $canuck_option['option_type'] ) {
		$wp_customize->add_control(
			$canuck_option['name'],
			array(
				'label'       => $canuck_option['title'],
				'section'     => $canuck_option['section'],
				'settings'    => $canuck_option['name'],
				'type'        => $canuck_option['option_type'],
				'description' => $canuck_option['description'],
				'priority'    => $canuck_option['priority'],
			)
		);
	} elseif ( 'radio' === $canuck_option['option_type'] ) {
		$wp_customize->add_control(
			$canuck_option['name'],
			array(
				'label'       => $canuck_option['title'],
				'section'     => $canuck_option['section'],
				'settings'    => $canuck_option['name'],
				'type'        => $canuck_option['option_type'],
				'description' => $canuck_option['description'],
				'priority'    => $canuck_option['priority'],
				'choices'     => $canuck_option['choices'],
			)
		);
	} elseif ( 'select' === $canuck_option['option_type'] ) {
		$wp_customize->add_control(
			$canuck_option['name'],
			array(
				'label'       => $canuck_option['title'],
				'section'     => $canuck_option['section'],
				'settings'    => $canuck_option['name'],
				'type'        => $canuck_option['option_type'],
				'description' => $canuck_option['description'],
				'priority'    => $canuck_option['priority'],
				'choices'     => $canuck_option['choices'],
			)
		);
	} elseif ( 'range' === $canuck_option['option_type'] ) {
		$wp_customize->add_control(
			$canuck_option['name'],
			array(
				'label'       => $canuck_option['title'],
				'section'     => $canuck_option['section'],
				'settings'    => $canuck_option['name'],
				'type'        => $canuck_option['option_type'],
				'description' => $canuck_option['description'],
				'priority'    => $canuck_option['priority'],
				'input_attrs' => $canuck_option['choices'],
			)
		);
	} elseif ( 'color' === $canuck_option['option_type'] ) {
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$canuck_option['name'],
				array(
					'label'       => $canuck_option['title'],
					'section'     => $canuck_option['section'],
					'settings'    => $canuck_option['name'],
					'type'        => $canuck_option['option_type'],
					'description' => $canuck_option['description'],
					'priority'    => $canuck_option['priority'],
				)
			)
		);
	} elseif ( 'image' === $canuck_option['option_type'] ) {
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				$canuck_option['name'],
				array(
					'label'       => $canuck_option['title'],
					'section'     => $canuck_option['section'],
					'settings'    => $canuck_option['name'],
					'type'        => $canuck_option['option_type'],
					'description' => $canuck_option['description'],
					'priority'    => $canuck_option['priority'],
				)
			)
		);
	} elseif ( 'upload' === $canuck_option['option_type'] ) {
		$wp_customize->add_control(
			new WP_Customize_Upload_Control(
				$wp_customize,
				$canuck_option['name'],
				array(
					'label'       => $canuck_option['title'],
					'section'     => $canuck_option['section'],
					'settings'    => $canuck_option['name'],
					'type'        => $canuck_option['option_type'],
					'description' => $canuck_option['description'],
					'priority'    => $canuck_option['priority'],
				)
			)
		);
	} elseif ( 'scat' === $canuck_option['option_type'] ) {
		$wp_customize->add_control(
			new Canuck_Category_Dropdown_Custom_Control(
				$wp_customize,
				$canuck_option['name'],
				array(
					'label'       => $canuck_option['title'],
					'section'     => $canuck_option['section'],
					'settings'    => $canuck_option['name'],
					'type'        => $canuck_option['option_type'],
					'description' => $canuck_option['description'],
					'priority'    => $canuck_option['priority'],
				)
			)
		);
	} elseif ( 'stag' === $canuck_option['option_type'] ) {
		$wp_customize->add_control(
			new Canuck_Tags_Dropdown_Custom_Control(
				$wp_customize,
				$canuck_option['name'],
				array(
					'label'       => $canuck_option['title'],
					'section'     => $canuck_option['section'],
					'settings'    => $canuck_option['name'],
					'type'        => $canuck_option['option_type'],
					'description' => $canuck_option['description'],
					'priority'    => $canuck_option['priority'],
				)
			)
		);
	} elseif ( 'mcat' === $canuck_option['option_type'] ) {
		$wp_customize->add_control(
			new Canuck_Category_Checkboxes_Control(
				$wp_customize,
				$canuck_option['name'],
				array(
					'label'       => $canuck_option['title'],
					'section'     => $canuck_option['section'],
					'settings'    => $canuck_option['name'],
					'type'        => $canuck_option['option_type'],
					'description' => $canuck_option['description'],
					'priority'    => $canuck_option['priority'],
				)
			)
		);
	} elseif ( 'fa' === $canuck_option['option_type'] ) {
		$wp_customize->add_control(
			new Canuck_Customizer_Fontawesome_Control(
				$wp_customize,
				$canuck_option['name'],
				array(
					'label'       => $canuck_option['title'],
					'section'     => $canuck_option['section'],
					'settings'    => $canuck_option['name'],
					'type'        => $canuck_option['option_type'],
					'description' => $canuck_option['description'],
					'priority'    => $canuck_option['priority'],
					'choices'     => $canuck_option['choices'],
				)
			)
		);
	} elseif ( 'radio_image' === $canuck_option['option_type'] ) {
		$wp_customize->add_control(
			new Canuck_Custom_Radio_Image_Control(
				$wp_customize,
				$canuck_option['name'],
				array(
					'label'       => $canuck_option['title'],
					'section'     => $canuck_option['section'],
					'settings'    => $canuck_option['name'],
					'type'        => $canuck_option['option_type'],
					'description' => $canuck_option['description'],
					'priority'    => $canuck_option['priority'],
					'choices'     => $canuck_option['choices'],
				)
			)
		);
	}
}
/**
 * CUSTOM CONTROLS
 *
 * This helper function loads the Custom Controls for Theme Customizer
 */
function canuck_add_custom_controls() {
	if ( class_exists( 'WP_Customize_Control' ) ) {
		/**
		 * Class to create a custom category control.
		 *
		 * Source: https://github.com/bueltge/Wordpress-Theme-Customizer-Custom-Controls.
		 */
		class Canuck_Category_Dropdown_Custom_Control extends WP_Customize_Control {
			/**
			 * Render Content
			 */
			public function render_content() {
				?>
				<label>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
					<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
					<select <?php $this->link(); ?>>
						<?php
						$args = array();
						$cats = get_categories( $args );
						foreach ( $cats as $cat ) {
							echo '<option value="' . esc_attr( $cat->name ) . '"' . selected( $this->value(), $cat->name ) . '>' . esc_html( $cat->name ) . '</option>';
						}
						?>
					</select>
				</label>
				<?php
			}
		}
	}

	if ( class_exists( 'WP_Customize_Control' ) ) {
		/**
		 * Class to create a custom tags control.
		 * Modified from //source https://github.com/bueltge/Wordpress-Theme-Customizer-Custom-Controls.
		 */
		class Canuck_Tags_Dropdown_Custom_Control extends WP_Customize_Control {
			/**
			 * Render the content on the theme customizer page
			 */
			public function render_content() {
				?>
				<label>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
					<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
					<select <?php $this->link(); ?>>
						<?php
						$tags = get_tags();
						foreach ( $tags as $tag ) {
							echo '<option value="' . esc_attr( $tag->name ) . '" ' . selected( $this->value, $tag->name ) . '>' . esc_html( $tag->name ) . '</option>';
						}
						?>
					</select>
				</label>
				<?php
			}
		}
	}

	if ( class_exists( 'WP_Customize_Control' ) ) {
		/**
		 * Adds multiple category selection support to the theme customizer via checkboxes.
		 *
		 * The category IDs are saved in the database as a comma separated string.
		 *
		 * ref: http://themefoundation.com/customizer-multiple-category-control/
		 */
		class Canuck_Category_Checkboxes_Control extends WP_Customize_Control {
			/**
			 * Declare the control type.
			 *
			 * @access public
			 * @var string
			 */
			public $type = 'category-checkboxes';
			/**
			 * Enqueue control js.
			 */
			public function enqueue() {
				wp_enqueue_script( 'canuck-customize-mcat', get_template_directory_uri() . '/js/kha-customize-mcat.js', array( 'jquery' ) );
			}
			/**
			 * Render the content.
			 */
			public function render_content() {
				// Display checkbox heading and description.
				?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php
				// Displays category checkboxes.
				foreach ( get_categories() as $category ) {
					echo '<label><input type="checkbox" name="category-' . esc_attr( $category->term_id ) . '" id="category-' . esc_attr( $category->term_id ) . '" class="cstmzr-category-checkbox"> ' . esc_html( $category->cat_name ) . '</label><br>';
				}
				// Loads the hidden input field that stores the saved category list.
				?>
				<input type="hidden" id="<?php echo esc_attr( $this->id ); ?>" class="cstmzr-hidden-categories" <?php esc_url( $this->link() ); ?> value="<?php echo esc_attr( $this->value() ); ?>">
				<?php
			}
		}
	}// End if().

	if ( class_exists( 'WP_Customize_Control' ) ) {
		/**
		 * Create a Radio-Image control
		 *
		 * This class incorporates code from the Kirki Customizer Framework and from a tutorial
		 * written by Otto Wood.
		 *
		 * The Kirki Customizer Framework, Copyright Aristeides Stathopoulos (@aristath),
		 * is licensed under the terms of the GNU GPL, Version 2 (or later).
		 *
		 * @link https://github.com/reduxframework/kirki/
		 * @link http://ottopress.com/2012/making-a-custom-control-for-the-theme-customizer/
		 */
		class Canuck_Custom_Radio_Image_Control extends WP_Customize_Control {
			/**
			 * Declare the control type.
			 *
			 * @access public
			 * @var string
			 */
			public $type = 'radio_image';
			/**
			 * Enqueue scripts and styles for the custom control.
			 *
			 * Scripts are hooked at {@see 'customize_controls_enqueue_scripts'}.
			 *
			 * Note, you can also enqueue stylesheets here as well. Stylesheets are hooked
			 * at 'customize_controls_print_styles'.
			 *
			 * @access public
			 */
			public function enqueue() {
				wp_enqueue_script( 'jquery-ui-button' );
			}
			/**
			 * Render the control to be displayed in the Customizer.
			 */
			public function render_content() {
				if ( empty( $this->choices ) ) {
					return;
				}
				$name = '_customize-radio-' . $this->id;
				?>
				<span class="customize-control-title">
					<?php echo esc_attr( $this->label ); ?>
					<?php
					if ( ! empty( $this->description ) ) {
						?>
						<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
						<?php
					}
					?>
				</span>
				<div id="input_<?php echo esc_attr( $this->id ); ?>" class="image">
					<?php
					foreach ( $this->choices as $value => $label ) {
						?>
						<input class="image-select" type="radio" value="<?php echo esc_attr( $value ); ?>" 
								id="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>" 
								name="<?php echo esc_attr( $name ); ?>" 
								<?php $this->link(); ?>
								<?php checked( $this->value(), $value ); ?>>
							<label for="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>">
								<img src="<?php echo esc_url( $label ); ?>" alt="<?php echo esc_attr( $value ); ?>" title="<?php echo esc_attr( $value ); ?>">
							</label>
						</input>
						<?php
					}
					?>
				</div>
				<script>jQuery(document).ready(function(jQuery) { jQuery( '[id="input_<?php echo esc_attr( $this->id ); ?>"]' ).buttonset(); });</script>
				<?php
			}
		}
	}// End if().

	if ( class_exists( 'WP_Customize_Control' ) ) {
		/**
		 * Class to add a Fontawesome dropdown selection c/w icons
		 */
		class Canuck_Customizer_Fontawesome_Control extends WP_Customize_Control {
			/**
			 * Declare the control type.
			 *
			 * @access public
			 * @var string
			 */
			public $type = 'canuck-icon-picker';
			/**
			 * Enqueue css
			 */
			public function enqueue() {
				wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css' );
			}
			/**
			 * Render content.
			 */
			public function render_content() {
				if ( empty( $this->choices ) ) {
					return;
				}
				?>
				<label>
					<?php
					if ( ! empty( $this->label ) ) {
						?>
						<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
						<?php
					}
					if ( ! empty( $this->description ) ) {
						?>
						<span class="description customize-control-description"><?php echo wp_kses_post( $this->description ); ?></span>
						<?php
					}
					?>
					<select <?php $this->link(); ?> style="font-family: 'FontAwesome', Arial;">
						<?php
						foreach ( $this->choices as $value => $label ) {
							// Note $label must not be escaped or it will not work, $label is from a hardcoded array so escaping is not really necessary.
							echo '<option value="' . esc_attr( $value ) . '"' . selected( $this->value(), $value, false ) . '>' . $label . ' ' . wp_kses_post( $value ) . '</option>';// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						}
						?>
					</select>
				</label>
				<?php
			}
		}
	}// End if().
}

/**
 * This function adds some styles to the WordPress Customizer
 */
function canuck_customizer_styles() {
	wp_enqueue_style( 'canuck-template', get_theme_file_uri( '/css/customizer.css' ), array(), '1.0' );
}
add_action( 'customize_controls_print_styles', 'canuck_customizer_styles', 999 );

/**
 * Build Fontawesome array for select dropdown.
 */
function canuck_fontawesome() {
	// 4.7.
	return array(
		'fa-500px'                               => '&#xf26e;',
		'fa-address-book'                        => '&#xf2b9;',
		'fa-address-book-o'                      => '&#xf2ba;',
		'fa-address-card'                        => '&#xf2bb;',
		'fa-address-card-o'                      => '&#xf2bc;',
		'fa-adjust'                              => '&#xf042;',
		'fa-adn'                                 => '&#xf170;',
		'fa-align-center'                        => '&#xf037;',
		'fa-align-justify'                       => '&#xf039;',
		'fa-align-left'                          => '&#xf036;',
		'fa-align-right'                         => '&#xf038;',
		'fa-amazon'                              => '&#xf270;',
		'fa-ambulance'                           => '&#xf0f9;',
		'fa-american-sign-language-interpreting' => '&#xf2a3;',
		'fa-anchor'                              => '&#xf13d;',
		'fa-android'                             => '&#xf17b;',
		'fa-angellist'                           => '&#xf209;',
		'fa-angle-double-down'                   => '&#xf103;',
		'fa-angle-double-left'                   => '&#xf100;',
		'fa-angle-double-right'                  => '&#xf101;',
		'fa-angle-double-up'                     => '&#xf102;',
		'fa-angle-down'                          => '&#xf107;',
		'fa-angle-left'                          => '&#xf104;',
		'fa-angle-right'                         => '&#xf105;',
		'fa-angle-up'                            => '&#xf106;',
		'fa-apple'                               => '&#xf179;',
		'fa-archive'                             => '&#xf187;',
		'fa-area-chart'                          => '&#xf1fe;',
		'fa-arrow-circle-down'                   => '&#xf0ab;',
		'fa-arrow-circle-left'                   => '&#xf0a8;',
		'fa-arrow-circle-o-down'                 => '&#xf01a;',
		'fa-arrow-circle-o-left'                 => '&#xf190;',
		'fa-arrow-circle-o-right'                => '&#xf18e;',
		'fa-arrow-circle-o-up'                   => '&#xf01b;',
		'fa-arrow-circle-right'                  => '&#xf0a9;',
		'fa-arrow-circle-up'                     => '&#xf0aa;',
		'fa-arrow-down'                          => '&#xf063;',
		'fa-arrow-left'                          => '&#xf060;',
		'fa-arrow-right'                         => '&#xf061;',
		'fa-arrows'                              => '&#xf047;',
		'fa-arrows-alt'                          => '&#xf0b2;',
		'fa-arrows-h'                            => '&#xf07e;',
		'fa-arrows-v'                            => '&#xf07d;',
		'fa-arrow-up'                            => '&#xf062;',
		'fa-assistive-listening-systems'         => '&#xf2a2;',
		'fa-asterisk'                            => '&#xf069;',
		'fa-at'                                  => '&#xf1fa;',
		'fa-audio-description'                   => '&#xf29e;',
		'fa-backward'                            => '&#xf04a;',
		'fa-balance-scale'                       => '&#xf24e;',
		'fa-ban'                                 => '&#xf05e;',
		'fa-bandcamp'                            => '&#xf2d5;',
		'fa-bar-chart'                           => '&#xf080;',
		'fa-barcode'                             => '&#xf02a;',
		'fa-bars'                                => '&#xf0c9;',
		'fa-bath'                                => '&#xf2cd;',
		'fa-battery-empty'                       => '&#xf244;',
		'fa-battery-full'                        => '&#xf240;',
		'fa-battery-half'                        => '&#xf242;',
		'fa-battery-quarter'                     => '&#xf243;',
		'fa-battery-three-quarters'              => '&#xf241;',
		'fa-bed'                                 => '&#xf236;',
		'fa-beer'                                => '&#xf0fc;',
		'fa-behance'                             => '&#xf1b4;',
		'fa-behance-square'                      => '&#xf1b5;',
		'fa-bell'                                => '&#xf0f3;',
		'fa-bell-o'                              => '&#xf0a2;',
		'fa-bell-slash'                          => '&#xf1f6;',
		'fa-bell-slash-o'                        => '&#xf1f7;',
		'fa-bicycle'                             => '&#xf206;',
		'fa-binoculars'                          => '&#xf1e5;',
		'fa-birthday-cake'                       => '&#xf1fd;',
		'fa-bitbucket'                           => '&#xf171;',
		'fa-bitbucket-square'                    => '&#xf172;',
		'fa-black-tie'                           => '&#xf27e;',
		'fa-blind'                               => '&#xf29d;',
		'fa-bluetooth'                           => '&#xf293;',
		'fa-bluetooth-b'                         => '&#xf294;',
		'fa-bold'                                => '&#xf032;',
		'fa-bolt'                                => '&#xf0e7;',
		'fa-bomb'                                => '&#xf1e2;',
		'fa-book'                                => '&#xf02d;',
		'fa-bookmark'                            => '&#xf02e;',
		'fa-bookmark-o'                          => '&#xf097;',
		'fa-braille'                             => '&#xf2a1;',
		'fa-briefcase'                           => '&#xf0b1;',
		'fa-btc'                                 => '&#xf15a;',
		'fa-bug'                                 => '&#xf188;',
		'fa-building'                            => '&#xf1ad;',
		'fa-building-o'                          => '&#xf0f7;',
		'fa-bullhorn'                            => '&#xf0a1;',
		'fa-bullseye'                            => '&#xf140;',
		'fa-bus'                                 => '&#xf207;',
		'fa-buysellads'                          => '&#xf20d;',
		'fa-calculator'                          => '&#xf1ec;',
		'fa-calendar'                            => '&#xf073;',
		'fa-calendar-check-o'                    => '&#xf274;',
		'fa-calendar-minus-o'                    => '&#xf272;',
		'fa-calendar-o'                          => '&#xf133;',
		'fa-calendar-plus-o'                     => '&#xf271;',
		'fa-calendar-times-o'                    => '&#xf273;',
		'fa-camera'                              => '&#xf030;',
		'fa-camera-retro'                        => '&#xf083;',
		'fa-car'                                 => '&#xf1b9;',
		'fa-caret-down'                          => '&#xf0d7;',
		'fa-caret-left'                          => '&#xf0d9;',
		'fa-caret-right'                         => '&#xf0da;',
		'fa-caret-square-o-down'                 => '&#xf150;',
		'fa-caret-square-o-left'                 => '&#xf191;',
		'fa-caret-square-o-right'                => '&#xf152;',
		'fa-caret-square-o-up'                   => '&#xf151;',
		'fa-caret-up'                            => '&#xf0d8;',
		'fa-cart-arrow-down'                     => '&#xf218;',
		'fa-cart-plus'                           => '&#xf217;',
		'fa-cc'                                  => '&#xf20a;',
		'fa-cc-amex'                             => '&#xf1f3;',
		'fa-cc-diners-club'                      => '&#xf24c;',
		'fa-cc-discover'                         => '&#xf1f2;',
		'fa-cc-jcb'                              => '&#xf24b;',
		'fa-cc-mastercard'                       => '&#xf1f1;',
		'fa-cc-paypal'                           => '&#xf1f4;',
		'fa-cc-stripe'                           => '&#xf1f5;',
		'fa-cc-visa'                             => '&#xf1f0;',
		'fa-certificate'                         => '&#xf0a3;',
		'fa-chain-broken'                        => '&#xf127;',
		'fa-check'                               => '&#xf00c;',
		'fa-check-circle'                        => '&#xf058;',
		'fa-check-circle-o'                      => '&#xf05d;',
		'fa-check-square'                        => '&#xf14a;',
		'fa-check-square-o'                      => '&#xf046;',
		'fa-chevron-circle-down'                 => '&#xf13a;',
		'fa-chevron-circle-left'                 => '&#xf137;',
		'fa-chevron-circle-right'                => '&#xf138;',
		'fa-chevron-circle-up'                   => '&#xf139;',
		'fa-chevron-down'                        => '&#xf078;',
		'fa-chevron-left'                        => '&#xf053;',
		'fa-chevron-right'                       => '&#xf054;',
		'fa-chevron-up'                          => '&#xf077;',
		'fa-child'                               => '&#xf1ae;',
		'fa-chrome'                              => '&#xf268;',
		'fa-circle'                              => '&#xf111;',
		'fa-circle-o'                            => '&#xf10c;',
		'fa-circle-o-notch'                      => '&#xf1ce;',
		'fa-circle-thin'                         => '&#xf1db;',
		'fa-clipboard'                           => '&#xf0ea;',
		'fa-clock-o'                             => '&#xf017;',
		'fa-clone'                               => '&#xf24d;',
		'fa-cloud'                               => '&#xf0c2;',
		'fa-cloud-download'                      => '&#xf0ed;',
		'fa-cloud-upload'                        => '&#xf0ee;',
		'fa-code'                                => '&#xf121;',
		'fa-code-fork'                           => '&#xf126;',
		'fa-codepen'                             => '&#xf1cb;',
		'fa-codiepie'                            => '&#xf284;',
		'fa-coffee'                              => '&#xf0f4;',
		'fa-cog'                                 => '&#xf013;',
		'fa-cogs'                                => '&#xf085;',
		'fa-columns'                             => '&#xf0db;',
		'fa-comment'                             => '&#xf075;',
		'fa-commenting'                          => '&#xf27a;',
		'fa-commenting-o'                        => '&#xf27b;',
		'fa-comment-o'                           => '&#xf0e5;',
		'fa-comments'                            => '&#xf086;',
		'fa-comments-o'                          => '&#xf0e6;',
		'fa-compass'                             => '&#xf14e;',
		'fa-compress'                            => '&#xf066;',
		'fa-connectdevelop'                      => '&#xf20e;',
		'fa-contao'                              => '&#xf26d;',
		'fa-copyright'                           => '&#xf1f9;',
		'fa-creative-commons'                    => '&#xf25e;',
		'fa-credit-card'                         => '&#xf09d;',
		'fa-credit-card-alt'                     => '&#xf283;',
		'fa-crop'                                => '&#xf125;',
		'fa-crosshairs'                          => '&#xf05b;',
		'fa-css3'                                => '&#xf13c;',
		'fa-cube'                                => '&#xf1b2;',
		'fa-cubes'                               => '&#xf1b3;',
		'fa-cutlery'                             => '&#xf0f5;',
		'fa-dashcube'                            => '&#xf210;',
		'fa-database'                            => '&#xf1c0;',
		'fa-deaf'                                => '&#xf2a4;',
		'fa-delicious'                           => '&#xf1a5;',
		'fa-desktop'                             => '&#xf108;',
		'fa-deviantart'                          => '&#xf1bd;',
		'fa-diamond'                             => '&#xf219;',
		'fa-digg'                                => '&#xf1a6;',
		'fa-dot-circle-o'                        => '&#xf192;',
		'fa-download'                            => '&#xf019;',
		'fa-dribbble'                            => '&#xf17d;',
		'fa-dropbox'                             => '&#xf16b;',
		'fa-drupal'                              => '&#xf1a9;',
		'fa-edge'                                => '&#xf282;',
		'fa-eercast'                             => '&#xf2da;',
		'fa-eject'                               => '&#xf052;',
		'fa-ellipsis-h'                          => '&#xf141;',
		'fa-ellipsis-v'                          => '&#xf142;',
		'fa-empire'                              => '&#xf1d1;',
		'fa-envelope'                            => '&#xf0e0;',
		'fa-envelope-o'                          => '&#xf003;',
		'fa-envelope-open'                       => '&#xf2b6;',
		'fa-envelope-open-o'                     => '&#xf2b7;',
		'fa-envelope-square'                     => '&#xf199;',
		'fa-envira'                              => '&#xf299;',
		'fa-eraser'                              => '&#xf12d;',
		'fa-etsy'                                => '&#xf2d7;',
		'fa-eur'                                 => '&#xf153;',
		'fa-exchange'                            => '&#xf0ec;',
		'fa-exclamation'                         => '&#xf12a;',
		'fa-exclamation-circle'                  => '&#xf06a;',
		'fa-exclamation-triangle'                => '&#xf071;',
		'fa-expand'                              => '&#xf065;',
		'fa-expeditedssl'                        => '&#xf23e;',
		'fa-external-link'                       => '&#xf08e;',
		'fa-external-link-square'                => '&#xf14c;',
		'fa-eye'                                 => '&#xf06e;',
		'fa-eyedropper'                          => '&#xf1fb;',
		'fa-eye-slash'                           => '&#xf070;',
		'fa-facebook'                            => '&#xf09a;',
		'fa-facebook-official'                   => '&#xf230;',
		'fa-facebook-square'                     => '&#xf082;',
		'fa-fast-backward'                       => '&#xf049;',
		'fa-fast-forward'                        => '&#xf050;',
		'fa-fax'                                 => '&#xf1ac;',
		'fa-female'                              => '&#xf182;',
		'fa-fighter-jet'                         => '&#xf0fb;',
		'fa-file'                                => '&#xf15b;',
		'fa-file-archive-o'                      => '&#xf1c6;',
		'fa-file-audio-o'                        => '&#xf1c7;',
		'fa-file-code-o'                         => '&#xf1c9;',
		'fa-file-excel-o'                        => '&#xf1c3;',
		'fa-file-image-o'                        => '&#xf1c5;',
		'fa-file-o'                              => '&#xf016;',
		'fa-file-pdf-o'                          => '&#xf1c1;',
		'fa-file-powerpoint-o'                   => '&#xf1c4;',
		'fa-files-o'                             => '&#xf0c5;',
		'fa-file-text'                           => '&#xf15c;',
		'fa-file-text-o'                         => '&#xf0f6;',
		'fa-file-video-o'                        => '&#xf1c8;',
		'fa-file-word-o'                         => '&#xf1c2;',
		'fa-film'                                => '&#xf008;',
		'fa-filter'                              => '&#xf0b0;',
		'fa-fire'                                => '&#xf06d;',
		'fa-fire-extinguisher'                   => '&#xf134;',
		'fa-firefox'                             => '&#xf269;',
		'fa-first-order'                         => '&#xf2b0;',
		'fa-flag'                                => '&#xf024;',
		'fa-flag-checkered'                      => '&#xf11e;',
		'fa-flag-o'                              => '&#xf11d;',
		'fa-flask'                               => '&#xf0c3;',
		'fa-flickr'                              => '&#xf16e;',
		'fa-floppy-o'                            => '&#xf0c7;',
		'fa-folder'                              => '&#xf07b;',
		'fa-folder-o'                            => '&#xf114;',
		'fa-folder-open'                         => '&#xf07c;',
		'fa-folder-open-o'                       => '&#xf115;',
		'fa-font'                                => '&#xf031;',
		'fa-font-awesome'                        => '&#xf2b4;',
		'fa-fonticons'                           => '&#xf280;',
		'fa-fort-awesome'                        => '&#xf286;',
		'fa-forumbee'                            => '&#xf211;',
		'fa-forward'                             => '&#xf04e;',
		'fa-foursquare'                          => '&#xf180;',
		'fa-free-code-camp'                      => '&#xf2c5;',
		'fa-frown-o'                             => '&#xf119;',
		'fa-futbol-o'                            => '&#xf1e3;',
		'fa-gamepad'                             => '&#xf11b;',
		'fa-gavel'                               => '&#xf0e3;',
		'fa-gbp'                                 => '&#xf154;',
		'fa-genderless'                          => '&#xf22d;',
		'fa-get-pocket'                          => '&#xf265;',
		'fa-gg'                                  => '&#xf260;',
		'fa-gg-circle'                           => '&#xf261;',
		'fa-gift'                                => '&#xf06b;',
		'fa-git'                                 => '&#xf1d3;',
		'fa-github'                              => '&#xf09b;',
		'fa-github-alt'                          => '&#xf113;',
		'fa-github-square'                       => '&#xf092;',
		'fa-gitlab'                              => '&#xf296;',
		'fa-git-square'                          => '&#xf1d2;',
		'fa-glass'                               => '&#xf000;',
		'fa-glide'                               => '&#xf2a5;',
		'fa-glide-g'                             => '&#xf2a6;',
		'fa-globe'                               => '&#xf0ac;',
		'fa-google'                              => '&#xf1a0;',
		'fa-google-plus'                         => '&#xf0d5;',
		'fa-google-plus-official'                => '&#xf2b3;',
		'fa-google-plus-square'                  => '&#xf0d4;',
		'fa-google-wallet'                       => '&#xf1ee;',
		'fa-graduation-cap'                      => '&#xf19d;',
		'fa-gratipay'                            => '&#xf184;',
		'fa-grav'                                => '&#xf2d6;',
		'fa-hacker-news'                         => '&#xf1d4;',
		'fa-hand-lizard-o'                       => '&#xf258;',
		'fa-hand-o-down'                         => '&#xf0a7;',
		'fa-hand-o-left'                         => '&#xf0a5;',
		'fa-hand-o-right'                        => '&#xf0a4;',
		'fa-hand-o-up'                           => '&#xf0a6;',
		'fa-hand-paper-o'                        => '&#xf256;',
		'fa-hand-peace-o'                        => '&#xf25b;',
		'fa-hand-pointer-o'                      => '&#xf25a;',
		'fa-hand-rock-o'                         => '&#xf255;',
		'fa-hand-scissors-o'                     => '&#xf257;',
		'fa-handshake-o'                         => '&#xf2b5;',
		'fa-hand-spock-o'                        => '&#xf259;',
		'fa-hashtag'                             => '&#xf292;',
		'fa-hdd-o'                               => '&#xf0a0;',
		'fa-header'                              => '&#xf1dc;',
		'fa-headphones'                          => '&#xf025;',
		'fa-heart'                               => '&#xf004;',
		'fa-heartbeat'                           => '&#xf21e;',
		'fa-heart-o'                             => '&#xf08a;',
		'fa-history'                             => '&#xf1da;',
		'fa-home'                                => '&#xf015;',
		'fa-hospital-o'                          => '&#xf0f8;',
		'fa-hourglass'                           => '&#xf254;',
		'fa-hourglass-end'                       => '&#xf253;',
		'fa-hourglass-half'                      => '&#xf252;',
		'fa-hourglass-o'                         => '&#xf250;',
		'fa-hourglass-start'                     => '&#xf251;',
		'fa-houzz'                               => '&#xf27c;',
		'fa-h-square'                            => '&#xf0fd;',
		'fa-html5'                               => '&#xf13b;',
		'fa-i-cursor'                            => '&#xf246;',
		'fa-id-badge'                            => '&#xf2c1;',
		'fa-id-card'                             => '&#xf2c2;',
		'fa-id-card-o'                           => '&#xf2c3;',
		'fa-ils'                                 => '&#xf20b;',
		'fa-imdb'                                => '&#xf2d8;',
		'fa-inbox'                               => '&#xf01c;',
		'fa-indent'                              => '&#xf03c;',
		'fa-industry'                            => '&#xf275;',
		'fa-info'                                => '&#xf129;',
		'fa-info-circle'                         => '&#xf05a;',
		'fa-inr'                                 => '&#xf156;',
		'fa-instagram'                           => '&#xf16d;',
		'fa-internet-explorer'                   => '&#xf26b;',
		'fa-ioxhost'                             => '&#xf208;',
		'fa-italic'                              => '&#xf033;',
		'fa-joomla'                              => '&#xf1aa;',
		'fa-jpy'                                 => '&#xf157;',
		'fa-jsfiddle'                            => '&#xf1cc;',
		'fa-key'                                 => '&#xf084;',
		'fa-keyboard-o'                          => '&#xf11c;',
		'fa-krw'                                 => '&#xf159;',
		'fa-language'                            => '&#xf1ab;',
		'fa-laptop'                              => '&#xf109;',
		'fa-lastfm'                              => '&#xf202;',
		'fa-lastfm-square'                       => '&#xf203;',
		'fa-leaf'                                => '&#xf06c;',
		'fa-leanpub'                             => '&#xf212;',
		'fa-lemon-o'                             => '&#xf094;',
		'fa-level-down'                          => '&#xf149;',
		'fa-level-up'                            => '&#xf148;',
		'fa-life-ring'                           => '&#xf1cd;',
		'fa-lightbulb-o'                         => '&#xf0eb;',
		'fa-line-chart'                          => '&#xf201;',
		'fa-link'                                => '&#xf0c1;',
		'fa-linkedin'                            => '&#xf0e1;',
		'fa-linkedin-square'                     => '&#xf08c;',
		'fa-linode'                              => '&#xf2b8;',
		'fa-linux'                               => '&#xf17c;',
		'fa-list'                                => '&#xf03a;',
		'fa-list-alt'                            => '&#xf022;',
		'fa-list-ol'                             => '&#xf0cb;',
		'fa-list-ul'                             => '&#xf0ca;',
		'fa-location-arrow'                      => '&#xf124;',
		'fa-lock'                                => '&#xf023;',
		'fa-long-arrow-down'                     => '&#xf175;',
		'fa-long-arrow-left'                     => '&#xf177;',
		'fa-long-arrow-right'                    => '&#xf178;',
		'fa-long-arrow-up'                       => '&#xf176;',
		'fa-low-vision'                          => '&#xf2a8;',
		'fa-magic'                               => '&#xf0d0;',
		'fa-magnet'                              => '&#xf076;',
		'fa-male'                                => '&#xf183;',
		'fa-map'                                 => '&#xf279;',
		'fa-map-marker'                          => '&#xf041;',
		'fa-map-o'                               => '&#xf278;',
		'fa-map-pin'                             => '&#xf276;',
		'fa-map-signs'                           => '&#xf277;',
		'fa-mars'                                => '&#xf222;',
		'fa-mars-double'                         => '&#xf227;',
		'fa-mars-stroke'                         => '&#xf229;',
		'fa-mars-stroke-h'                       => '&#xf22b;',
		'fa-mars-stroke-v'                       => '&#xf22a;',
		'fa-maxcdn'                              => '&#xf136;',
		'fa-meanpath'                            => '&#xf20c;',
		'fa-medium'                              => '&#xf23a;',
		'fa-medkit'                              => '&#xf0fa;',
		'fa-meetup'                              => '&#xf2e0;',
		'fa-meh-o'                               => '&#xf11a;',
		'fa-mercury'                             => '&#xf223;',
		'fa-microchip'                           => '&#xf2db;',
		'fa-microphone'                          => '&#xf130;',
		'fa-microphone-slash'                    => '&#xf131;',
		'fa-minus'                               => '&#xf068;',
		'fa-minus-circle'                        => '&#xf056;',
		'fa-minus-square'                        => '&#xf146;',
		'fa-minus-square-o'                      => '&#xf147;',
		'fa-mixcloud'                            => '&#xf289;',
		'fa-mobile'                              => '&#xf10b;',
		'fa-modx'                                => '&#xf285;',
		'fa-money'                               => '&#xf0d6;',
		'fa-moon-o'                              => '&#xf186;',
		'fa-motorcycle'                          => '&#xf21c;',
		'fa-mouse-pointer'                       => '&#xf245;',
		'fa-music'                               => '&#xf001;',
		'fa-neuter'                              => '&#xf22c;',
		'fa-newspaper-o'                         => '&#xf1ea;',
		'fa-object-group'                        => '&#xf247;',
		'fa-object-ungroup'                      => '&#xf248;',
		'fa-odnoklassniki'                       => '&#xf263;',
		'fa-odnoklassniki-square'                => '&#xf264;',
		'fa-opencart'                            => '&#xf23d;',
		'fa-openid'                              => '&#xf19b;',
		'fa-opera'                               => '&#xf26a;',
		'fa-optin-monster'                       => '&#xf23c;',
		'fa-outdent'                             => '&#xf03b;',
		'fa-pagelines'                           => '&#xf18c;',
		'fa-paint-brush'                         => '&#xf1fc;',
		'fa-paperclip'                           => '&#xf0c6;',
		'fa-paper-plane'                         => '&#xf1d8;',
		'fa-paper-plane-o'                       => '&#xf1d9;',
		'fa-paragraph'                           => '&#xf1dd;',
		'fa-pause'                               => '&#xf04c;',
		'fa-pause-circle'                        => '&#xf28b;',
		'fa-pause-circle-o'                      => '&#xf28c;',
		'fa-paw'                                 => '&#xf1b0;',
		'fa-paypal'                              => '&#xf1ed;',
		'fa-pencil'                              => '&#xf040;',
		'fa-pencil-square'                       => '&#xf14b;',
		'fa-pencil-square-o'                     => '&#xf044;',
		'fa-percent'                             => '&#xf295;',
		'fa-phone'                               => '&#xf095;',
		'fa-phone-square'                        => '&#xf098;',
		'fa-picture-o'                           => '&#xf03e;',
		'fa-pie-chart'                           => '&#xf200;',
		'fa-pied-piper'                          => '&#xf2ae;',
		'fa-pied-piper-alt'                      => '&#xf1a8;',
		'fa-pied-piper-pp'                       => '&#xf1a7;',
		'fa-pinterest'                           => '&#xf0d2;',
		'fa-pinterest-p'                         => '&#xf231;',
		'fa-pinterest-square'                    => '&#xf0d3;',
		'fa-plane'                               => '&#xf072;',
		'fa-play'                                => '&#xf04b;',
		'fa-play-circle'                         => '&#xf144;',
		'fa-play-circle-o'                       => '&#xf01d;',
		'fa-plug'                                => '&#xf1e6;',
		'fa-plus'                                => '&#xf067;',
		'fa-plus-circle'                         => '&#xf055;',
		'fa-plus-square'                         => '&#xf0fe;',
		'fa-plus-square-o'                       => '&#xf196;',
		'fa-podcast'                             => '&#xf2ce;',
		'fa-power-off'                           => '&#xf011;',
		'fa-print'                               => '&#xf02f;',
		'fa-product-hunt'                        => '&#xf288;',
		'fa-puzzle-piece'                        => '&#xf12e;',
		'fa-qq'                                  => '&#xf1d6;',
		'fa-qrcode'                              => '&#xf029;',
		'fa-question'                            => '&#xf128;',
		'fa-question-circle'                     => '&#xf059;',
		'fa-question-circle-o'                   => '&#xf29c;',
		'fa-quora'                               => '&#xf2c4;',
		'fa-quote-left'                          => '&#xf10d;',
		'fa-quote-right'                         => '&#xf10e;',
		'fa-random'                              => '&#xf074;',
		'fa-ravelry'                             => '&#xf2d9;',
		'fa-rebel'                               => '&#xf1d0;',
		'fa-recycle'                             => '&#xf1b8;',
		'fa-reddit'                              => '&#xf1a1;',
		'fa-reddit-alien'                        => '&#xf281;',
		'fa-reddit-square'                       => '&#xf1a2;',
		'fa-refresh'                             => '&#xf021;',
		'fa-registered'                          => '&#xf25d;',
		'fa-renren'                              => '&#xf18b;',
		'fa-repeat'                              => '&#xf01e;',
		'fa-reply'                               => '&#xf112;',
		'fa-reply-all'                           => '&#xf122;',
		'fa-retweet'                             => '&#xf079;',
		'fa-road'                                => '&#xf018;',
		'fa-rocket'                              => '&#xf135;',
		'fa-rss'                                 => '&#xf09e;',
		'fa-rss-square'                          => '&#xf143;',
		'fa-rub'                                 => '&#xf158;',
		'fa-safari'                              => '&#xf267;',
		'fa-scissors'                            => '&#xf0c4;',
		'fa-scribd'                              => '&#xf28a;',
		'fa-search'                              => '&#xf002;',
		'fa-search-minus'                        => '&#xf010;',
		'fa-search-plus'                         => '&#xf00e;',
		'fa-sellsy'                              => '&#xf213;',
		'fa-server'                              => '&#xf233;',
		'fa-share'                               => '&#xf064;',
		'fa-share-alt'                           => '&#xf1e0;',
		'fa-share-alt-square'                    => '&#xf1e1;',
		'fa-share-square'                        => '&#xf14d;',
		'fa-share-square-o'                      => '&#xf045;',
		'fa-shield'                              => '&#xf132;',
		'fa-ship'                                => '&#xf21a;',
		'fa-shirtsinbulk'                        => '&#xf214;',
		'fa-shopping-bag'                        => '&#xf290;',
		'fa-shopping-basket'                     => '&#xf291;',
		'fa-shopping-cart'                       => '&#xf07a;',
		'fa-shower'                              => '&#xf2cc;',
		'fa-signal'                              => '&#xf012;',
		'fa-sign-in'                             => '&#xf090;',
		'fa-sign-language'                       => '&#xf2a7;',
		'fa-sign-out'                            => '&#xf08b;',
		'fa-simplybuilt'                         => '&#xf215;',
		'fa-sitemap'                             => '&#xf0e8;',
		'fa-skyatlas'                            => '&#xf216;',
		'fa-skype'                               => '&#xf17e;',
		'fa-slack'                               => '&#xf198;',
		'fa-sliders'                             => '&#xf1de;',
		'fa-slideshare'                          => '&#xf1e7;',
		'fa-smile-o'                             => '&#xf118;',
		'fa-snapchat'                            => '&#xf2ab;',
		'fa-snapchat-ghost'                      => '&#xf2ac;',
		'fa-snapchat-square'                     => '&#xf2ad;',
		'fa-snowflake-o'                         => '&#xf2dc;',
		'fa-sort'                                => '&#xf0dc;',
		'fa-sort-alpha-asc'                      => '&#xf15d;',
		'fa-sort-alpha-desc'                     => '&#xf15e;',
		'fa-sort-amount-asc'                     => '&#xf160;',
		'fa-sort-amount-desc'                    => '&#xf161;',
		'fa-sort-asc'                            => '&#xf0de;',
		'fa-sort-desc'                           => '&#xf0dd;',
		'fa-sort-numeric-asc'                    => '&#xf162;',
		'fa-sort-numeric-desc'                   => '&#xf163;',
		'fa-soundcloud'                          => '&#xf1be;',
		'fa-space-shuttle'                       => '&#xf197;',
		'fa-spinner'                             => '&#xf110;',
		'fa-spoon'                               => '&#xf1b1;',
		'fa-spotify'                             => '&#xf1bc;',
		'fa-square'                              => '&#xf0c8;',
		'fa-square-o'                            => '&#xf096;',
		'fa-stack-exchange'                      => '&#xf18d;',
		'fa-stack-overflow'                      => '&#xf16c;',
		'fa-star'                                => '&#xf005;',
		'fa-star-half'                           => '&#xf089;',
		'fa-star-half-o'                         => '&#xf123;',
		'fa-star-o'                              => '&#xf006;',
		'fa-steam'                               => '&#xf1b6;',
		'fa-steam-square'                        => '&#xf1b7;',
		'fa-step-backward'                       => '&#xf048;',
		'fa-step-forward'                        => '&#xf051;',
		'fa-stethoscope'                         => '&#xf0f1;',
		'fa-sticky-note'                         => '&#xf249;',
		'fa-sticky-note-o'                       => '&#xf24a;',
		'fa-stop'                                => '&#xf04d;',
		'fa-stop-circle'                         => '&#xf28d;',
		'fa-stop-circle-o'                       => '&#xf28e;',
		'fa-street-view'                         => '&#xf21d;',
		'fa-strikethrough'                       => '&#xf0cc;',
		'fa-stumbleupon'                         => '&#xf1a4;',
		'fa-stumbleupon-circle'                  => '&#xf1a3;',
		'fa-subscript'                           => '&#xf12c;',
		'fa-subway'                              => '&#xf239;',
		'fa-suitcase'                            => '&#xf0f2;',
		'fa-sun-o'                               => '&#xf185;',
		'fa-superpowers'                         => '&#xf2dd;',
		'fa-superscript'                         => '&#xf12b;',
		'fa-table'                               => '&#xf0ce;',
		'fa-tablet'                              => '&#xf10a;',
		'fa-tachometer'                          => '&#xf0e4;',
		'fa-tag'                                 => '&#xf02b;',
		'fa-tags'                                => '&#xf02c;',
		'fa-tasks'                               => '&#xf0ae;',
		'fa-taxi'                                => '&#xf1ba;',
		'fa-telegram'                            => '&#xf2c6;',
		'fa-television'                          => '&#xf26c;',
		'fa-tencent-weibo'                       => '&#xf1d5;',
		'fa-terminal'                            => '&#xf120;',
		'fa-text-height'                         => '&#xf034;',
		'fa-text-width'                          => '&#xf035;',
		'fa-th'                                  => '&#xf00a;',
		'fa-themeisle'                           => '&#xf2b2;',
		'fa-thermometer-empty'                   => '&#xf2cb;',
		'fa-thermometer-full'                    => '&#xf2c7;',
		'fa-thermometer-half'                    => '&#xf2c9;',
		'fa-thermometer-quarter'                 => '&#xf2ca;',
		'fa-thermometer-three-quarters'          => '&#xf2c8;',
		'fa-th-large'                            => '&#xf009;',
		'fa-th-list'                             => '&#xf00b;',
		'fa-thumbs-down'                         => '&#xf165;',
		'fa-thumbs-o-down'                       => '&#xf088;',
		'fa-thumbs-o-up'                         => '&#xf087;',
		'fa-thumbs-up'                           => '&#xf164;',
		'fa-thumb-tack'                          => '&#xf08d;',
		'fa-ticket'                              => '&#xf145;',
		'fa-times'                               => '&#xf00d;',
		'fa-times-circle'                        => '&#xf057;',
		'fa-times-circle-o'                      => '&#xf05c;',
		'fa-tint'                                => '&#xf043;',
		'fa-toggle-off'                          => '&#xf204;',
		'fa-toggle-on'                           => '&#xf205;',
		'fa-trademark'                           => '&#xf25c;',
		'fa-train'                               => '&#xf238;',
		'fa-transgender'                         => '&#xf224;',
		'fa-transgender-alt'                     => '&#xf225;',
		'fa-trash'                               => '&#xf1f8;',
		'fa-trash-o'                             => '&#xf014;',
		'fa-tree'                                => '&#xf1bb;',
		'fa-trello'                              => '&#xf181;',
		'fa-tripadvisor'                         => '&#xf262;',
		'fa-trophy'                              => '&#xf091;',
		'fa-truck'                               => '&#xf0d1;',
		'fa-try'                                 => '&#xf195;',
		'fa-tty'                                 => '&#xf1e4;',
		'fa-tumblr'                              => '&#xf173;',
		'fa-tumblr-square'                       => '&#xf174;',
		'fa-twitch'                              => '&#xf1e8;',
		'fa-twitter'                             => '&#xf099;',
		'fa-twitter-square'                      => '&#xf081;',
		'fa-umbrella'                            => '&#xf0e9;',
		'fa-underline'                           => '&#xf0cd;',
		'fa-undo'                                => '&#xf0e2;',
		'fa-universal-access'                    => '&#xf29a;',
		'fa-university'                          => '&#xf19c;',
		'fa-unlock'                              => '&#xf09c;',
		'fa-unlock-alt'                          => '&#xf13e;',
		'fa-upload'                              => '&#xf093;',
		'fa-usb'                                 => '&#xf287;',
		'fa-usd'                                 => '&#xf155;',
		'fa-user'                                => '&#xf007;',
		'fa-user-circle'                         => '&#xf2bd;',
		'fa-user-circle-o'                       => '&#xf2be;',
		'fa-user-md'                             => '&#xf0f0;',
		'fa-user-o'                              => '&#xf2c0;',
		'fa-user-plus'                           => '&#xf234;',
		'fa-users'                               => '&#xf0c0;',
		'fa-user-secret'                         => '&#xf21b;',
		'fa-user-times'                          => '&#xf235;',
		'fa-venus'                               => '&#xf221;',
		'fa-venus-double'                        => '&#xf226;',
		'fa-venus-mars'                          => '&#xf228;',
		'fa-viacoin'                             => '&#xf237;',
		'fa-viadeo'                              => '&#xf2a9;',
		'fa-viadeo-square'                       => '&#xf2aa;',
		'fa-video-camera'                        => '&#xf03d;',
		'fa-vimeo'                               => '&#xf27d;',
		'fa-vimeo-square'                        => '&#xf194;',
		'fa-vine'                                => '&#xf1ca;',
		'fa-vk'                                  => '&#xf189;',
		'fa-volume-control-phone'                => '&#xf2a0;',
		'fa-volume-down'                         => '&#xf027;',
		'fa-volume-off'                          => '&#xf026;',
		'fa-volume-up'                           => '&#xf028;',
		'fa-weibo'                               => '&#xf18a;',
		'fa-weixin'                              => '&#xf1d7;',
		'fa-whatsapp'                            => '&#xf232;',
		'fa-wheelchair'                          => '&#xf193;',
		'fa-wheelchair-alt'                      => '&#xf29b;',
		'fa-wifi'                                => '&#xf1eb;',
		'fa-wikipedia-w'                         => '&#xf266;',
		'fa-window-close'                        => '&#xf2d3;',
		'fa-window-close-o'                      => '&#xf2d4;',
		'fa-window-maximize'                     => '&#xf2d0;',
		'fa-window-minimize'                     => '&#xf2d1;',
		'fa-window-restore'                      => '&#xf2d2;',
		'fa-windows'                             => '&#xf17a;',
		'fa-wordpress'                           => '&#xf19a;',
		'fa-wpbeginner'                          => '&#xf297;',
		'fa-wpexplorer'                          => '&#xf2de;',
		'fa-wpforms'                             => '&#xf298;',
		'fa-wrench'                              => '&#xf0ad;',
		'fa-xing'                                => '&#xf168;',
		'fa-xing-square'                         => '&#xf169;',
		'fa-yahoo'                               => '&#xf19e;',
		'fa-y-combinator'                        => '&#xf23b;',
		'fa-yelp'                                => '&#xf1e9;',
		'fa-yoast'                               => '&#xf2b1;',
		'fa-youtube'                             => '&#xf167;',
		'fa-youtube-play'                        => '&#xf16a;',
		'fa-youtube-square'                      => '&#xf166;',
	);
}

/**
 * Function to back up options to a post..
 */
function canuck_backup_options() {
	$canuck_backup_options_to_post = get_theme_mod( 'canuck_backup_options_to_post' ) ? true : false;
	if ( true === $canuck_backup_options_to_post ) {
		$postarray = array();
		$content   = '';
		$content  .= '<!-- ---------------------------------------------------------' . PHP_EOL;
		$content  .= esc_html__( 'Canuck Created Content Backup', 'canuck' ) . PHP_EOL;
		$content  .= esc_html__( 'This page contains a backup of content created by the Canuck WordPress Theme. ', 'canuck' );
		$content  .= esc_html__( 'The purpose for the backup is to prevent content loss on theme switch.', 'canuck' );
		$content  .= esc_html__( 'When a user switches themes this content will still be available to the user when setting up their site on the new theme.', 'canuck' ) . PHP_EOL;
		$content  .= esc_html__( 'Please note the following : ', 'canuck' ) . PHP_EOL;
		$content  .= ' * ' . esc_html__( 'Leave this page as private, available only to users with admin privledges.', 'canuck' ) . PHP_EOL;
		$content  .= ' * ' . esc_html__( 'You can delete this page any time and regenerate it from within the Canuck options menu, General section.', 'canuck' ) . PHP_EOL;
		$content  .= '--------------------------------------------------------- -->' . PHP_EOL;
		$content  .= PHP_EOL;
		// General post setup.
		$postarray['post_title']     = 'Canuck Created Content Backup'; // phpcs:ignore
		$postarray['post_type']      = 'page';
		$postarray['post_status']    = 'private';
		$postarray['comment_status'] = 'closed';
		$content                    .= canuck_header_options_backup();
		$content                    .= canuck_footer_options_backup();
		$content                    .= canuck_home_options_backup();
		$content                    .= canuck_custom_widget_content_backup();
		$page                        = get_page_by_title( 'Canuck Created Content Backup' );
		if ( isset( $page ) && '' !== $page->ID ) {
			$postarray['ID']           = $page->ID;
			$postarray['post_content'] = $content;
			wp_update_post( $postarray );
		} else {
			$postarray['ID']           = 0;
			$postarray['post_content'] = $content;
			wp_insert_post( $postarray );
		}
	}
}
add_action( 'customize_save_after', 'canuck_backup_options' );

/**
 * Canuck Option Content: Canuck Headers.
 */
function canuck_header_options_backup() {
	$string = '';
	$hrs    = esc_html( get_theme_mod( 'canuck_contact_hours', '' ) );
	$phone  = esc_html( get_theme_mod( 'canuck_contact_phone', '' ) );
	if ( '' !== $hrs || '' !== $phone ) {
		$string .= '<!-- ' . esc_html__( 'Header/Footer Contact Information', 'canuck' ) . ' -->' . PHP_EOL;
		if ( '' !== $hrs ) {
			$string .= $hrs . PHP_EOL;
		}
		if ( '' !== $phone ) {
			$string .= $phone . PHP_EOL;
		}
		$string .= '<!-- //' . esc_html__( 'Header/Footer Contact Information', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}
	return $string;
}

/**
 * Canuck Option Content: Canuck Footer.
 */
function canuck_footer_options_backup() {
	$string = '';
	$cl     = wp_kses_post( get_theme_mod( 'canuck_left_copyright_text', '' ) );
	$cm     = wp_kses_post( get_theme_mod( 'canuck_middle_copyright_text', '' ) );
	$cr     = wp_kses_post( get_theme_mod( 'canuck_right_copyright_text', '' ) );
	if ( '' !== $cl || '' !== $cm || '' !== $cr ) {
		$string .= '<!-- ' . esc_html__( 'Copyright Strip Content', 'canuck' ) . ' -->' . PHP_EOL;
		if ( '' !== $cl ) {
			$string .= $cl . PHP_EOL;
		}
		if ( '' !== $cm ) {
			$string .= $cm . PHP_EOL;
		}
		if ( '' !== $cr ) {
			$string .= $cr . PHP_EOL;
		}
		$string .= '<!-- //' . esc_html__( 'Copyright Strip Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}
	return $string;
}

/**
 * Canuck Option Content: Canuck Home Page.
 */
function canuck_home_options_backup() {
	$string = '';
	// Home Feature Options =========================================================================================================================================+===.
	$new_title = esc_html( get_theme_mod( 'canuck_home_title', '' ) );
	$new_desc  = esc_html( get_theme_mod( 'canuck_home_description', '' ) );
	if ( '' !== $new_title || '' !== $new_desc ) {
		$string .= '<!-- ' . esc_html__( 'Home Page New Title/Description', 'canuck' ) . ' -->' . PHP_EOL;
		if ( '' !== $new_title ) {
			$string .= $new_title . PHP_EOL;
		}
		if ( '' !== $new_desc ) {
			$string .= $new_desc . PHP_EOL;
		}
		$string .= '<!-- //' . esc_html__( 'Home Page New Title/Description', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}
	// Section 1 Options ===============================================================================================================================================.
	$content = wp_kses_post( get_theme_mod( 'canuck_section1_text', '' ) );
	if ( '' !== $content ) {
		$string .= '<!-- ' . esc_html__( 'Home Page Section 1 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= $content . PHP_EOL;
		$string .= '<!-- //' . esc_html__( 'Home Page Section 1 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}
	// Section 2 Options ===============================================================================================================================================.
	$title1   = esc_html( get_theme_mod( 'canuck_section2_box1_title', '' ) );
	$content1 = wp_kses_post( get_theme_mod( 'canuck_section2_box1_text', '' ) );
	$title2   = esc_html( get_theme_mod( 'canuck_section2_box2_title', '' ) );
	$content2 = wp_kses_post( get_theme_mod( 'canuck_section2_box2_text', '' ) );
	$title3   = esc_html( get_theme_mod( 'canuck_section2_box3_title', '' ) );
	$content3 = wp_kses_post( get_theme_mod( 'canuck_section2_box3_text', '' ) );
	if ( '' !== $title1 || '' !== $content1 || '' !== $title2 || '' !== $content2 || '' !== $title3 || '' !== $content3 ) {
		$string .= '<!-- ' . esc_html__( 'Home Page Section 2 Content', 'canuck' ) . ' -->' . PHP_EOL;

		if ( '' !== $title1 ) {
			$string .= '<!-- ' . esc_html__( 'Box 1-Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title1 . PHP_EOL;
		}
		if ( '' !== $content1 ) {
			$string .= '<!-- ' . esc_html__( 'Box 1-Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content1 . PHP_EOL;
		}
		if ( '' !== $title2 ) {
			$string .= '<!-- ' . esc_html__( 'Box 2-Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title2 . PHP_EOL;
		}
		if ( '' !== $content2 ) {
			$string .= '<!-- ' . esc_html__( 'Box 2-Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content2 . PHP_EOL;
		}
		if ( '' !== $title3 ) {
			$string .= '<!-- ' . esc_html__( 'Box 3-Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title3 . PHP_EOL;
		}
		if ( '' !== $content3 ) {
			$string .= '<!-- ' . esc_html__( 'Box 3-Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content3 . PHP_EOL;
		}
		$string .= '<!-- //' . esc_html__( 'Home Page Section 2 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}
	// Section 3 Options ===============================================================================================================================================.
	$content = wp_kses_post( get_theme_mod( 'canuck_section3_text', '' ) );
	if ( '' !== $content ) {
		$string .= '<!-- ' . esc_html__( 'Home Page Section 3 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= $content . PHP_EOL;
		$string .= '<!-- //' . esc_html__( 'Home Page Section 3 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}
	// Section 4 Options ===============================================================================================================================================.
	$title1   = esc_html( get_theme_mod( 'canuck_section4_box1_title', '' ) );
	$content1 = wp_kses_post( get_theme_mod( 'canuck_section4_box1_text', '' ) );
	$title2   = esc_html( get_theme_mod( 'canuck_section4_box2_title', '' ) );
	$content2 = wp_kses_post( get_theme_mod( 'canuck_section4_box2_text', '' ) );
	if ( '' !== $title1 || '' !== $content1 || '' !== $title2 || '' !== $content2 ) {
		$string .= '<!-- ' . esc_html__( 'Home Page Section 4 Content', 'canuck' ) . ' -->' . PHP_EOL;
		if ( '' !== $title1 ) {
			$string .= '<!-- ' . esc_html__( 'Box 1-Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title1 . PHP_EOL;
		}
		if ( '' !== $content1 ) {
			$string .= '<!-- ' . esc_html__( 'Box 1-Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content1 . PHP_EOL;
		}
		if ( '' !== $title2 ) {
			$string .= '<!-- ' . esc_html__( 'Box 2-Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title2 . PHP_EOL;
		}
		if ( '' !== $content2 ) {
			$string .= '<!-- ' . esc_html__( 'Box 2-Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content2 . PHP_EOL;
		}
		$string .= '<!-- //' . esc_html__( 'Home Page Section 4 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}
	// Section 5 Options ===============================================================================================================================================.
	$content = wp_kses_post( get_theme_mod( 'canuck_section5_text', '' ) );
	if ( '' !== $content ) {
		$string .= '<!-- ' . esc_html__( 'Home Page Section 5 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= $content . PHP_EOL;
		$string .= '<!-- //' . esc_html__( 'Home Page Section 5 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}
	// Section 6 Options ===============================================================================================================================================.
	$title1   = esc_html( get_theme_mod( 'canuck_section6_box1_title', '' ) );
	$content1 = wp_kses_post( get_theme_mod( 'canuck_section6_box1_text', '' ) );
	$title2   = esc_html( get_theme_mod( 'canuck_section6_box2_title', '' ) );
	$content2 = wp_kses_post( get_theme_mod( 'canuck_section6_box2_text', '' ) );
	if ( '' !== $title1 || '' !== $content1 || '' !== $title2 || '' !== $content2 ) {
		$string .= '<!-- ' . esc_html__( 'Home Page Section 6 Content', 'canuck' ) . ' -->' . PHP_EOL;
		if ( '' !== $title1 ) {
			$string .= '<!-- ' . esc_html__( 'Box 1-Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title1 . PHP_EOL;
		}
		if ( '' !== $content1 ) {
			$string .= '<!-- ' . esc_html__( 'Box 1-Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content1 . PHP_EOL;
		}
		if ( '' !== $title2 ) {
			$string .= '<!-- ' . esc_html__( 'Box 2-Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title2 . PHP_EOL;
		}
		if ( '' !== $content2 ) {
			$string .= '<!-- ' . esc_html__( 'Box 2-Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content2 . PHP_EOL;
		}
		$string .= '<!-- //' . esc_html__( 'Home Page Section 6 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}
	// Section 7 Options ===============================================================================================================================================.
	$content = wp_kses_post( get_theme_mod( 'canuck_section7_text', '' ) );
	if ( '' !== $content ) {
		$string .= '<!-- ' . esc_html__( 'Home Page Section 7 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= $content . PHP_EOL;
		$string .= '<!-- //' . esc_html__( 'Home Page Section 7 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}
	// Section 8 Options ===============================================================================================================================================.
	$title1   = esc_html( get_theme_mod( 'canuck_section8_box1_title', '' ) );
	$content1 = wp_kses_post( get_theme_mod( 'canuck_section8_box1_text', '' ) );
	$title2   = esc_html( get_theme_mod( 'canuck_section8_box2_title', '' ) );
	$content2 = wp_kses_post( get_theme_mod( 'canuck_section8_box2_text', '' ) );
	$title3   = esc_html( get_theme_mod( 'canuck_section8_box3_title', '' ) );
	$content3 = wp_kses_post( get_theme_mod( 'canuck_section8_box3_text', '' ) );
	$title4   = esc_html( get_theme_mod( 'canuck_section8_box4_title', '' ) );
	$content4 = wp_kses_post( get_theme_mod( 'canuck_section8_box4_text', '' ) );
	if ( '' !== $title1 || '' !== $content1 || '' !== $title2 || '' !== $content2 || '' !== $title3 || '' !== $content3 || '' !== $title4 || '' !== $content4 ) {
		$string .= '<!-- ' . esc_html__( 'Home Page Section 8 Content', 'canuck' ) . ' -->' . PHP_EOL;
		if ( '' !== $title1 ) {
			$string .= '<!-- ' . esc_html__( 'Box 1-Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title1 . PHP_EOL;
		}
		if ( '' !== $content1 ) {
			$string .= '<!-- ' . esc_html__( 'Box 1-Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content1 . PHP_EOL;
		}
		if ( '' !== $title2 ) {
			$string .= '<!-- ' . esc_html__( 'Box 2-Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title2 . PHP_EOL;
		}
		if ( '' !== $content2 ) {
			$string .= '<!-- ' . esc_html__( 'Box 2-Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content2 . PHP_EOL;
		}
		if ( '' !== $title3 ) {
			$string .= '<!-- ' . esc_html__( 'Box 3-Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title3 . PHP_EOL;
		}
		if ( '' !== $content3 ) {
			$string .= '<!-- ' . esc_html__( 'Box 3-Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content3 . PHP_EOL;
		}
		if ( '' !== $title4 ) {
			$string .= '<!-- ' . esc_html__( 'Box 4-Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title4 . PHP_EOL;
		}
		if ( '' !== $content4 ) {
			$string .= '<!-- ' . esc_html__( 'Box 4-Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content4 . PHP_EOL;
		}
		$string .= '<!-- //' . esc_html__( 'Home Page Section 8 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}// End if().
	// Section 9 Options ===============================================================================================================================================.
	$title   = wp_kses_post( get_theme_mod( 'canuck_section9_title', '' ) );
	$content = wp_kses_post( get_theme_mod( 'canuck_section9_text', '' ) );
	if ( '' !== $title || '' !== $content ) {
		$string .= '<!-- ' . esc_html__( 'Home Page Section 9 Content', 'canuck' ) . ' -->' . PHP_EOL;
		if ( '' !== $title ) {
			$string .= '<!-- ' . esc_html__( 'Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title . PHP_EOL;
		}
		if ( '' !== $content ) {
			$string .= '<!-- ' . esc_html__( 'Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content . PHP_EOL;
		}
		$string .= '<!-- //' . esc_html__( 'Home Page Section 9 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}
	// Section 10 Options ===============================================================================================================================================.
	$title   = esc_html( get_theme_mod( 'canuck_section10_title', '' ) );
	$content = wp_kses_post( get_theme_mod( 'canuck_section10_text', '' ) );
	if ( '' !== $title || '' !== $content ) {
		$string .= '<!-- ' . esc_html__( 'Home Page Section 10 Content', 'canuck' ) . ' -->' . PHP_EOL;
		if ( '' !== $title ) {
			$string .= '<!-- ' . esc_html__( 'Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title . PHP_EOL;
		}
		if ( '' !== $content ) {
			$string .= '<!-- ' . esc_html__( 'Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content . PHP_EOL;
		}
		$string .= '<!-- //' . esc_html__( 'Home Page Section 10 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}
	// Section 11 Options ===============================================================================================================================================.
	$title   = esc_html( get_theme_mod( 'canuck_section11_title', '' ) );
	$content = wp_kses_post( get_theme_mod( 'canuck_section11_text', '' ) );
	if ( '' !== $title || '' !== $content ) {
		$string .= '<!-- ' . esc_html__( 'Home Page Section 11 Content', 'canuck' ) . ' -->' . PHP_EOL;
		if ( '' !== $title ) {
			$string .= '<!-- ' . esc_html__( 'Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title . PHP_EOL;
		}
		if ( '' !== $content ) {
			$string .= '<!-- ' . esc_html__( 'Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content . PHP_EOL;
		}
		$string .= '<!-- //' . esc_html__( 'Home Page Section 11 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}
	// Section 12 Options ===============================================================================================================================================.
	$title   = wp_kses_post( get_theme_mod( 'canuck_section12_title', '' ) );
	$content = wp_kses_post( get_theme_mod( 'canuck_section12_text', '' ) );
	if ( '' !== $title || '' !== $content ) {
		$string .= '<!-- ' . esc_html__( 'Home Page Section 12 Content', 'canuck' ) . ' -->' . PHP_EOL;
		if ( '' !== $title ) {
			$string .= '<!-- ' . esc_html__( 'Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title . PHP_EOL;
		}
		if ( '' !== $content ) {
			$string .= '<!-- ' . esc_html__( 'Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content . PHP_EOL;
		}
		$string .= '<!-- //' . esc_html__( 'Home Page Section 12 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}
	// Section 13 Options ===============================================================================================================================================.
	$title   = wp_kses_post( get_theme_mod( 'canuck_section13_title', '' ) );
	$content = wp_kses_post( get_theme_mod( 'canuck_section13_text', '' ) );
	if ( '' !== $title || '' !== $content ) {
		$string .= '<!-- ' . esc_html__( 'Home Page Section 13 Content', 'canuck' ) . ' -->' . PHP_EOL;
		if ( '' !== $title ) {
			$string .= '<!-- ' . esc_html__( 'Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $title . PHP_EOL;
		}
		if ( '' !== $content ) {
			$string .= '<!-- ' . esc_html__( 'Content', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= $content . PHP_EOL;
		}
		$string .= '<!-- ' . esc_html__( 'Home Page Section 13 Content', 'canuck' ) . ' -->' . PHP_EOL;
		$string .= PHP_EOL;
	}
	return $string;
}

/**
 * Canuck Option Content: Custom Widget Content Creation.
 */
function canuck_custom_widget_content_backup() {
	$string         = '';
	$widget_authors = get_option( 'widget_canuck_author_widget' );
	$count          = 1;
	$lastone        = count( $widget_authors );
	foreach ( $widget_authors as $widget_author ) {
		if ( $count !== $lastone ) {
			$string .= '<!-- ' . esc_html__( 'Canuck Author Widget: ', 'canuck' ) . $count . ' -->' . PHP_EOL;
			$string .= '<!-- ' . esc_html__( 'Title', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= esc_html( $widget_author['canuck_author_title'] ) . PHP_EOL;
			$string .= '<!-- ' . esc_html__( 'Name: ', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= esc_html( $widget_author['canuck_author_name'] ) . PHP_EOL;
			$string .= '<!-- ' . esc_html__( 'Email: ', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= esc_html( $widget_author['canuck_author_email'] ) . PHP_EOL;
			$string .= '<!-- ' . esc_html__( 'Website: ', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= esc_url( $widget_author['canuck_author_website'] ) . PHP_EOL;
			$string .= '<!-- ' . esc_html__( 'Biography: ', 'canuck' ) . ' -->' . PHP_EOL;
			$string .= wp_kses_post( $widget_author['canuck_author_bio'] ) . PHP_EOL;
			$string .= '<!-- //' . esc_html__( 'Canuck Author Widget: ', 'canuck' ) . $count . ' -->' . PHP_EOL;
			$string .= PHP_EOL;
			$count++;
		}
	}
	return $string;
}

/**
 * Function to import parent theme Canuck custom options.
 */
function canuck_import_parent_options() {
	$canuck_import_parent_options = get_theme_mod( 'canuck_import_parent_theme_options' ) ? true : false;
	if ( true === $canuck_import_parent_options ) {
		$options_setup     = canuck_get_customizer_option_partameters();
		$parent_theme_mods = get_option( 'theme_mods_canuck' );
		// Start by turning off the switch to import options.
		set_theme_mod( 'canuck_import_parent_theme_options', false );
		// Only update if the option in the child theme is not set.
		foreach ( $parent_theme_mods as $option_slug => $option_value ) {
			if ( ! get_theme_mod( $option_slug ) ) {
				set_theme_mod( $option_slug, $option_value );
			}
		}
	}
}
add_action( 'customize_save_after', 'canuck_import_parent_options' );

/**
 * =========================================================================================================
 *                       choices arrays for option select elements
 * =========================================================================================================
 */
/**
 * Flex slider pause time choices.
 */
function canuck_flex_slider_pause_choices() {
	return array(
		'4000'  => '4000',
		'5000'  => '5000',
		'6000'  => '6000',
		'7000'  => '7000',
		'8000'  => '8000',
		'9000'  => '9000',
		'10000' => '10000',
		'11000' => '11000',
		'12000' => '12000',
	);
}

/**
 * Flex slider transition time choices.
 */
function canuck_flex_slider_transition_choices() {
	return array(
		'500'  => '500',
		'600'  => '600',
		'750'  => '750',
		'1000' => '1000',
		'1250' => '1250',
		'1500' => '1500',
		'1750' => '1750',
		'2000' => '2000',
	);
}

/**
 * Page layout choices.
 */
function canuck_page_layout_choices() {
	return array(
		'left_sidebar'  => get_template_directory_uri() . '/images/A-C.png',
		'right_sidebar' => get_template_directory_uri() . '/images/C-A.png',
		'both_sidebars' => get_template_directory_uri() . '/images/A-C-B.png',
		'fullwidth'     => get_template_directory_uri() . '/images/FW.png',
	);
}

/**
 * Sidebar choices.
 */
function canuck_sidebar_choices() {
	return array(
		'default-a' => esc_html__( 'Default Sidebar A', 'canuck' ),
		'default-b' => esc_html__( 'Default Sidebar B', 'canuck' ),
		'blog-a'    => esc_html__( 'Blog Sidebar A', 'canuck' ),
		'blog-b'    => esc_html__( 'Blog Sidebar B', 'canuck' ),
		'sidebar-1' => esc_html__( 'Extra Sidebar 1', 'canuck' ),
		'sidebar-2' => esc_html__( 'Extra Sidebar 2', 'canuck' ),
		'sidebar-3' => esc_html__( 'Extra Sidebar 3', 'canuck' ),
		'sidebar-4' => esc_html__( 'Extra Sidebar 4', 'canuck' ),
		'sidebar-5' => esc_html__( 'Extra Sidebar 5', 'canuck' ),
		'sidebar-6' => esc_html__( 'Extra Sidebar 6', 'canuck' ),
	);
}

/**
 * Font choices.
 */
function canuck_font_choices() {
	return array(
		'default'             => esc_html__( 'default', 'canuck' ),
		'Arial'               => esc_html__( 'Arial', 'canuck' ),
		'Artifika'            => esc_html__( 'Artifika', 'canuck' ),
		'Arvo'                => esc_html__( 'Arvo', 'canuck' ),
		'Book Antiqua'        => esc_html__( 'Book Antiqua', 'canuck' ),
		'Bubbler One'         => esc_html__( 'Bubbler One', 'canuck' ),
		'Cabin'               => esc_html__( 'Cabin', 'canuck' ),
		'Cambria'             => esc_html__( 'Cambria', 'canuck' ),
		'Comic Sans MS'       => esc_html__( 'Comic Sans MS', 'canuck' ),
		'Corben'              => esc_html__( 'Corben', 'canuck' ),
		'Droid Sans'          => esc_html__( 'Droid Sans', 'canuck' ),
		'Droid Serif'         => esc_html__( 'Droid Serif', 'canuck' ),
		'Great Vibes'         => esc_html__( 'Great Vibes', 'canuck' ),
		'Georgia'             => esc_html__( 'Georgia', 'canuck' ),
		'Josefin Sans'        => esc_html__( 'Josefin Sans', 'canuck' ),
		'Josefin Slab'        => esc_html__( 'Josefin Slab', 'canuck' ),
		'Karla'               => esc_html__( 'Karla', 'canuck' ),
		'Lato'                => esc_html__( 'Lato', 'canuck' ),
		'Lobster'             => esc_html__( 'Lobster', 'canuck' ),
		'Old Standard TT'     => esc_html__( 'Old Standard TT', 'canuck' ),
		'Open Sans'           => esc_html__( 'Open Sans', 'canuck' ),
		'Playfair Display SC' => esc_html__( 'Playfair Display SC', 'canuck' ),
		'PT Sans'             => esc_html__( 'PT Sans', 'canuck' ),
		'PT Sans'             => esc_html__( 'PT Sans', 'canuck' ),
		'PT Serif'            => esc_html__( 'PT Serif', 'canuck' ),
		'Puritan'             => esc_html__( 'Puritan', 'canuck' ),
		'Raleway'             => esc_html__( 'Raleway', 'canuck' ),
		'Rock Salt'           => esc_html__( 'Rock Salt', 'canuck' ),
		'Tahoma'              => esc_html__( 'Tahoma', 'canuck' ),
		'Times New Roman'     => esc_html__( 'Times New Roman', 'canuck' ),
		'Titillium Web'       => esc_html__( 'Titillium Web', 'canuck' ),
		'Trebuchet MS'        => esc_html__( 'Trebuchet MS', 'canuck' ),
		'Ubuntu'              => esc_html__( 'Ubuntu', 'canuck' ),
		'Verdana'             => esc_html__( 'Verdana', 'canuck' ),
		'Vollkorn'            => esc_html__( 'Vollkorn', 'canuck' ),
	);
}

/**
 *  Choices
 */
function canuck_home_area_choices() {
	return array(
		'Section 1'  => esc_html__( 'Section 1 - one column and button', 'canuck' ),
		'Section 2'  => esc_html__( 'Section 2 - three column service box', 'canuck' ),
		'Section 3'  => esc_html__( 'Section 3 - one column and button', 'canuck' ),
		'Section 4'  => esc_html__( 'Section 4 - two column service box', 'canuck' ),
		'Section 5'  => esc_html__( 'Section 5 - one column and button', 'canuck' ),
		'Section 6'  => esc_html__( 'Section 6 - two column service box', 'canuck' ),
		'Section 7'  => esc_html__( 'Section 7 - one column and button', 'canuck' ),
		'Section 8'  => esc_html__( 'Section 8 - four column service box', 'canuck' ),
		'Section 9'  => esc_html__( 'Section 9 - portfolio', 'canuck' ),
		'Section 10' => esc_html__( 'Section 10 - image left, content right', 'canuck' ),
		'Section 11' => esc_html__( 'Section 11 - content left, image right', 'canuck' ),
		'Section 12' => esc_html__( 'Section 12 - carousel medium size', 'canuck' ),
		'Section 13' => esc_html__( 'Section 13 - carousel small size', 'canuck' ),
		'none'       => esc_html__( 'none', 'canuck' ),
	);
}

/**
 *  Choices
 */
function canuck_opacity_range_choices() {
	return array(
		'min'   => 0,
		'max'   => 1,
		'step'  => 0.1,
		'class' => 'range1-class',
		'style' => 'color: #B26969',
	);
}

/**
 * =========================================================================================================
 *                       Sanitization callback functions
 * =========================================================================================================
 */
/**
 * Select sanitization callback
 *
 * - Sanitization: select
 * - Control: select, radio
 *
 * Sanitization callback for 'select' and 'radio' type controls. This callback sanitizes `$input`
 * as a slug, and then validates `$input` against the choices defined for the control.
 *
 * @see     sanitize_key()               https://developer.wordpress.org/reference/functions/sanitize_key/
 * @see     $wp_customize->get_control() https://developer.wordpress.org/reference/classes/wp_customize_manager/get_control/
 *
 * @param   string               $input   Slug to sanitize.
 * @param   WP_Customize_Setting $setting Setting instance.
 * @return  string Sanitized slug if it is a valid choice; otherwise, the setting default.
 * @link    https://github.com/WPTRT/code-examples/blob/master/customizer/sanitization-callbacks.php
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 */
function canuck_sanitize_select( $input, $setting ) {
	// Ensure input is a slug.
	$input = sanitize_key( $input );
	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;
	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}
/**
 * Whitelist font choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuck_sanitize_font_select( $input ) {
	$choices = array(
		'default',
		'Arial',
		'Artifika',
		'Arvo',
		'Book Antiqua',
		'Bubbler One',
		'Cabin',
		'Cambria',
		'Comic Sans MS',
		'Corben',
		'Droid Sans',
		'Droid Serif',
		'Great Vibes',
		'Georgia',
		'Josefin Sans',
		'Josefin Slab',
		'Karla',
		'Lato',
		'Lobster',
		'Old Standard TT',
		'Open Sans',
		'Playfair Display SC',
		'PT Sans',
		'PT Serif',
		'Puritan',
		'Raleway',
		'Rock Salt',
		'Tahoma',
		'Times New Roman',
		'Titillium Web',
		'Trebuchet MS',
		'Ubuntu',
		'Verdana',
		'Vollkorn',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'Open Sans'; // phpcs:ignore
	}
}

/**
 * Whitelist flex slider effect choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuck_sanitize_flex_effect( $input ) {
	$choices = array(
		'slide',
		'fade',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'fade';
	}
}

/**
 * Whitelist flex slider pause time choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuck_sanitize_flex_pause( $input ) {
	$choices = array(
		'4000',
		'5000',
		'6000',
		'7000',
		'8000',
		'9000',
		'10000',
		'11000',
		'12000',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return '5000';
	}
}

/**
 * Whitelist fex slider transform time choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuck_sanitize_flex_trans( $input ) {
	$choices = array(
		'500',
		'600',
		'750',
		'1000',
		'1250',
		'1500',
		'1750',
		'2000',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return '600';
	}
}

/**
 * Whitelist layout choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuck_sanitize_layout( $input ) {
	$choices = array(
		'left_sidebar',
		'right_sidebar',
		'both_sidebars',
		'fullwidth',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'right_sidebar';
	}
}

/**
 * Whitelist feature choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuck_sanitize_feature( $input ) {
	$choices = array(
		'background_image',
		'button_nav',
		'fullsize',
		'widgetized',
		'no_feature',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'background_image';
	}
}

/**
 * Whitelist home area section choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuck_sanitize_homearea_select( $input ) {
	$choices = array(
		'Section 1',
		'Section 2',
		'Section 3',
		'Section 4',
		'Section 5',
		'Section 6',
		'Section 7',
		'Section 8',
		'Section 9',
		'Section 10',
		'Section 11',
		'Section 12',
		'Section 13',
		'none',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'none';
	}
}

/**
 * Whitelist useage choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuck_sanitize_useage( $input ) {
	$choices = array(
		'normal',
		'shortcode',
		'widgetized',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'normal';
	}
}

/**
 * Whitelist blog choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuck_sanitize_blog_style( $input ) {
	$choices = array(
		'top_feature',
		'side_feature',
		'two_column_grid',
		'three_column_grid',
		'two_stamp',
		'three_stamp',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'top_feature';
	}
}

/**
 * Whitelist font display choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuck_sanitize_font_display( $input ) {
	$choices = array(
		'auto',
		'block',
		'swap',
		'fallback',
		'optional',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'auto';
	}
}

/**
 * Load customizer-control.js.
 */
function canuck_customize_control_js() {
	wp_enqueue_script( 'canuck_customizer_control', get_template_directory_uri() . '/js/kha-customizer-controls.js', array( 'customize-controls', 'jquery' ), null, true );
}
add_action( 'customize_controls_enqueue_scripts', 'canuck_customize_control_js' );
