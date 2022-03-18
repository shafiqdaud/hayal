<?php
    $enable_content     = mirak_get_option( 'about_content_enable' );
    $about_category = mirak_get_option( 'about_category' );
    $about_title = mirak_get_option('about_title');
    $about_subtitle  = mirak_get_option('about_subtitle');


?>
<?php if( !empty($about_title) || ! empty($about_subtitle ) ):?>
    <div class="section-header clear">
    <?php if( !empty($about_title)):?>
        <h2 class="section-title"><?php echo esc_html($about_title);?></h2>
    <?php endif;?>
    <?php if ( ! empty($about_subtitle ) ) : ?>
        <p class="section-subtitle"><?php echo esc_html( $about_subtitle ); ?></p>
    <?php endif; ?><!-- .section-header -->
    </div>
<?php endif;?>
<div class="section-content clear">
    
    <div class="about-slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite": true, "speed": 1200, "dots": true, "arrows":true, "autoplay": true, "fade": false }'>
        <?php 
            $args = array (

                'posts_per_page' =>5,              
                'post_type' => 'post',
                'post_status' => 'publish',
                'paged' => 1,
                'ignore_sticky_posts' => true, 
                );
                if ( absint( $about_category ) > 0 ) {
                    $args['cat'] = absint( $about_category );
                }
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
                $i=0;  
                while ($loop->have_posts()) : $loop->the_post(); $i++;?>           
                    <article class="<?php echo has_post_thumbnail() ? 'has-post-thumbnail' : 'no-post-thumbnail' ; ?>">
                        <div class="post-item-wrapper">

                                    <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'mirak-blog');?>');">
                                        <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                                        <div class="overlay"></div>
                                    </div><!-- .featured-image -->


                                <div class="entry-container">

                                        <div class="entry-meta">
                                            <?php mirak_entry_meta(); ?>
                                        </div><!-- .entry-meta -->
                                    <header class="entry-header">
                                        <h2 class="entry-title" ><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    </header>
                                    <?php if ( ($enable_content==true)): ?>
                                        <div class="entry-content">
                                            <?php 
                                                 $excerpt = mirak_the_excerpt( 10 );
                                                echo wp_kses_post( wpautop( $excerpt ) );
                                            ?>
                                        </div><!-- .entry-content -->
                                    <?php endif; ?>
                                        <div class="entry-meta">
                                            <?php mirak_posted_on(); ?>
                                        </div><!-- .entry-meta -->
                                </div><!-- .entry-container -->
                            </div><!-- .post-item-wrapper -->
                    </article>

                <?php endwhile;?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
    </div>
</div><!-- .section-content -->