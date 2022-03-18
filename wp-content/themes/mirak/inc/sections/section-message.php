<?php 
/**
 * Template part for displaying Author Section
 *
 *@package BlogBee Pro
 */

    $btn_text = mirak_get_option( 'message_readmore_text');
    $title_text = mirak_get_option( 'message_title_text');
    $author_show_social = mirak_get_option( 'author_social_link');
   
    ?>  
    <?php 
        $message_id = mirak_get_option( 'message_page' );
            $args = array (
            'post_type'     => 'page',
            'posts_per_page' => 1,
            'p' => $message_id,
        
    ); 
    $the_query = new WP_Query( $args );

    // The Loop
    while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>
        <div class="section-content">
            
            <?php if(has_post_thumbnail()) : ?>
                <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url('full');?>');">
                    <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                </div><!-- .featured-image -->
            <?php endif; ?>
            <div class="entry-container">
                <div class="entry-header">
                    <h2 class="entry-title">
                        <?php if (!empty($title_text)): ?>
                            <span><?php echo esc_html($title_text); ?></span>
                        <?php endif ?>
                        <?php the_title(); ?>
                    </h2>
                </div><!-- .section-header -->

                <div class="section-content">
                    <?php  
                        $excerpt = mirak_the_excerpt( 35 );
                        echo wp_kses_post( wpautop( $excerpt ) );
                    ?>
                </div><!-- .entry-content -->

                <div class="separator"></div>

                <?php  
                 if ( ! empty( $author_show_social ) || !empty($btn_text) ) : ?>
                    <div class="share-message">
                        <ul class="social-icons">
                            <?php if ( !empty($btn_text) ) : ?>
                                <a href="<?php the_permalink(); ?>" class="btn more-link"><?php echo esc_html($btn_text); ?></a>
                            <?php endif; ?>
                            <?php
                            for ($i=0; $i <=3 ; $i++) { 
                              $author_show_social   = mirak_get_option( 'author_social_link_' . $i );
                                if ( isset( $author_show_social ) && !empty( $author_show_social) ) { 
                                ?>
                                    <li><a href=" <?php echo esc_url($author_show_social); ?>" target="_blank"></a></li>
                                <?php } } ?>
                        </ul>
                    </div><!-- .share-message -->
                <?php endif; ?>
            </div>
        </div><!-- .section-content --> 
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>