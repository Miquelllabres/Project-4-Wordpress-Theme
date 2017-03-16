<?php
/**
 * Template part for displaying single products.
 *
 * @package Inhabitent
 */

?>
<?php	global $post; 
		    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>

		<?php if(is_single()) { ?>

<article class="singleadventure" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
					<?php the_post_thumbnail( 'large' ); ?>
	</header>	
	<div class="box">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-content">
					<?php the_content(); ?>
					
		</div>
		<div class="social">
			<button style="font-size:16px"><i class="fa fa-facebook"></i>LIKE</button>
			<button style="font-size:16px"><i class="fa fa-twitter"></i>TWEET</button>
			<button style="font-size:16px"><i class="fa fa-pinterest"></i>PIN</button>
		</div>
	</div>
</article>

		<?php		}else{ ?>

<div id="ADVENARC" class="widthP">
			<div class="borderA productsWidth" id="post-<?php the_ID(); ?>" style=" background:linear-gradient(rgba(0,0,0,0.4),transparent),  url(<?php echo $src[0]; ?> )center !important ;background-size:cover,cover !important;" <?php post_class(); ?> >
											
				<?php the_title( sprintf( '<h2 class="advenEntry"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<a href="<?php echo get_permalink( $post->ID ); ?>">
				<input type="submit" value="READ MORE"></a>
			</div>
</div>

			<?php		}?>


					