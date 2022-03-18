<?php
/**
 * Author options.
 *
 * @package Mirak
 */

$default = mirak_get_default_theme_options();

// Author Section
$wp_customize->add_section( 'section_home_message',
	array(
		'title'      => __( 'Author Introduction Section', 'mirak' ),
		'priority'   => 10,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_message_section]',
	array(
		'default'           => $default['disable_message_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'mirak_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Mirak_Switch_Control( $wp_customize, 'theme_options[disable_message_section]',
    array(
		'label' 			=> __('Enable/Disable Author Section', 'mirak'),
		'section'    		=> 'section_home_message',
		'settings'  		=> 'theme_options[disable_message_section]',
		'on_off_label' 		=> mirak_switch_options(),
    )
) );

//Features Section title
$wp_customize->add_setting('theme_options[message_title_text]', 
	array(
	'default'           => $default['message_title_text'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[message_title_text]', 
	array(
	'label'       => __('Button Text', 'mirak'),
	'section'     => 'section_home_message',   
	'settings'    => 'theme_options[message_title_text]',
	'active_callback' => 'mirak_message_active',		
	'type'        => 'text'
	)
);

// Additional Information First Page
	$wp_customize->add_setting('theme_options[message_page]', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'mirak_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[message_page]', 
		array(
		'label'       => __('Select Page mirak', 'mirak'),
		'section'     => 'section_home_message',   
		'settings'    => 'theme_options[message_page]',		
		'type'        => 'dropdown-pages',
		'active_callback' => 'mirak_message_active',
		)
	);


//Features Section title
$wp_customize->add_setting('theme_options[message_readmore_text]', 
	array(
	'default'           => $default['message_readmore_text'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[message_readmore_text]', 
	array(
	'label'       => __('Button Text', 'mirak'),
	'section'     => 'section_home_message',   
	'settings'    => 'theme_options[message_readmore_text]',
	'active_callback' => 'mirak_message_active',		
	'type'        => 'text'
	)
);
for( $i=1; $i<=3; $i++ ){

    // Setting social_links.
    $wp_customize->add_setting('theme_options[author_social_link_'.$i.']', array(
            'sanitize_callback' => 'esc_url_raw',
        ) );

    $wp_customize->add_control('theme_options[author_social_link_'.$i.']', array(
        'label'             => esc_html__( 'Social Links', 'mirak' ),
        'section'           => 'section_home_message',
        'active_callback'   => 'mirak_message_active',
        'type'              => 'url',
    ) );
}

