
<?php
/**
 * The single post template file.
 * 
 * @package Inhabitent
 */

get_header(); ?>

			<div id="SinglePost" class="featured-image-wrapper">
				<div class="main">
					<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'singlepost' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
</div><!-- #primary -->
				
				<?php get_sidebar(); ?>
			</div>



<?php get_footer(); ?>