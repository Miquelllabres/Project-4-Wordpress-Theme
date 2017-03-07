archive-products
<?php
/**
 * Template Name: archive products
 *
 * @package Inhabitent
 */

get_header(); ?>
	
				<?php	$query_products = new WP_Query(array(
				"posts_per_page" => -1,
				'post_type' => 'products',
				"order"=> "ASC"
				
				));?>


				<?php     $post_type = 'products';

						  $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
					      
					      $terms = get_terms( $taxonomies );?>
					<div class="head uppercase">	<h1>shop stuff</h1>	</div>
					 <div id="archiveP">
					 <div class="flexP width">
					   <?php foreach( $terms as $term ) : ?>
					 
					        
					        <div class="teal marginxs uppercase">
					        	<a href="<?php echo get_term_link( $term ); ?>"><p><?php echo $term->name; ?></p></a>
					        </div>  
					       
	 			<?php 	endforeach;?>
	 			</div>
	 			</div>
				
				

				
				<div id="products">
					<?php	while ( $query_products->have_posts() ) : $query_products->the_post(); ?>


						 
									<?php if ( 'post' === get_post_type() ) : ?>
									
									<?php endif; ?>

									<?php if ( has_post_thumbnail() ) : ?>
										<?php 
								    global $post; 
								 $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); 

								?>
								<div class="width2" >
										<div class="width3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>   style=" background:url(<?php echo $src[0]; ?> )center !important ;background-size:cover !important;">
										</div>	
											<div class="borderP">

									<?php the_title( sprintf( '<p class="productTitle"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ) ?>
								<p><?php	setlocale(LC_MONETARY, 'en_US');
					echo money_format('%.2n', get_field( 'price') ) ;  ?> </p>
								
									</div>
								</div>
										
									<?php endif; ?>
									
								

						<?php endwhile; // End of the loop. ?>
				</div>

  
<?php get_footer(); ?>
