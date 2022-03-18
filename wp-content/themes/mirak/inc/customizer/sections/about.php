<?php
/**
 * Post Slider options.
 *
 * @package Mirak
 */

$default = mirak_get_default_theme_options();

// Post Slider Author Section
$wp_customize->add_section( 'section_home_about',
	array(
		'title'      => __( 'Posts Slider', 'mirak' ),
		'priority'   => 15,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_about_section]',
	array(
		'default'           => $default['disable_about_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'mirak_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Mirak_Switch_Control( $wp_customize, 'theme_options[disable_about_section]',
    array(
		'label' 			=> __('Enable/Disable Post Slider Section', 'mirak'),
		'section'    		=> 'section_home_about',
		 'settings'  		=> 'theme_options[disable_about_section]',
		'on_off_label' 		=> mirak_switch_options(),
    )
) );


// Add posted on enable setting and control.
$wp_customize->add_setting( 'theme_options[about_content_enable]', array(
	'default'           => $default['about_content_enable'],
	'sanitize_callback' => 'mirak_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[about_content_enable]', array(
	'label'             => esc_html__( 'Enable Content', 'mirak' ),
	'section'           => 'section_home_about',
	'type'              => 'checkbox',
	'active_callback' => 'mirak_about_active',
) );

// Blog title
$wp_customize->add_setting('theme_options[about_title]', 
	array(
	'default'           => $default['about_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[about_title]', 
	array(
	'label'       => __('Section Title', 'mirak'),
	'section'     => 'section_home_about',   
	'settings'    => 'theme_options[about_title]',	
	'active_callback' => 'mirak_about_active',		
	'type'        => 'text'
	)
);

// Blog title
$wp_customize->add_setting('theme_options[about_subtitle]', 
	array(
	'default'           => $default['about_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[about_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'mirak'),
	'section'     => 'section_home_about',   
	'settings'    => 'theme_options[about_subtitle]',	
	'active_callback' => 'mirak_about_active',		
	'type'        => 'text'
	)
);


// Setting  Team Category.
$wp_customize->add_setting( 'theme_options[about_category]',
	array(

	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new Mirak_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[about_category]',
		array(
		'label'    => __( 'Select Category', 'mirak' ),
		'section'  => 'section_home_about',
		'settings' => 'theme_options[about_category]',	
		'active_callback' => 'mirak_about_active',		
		)
	)
);
