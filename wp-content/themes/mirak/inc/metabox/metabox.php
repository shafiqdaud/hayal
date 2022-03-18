<?php
/**
 * Mirak metabox file.
 *
 * This is the template that includes all the other files for metaboxes of Mirak theme
 *
 * @package Mirak
 * @since Mirak 0.1
 */

// Include Post subtitle meta
require get_template_directory() . '/inc/metabox/video-url.php'; 




if ( ! function_exists( 'mirak_custom_meta' ) ) : 
    /**
     * Adds meta box to the post editing screen
     */
    function mirak_custom_meta() {
        $post_type = array( 'post', 'page' );

        // POST Subtitle 
        add_meta_box( 'mirak_video_url', esc_html__( 'Video Links', 'mirak' ), 'mirak_video_url_callback', $post_type );
               
    }
endif;
add_action( 'add_meta_boxes', 'mirak_custom_meta' );


