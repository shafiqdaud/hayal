<?php 
/**
 * List of posts for post choices.
 * @return Array Array of post ids and name.
 */
function mirak_post_choices() {
    $posts = get_posts( array( 'numberposts' => -1 ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'mirak' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    return  $choices;
}

if ( ! function_exists( 'mirak_switch_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function mirak_switch_options() {
        $arr = array(
            'on'        => esc_html__( 'Enable', 'mirak' ),
            'off'       => esc_html__( 'Disable', 'mirak' )
        );
        return apply_filters( 'mirak_switch_options', $arr );
    }
endif;


 /**
 * Get an array of google fonts.
 * 
 */
function mirak_font_choices() {
    $font_family_arr = array();
    $font_family_arr[''] = esc_html__( '--Default--', 'mirak' );

    // Make the request
    $request = wp_remote_get( get_theme_file_uri( 'assets/fonts/webfonts.json' ) );

    if( is_wp_error( $request ) ) {
        return false; // Bail early
    }
    // Retrieve the data
    $body = wp_remote_retrieve_body( $request );
    $data = json_decode( $body );
    if ( ! empty( $data ) ) {
        foreach ( $data->items as $items => $fonts ) {
            $family_str_arr = explode( ' ', $fonts->family );
            $family_value = implode( '-', array_map( 'strtolower', $family_str_arr ) );
            $font_family_arr[ $family_value ] = $fonts->family;
        }
    }

    return apply_filters( 'mirak_font_choices', $font_family_arr );
}

if ( ! function_exists( 'mirak_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function mirak_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'mirak' ),
            'header-font-1'   => esc_html__( 'Raleway', 'mirak' ),
            'header-font-2'   => esc_html__( 'Poppins', 'mirak' ),
            'header-font-3'   => esc_html__( 'Montserrat', 'mirak' ),
            'header-font-4'   => esc_html__( 'Open Sans', 'mirak' ),
            'header-font-5'   => esc_html__( 'Lato', 'mirak' ),
            'header-font-6'   => esc_html__( 'Ubuntu', 'mirak' ),
            'header-font-7'   => esc_html__( 'Playfair Display', 'mirak' ),
            'header-font-8'   => esc_html__( 'Lora', 'mirak' ),
            'header-font-9'   => esc_html__( 'Titillium Web', 'mirak' ),
            'header-font-10'   => esc_html__( 'Muli', 'mirak' ),
            'header-font-11'   => esc_html__( 'Oxygen', 'mirak' ),
            'header-font-12'   => esc_html__( 'Nunito Sans', 'mirak' ),
            'header-font-13'   => esc_html__( 'Maven Pro', 'mirak' ),
            'header-font-14'   => esc_html__( 'Cairo', 'mirak' ),
            'header-font-15'   => esc_html__( 'Philosopher', 'mirak' ),
            'header-font-16'   => esc_html__( 'Quicksand', 'mirak' ),
            'header-font-17'   => esc_html__( 'Henny Penny', 'mirak' ),
            'header-font-18'   => esc_html__( 'Fredericka', 'mirak' ),
            'header-font-19'   => esc_html__( 'Marck Script', 'mirak' ),
            'header-font-20'   => esc_html__( 'Kaushan Script', 'mirak' ),
        );

        $output = apply_filters( 'mirak_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;


if ( ! function_exists( 'mirak_body_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function mirak_body_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'mirak' ),
            'body-font-1'     => esc_html__( 'Raleway', 'mirak' ),
            'body-font-2'     => esc_html__( 'Poppins', 'mirak' ),
            'body-font-3'     => esc_html__( 'Roboto', 'mirak' ),
            'body-font-4'     => esc_html__( 'Open Sans', 'mirak' ),
            'body-font-5'     => esc_html__( 'Lato', 'mirak' ),
            'body-font-6'   => esc_html__( 'Ubuntu', 'mirak' ),
            'body-font-7'   => esc_html__( 'Playfair Display', 'mirak' ),
            'body-font-8'   => esc_html__( 'Lora', 'mirak' ),
            'body-font-9'   => esc_html__( 'Titillium Web', 'mirak' ),
            'body-font-10'   => esc_html__( 'Muli', 'mirak' ),
            'body-font-11'   => esc_html__( 'Oxygen', 'mirak' ),
            'body-font-12'   => esc_html__( 'Nunito Sans', 'mirak' ),
            'body-font-13'   => esc_html__( 'Maven Pro', 'mirak' ),
            'body-font-14'   => esc_html__( 'Cairo', 'mirak' ),
            'body-font-15'   => esc_html__( 'Philosopher', 'mirak' ),
        );

        $output = apply_filters( 'mirak_body_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;

 ?>