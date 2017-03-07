<?php
/**
 * The single product template file.
 * Template Name:Single Product
 * @package Inhabitent
 */

get_header(); ?>

			<div id="find" class="featured-image-wrapper">
				<div class="mainSingleProduct">
					<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'products' ); ?>

			

			
		<?php endwhile; // End of the loop. ?>
</div><!-- #primary -->
				
			
			</div>



<?php get_footer(); ?>