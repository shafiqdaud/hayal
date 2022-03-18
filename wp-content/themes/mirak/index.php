<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BlogMelody
 */
get_header(); 
$latest_post_column = mirak_get_option( 'number_of_latest_posts_column' );
$latest_posts_title = mirak_get_option( 'latest_posts_title' ); 
$latest_posts_subtitle = mirak_get_option( 'latest_posts_subtitle' );
?>
	<div class="wrapper page-section">
		<div id="primary" class="content-area">
			<main id="main" class="site-main blog-posts-wrapper" role="main">
				<?php if( !empty($latest_posts_title) && 'posts' == get_option( 'show_on_front' )):?>
				<div class="section-header">
				   <?php if( !empty($latest_posts_title)):?>
		                <h2 class="section-title"><?php echo esc_html($latest_posts_title);?></h2>
		            <?php endif;?>
		            <?php if ( ! empty($latest_posts_subtitle ) ) : ?>
		                <p class="section-subtitle"><?php echo esc_html( $latest_posts_subtitle ); ?></p>
		            <?php endif; ?><!-- .section-header -->
		        </div>
			  	<?php endif;?>
				<div class="col-<?php echo esc_attr($latest_post_column) ?> <?php if($latest_post_column == 3) { ?> grid <?php } ?>">
				
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;
					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div><!-- .blog-archive-wrapper -->
				<?php 	/**
			* Hook - mirak_pagination_action.
			*
			* @hooked mirak_pagination 
			*/
			 do_action('mirak_pagination_action');?>
			</main><!-- #main -->
		</div><!-- #primary -->
		
		<?php get_sidebar(); ?>
	</div><!-- .wrapper/.page-section-->
<?php 
get_footer();