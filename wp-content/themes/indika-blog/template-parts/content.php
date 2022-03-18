<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mirak
 */
?>
<article id="post-<?php the_ID(); ?>" class="<?php echo has_post_thumbnail() ? 'has-post-thumbnail' : 'no-post-thumbnail' ; ?> ">
	<div class="post-item">

		<?php if ( has_post_thumbnail()) { ?>

                <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full');?>');">
                    <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                </div><!-- .featured-image -->
                <?php $homepage_video_url = get_post_meta( get_the_ID(), 'mirak-video-url', true ); ?>
                <?php if (!empty($homepage_video_url) ): ?>
                   <a href="<?php the_permalink();?>"> <div class="homepage-video-icon"><i class="fa fa-play"></i></div></a>
                <?php endif ?>
		<?php } ?>
		
		<div class="entry-container">
			<header class="entry-header">	
			<div class="entry-meta">
				<?php mirak_entry_meta(); ?>
			</div><!-- .entry-meta -->			
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</header><!-- .entry-header -->
			<div class="entry-meta">
				<?php mirak_posted_on(); ?>
				<?php mirak_author(); ?>
			</div><!-- .entry-meta -->
			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
			<?php $latest_readmore_text = mirak_get_option( 'latest_readmore_text' );
	        if (!empty ($latest_readmore_text)) { ?>
	          <div class="latest-read-more"><a href="<?php the_permalink();?>" class="btn"><?php echo esc_html($latest_readmore_text);?></a> </div>
        <?php } ?>
		</div><!-- .entry-container -->
		
	</div><!-- .post-item -->
</article><!-- #post-## -->
