
<?php
/**
 * Template part for displaying post.
 *
 * @package Inhabitent
 */

?>

<?php    global $post; 
	    			 $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 
	    		 	array( 5600,1000 ), false, '' ); ?>

			<?php if(is_single()) { ?>

<div class="flexo">	
	<article class="width" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">	
			<div id="journa" style=" background: url(<?php echo $src[0]; ?> )center bottom !important ;background-size:cover !important;" >

				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			</div>
		</header>
			<div class="journal-content">
				<?php the_content(); ?>
			</div>
				<div class="social">
					<button style="font-size:16px"><i class="fa fa-facebook"></i>LIKE</button>
					<button style="font-size:16px"><i class="fa fa-twitter"></i>TWEET</button>
					<button style="font-size:16px"><i class="fa fa-pinterest"></i>PIN</button>
				</div>
	</article>

		<?php
		get_sidebar();	?>
		</div>
		<div class="width">
		<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;?>
		</div>	

	<?php	}else{ ?>

<div>
	<div  class="featured-image-wrapper">
		<div>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div id="journa" style=" background: url(<?php echo $src[0]; ?> )center bottom !important ;background-size:cover !important;" >

				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				</div>
		
				<div class="journal-content">
					<?php the_excerpt(); ?>
					<a href="<?php echo get_permalink( $post->ID ); ?>"><input type="text" value="READ MORE &rarr;"></a>
				</div>
			</article>
		</div>
	</div>
</div>


<?php	}
	?>

