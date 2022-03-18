<?php
/**
 * Active callback functions.
 *
 * @package Mirak
 */

function mirak_header_background_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_header_background_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function mirak_about_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_about_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function mirak_about_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( mirak_about_active( $control ) && ( 'about_custom' == $content_type ) );
} 

function mirak_about_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( mirak_about_active( $control ) && ( 'about_page' == $content_type ) );
}

function mirak_about_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( mirak_about_active( $control ) && ( 'about_post' == $content_type ) );
}

function mirak_about_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( mirak_about_active( $control ) && ( 'about_category' == $content_type ) );
}


function mirak_popular_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_popular_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function mirak_popular_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return ( mirak_popular_active( $control ) && ( 'popular_page' == $content_type ) );
}

function mirak_popular_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return ( mirak_popular_active( $control ) && ( 'popular_post' == $content_type ) );
}

function mirak_popular_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return ( mirak_popular_active( $control ) && ( 'popular_category' == $content_type ) );
}

function mirak_popular_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return ( mirak_popular_active( $control ) && ( 'popular_custom' == $content_type ) );
}

function mirak_popular_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return  mirak_popular_seperator( $control ) && ( in_array( $content_type, array( 'popular_page', 'popular_post', 'popular_custom' ) ) ) ;
}


function mirak_slider_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_featured-slider_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function mirak_slider_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( mirak_slider_active( $control ) && ( 'sr_page' == $content_type ) );
}

function mirak_slider_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( mirak_slider_active( $control ) && ( 'sr_post' == $content_type ) );
}

function mirak_slider_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return  mirak_slider_seperator( $control ) && ( in_array( $content_type, array( 'sr_page', 'sr_post', 'sr_custom' ) ) ) ;
}

function mirak_slider_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( mirak_slider_active( $control ) && ( 'sr_custom' == $content_type ) );
}

function mirak_slider_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( mirak_slider_active( $control ) && ( 'sr_category' == $content_type ) );
}


function mirak_blog_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_blog_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function mirak_blog_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( mirak_blog_active( $control ) && ( 'blog_page' == $content_type ) );
}

function mirak_blog_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( mirak_blog_active( $control ) && ( 'blog_post' == $content_type ) );
}

function mirak_blog_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( mirak_blog_active( $control ) && ( 'blog_category' == $content_type ) );
}

function mirak_message_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_message_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function mirak_message_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[message_content_type]' )->value();
    return ( mirak_message_active( $control ) && ( 'message_custom' == $content_type ) );
} 

function mirak_message_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[message_content_type]' )->value();
    return ( mirak_message_active( $control ) && ( 'message_page' == $content_type ) );
}

function mirak_message_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[message_content_type]' )->value();
    return ( mirak_message_active( $control ) && ( 'message_post' == $content_type ) );
}
function mirak_video_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_video_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function mirak_trending_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_trending_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function mirak_trending_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( mirak_trending_active( $control ) && ( 'trending_page' == $content_type ) );
}

function mirak_trending_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( mirak_trending_active( $control ) && ( 'trending_post' == $content_type ) );
}

function mirak_trending_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( mirak_trending_active( $control ) && ( 'trending_category' == $content_type ) );
}

function mirak_sensational_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_sensational_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function mirak_sensational_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sensational_content_type]' )->value();
    return ( mirak_sensational_active( $control ) && ( 'sensational_page' == $content_type ) );
}

function mirak_sensational_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sensational_content_type]' )->value();
    return ( mirak_sensational_active( $control ) && ( 'sensational_post' == $content_type ) );
}

function mirak_sensational_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sensational_content_type]' )->value();
    return ( mirak_sensational_active( $control ) && ( 'sensational_category' == $content_type ) );
}

function mirak_mustread_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_mustread_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function mirak_mustread_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[mustread_content_type]' )->value();
    return ( mirak_mustread_active( $control ) && ( 'mustread_page' == $content_type ) );
}

function mirak_mustread_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[mustread_content_type]' )->value();
    return ( mirak_mustread_active( $control ) && ( 'mustread_post' == $content_type ) );
}

function mirak_mustread_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[mustread_content_type]' )->value();
    return ( mirak_mustread_active( $control ) && ( 'mustread_category' == $content_type ) );
}

function mirak_tips_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_tips_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function mirak_tips_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[tips_content_type]' )->value();
    return ( mirak_tips_active( $control ) && ( 'tips_page' == $content_type ) );
}

function mirak_tips_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[tips_content_type]' )->value();
    return ( mirak_tips_active( $control ) && ( 'tips_post' == $content_type ) );
}

function mirak_tips_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[tips_content_type]' )->value();
    return ( mirak_tips_active( $control ) && ( 'tips_category' == $content_type ) );
}

function mirak_featured_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_featured_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function mirak_featured_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_content_type]' )->value();
    return ( mirak_featured_active( $control ) && ( 'featured_page' == $content_type ) );
}

function mirak_featured_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_content_type]' )->value();
    return ( mirak_featured_active( $control ) && ( 'featured_post' == $content_type ) );
}

function mirak_featured_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_content_type]' )->value();
    return ( mirak_featured_active( $control ) && ( 'featured_category' == $content_type ) );
}



/**
 * Active Callback for top bar section
 */
function mirak_contact_info_ac( $control ) {

    $show_contact_info = $control->manager->get_setting( 'theme_options[show_header_contact_info]')->value();
    $control_id        = $control->id;
         
    if ( $control_id == 'theme_options[header_location]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_email]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_phone]' && $show_contact_info ) return true;

    return false;
}

function mirak_social_links_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[show_header_social_links]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

