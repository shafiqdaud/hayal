<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( ! function_exists( 'indika_blog_enqueue_styles' ) ) :
    /**
     * Load assets.
     *
     * @since 1.0.0
     */
    function indika_blog_enqueue_styles() {
        wp_enqueue_style( 'mirak-style-parent', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'indika-blog-style', get_stylesheet_directory_uri() . '/style.css', array( 'mirak-style-parent' ), '1.0.0' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'indika_blog_enqueue_styles', 99 );

/**
 * Register custom fonts.
 */
function indika_blog_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Lota, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Lota font: on or off', 'indika-blog' ) ) {
		$fonts[] = 'Lota';
	}


	/* translators: If there are characters in your language that are not supported by Marck Script, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Marck Script font: on or off', 'indika-blog' ) ) {
		$fonts[] = 'Marck Script';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

if ( ! function_exists( 'indika_blog_get_default_theme_options' ) ) :

    /**
     * Get default theme options.
     *
     * @since 1.0.0
     *
     * @return array Default theme options.
     */
function indika_blog_get_default_theme_options() {

    $theme_data = wp_get_theme();
    $defaults = array();

    $defaults['disable_homepage_content_section'] 			= true;
    $defaults['show_header_social_links'] 	= false;
    $defaults['disable_header_background_section'] = false;
    $defaults['show_header_search'] 	= false;
    $defaults['header_layout_option'] 	= 'header-design-three';

	// Author Section
	$defaults['disable_message_section']	= false;
	$defaults['message_readmore_text']	 	= esc_html__( 'Read More', 'indika-blog' );
	$defaults['message_title_text']	 	= esc_html__( 'Hi ! I am', 'indika-blog' );

	// Latest Posts Section

	$defaults['latest_posts_title']	   	 	= esc_html__( 'Recent New More Stories', 'indika-blog' );
	$defaults['latest_posts_subtitle']	   	 	= esc_html__( 'Collect Memories!', 'indika-blog' );
	$defaults['pagination_type']		= 'default';
	$defaults['latest_category_enable']		= true;
	$defaults['latest_posted_on_enable']		= true;
	$defaults['latest_author_enable']		= true;
	$defaults['latest_video_enable']		= true;

	// About Section
	$defaults['disable_about_section']	= false;
	$defaults['number_of_about_items']			= 3;
	$defaults['about_layout_option']			= 'about-two';
	$defaults['about_content_enable']		= false;
	$defaults['about_title']	   	= esc_html__( ' Featured Posts', 'indika-blog' );
	$defaults['about_subtitle']	   	= esc_html__( 'I focus best in a place that has bright natural lightI focus best in a place that has bright natural light I focus best in a place that has bright natural light', 'indika-blog' );

	// Single Post Option
	$defaults['single_post_category_enable']		= true;
	$defaults['single_post_posted_on_enable']		= true;
	$defaults['single_post_video_enable']		= true;
	$defaults['single_post_comment_enable']		= true;
	$defaults['single_post_pagination_enable']		= true;
	$defaults['single_post_image_enable']		= true;
	$defaults['single_post_header_image_enable']		= true;
	$defaults['single_post_header_image_as_header_image_enable']		= true;

	// Single Post Option
	$defaults['single_page_video_enable']		= true;
	$defaults['single_page_image_enable']		= true;
	$defaults['single_page_header_image_enable']		= true;
	$defaults['single_page_header_image_as_header_image_enable']		= true;

	//General Section
	$defaults['readmore_text']				= esc_html__('Read More','indika-blog');
	$defaults['excerpt_length']				= 25;
	$defaults['layout_options_blog']			= 'no-sidebar';
	$defaults['layout_options_archive']			= 'no-sidebar';
	$defaults['layout_options_page']			= 'no-sidebar';	
	$defaults['layout_options_single']			= 'no-sidebar';	

	//Footer section 		
	$defaults['copyright_text']				= esc_html__( 'Copyright &copy; All rights reserved.', 'indika-blog' );

    return $defaults;
}
endif;
add_filter( 'mirak_filter_default_theme_options', 'indika_blog_get_default_theme_options', 99 );


if ( ! function_exists( 'indika_blog_customize_backend_styles' ) ) :
    /**
     * Load assets.
     *
     * @since 1.0.0
     */
    function indika_blog_customize_backend_styles() {
        wp_enqueue_style( 'indika-blog-style', get_stylesheet_directory_uri() . '/customizer-style.css' );
    }
endif;
add_action( 'customize_controls_enqueue_scripts', 'indika_blog_customize_backend_styles', 99 );