<?php
/**
 * The main template file.
 *
 * @package Inhabitent
 */

get_header(); ?>
<?php if ( has_post_thumbnail() ) : 	
	    global $post; 
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); 
		endif; ?>

				<div class="bannerPicture" style="background:linear-gradient(rgba(0,0,0,0.4),transparent),url(<?php echo $src[0]; ?> )center !important ; background-size:cover,cover !important;"">

					<?php $image = get_field('homeimage'); ?>

					<img class="logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				
				</div>
		
		<?php     $post_type = 'products';
					$taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
					foreach( $taxonomies as $taxonomy ) :
					    $terms = get_terms( $taxonomy );?>
					<div class="head uppercase">	<h1>shop stuff</h1>	</div>
					 <div class="flex">

					 <?php $term = $wp_query->queried_object; ?>
					   <?php foreach( $terms as $term ) : ?>

					 
					        <section class="borderp products">
					        <div id="logos">
				
									<!-- gets the taxonomy image -->
						<?php $taxoimage = wp_get_attachment_image_src(get_field('image',
						 $term->taxonomy . '_' . $term->term_id), 'small'); ?>

			        			  <img src="<?php echo $taxoimage[0]; ?>" alt="logo" 
			        			  class="placeholder" />

         					 </div>
					        <div class="span12">


					            <p><?php echo $term->description; ?></p>
					        </div>
					        <a href="<?php echo get_term_link( $term ); ?>">
					        <input class="button uppercase" type="submit" 
					        value="<?php echo $term->name." STUFF"; ?>"></input></a>
					 
					  
					       </section>
	 			<?php 	endforeach;?>
	 			</div>
				<?php	 endforeach;?>




		<?php	$query_blog = new WP_Query(array(
				"posts_per_page" => 3,
				'post_type' => 'post',
				"order"=> "ASC"
				
				));?>

				<div  class="head1 uppercase">	<h1>inhabitent journal</h1>	</div>
				<div id="JOURNAL" class="flex">
					<?php	while ( $query_blog->have_posts() ) : $query_blog->the_post(); ?>


						 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

								<header class="entry-header">
									<?php if ( 'post' === get_post_type() ) : ?>
									
									<?php endif; ?>

									<?php if ( has_post_thumbnail() ) : ?>
										<div class="featured-image-wrapper">
											<?php the_post_thumbnail(); ?>

										</div>
									<?php endif; ?>
									<div class="border">
									<span class="post-date"><?php echo  the_time(' F jS, Y') . ' / ' ,get_comments_number() .' Comments'; ?></span>

									<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
									<a href="<?php echo get_permalink( $post->ID ); ?>"><button>READ ENTRY</button></a>
									</div>
								</header><!-- .entry-header -->

								
							</article>

						<?php endwhile; // End of the loop. ?>
				</div>



				<?php	$query_adventures = new WP_Query(array(
				// "posts_per_page" => 3,
				'post_type' => 'adventures',
				"order"=> "ASC"
				
				));?>
<div class="head1 uppercase">	<h1>latest adventures</h1>	</div>
<div id="ADVEN" class=" flex width">

	<?php	$index = 0;
		while ( $query_adventures->have_posts() ) : $query_adventures->the_post(); ?>

			
				
					<?php if ( 'post' === get_post_type() ) : 		
							 endif; ?>
									<?php if ( has_post_thumbnail() ) : 	
								    global $post; 
								 $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); 
									?>
					<div id="post-<?php the_ID(); ?>" class="border <?php echo $class ?>" <?php post_class(); ?>  style=" background:linear-gradient(rgba(0,0,0,0.4),transparent),  url(<?php echo $src[0]; ?> )center !important ;background-size:cover,cover !important;">

					<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

				
				<a href="<?php echo get_permalink( $post->ID ); ?>">
				<input type="submit" value="READ MORE"></a>
			</div>
				<?php endif; ?>
								
				<?php	
				if($index == 0){ 
					$class = "border2" ?>
				 
							<div class="flex1 ">		
				<?php }if($index == 1) { 	
					$class = "border3"	?> 
								
								<div class="flex2">

				<?php }if($index == 2){  ?>
					
				<?php }if($index == 3){  ?>

								</div>
							</div>

				<?php } $index++;			
						
		
        endwhile;  ?>

</div>
<div class="width1"><a href="<?php echo get_post_type_archive_link( 'adventures' );?>"><input id="ADVENT" class="adventures" type="submit" value="MORE ADVENTURES"></a></div>


		


<?php get_footer(); ?>