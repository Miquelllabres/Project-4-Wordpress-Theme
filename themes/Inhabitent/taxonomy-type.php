taxonomie
<?php
/**
 * The template for displaying taxonomy pages.
 *
 * @package Inhabitent
 */

get_header(); ?>

	<div id="taxonomy" class="content-area">
		

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					single_term_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<hr>
			</header><!-- .page-header -->
			<main id="main" class="site-main" role="main">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
							<?php 
								    global $post; 
								 $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); 
							?>
						
						<?php endif; ?>
				<div class="postWrapper">
						<div class="posts" style="background:url(<?php echo $src[0]; ?> )center !important ;background-size:cover !important;">
							
						

					    </div>
						<div class="flex">
								<?php the_title( sprintf( '<p class="productTitle"><a href="%s"rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ) ?>
								<p><?php	setlocale(LC_MONETARY, 'en_US');
								echo money_format('%.2n', get_field( 'price') ) ;  ?> </p>
										
						</div>	
				</div>
									
			<?php endwhile; ?>

			
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
