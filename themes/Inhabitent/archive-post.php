archive-post
<?php
/**
 * Template Name: archive post
 *
 * @package Inhabitent
 */

get_header(); ?>


		<!-- #primary -->
<div id="find" class="featured-image-wrapper">
				<div class="main">
					<?php	$query_blog = new WP_Query(array(
				"posts_per_page" => 4,
				'post_type' => 'post',
				"order"=> "ASC"
				
				));?>


		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( $query_blog->have_posts() ) : $query_blog->the_post(); ?>

				<?php
					get_template_part( 'template-parts/content','journal' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	
				</div>
				<?php get_sidebar(); ?>

			</div>

<?php get_footer(); ?>
