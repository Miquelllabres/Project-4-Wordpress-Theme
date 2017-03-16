<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent
 */

get_header(); ?>


	<div id="archiveP" class="featured-image-wrapper">
		
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
				
					<?php display_taxonomies($query); ?>
			
						<?php if ( have_posts() ) : ?>

							<header class="page-header">
							<!-- 	<?php
									the_archive_title( '<h1 class="page-title">', '</h1>' );
									the_archive_description( '<div class="taxonomy-description">', '</div>' );
								?> -->
							</header>
							<?php  ?>
							<div id="products">
							<?php while ( have_posts() ) : the_post(); ?>
								
								
								<?php
									get_template_part( 'template-parts/content' ,get_post_type());
								?>
								
							<?php endwhile; ?>
							</div>
							<?php the_posts_navigation(); ?>

						<?php else : ?>

							<?php get_template_part( 'template-parts/content', 'none' ); ?>

						<?php endif; ?>

					</main>
				</div>




		
		
	</div>


<?php get_footer(); ?>