<?php 
 /*
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mirak
 */
?>
<?php 
	$enable_video = mirak_get_option( 'single_post_video_enable' );
	$enable_category     = mirak_get_option( 'single_post_category_enable' );
    $enable_posted_on     = mirak_get_option( 'single_post_posted_on_enable' );
    $enable_image     = mirak_get_option( 'single_post_image_enable' );
    $enable_header_image     = mirak_get_option( 'single_post_header_image_enable' );
 ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ($enable_header_image==false): ?>
		<header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
	<?php endif ?>
	<div class="entry-meta">
		<?php 
			mirak_posted_on();
			mirak_entry_meta();
			mirak_author(); 
		?>
	</div><!-- .entry-meta -->	

	<div class="featured-image">
        <?php the_post_thumbnail( 'full', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
	</div><!-- .featured-post-image -->
	<div class="entry-content">
		
		<?php the_content(); ?>
		<?php 
			$video_url = get_post_meta( get_the_ID(), 'mirak-video-url', true );
            if ( ! empty( $video_url ) ) { ?>
				<div class="featured-video">
		            <?php echo do_shortcode( '[video src="' . esc_url( $video_url ) . '"]' );?>
		        </div><!-- .featured-image -->
		    <?php } ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mirak' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php mirak_posts_tags(); ?>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'mirak' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>	
</article><!-- #post-## -->