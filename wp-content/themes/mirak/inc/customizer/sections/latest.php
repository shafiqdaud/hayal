<?php
/**
 * Home Page Options.
 *
 * @package Mirak
 */

$default = mirak_get_default_theme_options();

// Latest Latest Posts Section
$wp_customize->add_section( 'section_home_latest_posts',
	array(
		'title'      => __( 'Latest Posts Section', 'mirak' ),
		'priority'   => 110,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

// Latest Posts title
$wp_customize->add_setting('theme_options[latest_posts_title]', 
	array(
	'default'           => $default['latest_posts_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[latest_posts_title]', 
	array(
	'label'       => __('Section Title', 'mirak'),
	'section'     => 'section_home_latest_posts',   
	'settings'    => 'theme_options[latest_posts_title]',		
	'type'        => 'text'
	)
);
// Blog title
$wp_customize->add_setting('theme_options[latest_posts_subtitle]', 
	array(
	'default'           => $default['latest_posts_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_textarea_field'
	)
);

$wp_customize->add_control('theme_options[latest_posts_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'mirak'),
	'section'     => 'section_home_latest_posts',   
	'settings'    => 'theme_options[latest_posts_subtitle]',		
	'type'        => 'textarea'
	)
);

$wp_customize->add_setting('theme_options[latest_readmore_text]', 
	array(

	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[latest_readmore_text]', 
	array(
	'label'       => __('Button Label', 'mirak'),
	'section'     => 'section_home_latest_posts',   
	'settings'    => 'theme_options[latest_readmore_text]',	
	'type'        => 'text'
	)
);