
<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
			
			<?php endwhile;  ?>


		</main>
	</div>

<?php get_footer(); ?>
