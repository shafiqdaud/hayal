<?php
/**
 * The template for displaying home page.
 * @package Mirak
 */

if ( 'posts' == get_option( 'show_on_front' )  || 'posts' != get_option( 'show_on_front' )){ 
    get_header(); ?>
    <?php $enabled_sections = mirak_get_sections();
    if( is_array( $enabled_sections ) ) {
        foreach( $enabled_sections as $section ) { ?>

            <?php if( $section['id'] == 'message' ) { ?>
                <?php $disable_message_section = mirak_get_option( 'disable_message_section' );
                if( true ==$disable_message_section): ?>
                
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
                    
            <?php endif; ?> 

            <?php } elseif( $section['id'] == 'about' ) { ?>
                <?php $disable_about_section = mirak_get_option( 'disable_about_section' );
                if( true ==$disable_about_section): ?>
                
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
                    
            <?php endif; ?>   

           <?php
            }
        }
    }
    $disable_homepage_content_section = mirak_get_option( 'disable_homepage_content_section' );
    if('posts' == get_option( 'show_on_front' )){ ?>
       <?php include( get_home_template() ); ?>
    <?php } elseif(($disable_homepage_content_section == true ) && ('posts' != get_option( 'show_on_front' ))) { ?>
        <div class="wrapper">
           <?php include( get_page_template() ); ?>
        </div>
     <?php  }
    get_footer();
} ?>