<?php
/**
 * Home Page Options.
 *
 * @package Mirak
 */

$default = mirak_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'home_page_panel',
	array(
	'title'      => __( 'Front Page Sections', 'mirak' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

/**
* Section Customizer Options.
*/

require get_template_directory() . '/inc/customizer/sections/message.php';
require get_template_directory() . '/inc/customizer/sections/about.php';
require get_template_directory() . '/inc/customizer/sections/latest.php';
