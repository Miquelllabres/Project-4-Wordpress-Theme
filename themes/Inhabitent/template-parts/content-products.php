
<?php
/**
 * Template part for displaying  products.
 *
 * @package Inhabitent
 */

?>
<?php  global $post; 
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 
					array( 5600,1000 ), false, '' ); 	?>

	<?php if(is_single()) { ?>

<article class="SingleProduct" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="single">
		<div class="singleP" style=" background:url(<?php echo $src[0]; ?> )center !important ;background-size:cover !important;">
		</div>
		
	<div class="entry-content">
		<div class="entry-meta">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<h2><?php	setlocale(LC_MONETARY, 'en_US');
					echo money_format('%.2n', get_field( 'price') ) ;  ?> </h2>
		</div>
	<div>
		<?php the_content(); ?>
		
	</div>
	<div class="social">
	<button style="font-size:16px"><i class="fa fa-facebook"></i>LIKE</button>
	<button style="font-size:16px"><i class="fa fa-twitter"></i>TWEET</button>
	<button style="font-size:16px"><i class="fa fa-pinterest"></i>PIN</button>


	</div>
<div>

</header>
</article>

<?php }else{ ?>
	
<div class="width2" >						 	
	<div class="width3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>   style=" background:url(<?php echo $src[0]; ?> )center !important ;background-size:cover !important;">
	</div>	
   	<div class="borderP">
			<?php the_title( sprintf( '<p class="productTitle"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ) ?>
			<p><?php	setlocale(LC_MONETARY, 'en_US');
			echo money_format('%.2n', get_field( 'price') ) ;  ?> </p>
										
	</div>
</div>

<?php	} ?>
		
