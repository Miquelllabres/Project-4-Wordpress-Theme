archive-adventures
<?php
/**
 * Template Name: archive adventures
 *
 * @package Inhabitent
 */

get_header(); ?>
	
				<?php	$query_adventures = new WP_Query(array(
				// "posts_per_page" => 3,
				'post_type' => 'adventures',
				"order"=> "ASC"
				
				));?>
				
				<div class="head1 uppercase">	<h1>latest adventures</h1>	</div>
					<div id="ADVEN" class="flex-container">

							<?php	while ( $query_adventures->have_posts() ) : $query_adventures->the_post(); ?>
								
									<?php if ( 'post' === get_post_type() ) : ?>
									
									<?php endif; ?>

									<?php if ( has_post_thumbnail() ) : ?>
										<?php 
								    global $post; 
								 $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); 
									?>

										<div class=" featured-image-wrapper  borderA width2" id="post-<?php the_ID(); ?>" style=" background:linear-gradient(rgba(0,0,0,0.4),transparent),  url(<?php echo $src[0]; ?> )center !important ;background-size:cover,cover !important;" <?php post_class(); ?> >
											
											<?php the_title( sprintf( '<h2 class="advenEntry"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
											<input type="submit" value="READ MORE">
										</div>
									<?php endif; ?>
							<?php endwhile; ?>
					</div>
  
<?php get_footer(); ?>
